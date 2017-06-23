/**
 * Created by dh2y
 * email: xiaodai54_long@163.com
 * Date: 2017/6/20 17:35
 * describ: 工具js(基于jq库)
 */


(function (window) {
    util = {
        //alert提示框
        alert : function (type,content,close) {
            if(close){
                content = content+'<button class="close" data-dismiss="alert"><i class="icon-remove"></i></button>';
            }
            $('.alert').addClass("alert-"+type);
            $('.alert').html(content);
        },

        /**
         * get请求
         * @param url
         * @param data   请求参数非必须参数
         * @param callback
         */
        get:function (url,data,callback) {
            //模仿jq 不带参数请求处理
            if(callback===undefined){
                callback = data;
                data = {};
            }
            $.ajax({
                type:'get',
                url:url,
                data:data,
                cache: false,
                dataType:'json',
                success:function(data){
                    callback(data)
                }
            });
        },

        /**
         * post请求
         * @param url
         * @param data   请求参数非必须参数
         * @param callback
         */
        post:function (url,data,callback) {
            //模仿jq 不带参数请求处理
            if(callback===undefined){
                callback = data;
                data = {};
            }
            $.ajax({
                type:'post',
                url:url,
                data:data,
                cache: false,
                dataType:'json',
                success:function(data){
                    callback(data)
                }
            });
        },

        /**
         * 异步提交表单
         * @param selected 选择器
         * @param callback 回调函数
         */
        submit:function (selected,callback) {
            var data = $(selected).serialize();
            var action = $(selected).attr('method');
            var url = $(selected).attr('action');
            $.ajax({
                type:action,
                url:url,
                data:data,
                cache: false,
                dataType:'json',
                success:function(data){
                    callback(data)
                }
            });
        }

    };
    if (typeof define === "function" && define.amd) {
        define(['bootstrap'], function () {
            return util;
        });
    } else {
        window.util = util;
    }
})(window);

