<?php
/**
 * Created by PhpStorm.
 * User: hui
 * Date: 2017/3/22
 * Time: 23:18
 */
?>

<!DOCTYPE html>
<html>
<head>
    <title>孙红强</title>
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
                data: {auth: str, forward: 'http://melike.imwork.net/cook/cooker/340'},
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
                    data: {id: "340"}
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
                    data: {id: "340"}
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
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/3330df4cf73ea54f7a97535b64e169c4.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/3330df4cf73ea54f7a97535b64e169c4_300.jpg"/>
                <span class="label label-warning">爆炒螺片</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/03091d0fafbdbafae9809b69d1c52841.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/03091d0fafbdbafae9809b69d1c52841_300.jpg"/>
                <span class="label label-warning">红烧肉</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/040af764967a3c51e58a011c5205b8b6.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/040af764967a3c51e58a011c5205b8b6_300.jpg"/>
                <span class="label label-warning">五谷丰登</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/6ac3f322762bac62bf71b6122a875fc2.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/6ac3f322762bac62bf71b6122a875fc2_300.jpg"/>
                <span class="label label-warning">黄豆海带炖猪手</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/6416ed5b9e209414313c3d0a8e7cf4c0.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/6416ed5b9e209414313c3d0a8e7cf4c0_300.jpg"/>
                <span class="label label-warning">干炸舌头鱼</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/7c718517293cc5204762c51999235f34.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/7c718517293cc5204762c51999235f34_300.jpg"/>
                <span class="label label-warning">干煸豆角</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/917254f13f5358cb09cc7fdec4eac4d5.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/917254f13f5358cb09cc7fdec4eac4d5_300.jpg"/>
                <span class="label label-warning">歌乐山辣子鸡</span>
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
            <img class="head" src="http://img.idachu.com/201501/e8219ceed2ca3e8004d8a5cd2540f041_300.JPG" class="head"/>
            <h4>孙红强</h4>
            <div class="meta">
                <span class="star star-50"></span>
            </div>
        </div>
        <div class="alert alert-warning">
            大厨预约已满
        </div>
        <div class="des">
            擅长菜系：鲁菜、粤菜、家常菜			</div>
        <hr/>
        <div class="des">
            大厨点评：孙师傅出身于星级酒店，中西式菜品样样精通，尤其是西式烹饪更是精湛美味。			</div>
        <div class="des btns">
            <span class="bespeak_num"><bespeak_num>883</bespeak_num>人预订过</span>

            <button id="fav_btn" class="btn btn-default btn-sm "><i class="glyphicon glyphicon-star-empty"></i> 收藏</button>
        </div>
        <hr/>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            大厨介绍
        </div>
        <ul class="list-group">
            <li class="list-group-item">年龄：<span style="margin-left:10px;">31岁（厨龄10年）</span></li>
            <li class="list-group-item">服务范围：<span style="margin-left:10px;">西湖区</span></li>
            <li class="list-group-item">服务时间：<span style="margin-left:10px;">周五10点到15点</span></li>
        </ul>
    </div>

    <div class="panel panel-default" id="comments">
        <div class="panel-heading">
            用户评论
        </div>
        <ul class="list-group">
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">132****6513</span>
                    <span class="star star-40"></span>
                    <span class="t">2017-03-04</span>
                </div>
                <div class="c">
                    服务感觉很不错，加油					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">186****8888</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-03-04</span>
                </div>
                <div class="c">
                    总体不错，师傅人很好					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">153****9301</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-02-22</span>
                </div>
                <div class="c">
                    服务超赞，完全征服了我的胃					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">匿名</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-28</span>
                </div>
                <div class="c">
                    一如既往的好，高水平大厨					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">186****4918</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-25</span>
                </div>
                <div class="comment-imgs">
                    <img orig-src="http://img.idachu.com/201612/81cde6a7421fcfe079694e177d7e0efa.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201612/81cde6a7421fcfe079694e177d7e0efa_300.jpg"/>
                </div>
                <div class="c">
                    超级超级好吃！太棒了！来一张扫荡以后的吧！太好吃了！					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">138****0015</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-10</span>
                </div>
                <div class="comment-imgs">
                    <img orig-src="http://img.idachu.com/201612/c2e9f313f574f38d28f85591b9b18ff4.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201612/c2e9f313f574f38d28f85591b9b18ff4_300.jpg"/>
                </div>
                <div class="c">
                    师傅手艺很赞，烤羊排超好吃，厨房灶台收拾得也很干净，五星					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">138****9097</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-20</span>
                </div>
                <div class="c">
                    服务超赞，完全征服了我的胃					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">138****9097</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-20</span>
                </div>
                <div class="c">
                    服务超赞，完全征服了我的胃					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">138****1838</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-18</span>
                </div>
                <div class="c">
                    师傅提前沟通了菜单并带了配料，准时上门服务，为晚餐全面打理非常感谢。					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">匿名</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-27</span>
                </div>
                <div class="c">
                    太好吃了					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">匿名</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-25</span>
                </div>
                <div class="comment-imgs">
                    <img orig-src="http://img.idachu.com/201609/65d23c26619f11d6fca29776191817a5.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201609/65d23c26619f11d6fca29776191817a5_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201609/89a24af75faa68bb42ab06c40c714b48.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201609/89a24af75faa68bb42ab06c40c714b48_300.jpg"/>
                </div>
                <div class="c">
                    一如既往的好					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">139****0888</span>
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
                    <span class="t">2017-01-21</span>
                </div>
                <div class="comment-imgs">
                    <img orig-src="http://img.idachu.com/201609/f78a053fa923d414ee2c99e1e7e23268.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201609/f78a053fa923d414ee2c99e1e7e23268_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201609/a9379331a1b14f5775282305aee1301f.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201609/a9379331a1b14f5775282305aee1301f_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201609/58f95b82858a05fe16a546a11fcfdc1a.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201609/58f95b82858a05fe16a546a11fcfdc1a_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201609/7ae445262b7978f0c7267b5a08681796.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201609/7ae445262b7978f0c7267b5a08681796_300.jpg"/>
                </div>
                <div class="c">
                    吃撑了，好吃～～					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">135****9230</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-21</span>
                </div>
                <div class="c">
                    服务超赞，完全征服了我的胃					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">152****1799</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-13</span>
                </div>
                <div class="comment-imgs">
                    <img orig-src="http://img.idachu.com/201609/44b788cde31876a72a7fbcaa3da3f87a.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201609/44b788cde31876a72a7fbcaa3da3f87a_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201609/1f5c7428173a950518023be9793c9798.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201609/1f5c7428173a950518023be9793c9798_300.jpg"/>
                </div>
                <div class="c">
                    特别好！特别好！！！！！好吃好吃！					</div>
            </li>
        </ul>
    </div>
</div>
<?php include '../footer.php'; ?>
</body>
</html>
