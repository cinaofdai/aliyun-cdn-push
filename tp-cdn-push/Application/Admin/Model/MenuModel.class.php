<?php
/**
 * Created by dh2y.
 * bolg: http://blog.csdn.net/sinat_22878395
 * Date: 2017/7/4 16:13
 * functional: 功能说明
 */

namespace Admin\Model;


use Common\Model\BaseModel;
use Common\Org\Data;
use Org\Util\Rbac;

class MenuModel extends BaseModel
{
    protected $tableName = 'menu';

    protected $labels = ['pid'=>'','title'=>'','sort'=>99];

    //自动验证
    protected $_validate = array(
        ['pid','require',['tag'=>'pid','error'=>'请选择上级菜单']],
        ['title','require',['tag'=>'title','error'=>'菜单名称必须']],
        ['sort','/^[0-9]\d*$/',['tag'=>'sort','error'=>'排序序号整形']],
    );


    public function store($data){
        $action = isset($data[$this->pk]) ? "save" : "add";
        if ($this->create($data)) {
            if($this->$action($this->labels)){
                return ['status' => true, 'message' => '数据操作成功'];
            }
        }
        return ['status' => false, 'message' => $this->getError()];
    }


    /**
     * 菜单列表
     */
    public function lists(){
        $data = $this->select();
        return Data::tree($data,'title', $fieldPri = 'id');
    }


    /**
     * 获取权限菜单
     * @param null $authId
     * @return array|mixed
     */
    public function getMenu($authId=null){

        if(session('MENU_LIST')){
            return session('MENU_LIST');
        }

        //读取菜单
        $menu = $this->select();

        //如果不是超级管理员返回权限菜单
        if(session('username')!= C('RBAC_SUPERADMIN')){
            $keys = array_column($menu,'id');
            $menu = array_combine($keys,$menu);

            if(null===$authId)   $authId = $_SESSION[C('USER_AUTH_KEY')];
            $access = Rbac::getAccessList($authId);
            $access = $access['ADMIN'];

            //读取节点
            $list = [];
            foreach($access as $key=>$value){
                foreach($value as $id=>$item){
                    $list[] =strtolower($key.'/'.$id);
                }
            }

            //返回有权限的菜单
            $menuList = [];
            foreach($menu as $key=>$value){
                if(in_array($value['link'],$list)){
                    if($value['pid']!=0){
                        $menuList[] = $menu[$value['pid']];
                    }
                    $menuList[] =  $value;
                }
            }

        }

        $menuList = isset($menuList)?$menuList:$menu;
        session('MENU_LIST',$menuList);
        return $menuList;
    }


    /**
     * 生成菜单
     * @param $data
     * @param int $pid
     * @param string $fieldPri
     * @param string $fieldPid
     * @return bool|string
     */
    public function buildMenu($data, $pid = 0, $fieldPri = 'id', $fieldPid = 'pid'){
        if (empty($data)) {
            return false;
        }
        $arr ="";
        $do =  session('menuList');
        foreach ($data as $v) {
            if ($v[$fieldPid] == $pid) {

                $son = self::buildMenu($data,$v[$fieldPri], $fieldPri, $fieldPid);

                //活跃标签
                $active =($do['p']==$v[$fieldPri])?'class="active open"':'';
                $active =($do['s']==$v[$fieldPri])?'class="active"':$active;

                $arr .= '<li '.$active.'><a '.($son?'class="dropdown-toggle"':'').' href="'.($v['link']!=''?U($v['link']):'#').'">';
                if($v['icon']!=''){
                    $arr .= '<i class="'.$v['icon'].'"></i>';
                }else{
                    $arr .= '<i class="icon-double-angle-right"></i>';
                }
                $arr .= ('<span class="menu-text">'.$v['title'].'</span>').($son?'<b class="arrow icon-angle-down"></b>':'').'</a>';

                //子菜单
                if($son){
                    $arr .= '<ul class="submenu">'.$son.'</ul>';
                }
                $arr .= '</li>';

            }
        }
        return $arr;
    }

    /**
     * 设置活跃菜单
     * @param $data
     * @param string $link
     * @param string $fieldPri
     * @param string $fieldPid
     */
    public function menuActive($data,$link='', $fieldPri = 'id', $fieldPid = 'pid'){
        foreach ($data as $v) {
            if(strtolower($v['link'])==strtolower($link)){
                session('menuList',['s'=>$v[$fieldPri],'p'=>$v[$fieldPid]]);
            }
        }
    }

}