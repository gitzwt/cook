<?php
/**
 * Created by PhpStorm.
 * User: hui
 * Date: 2017/3/11
 * Time: 20:46
 */

?>


<!DOCTYPE html>
<html>
<head>
    <title>我的收藏</title>
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
                data: {auth: str, forward: 'http://www.idachu.cn/user/favorite'},
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
        $(function(){
            $('#pos_sel a').click(function(e){
                $('#pos_sel a').removeClass('on');
                $(this).addClass('on');
            })

            $('#kitchener_list li').click(function(){
                location.href = $(this).attr('href');
            })

            $('.more').more({
                url: "http:\/\/www.idachu.cn\/user\/favorite\/list",
                max_page: 1,
                elem: '#kitchener_list ul'
            })

            $("img").unveil(150);
        })
    </script>
    <style>
        header{
            margin-bottom:0;
        }
        #kitchener_list.panel, ul.media-list li:first-child{
            border-top:0;
        }
        .panel{
            border-radius: 0;
        }
        #cur_addr{
            margin-top:10px;
        }
        #cur_addr {
            padding:10px;
        }
        .list-group-item {
            padding:8px 4px;
        }
        .container{margin:12px 0 0 0;}
    </style>
</head>
<body>
<div class="container">
    <div id="kitchener_list" class="panel noheading panel-default">
        <ul class="media-list list-group">
            <li class="media list-group-item touch touch-link kitchener" kitchener_id="403">
                <div class="pull-left" href="http://www.idachu.cn/kitchener/view/403">
                    <img class="media-object" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/7a3b7a876151675c7f9439169f77c0f0_300.jpg" alt="" width="120" height="90"/>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">麒麟桂鱼</h4>
                    <div class="meta">
                        <span class="name">朱正香</span>
                        <span class="star star-50"></span>
                        <div class="clearfix"></div>
                    </div>
                    <div class="meta tag">
                        粤菜、川菜、私房菜、家常菜		</div>
                    <div class="meta distance">
                        <i class="glyphicon glyphicon-map-marker"></i> 6.7公里
                        <span class="bespeak_num">960人预订过</span>
                    </div>
                    <img class="head" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201412/b8e99b2e516a9dce21724d868142fb82_300.JPG"/>
                </div>
                <a href="http://www.idachu.cn/kitchener/view/403"></a>
                <div class="clearfix"></div>
            </li>							<li class="media list-group-item touch touch-link kitchener" kitchener_id="5537">
                <div class="pull-left" href="http://www.idachu.cn/kitchener/view/5537">
                    <img class="media-object" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201609/74ed6d0cc07c42824b406b5c47945798_300.jpg" alt="" width="120" height="90"/>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">油焖大虾</h4>
                    <div class="meta">
                        <span class="name">刘利明</span>
                        <span class="star star-50"></span>
                        <div class="clearfix"></div>
                    </div>
                    <div class="meta tag">
                        粤菜、川菜、湘菜、京味菜		</div>
                    <div class="meta distance">
                        <i class="glyphicon glyphicon-map-marker"></i> 13.3公里
                    </div>
                    <img class="head" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201703/b3d13b992a3e6b7b97466c6c61730ac0_300.jpg"/>
                </div>
                <a href="http://www.idachu.cn/kitchener/view/5537"></a>
                <div class="clearfix"></div>
            </li>							<li class="media list-group-item touch touch-link kitchener" kitchener_id="486">
                <div class="pull-left" href="http://www.idachu.cn/kitchener/view/486">
                    <img class="media-object" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/6c22fb56475b0a681ab0488a5008eee5_300.jpg" alt="" width="120" height="90"/>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">宫爆明虾球</h4>
                    <div class="meta">
                        <span class="name">仇志爱</span>
                        <span class="star star-50"></span>
                        <div class="clearfix"></div>
                    </div>
                    <div class="meta tag">
                        川菜、粤菜、家常菜		</div>
                    <div class="meta distance">
                        <i class="glyphicon glyphicon-map-marker"></i> 6.8公里
                        <span class="bespeak_num">1083人预订过</span>
                    </div>
                    <img class="head" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201408/d451f4b2a68b7f8963bca5be009cf5d9_300.JPG"/>
                </div>
                <a href="http://www.idachu.cn/kitchener/view/486"></a>
                <div class="clearfix"></div>
            </li>						</ul>
    </div>
</div>
<div style="padding:0 5px;">
    <div class="more"><span class="loading_ico"></span> 点击查看更多</div>
</div>
<div id="footer">
    <footer>
        <section class="touch">
            <a href="http://www.idachu.cn/">
                <i class="glyphicon glyphicon-home"></i>
                <span>首页</span>
            </a>
        </section>
        <section class="touch">
            <a href="http://www.idachu.cn/kitchener">
                <i class="glyphicon glyphicon-cloud"></i>
                <span>大厨</span>
            </a>
        </section>
        <section class="touch quick-add">
            <a href="http://www.idachu.cn/bespeak">
                <i class="glyphicon"></i>
                <span>快速预约</span>
            </a>
        </section>
        <section class="touch">
            <a href="http://www.idachu.cn/user/bespeak">
                <i class="glyphicon glyphicon-list"></i>
                <span>我的订单</span>
            </a>
        </section>
        <section class="touch">
            <a href="http://www.idachu.cn/user">
                <i class="glyphicon glyphicon-user"></i>
                <span>我</span>
            </a>
        </section>
    </footer>
    <div class="footer-more"><span></span></div>
    <div id="alert">
        <span></span>
    </div></div></body>
</html>
