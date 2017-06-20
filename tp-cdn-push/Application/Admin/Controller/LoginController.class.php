<?php
/**
 * Created by dh2y
 * email: xiaodai54_long@163.com
 * Date: 2017/6/20 17:35
 * describ: 登录
 */

namespace Admin\Controller;


use Common\Controller\AdminController;

class LoginController extends AdminController
{

    public function index(){

        layout(false);              //关闭模板布局
        $this->display();
    }


    public function login(){
        $post = I('post.');
        echo json_encode($post);
    }

}