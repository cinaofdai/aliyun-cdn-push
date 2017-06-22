<?php
return array(
	//'配置项'=>'配置值'
    'TMPL_PARSE_STRING'  =>array(
        '__PUBLIC__' => '/Public/admin', // 更改默认的/Public 替换规则
    ),

    //使用布局
    'LAYOUT_ON'=>true,
    'LAYOUT_NAME'=>'Layout/master',

    //阿里云配置
    'ALIYUN_CDN' =>array(
        'accessKeyId' => 'LTAIXTESTDPkANgP',
        'accessKeySecret' => 'TEst7vIYdxA0tK5S2ktcoUfsIstest',
    ),

    //cookie相关设置
    'COOKIE_PREFIX' => 'dh2y_', //cookie的前缀
    'COOKIE_EXPIRE' => 7*24*3600, //cookie的生存时间

    //Crypt加密秘钥
    'CRYPT_KEY' => 'dh2y'

);