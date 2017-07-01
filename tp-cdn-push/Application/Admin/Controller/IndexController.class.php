<?php
/**
 * Created by dh2y
 * email: xiaodai54_long@163.com
 * Date: 2017/6/16 15:38
 * describ: 后台默认控制器
 */

namespace Admin\Controller;
use Common\Controller\AdminController;

class IndexController extends AdminController {

    /**
     * @title 后台首页
     */
    public function index(){
       $this->display();
    }
}