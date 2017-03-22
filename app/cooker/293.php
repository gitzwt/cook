<?php
/**
 * Created by PhpStorm.
 * User: hui
 * Date: 2017/3/22
 * Time: 22:23
 */
?>


<!DOCTYPE html>
<html>
<head>
    <title>李国文</title>
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
                data: {auth: str, forward: 'http://melike.imwork.net/cook/cooker/293'},
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
                    data: {id: "293"}
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
                    data: {id: "293"}
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
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/3d79e5cca391d4b18de0b00b81877113.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/3d79e5cca391d4b18de0b00b81877113_300.jpg"/>
                <span class="label label-warning">奶油烤土豆</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/3f59c0b69dc895a53eee83ee586b15f3.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/3f59c0b69dc895a53eee83ee586b15f3_300.jpg"/>
                <span class="label label-warning">蒜茸炒荷兰豆</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/ad4e70ab82c7e8a15f6035bf3b596d47.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/ad4e70ab82c7e8a15f6035bf3b596d47_300.jpg"/>
                <span class="label label-warning">麦烧茄子</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/657f4b0c7853403b088856dd5026d6af.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/657f4b0c7853403b088856dd5026d6af_300.jpg"/>
                <span class="label label-warning">西芹百合</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/2e4584775879cb11e73cb9980c50bfb9.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/2e4584775879cb11e73cb9980c50bfb9_300.jpg"/>
                <span class="label label-warning">香菇油菜</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/7c718517293cc5204762c51999235f34.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/7c718517293cc5204762c51999235f34_300.jpg"/>
                <span class="label label-warning">干煸豆角</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/55ec786b302c244ea34fd56e8bdc8528.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/55ec786b302c244ea34fd56e8bdc8528_300.jpg"/>
                <span class="label label-warning">鱼香茄子</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/6427f2d6d7d851795f292ad1e0827ea5.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/6427f2d6d7d851795f292ad1e0827ea5_300.jpg"/>
                <span class="label label-warning">煎牛排</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/da27a5a937dfa091adf994d946d2288a.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/da27a5a937dfa091adf994d946d2288a_300.jpg"/>
                <span class="label label-warning">土豆沙拉</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/3b35875b3f475fd875ec92519b9ab98f.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/3b35875b3f475fd875ec92519b9ab98f_300.jpg"/>
                <span class="label label-warning">黄油烤鸡腿</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/fbee6ee2eff53d0aa1aaa0af2a6d1040.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/fbee6ee2eff53d0aa1aaa0af2a6d1040_300.jpg"/>
                <span class="label label-warning">油焖大虾</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/491db56cf85576e1fb0a7eae84516b70.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/491db56cf85576e1fb0a7eae84516b70_300.jpg"/>
                <span class="label label-warning">糖醋小排</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/47766b761912b22acf3bd62d254e65e0.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/47766b761912b22acf3bd62d254e65e0_300.jpg"/>
                <span class="label label-warning">清蒸鲈鱼</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/bbfd886999ca63004d6e38686c9f5a07.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/bbfd886999ca63004d6e38686c9f5a07_300.jpg"/>
                <span class="label label-warning">菠萝虾球</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/d5ab5248e5fe25ad592cb04f7fb95806.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/d5ab5248e5fe25ad592cb04f7fb95806_300.jpg"/>
                <span class="label label-warning">软炸里脊</span>
            </li>
        </ul>
        <script>$('.pic-list img').height($(window).width()/1.3);</script>
    </div>

    <div class="kinfo">
        <div class="name clearfix">
            <a href="http://melike.imwork.net/cook/cooker/293.php" id="bespeak_btn" class="btn btn-danger">立即预约</a>
            <img class="head" src="http://img.idachu.com/201412/b6a47baccc6258bcb11ed8417705eabd_300.JPG" class="head"/>
            <h4>李国文</h4>
            <div class="meta">
                <span class="star star-50"></span>
            </div>
        </div>
        <div class="des">
            擅长菜系：家常菜			</div>
        <hr/>
        <div class="des">
            大厨点评：李师傅做的菜品用心新颖，而且还是马克西姆西餐厅的西餐大厨，所以菜品味道可想而知哦。			</div>
        <div class="des btns">
            <span class="bespeak_num"><bespeak_num>829</bespeak_num>人预订过</span>

            <button id="fav_btn" class="btn btn-default btn-sm "><i class="glyphicon glyphicon-star-empty"></i> 收藏</button>
        </div>
        <hr/>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            大厨介绍
        </div>
        <ul class="list-group">
            <li class="list-group-item">年龄：<span style="margin-left:10px;">59岁（厨龄33年）</span></li>
            <li class="list-group-item">服务范围：<span style="margin-left:10px;">开化周边</span></li>
            <li class="list-group-item">服务时间：<span style="margin-left:10px;">周一14点到20点、周三14点到20点、周四14点到20点、周五14点到20点、周六14点到20点</span></li>
        </ul>
    </div>

    <div class="panel panel-default" id="comments">
        <div class="panel-heading">
            用户评论
        </div>
        <ul class="list-group">
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">139****9558</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-10</span>
                </div>
                <div class="c">
                    服务超赞，完全征服了我的胃					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">159****7652</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-13</span>
                </div>
                <div class="c">
                    服务超赞，完全征服了我的胃					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">137****9951</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-18</span>
                </div>
                <div class="c">
                    服务超赞，完全征服了我的胃					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">189****0005</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-16</span>
                </div>
                <div class="comment-imgs">
                    <img orig-src="http://img.idachu.com/201610/4153a3609f6d73127a0ac618addedf57.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201610/4153a3609f6d73127a0ac618addedf57_300.jpg"/>
                </div>
                <div class="c">
                    手艺很好！尤其鱼做的非常好吃！满意的一餐！					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">133****2589</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-20</span>
                </div>
                <div class="c">
                    服务超赞，完全征服了我的胃					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">186****1955</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-27</span>
                </div>
                <div class="comment-imgs">
                    <img orig-src="http://img.idachu.com/201608/43f1b929d3f0c5c42f279ea934da87d7.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201608/43f1b929d3f0c5c42f279ea934da87d7_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201608/e7cf0da3461f5fca911df508840a84ee.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201608/e7cf0da3461f5fca911df508840a84ee_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201608/d0d954655df3ecb3e776bced5ea7dbac.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201608/d0d954655df3ecb3e776bced5ea7dbac_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201608/f2db64975395c562d57e7a1773700844.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201608/f2db64975395c562d57e7a1773700844_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201608/9733361a7a698b08122b23edb8937d42.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201608/9733361a7a698b08122b23edb8937d42_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201608/28aa6ce2baefbebab75903ddfb0027b5.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201608/28aa6ce2baefbebab75903ddfb0027b5_300.jpg"/>
                </div>
                <div class="c">
                    師傅认真，干净 ，菜清淡适囗，謝謝哦！					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">138****9194</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-12</span>
                </div>
                <div class="comment-imgs">
                    <img orig-src="http://img.idachu.com/201608/6fc823ad4cc2ec3a88d95ca22b2c76d7.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201608/6fc823ad4cc2ec3a88d95ca22b2c76d7_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201608/b963a2cb286ea29db10fa3ac1c7eb565.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201608/b963a2cb286ea29db10fa3ac1c7eb565_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201608/9a29da1cfc0ddcda9c89c28b91b167eb.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201608/9a29da1cfc0ddcda9c89c28b91b167eb_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201608/bf86c8aef9f4c0d6048a295afddbb01a.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201608/bf86c8aef9f4c0d6048a295afddbb01a_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201608/f7636caeeb64f87778ae940c6398e339.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201608/f7636caeeb64f87778ae940c6398e339_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201608/680478fbf228dc58aa8de617db53d76f.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201608/680478fbf228dc58aa8de617db53d76f_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201608/26ce82a2b9725a23ec8b9e85fad70bd6.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201608/26ce82a2b9725a23ec8b9e85fad70bd6_300.jpg"/>
                </div>
                <div class="c">
                    人特别好 关键是每道菜做得都很棒！ 看来以后要经常约了 不愧是大厨					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">132****5433</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-25</span>
                </div>
                <div class="c">
                    服务超赞，完全征服了我的胃					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">138****9963</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-13</span>
                </div>
                <div class="c">
                    服务超赞，完全征服了我的胃					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">133****7525</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-10</span>
                </div>
                <div class="c">
                    好					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">133****7525</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-07</span>
                </div>
                <div class="c">
                    好					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">186****0125</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-29</span>
                </div>
                <div class="c">
                    师傅的西餐很棒，值得推荐					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">139****9106</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-19</span>
                </div>
                <div class="comment-imgs">
                    <img orig-src="http://img.idachu.com/201606/7468baacb20950eff672af7f3d40957a.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201606/7468baacb20950eff672af7f3d40957a_300.jpg"/>
                </div>
                <div class="c">
                    服务超赞，完全征服了我的胃					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">139****9106</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-11</span>
                </div>
                <div class="comment-imgs">
                    <img orig-src="http://img.idachu.com/201606/810a172da2cf0729d5c01d3c382003e4.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201606/810a172da2cf0729d5c01d3c382003e4_300.jpg"/>
                </div>
                <div class="c">
                    菜好人也好！					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">186****7481</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-07</span>
                </div>
                <div class="c">
                    师傅很好，干净整洁，菜品非常可口，下次继续合作！					</div>
            </li>
        </ul>
    </div>
</div>
<?php include '../footer.php'; ?>
</body>
</html>
