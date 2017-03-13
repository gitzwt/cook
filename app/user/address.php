<?php
/**
 * Created by PhpStorm.
 * User: hui
 * Date: 2017/3/11
 * Time: 20:47
 */

?>


<!DOCTYPE html>
<html>
<head>
    <title>常用地址</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0,minimal-ui"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <meta name="format-detection" content="telephone=no"/>
    <link href="http://www.idachu.cn/icon/production/index.css?ver=7f484403" rel="stylesheet"/>
    <meta name="keywords" content="">
    <meta name="description" content="爱大厨,国内专业的私厨上门服务平台.北上广深八大菜系数千名大厨为你待命,app在线预约,金牌厨师上门做饭.家常用餐,宴请贵宾,爱大厨为您私人订制上门服务">
    <script charset="utf-8" src="http://www.idachu.cn/icon/production/index.js?ver=7f484403"></script>
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
                data: {auth: str, forward: 'http://www.idachu.cn/user/address'},
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
            $('.default').action({
                url: base_url('user/do_address/default'),
                data: function(){
                    return {id: $(this).parents('[address_id]').attr('address_id')}
                },
                success: function(){
                    wap.alert('操作成功', function(){
                        location.reload();
                    });
                }
            });

            $('.delete').action({
                url: base_url('user/do_address/delete'),
                check: function(){
                    return confirm('确定要删除该地址吗?')
                },
                data: function(){
                    return {id: $(this).parents('[address_id]').attr('address_id')}
                },
                success: function(){
                    wap.alert('操作成功', function(){
                        location.reload();
                    });
                }
            });
        })
    </script>
    <style>
        .container{margin:0 0 0 0;}
        .ad-header{font-size:14px;line-height: 14px;padding:4px 0 6px;}
        .ad-detail{font-size:12px;color:gray;line-height: 12px;padding:2px 0;}
        #kitchener_list .list-group-item{padding: 10px 10px;}
    </style>
</head>
<body>
<div class="container">
    <div id="kitchener_list" class="panel noheading panel-default">
        <ul class="media-list list-group">
            <li class="list-group-item property-list-detail touch-link">
                <div class="ad-header">
                    zwt&nbsp;&nbsp;&nbsp;&nbsp;13777399387					</div>
                <div class="ad-detail">
                    朝阳区三里屯北小区1号楼501					</div>
                <a href="http://www.idachu.cn/user/address/edit?id=1643853"></a>
            </li>
        </ul>
    </div>

    <a href="http://www.idachu.cn/user/address/add" class="btn btn-success btn-block">添加新地址</a>
</div>
<div id="footer">
    <footer>
        <section class="touch">
            <a href="http://www.idachu.cn/">
                <i class="glyphicon glyphicon-home"></i>
                <span>首页</span>
            </a>
        </section>
        <section class="touch">
            <a href="http://www.idachu.cn/kitchener">
                <i class="glyphicon glyphicon-cloud"></i>
                <span>大厨</span>
            </a>
        </section>
        <section class="touch quick-add">
            <a href="http://www.idachu.cn/bespeak">
                <i class="glyphicon"></i>
                <span>快速预约</span>
            </a>
        </section>
        <section class="touch">
            <a href="http://www.idachu.cn/user/bespeak">
                <i class="glyphicon glyphicon-list"></i>
                <span>我的订单</span>
            </a>
        </section>
        <section class="touch">
            <a href="http://www.idachu.cn/user">
                <i class="glyphicon glyphicon-user"></i>
                <span>我</span>
            </a>
        </section>
    </footer>
    <div class="footer-more"><span></span></div>
    <div id="alert">
        <span></span>
    </div></div></body>
</html>
