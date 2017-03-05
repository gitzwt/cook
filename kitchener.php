<?php
/**
 * Created by PhpStorm.
 * User: hui
 * Date: 2017/3/5
 * Time: 17:50
 */

?>


<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>厨师招募</title>
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
<p class="clear"></p>
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
    <ul class="company_list">
        <li>
            <h2>关于掌上厨师</h2>
            <div class="abou_pl">
                <p>
                    掌上厨师，国内专业厨师上门服务平台，私厨上门O2O模式奋斗者，目前拥有超过1000名专业厨师，注册用户10余万，月订单量超过1万单，上门服务覆盖北京、上海、广州、深圳、杭州、开化。掌上厨师正在努力搭建与维护的是一个良性互助平台，连接厨师与用户，连接家庭与服务，通过上门服务这一全新工作方式，为广大厨师朋友们增加收入，合理利用时间实现自身价值的最大化。未来一到两年内，我们将继续深耕北上广深杭等一二线城市并走进国内更多城市提供专业厨师上门服务。为使更多用户享受到我们的厨师上门服务，也让更多的厨师朋友们通过我们的平台受益，掌上厨师正在扩大队伍，招募厨师。无论您是酒店会所主厨，还是连锁餐饮、社会餐饮大厨，只要还对这个职业心生敬畏、对移动互联网O2O模式充满向往，欢迎加入我们！</p>
            </div>
        </li>
        <li>
            <h2>传统厨师：</h2>
            <div class="abou_pl">
                <p>①重复工作量下的单一收入；</p>
                <p>②餐厅客户量直接影响厨师收益；</p>
                <p>③长期后厨工作，缺少与食客直面交流；</p>
                <p>④工作时间分散，无法合理利用空暇时间获得收益。</p>
            </div>
        </li>
        <li>
            <h2>加入掌上厨师平台的厨师：</h2>
            <div class="abou_pl">
                <p>①兼职厨师月入3000元；</p>
                <p>②全职厨师月入6000~8000元，高于行业平均收入水平；</p>
                <p>③上门服务，直面客户，工作环境开放也更为舒心；</p>
                <p>④合理利用业余时间实现价值最大化，随时接单随时收益。</p>
            </div>
        </li>
        <li>
            <h2>厨师上门服务模式：</h2>
            <div class="abou_pl">
                <p>家常用餐：上门为用户做四至六菜收取158元服务费，每增加一道菜，多收15元服务费。食材自备，可交由厨师免费代买。<br/>
                    私人订制：家庭聚餐、公司聚餐、生日宴会、年夜饭等，提供高端宴请上门服务。</p>
            </div>
        </li>
        <li>
            <h2>厨师上门服务收益：</h2>
            <div class="abou_pl">
                <p>依不同服务模式而定，详询客服。服务费采用月结制。</p>
            </div>
        </li>
        <li>
            <h2>入职要求：</h2>
            <div class="abou_pl">
                <p>①五年以上厨师工作经验</p>
                <p>②拥有酒店服务工作经历</p>
                <p>③熟练掌握至少一系菜肴</p>
                <p>④三证（身份证、健康证、厨师证）齐全</p>
            </div>
        </li>
        <li>
            <h2>欢迎联系我们：</h2>
            <div class="abou_pl">
                <p>邮箱：zwt0706@126.com</p>
                <p></p>
                <p>电话：0570-12345678 </p>
            </div>
        </li>
    </ul>
    <div class="center_city">
        <span>更多城市敬请期待...</span>
    </div>
    <p class="clear20"></p>
    <p class="clear20"></p>

    <div class="tit_name">
        <h2 class="toph2 px20">在线申请</h2>
    </div>
    <p class="clear"></p>
    <form id="join" method="post">
        <div class="bloc_t t_name">
            <div class="meet_na"><span class="name_tit">姓名</span>
                <div class="input_box mar_rig">
                    <input type="text" class="yuinput" name="name" placeholder="姓名"/>
                </div>
                <span class="name_tit">手机号码</span>
                <div class="input_box mar_rig">
                    <input type="tel" maxlength="11" class="yuinput" name="phone" placeholder="手机号码"/>
                </div>
            </div>
            <p class="clear"></p>
        </div>
        <div class="bloc_t t_name">
            <div class="meet_na"><span class="name_tit">经历</span>
                <textarea class="form-control" name="experience" style="width:48.5%; height:96px;"
                          placeholder="在哪里工作过"></textarea>
                <p class="clear"></p>
                <p class="tijiao_sm pas">提交申请后，稍后会有专员与您联系。</p>
                <a href="javascript:void(0)" id="submit" class="btn_ok once">立即提交</a>
            </div>
        </div>
    </form>
</div>
<p class="clear"></p>
<?php include 'footer.php'; ?>
<script type="text/javascript" src="public/pc/js/jquery.min.js"></script>
<script type="text/javascript" src="public/pc/js/layer.js"></script>
<script type="text/javascript">
    //判定手机号有效性
    $('input[name="phone"]').blur(function () {
        var myreg = /^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1})|(17[0-9]{1}))+\d{8})$/;
        if ($('input[name="phone"]').val() != '') {
            if (!myreg.test($('input[name="phone"]').val())) {
                layer.tips('请输入有效的手机号码！', 'input[name="phone"]', {
                    tips: [1, '#3595CC'],
                    time: 4000
                });
                return false;
            }
        }
    });

    $('#submit').click(function () {
        if ($('input[name="name"]').val() == '') {
            layer.msg('姓名不能为空！');
            return false;
        }

        if ($('input[name="phone"]').val() == '') {
            layer.msg('手机号码不能为空！');
            return false;
        }

        if ($('textarea[name="experience"]').val() == '') {
            layer.msg('工作经历不能为空！');
            return false;
        }

        layer.confirm('确定信息属实并提交吗？', {
            btn: ['确定', '取消']
        }, function () {
            var index = layer.load(1, {
                shade: [0.1, '#fff'] //0.1透明度的白色背景
            });
            var uri = "json.php/cooker_join";
            $.post(uri, $('#join').serialize(), function (data) {
                var d = data;
                console.log(uri);
                if (d.flag == 200) {
                    layer.msg(d.msg);
                    location.href = './kitchener.php';
                } else {
                    layer.msg(d.msg);
                }
            }, 'json');
        }, function () {
            layer.msg('取消了哦', {
                time: 5000,
                btn: ['明白了', '知道了']
            });
        });

    });
</script>
</body>
</html>
