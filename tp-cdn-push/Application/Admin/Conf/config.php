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
    )

);