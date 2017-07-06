<?php
/**
 * Created by dh2y.
 * bolg: http://blog.csdn.net/sinat_22878395
 * Date: 2017/7/4 15:15
 * functional: 功能说明
 */

namespace Admin\Controller;


use Admin\Model\MenuModel;
use Common\Controller\AdminController;

class MenuController extends AdminController
{

    /**
     * 菜单列表
     */
    public function index(){
        $model = new MenuModel();
        $this->assign('list',$model->lists());
        $this->display();
    }


    /**
     * 查看编辑数据及渲染添加页面
     */
    public function show(){
        $id = I('get.id',0);

        $model = new MenuModel();
        if(IS_AJAX){
            $data =$model->find($id);
            if($data){
                $this->ajaxReturn($data);
            }
            $this->ajaxReturn(false);
        }
        $this->assign('menu',$model->lists());
        $this->assign('show_id',$id);
        $this->display();
    }

    /**
     * 添加或编辑用户
     */
    public function form(){
        if (IS_POST){
            $data = I('post.');
            $model = new MenuModel();

            //编辑菜单清除菜单session缓存
            session('MENU_LIST',null);
            $this->ajaxReturn($res = $model->store($data));
        }else{
            new \HttpRequestMethodException('请求不合法');
        }
    }

    /**
     * 删除菜单
     */
    public function remove(){
        $data = I('post.ids');
        if(IS_AJAX && is_array($data)){
            $map['id'] = ['in',$data];
            $result = M('menu')->where($map)->delete();
            if($result){

                //编辑菜单清除菜单session缓存
                session('MENU_LIST',null);
                $this->ajaxReturn(['status'=>true,'message'=>'删除成功']);
            }else{
                $this->ajaxReturn(['status'=>false,'message'=>'删除失败']);
            }
        }else{
            new \HttpRequestMethodException('请求不合法');
        }
    }
}