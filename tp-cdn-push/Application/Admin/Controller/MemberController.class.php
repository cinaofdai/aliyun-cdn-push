<?php
/**
 * Created by dh2y
 * email: xiaodai54_long@163.com
 * Date: 2017/6/22 12:27
 * describ: 用户管理控制器
 */

namespace Admin\Controller;


use Admin\Model\AdminModel;
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

    /**
     * 查看编辑数据及渲染添加页面
     */
    public function show(){
        $id = I('get.id',0);
        if(IS_AJAX){
            $model = new AdminModel();
            $data =$model->find($id);
            if($data){
                $data['status'] = ($data['status']==1)?true:false;
                $this->ajaxReturn($data);
            }
            $this->ajaxReturn(false);
        }
        $this->assign('show_id',$id);
        $this->display();
    }

    /**
     * 添加或编辑用户
     */
    public function form(){
        if (IS_POST){
            $data = I('post.');
            $model = new AdminModel();
            $this->ajaxReturn($res = $model->store($data));
        }else{
           new \HttpRequestMethodException('请求不合法');
        }
    }

    /**
     * 删除数据
     */
    public function remove(){
        $data = I('post.ids');
        if(IS_AJAX && is_array($data)){
            $map['id'] = ['in',$data];
            $result = M('admin')->where($map)->delete();
            if($result){
                $this->ajaxReturn(['status'=>true,'message'=>'删除成功']);
            }else{
                $this->ajaxReturn(['status'=>false,'message'=>'删除失败']);
            }
        }else{
            new \HttpRequestMethodException('请求不合法');
        }
    }

}