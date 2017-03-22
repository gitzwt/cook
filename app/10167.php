<?php
/**
 * Created by PhpStorm.
 * User: hui
 * Date: 2017/3/22
 * Time: 22:10
 */
?>


<!DOCTYPE html>
<html>
<head>
    <title>四海皆春·宴</title>
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
                data: {auth: str, forward: 'http://melike.imwork.net/cook/10167'},
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
        <li style="background-image:url(http://img.idachu.com/201605/0f28e33b5d081695af78c337b63969aa.jpg);">
            <h2>四海皆春·宴</h2>
            <span class="line"></span>
            <p>四凉六热一汤一主食</p>
            <spsn class="price">￥2000元</spsn>
        </li>
    </ul>
    <div class="block">
        <div class="block-header">菜品</div>
        <div class="block-body">
            有滋有味鲜鲍片、清鲜茴香有机桃仁、南极冰草芝麻汁、巧拌深海扇贝裙边、京葱烧关东参（位）、冬菜蒸石斑鱼、松板菌爆安格斯牛肉粒、名门富贵水晶虾、金瓜养生菌（位）、琼脂如意、鲜松茸赤肉煲老鸡（位）、核桃包			</div>
    </div>
    <div class="block">
        <div class="block-header">图片</div>
        <div class="block-body">
            <ul class="imgs">
                <li orig-src="http://img.idachu.com/201511/2121a1bb7bf48167c4ee78ca98155f52.JPG" style="background-image:url(http://img.idachu.com/201511/2121a1bb7bf48167c4ee78ca98155f52_300.JPG)"></li>
                <li orig-src="http://img.idachu.com/201506/af366991cef0fa30c19c728f414df402.JPG" style="background-image:url(http://img.idachu.com/201506/af366991cef0fa30c19c728f414df402_300.JPG)"></li>
                <li orig-src="http://img.idachu.com/201508/916c39fbed29e33017242ec0703e0329.jpg" style="background-image:url(http://img.idachu.com/201508/916c39fbed29e33017242ec0703e0329_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201511/54f85e3d96c1dba1e537352948865041.jpg" style="background-image:url(http://img.idachu.com/201511/54f85e3d96c1dba1e537352948865041_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201506/f4b7c75a108bffb3058ad23504a50e0a.JPG" style="background-image:url(http://img.idachu.com/201506/f4b7c75a108bffb3058ad23504a50e0a_300.JPG)"></li>
                <li orig-src="http://img.idachu.com/201609/5d766f39f4c5af8924eb6dc7c2a3368d.jpg" style="background-image:url(http://img.idachu.com/201609/5d766f39f4c5af8924eb6dc7c2a3368d_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201510/fb7c1859d96ecaf0bb519022361eb908.jpg" style="background-image:url(http://img.idachu.com/201510/fb7c1859d96ecaf0bb519022361eb908_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201512/2618d96b29f1adddd5e3ef1872efcc20.jpg" style="background-image:url(http://img.idachu.com/201512/2618d96b29f1adddd5e3ef1872efcc20_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201610/ad3536660624289563c6082c7c67c33d.jpg" style="background-image:url(http://img.idachu.com/201610/ad3536660624289563c6082c7c67c33d_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201703/e456c4e9fd1794b9aea79d0e95035aa3.jpg" style="background-image:url(http://img.idachu.com/201703/e456c4e9fd1794b9aea79d0e95035aa3_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201703/2f32510ac784ac63739db570a56f3ba6.jpg" style="background-image:url(http://img.idachu.com/201703/2f32510ac784ac63739db570a56f3ba6_300.jpg)"></li>
                <li orig-src="http://img.idachu.com/201703/65b416771e2ab51e262a55ef221944ae.jpg" style="background-image:url(http://img.idachu.com/201703/65b416771e2ab51e262a55ef221944ae_300.jpg)"></li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="block">
        <div class="block-header">预约提醒</div>
        <div class="block-body">
            费用含食材及厨师服务费。请至少提前两天预订，特殊需求可联系爱大厨私人订制客服热线：13812345678			</div>
    </div>
    <div class="block">
        <div class="block-header">服务流程</div>
        <div class="block-body">
            1、用户线上下单预订，支付全款<br/>
            2、大客户专员联系和确认<br/>
            3、厨师团队上门服务<br/>
        </div>
    </div>

    <a href="http://melike.imwork.net/cook/10167" class="btn btn-success btn-block">立即预订</a>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
