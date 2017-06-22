<?php
/**
 * Created by dh2y
 * email: xiaodai54_long@163.com
 * Date: 2017/6/20 17:35
 * describ: 登录
 */

namespace Admin\Controller;


use Admin\Logic\AdminLogic;
use Common\Controller\AdminController;

class LoginController extends AdminController
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
        $this->ajaxReturn($admin->doLogin());
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
}