<?php
/**
 * Created by dh2y
 * email: xiaodai54_long@163.com
 * Date: 2017/6/20 17:35
 * describ: 登录控制器
 */

namespace Admin\Controller;


use Admin\Logic\AdminLogic;
use Org\Util\Rbac;
use Think\Controller;

class LoginController extends Controller
{

    /**
     * 页面渲染不做任何操作
     */
    public function index(){
        layout(false);              //关闭模板布局
        $this->display();
    }

    /**
     * 登录操作
     */
    public function login(){

        $admin = new AdminLogic();
        $result = $admin->doLogin();

        //读取用户权限
        Rbac::saveAccessList();
        $this->ajaxReturn($result);
    }

    /**
     * 记住密码返回解密后的cookie
     */
    public function member(){
        $admin = new AdminLogic();
        $this->ajaxReturn($admin->getRemember());
    }

    /**
     *验证码
     */
    public function verify(){
        $config =    array(
            'fontSize'    =>    20,    // 验证码字体大小
            'length'      =>    4,     // 验证码位数
            'useNoise'    =>    false, // 关闭验证码杂点
        );
        $Verify =     new \Think\Verify($config);
        $Verify->entry();
    }


    /**
     * 退出
     */
    public function logout(){
        session(C("USER_AUTH_KEY"), null);
        session("username", null);
        session(null);
        $this->redirect('index');
    }
}