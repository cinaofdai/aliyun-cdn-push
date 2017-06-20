<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/19
 * Time: 15:24
 */

namespace Admin\Controller;


use Think\Controller;

class CommonController extends Controller
{
    public function _initialize(){
        if(!isset($_SESSION['push_user'])) {
            $this->redirect('/Login/login');
        }
    }
}