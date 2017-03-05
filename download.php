<?php
/**
 * Created by PhpStorm.
 * User: hui
 * Date: 2017/3/5
 * Time: 17:30
 */

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>手机应用</title>
    <link rel="icon" href="cook.ico" type="image/icon"/>
    <meta name="keywords" content="">
    <meta name="description" content="掌上厨师,国内专业的私厨上门服务平台.北上广深杭八大菜系数千名大厨为你待命,app在线预约,金牌厨师上门做饭.家常用餐,宴请贵宾,掌上厨师为您私人订制上门服务">
    <link href="http://www.idachu.com/icon/production/pc.css" rel="stylesheet" type="text/css"/>
    <script src="http://www.idachu.com/icon/production/pc.js"></script>
    <script>
        var _hmt = _hmt || [];
        (function () {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?d7b6fc2ba576f0661c33f837d1d6a216";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
    <script>
        function base_url(url, param) {
            url = 'http://www.idachu.com/' + url.replace(/^\/|\/$/g, '');
            if (param) {
                url += '?' + $.param(param);
            }
            return url;
        }
        $(function () {
            $('.weixin').bind({
                mouseover: function () {
                    $('.weixin_div').show();
                },
                mouseleave: function () {
                    $('.weixin_div').hide();
                }
            })
        })
    </script>
    <style>
        .indheader {
            background: rgba(0, 0, 0, 0) url("http://www.idachu.com/icon/pc/images/mobile_banner.jpg") no-repeat scroll center top;
        }
    </style>
</head>
<body>
<div class="indheader">
    <div class="index_head">
        <div class="logo go_2">
            <a href="/"><img src="/public/pc/img/logo.png" alt=""/></a>
        </div>
        <ul class="menu">
            <li class=""><a href="/kitchener.php">厨师招募</a></li>
            <li class=""><a href="/download.php">手机应用</a></li>
            <li class=""><a href="/member.php">会员中心</a></li>
            <li class=""><a href="/">首页</a></li>
        </ul>
        <p class="clear"></p>
        <div class="mobile_l">
            <h1>掌上厨师</h1>
            <span>在家享受天下美食</span>
            <p class="clear"></p>
            <p class="mobileanniul">
                <!--<a href=""><img
                            src="/public/pc/img/apple1.png"/></a>-->
                <a href="http://45.125.12.97/cook/掌上厨师.apk"><img
                            src="/public/pc/img/anzhuo2.png"/></a>
            </p>
            <p class="mobileanniu2"><img src="/public/pc/img/zscs.png" width="166"/></p>
        </div>
        <p class="mo_imgr"><img src="/public/pc/img/mobile1.png"/></p>
    </div>
</div>
<div class="black_w">
    <div class="main">
        <p class="molistl"><img src="/public/pc/img/mobile3.png"/></p>
        <div class="molistr">
            <h3>多样大厨</h3>
            <p class="molistrp">寻找、收藏、分享各类菜系的专业厨师</p>
        </div>
        <p class="clear"></p>
    </div>
</div>
<div class="pink_bg">
    <div class="main">
        <div class="molistr pad2">
            <img src="/public/pc/img/mobile4.png"/>
        </div>
        <div class="molistl molk">
            <h3>代买食材</h3>
            <p class="molistrp">没时间买菜？厨师代买，一切都能通过掌上厨师<br/>值得信赖的服务完成</p>
        </div>
        <p class="clear"></p>
    </div>
</div>
<div class="black_w">
    <div class="main">
        <p class="molistl"><img src="/public/pc/img/mobile5.png"/></p>
        <div class="molistr">
            <h3>私人订制</h3>
            <p class="molistrp">米其林级专业厨师，在家尊享私人订制服务</p>
        </div>
        <p class="clear"></p>
    </div>
</div>
<div class="pink_bg">
    <div class="main">
        <div class="molistr pad2">
            <img src="/public/pc/img/mobile6.png"/>
        </div>
        <div class="molistl molk">
            <h3>随时查看状态</h3>
            <p class="molistrp">查看订单状态，一切皆可在手机上完成</p>
        </div>
        <p class="clear"></p>
    </div>
</div>
<p class="clear"></p>
<?php include 'footer.php'; ?>
</body>
</html>
