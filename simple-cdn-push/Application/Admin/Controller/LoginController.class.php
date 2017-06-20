<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/19
 * Time: 14:41
 */

namespace Admin\Controller;


use Think\Controller;

class LoginController extends Controller
{
    
    public function login()
    {
        layout(false);
        $this->display();
    }

    public function checkLogin()
    {
        //数据验证
        $username = trim(I('username','','htmlspecialchars'));
        $password = md5(I('password','','htmlspecialchars'));

        $member = load_config(CONF_PATH.'member.php');

        if(!isset($member[$username])){
            $this->ajaxReturn(array('code'=>-1001,'msg'=>'账号不存在'));
        }
        if($password !== md5($member[$username])){
            $this->ajaxReturn(array('code'=>-1002,'msg'=>'密码错误'));
        }
        //存入session
        session('push_user',$username);
        session('push_pass', md5($password));
        $this->ajaxReturn(array('code'=>1,'登录成功'));
    }

    public function doLogout(){
        session('push_user',null);
        session('push_pass',null);
        $this->redirect('/Login/login');
    }
}