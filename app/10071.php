<?php
/**
 * Created by PhpStorm.
 * User: hui
 * Date: 2017/3/22
 * Time: 22:01
 */
?>

<!DOCTYPE html>
<html>
<head>
    <title>竹烟波月·宴</title>
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
                data: {auth: str, forward: 'http://melike.imwork.net/cook/10071'},
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
        <li style="background-image:url(http://img.idachu.com/201509/27ee354650588e30dcc682bdf011b5e4.jpg);">
            <h2>竹烟波月·宴</h2>
            <span class="line"></span>
            <p>八凉菜十热菜一汤羹一主食一水果，适用于8-12人</p>
            <spsn class="price">￥5288元</spsn>
        </li>
    </ul>
    <div class="block">
        <div class="block-header">菜品</div>
        <div class="block-body">
            蜀香秘制鹅脆肠、鲜花椒生炝北海道三文鱼、葱油深海虾球、XO酱烤墨鱼仔、郫县豆瓣香酥杏鲍菇、鲜辣汁油麦菜、香椿苗拌油皮豆腐、豆豉鲮鱼凉粉、鲜人参炖黄金甲（位）、五谷杂粮煮辽参(位)、清蒸笋壳鱼、芝士焗波士顿龙虾、爱大厨一品骨、融合澳洲鲜鲍、金不换窝头牛小排、金瓜御菌佛跳墙、荷兰豆爆腊味、金银蛋浸时蔬、国色天香、安格斯牛肉炒饭（位）、时令水果拼盘（位）			</div>
    </div>
    <div class="block">
        <div class="block-header">图片</div>
        <div class="block-body">
            <ul class="imgs">
                <li orig-src="http://img.idachu.com/201609/7476733540026e29eba4c5ec40beac47.jpg" style="background-image:url(http://img.idachu.com/201609/7476733540026e29eba4c5ec40beac47_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201609/b84883b49e255d80f2d266ba2203b1bb.jpg" style="background-image:url(http://img.idachu.com/201609/b84883b49e255d80f2d266ba2203b1bb_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201609/3dace436f06043d3291753832ccebe1a.jpg" style="background-image:url(http://img.idachu.com/201609/3dace436f06043d3291753832ccebe1a_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201511/f55bd6df165387a8640f812bced31bc8.jpg" style="background-image:url(http://img.idachu.com/201511/f55bd6df165387a8640f812bced31bc8_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201509/e3d2bf992ed3b81d22f50ed8463daaee.JPG" style="background-image:url(http://img.idachu.com/201509/e3d2bf992ed3b81d22f50ed8463daaee_300.JPG)"></li>
                <li orig-src="http://img.idachu.com/201511/86ed9ec387e5ab5761ffa7477332a362.jpg" style="background-image:url(http://img.idachu.com/201511/86ed9ec387e5ab5761ffa7477332a362_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201511/200c5888cf045b157850d0829c0ddb73.jpg" style="background-image:url(http://img.idachu.com/201511/200c5888cf045b157850d0829c0ddb73_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201511/49f3e7d578399fbbbf9e3765526e5712.jpg" style="background-image:url(http://img.idachu.com/201511/49f3e7d578399fbbbf9e3765526e5712_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201511/329f1ca159d2c3028b1ef84c14568662.jpg" style="background-image:url(http://img.idachu.com/201511/329f1ca159d2c3028b1ef84c14568662_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201511/35474b1d3597f23d215c5d6be7bf3385.jpg" style="background-image:url(http://img.idachu.com/201511/35474b1d3597f23d215c5d6be7bf3385_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201512/5f93621c31e673c45a2e4d0be2a0cdaf.jpg" style="background-image:url(http://img.idachu.com/201512/5f93621c31e673c45a2e4d0be2a0cdaf_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201604/ba3d31c259b0c8f5befac242fac284e9.jpg" style="background-image:url(http://img.idachu.com/201604/ba3d31c259b0c8f5befac242fac284e9_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201610/eaf3f34e87e7d04a0c339e12eafdcac9.jpg" style="background-image:url(http://img.idachu.com/201610/eaf3f34e87e7d04a0c339e12eafdcac9_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201511/c69b5005cd94e099da703b0b516b9de2.jpg" style="background-image:url(http://img.idachu.com/201511/c69b5005cd94e099da703b0b516b9de2_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201512/3ebec65fab4e41b77d8fbc4705b95ffb.jpg" style="background-image:url(http://img.idachu.com/201512/3ebec65fab4e41b77d8fbc4705b95ffb_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201510/2f7cfd14fe9160f836fd9a83456c764d.jpg" style="background-image:url(http://img.idachu.com/201510/2f7cfd14fe9160f836fd9a83456c764d_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201512/a4a583ee7da39cb9af203296a01122f9.jpg" style="background-image:url(http://img.idachu.com/201512/a4a583ee7da39cb9af203296a01122f9_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201609/913405bc48def8c3ef7a107a2ec6960d.jpg" style="background-image:url(http://img.idachu.com/201609/913405bc48def8c3ef7a107a2ec6960d_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201609/b1ed0c5698ceac08d20b09e8e81a1cc1.jpg" style="background-image:url(http://img.idachu.com/201609/b1ed0c5698ceac08d20b09e8e81a1cc1_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201609/05e77eb4e599cf4f4588db9a2f937612.jpg" style="background-image:url(http://img.idachu.com/201609/05e77eb4e599cf4f4588db9a2f937612_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201509/e5da2e4afa08e7f1b28dc6eb8663d298.jpg" style="background-image:url(http://img.idachu.com/201509/e5da2e4afa08e7f1b28dc6eb8663d298_300.jpg)"></li>
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

    <a href="http://melike.imwork.net/cook/10071.php" class="btn btn-success btn-block">立即预订</a>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
