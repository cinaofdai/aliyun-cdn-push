<?php
/**
 * Created by dh2y
 * email: xiaodai54_long@163.com
 * Date: 2017/6/22 11:21
 * describ: 权限管理模块控制器
 */
namespace Console\Controller;
use Admin\Model\NodeModel;
use Think\Controller;

class RbacController extends Controller {

    /**
     * 节点初始化
     */
    public function init(){
        $ignore = $_GET['no'];
        try {
            $dir = APP_PATH. 'Admin/Controller';
            $controllers = glob($dir. '/*');

            $auth = new NodeModel();
            $auth->clearInit();
            foreach ($controllers as $controller) {
                $content = file_get_contents($controller);
                preg_match('/class ([a-zA-Z]+)Controller/', $content, $match);
                $cName = $match[1];

                if($ignore==$cName){
                    continue;
                }
                
                $pid = $auth->createNode($cName,2);
                preg_match_all('/public function ([a-zA-Z_]+)/', $content, $matches);
                foreach ($matches[1] as $aName) {
                    $auth->createNode($aName,3,$pid);
                }
            }
            echo "import success \n";
        } catch(\Exception $e) {
            echo "import failed \n";
        }

    }

    /**
     * 节点表重置
     */
    public function clear(){
        $auth = new NodeModel();
        $auth->clearInit(true);
    }
}