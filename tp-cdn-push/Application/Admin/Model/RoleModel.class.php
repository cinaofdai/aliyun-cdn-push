<?php
/**
 * Created by dh2y
 * email: xiaodai54_long@163.com
 * Date: 2017/6/26 10:42
 * describ: 描述说明
 */

namespace Admin\Model;


use Common\Model\BaseModel;

class RoleModel extends BaseModel
{
    protected $tableName = 'role';

    protected $labels = ['name'=>'','status'=>1];

    //自动验证
    protected $_validate = array(
        ['name','require',['tag'=>'name','error'=>'角色名必须！']],
        ['name','',['tag'=>'name','error'=>'角色名已经存在！'],0,'unique'],
        ['status',[0,1],['tag'=>'status','error'=>'状态不合法！'],2,'in'],//状态,1开启，0关闭
    );


    //数据操作
    public function store($data){

        $action = isset($data[$this->pk]) ? "save" : "add";
        if ($this->create($data)) {
            $this->labels['status'] = ($this->labels['status']=='true')?1:0;
            if($this->$action($this->labels)){
                return ['status' => true, 'message' => '数据操作成功'];
            }
        }
        $error = $this->getError();
        return ['status' => false,'tag'=>$error['tag'], 'message' => $error['error']];
    }

}