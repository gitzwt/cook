<?php
/**
 * Created by PhpStorm.
 * User: hui
 * Date: 2017/3/22
 * Time: 21:48
 */
?>


<!DOCTYPE html>
<html>
<head>
    <title>私人订制</title>
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
                data: {auth: str, forward: 'http://melike.imwork.net/cook/1009'},
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
        ul.feature-list{margin-left:-7px;margin-right:-8px;}
        .desc{padding:1px;}
        #img-list{overflow:auto;}
        #img-list img{width:48%;}
        #img-list img:last-of-type{float:right;}
        #new-img .block-header a{color:#f06e43;float:right;font-size:14px;}
        .item{padding:10px 0;border-bottom:1px solid #ddd;}
        .item > img{width:100px;float:left;margin:0 10px 0px 0;}
        .item .meta{margin-bottom:5px;font-size:14px;}
        .item h4{font-size:16px;font-weight: bold;margin:0 0 6px 0;}
        .item .price{color:#f06e43;}
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
</head>
<body>
<div class="container">
    <ul class="feature-list">
        <li style="background-image:url(http://img.idachu.com/201504/a34c4d7790b102ef3fe19db6d0b4ce28.jpg);">
            <h2>私人订制</h2>
            <span class="line"></span>
            <p>私厨上门烹制高端家宴</p>
        </li>
    </ul>
    <div class="block">
        <div class="block-header">菜单</div>
        <div class="block-body">
            <div class="item touch touch-link">
                <img src="http://img.idachu.com/201703/39851ca627a6d830ea6303d39247aaca_300.jpg"/>
                <div class="detail">
                    <h4>松竹含韵·宴</h4>
                    <div class="meta">适用于8-12人</div>
                    <div class="meta">
                        <span class="price">1888</span>元
                    </div>
                </div>
                <div class="clearfix"></div>
                <a href="10069.php"></a>
            </div>
            <div class="item touch touch-link">
                <img src="http://img.idachu.com/201609/d10d5bea091a52e3b3a3d7ff8cc83dde_300.jpg"/>
                <div class="detail">
                    <h4>花意竹情·宴</h4>
                    <div class="meta">适用于8-12人</div>
                    <div class="meta">
                        <span class="price">3588</span>元
                    </div>
                </div>
                <div class="clearfix"></div>
                <a href="10070.php"></a>
            </div>
            <div class="item touch touch-link">
                <img src="http://img.idachu.com/201609/7476733540026e29eba4c5ec40beac47_300.jpg"/>
                <div class="detail">
                    <h4>竹烟波月·宴</h4>
                    <div class="meta">适用于8-12人</div>
                    <div class="meta">
                        <span class="price">5288</span>元
                    </div>
                </div>
                <div class="clearfix"></div>
                <a href="10071.php"></a>
            </div>
            <div class="item touch touch-link">
                <img src="http://img.idachu.com/201511/d7081f40c6e8403934a72ce2bbdb60e9_300.JPG"/>
                <div class="detail">
                    <h4>圣郁金澜·宴</h4>
                    <div class="meta">适用于8-12人</div>
                    <div class="meta">
                        <span class="price">8888</span>元
                    </div>
                </div>
                <div class="clearfix"></div>
                <a href="10074.php"></a>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
