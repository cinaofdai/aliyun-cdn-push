<?php
/**
 * Created by dh2y
 * email: xiaodai54_long@163.com
 * Date: 2017/6/22 11:21
 * describ: 权限管理模块控制器
 */

namespace Admin\Controller;


use Admin\Model\NodeModel;
use Admin\Model\RoleModel;
use Common\Controller\AdminController;

class RbacController extends AdminController
{
    /**
     * 角色列表
     */
    public function role(){
        $this->assign('list',$this->search(M('role'),15));
        $this->display();
    }

    /**
     * doAction - 角色
     * 查看编辑数据及渲染添加页面
     */
    public function show(){
        $id = I('get.id',0);
        if(IS_AJAX){
            $model = new RoleModel();
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
     * 添加或编辑角色
     */
    public function form(){
        if (IS_POST){
            $data = I('post.');
            $model = new RoleModel();
            $this->ajaxReturn($res = $model->store($data));
        }else{
            new \HttpRequestMethodException('请求不合法');
        }
    }

    /**
     * 删除角色
     */
    public function remove(){
        $data = I('post.ids');
        if(IS_AJAX && is_array($data)){
            $map['id'] = ['in',$data];
            $result = M('role')->where($map)->delete();
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
     * 改变角色状态
     */
    public function status(){
        $ids = I('post.ids');
        $action = I('post.action');
        if(IS_AJAX && is_array($ids) && in_array($action,['open','off'])){
            $map['id'] = ['in',$ids];
            switch ($action){
                case 'open': $data['status']=1;$message = '角色开启'; break;
                case 'off':  $data['status']=0;$message = '角色关闭'; break;
            }
            $result = M('role')->where($map)->save($data);
            if($result){
                $this->ajaxReturn(['status'=>true,'message'=>$message]);
            }else{
                $this->ajaxReturn(['status'=>false,'message'=>$message.'失败']);
            }
        }else{
            new \HttpRequestMethodException('请求不合法');
        }
    }


    //###########################节点管理部分##############################################


    /**
     * 节点列表
     */
    public function index(){
        $mode = new NodeModel();
        $list = $mode->getTreeList();
        //dump($list);
        $this->assign('list',$list);
        $this->display();
    }

    /**
     * 查看编辑节点
     */
    public function look(){
        $id = I('get.id',0);
        if(IS_AJAX&&$id){
            $model = new NodeModel();
            $data =$model->find($id);
            if($data){
                $this->ajaxReturn($data);
            }
            $this->ajaxReturn(false);
        }else{
            new \HttpRequestMethodException('请求不合法');
        }
    }

    /**
     * 添加或编辑节点
     */
    public function node(){
        if (IS_POST){
            $data = I('post.');
            $model = new NodeModel();
            $this->ajaxReturn($res = $model->store($data));
        }else{
            new \HttpRequestMethodException('请求不合法');
        }
    }

    /**
     * 删除节点
     */
    public function deleted(){
        if (IS_POST){
            $data = I('post.id',0);
            $model = new NodeModel();
            $this->ajaxReturn($res = $model->deleteNode($data));
        }else{
            new \HttpRequestMethodException('请求不合法');
        }
    }

}