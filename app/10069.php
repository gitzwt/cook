<?php
/**
 * Created by PhpStorm.
 * User: hui
 * Date: 2017/3/22
 * Time: 21:53
 */
?>


<!DOCTYPE html>
<html>
<head>
    <title>松竹含韵·宴</title>
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
                data: {auth: str, forward: 'http://melike.imwork.net/cook/10069'},
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
        ul.feature-list{margin-left:-7px;margin-right:-8px;position:relative;}
        .recipes{margin:0;padding:0;}
        .recipes li{margin:2px 5px 2px 0;float:left;list-style:none;}
        .imgs{margin:0;padding:0;}
        .imgs li{box-sizing: border-box;height:0;font-size:0;border-right:4px solid #fff;width:25%;overflow: hidden;padding:12.5% 0;margin-bottom:5px;background-size:auto 100%;background-position: center center;float:left;}
        .price{padding:2px 4px;position:absolute;right:10px;bottom:10px;border-radius: 5px;background-color:#f0ad4e;color:#fff;font-size:16px;}
    </style>
    <script language="javascript">
        $(document).on("WeixinJSBridgeReady",function() {
            $('.imgs li[orig-src]').on('click', function(){
                var current = $(this).attr('orig-src');
                var list = [];
                $('.imgs li[orig-src]').each(function(){
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
        <li style="background-image:url(http://img.idachu.com/201509/b7358019c5e7cc3dfeb098027f8a0b0e.jpg);">
            <h2>松竹含韵·宴</h2>
            <span class="line"></span>
            <p>六凉菜九热菜一汤羹一主食，适用于8-12人</p>
            <spsn class="price">￥1888元</spsn>
        </li>
    </ul>
    <div class="block">
        <div class="block-header">菜品</div>
        <div class="block-body">
            四川腊肉、风味羊肚丝、深海老醋蛰头、江南手剥笋、东海长寿菜、野生柳芽配鸡蛋干、宫保明虾球、清蒸桂鱼、诸葛卤味羊排、云南野菌炒爽肉、海皇一品豆腐煲、清炒菜心、清汤阳春面、XO酱爆双鲜、松板菌爆安格斯牛肉粒、国宴红烧肉、花旗参红枣煲老鸡			</div>
    </div>
    <div class="block">
        <div class="block-header">图片</div>
        <div class="block-body">
            <ul class="imgs">
                <li orig-src="http://img.idachu.com/201703/39851ca627a6d830ea6303d39247aaca.jpg" style="background-image:url(http://img.idachu.com/201703/39851ca627a6d830ea6303d39247aaca_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201512/32597a42f1c16062daabf143812cceff.jpg" style="background-image:url(http://img.idachu.com/201512/32597a42f1c16062daabf143812cceff_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201609/358132582c4c60f7a184cabc876ccef6.jpg" style="background-image:url(http://img.idachu.com/201609/358132582c4c60f7a184cabc876ccef6_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201511/3d97b6668e54b0223e32c7dcff757be9.jpg" style="background-image:url(http://img.idachu.com/201511/3d97b6668e54b0223e32c7dcff757be9_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201609/acda940c7b27e605df72f74b5f6cc73e.jpg" style="background-image:url(http://img.idachu.com/201609/acda940c7b27e605df72f74b5f6cc73e_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201609/ed5b3d1c411dc9d3e1c2a8fe0374a444.jpg" style="background-image:url(http://img.idachu.com/201609/ed5b3d1c411dc9d3e1c2a8fe0374a444_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201605/5348ce22c881c288af26d6f20547f4e6.jpg" style="background-image:url(http://img.idachu.com/201605/5348ce22c881c288af26d6f20547f4e6_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201604/8d3fd54824616fdf1896fdf021632c81.jpg" style="background-image:url(http://img.idachu.com/201604/8d3fd54824616fdf1896fdf021632c81_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201511/9528526480029a2ab989fe70de61cbfb.jpg" style="background-image:url(http://img.idachu.com/201511/9528526480029a2ab989fe70de61cbfb_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201604/c6361611361b2d16edb32afba02df286.jpg" style="background-image:url(http://img.idachu.com/201604/c6361611361b2d16edb32afba02df286_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201609/926e169d9c4808ec473dbaf19095f364.jpg" style="background-image:url(http://img.idachu.com/201609/926e169d9c4808ec473dbaf19095f364_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201507/cec0a86857c46a1c687709db0dce490c.jpg" style="background-image:url(http://img.idachu.com/201507/cec0a86857c46a1c687709db0dce490c_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201611/6674c124c78e71af197238bff2f23506.jpg" style="background-image:url(http://img.idachu.com/201611/6674c124c78e71af197238bff2f23506_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201703/c3a8833453bad04e61a87eea3ed54097.jpg" style="background-image:url(http://img.idachu.com/201703/c3a8833453bad04e61a87eea3ed54097_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201609/4ab2b5f4e3f761cbf2af28f9390e9bde.jpg" style="background-image:url(http://img.idachu.com/201609/4ab2b5f4e3f761cbf2af28f9390e9bde_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201703/2f32510ac784ac63739db570a56f3ba6.jpg" style="background-image:url(http://img.idachu.com/201703/2f32510ac784ac63739db570a56f3ba6_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201609/830954d9b93f4e24f1bc5d3d56ad7d61.jpg" style="background-image:url(http://img.idachu.com/201609/830954d9b93f4e24f1bc5d3d56ad7d61_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201703/0f3a23e736b32ad5930ee89ec9c1a53a.jpg" style="background-image:url(http://img.idachu.com/201703/0f3a23e736b32ad5930ee89ec9c1a53a_300.jpg)"></li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="block">
        <div class="block-header">预约提醒</div>
        <div class="block-body">
            费用含食材及厨师服务费。请至少提前两天预订。			</div>
    </div>
    <div class="block">
        <div class="block-header">服务流程</div>
        <div class="block-body">
            1、用户线上下单预订，支付全款<br/>
            2、大客户专员联系和确认<br/>
            3、厨师团队上门服务<br/>
        </div>
    </div>

    <a href="http://melike.imwork.net/cook/10069.php" class="btn btn-success btn-block">立即预订</a>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
