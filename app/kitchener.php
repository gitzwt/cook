<?php
/**
 * Created by PhpStorm.
 * User: hui
 * Date: 2017/3/11
 * Time: 20:16
 */

?>


<!DOCTYPE html>
<html>
<head>
    <title>全城大厨</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0,minimal-ui"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <meta name="format-detection" content="telephone=no"/>
    <link href="http://www.idachu.cn/icon/production/index.css?ver=<?php echo date('YmdHis')?>" rel="stylesheet"/>
    <meta name="keywords" content="">
    <meta name="description" content="掌上厨师,国内专业的私厨上门服务平台.北上广深浙八大菜系数千名大厨为你待命,app在线预约,金牌厨师上门做饭.家常用餐,宴请贵宾,掌上厨师为您私人订制上门服务">
    <script charset="utf-8" src="http://www.idachu.cn/icon/production/index.js?ver=<?php echo date('YmdHis')?>"></script>
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
                data: {auth: str, forward: 'http://melike.imwork.net/cook/kitchener'},
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
            hm.src = "//hm.baidu.com/hm.js?<?php echo date('YmdHis')?>";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script><script>
        $(function(){
            $('#pos_sel a').click(function(e){
                $('#pos_sel a').removeClass('on');
                $(this).addClass('on');
            })

            $('.more').more({
                url: "\/kitchener",
                max_page: 100,
                elem: '#kitchener_list ul'
            })
                .on('more_loaded', function(e, url){
                    //history.replaceState({}, '', url);
                })

            $('.dropdown').click(function(){
                $(this).toggleClass('open');
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
        .dropdown.open ul{
            border-top: medium none;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            margin-top: 0;
        }
        .dropdown ul {
            float: left;
            min-width: 300px;
        }
        .dropdown ul li {
            float: left;
            height: 40px;
            width: 33.33%;
        }
        header .dropdown ul li a, header .dropdown ul li a:hover{
            display: block;
            line-height: 40px;
            height:40px;
            text-align: center;
            width: 100%;
            color:#484848;font-size:14px;
        }
    </style>
</head>
<body class="folder">
<div class="container">
    <header id="header">
        <h1>全城大厨</h1>
        <div class="absl" style="left:4px;">
            <a href="">浙江<span class="caret"></span></a>
        </div>			<div class="absr dropdown">
            <a style="width:auto;padding-right:4px;" href="javascript:void(0)">菜系<span class="caret"></span></a>
            <ul class="dropdown-menu pull-right">
                <li><a href="">家常菜</a></li>
                <li><a href="">川菜</a></li>
                <li><a href="">粤菜</a></li>
                <li><a href="">湘菜</a></li>
                <li><a href="">鲁菜</a></li>
                <li><a href="">东北菜</a></li>
                <li><a href="">淮扬菜</a></li>
                <li><a href="">北京菜</a></li>
                <li><a href="">清真菜</a></li>
                <li><a href="">融合菜</a></li>
                <li><a href="">养生菜</a></li>
                <li><a href="">官府菜</a></li>
            </ul>
        </div>
    </header>

    <div id="kitchener_list" class="panel noheading panel-default">
        <ul class="media-list list-group">
            <li class="media list-group-item touch touch-link kitchener" kitchener_id="293">
                <div class="pull-left" href="http://melike.imwork.net/cook/cooker/293.php">
                    <img class="media-object" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/3d79e5cca391d4b18de0b00b81877113_300.jpg" alt="" width="120" height="90"/>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">奶油烤土豆</h4>
                    <div class="meta">
                        <span class="name">李国文</span>
                        <span class="star star-50"></span>
                        <div class="clearfix"></div>
                    </div>
                    <div class="meta tag">
                        家常菜		</div>
                    <div class="meta distance">

                        <span class="bespeak_num">827人预订过</span>
                    </div>
                    <img class="head" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201412/b6a47baccc6258bcb11ed8417705eabd_300.JPG"/>
                </div>
                <a href="http://melike.imwork.net/cook/cooker/293.php"></a>
                <div class="clearfix"></div>
            </li>							<li class="media list-group-item touch touch-link kitchener" kitchener_id="2905">
                <div class="pull-left" href="http://melike.imwork.net/cook/cooker/2905.php">
                    <img class="media-object" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/0db27573093beecf268099e81093c220_300.jpg" alt="" width="120" height="90"/>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">美味鱿鱼卷</h4>
                    <div class="meta">
                        <span class="name">罗红军</span>
                        <span class="star star-50"></span>
                        <div class="clearfix"></div>
                    </div>
                    <div class="meta tag">
                        家常菜、川菜、川湘菜		</div>
                    <div class="meta distance">

                        <span class="bespeak_num">366人预订过</span>
                    </div>
                    <img class="head" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201501/b26129699076b0033cfd675edbee436a_300.jpg"/>
                </div>
                <a href="http://melike.imwork.net/cook/cooker/2905.php"></a>
                <div class="clearfix"></div>
            </li>							<li class="media list-group-item touch touch-link kitchener" kitchener_id="433">
                <div class="pull-left" href="http://melike.imwork.net/cook/cooker/433.php">
                    <img class="media-object" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201604/555d9c25f2973c296507e66d71862354_300.jpg" alt="" width="120" height="90"/>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">葱烧海参</h4>
                    <div class="meta">
                        <span class="name">赵以超</span>
                        <span class="star star-50"></span>
                        <div class="clearfix"></div>
                    </div>
                    <div class="meta tag">
                        八大菜系、鲁菜		</div>
                    <div class="meta distance">

                        <span class="bespeak_num">148人预订过</span>
                    </div>
                    <img class="head" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201603/580f8f42557b4776296962b7ee565414_300.JPG"/>
                </div>
                <a href="http://melike.imwork.net/cook/cooker/433.php"></a>
                <div class="clearfix"></div>
            </li>							<li class="media list-group-item touch touch-link kitchener" kitchener_id="486">
                <div class="pull-left" href="http://melike.imwork.net/cook/cooker/486.php">
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

                        <span class="bespeak_num">1083人预订过</span>
                    </div>
                    <img class="head" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201408/d451f4b2a68b7f8963bca5be009cf5d9_300.JPG"/>
                </div>
                <a href="http://melike.imwork.net/cook/cooker/486.php"></a>
                <div class="clearfix"></div>
            </li>							<li class="media list-group-item touch touch-link kitchener" kitchener_id="5537">
                <div class="pull-left" href="http://melike.imwork.net/cook/cooker/5537.php">
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

                    </div>
                    <img class="head" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201703/b3d13b992a3e6b7b97466c6c61730ac0_300.jpg"/>
                </div>
                <a href="http://melike.imwork.net/cook/cooker/5537.php"></a>
                <div class="clearfix"></div>
            </li>							<li class="media list-group-item touch touch-link kitchener" kitchener_id="403">
                <div class="pull-left" href="http://melike.imwork.net/cook/cooker/403.php">
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

                        <span class="bespeak_num">960人预订过</span>
                    </div>
                    <img class="head" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201412/b8e99b2e516a9dce21724d868142fb82_300.JPG"/>
                </div>
                <a href="http://melike.imwork.net/cook/cooker/403.php"></a>
                <div class="clearfix"></div>
            </li>							<li class="media list-group-item touch touch-link kitchener" kitchener_id="2935">
                <div class="pull-left" href="http://melike.imwork.net/cook/cooker/2935.php">
                    <img class="media-object" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201412/a1dbcaf713c58ed7d55cfbdf2d87ad41_300.jpg" alt="" width="120" height="90"/>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">干煸四季豆</h4>
                    <div class="meta">
                        <span class="name">张亲团</span>
                        <span class="star star-50"></span>
                        <div class="clearfix"></div>
                    </div>
                    <div class="meta tag">
                        川菜、湘菜、北京菜		</div>
                    <div class="meta distance">

                        <span class="bespeak_num">786人预订过</span>
                    </div>
                    <img class="head" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201409/36762000889bca7f4736ed704773c40e_300.JPG"/>
                </div>
                <a href="http://melike.imwork.net/cook/cooker/2935.php"></a>
                <div class="clearfix"></div>
            </li>							<li class="media list-group-item touch touch-link kitchener" kitchener_id="372">
                <div class="pull-left" href="http://melike.imwork.net/cook/cooker/372.php">
                    <img class="media-object" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201501/d6145965387c06ec1cbcbfaad0a776af_300.JPG" alt="" width="120" height="90"/>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">糖醋里脊2</h4>
                    <div class="meta">
                        <span class="name">吴燕明</span>
                        <span class="star star-50"></span>
                        <div class="clearfix"></div>
                    </div>
                    <div class="meta tag">
                        北京菜、川菜、鲁菜		</div>
                    <div class="meta distance">

                        <span class="bespeak_num">1240人预订过</span>
                    </div>
                    <img class="head" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201501/815a38371ae1185764b2a4d79274f423_300.jpg"/>
                </div>
                <a href="http://melike.imwork.net/cook/cooker/372.php"></a>
                <div class="clearfix"></div>
            </li>							<li class="media list-group-item touch touch-link kitchener" kitchener_id="350">
                <div class="pull-left" href="http://melike.imwork.net/cook/cooker/350.php">
                    <img class="media-object" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/47766b761912b22acf3bd62d254e65e0_300.jpg" alt="" width="120" height="90"/>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">清蒸鲈鱼</h4>
                    <div class="meta">
                        <span class="name">罗正龙</span>
                        <span class="star star-50"></span>
                        <div class="clearfix"></div>
                    </div>
                    <div class="meta tag">
                        川菜、家常菜、湘菜、淮扬菜		</div>
                    <div class="meta distance">

                        <span class="bespeak_num">1219人预订过</span>
                    </div>
                    <img class="head" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201501/6c19114e5ac9499902398244ef52b434_300.JPG"/>
                </div>
                <a href="http://melike.imwork.net/cook/cooker/350.php"></a>
                <div class="clearfix"></div>
            </li>							<li class="media list-group-item touch touch-link kitchener" kitchener_id="340">
                <div class="pull-left" href="http://melike.imwork.net/cook/cooker/340.php">
                    <img class="media-object" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/3330df4cf73ea54f7a97535b64e169c4_300.jpg" alt="" width="120" height="90"/>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">爆炒螺片</h4>
                    <div class="meta">
                        <span class="name">孙红强</span>
                        <span class="star star-50"></span>
                        <div class="clearfix"></div>
                    </div>
                    <div class="meta tag">
                        鲁菜、粤菜、家常菜		</div>
                    <div class="meta distance">

                        <span class="bespeak_num">883人预订过</span>
                    </div>
                    <img class="head" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201501/e8219ceed2ca3e8004d8a5cd2540f041_300.JPG"/>
                </div>
                <a href="http://melike.imwork.net/cook/cooker/340.php"></a>
                <div class="clearfix"></div>
            </li>						</ul>
    </div>
    <div class="more"><span class="loading_ico"></span> 点击加载更多</div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
