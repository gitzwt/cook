<?php
/**
 * Created by PhpStorm.
 * User: hui
 * Date: 2017/3/11
 * Time: 20:39
 */

?>


<!DOCTYPE html>
<html>
<head>
    <title>订单详情</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0,minimal-ui"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <meta name="format-detection" content="telephone=no"/>
    <link href="http://www.idachu.cn/icon/production/index.css?ver=7f484403" rel="stylesheet"/>
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
                data: {auth: str, forward: 'http://www.idachu.cn/user/bespeak/view/69138739'},
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
        $(function(){
            $('.btns button[act=cancel]').confirm('确定要取消订单吗？', '该操作不能撤销', function(){
                $(this).do_action({
                    url: base_url('api/bespeak/cancel'),
                    enable: false,
                    data: {id: $('#id').val()},
                    success: function(){
                        wap.alert('操作成功');
                        location.reload();
                    }
                })
            })

            $('.btns button[act=finish]').confirm('确定要完成订单吗？', '', function(){
                $(this).do_action({
                    url: base_url('api/bespeak/finish'),
                    enable: false,
                    data: {id: $('#id').val()},
                    success: function(){
                        wap.alert('操作成功');
                        location.reload();
                    }
                })
            })
        })
    </script>
    <style>
        .btns{padding:4px 10px;background-color: #fff;}
        .btns .btn{margin-left:10px;}
        .btns a.btn-success{color:#fff;}
        .btns span{
            float:left;
            color: #f06e43;
            display: inline-block;
            font-size: 18px;
            line-height: 32px;
            padding-left:5px;
        }
        .status-1{color:#f0ad4e;}
        .status-4{color:gray;}
        .status-3{color:#5cb85c;}
        .status-5{color:#d2322d;}
    </style>
</head>
<body class="blockb">
<input type="hidden" id="id" value="69138739"/>

<h2 class="tith2">套餐详情</h2>
<ul class="block_ul">
    <li><span class="alt">订单号 </span>69138739</li>
    <li><span class="alt">选择大厨 </span><i>由客服为您匹配大厨</i></li>
    <li><span class="alt">选择套餐 </span>四菜套餐</li>
    <li><span class="alt">套餐价格 </span>158元</li>
    <li><span class="alt">就餐地址 </span>朝阳区三里屯北小区1号楼501</li>
    <li><span class="alt">就餐时间 </span>2017-03-13 10:00:00</li>
    <div class="clearfix"></div>
</ul>
<div class="heipx"></div>

<h2 class="tith2">订单状态</h2>
<ul class="block_ul btns">
    <li style="height:40px;">
        <a  class="btn btn-success pull-right" href="http://www.idachu.cn/bespeak/pay/69138739?showwxpaytitle=1">立即支付</a>
        <span class="status status-5">等待支付</span>
        <button type="button" class="btn btn-default pull-right" act="cancel">取消订单</button>
        <div class="clearfix"></div>
    </li>
    <div class="clearfix"></div>
</ul>
<div class="heipx"></div>

<h2 class="tith2">费用详情</h2>
<ul class="block_ul">
    <li><span class="alt">服务费 </span>158.00</li>
    <li><span class="alt">订单金额 </span>158.00</li>
    <li><span class="alt">支付状态 </span>未选择支付方式</li>
</ul>
<div class="heipx"></div>

<h2 class="tith2">联系方式</h2>
<ul class="block_ul">
    <li><span class="alt">姓名 </span>zwt</li>
    <li><span class="alt">手机 </span>13777399387</li>
    <li><span class="alt">下单时间 </span>2017-03-11 20:37:06</li>
</ul>
<div class="heipx"></div>

<h2 class="tith2">特殊需求</h2>
<ul class="block_ul">
    <li style="height:auto;">都可以</li>
</ul>
<div class="heipx"></div>

<div id="footer">
    <?php include '../footer.php'; ?>
    <div class="footer-more"><span></span></div>
    <div id="alert">
        <span></span>
    </div></div></body>
</html>
