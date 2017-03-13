<?php
/**
 * Created by PhpStorm.
 * User: hui
 * Date: 2017/3/11
 * Time: 20:49
 */

?>


<!DOCTYPE html>
<html>
<head>
    <title>添加地址</title>
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
                data: {auth: str, forward: 'http://www.idachu.cn/user/address/edit?id=1643853'},
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
        var forward = null||base_url('kitchener');
        var check_code = false;
        $(function(){
            $('#area').mobiscroll().select({
                display: 'bottom',
                mode: 'scroller',
                label: '城区',
                showInput: false,
                lang: 'zh',
                onSelect: function(){
                    $('#area_holder').val($('#area option:selected').text());
                }
            })
            $('#area_holder').click(function () {
                $('#area').mobiscroll('show');
            })

            $('#save_btn').click(function(){
                var community = $('#community').val();
                if(community.length < 2){
                    wap.alert('请填写小区名');
                    return;
                }

                var door_number = $('#door_number').val();
                if(door_number.length < 2){
                    wap.alert('请填写门牌号');
                    return;
                }

                var name = $('#name').val();
                if(name.length < 2){
                    wap.alert('请填写您的姓名');
                    return;
                }

                var phone = $('#phone').val();
                if(!/^1\d{10}/.test(phone)){
                    wap.alert('请填写您的手机号');
                    return;
                }

                var code = $('#code').val();
                if(code && !/^\d{6}/.test(code)){
                    wap.alert('验证码不正确');
                    return;
                }

                $(this).do_action({
                    url: 'http://www.idachu.cn/user/do_address/add',
                    data: {
                        community: community,
                        door_number: door_number,
                        phone: phone,
                        name: name,
                        code: code
                    },
                    success: function(data){
                        wap.alert('设置成功');
                        setTimeout(function(){
                            if(forward){
                                location.href = forward;
                            }else{
                                location.href = base_url('kitchener');
                            }
                        }, 1000);
                    }
                })
            })
        })
    </script>
    <style>
        #ok_alert{
            display:none;
            margin-top:10px;
        }
        body{padding-top:10px;}
    </style>
</head>
<body>
<div class="container" id="setting">
    <input type="hidden" id="code"/>
    <div class="panel panel-default">
        <div class="panel-heading">
            就餐地址
        </div>
        <ul class="list-group">
            <li class="list-group-item edit_controll"><span class="alt">小区 <span class="required">*</span></span><input type="text" class="input" id="community" value="三里屯北小区" placeholder="例如三里屯北小区"/></li>
            <li class="list-group-item edit_controll"><span class="alt">门牌号 <span class="required">*</span></span><input type="text" class="input" id="door_number" value="1号楼501" placeholder="例如1号楼501"/></li>
        </ul>
    </div>
    <select id="area">
        <option value="朝阳区" selected selected2="true">朝阳区</option>
        <option value="海淀区" >海淀区</option>
        <option value="东城区" >东城区</option>
        <option value="西城区" >西城区</option>
        <option value="丰台区" >丰台区</option>
        <option value="石景山区" >石景山区</option>
        <option value="房山区" >房山区</option>
        <option value="通州区" >通州区</option>
        <option value="昌平区" >昌平区</option>
        <option value="大兴区" >大兴区</option>
        <option value="顺义区" >顺义区</option>
        <option value="密云县" >密云县</option>
        <option value="怀柔区" >怀柔区</option>
        <option value="延庆县" >延庆县</option>
        <option value="平谷区" >平谷区</option>
        <option value="门头沟区" >门头沟区</option>
    </select>
    <div class="panel panel-default">
        <div class="panel-heading">
            联系方式
        </div>
        <ul class="list-group" id="contact_container">
            <li class="list-group-item edit_controll"><span class="alt">姓名 <span class="required">*</span></span><input type="text" class="input" id="name" value="zwt" placeholder="您的姓名"/></li>
            <li class="list-group-item edit_controll"><span class="alt">手机号 <span class="required">*</span></span><input type="text" class="input" id="phone" value="13777399387" placeholder="您的手机号"/></li>
        </ul>
    </div>
    <button id="save_btn" class="btn btn-success btn-block">保 存</button>
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

