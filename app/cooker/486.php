<?php
/**
 * Created by PhpStorm.
 * User: hui
 * Date: 2017/3/22
 * Time: 22:56
 */
?>


<!DOCTYPE html>
<html>
<head>
    <title>仇志爱</title>
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
                data: {auth: str, forward: 'http://melike.imwork.net/cook/cooker/486'},
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
                    data: {id: "486"}
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
                    data: {id: "486"}
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
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/6c22fb56475b0a681ab0488a5008eee5.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/6c22fb56475b0a681ab0488a5008eee5_300.jpg"/>
                <span class="label label-warning">宫爆明虾球</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/6ebf01553a0572061b3ef421b9598e50.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/6ebf01553a0572061b3ef421b9598e50_300.jpg"/>
                <span class="label label-warning">糖醋排骨</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/4f7f2565b32934682699acae8dbbcdff.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/4f7f2565b32934682699acae8dbbcdff_300.jpg"/>
                <span class="label label-warning">酸菜白肉</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/9ddf8165aa469559ccb7478f6a619d83.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/9ddf8165aa469559ccb7478f6a619d83_300.jpg"/>
                <span class="label label-warning">小炒肉</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/a9b9d1f51e5e2cf753ff09d12ac7e425.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/a9b9d1f51e5e2cf753ff09d12ac7e425_300.jpg"/>
                <span class="label label-warning">养生小炒</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/a3e409e8683c923f76c038c8a17d6860.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/a3e409e8683c923f76c038c8a17d6860_300.jpg"/>
                <span class="label label-warning">椒盐大虾</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/507ad5c975ce6dc2f0cfd65e66875e53.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/507ad5c975ce6dc2f0cfd65e66875e53_300.jpg"/>
                <span class="label label-warning">韭菜炒八带</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/c7399e222cd96ee9b01dffb626742617.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/c7399e222cd96ee9b01dffb626742617_300.jpg"/>
                <span class="label label-warning">酱焖大黄鱼</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/ac563cd6df735ca7ab060765c7535627.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/ac563cd6df735ca7ab060765c7535627_300.jpg"/>
                <span class="label label-warning">蒜茸西兰花</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/55ec786b302c244ea34fd56e8bdc8528.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/55ec786b302c244ea34fd56e8bdc8528_300.jpg"/>
                <span class="label label-warning">鱼香茄子</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/ea8b91e15c4c2db746f01f5d121b0011.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/ea8b91e15c4c2db746f01f5d121b0011_300.jpg"/>
                <span class="label label-warning">白菜炖豆腐</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/594d2386a6da4f1a4f78b769ee310acc.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/594d2386a6da4f1a4f78b769ee310acc_300.jpg"/>
                <span class="label label-warning">松仁玉米</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/bfb03b6d79163cf17a9b3e3e43128a42.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/bfb03b6d79163cf17a9b3e3e43128a42_300.jpg"/>
                <span class="label label-warning">干锅茶树菇</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/214618c0751552951b8e72b886d0ee03.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/214618c0751552951b8e72b886d0ee03_300.jpg"/>
                <span class="label label-warning">糖醋里脊2</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/9ddf8165aa469559ccb7478f6a619d83.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/9ddf8165aa469559ccb7478f6a619d83_300.jpg"/>
                <span class="label label-warning">小炒肉</span>
            </li>
        </ul>
        <script>$('.pic-list img').height($(window).width()/1.3);</script>
    </div>

    <div class="kinfo">
        <div class="name clearfix">
            <a href="http://melike.imwork.net/cook/cooker/486" id="bespeak_btn" class="btn btn-danger">立即预约</a>
            <img class="head" src="http://img.idachu.com/201408/d451f4b2a68b7f8963bca5be009cf5d9_300.JPG" class="head"/>
            <h4>仇志爱</h4>
            <div class="meta">
                <span class="star star-50"></span>
            </div>
        </div>
        <div class="des">
            擅长菜系：川菜、粤菜、家常菜			</div>
        <hr/>
        <div class="des">
            大厨点评：仇师傅做菜细致，菜品色香味俱佳，外表帅气，待人真诚			</div>
        <div class="des btns">
            <span class="bespeak_num"><bespeak_num>1090</bespeak_num>人预订过</span>

            <button id="fav_btn" class="btn btn-default btn-sm done"><i class="glyphicon glyphicon-star-empty"></i> 收藏</button>
        </div>
        <hr/>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            大厨介绍
        </div>
        <ul class="list-group">
            <li class="list-group-item">年龄：<span style="margin-left:10px;">29岁（厨龄9年）</span></li>
            <li class="list-group-item">服务范围：<span style="margin-left:10px;">西湖区，江干区，余杭区，滨江区</span></li>
            <li class="list-group-item">服务时间：<span style="margin-left:10px;">周一10点到12点、周三10点到12点、周三17点到19点、周四10点到12点、周五10点到12点、周末10点到12点</span></li>
        </ul>
    </div>

    <div class="panel panel-default" id="comments">
        <div class="panel-heading">
            用户评论
        </div>
        <ul class="list-group">
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">136****4017</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-03-16</span>
                </div>
                <div class="comment-imgs">
                    <img orig-src="http://img.idachu.com/201703/61ac0e155e2b04ab7b1b611e9f5a9e4a.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201703/61ac0e155e2b04ab7b1b611e9f5a9e4a_300.jpg"/>
                </div>
                <div class="c">
                    切工，味道，台面都是点赞
                    态度更是赞
                </div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">匿名</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-03-11</span>
                </div>
                <div class="c">
                    服务超赞，完全征服了我的胃					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">138****1978</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-03-04</span>
                </div>
                <div class="c">
                    服务超赞，完全征服了我的胃					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">137****3398</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-03-02</span>
                </div>
                <div class="c">
                    很好吃做菜，谢谢师傅					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">138****1355</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-02-12</span>
                </div>
                <div class="comment-imgs">
                    <img orig-src="http://img.idachu.com/201702/0a1ac4c5213dfcefd77eea84f2c30fab.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201702/0a1ac4c5213dfcefd77eea84f2c30fab_300.jpg"/>
                </div>
                <div class="c">
                    第二次找仇大厨了，菜做的还是一如既往的好吃，炒菜后还帮我把厨房收拾干净，真是太感谢啦					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">139****6156</span>
                    <span class="star star-40"></span>
                    <span class="t">2017-02-11</span>
                </div>
                <div class="c">
                    服务感觉很不错，加油					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">匿名</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-02-09</span>
                </div>
                <div class="c">
                    非常好，下次还约！					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">匿名</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-25</span>
                </div>
                <div class="comment-imgs">
                    <img orig-src="http://img.idachu.com/201612/f27cb5067b00b58637335f78078ba5d8.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201612/f27cb5067b00b58637335f78078ba5d8_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201612/8e448baf1f1487eb84cc16540371ca5f.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201612/8e448baf1f1487eb84cc16540371ca5f_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201612/b547462454e403870d51ad17565c3a17.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201612/b547462454e403870d51ad17565c3a17_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201612/5a7752f16253c57b1325c55351b7a2c4.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201612/5a7752f16253c57b1325c55351b7a2c4_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201612/c347ef97f816a846ca3d1a058c66e0d5.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201612/c347ef97f816a846ca3d1a058c66e0d5_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201612/354fe82b6582aa92b348977211360b12.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201612/354fe82b6582aa92b348977211360b12_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201612/74df1207d6330141f88b8fd528198213.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201612/74df1207d6330141f88b8fd528198213_300.jpg"/>
                </div>
                <div class="c">
                    准时，干净利落，菜好吃，专属大厨！					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">133****7987</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-24</span>
                </div>
                <div class="c">
                    非常好，味道好，服务好！					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">135****1279</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-18</span>
                </div>
                <div class="c">
                    还是这个人，还是这个味，赞！					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">135****1279</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-18</span>
                </div>
                <div class="c">
                    一直选“爱师傅”，服务超棒，做菜超赞！					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">135****5221</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-27</span>
                </div>
                <div class="c">
                    服务超赞，完全征服了我的胃					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">139****7055</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-25</span>
                </div>
                <div class="c">
                    服务超赞，完全征服了我的胃					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">139****8819</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-10</span>
                </div>
                <div class="c">
                    服务超赞，完全征服了我的胃					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">185****0723</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-09</span>
                </div>
                <div class="c">
                    超棒的師傅					</div>
            </li>
        </ul>
    </div>
</div>
<?php include '../footer.php'; ?>
</body>
</html>
