<?php
/**
 * Created by dh2y
 * email: xiaodai54_long@163.com
 * Date: 2017/6/22 12:27
 * describ: 用户管理
 */

namespace Admin\Controller;


use Admin\Model\AdminModel;
use Common\Controller\AdminController;

class MemberController extends AdminController
{

    /**
     * @title 用户列表
     * 用户列表
     */
    public function index(){
        $list = $this->search(M('admin'),15);

        //显示管理员
        $user_ids = array_column($list,'id');
        $map['user_id'] = ['in',$user_ids];
        $role = M('role_user u')->join('left join '.C('DB_PREFIX').'role r on r.id=u.role_id')->where($map)->select();
        $role = array_column($role,'name','user_id');
        foreach($list as $key=>$value){
            $list[$key]['role'] = $role[$value['id']];
        }

        $this->assign('list',$list);
        $this->display();
    }

    /**
     * @title 查看用户
     * 查看编辑数据及渲染添加页面
     */
    public function show(){
        $id = I('get.id',0);
        if(IS_AJAX){
            $model = new AdminModel();
            $data =$model->find($id);
            if($data){
                $data['status'] = ($data['status']==1)?true:false;
                $role = M('role_user')->where(['user_id'=>$id])->find();
                $data['role_id'] = $role['role_id'];
                $this->ajaxReturn($data);
            }
            $this->ajaxReturn(false);
        }
        $this->assign('role',M('role')->select());
        $this->assign('show_id',$id);
        $this->display();
    }

    /**
     * @title 操作用户数据
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
     * @title 删除数据
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

    /**
     * @title 用户状态
     * 改变用户状态
     */
    public function status(){
        $ids = I('post.ids');
        $action = I('post.action');
        if(IS_AJAX && is_array($ids) && in_array($action,['open','off'])){
            $map['id'] = ['in',$ids];
            switch ($action){
                case 'open': $data['status']=1;$message = '用户开启'; break;
                case 'off':  $data['status']=0;$message = '用户关闭'; break;
            }
            $result = M('admin')->where($map)->save($data);
            if($result){
                $this->ajaxReturn(['status'=>true,'message'=>$message]);
            }else{
                $this->ajaxReturn(['status'=>false,'message'=>$message.'失败']);
            }
        }else{
            new \HttpRequestMethodException('请求不合法');
        }
    }

}