<?php
/**
 * Created by dh2y
 * email: xiaodai54_long@163.com
 * Date: 2017/6/22 12:33
 * describ: admin表操作模型
 */

namespace Admin\Model;


use Common\Model\BaseModel;

class AdminModel extends BaseModel
{
    protected $tableName = 'admin';

    //protected $labels = ['username'=>'','password'=>'','status'=>1,'create_time'];有验证场景此处可以忽略

    //自动验证
    protected $_validate = array(
        ['username','require',['tag'=>'username','error'=>'用户名必须！']], //默认情况下用正则进行验证
        ['username','',['tag'=>'username','error'=>'帐号名称已经存在！'],0,'unique'],
        ['role_id','require',['tag'=>'role_id','error'=>'请选择角色！']],
        ['status',[0,1],['tag'=>'status','error'=>'状态不合法！'],2,'in'],
        ['email','email',['tag'=>'email','error'=>'邮箱不合法！']],
        ['password','require',['tag'=>'password','error'=>'密码不能为空！'],],
        ['password','checkPsw',['tag'=>'password','error'=>'请输入6~16位有效字符'],2,'callback',3],
    );

    //验证场景-(yii2中的特性 ^!^借鉴一下它的思想,没有办法。队员奶不起，带不动。不会yii2)
    //############这样用法说明############
    //# 用$labels作为默认值设定是 因为用了vueJS的数据绑定提交的
    //# 没有数据就不会传相应的字段,这意味着将无法验证，这算是tp验证的一个Bug吧
    //#################################
    public function scenarios(){
        return [
            'add' => ['username'=>'','password'=>'','status'=>1,'create_time'=>time(),'role_id'=>''],
            'save' => ['username'=>'','password'=>'','status'=>1,'create_time'=>'','role_id'=>''],
        ];
    }

    //数据操作
    public function store($data){
        //指定验证场景
        $action = isset($data[$this->pk]) ? "save" : "add";
        $this->scenario = $action;

        //密码没有改变操作
        if(($this->scenario=='save')&&(strlen($data['password'])==32)){
            $data['password'] = 'noChange';
        }

        if ($this->create($data)) {

            //密码没有改变操作
            if($this->labels['password']== 'noChange'){
                unset($this->labels['password']);
            }else{
                $this->labels['password'] = md5($this->labels['password']);
            }

            $this->labels['status'] = ($this->labels['status']=='true')?1:0;
            $user_id = $this->$action($this->labels);

            //角色赋予操作
            $user_id=($this->scenario=='save')?$this->labels[$this->pk]:$user_id;
            $this->figure($user_id,$this->labels['role_id']);

            if($user_id){
                return ['status' => true, 'message' => '数据操作成功'];
            }
        }
        $error = $this->getError();
        return ['status' => false,'tag'=>$error['tag'], 'message' => $error['error']];
    }


    /**
     * 用户授予角色
     */
    public function figure($user_id,$role_id){
        M('role_user')->where(['user_id'=>$user_id])->delete();
       return M('role_user')->add(['user_id'=>$user_id,'role_id'=>$role_id]);
    }


    //验证密码规则
    public function checkPsw($password){
        $pattern = '/^[\S]{6,16}$/';
        if(!preg_match($pattern,$password)) return false;
        else return true;
    }
}