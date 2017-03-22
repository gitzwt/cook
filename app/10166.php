<?php
/**
 * Created by PhpStorm.
 * User: hui
 * Date: 2017/3/22
 * Time: 22:08
 */
?>

<!DOCTYPE html>
<html>
<head>
    <title>五谷丰登·宴</title>
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
                data: {auth: str, forward: 'http://melike.imwork.net/cook/10166'},
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
        <li style="background-image:url(http://img.idachu.com/201605/0849900f30c41729787fe4cd77c6fa61.jpg);">
            <h2>五谷丰登·宴</h2>
            <span class="line"></span>
            <p>四凉五热一汤一主食</p>
            <spsn class="price">￥1200元</spsn>
        </li>
    </ul>
    <div class="block">
        <div class="block-header">菜品</div>
        <div class="block-body">
            水晶鹅肝冻、深海虾球配蒜香黄瓜花、冰镇玉兰花、干妈豆豉养生秋葵、小米煮辽参（位）、蜜豆爆劲道肉、红莲鲜虾映月、泉水高山豆苗、党参红枣炖猪展（位）、清汤面、沙姜焗多宝鱼			</div>
    </div>
    <div class="block">
        <div class="block-header">图片</div>
        <div class="block-body">
            <ul class="imgs">
                <li orig-src="http://img.idachu.com/201703/e39e8957f64c1b241b5814b7e391fbef.jpg" style="background-image:url(http://img.idachu.com/201703/e39e8957f64c1b241b5814b7e391fbef_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201604/980ac91eca56635def01a99b558d2bb3.jpg" style="background-image:url(http://img.idachu.com/201604/980ac91eca56635def01a99b558d2bb3_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201703/85aac85532cf46ea0463ce50f89d8368.jpg" style="background-image:url(http://img.idachu.com/201703/85aac85532cf46ea0463ce50f89d8368_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201609/1f92b7f1d3eedef52497cf287983eb9e.jpg" style="background-image:url(http://img.idachu.com/201609/1f92b7f1d3eedef52497cf287983eb9e_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201703/cad0ad812cf1f68c944926f28865c111.jpg" style="background-image:url(http://img.idachu.com/201703/cad0ad812cf1f68c944926f28865c111_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201609/3e08ad14198dd281fbe9a4e8ae6678a4.JPG" style="background-image:url(http://img.idachu.com/201609/3e08ad14198dd281fbe9a4e8ae6678a4_300.JPG)"></li>
                <li orig-src="http://img.idachu.com/201604/e89420ff40a288193d54949ec081ec27.jpg" style="background-image:url(http://img.idachu.com/201604/e89420ff40a288193d54949ec081ec27_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201609/d6c854475d79f9313ea448112f207326.jpg" style="background-image:url(http://img.idachu.com/201609/d6c854475d79f9313ea448112f207326_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201604/6e58f053f3ab2349202e41ccdeb3fa43.jpg" style="background-image:url(http://img.idachu.com/201604/6e58f053f3ab2349202e41ccdeb3fa43_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201703/815ce71ee8ca1f33a75e093800814180.jpg" style="background-image:url(http://img.idachu.com/201703/815ce71ee8ca1f33a75e093800814180_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201512/59f462d88f7eb702d178acee6231b80d.jpg" style="background-image:url(http://img.idachu.com/201512/59f462d88f7eb702d178acee6231b80d_300.jpg)"></li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="block">
        <div class="block-header">预约提醒</div>
        <div class="block-body">
            费用含食材及厨师服务费。请至少提前两天预订，特殊需求可联系爱大厨私人订制客服热线：13838383838		</div>
    </div>
    <div class="block">
        <div class="block-header">服务流程</div>
        <div class="block-body">
            1、用户线上下单预订，支付全款<br/>
            2、大客户专员联系和确认<br/>
            3、厨师团队上门服务<br/>
        </div>
    </div>

    <a href="http://melike.imwork.net/cook/10166" class="btn btn-success btn-block">立即预订</a>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
