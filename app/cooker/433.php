<?php
/**
 * Created by PhpStorm.
 * User: hui
 * Date: 2017/3/22
 * Time: 22:49
 */
?>


<!DOCTYPE html>
<html>
<head>
    <title>赵以超</title>
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
                data: {auth: str, forward: 'http://melike.imwork.net/cook/cooker/433'},
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
                    data: {id: "433"}
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
                    data: {id: "433"}
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
                <img class="lazyOwl" orig-src="http://img.idachu.com/201604/555d9c25f2973c296507e66d71862354.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201604/555d9c25f2973c296507e66d71862354_300.jpg"/>
                <span class="label label-warning">葱烧海参</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201412/692387fe6b36c8752eb33fcb8f207777.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201412/692387fe6b36c8752eb33fcb8f207777_300.jpg"/>
                <span class="label label-warning">米粉蒸肉</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/4983d5701336f98422bde6459843daa7.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/4983d5701336f98422bde6459843daa7_300.jpg"/>
                <span class="label label-warning">水煮牛肉</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/9588627a24ea1dd2c49b6b767d3f5d26.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/9588627a24ea1dd2c49b6b767d3f5d26_300.jpg"/>
                <span class="label label-warning">酸汤金针肥牛</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201609/9450a4017971007d16888f3ebe03c28a.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201609/9450a4017971007d16888f3ebe03c28a_300.jpg"/>
                <span class="label label-warning">糖醋里脊</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201604/c89b95ed75421ffc12391048d40228ce.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201604/c89b95ed75421ffc12391048d40228ce_300.jpg"/>
                <span class="label label-warning">葱爆羊肉</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201609/74ed6d0cc07c42824b406b5c47945798.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201609/74ed6d0cc07c42824b406b5c47945798_300.jpg"/>
                <span class="label label-warning">油焖大虾</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201604/50261e469a9375cf0f8b5e044c75f05b.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201604/50261e469a9375cf0f8b5e044c75f05b_300.jpg"/>
                <span class="label label-warning">清蒸鱼</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201604/92c07d77161a84fba38dcf0807e934c0.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201604/92c07d77161a84fba38dcf0807e934c0_300.jpg"/>
                <span class="label label-warning">避风塘虾</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201604/faac2c4be588081bb7cb3be279e6448b.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201604/faac2c4be588081bb7cb3be279e6448b_300.jpg"/>
                <span class="label label-warning">松鼠鱼</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201604/17ae7e59d95ddfade40a8aab1630bbbc.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201604/17ae7e59d95ddfade40a8aab1630bbbc_300.jpg"/>
                <span class="label label-warning">酸菜鱼</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201604/0e5fb9caddbb1743567786992ec9440d.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201604/0e5fb9caddbb1743567786992ec9440d_300.jpg"/>
                <span class="label label-warning">麻辣香锅</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/5cd3dde6065218663a00f672b40366e7.png" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/5cd3dde6065218663a00f672b40366e7_300.png"/>
                <span class="label label-warning">农家小炒肉</span>
            </li>
        </ul>
        <script>$('.pic-list img').height($(window).width()/1.3);</script>
    </div>

    <div class="kinfo">
        <div class="name clearfix">
            <img class="head" src="http://img.idachu.com/201603/580f8f42557b4776296962b7ee565414_300.JPG" class="head"/>
            <h4>赵以超</h4>
            <div class="meta">
                <span class="star star-50"></span>
            </div>
        </div>
        <div class="alert alert-warning">
            大厨预约已满
        </div>
        <div class="des">
            擅长菜系：八大菜系、鲁菜			</div>
        <hr/>
        <div class="des">
            大厨点评：赵师傅是酒店的面点大厨，在面点制作方面有自己独特的心得，家庭小炒也不在话下，大家可以尝试一下			</div>
        <div class="des btns">
            <span class="bespeak_num"><bespeak_num>148</bespeak_num>人预订过</span>

            <button id="fav_btn" class="btn btn-default btn-sm "><i class="glyphicon glyphicon-star-empty"></i> 收藏</button>
        </div>
        <hr/>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            大厨介绍
        </div>
        <ul class="list-group">
            <li class="list-group-item">年龄：<span style="margin-left:10px;">28岁（厨龄8年）</span></li>
            <li class="list-group-item">服务范围：<span style="margin-left:10px;">龙游周边</span></li>
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
                    <span class="n">150****8833</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-25</span>
                </div>
                <div class="c">
                    终于吃到饺子了！超赞					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">139****6897</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-21</span>
                </div>
                <div class="c">
                    服务超赞，完全征服了我的胃					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">匿名</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-04</span>
                </div>
                <div class="comment-imgs">
                    <img orig-src="http://img.idachu.com/201502/b7858fd46a6165f19c629bd82edb741a.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201502/b7858fd46a6165f19c629bd82edb741a_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201502/9c4f992d3d41e36ba732b0f5a6af7371.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201502/9c4f992d3d41e36ba732b0f5a6af7371_300.jpg"/>
                </div>
                <div class="c">
                    不错不错，评价晚了。做菜挺利落，沟通也好，厨房拾掇的也干净，以后还会选他的。五星！					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">137****5647</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-11</span>
                </div>
                <div class="c">
                    人很热情，做菜很好，排骨很棒，赞了					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">185****8687</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-06</span>
                </div>
                <div class="comment-imgs">
                    <img orig-src="http://img.idachu.com/201501/c5ac06e3fab2534d296ff9e4c9086083.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201501/c5ac06e3fab2534d296ff9e4c9086083_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201501/961c49b0ca0bb56bea7990244b6b9975.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201501/961c49b0ca0bb56bea7990244b6b9975_300.jpg"/>
                </div>
                <div class="c">
                    非常好吃 很喜欢赵师傅做的味道					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">134****5578</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-05</span>
                </div>
                <div class="c">
                    味道很好！还收拾了厨房！					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">匿名</span>
                    <span class="star star-40"></span>
                    <span class="t">2017-01-01</span>
                </div>
                <div class="c">
                    口味一般…服务好					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">133****8818</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-30</span>
                </div>
                <div class="comment-imgs">
                    <img orig-src="http://img.idachu.com/201412/81763e4cc9fe543c41c81b807686f1ce.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201412/81763e4cc9fe543c41c81b807686f1ce_300.jpg"/>
                </div>
                <div class="c">
                    认真！很好。					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">185****8687</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-29</span>
                </div>
                <div class="comment-imgs">
                    <img orig-src="http://img.idachu.com/201412/eadda60db8fc40cedd15a0ae7f989980.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201412/eadda60db8fc40cedd15a0ae7f989980_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201412/0ad79cf3b56110d92f74b0c621baf90e.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201412/0ad79cf3b56110d92f74b0c621baf90e_300.jpg"/>
                </div>
                <div class="c">
                    非常棒 我喜欢 下次买黄豆酱 还要尝尝师傅的粉蒸肉					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">匿名</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-25</span>
                </div>
                <div class="comment-imgs">
                    <img orig-src="http://img.idachu.com/201412/aae25f055a49d8f107d81ad17d5de5e9.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201412/aae25f055a49d8f107d81ad17d5de5e9_300.jpg"/>
                </div>
                <div class="c">
                    守时 服务很好  买菜的时候主动帮我提菜 做的菜也好吃 好评！					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">139****2780</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-25</span>
                </div>
                <div class="c">
                    第二次约赵师傅，很好					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">185****9969</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-24</span>
                </div>
                <div class="comment-imgs">
                    <img orig-src="http://img.idachu.com/201412/191763d21143bf0f2e47a632eb8a964d.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201412/191763d21143bf0f2e47a632eb8a964d_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201412/b74909a2b3a2d36f21bcc62f43e15a07.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201412/b74909a2b3a2d36f21bcc62f43e15a07_300.jpg"/>
                </div>
                <div class="c">
                    给孩子们准备的好吃的圣诞节小礼物“圣诞曲奇”。非常棒的服务！材料不足，时间紧张，还积极想办法 ，晚上自己忙还委托其他同事给送到家，已经偷吃一块儿了，味道超级好！下次准备试试炒菜					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">185****8687</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-21</span>
                </div>
                <div class="comment-imgs">
                    <img orig-src="http://img.idachu.com/201412/b57d395a9929610e2cd5932f33be4fa1.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201412/b57d395a9929610e2cd5932f33be4fa1_300.jpg"/>
                </div>
                <div class="c">
                    挺好吃的 喜欢这个味道					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">139****2780</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-19</span>
                </div>
                <div class="comment-imgs">
                    <img orig-src="http://img.idachu.com/201412/4f07193f5244bffbd7a8b1e1bfe4f26c.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201412/4f07193f5244bffbd7a8b1e1bfe4f26c_300.jpg"/>
                </div>
                <div class="c">
                    师傅炸鱼炸的很棒					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">139****4645</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-30</span>
                </div>
                <div class="c">
                    师傅做菜认真，菜也好吃，中，不错					</div>
            </li>
        </ul>
    </div>
</div>
<?php include '../footer.php'; ?>
</body>
</html>
