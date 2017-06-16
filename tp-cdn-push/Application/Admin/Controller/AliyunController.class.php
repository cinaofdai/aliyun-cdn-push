<?php
/**
 * Created by dh2y
 * email: xiaodai54_long@163.com
 * Date: 2017/6/16 15:38
 * describ: 阿里云相关
 */

namespace Admin\Controller;


use AliyunCdn\AliyunCdn;
use Common\Controller\AdminController;

class AliyunController extends AdminController
{

    public function index(){

        $this->display();
    }


    public function refresh(){
        AliyunCdn::start();
        $c = new \AliyunClient;
        $c->accessKeyId = "<accessKeyId>";
        $c->accessKeySecret = "<accessKeySecret>";
        $c->serverUrl = "http://cdn.aliyuncs.com/"; //根据不同产品选择相应域名，例如：CDN，http://cdn.aliyuncs.com/

        $url = I('post.url');
        $req = new \Cdn20141111RefreshObjectCachesRequest();
        $req->setObjectType("File"); // or Directory
        $req->setObjectPath($url);
        try {
            $resp = $c->execute($req);
            if(!isset($resp->Code))
            {
                //刷新成功
                echo($resp->RequestId);
                print_r($resp);
            }
            else
            {
                //刷新失败
                $code = $resp->Code;
                $message = $resp->Message;
            }
        }
        catch (\Exception $e)
        {
            // TODO: handle exception
        }
    }

}