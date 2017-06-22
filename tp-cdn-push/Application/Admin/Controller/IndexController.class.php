<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        echo session("username");die;
       $this->display();
    }
}