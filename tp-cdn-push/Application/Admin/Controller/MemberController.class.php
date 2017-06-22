<?php
/**
 * Created by dh2y
 * email: xiaodai54_long@163.com
 * Date: 2017/6/22 12:27
 * describ: 用户管理控制器
 */

namespace Admin\Controller;


use Common\Controller\AdminController;

class MemberController extends AdminController
{

    /**
     * 用户列表
     */
    public function index(){
        $map = [];
        $query = I('get.query');
        if(is_array($query)){
            foreach($query as $key=>$value){
                if($value!=''){
                    if(is_numeric($value)){
                        if($value>-1){
                            $map[$key] = array('eq',$value);
                        }
                    }else{
                        $map[$key]  = array('like','%'.$value.'%');
                    }
                }
            }
        }
        $list = M('admin')->where($map)->select();
        $this->assign('list',$list);
        $this->display();
    }

}