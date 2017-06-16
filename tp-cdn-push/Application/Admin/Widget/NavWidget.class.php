<?php
/**
 * Created by dh2y
 * email: xiaodai54_long@163.com
 * Date: 2017/6/16 11:52
 * describ: 描述说明
 */

namespace Admin\Widget;


use Think\Controller;

class NavWidget extends Controller
{
    public function breadcrumbs(){
        $arg_arr = func_get_args();
        $html = '<ul class="breadcrumb">';
        $html .= ' <li><i class="icon-home home-icon"></i><a href="/">Home</a></li>';
        $last = count($arg_arr)-1;
        foreach($arg_arr as $key => $val){
            if(is_array($val)){
                if($key == $last)
                    $html .= '<li class="active"><a href="'.$val['0'].'">'.$val[1].'</a></li>';
                else
                    $html .= '<li><a href="'.$val['0'].'">'.$val[1].'</a></li>';
            }else{
                if($key == $last)
                    $html .= '<li class="active">'.$val.'</li>';
                else
                    $html .= '<li>'.$val.'</li>';
            }
        }
        $html .= '</ul>';
        return $html;
    }
}