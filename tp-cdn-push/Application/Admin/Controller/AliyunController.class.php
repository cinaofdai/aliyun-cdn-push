<?php
/**
 * Created by dh2y
 * email: xiaodai54_long@163.com
 * Date: 2017/6/16 15:38
 * describ: 阿里云推送
 */

namespace Admin\Controller;


use AliyunCdn\AliyunCdn;
use Common\Controller\AdminController;

class AliyunController extends AdminController
{

    /**
     * @title 查看推送
     */
    public function index(){
        $this->display();
    }


    /**
     * @title 推送刷新
     */
    public function refresh(){
        AliyunCdn::start();
        $c = new \AliyunClient;
        $config = C('ALIYUN_CDN');
        $c->accessKeyId = $config['accessKeyId'];
        $c->accessKeySecret = $config['accessKeySecret'];
        $c->serverUrl = "http://cdn.aliyuncs.com/"; //根据不同产品选择相应域名，例如：CDN，http://cdn.aliyuncs.com/

        $data = I('post.');

        if($data['action']=='Push'){
            $req = new \Cdn20141111PushObjectCacheRequest();
        }else{
            $req = new \Cdn20141111RefreshObjectCachesRequest();
            $req->setObjectType($data['type']); // or Directory
        }

        $req->setObjectPath(trim($data['url']));
        try {
            $resp = $c->execute($req);
            if(!isset($resp->Code)) {
                //刷新成功
               $this->success('刷新成功','index');
            } else {
                //刷新失败
                $this->error($resp->Message,'index');
            }
        } catch (\Exception $e) {
            // TODO: handle exception
        }
    }

}