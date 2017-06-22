/**
 * Created by dh2y
 * email: xiaodai54_long@163.com
 * Date: 2017/6/20 17:35
 * describ: 工具js
 */


(function (window) {
    util = {
        //获取get参数值
        alert : function (type,content) {
            $('.alert').addClass("alert-"+type);
            $('.alert').html(content);
        },
        get:function (url,callback) {
            $.ajax({
                type:'get',
                url:url,
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

