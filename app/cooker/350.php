<?php
/**
 * Created by PhpStorm.
 * User: hui
 * Date: 2017/3/22
 * Time: 23:15
 */
?>

<!DOCTYPE html>
<html>
<head>
    <title>罗正龙</title>
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
                data: {auth: str, forward: 'http://melike.imwork.net/cook/cooker/350'},
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
                    data: {id: "350"}
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
                    data: {id: "350"}
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
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/47766b761912b22acf3bd62d254e65e0.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/47766b761912b22acf3bd62d254e65e0_300.jpg"/>
                <span class="label label-warning">清蒸鲈鱼</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/9588627a24ea1dd2c49b6b767d3f5d26.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/9588627a24ea1dd2c49b6b767d3f5d26_300.jpg"/>
                <span class="label label-warning">酸汤金针肥牛</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/3ac43700106d29f22b494fbd06d28181.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/3ac43700106d29f22b494fbd06d28181_300.jpg"/>
                <span class="label label-warning">重庆辣子鸡</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/214618c0751552951b8e72b886d0ee03.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/214618c0751552951b8e72b886d0ee03_300.jpg"/>
                <span class="label label-warning">糖醋里脊2</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/d2e4f3b5d999155b2a195c9657bf1802.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/d2e4f3b5d999155b2a195c9657bf1802_300.jpg"/>
                <span class="label label-warning">山药排骨汤</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/3cb24cb66f4133457426a1b321a2aaf9.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/3cb24cb66f4133457426a1b321a2aaf9_300.jpg"/>
                <span class="label label-warning">香辣虾</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/7a2f09884b1029fe82e6f0a6ef6e971c.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/7a2f09884b1029fe82e6f0a6ef6e971c_300.jpg"/>
                <span class="label label-warning">耗油口蘑</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/133d1850e9aa9718d132ebbb521abac9.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/133d1850e9aa9718d132ebbb521abac9_300.jpg"/>
                <span class="label label-warning">清炒西兰花</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/57e79c549803729931c09756ccc43694.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/57e79c549803729931c09756ccc43694_300.jpg"/>
                <span class="label label-warning">湘西小炒肉</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/594d2386a6da4f1a4f78b769ee310acc.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/594d2386a6da4f1a4f78b769ee310acc_300.jpg"/>
                <span class="label label-warning">松仁玉米</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/6e2ef9b2b459b075e43ea1efe564ca9a.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/6e2ef9b2b459b075e43ea1efe564ca9a_300.jpg"/>
                <span class="label label-warning">葱爆羊肉</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/4d09c83506d5b314272aa5f059cb08b4.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/4d09c83506d5b314272aa5f059cb08b4_300.jpg"/>
                <span class="label label-warning">橄榄菜四季豆</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/e6f47dacabc8ba4e5d6aaddc017cbf1f.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/e6f47dacabc8ba4e5d6aaddc017cbf1f_300.jpg"/>
                <span class="label label-warning">毛氏红烧肉</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/f94f3f5600cfb1249c453dbf420ecad6.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/f94f3f5600cfb1249c453dbf420ecad6_300.jpg"/>
                <span class="label label-warning">拔丝山药</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201506/8448e095e3345a622ca87922cbb54adb.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201506/8448e095e3345a622ca87922cbb54adb_300.jpg"/>
                <span class="label label-warning">红烧鲫鱼</span>
            </li>
        </ul>
        <script>$('.pic-list img').height($(window).width()/1.3);</script>
    </div>

    <div class="kinfo">
        <div class="name clearfix">
            <a href="http://melike.imwork.net/cook/cooker/350.php" id="bespeak_btn" class="btn btn-danger">立即预约</a>
            <img class="head" src="http://img.idachu.com/201501/6c19114e5ac9499902398244ef52b434_300.JPG" class="head"/>
            <h4>罗正龙</h4>
            <div class="meta">
                <span class="star star-50"></span>
            </div>
        </div>
        <div class="des">
            擅长菜系：川菜、家常菜、湘菜、淮扬菜			</div>
        <hr/>
        <div class="des">
            大厨点评：罗师傅是地道四川人，烧得一手美味的川菜。曾经在五星酒店担任掌厨工作，喜欢川辣的朋友千万不要错过哦			</div>
        <div class="des btns">
            <span class="bespeak_num"><bespeak_num>1228</bespeak_num>人预订过</span>

            <button id="fav_btn" class="btn btn-default btn-sm "><i class="glyphicon glyphicon-star-empty"></i> 收藏</button>
        </div>
        <hr/>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            大厨介绍
        </div>
        <ul class="list-group">
            <li class="list-group-item">年龄：<span style="margin-left:10px;">45岁（厨龄23年）</span></li>
            <li class="list-group-item">服务范围：<span style="margin-left:10px;">西湖区、下城区</span></li>
            <li class="list-group-item">服务时间：<span style="margin-left:10px;">周三10点到15点、周四10点到15点、周五10点到15点、周六10点到20点</span></li>
        </ul>
    </div>

    <div class="panel panel-default" id="comments">
        <div class="panel-heading">
            用户评论
        </div>
        <ul class="list-group">
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">159****3926</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-08</span>
                </div>
                <div class="c">
                    第一次尝试，很好。谢谢啦					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">137****1139</span>
                    <span class="star star-40"></span>
                    <span class="t">2017-01-08</span>
                </div>
                <div class="c">
                    第一次体验！很不错！谢谢！					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">156****5511</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-07</span>
                </div>
                <div class="comment-imgs">
                    <img orig-src="http://img.idachu.com/201612/f363aa5f0a3a58b9e5d7abf32836bd2b.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201612/f363aa5f0a3a58b9e5d7abf32836bd2b_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201612/f684e78db653d9bb6235e6a3e3454aae.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201612/f684e78db653d9bb6235e6a3e3454aae_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201612/f343c3c8c3e759bf87836b52749d7914.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201612/f343c3c8c3e759bf87836b52749d7914_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201612/4ee8c5f6c518c9c01786f588ee8ae9bd.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201612/4ee8c5f6c518c9c01786f588ee8ae9bd_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201612/e57979b18b46a0f86fa6585496cf17d2.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201612/e57979b18b46a0f86fa6585496cf17d2_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201612/168cae5a579312adc7e0709f1eb924b7.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201612/168cae5a579312adc7e0709f1eb924b7_300.jpg"/>
                </div>
                <div class="c">
                    朋友们都喜欢吃					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">186****0826</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-26</span>
                </div>
                <div class="c">
                    服务超赞，完全征服了我的胃					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">186****6258</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-20</span>
                </div>
                <div class="c">
                    好吃。拔丝白薯非常好！					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">138****9462</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-31</span>
                </div>
                <div class="c">
                    服务超赞，完全征服了我的胃					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">186****3236</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-30</span>
                </div>
                <div class="c">
                    做的菜很好吃！					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">186****7574</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-29</span>
                </div>
                <div class="c">
                    大厨还带了个助理，做菜态度很好～					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">138****8712</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-24</span>
                </div>
                <div class="c">
                    罗师傅厨艺惊赞！爱大厨请过三位大厨，罗大厨最最棒！专业！用心！热心！以后吃川菜一定再请罗大厨！					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">138****9680</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-11</span>
                </div>
                <div class="c">
                    罗师傅很认真，提前与我沟通家里有什么食材，饭做的很香！					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">139****7272</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-06</span>
                </div>
                <div class="c">
                    服务超赞，完全征服了我的胃					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">150****2116</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-16</span>
                </div>
                <div class="c">
                    特别好的师傅，菜好，人好，很亲切。超爱您做的鲈鱼和香辣虾。					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">匿名</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-29</span>
                </div>
                <div class="c">
                    非常认真仔细的厨师，					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">181****6700</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-22</span>
                </div>
                <div class="c">
                    非常认真细心的大厨 菜品味道也一流 赞赞赞					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">匿名</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-16</span>
                </div>
                <div class="c">
                    罗师傅做菜太好吃了！很认真！很细致！提前跟我沟通好需要的菜和调料！超赞！					</div>
            </li>
        </ul>
    </div>
</div>
<?php include '../footer.php'; ?>
</body>
</html>
