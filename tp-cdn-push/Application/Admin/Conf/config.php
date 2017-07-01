<?php
return array(
    //'配置项'=>'配置值'
    'TMPL_PARSE_STRING' => array(
        '__PUBLIC__' => '/Public/admin', // 更改默认的/Public 替换规则
    ),

    //使用布局
    'LAYOUT_ON' => true,
    'LAYOUT_NAME' => 'Layout/master',

    //阿里云配置
    'ALIYUN_CDN' => array(
        'accessKeyId' => 'LTAIXTESTDPkANgP',
        'accessKeySecret' => 'TEst7vIYdxA0tK5S2ktcoUfsIstest',
    ),

    //cookie相关设置
    'COOKIE_PREFIX' => 'dh2y_', //cookie的前缀
    'COOKIE_EXPIRE' => 7 * 24 * 3600, //cookie的生存时间

    //Crypt加密秘钥
    'CRYPT_KEY' => 'dh2y',

    //RBAC权限管理配置
    'USER_AUTH_ON' => true,   //是否开启权限验证(必配)
    'USER_AUTH_TYPE' => 2,    //验证方式（1、登录验证；2、实时验证）
    'USER_AUTH_KEY' => 'authId',      //用户认证识别号(必配)
    'ADMIN_AUTH_KEY' => 'superadmin',  //超级管理员识别号(必配)
    'RBAC_SUPERADMIN' => 'admin',      //超级管理员用户名称(自己添加的)

    'REQUIRE_AUTH_MODULE' => '',  //默认需要认证的模块
    'NOT_AUTH_MODULE' => 'Login', // 无需认证模块
    'USER_AUTH_GATEWAY' => '/Login/index', // 默认网关

    "USER_AUTH_MODEL" => 'dh2y_admin',               //验证用户表模型 ly_user
    'RBAC_ROLE_TABLE' => 'dh2y_role', // 角色表名称
    'RBAC_USER_TABLE' => 'dh2y_role_user', // 用户角色中间表名称
    'RBAC_ACCESS_TABLE' => 'dh2y_access',// 权限表名称
    'RBAC_NODE_TABLE' => 'dh2y_node',// 节点表名称

);