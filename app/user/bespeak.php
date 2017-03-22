<?php
/**
 * Created by PhpStorm.
 * User: hui
 * Date: 2017/3/11
 * Time: 20:21
 */

?>


<!DOCTYPE html>
<html>
<head>
    <title>我的订单</title>
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
                data: {auth: str, forward: 'http://melike.imwork.net/cook/user/bespeak'},
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
            hm.src = "//hm.baidu.com/hm.js?<?php echo date('YmdHis')?>";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script><script>
        $(function(){
            $('.more').more({
                url: 'http://www.idachu.cn/user/bespeak/my/all',
                max_page: 1,
                elem: '#bespeak-list'
            })
        })
    </script>
    <style>
        .alert{margin:10px;}
    </style>
</head>
<body class="folder">
<div class="container" style="padding:0;">
    <div class="nav-list">
        <div class="nav-list-item touch active" act="all"><a href="http://melike.imwork.net/cook/user/bespeak">全部</a></div>
        <div class="nav-list-item touch "><a href="">待支付</a></div>
        <div class="nav-list-item touch "><a href="">待评价</a></div>
        <div class="nav-list-item touch "><a href="">已取消</a></div>
    </div>
    <div class="heipx"></div>

    <ul class="order-list" id="bespeak-list">
        <li class="order-item">
            <div class="order-header">
                <img src="http://www.idachu.cn/icon/images/no_user.png"/>
                <span style="color:#999;">未分配厨师</span>
                <div class="order-status">等待支付</div>
            </div>
            <div class="order-body touch-link touch">
                <a href="http://www.idachu.cn/user/bespeak/view/69138739"></a>
                <img src="http://www.idachu.cn/icon/images/chief_placeholder.png?ver=7f484403"/>
                <h2>四菜套餐</h2><em>就餐时间：2017-03-13 10:00</em>
            </div>
            <div class="order-footer">
                实付: ￥158				<a href="" class="obtn obtn-pay">去支付</a>
            </div>
            <div class="heipx"></div>
        </li>		</ul>
    <div class="more"><span class="loading_ico"></span> 点击加载更多</div>
</div>
<?php include '../footer.php'; ?>
</body>
</html>
