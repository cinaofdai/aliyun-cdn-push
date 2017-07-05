<?php
/**
 * Created by dh2y.
 * bolg: http://blog.csdn.net/sinat_22878395
 * Date: 2017/7/4 16:13
 * functional: 功能说明
 */

namespace Admin\Model;


use Common\Model\BaseModel;
use Common\Org\Data;

class MenuModel extends BaseModel
{
    protected $tableName = 'menu';

    protected $labels = ['pid'=>'','title'=>'','sort'=>99];

    //自动验证
    protected $_validate = array(
        ['pid','require',['tag'=>'pid','error'=>'请选择上级菜单']],
        ['title','require',['tag'=>'title','error'=>'菜单名称必须']],
        ['sort','/^[0-9]\d*$/',['tag'=>'sort','error'=>'排序序号整形']],
    );


    public function store($data){
        $action = isset($data[$this->pk]) ? "save" : "add";
        if ($this->create($data)) {
            if($this->$action($this->labels)){
                return ['status' => true, 'message' => '数据操作成功'];
            }
        }
        return ['status' => false, 'message' => $this->getError()];
    }


    /**
     * 菜单列表
     */
    public function lists(){
        $data = $this->select();
        return Data::tree($data,'title', $fieldPri = 'id');
    }

}