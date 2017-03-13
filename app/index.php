<?php
/**
 * Created by PhpStorm.
 * User: hui
 * Date: 2017/3/11
 * Time: 18:53
 */

?>


<!DOCTYPE html>
<html>
<head>
    <title>掌上厨师-开启私厨上门新风尚</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0,minimal-ui"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <meta name="format-detection" content="telephone=no"/>
    <link href="http://www.idachu.cn/icon/production/index.css?ver=<?php echo date('YmdHis')?>" rel="stylesheet"/>
    <meta name="keywords" content="">
    <meta name="description" content="掌上厨师,国内专业的私厨上门服务平台.北上广深浙八大菜系数千名大厨为你待命,app在线预约,金牌厨师上门做饭.家常用餐,宴请贵宾,掌上厨师为您私人订制上门服务">
    <script charset="utf-8" src="http://www.idachu.cn/icon/production/index.js?ver=<?php echo date('YmdHis')?>"></script>
    <script>
        function base_url(seg, params) {
            seg = seg || '/';
            var url = 'http://www.idachu.cn/'.replace(/\/$/, '') + '/' + seg.replace(/^\/|\/$/, '')
            if (params) {
                if (typeof(params) == 'object') {
                    params = $.param(params);
                }
                url += '?' + params;
            }
            return url;
        }
        function idachuapplogin(str) {
            $('#save_btn').do_action({
                url: base_url('user/do_app_login'),
                data: {auth: str, forward: 'http://www.idachu.cn/'},
                success: function (url) {
                    if (url) {
                        location.href = url;
                    } else {
                        location.href = base_url('');
                    }
                },
                error: function () {
                }
            })
        }
    </script>
    <script>
        var _hmt = _hmt || [];
        (function () {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?<?php echo date('YmdHis')?>";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
    <script>
        $(function () {
            $('#top-list div').css('display', 'block');
            $("#top-list").owlCarousel({
                singleItem: true,
                beforeMove: function () {
                    var i = this.currentItem + 1;
                    var $elem = $('.top-item').eq(i);
                    if ($elem && !$elem.data('owl-loaded') && $elem.attr('data-src')) {
                        $elem.data('owl-loaded', true).css('background-image', sprintf('url(%s)', $elem.attr('data-src')));
                    }
                }
            });
        })
    </script>
    <style>
        body {
            background: #eeeeee;
        }

        .top-item {
            display: none;
            height: 0;
            overflow: hidden;
            padding: 31.25% 0;
            background: none no-repeat center top;
            background-size: 100% auto;
        }

        #top-list .top-item:first-of-type {
            display: block;
        }

        .owl-theme .owl-controls {
            margin-top: -27px;
            text-align: center;
            position: relative;
        }

        .ord {
            padding: 8px;
            background: #fff;
            background: url(http://www.idachu.cn/icon/images/tcenter.png) center center no-repeat #fff;;
        }

        .quick, .party {
            float: left;
            width: 50%;
            height: 74px;
            text-align: center;
            font-size: 14px;
            line-height: 26px;
        }

        .ord-icon {
            width: 54px;
            height: 54px;
            margin: 0 auto;
            background: url(http://www.idachu.cn/icon/images/quick.png) 0 0 no-repeat;
            background-size: 100% 100%;
        }

        .container {
            padding-left: 0px;
            padding-right: 0px;
        }

        .hot {
            margin-top: 10px;
            background: #fff;
            padding: 10px;
        }

        h3 {
            margin: 0 auto 10px 0;
            font-size: 12px;
            font-weight: normal;
            text-align: center;
        }

        h3 i {
            height: 1px;
            background: #c3c3c3;
            width: 70px;
            display: inline-block;
            top: -3px;
            position: relative;
            margin: 0 5px;
        }

        .hot-item {
            border-radius: 5px;
            margin-bottom: 10px;
            width: 100%;
            padding: 25% 0;
        }

        .hot .hot-item:last-child {
            margin-bottom: 0;
        }
    </style>
</head>
<body>
<div id="top-list">
    <a class="top-item" style="background-image:url(http://img.idachu.com/201702/ac70ab709726b122263693c992355c6f.jpg);"
       href="http://www.idachu.cn/event/discount2017"></a>
    <a class="top-item" style="background-image:url(http://img.idachu.com/201603/8e2c123c9835607e1decaa6552453624.jpg);"
       href="http://www.idachu.cn/document/view/33"></a>
</div>
<div class="container">
    <div class="ord">
        <div class="quick touch touch-link">
            <div class="ord-icon"></div>
            家常用餐
            <a href="http://www.idachu.cn/bespeak"></a>
        </div>
        <div class="party touch touch-link">
            <div class="ord-icon"></div>
            私人定制
            <a href="http://www.idachu.cn/party/info/1009"></a>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="hot">
        <h3><i></i>热门服务<i></i></h3>
        <div class="hot-item touch touch-link"
             style="background:url(http://img.idachu.com/201702/c92e89942b857b2e1b7bba5eb3a3704f.jpg) 0 0 no-repeat;background-size:100% 100%;">
            <a href="http://www.idachu.cn/party/info/1027"></a>
        </div>
        <div class="hot-item touch touch-link"
             style="background:url(http://img.idachu.com/201702/70fba0e838518ee9412169e4d165a315.jpg) 0 0 no-repeat;background-size:100% 100%;">
            <a href="http://www.idachu.cn/ingenuity/cat/8"></a>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>

