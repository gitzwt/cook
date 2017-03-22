<?php
/**
 * Created by PhpStorm.
 * User: hui
 * Date: 2017/3/11
 * Time: 20:17
 */

?>


<!DOCTYPE html>
<html>
<head>
    <title>预约大厨</title>
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
                data: {auth: str, forward: 'http://www.idachu.cn/bespeak'},
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
        var package_info = {"2017-03-11":[{"id":"1","name":"\u56db\u83dc","price":158,"recipe_num":4},{"id":"8","name":"\u4e94\u83dc","price":158,"recipe_num":5},{"id":"2","name":"\u516d\u83dc","price":158,"recipe_num":6}],"2017-03-12":[{"id":"1","name":"\u56db\u83dc","price":158,"recipe_num":4},{"id":"8","name":"\u4e94\u83dc","price":158,"recipe_num":5},{"id":"2","name":"\u516d\u83dc","price":158,"recipe_num":6}],"2017-03-13":[{"id":"1","name":"\u56db\u83dc","price":158,"recipe_num":4},{"id":"8","name":"\u4e94\u83dc","price":158,"recipe_num":5},{"id":"2","name":"\u516d\u83dc","price":158,"recipe_num":6}],"2017-03-14":[{"id":"1","name":"\u56db\u83dc","price":158,"recipe_num":4},{"id":"8","name":"\u4e94\u83dc","price":158,"recipe_num":5},{"id":"2","name":"\u516d\u83dc","price":158,"recipe_num":6}],"2017-03-15":[{"id":"1","name":"\u56db\u83dc","price":158,"recipe_num":4},{"id":"8","name":"\u4e94\u83dc","price":158,"recipe_num":5},{"id":"2","name":"\u516d\u83dc","price":158,"recipe_num":6}]};
        $(function(){
            $('#datelist').mobiscroll().treelist({
                mode: 'scroller',       // Specify scroller mode like: mode: 'mixed' or omit setting to use default
                label: '就餐时间',
                minWidth: [140, 30, 30],
                display: 'bottom', // Specify display mode like: display: 'bottom' or omit setting to use default
                lang: 'zh',       // Specify language like: lang: 'pl' or omit setting to use default
                showInput: false,
                showLabel: true,
                labels: ['日期','小时','分'],
                onSelect: function(v, e){
                    var date = e._wheelArray[0];
                    $('#date').val(sprintf('%s %s:%s', e._wheelArray[0],e._wheelArray[1],e._wheelArray[2]))
                    $('#package').empty();
                    $.each(package_info[date], function(i, e){
                        $(sprintf('<option text="%s" value="%d">%s %d元</option>', e.name, e.id, e.name, e.price)).appendTo($('#package'));
                    })

                    $('#package').mobiscroll().select({
                        display: 'bottom',
                        mode: 'scroller',
                        label: '套餐',
                        minWidth: 150,
                        showInput: false,
                        showLabel: true,
                        labels: ['套餐'],
                        lang: 'zh',
                        onSelect: function(){
                            $('#package_holder').val($('#package option:selected').attr('text'));
                        }
                    })
                }
            });

            $('#package_holder').click(function () {
                if($('#package option').length == 0){
                    alert('请先选择就餐时间');
                }
                $('#package').mobiscroll('show');
                return false;
            })


            $('#date').click(function () {
                $('#datelist').mobiscroll('show');
                return false;
            });

            $('#save_btn').click(function(){
                $('.container').removeClass('hidden');
                $('#check_container').addClass('hidden');

                var date = $('#date').val();
                if(!date){
                    wap.alert('请填写就餐时间');
                    return;
                }

                var package = $('#package').val();
                if(!$('#package_holder').val()){
                    wap.alert('请选择合适您的套餐');
                    return;
                }

                var community = $('#community').val();
                if(community.length < 2){
                    wap.alert('请填写正确的小区名');
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

                var memo = $('#memo').val();

                $(this).do_action({
                    url: 'http://melike.imwork.net/cook/bespeak/do_save',
                    data: {
                        date: date,
                        package: package,
                        package_type: $('input[name=package_type]').val(),
                        community: community,
                        door_number: door_number,
                        name: name,
                        kitchener_id: $('#kitchener_id').val(),
                        phone: phone,
                        code: code,
                        memo: memo
                    },
                    success: function(data){
                        if(data.status == 5){
                            location.href = base_url("/bespeak/pay/" + data.id, {showwxpaytitle:1});
                        }else{
                            location.href = base_url("bespeak/lastest");
                        }
                    },
                    error: function(code, error){
                        if(code == 401){//发送验证码
                            verify_phone(phone, '#save_btn');
                        }
                        wap.alert(error);
                    },
                    complete: function(){
                        $('#check_btn').attr('disabled', false);
                    }
                })
            })
        });
    </script>
    <style>
        #ok_alert{
            display:none;
            margin-top:10px;
        }
        textarea{width:100%;height:100%;border:0;}
        select{display:none;}
        #baseinfo h2{
            font-size:16px;
            margin-top:5px;
            margin-bottom:5px;
        }
        #baseinfo img{
            padding:2px;
            border:1px solid #ccc;
            border-radius: 4px;
            margin-right:10px;
        }
        #baseinfo .media-body{
            line-height:1.5em;
            color:gray;
        }
        body.folder{padding-bottom:45px;}
        .buy_btn{position:fixed;bottom:0;left:0;width:100%;background:#fff;border-top:1px solid #dfdfdf;padding:5px 10px;}
    </style>
</head>
<body class="folder folder-upper">
<div class="container" style="margin-top:10px;">
    <input type="hidden" id="code" value=""/>
    <input type="hidden" name="package_type" value="1"/>

    <div class="panel panel-default">
        <div class="panel-heading">
            就餐信息
        </div>
        <ul class="list-group">
            <li class="list-group-item edit_controll"><span class="alt">就餐时间 <span class="required">*</span></span><input readonly="readonly" type="text" value="" id="date" placeholder="什么时候吃"/></li>
            <li class="list-group-item edit_controll"><span class="alt">套餐选择 <span class="required">*</span></span><input readonly="readonly" class="input" id="package_holder" readonly="readonly" value="" placeholder="选择适合您的套餐" autocomplete="off"/></li>
        </ul>
    </div>
    <ul id="datelist" style="display:none">
        <li data-val="2017-03-12">3月24日(五)				<ul>
                <li data-val="10">10点
                    <ul>
                        <li data-val="00">00分</li>
                        <li data-val="30">30分</li>
                    </ul>
                </li>
                <li data-val="11">11点
                    <ul>
                        <li data-val="00">00分</li>
                        <li data-val="30">30分</li>
                    </ul>
                </li>
                <li data-val="12">12点
                    <ul>
                        <li data-val="00">00分</li>
                        <li data-val="30">30分</li>
                    </ul>
                </li>
                <li data-val="13">13点
                    <ul>
                        <li data-val="00">00分</li>
                        <li data-val="30">30分</li>
                    </ul>
                </li>
                <li data-val="14">14点
                    <ul>
                        <li data-val="00">00分</li>
                        <li data-val="30">30分</li>
                    </ul>
                </li>
                <li data-val="15">15点
                    <ul>
                        <li data-val="00">00分</li>
                        <li data-val="30">30分</li>
                    </ul>
                </li>
                <li data-val="16">16点
                    <ul>
                        <li data-val="00">00分</li>
                        <li data-val="30">30分</li>
                    </ul>
                </li>
                <li data-val="17">17点
                    <ul>
                        <li data-val="00">00分</li>
                        <li data-val="30">30分</li>
                    </ul>
                </li>
                <li data-val="18">18点
                    <ul>
                        <li data-val="00">00分</li>
                        <li data-val="30">30分</li>
                    </ul>
                </li>
                <li data-val="19">19点
                    <ul>
                        <li data-val="00">00分</li>
                        <li data-val="30">30分</li>
                    </ul>
                </li>
                <li data-val="20">20点
                    <ul>
                        <li data-val="00">00分</li>
                        <li data-val="30">30分</li>
                    </ul>
                </li>
            </ul>
        </li>
        <li data-val="2017-03-13">3月25日(六)				<ul>
                <li data-val="10">10点
                    <ul>
                        <li data-val="00">00分</li>
                        <li data-val="30">30分</li>
                    </ul>
                </li>
                <li data-val="11">11点
                    <ul>
                        <li data-val="00">00分</li>
                        <li data-val="30">30分</li>
                    </ul>
                </li>
                <li data-val="12">12点
                    <ul>
                        <li data-val="00">00分</li>
                        <li data-val="30">30分</li>
                    </ul>
                </li>
                <li data-val="13">13点
                    <ul>
                        <li data-val="00">00分</li>
                        <li data-val="30">30分</li>
                    </ul>
                </li>
                <li data-val="14">14点
                    <ul>
                        <li data-val="00">00分</li>
                        <li data-val="30">30分</li>
                    </ul>
                </li>
                <li data-val="15">15点
                    <ul>
                        <li data-val="00">00分</li>
                        <li data-val="30">30分</li>
                    </ul>
                </li>
                <li data-val="16">16点
                    <ul>
                        <li data-val="00">00分</li>
                        <li data-val="30">30分</li>
                    </ul>
                </li>
                <li data-val="17">17点
                    <ul>
                        <li data-val="00">00分</li>
                        <li data-val="30">30分</li>
                    </ul>
                </li>
                <li data-val="18">18点
                    <ul>
                        <li data-val="00">00分</li>
                        <li data-val="30">30分</li>
                    </ul>
                </li>
                <li data-val="19">19点
                    <ul>
                        <li data-val="00">00分</li>
                        <li data-val="30">30分</li>
                    </ul>
                </li>
                <li data-val="20">20点
                    <ul>
                        <li data-val="00">00分</li>
                        <li data-val="30">30分</li>
                    </ul>
                </li>
            </ul>
        </li>
        <li data-val="2017-03-14">3月26日(日)				<ul>
                <li data-val="10">10点
                    <ul>
                        <li data-val="00">00分</li>
                        <li data-val="30">30分</li>
                    </ul>
                </li>
                <li data-val="11">11点
                    <ul>
                        <li data-val="00">00分</li>
                        <li data-val="30">30分</li>
                    </ul>
                </li>
                <li data-val="12">12点
                    <ul>
                        <li data-val="00">00分</li>
                        <li data-val="30">30分</li>
                    </ul>
                </li>
                <li data-val="13">13点
                    <ul>
                        <li data-val="00">00分</li>
                        <li data-val="30">30分</li>
                    </ul>
                </li>
                <li data-val="14">14点
                    <ul>
                        <li data-val="00">00分</li>
                        <li data-val="30">30分</li>
                    </ul>
                </li>
                <li data-val="15">15点
                    <ul>
                        <li data-val="00">00分</li>
                        <li data-val="30">30分</li>
                    </ul>
                </li>
                <li data-val="16">16点
                    <ul>
                        <li data-val="00">00分</li>
                        <li data-val="30">30分</li>
                    </ul>
                </li>
                <li data-val="17">17点
                    <ul>
                        <li data-val="00">00分</li>
                        <li data-val="30">30分</li>
                    </ul>
                </li>
                <li data-val="18">18点
                    <ul>
                        <li data-val="00">00分</li>
                        <li data-val="30">30分</li>
                    </ul>
                </li>
                <li data-val="19">19点
                    <ul>
                        <li data-val="00">00分</li>
                        <li data-val="30">30分</li>
                    </ul>
                </li>
                <li data-val="20">20点
                    <ul>
                        <li data-val="00">00分</li>
                        <li data-val="30">30分</li>
                    </ul>
                </li>
            </ul>
        </li>
        <li data-val="2017-03-15">3月27日(一)				<ul>
                <li data-val="10">10点
                    <ul>
                        <li data-val="00">00分</li>
                        <li data-val="30">30分</li>
                    </ul>
                </li>
                <li data-val="11">11点
                    <ul>
                        <li data-val="00">00分</li>
                        <li data-val="30">30分</li>
                    </ul>
                </li>
                <li data-val="12">12点
                    <ul>
                        <li data-val="00">00分</li>
                        <li data-val="30">30分</li>
                    </ul>
                </li>
                <li data-val="13">13点
                    <ul>
                        <li data-val="00">00分</li>
                        <li data-val="30">30分</li>
                    </ul>
                </li>
                <li data-val="14">14点
                    <ul>
                        <li data-val="00">00分</li>
                        <li data-val="30">30分</li>
                    </ul>
                </li>
                <li data-val="15">15点
                    <ul>
                        <li data-val="00">00分</li>
                        <li data-val="30">30分</li>
                    </ul>
                </li>
                <li data-val="16">16点
                    <ul>
                        <li data-val="00">00分</li>
                        <li data-val="30">30分</li>
                    </ul>
                </li>
                <li data-val="17">17点
                    <ul>
                        <li data-val="00">00分</li>
                        <li data-val="30">30分</li>
                    </ul>
                </li>
                <li data-val="18">18点
                    <ul>
                        <li data-val="00">00分</li>
                        <li data-val="30">30分</li>
                    </ul>
                </li>
                <li data-val="19">19点
                    <ul>
                        <li data-val="00">00分</li>
                        <li data-val="30">30分</li>
                    </ul>
                </li>
                <li data-val="20">20点
                    <ul>
                        <li data-val="00">00分</li>
                        <li data-val="30">30分</li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
    <select id="package">

    </select>
    <div class="panel panel-default">
        <div class="panel-heading">
            就餐地址
        </div>
        <ul class="list-group">
            <li class="list-group-item edit_controll"><span class="alt">小区名 <span class="required">*</span></span><input type="text" class="input" id="community" value="" placeholder="例如开化职教中心"/></li>
            <li class="list-group-item edit_controll"><span class="alt">门牌号 <span class="required">*</span></span><input type="text" class="input" id="door_number" value="" placeholder="例如798文化创意苑"/></li>
        </ul>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            联系方式
        </div>
        <ul class="list-group">
            <li class="list-group-item edit_controll"><span class="alt">姓名 <span class="required">*</span></span><input type="text" class="input" id="name" value="" placeholder="您的姓名"/></li>
            <li class="list-group-item edit_controll"><span class="alt">手机号 <span class="required">*</span></span><input type="text" class="input" id="phone" value="" placeholder="您的手机号"/></li>
        </ul>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">订单备注</div>
        <div class="panel-body">
            <textarea id="memo" placeholder="川湘鲁粤苏闽浙徽吃哪个?酸甜苦辣冷热咸香好哪口?"></textarea>
        </div>
    </div>
    <div class="buy_btn">
        <button id="save_btn" class="btn btn-success btn-block">提 交</button>
    </div>

</div>

<div class="container hidden" id="check_container" style="margin-top:10px;">
    <div class="alert alert-warning" style="text-align: center;display:none;">
        验证码已经发送到您的手机
    </div>
    <div id="phone_cont">
        <input type="tel" class="form-control" id="check_phone" placeholder="手机号" />
    </div>
    <div id="code_cont">
        <input type="number" class="form-control" id="check_code" placeholder="短信验证码" />
        <button type="button" id="resent_btn" class="btn btn-success">发送验证码</button>
    </div>
    <button type="button" id="check_btn" class="btn btn-success btn-block">提交</button>
</div>
<div class="modal fade" id="captcha-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">请输入图形验证码</h4>
            </div>
            <div class="modal-body">
                <div style="line-height:42px;margin-bottom:10px;">
                    <img id="captcha-img" src="http://www.idachu.cn/user/captcha"/>
                    <a href="javascript:void(0)" onclick="randimg()" style="display:inline-block;height:42px;margin-left:10px;">换一张   </a>
                </div>
                <input type="number" id="captcha" class="form-control" placeholder="请输入图形验证码" style="margin-bottom:10px;"/>
                <button type="button" id="captcha-btn" class="btn btn-success btn-block">提交</button>
            </div>
        </div>
    </div>
</div>
<style>
    .modal-content{margin-top:50px;}
</style>
<script>
    var downtime;

    function randimg(){
        $('#captcha-img').attr('src', base_url('user/captcha', {rnd:Math.random()}))
    }
    $('#captcha-btn').click(function(){
        $('#captcha-modal').modal('hide');
        $('.modal-backdrop').remove();
        $('#resent_btn').trigger('click');
        $('#captcha').val('');
    })

    function verify_phone(phone, btn){
        if(phone && !/^1\d{10}$/.test(phone)){
            wap.alert('手机号码不正确！');
            return false;
        }
        $('.container').addClass('hidden');
        $('#check_container').removeClass('hidden');
        $('#check_phone').val(phone);
        $('#check_btn').on('click.check', function(){
            var phone = $('#check_phone').val();
            if(!/^1\d{10}$/.test(phone)){
                wap.alert('手机号码不正确。');
                return;
            }
            $('#phone').val(phone);
            var code = $('#check_code').val();
            if(!/^\d{6}$/.test(code)){
                wap.alert('验证码不正确。');
                return;
            }
            $('#code').val(code);
            $(btn).trigger('click');
        });
    }

    (function(){
        var t = 60;
        var h = null;
        downtime = function (){
            t--;
            if(t <= 0){
                t = 60;
                $('#resent_btn').text('重新发送');
                $('#resent_btn').attr('disabled', false);
                return;
            }else{
                $('#resent_btn').attr('disabled', true).text('重新发送 ('+t+')');
                h = setTimeout(downtime, 1000);
            }
        }

        $('#resent_btn').click(function(){
            var phone = $('#check_phone').val();
            if(!/^1\d{10}$/.test(phone)){
                wap.alert('手机号码不正确。');
                return;
            }
            $(this).do_action({
                url: base_url('api/user/send_code'),
                data: {phone: phone, captcha: $('#captcha').val()},
                success: function(){
                    t = 60;
                    downtime();
                    $('.alert').slideDown();
                    wap.alert('发送验证码成功。');
                },
                error: function(code, error){
                    if(code == 403){//验证码
                        randimg()
                        $('#captcha-modal').modal('show');
                    }else{
                        alert(error);
                    }
                }
            })
        });
    })()
</script>
<?php include 'footer.php'; ?>
</body>
</html>
