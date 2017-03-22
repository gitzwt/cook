<?php
/**
 * Created by PhpStorm.
 * User: hui
 * Date: 2017/3/22
 * Time: 23:04
 */
?>


<!DOCTYPE html>
<html>
<head>
    <title>刘利明</title>
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
                data: {auth: str, forward: 'http://melike.imwork.net/cook/cooker/5537'},
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
                    data: {id: "5537"}
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
                    data: {id: "5537"}
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
                <img class="lazyOwl" orig-src="http://img.idachu.com/201609/74ed6d0cc07c42824b406b5c47945798.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201609/74ed6d0cc07c42824b406b5c47945798_300.jpg"/>
                <span class="label label-warning">油焖大虾</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/8a9c9248716c1656045799c6c4263ebd.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/8a9c9248716c1656045799c6c4263ebd_300.jpg"/>
                <span class="label label-warning">红焖甲鱼</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201604/7c7d9361380e50f20230f03bb8d30eaf.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201604/7c7d9361380e50f20230f03bb8d30eaf_300.jpg"/>
                <span class="label label-warning">毛血旺</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201604/0e5fb9caddbb1743567786992ec9440d.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201604/0e5fb9caddbb1743567786992ec9440d_300.jpg"/>
                <span class="label label-warning">麻辣香锅</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201604/0f42665ffc63868a814054866b1da4df.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201604/0f42665ffc63868a814054866b1da4df_300.jpg"/>
                <span class="label label-warning">水晶虾仁</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201604/435063ac60c4d97278216b1d559821f2.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201604/435063ac60c4d97278216b1d559821f2_300.jpg"/>
                <span class="label label-warning">焦溜肉片</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/bbdda409198eedd6aa044bee0c3c5f41.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/bbdda409198eedd6aa044bee0c3c5f41_300.jpg"/>
                <span class="label label-warning">黑椒牛柳</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/0b130e399cc677282fe4d1683ddd5b9d.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/0b130e399cc677282fe4d1683ddd5b9d_300.jpg"/>
                <span class="label label-warning">小炒黄牛肉</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201604/88df9fcd4ec971ed1b195fad2d1e84cf.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201604/88df9fcd4ec971ed1b195fad2d1e84cf_300.jpg"/>
                <span class="label label-warning">锅包肉</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/578089ca8d3c1e5faba76ca4bb0dba34.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/578089ca8d3c1e5faba76ca4bb0dba34_300.jpg"/>
                <span class="label label-warning">茄子豆角</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201512/898df6746912748a699c83cd793da985.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201512/898df6746912748a699c83cd793da985_300.jpg"/>
                <span class="label label-warning">清蒸鲈鱼</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201604/555d9c25f2973c296507e66d71862354.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201604/555d9c25f2973c296507e66d71862354_300.jpg"/>
                <span class="label label-warning">葱烧海参</span>
            </li>
        </ul>
        <script>$('.pic-list img').height($(window).width()/1.3);</script>
    </div>

    <div class="kinfo">
        <div class="name clearfix">
            <img class="head" src="http://img.idachu.com/201703/b3d13b992a3e6b7b97466c6c61730ac0_300.jpg" class="head"/>
            <h4>刘利明</h4>
            <div class="meta">
                <span class="star star-50"></span>
            </div>
        </div>
        <div class="alert alert-warning">
            大厨预约已满
        </div>
        <div class="des">
            擅长菜系：粤菜、川菜、湘菜、京味菜			</div>
        <hr/>
        <div class="des">
            大厨点评：师傅有着多年大饭店酒店的工作经历，做出的菜品色香味型俱全，手法专业操作娴熟，喜欢的朋友速度预约哦。			</div>
        <div class="des btns">

            <button id="fav_btn" class="btn btn-default btn-sm done"><i class="glyphicon glyphicon-star-empty"></i> 收藏</button>
        </div>
        <hr/>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            大厨介绍
        </div>
        <ul class="list-group">
            <li class="list-group-item">年龄：<span style="margin-left:10px;">33岁（厨龄13年）</span></li>
            <li class="list-group-item">服务范围：<span style="margin-left:10px;">江干区，余杭区，滨江区</span></li>
            <li class="list-group-item">服务时间：<span style="margin-left:10px;">周一10点到12点、周三10点到12点、周三17点到19点</span></li>
        </ul>
    </div>

    <div class="alert alert-warning">暂无用户评论</div>
</div>
<?php include '../footer.php'; ?>
</body>
</html>
