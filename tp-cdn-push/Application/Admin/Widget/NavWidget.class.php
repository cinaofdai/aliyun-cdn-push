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

    //form表单头
    public function header(){
        return $html ='<div class="well well-sm">
                     <a href="javascript:history.back();" class="btn btn-sm btn-success">
                        <i class="icon-undo  bigger-110"></i>
                        <span class="bigger-110 no-text-shadow">返回</span>
                     </a>
                    <a href="javascript:location.reload();" class="btn btn-sm btn-info">
                        <i class="icon-refresh bigger-110"></i>
                         <span class="bigger-110 no-text-shadow">刷新</span>
                    </a>
                 </div>';
    }

    public function alert(){
        return $html='<div class="alert"></div>';
    }
}