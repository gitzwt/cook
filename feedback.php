<?php
/**
 * Created by PhpStorm.
 * User: hui
 * Date: 2017/3/11
 * Time: 17:51
 */

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>意见反馈</title>
    <link rel="icon" href="cook.ico" type="image/icon"/>
    <meta name="keywords" content="">
    <meta name="description" content="掌上厨师,国内专业的私厨上门服务平台.北上广深杭八大菜系数千名大厨为你待命,app在线预约,金牌厨师上门做饭.家常用餐,宴请贵宾,掌上厨师为您私人订制上门服务">
    <link href="http://www.idachu.com/icon/production/pc.css" rel="stylesheet" type="text/css"/>
    <script src="http://www.idachu.com/icon/production/pc.js"></script>
    <script>
        var _hmt = _hmt || [];
        (function () {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?d7b6fc2ba576f0661c33f837d1d6a216";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
    <script>
        function base_url(url, param) {
            url = 'http://www.idachu.com/' + url.replace(/^\/|\/$/g, '');
            if (param) {
                url += '?' + $.param(param);
            }
            return url;
        }
        $(function () {
            $('.weixin').bind({
                mouseover: function () {
                    $('.weixin_div').show();
                },
                mouseleave: function () {
                    $('.weixin_div').hide();
                }
            })
        })
    </script>
    <script>
        $(function () {
            $('#submit_lnk').action({
                url: base_url('json.php/join'),
                check: function () {
                    function show_error(msg, obj) {
                        show_msg(2, msg);
                        obj.focus().val(msg).parent('div').css({'border-color': '#ff0000'});
                        setTimeout(function () {
                            obj.val('').parent('div').css({'border-color': '#c8c6c6'});
                        }, 2000);
                        return false;
                    }

                    if (!$('input[name=name]').val()) {
                        return show_error('请输入姓名', $('input[name=name]'));
                    }
                    if (!$('input[name=phone]').val()) {
                        return show_error('请输入手机号码', $('input[name=phone]'));
                    }
                    if (!/^1\d{10}$/.test($('input[name=phone]').val())) {
                        return show_error('请输入正确的手机号码', $('input[name=phone]'));
                    }
                    if (!$('textarea[name=content]').val()) {
                        return show_error('请输入工作经历', $('textarea[name=content]'));
                    }
                },
                success: function () {
                    show_msg(3, '我们已经收到您的意见，我们会尽快处理并答复');
                    setTimeout(function () {
                        window.location.href = base_url('');
                    }, 2500);
                },
                error: function (code, msg) {
                    show_msg(2, msg);
                }
            });
            function show_msg(code, msg) {
                $('#submit_lnk').smallnotify({
                    style: code,	//2:错误 3:成功 4:帮助 5:提示
                    text: msg,
                    stay: 2000,	//停留时间
                    speed: 300
                });
            }
        })
    </script>
</head>
<body>
<div class="head cleahei">
    <div class="logo go_2">
        <a href="/"><img src="/public/pc/img/logo.png" alt=""/></a>
    </div>
    <ul class="menu">
        <li class=""><a href="/kitchener.php">厨师招募</a></li>
        <li class=""><a href="/download.php">手机应用</a></li>
        <li class=""><a href="/member.php">会员中心</a></li>
        <li class=""><a href="/">首页</a></li>
    </ul>
</div>
<div class="clear"></div>
<div class="indheader">
    <div class="index_head" style="height: 400px">
        <div class="spoken_lan">
            <p class="family">足不出户，尊享米其林级大厨</p>
            <span class="plex_lan">掌上厨师，国内专业的私厨上门服务平台</span>
            <p class="clear"></p>
        </div>
    </div>
</div>
<div class="main">
    <p class="clea_hei"></p>
    <p class="clear20"></p>
    <div class="tit_name">
        <h2 class="toph2">意见反馈</h2>
    </div>
    <p class="clear"></p>
    <p class="clear20"></p>
    <form autocomplete="off" id="f1" onsubmit="return false" method="post">
        <div class="bloc_t t_name">
            <div class="meet_na"><span class="name_tit">姓名</span>
                <div class="input_box mar_rig">
                    <input type="text" class="yuinput" name="name" placeholder="姓名"/>
                </div>
                <span class="name_tit">手机号码</span>
                <div class="input_box mar_rig">
                    <input type="text" class="yuinput" name="phone" placeholder="手机号码"/>
                </div>
            </div>
            <p class="clear"></p>
        </div>
        <div class="bloc_t t_name">
            <div class="meet_na"><span class="name_tit">意见</span>
                <textarea class="form-control" name="content" style="width:48.5%; height:96px;"
                          placeholder="您的宝贵意见将使我们的服务更完美？"></textarea>
                <p class="clear"></p>
                <a href="javascript:void(0);" class="btn_ok once" id="submit_lnk">立即提交</a>
            </div>
            <p class="clear"></p>
        </div>
        <p class="clear"></p>
    </form>
</div>
<p class="clear"></p>
<?php include 'footer.php'; ?>
</body>
</html>

