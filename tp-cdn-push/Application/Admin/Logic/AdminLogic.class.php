<?php
/**
 * Created by dh2y
 * email: xiaodai54_long@163.com
 * Date: 2017/6/21 9:10
 * describ: 登录服务模型
 */

namespace Admin\Logic;


use Common\Model\BaseModel;
use Think\Crypt;
use Think\Model;

class AdminLogic extends BaseModel
{

    protected $tableName = 'admin';
    protected $labels = ['username'=>'','password'=>'','verify'=>'','remember'=>false];

    protected $member;
    //自动验证
    protected $_validate = array(
        ['username','require',['tag'=>'username','error'=>'用户名必须！']], //默认情况下用正则进行验证
        ['verify','require',['tag'=>'verify','error'=>'验证码不能为空！'],],
        ['verify','checkVerify',['tag'=>'verify','error'=>'验证码错误！'],2,'callback',3],
        ['password','require',['tag'=>'password','error'=>'密码不能为空！'],],
        ['password','checkPsw',['tag'=>'password','error'=>'请输入6~16位有效字符'],2,'callback',3],
    );

    //检验用户
    public function checkMember(){
        if( $this->create()){
            $map['username'] = $this->labels['username'];
            $map['status'] = 1;
            $this->member = $this->where($map)->find();
            if ( $this->member){
                return ['status' => true, 'data' =>  $this->member];
            }
            return ['status'=>false,'tag'=>'username','message'=>'用户不存在或被禁用'];
        }
        $error = $this->getError();
        return ['status' => false,'tag'=>$error['tag'], 'message' => $error['error']];
    }


    //检查密码是否正确
    public function checkPass($password){
        if(md5($password) != $this->member['password']){
            return ['status'=>false,'tag'=>'password','message'=>'密码错误'];
        }
        return ['status'=>true,'message'=>'恭喜！密码正确'];
    }

    //验证登录
    public function checkLogin(){

    }

    //登录操作
    public function doLogin(){
        $result = $this->checkMember();
        if ($result['status']==false){
            return $result;
        }
        $result = $this->checkPass($this->labels['password']);
        if($result['status']==true){
            session(C("USER_AUTH_KEY"), $this->member['id']);//(RBAC)
            session("username", $this->member['username']);

            //如果为超级管理员，则无需验证(RBAC)
            if($this->member['username'] == C('RBAC_SUPERADMIN')) {
                session(C('ADMIN_AUTH_KEY'), true);
            }

            //登录日志更新
            $this->member['login_time'] = time();
            $this->member['login_ip'] = get_client_ip(0,true);
            $this->save($this->member);

            //如果记住账号密码-vue.js复选框传的是true和false字符串
            if($this->labels['remember']=='true'){
                $member['username'] = $this->labels['username'];
                $member['password'] = $this->labels['password'];
                $member['remember'] = $this->labels['remember'];
                $remember = Crypt::encrypt(serialize($member),C('CRYPT_KEY'));
                cookie('remember', $remember);//记住我
            }else{
                cookie('remember', null);
            }

        }
        return $result;
    }

    //得到记住用户名和密码
    public function getRemember(){

        if(!cookie('remember')){
            return false;
        }
        $remember = Crypt::decrypt(cookie('remember'),C('CRYPT_KEY'));
        return unserialize($remember);
    }

    //验证密码规则
    public function checkPsw($password){
        $pattern = '/^[\S]{5,16}$/';
        if(!preg_match($pattern,$password)) return false;
        else return true;
    }

    //登录验证码操作
    public function checkVerify()
    {
        $verify = new \Think\Verify();
        return $verify->check($this->labels['verify']);
    }
}