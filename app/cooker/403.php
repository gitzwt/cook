<?php
/**
 * Created by PhpStorm.
 * User: hui
 * Date: 2017/3/22
 * Time: 23:06
 */
?>

<!DOCTYPE html>
<html>
<head>
    <title>朱正香</title>
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
                data: {auth: str, forward: 'http://melike.imwork.net/cook/cooker/403'},
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
                    data: {id: "403"}
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
                    data: {id: "403"}
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
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/7a3b7a876151675c7f9439169f77c0f0.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/7a3b7a876151675c7f9439169f77c0f0_300.jpg"/>
                <span class="label label-warning">麒麟桂鱼</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/06b34fe230550ab6e6ab39a48d47d36a.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/06b34fe230550ab6e6ab39a48d47d36a_300.jpg"/>
                <span class="label label-warning">农家养生土公鸡</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/6aa5fd261b7870b151a67b3c29b74bbb.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/6aa5fd261b7870b151a67b3c29b74bbb_300.jpg"/>
                <span class="label label-warning">黑椒杏鲍菇牛柳</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/617c6b96c3b966242fd289ac2e13877f.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/617c6b96c3b966242fd289ac2e13877f_300.jpg"/>
                <span class="label label-warning">农家扁豆炖排骨</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/7ee3fa29f132f5743114646985163feb.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/7ee3fa29f132f5743114646985163feb_300.jpg"/>
                <span class="label label-warning">客家炖豆腐</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/c19b2dac8d6fc01e643db62a3c93968a.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/c19b2dac8d6fc01e643db62a3c93968a_300.jpg"/>
                <span class="label label-warning">炭烧回头菇</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/2d19f1cb92bd504dd5143b3a690bcae3.png" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/2d19f1cb92bd504dd5143b3a690bcae3_300.png"/>
                <span class="label label-warning">葱烧辽参</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/334bfb044e079c1317549b39ca3da84c.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/334bfb044e079c1317549b39ca3da84c_300.jpg"/>
                <span class="label label-warning">椒溜丸子</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/0647c0f08270910b092a589821417978.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/0647c0f08270910b092a589821417978_300.jpg"/>
                <span class="label label-warning">麻辣香锅</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/b9fad7b446522d816598fb0d3129bf80.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/b9fad7b446522d816598fb0d3129bf80_300.jpg"/>
                <span class="label label-warning">小炒千叶豆腐</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/6a8f8132923640897dc8bd2b59297cfe.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/6a8f8132923640897dc8bd2b59297cfe_300.jpg"/>
                <span class="label label-warning">田园小炒</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/9ceb1f17280252891ef71e033675d4a5.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/9ceb1f17280252891ef71e033675d4a5_300.jpg"/>
                <span class="label label-warning">拍蒜有机菜心</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/8050e0ef3cd7a2c297c948e2b2055842.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/8050e0ef3cd7a2c297c948e2b2055842_300.jpg"/>
                <span class="label label-warning">上汤鸡毛菜</span>
            </li>
        </ul>
        <script>$('.pic-list img').height($(window).width()/1.3);</script>
    </div>

    <div class="kinfo">
        <div class="name clearfix">
            <a href="http://melike.imwork.net/cook/cooker/403.php" id="bespeak_btn" class="btn btn-danger">立即预约</a>
            <img class="head" src="http://img.idachu.com/201412/b8e99b2e516a9dce21724d868142fb82_300.JPG" class="head"/>
            <h4>朱正香</h4>
            <div class="meta">
                <span class="star star-50"></span>
            </div>
        </div>
        <div class="des">
            擅长菜系：粤菜、川菜、私房菜、家常菜			</div>
        <hr/>
        <div class="des">
            大厨点评：来自粤港餐厅的大厨，擅做私房菜及粤菜。喜欢的吃货们值得期待哦。			</div>
        <div class="des btns">
            <span class="bespeak_num"><bespeak_num>970</bespeak_num>人预订过</span>

            <button id="fav_btn" class="btn btn-default btn-sm done"><i class="glyphicon glyphicon-star-empty"></i> 收藏</button>
        </div>
        <hr/>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            大厨介绍
        </div>
        <ul class="list-group">
            <li class="list-group-item">年龄：<span style="margin-left:10px;">35岁（厨龄15年）</span></li>
            <li class="list-group-item">服务范围：<span style="margin-left:10px;">余杭区，拱墅区</span></li>
            <li class="list-group-item">服务时间：<span style="margin-left:10px;">工作日16点到20点、周六10点到20点、周日15点到20点</span></li>
        </ul>
    </div>

    <div class="panel panel-default" id="comments">
        <div class="panel-heading">
            用户评论
        </div>
        <ul class="list-group">
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">186****1001</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-03-18</span>
                </div>
                <div class="c">
                    服务超赞，完全征服了我的胃					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">134****0660</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-03-13</span>
                </div>
                <div class="c">
                    非常好					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">138****8865</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-03-04</span>
                </div>
                <div class="comment-imgs">
                    <img orig-src="http://img.idachu.com/201703/d3a3572e2e5ea9a3938a7501c6ed06fa.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201703/d3a3572e2e5ea9a3938a7501c6ed06fa_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201703/cb9863ba8cce361ee58d08aad0b0fbde.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201703/cb9863ba8cce361ee58d08aad0b0fbde_300.jpg"/>
                </div>
                <div class="c">
                    师傅非常赞~做的很好					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">159****7727</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-02-11</span>
                </div>
                <div class="comment-imgs">
                    <img orig-src="http://img.idachu.com/201702/b5f088418ab822e39163cea510c0ddca.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201702/b5f088418ab822e39163cea510c0ddca_300.jpg"/>
                </div>
                <div class="c">
                    不错，蛮好吃					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">139****6311</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-02-02</span>
                </div>
                <div class="c">
                    很好！					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">150****2637</span>
                    <span class="star star-40"></span>
                    <span class="t">2017-01-17</span>
                </div>
                <div class="c">
                    还好					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">136****7625</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-16</span>
                </div>
                <div class="c">
                    很好吃，很麻利。					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">135****5499</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-14</span>
                </div>
                <div class="c">
                    服务超赞，完全征服了我的胃					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">137****6551</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-10</span>
                </div>
                <div class="comment-imgs">
                    <img orig-src="http://img.idachu.com/201701/5cb87a799ad69ede15dc8f8e68c7ef3d.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201701/5cb87a799ad69ede15dc8f8e68c7ef3d_300.jpg"/>
                </div>
                <div class="c">
                    做的菜的确很赞！肉丸子被小朋友吃光了！焖羊肉和三杯鸡也好吃！					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">189****2289</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-02-27</span>
                </div>
                <div class="c">
                    服务超赞，完全征服了我的胃					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">139****6267</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-02-26</span>
                </div>
                <div class="comment-imgs">
                    <img orig-src="http://img.idachu.com/201612/296e61179e3cac9537d212aa8646db24.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201612/296e61179e3cac9537d212aa8646db24_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201612/2237ace074a72d9f06601b2b0f8e0c8e.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201612/2237ace074a72d9f06601b2b0f8e0c8e_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201612/1ad2dee870290498e32ced155e8b9136.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201612/1ad2dee870290498e32ced155e8b9136_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201612/24504e8e47b5d16fc3e517157b764e6e.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201612/24504e8e47b5d16fc3e517157b764e6e_300.jpg"/>
                </div>
                <div class="c">
                    圣诞节一直在陪孩子都没有照顾到师傅，等师傅做好饭通知吃饭才想起来，菜做的很好吃 厨房收拾的很干净 下次应该还会约师傅					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">158****6699</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-02-24</span>
                </div>
                <div class="c">
                    服务超赞，完全征服了我的胃					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">139****3607</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-02-03</span>
                </div>
                <div class="comment-imgs">
                    <img orig-src="http://img.idachu.com/201612/46ba596ea143f1a085cae38f696a9cd6.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201612/46ba596ea143f1a085cae38f696a9cd6_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201612/4f00fbdfedddf6b78ed2e29dd007ed24.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201612/4f00fbdfedddf6b78ed2e29dd007ed24_300.jpg"/>
                </div>
                <div class="c">
                    一如即往的好厨艺，味道清淡可口，大家都很赞					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">137****4480</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-27</span>
                </div>
                <div class="comment-imgs">
                    <img orig-src="http://img.idachu.com/201611/8ac6819aa9a4c102992d221a562b6638.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201611/8ac6819aa9a4c102992d221a562b6638_300.jpg"/>
                </div>
                <div class="c">
                    最好的厨师！！！					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">139****3607</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-26</span>
                </div>
                <div class="comment-imgs">
                    <img orig-src="http://img.idachu.com/201611/e38bc3def12f664aad2e0edc98a46782.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201611/e38bc3def12f664aad2e0edc98a46782_300.jpg"/>
                </div>
                <div class="c">
                    朱师傅做的很好，蒸鱼和红烧肉太赞了，厨房也给收拾的很利落，下回还约					</div>
            </li>
        </ul>
    </div>
</div>
<?php include '../footer.php'; ?>
</body>
</html>
