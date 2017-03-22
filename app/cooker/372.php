<?php
/**
 * Created by PhpStorm.
 * User: hui
 * Date: 2017/3/22
 * Time: 23:12
 */
?>


<!DOCTYPE html>
<html>
<head>
    <title>吴燕明</title>
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
                data: {auth: str, forward: 'http://melike.imwork.net/cook/cooker/372'},
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
                    data: {id: "372"}
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
                    data: {id: "372"}
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
                <img class="lazyOwl" orig-src="http://img.idachu.com/201501/d6145965387c06ec1cbcbfaad0a776af.JPG" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201501/d6145965387c06ec1cbcbfaad0a776af_300.JPG"/>
                <span class="label label-warning">糖醋里脊2</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201410/d16215841e9aeb2bb15cf41fe871f3c9.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201410/d16215841e9aeb2bb15cf41fe871f3c9_300.jpg"/>
                <span class="label label-warning">松鼠鱼</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201405/72d46ffe43623ab9446d8700fcf76d39.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201405/72d46ffe43623ab9446d8700fcf76d39_300.jpg"/>
                <span class="label label-warning">竹荪炖牛腩</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201405/679af7a7a112cdb1bfe6533115e21cc3.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201405/679af7a7a112cdb1bfe6533115e21cc3_300.jpg"/>
                <span class="label label-warning">啤酒鸭</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201405/60e5237b78ff3d0181caed654a6a0787.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201405/60e5237b78ff3d0181caed654a6a0787_300.jpg"/>
                <span class="label label-warning">毛氏红烧肉</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/a108320d411ec78548a60bdd00f60016.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/a108320d411ec78548a60bdd00f60016_300.jpg"/>
                <span class="label label-warning">宫保鸡丁</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/68a31522c0a8dba6d2ea5c6f3c954b8a.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/68a31522c0a8dba6d2ea5c6f3c954b8a_300.jpg"/>
                <span class="label label-warning">鱼香肉丝</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/37c25711fe7a7b537d04d90c48f059da.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/37c25711fe7a7b537d04d90c48f059da_300.jpg"/>
                <span class="label label-warning">酱爆鸡丁</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/dcd54c570accd1e0c2a472a8695905b0.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/dcd54c570accd1e0c2a472a8695905b0_300.jpg"/>
                <span class="label label-warning">蒜香有机花菜</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/ca5915f1c32b77079d9d61235dccc594.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/ca5915f1c32b77079d9d61235dccc594_300.jpg"/>
                <span class="label label-warning">酸菜鱼</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/bee90d23e10f80386a224289cb69f6eb.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/bee90d23e10f80386a224289cb69f6eb_300.jpg"/>
                <span class="label label-warning">蚂蚁上树</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/58419105fd1bd97907d9de5b6616fc10.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/58419105fd1bd97907d9de5b6616fc10_300.jpg"/>
                <span class="label label-warning">锅包肉</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/bed17eb2c18574774900cbb7b485711e.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/bed17eb2c18574774900cbb7b485711e_300.jpg"/>
                <span class="label label-warning">金汤肥牛</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/1b70131777f3aeb60320ed7a1dab4294.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/1b70131777f3aeb60320ed7a1dab4294_300.jpg"/>
                <span class="label label-warning">葱烧海参</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/6145d38463b7dc0b651baee634ce8cca.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/6145d38463b7dc0b651baee634ce8cca_300.jpg"/>
                <span class="label label-warning">拔丝红薯</span>
            </li>
        </ul>
        <script>$('.pic-list img').height($(window).width()/1.3);</script>
    </div>

    <div class="kinfo">
        <div class="name clearfix">
            <a href="http://melike.imwork.net/cook/cooker/372.php" id="bespeak_btn" class="btn btn-danger">立即预约</a>
            <img class="head" src="http://img.idachu.com/201501/815a38371ae1185764b2a4d79274f423_300.jpg" class="head"/>
            <h4>吴燕明</h4>
            <div class="meta">
                <span class="star star-50"></span>
            </div>
        </div>
        <div class="des">
            擅长菜系：北京菜、川菜、鲁菜			</div>
        <hr/>
        <div class="des">
            大厨点评：吴师傅是来自广电总局的高级厨师，菜品从口味和造型上都是享受。味道和品相控的吃货们别等了！			</div>
        <div class="des btns">
            <span class="bespeak_num"><bespeak_num>1241</bespeak_num>人预订过</span>

            <button id="fav_btn" class="btn btn-default btn-sm "><i class="glyphicon glyphicon-star-empty"></i> 收藏</button>
        </div>
        <hr/>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            大厨介绍
        </div>
        <ul class="list-group">
            <li class="list-group-item">年龄：<span style="margin-left:10px;">48岁（厨龄27年）</span></li>
            <li class="list-group-item">服务范围：<span style="margin-left:10px;">西湖区</span></li>
            <li class="list-group-item">服务时间：<span style="margin-left:10px;">周五18点到20点、周末10点到12点、周末17点到20点</span></li>
        </ul>
    </div>

    <div class="panel panel-default" id="comments">
        <div class="panel-heading">
            用户评论
        </div>
        <ul class="list-group">
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">185****6600</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-02-04</span>
                </div>
                <div class="c">
                    服务超赞，完全征服了我的胃					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">139****8918</span>
                    <span class="star star-50"></span>
                    <span class="t">2016-12-26</span>
                </div>
                <div class="comment-imgs">
                    <img orig-src="http://img.idachu.com/201612/9f62d2e4cecfe69a98c3aa623cfe36b8.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201612/9f62d2e4cecfe69a98c3aa623cfe36b8_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201612/d0bb6d7c8cdb203875d16be3c3b9f1b8.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201612/d0bb6d7c8cdb203875d16be3c3b9f1b8_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201612/5942f610c4c1f35c1693a873ae1e8ad8.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201612/5942f610c4c1f35c1693a873ae1e8ad8_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201612/c7eb3e13126fc8637ef9fd22369ea305.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201612/c7eb3e13126fc8637ef9fd22369ea305_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201612/78096b187d969afc2a53a8f56dcda4ab.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201612/78096b187d969afc2a53a8f56dcda4ab_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201612/c1c36052fafaaee865efe9552d15a4d5.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201612/c1c36052fafaaee865efe9552d15a4d5_300.jpg"/>
                </div>
                <div class="c">
                    超级好吃，谢谢吴师傅平安夜为我们做饭。					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">匿名</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-15</span>
                </div>
                <div class="c">
                    服务超赞，完全征服了我的胃					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">139****9106</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-07</span>
                </div>
                <div class="comment-imgs">
                    <img orig-src="http://img.idachu.com/201610/72cbfe6ceb906fa9b67e246ebbe0fea1.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201610/72cbfe6ceb906fa9b67e246ebbe0fea1_300.jpg"/>
                </div>
                <div class="c">
                    服务超赞，完全征服了我的胃					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">137****0392</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-30</span>
                </div>
                <div class="c">
                    服务超赞，完全征服了我的胃					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">137****7010</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-08</span>
                </div>
                <div class="c">
                    服务超赞，完全征服了我的胃					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">匿名</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-02</span>
                </div>
                <div class="comment-imgs">
                    <img orig-src="http://img.idachu.com/201609/5cb2e5fc29ed6100a2e98e49613275dd.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201609/5cb2e5fc29ed6100a2e98e49613275dd_300.jpg"/>
                </div>
                <div class="c">
                    好评，菜没拍。来个优惠券。^_^^_^^_^^_^^_^^_^^_^^_^^_^^_^^_^^_^^_^					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">185****7015</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-26</span>
                </div>
                <div class="comment-imgs">
                    <img orig-src="http://img.idachu.com/201607/97329735e967da20c24d32b7efbae834.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201607/97329735e967da20c24d32b7efbae834_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201607/689c39ded6e1a669a6d50188f4ed2830.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201607/689c39ded6e1a669a6d50188f4ed2830_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201607/a4989a99d4cdbc125fc4d89c019916d9.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201607/a4989a99d4cdbc125fc4d89c019916d9_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201607/6db2b7f87bbae2169de1b72110e82c65.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201607/6db2b7f87bbae2169de1b72110e82c65_300.jpg"/>
                </div>
                <div class="c">
                    吃太快，漏拍了两个菜					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">139****9106</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-22</span>
                </div>
                <div class="comment-imgs">
                    <img orig-src="http://img.idachu.com/201607/92e09d4ae49b96c69f1485c1e9a3590a.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201607/92e09d4ae49b96c69f1485c1e9a3590a_300.jpg"/>
                </div>
                <div class="c">
                    服务超赞，完全征服了我的胃					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">139****7332</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-19</span>
                </div>
                <div class="comment-imgs">
                    <img orig-src="http://img.idachu.com/201607/60eedf6ebe6f4db74d7c898bed69c7a8.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201607/60eedf6ebe6f4db74d7c898bed69c7a8_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201607/94b0650306a2506588b8adb50302b5e1.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201607/94b0650306a2506588b8adb50302b5e1_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201607/f52a96930317ca88aec73337dab29a7e.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201607/f52a96930317ca88aec73337dab29a7e_300.jpg"/>
                </div>
                <div class="c">
                    好吃！					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">186****9786</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-13</span>
                </div>
                <div class="c">
                    吴师傅的菜做的太棒啦，下次还请他。					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">139****7332</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-05</span>
                </div>
                <div class="comment-imgs">
                    <img orig-src="http://img.idachu.com/201607/10159d276d73e8066bf2e6a876d764c5.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201607/10159d276d73e8066bf2e6a876d764c5_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201607/c51ff78130a658a09343550f035688cf.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201607/c51ff78130a658a09343550f035688cf_300.jpg"/>
                </div>
                <div class="c">
                    好吃					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">185****8770</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-30</span>
                </div>
                <div class="comment-imgs">
                    <img orig-src="http://img.idachu.com/201606/1d9ad2803138c943e8c06582a46e07fe.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201606/1d9ad2803138c943e8c06582a46e07fe_300.jpg"/>
                </div>
                <div class="c">
                    认真，细心，服务到位！绝对好厨！					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">139****9106</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-29</span>
                </div>
                <div class="comment-imgs">
                    <img orig-src="http://img.idachu.com/201606/c5a0fa14eb2f8e1a2939a9eccfe17931.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201606/c5a0fa14eb2f8e1a2939a9eccfe17931_300.jpg"/>
                </div>
                <div class="c">
                    服务超赞，完全征服了我的胃					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">182****0913</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-28</span>
                </div>
                <div class="c">
                    服务超赞，完全征服了我的胃					</div>
            </li>
        </ul>
    </div>
</div>
<?php include '../footer.php'; ?>
</body>
</html>
