<?php
/**
 * Created by dh2y
 * email: xiaodai54_long@163.com
 * Date: 2017/6/26 10:42
 * describ: 描述说明
 */

namespace Admin\Model;


use Common\Model\BaseModel;

class NodeModel extends BaseModel
{
    protected $tableName = 'node';

    protected $labels = ['name'=>'','title'=>'','status'=>1,'sort'=>99,'pid'=>1,'level'=>2];

    //自动验证
    protected $_validate = array(
        ['name','require','节点必须！'],
        ['title','require','节点中文名必须！'],
        ['name','/^[A-Za-z0-9]+$/','老铁！只能是英文数字'],
        ['pid','/^[1-9]\d*$/','父节点整形'],
        ['sort','/^[0-9]\d*$/','排序序号整形'],
        ['level',[2,3],'节点类型错误！',2,'in'],//状态,1开启，0关闭
    );

    //数据操作
    public function store($data){
        $action =( isset($data[$this->pk])&&$data[$this->pk]!='') ? "save" : "add";
        if ($this->create($data)) {
            if($this->$action($this->labels)){
                return ['status' => true, 'message' => '数据操作成功'];
            }
        }
        return ['status' => false, 'message' => $this->getError()];
    }


    /**
     * 获取树形数据
     * @return array
     */
    public function getTreeList(){
        $map['id'] = ['neq' ,1];
        $datalist = $this->where($map)->order('sort')->select();
        $List = $this->getTree(1,$datalist);
        return $List;
    }

    /**
     * 获取节点树形列表
     * @param $id
     * @param $datalist
     * @return array
     */
    private function getTree($id,$datalist){
        foreach($datalist as $key=>$val){
            if($id == $val['pid']){
                $val['son'] = $this->getTree($val['id'],$datalist);
                if(empty($val['son'])){
                    unset($val['son']);
                }
                $arr[] = $val;
            }
        }
        return $arr;
    }


    public function deleteNode($id)
    {
        $map['pid'] = $id;
        $son = $this->where($map)->find();
        if(!$son){
           if( $this->delete($id)){
               return ['status' => true, 'message' => '删除成功'];
           }
           return ['status' => false, 'message' => '异常，删除失败'];
        }
        return ['status' => false, 'message' => '存在子节点删除失败'];
    }

    /**
     *  创建节点(此方法cli调用)
     * @param $name   //项目|模板|方法
     * @param $level  //1 分组，2 控制器，3 方法
     * @param $pid    //父及ID 默认为1
     * @return mixed
     */
    public function createNode($name,$level,$pid=1,$title=false){
        $map['status'] = 1;
        $map['name'] = $name;
        $map['pid'] = $pid;
        $title?($map['title']=$title):false;
        $map['level'] = $level;
        if($level==2){
            $map['pid'] = 1;
        }
        return $this->add($map);
    }

    /**
     * 清空并且初始化表(此方法cli调用)
     * @param bool $auto
     */
    public function clearInit($auto=false){
        $map['id'] = ['neq' ,1];
        $this->where($map)->delete();
        if($auto==true){
            M()->query('ALTER TABLE '.C('DB_PREFIX').$this->tableName.' AUTO_INCREMENT=2');
        }
    }

}