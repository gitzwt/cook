<?php
/**
 * Created by PhpStorm.
 * User: hui
 * Date: 2017/3/11
 * Time: 20:22
 */

?>


<!DOCTYPE html>
<html>
<head>
    <title>个人中心</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0,minimal-ui"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <meta name="format-detection" content="telephone=no"/>
    <link href="http://www.idachu.cn/icon/production/index.css?ver=7f484403" rel="stylesheet"/>
    <meta name="keywords" content="">
    <meta name="description" content="爱大厨,国内专业的私厨上门服务平台.北上广深八大菜系数千名大厨为你待命,app在线预约,金牌厨师上门做饭.家常用餐,宴请贵宾,爱大厨为您私人订制上门服务">
    <script charset="utf-8" src="http://www.idachu.cn/icon/production/index.js?ver=7f484403"></script>
    <script>
        function base_url(seg, params){
            seg = seg||'/';
            var url = 'http://www.idachu.cn/'.replace(/\/$/, '') + '/' + seg.replace(/^\/|\/$/, '')
            if(params){
                if(typeof(params) == 'object'){
                    params = $.param(params);
                }
                url += '?' + params;
            }
            return url;
        }
        function idachuapplogin(str){
            $('#save_btn').do_action({
                url: base_url('user/do_app_login'),
                data: {auth: str, forward: 'http://www.idachu.cn/user'},
                success: function(url){
                    if(url){
                        location.href = url;
                    }else{
                        location.href = base_url('');
                    }
                },
                error: function(){}
            })
        }
    </script>
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?d1eba6d8f251477c999b72bd04f632e9";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script><script>
    </script>
    <style>
        .user_head{background:url("/icon/images/user_bg.png");background-size:100% 100%;width:100%;text-align:center;margin-bottom:0px;padding:10px 0;}
        .user_head img{margin:5px 5px 8px;}
        .user_head .name{font-size:12px;color:#fff;}
        html{height:100%;}
        .user_login,.user_login:hover,.user_login:active,.user_login:active{text-decoration: none;margin:0 auto 0;display:block;color:#fff;width:72px;font-size:14px;line-height:10px;border:1px solid #ffffff;border-radius: 2px;padding:8px 5px;}
    </style>
</head>
<body>
<div class="wraper">
    <div class="user_head">
        <img src="http://www.idachu.cn/icon/images/head.png?ver=7f484403" width="40" height="40"/>
        <div class="name">13777399387</div>
    </div>
    <div class="heipx"></div>

    <ul class="property-list">
        <li class="property-list-item touch property-list-detail touch-link"><i class="property-icon property-icon-bespeak"></i>我的订单 <a href="http://www.idachu.cn/user/bespeak"></a></li>
        <li class="property-list-item touch property-list-detail touch-link"><i class="property-icon property-icon-favorite"></i>收藏 <a href="http://www.idachu.cn/user/favorite"></a></li>
        <li class="property-list-item touch property-list-detail touch-link"><i class="property-icon property-icon-coupon"></i>优惠券 <a href="http://www.idachu.cn/user/coupon"></a></li>
        <li class="property-list-item touch property-list-detail touch-link"><i class="property-icon property-icon-location"></i>常用地址 <a href="http://www.idachu.cn/user/address"></a></li>
    </ul>
    <div class="heipx"></div>

    <ul class="property-list">
        <li class="property-list-item touch property-list-detail touch-link"><i class="property-icon property-icon-phone"></i>客服电话 <span class="property-summary">010-80121586</span><a href="tel:010-80121586"></a></li>
        <li class="property-list-item touch property-list-detail touch-link"><i class="property-icon property-icon-help"></i>使用帮助 <a href="http://www.idachu.cn/document/view/64"></a></li>
        <li class="property-list-item touch property-list-detail touch-link"><i class="property-icon property-icon-copyright"></i>用户协议 <a href="http://www.idachu.cn/document/view/65"></a></li>
    </ul>
    <div class="heipx"></div>

    <ul class="property-list">
        <li class="property-list-item touch property-list-detail property-has-value touch-link"><i class="property-icon property-icon-home"></i>切换城市 <span class="property-summary">北京</span><a href="http://www.idachu.cn/welcome/city"></a></li>
        <li class="property-list-item touch property-list-detail touch-link"><i class="property-icon property-icon-bespeak"></i>退出登录 <a href="http://www.idachu.cn/user/logout"></a></li>
    </ul>
    <div class="heipx"></div>

</div>
<div id="footer">
    <?php include 'footer.php'; ?>
    <div class="footer-more"><span></span></div>
    <div id="alert">
        <span></span>
    </div></div></body>
</html>
