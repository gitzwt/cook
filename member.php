<?php
/**
 * Created by PhpStorm.
 * User: hui
 * Date: 2017/3/5
 * Time: 16:51
 */

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>会员中心</title>
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
</head>
<body>
<div class="head cleahei">
    <div class="logo go_2">
        <a href="/"><img src="/public/pc/img/logo.png" alt=""/></a>
    </div>
    <ul class="menu">
        <li class=""><a href="/kitchener.php">厨师招募</a></li>
        <li class=""><a href="/download.php">手机应用</a></li>
        <li class=""><a href="/member.php">会员中心</a></li>
        <li class=""><a href="/">首页</a></li>
    </ul>
</div>
<div class="clear"></div>
<div class="indheader">
    <div class="index_head" style="height: 400px">
        <div class="spoken_lan">
            <p class="family">足不出户，尊享米其林级大厨</p>
            <span class="plex_lan">掌上厨师，国内专业的私厨上门服务平台</span>
            <p class="clear"></p>
        </div>
    </div>
</div>
<div class="main">
    <p class="clea_hei" style="margin-bottom:30px;"></p>
    <h3 class="member_mid">会员中心</h3>
    <div class="mid_center">
        <ul class="center_list">
            <li>
                <img src="/public/pc/img/vip_silver.png"/>
            </li>
            <li>
                <img src="/public/pc/img/vip_gold.png"/>
            </li>
            <li>
                <img src="/public/pc/img/vip_diamond.png"/>
            </li>
        </ul>
        <p class="clear"></p>
        <div class="center_card">
            <span>如需办理会员卡，请致电客服</span>
            <span class="tell"><img src="/public/pc/img/tellicon.png"/>0570-12345678</span>
        </div>
    </div>
    <p class="clear"></p>
    <div class="banner loader">
        <a href="http://www.pocketchef.cn/download/掌上厨师.apk" target="_blank">
            <img src="/public/pc/img/down-banner.png"/>
        </a>
    </div>
</div>
<p class="clear"></p>
<?php include 'footer.php'; ?>
</body>
</html>

