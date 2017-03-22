<?php
/**
 * Created by PhpStorm.
 * User: hui
 * Date: 2017/3/22
 * Time: 22:03
 */
?>

<!DOCTYPE html>
<html>
<head>
    <title>圣郁金澜·宴</title>
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
                data: {auth: str, forward: 'http://melike.imwork.net/cook/10074'},
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
        <li style="background-image:url(http://img.idachu.com/201509/bdb0400cdd6753373bece278fe5cfe02.jpg);">
            <h2>圣郁金澜·宴</h2>
            <span class="line"></span>
            <p>八凉菜九热菜一汤羹一甜点一主食一水果，适用于8-12人</p>
            <spsn class="price">￥8888元</spsn>
        </li>
    </ul>
    <div class="block">
        <div class="block-header">菜品</div>
        <div class="block-body">
            红酒尚品梅花肉腱、茶香土鸡蛋佐鹅肝酱、青芥油捞拌活海参、鳄梨金枪鱼沙拉、茶香干配鸡汁脆笋、酸奶芦荟百合、养生鱼腥草、石斛鲜灵芝炖鹧鸪（位）、新西兰三文鱼汁煎鹅胸、名门泰国虾球、印第安那冰湖野米煮野参（位)、川椒麦香黄金甲、药膳芦花鸡、桂花爆竹荪、上汤鸡毛菜、京郊有机时蔬、贵妃泡饭（位）、过桥东星斑、刺身象拔蚌、黄金榴莲酥			</div>
    </div>
    <div class="block">
        <div class="block-header">图片</div>
        <div class="block-body">
            <ul class="imgs">
                <li orig-src="http://img.idachu.com/201511/d7081f40c6e8403934a72ce2bbdb60e9.JPG" style="background-image:url(http://img.idachu.com/201511/d7081f40c6e8403934a72ce2bbdb60e9_300.JPG)"></li>
                <li orig-src="http://img.idachu.com/201511/0f44bf1c6c91f63781c38ae81a2ab2bd.JPG" style="background-image:url(http://img.idachu.com/201511/0f44bf1c6c91f63781c38ae81a2ab2bd_300.JPG)"></li>
                <li orig-src="http://img.idachu.com/201509/e60b69ba16862004b35db687a14b70a4.JPG" style="background-image:url(http://img.idachu.com/201509/e60b69ba16862004b35db687a14b70a4_300.JPG)"></li>
                <li orig-src="http://img.idachu.com/201609/7357a585be20a8609f3ed17b83d28bd9.jpg" style="background-image:url(http://img.idachu.com/201609/7357a585be20a8609f3ed17b83d28bd9_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201609/18dda96478f58145eff9f869ec7e2ab6.jpg" style="background-image:url(http://img.idachu.com/201609/18dda96478f58145eff9f869ec7e2ab6_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201511/be8e68b2177e963c802a1b8f9fce113e.jpg" style="background-image:url(http://img.idachu.com/201511/be8e68b2177e963c802a1b8f9fce113e_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201511/99b9a80cbe3ec92b9c542082caf11494.jpg" style="background-image:url(http://img.idachu.com/201511/99b9a80cbe3ec92b9c542082caf11494_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201510/965abcf2baec9272e9d469e4869715ac.jpg" style="background-image:url(http://img.idachu.com/201510/965abcf2baec9272e9d469e4869715ac_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201703/57ae59b721d32b2731fd22032ae4c284.jpg" style="background-image:url(http://img.idachu.com/201703/57ae59b721d32b2731fd22032ae4c284_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201511/896eeff9a166d6b6082dd56316dced5b.jpg" style="background-image:url(http://img.idachu.com/201511/896eeff9a166d6b6082dd56316dced5b_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201511/a735ca37ed9a91fbbad2859fa262dc8d.jpg" style="background-image:url(http://img.idachu.com/201511/a735ca37ed9a91fbbad2859fa262dc8d_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201511/8baa5bf64dd52fe59ab48bb78ab6b771.jpg" style="background-image:url(http://img.idachu.com/201511/8baa5bf64dd52fe59ab48bb78ab6b771_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201511/40cbcc29c4246a1d4163eb31069e721f.jpg" style="background-image:url(http://img.idachu.com/201511/40cbcc29c4246a1d4163eb31069e721f_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201509/00560c7205e6884cbb656f8365764e59.JPG" style="background-image:url(http://img.idachu.com/201509/00560c7205e6884cbb656f8365764e59_300.JPG)"></li>
                <li orig-src="http://img.idachu.com/201604/06bf0708117012973e995d587c6d8f45.jpg" style="background-image:url(http://img.idachu.com/201604/06bf0708117012973e995d587c6d8f45_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201511/a69b49364af948d2d03471959697985f.jpg" style="background-image:url(http://img.idachu.com/201511/a69b49364af948d2d03471959697985f_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201609/49823a7083a91a16cb27e014bf63971b.jpg" style="background-image:url(http://img.idachu.com/201609/49823a7083a91a16cb27e014bf63971b_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201509/e5da2e4afa08e7f1b28dc6eb8663d298.jpg" style="background-image:url(http://img.idachu.com/201509/e5da2e4afa08e7f1b28dc6eb8663d298_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201511/13c77493b49988c791af2417f1c9e427.jpg" style="background-image:url(http://img.idachu.com/201511/13c77493b49988c791af2417f1c9e427_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201510/0e4757105ec5372dbe8d0f8e74cac9d0.png" style="background-image:url(http://img.idachu.com/201510/0e4757105ec5372dbe8d0f8e74cac9d0_300.png)"></li>
                <li orig-src="http://img.idachu.com/201511/1d552deab823bb55cea00799c7258425.jpg" style="background-image:url(http://img.idachu.com/201511/1d552deab823bb55cea00799c7258425_300.jpg)"></li>
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

    <a href="http://melike.imwork.net/cook/10074.php" class="btn btn-success btn-block">立即预订</a>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
