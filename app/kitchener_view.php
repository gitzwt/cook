<?php
/**
 * Created by PhpStorm.
 * User: hui
 * Date: 2017/3/11
 * Time: 20:43
 */

?>


<!DOCTYPE html>
<html>
<head>
    <script>
        wxData = {
            'appId': 'wx6fd9b15a00219c54', // 服务号可以填写appId，没有则留空
            'imgUrl': 'http://img.idachu.com/201501/b26129699076b0033cfd675edbee436a_300.jpg', // 分享显示的图标
            'link': 'http://www.idachu.cn/kitchener/view/2905', // 分享链接
            'title': "爱大厨厨师罗红军", // 分享标题
            'desc': '69元约个私厨上门做饭，窝在沙发上看完电视，美味佳肴就上桌啦！' // 分享内容
        };
    </script>
    <title>罗红军</title>
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
                data: {auth: str, forward: 'http://www.idachu.cn/kitchener/view/2905'},
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
    </script><style>
        .pic-list{margin:0 -8px 10px;}
        .pic-list ul, .pic-list li{
            margin:0;padding:0;list-style:none;
        }

        .pic-list li{float:left;width:100%;}
        .pic-list li img{width:100%;height:100%;}
        .owl-theme .owl-controls {
            margin-top: 0px;
            text-align: center;
            width: 100%;
        }
        .owl-theme .owl-controls .owl-page span{
            height: 2px;
            background: #869791;
        }

        .owl-theme .owl-controls .owl-page.active span,
        .owl-theme .owl-controls.clickable .owl-page:hover span{
            background: #f0ad4e;
        }
        .pic-list .label{position:absolute;left:10px;bottom:10px;font-size:12px;}
        .kinfo{
            margin-bottom:10px;
            padding:0 10px;
        }
        .kinfo .name{
            padding-bottom:10px;
        }
        .kinfo .head{
            width:62px;
            height:62px;
            border:1px solid #ccc;
            padding:1px;
            border-radius: 4px;
            float:left;
            margin-right:10px;
        }
        h4{margin:0 10px 3px 0;}
        .kinfo .met{height:30px;position:relative;margin:0 87px 0 -20px;border-top:solid 1px #ccc;padding:5px 25px 0px 100px;}
        .kinfo .met img{position:absolute;top:-31px;left:30px;}
        .kinfo button{margin-right:3px;}
        .item-rank-rst{margin-top:3px;}
        .kinfo .des{
            font-size:13px;
            margin-bottom:10px;
        }
        .oinfo{padding:10px 0 0 0;}
        hr{margin:0px -18px 10px;}
        #bespeak_btn{float:right;margin-right:-10px;margin-top:15px;}
        .meta{height:20px;font-size:12px;color:#aaa;}
        .btns{padding-left:5px;line-height:20px;text-align:right;margin-bottom:10px;}
        .btns span{font-size:14px;padding-left:10px;color:#ccc;}
        .btns span.bespeak_num{font-size:14px;line-height: 30px;float:left;padding-left:0;color:#f06e43;}
        .btns span.bespeak_num bespeak_num{font-size: 200%;padding-right:3px;font-style:italic;display:inline-block;}//transform: scale(2) translateY(-2px);-webkit-transform: scale(2) translateY(-2px);
        .done .glyphicon-star-empty:before {content: "\e006";}
        .btn-default.done {
            border-color: #f06e43;
            color:#f06e43;
        }
        .comment .n1{
            padding:0 0 2px 0px;
        }
        .comment .n{
            font-size:14px; font-weight: bold;
        }
        .comment .star{
            margin-top:-2px;
        }
        .comment .t{
            float:right;
            color:#aaa;
        }
        .comment .c{

        }
        .comment-imgs{padding:2px 0;}
        .comment-imgs img{width:60px;height:60px;margin-bottom:4px;}
    </style>
    <script language="javascript">
        $(document).on("WeixinJSBridgeReady",function() {
            $('.comment-imgs').each(function(){
                $(this).find('img').on('click', function(){
                    var current = $(this).attr('orig-src');
                    var list = [];
                    $(this).parent().find('img').each(function(){
                        list.push($(this).attr('orig-src'))
                    })
                    wx.previewImage({
                        current: current, // 当前显示的图片链接
                        urls: list // 需要预览的图片链接列表
                    });
                })
            })
            $('.pic-list img[orig-src]').on('click', function(){
                var current = $(this).attr('orig-src');
                var list = [];
                $('.pic-list img[orig-src]').each(function(){
                    list.push($(this).attr('orig-src'))
                })
                wx.previewImage({
                    current: current, // 当前显示的图片链接
                    urls: list // 需要预览的图片链接列表
                });
            })
        })
    </script>
    <script>
        $(function(){
            $('.pic-list li').show();
            $(".pic-list ul").owlCarousel({
                singleItem: true,
                lazyLoad : true,
                lazyEffect: false
            });

            $("img").unveil(150);
        })
    </script>
    <script>
        $(function(){
            $('#digg_btn').on('click.digg', function(){
                var num = parseInt($('#digg_num').text()) || 0;
                var act;
                if($(this).hasClass('done')){
                    act = 'delete';
                    num--;
                    if(num <= 0){
                        num = '';
                    }
                }else{
                    act = 'add';
                    num++;
                }
                $.ajax({
                    url: base_url('api/digg/kitchener/' + act),
                    type: 'POST',
                    data: {id: "2905"}
                })
                $(this).find('i').animate({transform: 'scale(2)'},200).animate({transform: 'scale(1)'}).queue(function(){
                    $('#digg_num').text(num);
                    $(this).dequeue();
                })
                $(this).toggleClass('done');
            })

            $('#fav_btn').on('click.fav', function(){
                var act;
                if($(this).hasClass('done')){
                    act = 'delete';
                }else{
                    act = 'add';
                }
                $.ajax({
                    url: base_url('api/favorite/kitchener/' + act),
                    type: 'POST',
                    data: {id: "2905"}
                })
                $(this).find('i').animate({transform: 'scale(2)'},200).animate({transform: 'scale(1)'});
                $(this).toggleClass('done');
            })
        })
    </script>
</head>
<body>
<div class="container">
    <div class="pic-list">
        <ul>
            <li >
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/0db27573093beecf268099e81093c220.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/0db27573093beecf268099e81093c220_300.jpg"/>
                <span class="label label-warning">美味鱿鱼卷</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/6c22fb56475b0a681ab0488a5008eee5.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/6c22fb56475b0a681ab0488a5008eee5_300.jpg"/>
                <span class="label label-warning">宫爆明虾球</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/133d1850e9aa9718d132ebbb521abac9.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/133d1850e9aa9718d132ebbb521abac9_300.jpg"/>
                <span class="label label-warning">清炒西兰花</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/ced41ebe1fc02f8e9eb94396cc4bc2fa.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/ced41ebe1fc02f8e9eb94396cc4bc2fa_300.jpg"/>
                <span class="label label-warning">杏鲍菇炒肉片</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/f694b51ae1ef4368f14ad8008ae87ef5.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/f694b51ae1ef4368f14ad8008ae87ef5_300.jpg"/>
                <span class="label label-warning">红烧黄花鱼</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/1a2b191324ec696a05fe425ccc302990.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/1a2b191324ec696a05fe425ccc302990_300.jpg"/>
                <span class="label label-warning">茄汁鸡翅</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/a3f941204980aab155cc0cf00faf5cee.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/a3f941204980aab155cc0cf00faf5cee_300.jpg"/>
                <span class="label label-warning">宫爆鸡丁</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/23c364f26fe16d9f9ec1946c58899246.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/23c364f26fe16d9f9ec1946c58899246_300.jpg"/>
                <span class="label label-warning">韭菜墨鱼仔</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/6ebf01553a0572061b3ef421b9598e50.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/6ebf01553a0572061b3ef421b9598e50_300.jpg"/>
                <span class="label label-warning">糖醋排骨</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/fbee6ee2eff53d0aa1aaa0af2a6d1040.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/fbee6ee2eff53d0aa1aaa0af2a6d1040_300.jpg"/>
                <span class="label label-warning">油焖大虾</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/4bb38d3015befd805019c4564eacc0a6.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/4bb38d3015befd805019c4564eacc0a6_300.jpg"/>
                <span class="label label-warning">水煮肉片</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/f01a9da01ba30dd98e203123f167f344.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/f01a9da01ba30dd98e203123f167f344_300.jpg"/>
                <span class="label label-warning">松鼠鱼</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201509/c15836b124b240b12b20d033a290380e.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201509/c15836b124b240b12b20d033a290380e_300.jpg"/>
                <span class="label label-warning">香辣虾</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/214618c0751552951b8e72b886d0ee03.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/214618c0751552951b8e72b886d0ee03_300.jpg"/>
                <span class="label label-warning">糖醋里脊2</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/594d2386a6da4f1a4f78b769ee310acc.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/594d2386a6da4f1a4f78b769ee310acc_300.jpg"/>
                <span class="label label-warning">松仁玉米</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/47766b761912b22acf3bd62d254e65e0.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/47766b761912b22acf3bd62d254e65e0_300.jpg"/>
                <span class="label label-warning">清蒸鲈鱼</span>
            </li>
        </ul>
        <script>$('.pic-list img').height($(window).width()/1.3);</script>
    </div>

    <div class="kinfo">
        <div class="name clearfix">
            <img class="head" src="http://img.idachu.com/201501/b26129699076b0033cfd675edbee436a_300.jpg" class="head"/>
            <h4>罗红军</h4>
            <div class="meta">
                <span class="star star-50"></span>
            </div>
        </div>
        <div class="alert alert-warning">
            大厨预约已满
        </div>
        <div class="des">
            擅长菜系：家常菜、川菜、川湘菜			</div>
        <hr/>
        <div class="des">
            大厨点评：罗师傅从事厨师行业12年，馋嘴系列是他的拿手菜，烧茄子做的更是特别好吃。			</div>
        <div class="des btns">
            <span class="bespeak_num"><bespeak_num>366</bespeak_num>人预订过</span>

            <button id="fav_btn" class="btn btn-default btn-sm "><i class="glyphicon glyphicon-star-empty"></i> 收藏</button>
        </div>
        <hr/>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            大厨介绍
        </div>
        <ul class="list-group">
            <li class="list-group-item">年龄：<span style="margin-left:10px;">36岁（厨龄15年）</span></li>
            <li class="list-group-item">服务范围：<span style="margin-left:10px;">通州马厂</span></li>
            <li class="list-group-item">服务时间：<span style="margin-left:10px;"></span></li>
        </ul>
    </div>

    <div class="panel panel-default" id="comments">
        <div class="panel-heading">
            用户评论
        </div>
        <ul class="list-group">
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">139****7055</span>
                    <span class="star star-50"></span>
                    <span class="t">2016-11-25</span>
                </div>
                <div class="c">
                    服务超赞，完全征服了我的胃					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">158****1930</span>
                    <span class="star star-50"></span>
                    <span class="t">2016-11-18</span>
                </div>
                <div class="c">
                    非常好					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">139****0615</span>
                    <span class="star star-50"></span>
                    <span class="t">2016-10-21</span>
                </div>
                <div class="c">
                    服务超赞，完全征服了我的胃					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">183****9918</span>
                    <span class="star star-50"></span>
                    <span class="t">2016-10-18</span>
                </div>
                <div class="c">
                    服务超赞，完全征服了我的胃					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">186****3346</span>
                    <span class="star star-50"></span>
                    <span class="t">2016-09-26</span>
                </div>
                <div class="c">
                    服务超赞，完全征服了我的胃					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">匿名</span>
                    <span class="star star-50"></span>
                    <span class="t">2016-09-25</span>
                </div>
                <div class="comment-imgs">
                    <img orig-src="http://img.idachu.com/201609/adc3087da2dcca8bfe1e63e964a721f1.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201609/adc3087da2dcca8bfe1e63e964a721f1_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201609/8f351bed99b3ba9e7609fbcdbc34e1f7.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201609/8f351bed99b3ba9e7609fbcdbc34e1f7_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201609/febd19fd104d6368e2588203fa14a202.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201609/febd19fd104d6368e2588203fa14a202_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201609/60a52f5299f1a934cba00c7ac035f313.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201609/60a52f5299f1a934cba00c7ac035f313_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201609/12efbef28d155e528d17dbe1ba2db0e5.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201609/12efbef28d155e528d17dbe1ba2db0e5_300.jpg"/>
                </div>
                <div class="c">
                    太好了，色香味俱全，罗师傅很棒！					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">139****0615</span>
                    <span class="star star-50"></span>
                    <span class="t">2016-07-13</span>
                </div>
                <div class="c">
                    服务好，味道好					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">186****0101</span>
                    <span class="star star-50"></span>
                    <span class="t">2016-06-30</span>
                </div>
                <div class="comment-imgs">
                    <img orig-src="http://img.idachu.com/201606/e88cd4c6af30fe0c41c8120e590526b5.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201606/e88cd4c6af30fe0c41c8120e590526b5_300.jpg"/>
                </div>
                <div class="c">
                    味道超级棒					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">138****7228</span>
                    <span class="star star-50"></span>
                    <span class="t">2016-06-14</span>
                </div>
                <div class="comment-imgs">
                    <img orig-src="http://img.idachu.com/201606/01c0c8e8e80d08a5e27f9e0a5b2d7e3c.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201606/01c0c8e8e80d08a5e27f9e0a5b2d7e3c_300.jpg"/>
                </div>
                <div class="c">
                    罗师傅手艺非常好，已经第二次点了，孩子们都爱吃罗师傅做的菜！点赞！					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">匿名</span>
                    <span class="star star-10"></span>
                    <span class="t">2016-06-10</span>
                </div>
                <div class="c">
                    我发现来的不是这个厨师！好奇怪。突然发现的					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">137****6163</span>
                    <span class="star star-50"></span>
                    <span class="t">2016-06-08</span>
                </div>
                <div class="c">
                    服务超赞，完全征服了我的胃					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">136****2999</span>
                    <span class="star star-50"></span>
                    <span class="t">2016-01-31</span>
                </div>
                <div class="c">
                    服务超赞，完全征服了我的胃					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">135****6286</span>
                    <span class="star star-50"></span>
                    <span class="t">2015-12-12</span>
                </div>
                <div class="comment-imgs">
                    <img orig-src="http://img.idachu.com/201512/b16c01f56004de4775e6d6e520a296af.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201512/b16c01f56004de4775e6d6e520a296af_300.jpg"/>
                </div>
                <div class="c">
                    大厨很干净麻利，大虾做很正宗！酸菜鱼也很美味！排骨也超赞！					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">189****4651</span>
                    <span class="star star-50"></span>
                    <span class="t">2015-12-12</span>
                </div>
                <div class="comment-imgs">
                    <img orig-src="http://img.idachu.com/201512/b4822285c5ab1128e1998c2b7a1f04c3.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201512/b4822285c5ab1128e1998c2b7a1f04c3_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201512/5016a4c030eabb58e644afe3c836c8e2.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201512/5016a4c030eabb58e644afe3c836c8e2_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201512/646e159471e4b64a63026fe3c654dd9a.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201512/646e159471e4b64a63026fe3c654dd9a_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201512/b3ceff79fc980126d60e4295cae314fc.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201512/b3ceff79fc980126d60e4295cae314fc_300.jpg"/>
                </div>
                <div class="c">
                    罗师傅准时上门，2小时完成，态度很好，味道不错，就是稍有些咸，可能我们家人口淡。再次感谢！					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">136****3102</span>
                    <span class="star star-50"></span>
                    <span class="t">2015-12-10</span>
                </div>
                <div class="c">
                    很好吃，以后会经常定，比从外面吃强多了					</div>
            </li>
        </ul>
    </div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
