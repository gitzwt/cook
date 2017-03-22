<?php
/**
 * Created by PhpStorm.
 * User: hui
 * Date: 2017/3/22
 * Time: 23:09
 */
?>


<!DOCTYPE html>
<html>
<head>
    <title>张亲团</title>
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
                data: {auth: str, forward: 'http://melike.imwork.net/cook/cooker/2935'},
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
                    data: {id: "2935"}
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
                    data: {id: "2935"}
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
                <img class="lazyOwl" orig-src="http://img.idachu.com/201412/a1dbcaf713c58ed7d55cfbdf2d87ad41.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201412/a1dbcaf713c58ed7d55cfbdf2d87ad41_300.jpg"/>
                <span class="label label-warning">干煸四季豆</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/682084a66573e18e53766eafcb5a219e.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/682084a66573e18e53766eafcb5a219e_300.jpg"/>
                <span class="label label-warning">菊花鱼</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/8e13cd384378014d353d7b1eed7b5935.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/8e13cd384378014d353d7b1eed7b5935_300.jpg"/>
                <span class="label label-warning">清炒虾仁</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/eb2e5b3f871d0bfd1944fbfe28456b58.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/eb2e5b3f871d0bfd1944fbfe28456b58_300.jpg"/>
                <span class="label label-warning">回锅肉</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/9ddf8165aa469559ccb7478f6a619d83.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/9ddf8165aa469559ccb7478f6a619d83_300.jpg"/>
                <span class="label label-warning">小炒肉</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/6e7a514e50e5e9c14fb7ef2b8f66a981.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/6e7a514e50e5e9c14fb7ef2b8f66a981_300.jpg"/>
                <span class="label label-warning">尖椒肉丝</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/3b24547cb414c8af166f0cab87f8a28a.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/3b24547cb414c8af166f0cab87f8a28a_300.jpg"/>
                <span class="label label-warning">溜肉段</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/58419105fd1bd97907d9de5b6616fc10.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/58419105fd1bd97907d9de5b6616fc10_300.jpg"/>
                <span class="label label-warning">锅包肉</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/03091d0fafbdbafae9809b69d1c52841.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/03091d0fafbdbafae9809b69d1c52841_300.jpg"/>
                <span class="label label-warning">红烧肉</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/b92bb3dc54a83bc453d967ad15600a88.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/b92bb3dc54a83bc453d967ad15600a88_300.jpg"/>
                <span class="label label-warning">香辣鸡翅</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/214618c0751552951b8e72b886d0ee03.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/214618c0751552951b8e72b886d0ee03_300.jpg"/>
                <span class="label label-warning">糖醋里脊2</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/68f3ea272bd41dcb3367337ae89b6ed7.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/68f3ea272bd41dcb3367337ae89b6ed7_300.jpg"/>
                <span class="label label-warning">金丝凤尾虾</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/bee90d23e10f80386a224289cb69f6eb.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/bee90d23e10f80386a224289cb69f6eb_300.jpg"/>
                <span class="label label-warning">蚂蚁上树</span>
            </li>
            <li style="display:none;">
                <img class="lazyOwl" orig-src="http://img.idachu.com/201504/4a191d74a6d537e8acf0fa2b9d0f97db.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403" data-src="http://img.idachu.com/201504/4a191d74a6d537e8acf0fa2b9d0f97db_300.jpg"/>
                <span class="label label-warning">蒜蓉西兰花</span>
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
            <a href="http://melike.imwork.net/cook/cooker/2935.php" id="bespeak_btn" class="btn btn-danger">立即预约</a>
            <img class="head" src="http://img.idachu.com/201409/36762000889bca7f4736ed704773c40e_300.JPG" class="head"/>
            <h4>张亲团</h4>
            <div class="meta">
                <span class="star star-50"></span>
            </div>
        </div>
        <div class="des">
            擅长菜系：川菜、湘菜、北京菜			</div>
        <hr/>
        <div class="des">
            大厨点评：张师傅可是一名老厨师了，从厨二十余年，一直坚守在厨房的岗位上，菜品口味始终如一，为人正直，踏实，亲和，大家快来尝尝吧			</div>
        <div class="des btns">
            <span class="bespeak_num"><bespeak_num>786</bespeak_num>人预订过</span>

            <button id="fav_btn" class="btn btn-default btn-sm "><i class="glyphicon glyphicon-star-empty"></i> 收藏</button>
        </div>
        <hr/>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            大厨介绍
        </div>
        <ul class="list-group">
            <li class="list-group-item">年龄：<span style="margin-left:10px;">48岁（厨龄23年）</span></li>
            <li class="list-group-item">服务范围：<span style="margin-left:10px;">上城区</span></li>
            <li class="list-group-item">服务时间：<span style="margin-left:10px;">周四10点到20点、周五10点到20点、周六10点到20点</span></li>
        </ul>
    </div>

    <div class="panel panel-default" id="comments">
        <div class="panel-heading">
            用户评论
        </div>
        <ul class="list-group">
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">133****0692</span>
                    <span class="star star-30"></span>
                    <span class="t">2017-02-03</span>
                </div>
                <div class="c">
                    服务有待提高噢					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">186****4880</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-02-20</span>
                </div>
                <div class="c">
                    服务超赞，完全征服了我的胃					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">187****9762</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-02-04</span>
                </div>
                <div class="c">
                    服务超赞，完全征服了我的胃					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">139****5790</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-04</span>
                </div>
                <div class="c">
                    服务超赞，完全征服了我的胃					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">137****9951</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-19</span>
                </div>
                <div class="c">
                    非常认真负责 人好厨艺高					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">186****5093</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-02</span>
                </div>
                <div class="comment-imgs">
                    <img orig-src="http://img.idachu.com/201610/3d8d460108d3e0ee8da80f10790a9355.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201610/3d8d460108d3e0ee8da80f10790a9355_300.jpg"/>
                </div>
                <div class="c">
                    再一次请张师傅了，味道还是很好！					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">136****7218</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-22</span>
                </div>
                <div class="c">
                    服务超赞，完全征服了我的胃					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">182****8658</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-02</span>
                </div>
                <div class="c">
                    服务超赞，完全征服了我的胃					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">159****7080</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-29</span>
                </div>
                <div class="c">
                    张师傅做的真好吃，非常赞					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">189****0016</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-08</span>
                </div>
                <div class="c">
                    服务超赞，完全征服了我的胃					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">136****6662</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-22</span>
                </div>
                <div class="comment-imgs">
                    <img orig-src="http://img.idachu.com/201607/59dbca569af52d48d597fd87ec21f779.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201607/59dbca569af52d48d597fd87ec21f779_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201607/ef82d4e5552889c3c60b5f20cf0f94f2.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201607/ef82d4e5552889c3c60b5f20cf0f94f2_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201607/a1882fbf6909d04717e6ed0d338ff65b.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201607/a1882fbf6909d04717e6ed0d338ff65b_300.jpg"/>
                </div>
                <div class="c">
                    师傅很专业，水煮鱼特别好吃，原材料师傅代买的四十三元，很好！					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">133****8001</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-27</span>
                </div>
                <div class="c">
                    服务超赞，完全征服了我的胃					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">186****3346</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-08</span>
                </div>
                <div class="c">
                    服务超赞，完全征服了我的胃					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">188****1083</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-26</span>
                </div>
                <div class="c">
                    服务超赞，完全征服了我的胃					</div>
            </li>
            <li class="list-group-item comment">
                <div class="n1">
                    <span class="n">135****6737</span>
                    <span class="star star-50"></span>
                    <span class="t">2017-01-30</span>
                </div>
                <div class="comment-imgs">
                    <img orig-src="http://img.idachu.com/201604/0b9c5c1c847cd6ffb610c814c616693f.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201604/0b9c5c1c847cd6ffb610c814c616693f_300.jpg"/>
                    <img orig-src="http://img.idachu.com/201604/7da804ae17f91ebba424af30febdaa2a.jpg" src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"  data-src="http://img.idachu.com/201604/7da804ae17f91ebba424af30febdaa2a_300.jpg"/>
                </div>
                <div class="c">
                    张师傅很好，早早就到了，辛苦了2个多小时。做的菜还不错					</div>
            </li>
        </ul>
    </div>
</div>
<?php include '../footer.php'; ?>
</body>
</html>
