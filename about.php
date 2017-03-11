<?php
/**
 * Created by PhpStorm.
 * User: hui
 * Date: 2017/3/11
 * Time: 17:34
 */

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>关于我们</title>
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
<p class="clear"></p>
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
    <p class="clear20"></p>
    <ul class="company_list">
        <li>
            <h2>关于我们</h2>
            <div class="abou_pl">
                <p>掌上厨师创办于2016年，是国内专业厨师上门服务平台，由掌上厨师（开化）信息技术有限公司开发并运营。</p>
                <p>
                    掌上厨师目前拥有超过3500名专业厨师，服务范围覆盖北京、上海、广州、深圳、杭州、开化；上门厨师均通过严格身份审核与试菜考评，服务菜品涵盖鲁、川、粤、闽、苏、浙、湘、徽八大菜系及法餐、意餐、日韩料理等西餐和西点；在四至六菜158元的家常用餐服务之外，掌上厨师的服务还包括家宴、生日宴、寿宴、公司聚餐、茶歇自助、年夜饭等私人订制高端宴请上门服务。用户通过掌上厨师App或掌上厨师微信公众号可在线预订，预约厨师上门，实现在家享受星级酒店般的餐饮服务。</p>
                <p>掌上厨师已开设多家线下体验馆。首家掌上厨师体验馆位于开化县798文化创意苑，是掌上厨师集多功能于一体的中央厨房，具有厨师招募、菜品研发、举办活动等功能。</p>
            </div>
        </li>
        <li>
            <h2>创始团队介绍</h2>
            <div class="abou_pl">
                <p>团队介绍：</p>
                <p>
                    掌上厨师团队都是一群爱生活、爱美食的阳光型吃货。他们均为朝气蓬勃的90后在校生，他们是一群有激情、有梦想，愿借助移动互联网O2O模式为大众提供个性化就餐方式的生活倡导者</p>
                <p>如果我们不能改变世界，那么至少可以改善生活——这就是这支年轻团队成立“掌上厨师”的初心。</p>
            </div>
        </li>
        <li>
            <h2>服务理念</h2>
            <div class="abou_pl">
                <p>理念：有爱，有掌上厨师。</p>
                <p>愿景：掌上厨师是一种生活方式，让厨师上门做饭成为一件普及的事：足不出户，尊享星级大厨上门服务！</p>
            </div>
        </li>
        <li>
            <h2>服务模式</h2>
            <div class="abou_pl">
                <p>家常用餐：上门为用户做四至六菜收取158元服务费。食材自备，可交由厨师免费代买。</p>
                <p>私人订制：家庭聚餐、公司聚餐、生日宴会、茶歇自助、年夜饭等，提供高端宴请上门服务。掌上厨师体验馆（开化798）亦可提供场地支持。</p>
            </div>
        </li>
        <li>
            <h2>服务流程</h2>
            <div class="abou_pl">
                <p>1）用户浏览掌上厨师App或微信公众号，选择厨师及服务类型，确定上门时间和用餐要求后提交预约（提前预约，体验更佳）；</p>
                <p>2）掌上厨师客服专员收到预约信息后，将在24小时之内与客户进行电话确认，核实无误即可派单；</p>
                <p>3）受约厨师接到派单指令后第一时间沟通客户确认用餐要求，服务当天携带专业装备及用料准时上门，带去星级用餐体验。</p>
            </div>
        </li>
        <li>
            <h2>预约专线</h2>
            <div class="abou_pl">
                <p>全国：05570-12345678</p>
            </div>
        </li>
    </ul>
</div>
<p class="clear"></p>
<?php include 'footer.php'; ?>
</body>
</html>