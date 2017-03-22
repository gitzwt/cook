<?php
/**
 * Created by PhpStorm.
 * User: hui
 * Date: 2017/3/22
 * Time: 22:13
 */
?>


<!DOCTYPE html>
<html>
<head>
    <title>单品售卖（开化）</title>
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
                data: {auth: str, forward: 'http://melike.imwork.net/cook/8'},
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
    </script><script>
        wxData = {
            'imgUrl': 'http://www.idachu.cn/icon/images/favicon.png?ver=7f484403', // 分享显示的图标
            'link': 'http://www.idachu.cn/ingenuity/cat/8', // 分享链接
            'title': '"\u5355\u54c1\u70ed\u5356(\u5317\u4eac)"', // 分享标题
            'desc': '"\u9ad8\u80fd\u9884\u8b66\uff01\u524d\u65b9\u5f00\u4ed3\u653e\u7cae\u4e2d~\u7cbe\u5fc3\u6311\u9009\u98df\u6750\u3001\u6c34\u679c\u3001\u517b\u751f\u4f73\u54c1\uff0c\u8ba9\u60a8\u751f\u6d3b\u66f4\u5065\u5eb7\uff0c\u66f4\u65b9\u4fbf~"' // 分享内容
        };
    </script>
    <style>
        .head{padding:10px 0;text-align: center;}
        .head span{font-size:18px;font-weight: bold;line-height: 18px;}
        .jx-list{margin:0;padding:0;}
        .jx-list li{border-top:1px solid #ccc;min-height:120px;margin: 0;padding:10px 10px;list-style: none;}
        .jx-list li:last-child{border-bottom:1px solid #ccc;}
        .jx-list-head{float:left;}
        .jx-list-head img{height:100px;width:125px;}
        .jx-right{text-align: right;}
        .brand{line-height: 20px;font-size: 12px;}
        .brand img{width:20px;height:20px;}
        .jx-right h2{font-size:16px;margin:2px 0 2px;padding:0;line-height: 24px;}
        .guige{background:#f3f3f3;border-radius: 6px;font-size:12px;color:#a3a3a3;padding:2px 4px;top:-2px;position: relative;}
        .price{margin-bottom:4px;}
        .jx-list-price-0{font-size:12px;color:#fe122e;top:-2px;position: relative;}
        .jx-list-price-1{font-size:18px;color:#fe122e;line-height: 18px;}
        .goumai span{background:#fe122e;height:20px;padding:3px 6px;font-size:12px;color:#fff;text-decoration: none;border-radius: 4px;}
    </style>
</head>
<body>
<ul class="jx-list">
    <li class="touch-link">
        <div class="jx-list-head"><img src="http://img.idachu.com/201703/ce0cb617cf8d1d45d2345e6dfd4c08e6.jpg"/></div>
        <div class="jx-right">
            <div class="brand">
                造餐家					<img src="http://img.idachu.com/201702/7334c2e8c244437c881b340e9413b5a4_300.jpg"/>
            </div>
            <h2>常德派“香辣牛杂+麻辣牛肉”套装</h2>
            <div class="price">
                <span class="guige">每包约150g+两联包</span>
                <span class="jx-list-price-0">￥</span>
                <span class="jx-list-price-1">89</span>
            </div>
            <div class="goumai">
                <span>立即购买</span>
            </div>
        </div>
    </li>
    <li class="touch-link">
        <div class="jx-list-head"><img src="http://img.idachu.com/201703/c165fabdcb823e0fdea1397cb70cd3c7.jpg"/></div>
        <div class="jx-right">
            <div class="brand">
                造餐家					<img src="http://img.idachu.com/201702/7334c2e8c244437c881b340e9413b5a4_300.jpg"/>
            </div>
            <h2>傅记酱猪蹄</h2>
            <div class="price">
                <span class="guige">每份两只，约 1斤半/份</span>
                <span class="jx-list-price-0">￥</span>
                <span class="jx-list-price-1">69</span>
            </div>
            <div class="goumai">
                <span>立即购买</span>
            </div>
        </div>
    </li>
    <li class="touch-link">
        <div class="jx-list-head"><img src="http://img.idachu.com/201703/3640b3bd6e494b9ea089aa6219a3481a.jpg"/></div>
        <div class="jx-right">
            <div class="brand">
                造餐家					<img src="http://img.idachu.com/201702/7334c2e8c244437c881b340e9413b5a4_300.jpg"/>
            </div>
            <h2>傅记酱猪肘</h2>
            <div class="price">
                <span class="guige">约 1斤半/份</span>
                <span class="jx-list-price-0">￥</span>
                <span class="jx-list-price-1">109</span>
            </div>
            <div class="goumai">
                <span>立即购买</span>
            </div>
        </div>
    </li>
    <li class="touch-link">
        <div class="jx-list-head"><img src="http://img.idachu.com/201703/3a7d0b54d035cd3f5ee38ee090b40127.jpg"/></div>
        <div class="jx-right">
            <div class="brand">
                造餐家					<img src="http://img.idachu.com/201702/7334c2e8c244437c881b340e9413b5a4_300.jpg"/>
            </div>
            <h2>蜂蜜套装</h2>
            <div class="price">
                <span class="guige">包含两瓶蜂蜜+一袋蜂花粉，约500g/瓶</span>
                <span class="jx-list-price-0">￥</span>
                <span class="jx-list-price-1">169</span>
            </div>
            <div class="goumai">
                <span>立即购买</span>
            </div>
        </div>
    </li>
    <li class="touch-link">
        <div class="jx-list-head"><img src="http://img.idachu.com/201703/edc7ef46487884ffc36e1052a3b4c905.jpg"/></div>
        <div class="jx-right">
            <div class="brand">
                造餐家					<img src="http://img.idachu.com/201702/7334c2e8c244437c881b340e9413b5a4_300.jpg"/>
            </div>
            <h2>180天自然生长的番茄（2盒）</h2>
            <div class="price">
                <span class="guige">6 个/盒</span>
                <span class="jx-list-price-0">￥</span>
                <span class="jx-list-price-1">99</span>
            </div>
            <div class="goumai">
                <span>立即购买</span>
            </div>
        </div>
    </li>
    <li class="touch-link">
        <div class="jx-list-head"><img src="http://img.idachu.com/201703/b1ce0bdaafda674de7163f05df3698b0.jpg"/></div>
        <div class="jx-right">
            <div class="brand">
                造餐家					<img src="http://img.idachu.com/201702/7334c2e8c244437c881b340e9413b5a4_300.jpg"/>
            </div>
            <h2>傅记新派酱香方肉</h2>
            <div class="price">
                <span class="guige">约1kg / 份</span>
                <span class="jx-list-price-0">￥</span>
                <span class="jx-list-price-1">135</span>
            </div>
            <div class="goumai">
                <span>立即购买</span>
            </div>
        </div>
    </li>
    <li class="touch-link">
        <div class="jx-list-head"><img src="http://img.idachu.com/201703/1c47589c18d5f01f1e1d2e2f8657c716.jpg"/></div>
        <div class="jx-right">
            <div class="brand">
                造餐家					<img src="http://img.idachu.com/201702/7334c2e8c244437c881b340e9413b5a4_300.jpg"/>
            </div>
            <h2>抹茶牛轧糖礼盒</h2>
            <div class="price">
                <span class="guige">200g /盒</span>
                <span class="jx-list-price-0">￥</span>
                <span class="jx-list-price-1">116</span>
            </div>
            <div class="goumai">
                <span>立即购买</span>
            </div>
        </div>
    </li>
    <li class="touch-link">
        <div class="jx-list-head"><img src="http://img.idachu.com/201702/2d42db01481edb3a4bac2b536d1b838f.jpg"/></div>
        <div class="jx-right">
            <div class="brand">
                造餐家					<img src="http://img.idachu.com/201702/7334c2e8c244437c881b340e9413b5a4_300.jpg"/>
            </div>
            <h2>一碗羊汤·酱羊肉</h2>
            <div class="price">
                <span class="guige">约500g/份</span>
                <span class="jx-list-price-0">￥</span>
                <span class="jx-list-price-1">119</span>
            </div>
            <div class="goumai">
                <span>立即购买</span>
            </div>
        </div>
    </li>
    <li class="touch-link">
        <div class="jx-list-head"><img src="http://img.idachu.com/201703/0a002cee2e1ab079bcaf88a940c742cd.jpg"/></div>
        <div class="jx-right">
            <div class="brand">
                造餐家					<img src="http://img.idachu.com/201702/7334c2e8c244437c881b340e9413b5a4_300.jpg"/>
            </div>
            <h2>醉生梦死秃黄油</h2>
            <div class="price">
                <span class="guige">约100g / 瓶</span>
                <span class="jx-list-price-0">￥</span>
                <span class="jx-list-price-1">225</span>
            </div>
            <div class="goumai">
                <span>立即购买</span>
            </div>
        </div>
    </li>
    <li class="touch-link">
        <div class="jx-list-head"><img src="http://img.idachu.com/201610/d05249f7e4b2f2260c6aeb3cd75995b5.jpg"/></div>
        <div class="jx-right">
            <div class="brand">
                等蜂来					<img src="http://img.idachu.com/201605/7d3b2f80a5af00bce2dc3de177bd3b20_300.jpg"/>
            </div>
            <h2>等蜂来田园蜜 618g/盒</h2>
            <div class="price">
                <span class="guige">618g/盒</span>
                <span class="jx-list-price-0">￥</span>
                <span class="jx-list-price-1">69</span>
            </div>
            <div class="goumai">
                <span>立即购买</span>
            </div>
        </div>
    </li>
    <li class="touch-link">
        <div class="jx-list-head"><img src="http://img.idachu.com/201610/0374c49d3cd4c4ec97747917dd65ad7a.jpg"/></div>
        <div class="jx-right">
            <div class="brand">
                立景生态					<img src="http://img.idachu.com/201603/7eab56ca50fe5faa2d7fefe8ded44426_300.jpg"/>
            </div>
            <h2>家庭装立景生态爱心套装</h2>
            <div class="price">
                <span class="guige">500g/罐*2</span>
                <span class="jx-list-price-0">￥</span>
                <span class="jx-list-price-1">126</span>
            </div>
            <div class="goumai">
                <span>立即购买</span>
            </div>
        </div>
    </li>
    <li class="touch-link">
        <div class="jx-list-head"><img src="http://img.idachu.com/201603/3d058ae4062a71539630b01bcb3bdbe1.jpg"/></div>
        <div class="jx-right">
            <div class="brand">
                羊二小					<img src="http://img.idachu.com/201511/13980f23ea365609a940fa55b29122a2_300.jpg"/>
            </div>
            <h2>羊二小草原羊蝎子</h2>
            <div class="price">
                <span class="guige">2kg</span>
                <span class="jx-list-price-0">￥</span>
                <span class="jx-list-price-1">179</span>
            </div>
            <div class="goumai">
                <span>立即购买</span>
            </div>
        </div>
    </li>
    <li class="touch-link">
        <div class="jx-list-head"><img src="http://img.idachu.com/201703/bd034039f00fba2ec3c486843aa325fb.jpg"/></div>
        <div class="jx-right">
            <div class="brand">
                V道					<img src="http://img.idachu.com/201601/c8469a47e6b63f468536273afcdbec6f_300.png"/>
            </div>
            <h2>V道营养蔬菜宅配田园蔬宴</h2>
            <div class="price">
                <span class="guige">7-9斤</span>
                <span class="jx-list-price-0">￥</span>
                <span class="jx-list-price-1">98</span>
            </div>
            <div class="goumai">
                <span>立即购买</span>
            </div>
        </div>
    </li>
    <li class="touch-link">
        <div class="jx-list-head"><img src="http://img.idachu.com/201611/b03b0b9d23bdca3baebe2a98c81b03dd.jpg"/></div>
        <div class="jx-right">
            <div class="brand">
                壹家壹站					<img src="http://img.idachu.com/201512/b398f5dd8d4908ed15138bc38913b1f7_300.png"/>
            </div>
            <h2>马来西亚进口老虎虾（肉紧致，极好）</h2>
            <div class="price">
                <span class="guige">430g*2 共约15*2只 虾约19cm不含须</span>
                <span class="jx-list-price-0">￥</span>
                <span class="jx-list-price-1">139</span>
            </div>
            <div class="goumai">
                <span>立即购买</span>
            </div>
        </div>
    </li>
</ul>
</body>
</html>
