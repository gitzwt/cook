<?php
/**
 * Created by PhpStorm.
 * User: hui
 * Date: 2017/3/22
 * Time: 21:56
 */
?>


<!DOCTYPE html>
<html>
<head>
    <title>花意竹情·宴</title>
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
                data: {auth: str, forward: 'http://melike.imwork.net/cook/10070'},
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
        <li style="background-image:url(http://img.idachu.com/201509/b4f38733d316e628b29abbe2cb2fe9a2.jpg);">
            <h2>花意竹情·宴</h2>
            <span class="line"></span>
            <p>六凉菜十热菜一汤羹一主食一水果，适用于8-12人</p>
            <spsn class="price">￥3588元</spsn>
        </li>
    </ul>
    <div class="block">
        <div class="block-header">菜品</div>
        <div class="block-body">
            跳水牛展肉、深海芝麻裙边、广式白切鸡、捞汁百里香素鲍、有滋有味核桃仁、养生菌皇煲老鸭（位）、金蒜爆安格斯牛肉、手抓新西兰羊排（位）、冬菜蒸石斑鱼、顺德鲍鱼炒鸡、京葱烧梅花参、火龙果小炒皇、鲜虾大煮干丝、桃仁木耳山药、白灼芥蓝苗、扬州炒饭、水果拼盘（一份）、xo酱蜜豆爆爽肉、爽口山药配蓝莓汁			</div>
    </div>
    <div class="block">
        <div class="block-header">图片</div>
        <div class="block-body">
            <ul class="imgs">
                <li orig-src="http://img.idachu.com/201609/d10d5bea091a52e3b3a3d7ff8cc83dde.jpg" style="background-image:url(http://img.idachu.com/201609/d10d5bea091a52e3b3a3d7ff8cc83dde_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201609/31e2b6b8f3ea731ada406c04d6393c0f.jpg" style="background-image:url(http://img.idachu.com/201609/31e2b6b8f3ea731ada406c04d6393c0f_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201511/43e02867eac5d7532e3544e5b968fcc2.jpg" style="background-image:url(http://img.idachu.com/201511/43e02867eac5d7532e3544e5b968fcc2_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201609/8dd8278e1837dcbc0eeaf822d7563e42.jpg" style="background-image:url(http://img.idachu.com/201609/8dd8278e1837dcbc0eeaf822d7563e42_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201609/95c8ffa7c44b7f5c797f904eb9c96c61.jpg" style="background-image:url(http://img.idachu.com/201609/95c8ffa7c44b7f5c797f904eb9c96c61_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201609/0d08379ab78edfe3e6da2d1bed07686a.jpg" style="background-image:url(http://img.idachu.com/201609/0d08379ab78edfe3e6da2d1bed07686a_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201506/f4b7c75a108bffb3058ad23504a50e0a.JPG" style="background-image:url(http://img.idachu.com/201506/f4b7c75a108bffb3058ad23504a50e0a_300.JPG)"></li>
                <li orig-src="http://img.idachu.com/201609/c92eb9b2399af330e25ad114d59e9031.JPG" style="background-image:url(http://img.idachu.com/201609/c92eb9b2399af330e25ad114d59e9031_300.JPG)"></li>
                <li orig-src="http://img.idachu.com/201609/7092e1ce91b98b8e518634ab23fa6bcb.jpg" style="background-image:url(http://img.idachu.com/201609/7092e1ce91b98b8e518634ab23fa6bcb_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201604/f324aa069e20239e93da5143c902d5b5.jpg" style="background-image:url(http://img.idachu.com/201604/f324aa069e20239e93da5143c902d5b5_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201604/f37a2e9e5b67e649c3c31c98b5de2966.jpg" style="background-image:url(http://img.idachu.com/201604/f37a2e9e5b67e649c3c31c98b5de2966_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201511/75065db96e882743375ffebd23849595.jpg" style="background-image:url(http://img.idachu.com/201511/75065db96e882743375ffebd23849595_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201512/f390aa5b2502e2abf279a41d9451b4fc.jpg" style="background-image:url(http://img.idachu.com/201512/f390aa5b2502e2abf279a41d9451b4fc_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201510/0a8e16196847250a451842df0cbdcd44.jpg" style="background-image:url(http://img.idachu.com/201510/0a8e16196847250a451842df0cbdcd44_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201508/277c7b9569a7b922c83d1fd56fb3a32e.jpg" style="background-image:url(http://img.idachu.com/201508/277c7b9569a7b922c83d1fd56fb3a32e_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201703/ff887c4a2818d480c59fc50dc2eb8979.jpg" style="background-image:url(http://img.idachu.com/201703/ff887c4a2818d480c59fc50dc2eb8979_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201508/dd86e742db5d1a9aabd0fb4b066868a4.jpg" style="background-image:url(http://img.idachu.com/201508/dd86e742db5d1a9aabd0fb4b066868a4_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201703/a21a9a9bb1477f9f504d514e0fdd1942.jpg" style="background-image:url(http://img.idachu.com/201703/a21a9a9bb1477f9f504d514e0fdd1942_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201703/dd8aab5aa85fc510d88b9779212b4fd8.jpg" style="background-image:url(http://img.idachu.com/201703/dd8aab5aa85fc510d88b9779212b4fd8_300.jpg)"></li>
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

    <a href="http://melike.imwork.net/cook/10070.php" class="btn btn-success btn-block">立即预订</a>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
