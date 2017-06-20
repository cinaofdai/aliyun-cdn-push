## 简介

simple-cdn-push 乞丐版(使用tp框架)
应用开发，是为了有阿里CDN节点加速而用的，不可能每个人都用阿里账号登录去推送，这样也不利于团队管理。

## 安装说明

将simple-cdn-push放置到网站目录

> nginx配置
```php
 server
{
    listen 80;
    server_name push.xxxxxx.me;
	index index.php index.html index.htm;
    root /www/wwwroot/push.xxxxxx.me;
    #error_page 404/404.html;
    error_page 404 /404.html;
    error_page 502 /502.html;
    
    include enable-php-56.conf;
    include /www/server/panel/vhost/rewrite/push.xxxxxx.me.conf;
    location ~ .*\.(gif|jpg|jpeg|png|bmp|swf)$
    {
        expires      30d;
        access_log off; 
    }
    location ~ .*\.(js|css)?$
    {
        expires      12h;
        access_log off; 
    }
    access_log  /www/wwwlogs/push.xxxxxx.me.log;
}
```

> push.xxxxxx.me.conf配置如下

```php
location / {
        if (!-e $request_filename)
        {
            #根目录Rewrite规则
            rewrite ^/(.*)$ /index.php/$1 last;

            #二级目录Rewrite规则，subdir为二级目录名称
            #rewrite ^/subdir/(.*)$ /subdir/index.php/$1;

            break;
        }
}
```
## 更改配置
  将/simple-cdn-push/Application/Common/Config/config.php里面的配置改成自己的
 ```php
     //阿里云配置
      'ALIYUN_CDN' =>array(
          'accessKeyId' => 'LTAIXTESTDPkANgP',
          'accessKeySecret' => 'TEst7vIYdxA0tK5S2ktcoUfsIstest',
      )
 ```
  用户列表/simple-cdn-push/Application/Common/Config/member.php
  ```php
      return array(
         'hander' => '123456',
          'dh2y' => '123456'
      );
   ```


