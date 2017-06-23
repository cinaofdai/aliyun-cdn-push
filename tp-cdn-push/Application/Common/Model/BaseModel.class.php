<?php
/**
 * Created by dh2y
 * email: xiaodai54_long@163.com
 * Date: 2017/6/21 10:58
 * describ: 描述说明
 */

namespace Common\Model;


use Think\Model;

class BaseModel extends Model
{
    protected $labels = [];
    public $scenario = false;

    public function create($data=''){
        $data = $this->load($data);
        return parent::create($data);
    }

    //基模型，自动加载参数
    public function load($data=''){
        if(!isset($data)||$data==[]||$data==''){
            $data = I('post.');
        }

        //如果有验证场景-取验证场景
        if($this->scenario&&$this->scenario!=''){
            $labels = $this->scenarios();
            $this->labels =$labels[$this->scenario];
        }

        return $this->labels = array_merge($this->labels,$data);
    }

}