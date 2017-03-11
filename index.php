<?php
/**
 * Created by PhpStorm.
 * User: hui
 * Date: 2017/3/5
 * Time: 15:14
 */

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>掌上厨师-开启私厨上门新风尚</title>
    <link rel="icon" href="cook.ico" type="image/icon"/>
    <meta name="keywords" content="">
    <meta name="description" content="掌上厨师,国内专业的私厨上门服务平台.北上广深杭八大菜系数千名大厨为你待命,app在线预约,金牌厨师上门做饭.家常用餐,宴请贵宾,掌上厨师为您私人订制上门服务">
    <link href="http://www.idachu.com/icon/production/pc.css" rel="stylesheet" type="text/css"/>
    <script src="http://www.idachu.com/icon/production/pc.js"></script>
    <script src="/public/pc/js/layer.js"></script>
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
    <script>
        $(function () {
            $('#how2use').fancybox({type: 'ajax'});
            $('.play').fancybox({
                autoSize: false,
                fitToView: true,
                padding: 8
            });
        })
    </script>
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
        <div class="spoken_lan">
            <p class="family">足不出户，尊享星级大厨</p>
            <span class="plex_lan">掌上厨师，国内专业的私厨上门服务平台</span>
            <p class="how_user"><a id="how2use" href="/how2use.php">如何使用</a> <a href="/bespeak.php"
                                                                                    class="">立即预订</a></p>
            <p class="clear"></p>
        </div>
    </div>
</div>
<div class="pink_bg">
    <div class="main">
        <p class="provide">我们提供以下普通用餐类型</p>
        <div class="circle">
            <a href="">
                <img src="/public/pc/img/recipe_index_4.png"/>
                <p>四菜158元套餐</p>
            </a>
            <a href="">
                <img src="/public/pc/img/recipe_index_5.png"/>
                <p>五菜158元套餐</p>
            </a>
            <a href="">
                <img src="/public/pc/img/recipe_index_6.png"/>
                <p>六菜158元套餐</p>
            </a>
        </div>
        <p class="clear"></p>
    </div>
</div>
<div class="black_w">
    <div class="main">
        <p class="provide">你还可以再预订以下类型的私人订制</p>
        <ul class="custom_lis">
            <li>
                <a href="">
                    <p class="img_po"><img src="/public/pc/img/recipe_index_1.jpg"/></p>
                    <p class="beij"></p>
                    <p class="fami_user">
                        春花秋月·宴<br/>
                        <span>适用于4-6人<br/>1288元</span>
                    </p>
                </a>
            </li>
            <li>
                <a href="">
                    <p class="img_po"><img src="/public/pc/img/recipe_index_1.jpg"/></p>
                    <p class="beij"></p>
                    <p class="fami_user">
                        稻谷飘香·宴<br/>
                        <span>适用于8-10人<br/>1588元</span>
                    </p>
                </a>
            </li>
            <li>
                <a href="">
                    <p class="img_po"><img src="/public/pc/img/recipe_index_1.jpg"/></p>
                    <p class="beij"></p>
                    <p class="fami_user">
                        浮郁金酒·宴<br/>
                        <span>适用于8-10人<br/>2888元</span>
                    </p>
                </a>
            </li>
            <li>
                <a href="">
                    <p class="img_po"><img src="/public/pc/img/recipe_index_1.jpg"/></p>
                    <p class="beij"></p>
                    <p class="fami_user">
                        春诵夏弦·宴<br/>
                        <span>适用于8-10人<br/>3588元</span>
                    </p>
                </a>
            </li>
        </ul>
        <p class="clear"></p>
    </div>
</div>
<div class="pink_bg">
    <div class="main">
        <p class="provide">你可以体验掌上厨师服务在...</p>
        <ul class="citylist">
            <li>
                <a class="aimger"><img src="/public/pc/img/bj.png"/></a>
                <a class="city_namer">北京</a>
            </li>
            <li>
                <a class="aimger"><img src="/public/pc/img/sh.png"/></a>
                <a class="city_namer">上海</a>
            </li>
            <li>
                <a class="aimger"><img src="/public/pc/img/gz.png"/></a>
                <a class="city_namer">广州</a>
            </li>
            <li>
                <a class="aimger"><img src="/public/pc/img/sz.png"/></a>
                <a class="city_namer">深圳</a>
            </li>
            <li>
                <a class="aimger"><img src="/public/pc/img/hz.jpg"/></a>
                <a class="city_namer">杭州</a>
            </li>
            <li>
                <a class="aimger"><img src="/public/pc/img/kh.jpg" style="width: 260px;height: 260px;"/></a>
                <a class="city_namer">开化</a>
            </li>
        </ul>
        <p class="clear"></p>
        <div class="center_city">
            <span>更多城市陆续开通中...</span>
        </div>
    </div>
</div>
<div class="banner ind_ban">
    <div class="famili_font">
        <h3>足不出户，尊享米其林级大厨</h3>
        <span class="love_shu">掌上厨师的厨师将米其林三星级服务带入每一个家庭</span><br/>
        <a onclick="
            layer.open({
              type: 2,
              title: false,
              area: ['630px', '360px'],
              shade: 0.8,
              closeBtn: 0,
              shadeClose: true,
              content: 'http://www.pocketchef.cn/video/about.mp4'
            });
        "><img src="/public/pc/img/play.png"/></a>
    </div>
</div>
<div class="black_w">
    <div class="main">
        <ul class="icon_list">
            <li>
                <span><img src="/public/pc/img/loack.png"/></span>
                <h3>安全保障</h3>
                <p>专业厨师，资质齐全<br/>确保安全卫生高品质</p>
                <p class="clear"></p>
            </li>
            <li>
                <span><img src="/public/pc/img/fuwu.png"/></span>
                <h3>服务保障</h3>
                <p>完善的团队，严格的管理<br/>清晰的工作流程，确保服务到位</p>
                <p class="clear"></p>
            </li>
            <li>
                <span><img src="/public/pc/img/kefu.png"/></span>
                <h3>客服保障</h3>
                <p>客服全程跟进服务流程<br/>了解您的需求，随时答疑解惑</p>
                <p class="clear"></p>
            </li>
            <li>
                <span><img src="/public/pc/img/tiexin.png"/></span>
                <h3>贴心服务</h3>
                <p>上门服务统一整洁着装<br/>做完菜后将台面收拾整理</p>
                <p class="clear"></p>
            </li>
        </ul>
        <p class="clear">;</p>
    </div>
</div>
<p class="clear"></p>
<?php include 'footer.php'; ?>
</body>
</html>


