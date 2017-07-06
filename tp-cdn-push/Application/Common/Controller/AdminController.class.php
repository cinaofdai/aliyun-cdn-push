<?php
/**
 * Created by dh2y
 * email: xiaodai54_long@163.com
 * Date: 2017/6/16 15:43
 * describ: 描述说明
 */

namespace Common\Controller;


use Admin\Model\MenuModel;
use Common\Org\Data;
use Common\Org\Page;
use Org\Util\Rbac;
use Think\Model;

class AdminController extends BaseController
{

    public function _initialize(){
        if(!isset($_SESSION[C('USER_AUTH_KEY')])) {
            $this->redirect('login/index');
        }

        //拿出权限菜单
        $menu = new MenuModel();
        $menuList = $menu->getMenu();

        //设置活跃菜单
        $menu->menuActive($menuList,CONTROLLER_NAME .'/'. ACTION_NAME);
        $this->assign('menuBar',$menu->buildMenu($menuList));

        if(!Rbac::AccessDecision()){
            $this->error('您没有权限');
        }
    }
    /**
     * 万能搜索
     * @param Model $model 模型
     * @param bool $page 分页数-默认不分页
     * @param string $desc 排序方式-默认倒叙
     * @param string $order 排序字段 'id,time'
     * @return mixed 排序结果集
     */
    protected function search(Model $model,$page = false,$desc='desc',$order='id'){
        $map = [];
        $query = I('get.query');
        $this->assign('query',$query);

        //如果模型存在搜索方法-返回模型里面的搜索结果(必须 new model实例化)
        if(method_exists($model,'search')){
            return $model->search($query);
        }

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

        //如果分页
        if($page&&$page>0){
            $count = $model->where($map)->count();// 查询满足要求的总记录数 $map表示查询条件
            $Page = new Page($count,$page);// 实例化分页类 传入总记录数
            $list = $model->where($map)->order($order.' '.$desc)->limit($Page->firstRow.','.$Page->listRows)->select();
            $this->assign('page', $Page->show());// 赋值分页输出
        }else{
            $list = $model->where($map)->order($order.' '.$desc)->select();
        }

       return $list;
    }
}