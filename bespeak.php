<?php
/**
 * Created by PhpStorm.
 * User: hui
 * Date: 2017/3/11
 * Time: 18:07
 */

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>立即预订</title>
    <link rel="icon" href="cook.ico" type="image/icon"/>
    <meta name="keywords" content="">
    <meta name="description" content="掌上厨师,国内专业的私厨上门服务平台.北上广深杭八大菜系数千名大厨为你待命,app在线预约,金牌厨师上门做饭.家常用餐,宴请贵宾,掌上厨师为您私人订制上门服务">
    <link href="http://www.idachu.com/icon/production/pc.css" rel="stylesheet" type="text/css"/>
    <script src="http://www.idachu.com/icon/production/pc.js"></script>
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?d7b6fc2ba576f0661c33f837d1d6a216";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
    <script>
        function base_url(url, param){
            url = 'http://www.idachu.com/' + url.replace(/^\/|\/$/g, '');
            if(param){
                url += '?' + $.param(param);
            }
            return url;
        }
        $(function(){
            $('.weixin').bind({
                mouseover : function(){
                    $('.weixin_div').show();
                },
                mouseleave : function(){
                    $('.weixin_div').hide();
                }
            })
        })
    </script><script>
        $(function(){
            $('#pklist li').click(function(){
                $('#pklist li').removeClass('on');
                $(this).addClass('on');
                $('input[name=package_id]').val($(this).val());
            })
            $('#shicai li').click(function(){
                $('#shicai li').removeClass('on');
                $(this).addClass('on');
                $('#shicai input').val($(this).attr('value'));
            })
            $('#dingzhi li').click(function(){
                $('#dingzhi li').removeClass('on');
                $(this).addClass('on');
                $('input[name=package_id]').val($(this).val());
            })
            $('#time_slt').change(function(){
                $('#time_inp').val(this.options[this.selectedIndex].text);
            })
            $('#date_slt').change(function(){
                $('#date_inp').val(this.options[this.selectedIndex].text);
            })
            $('#city_slt').change(function(){
                $('#city_inp').val(this.options[this.selectedIndex].text);
            })

            $('.taocan li').click(function(){
                $('.taocan li').removeClass('on');
                $(this).addClass('on');
                $('.package').hide();
                $(sprintf('.package[value=%d]', $(this).attr('value'))).show();
                $('input[name=package_type]').val($(this).attr('value'));
                if($(this).attr('value') == 3){
                    $('#city_slt').val('1').parent().hide();
                }else{
                    $('#city_slt').val('').parent().show();
                }
            })

            $('#submit_lnk').action({
                url: base_url('json/join'),
                check: function(){
                    function show_error(msg){
                        $('#submit_lnk').smallnotify({
                            style: 2,	//2:错误 3:成功 4:帮助 5:提示
                            text: msg,
                            stay: 2000,	//停留时间
                            speed: 300
                        });
                        return false;
                    }
                    if(!$('select[name=date]').val()){
                        return show_error('请选择就餐日期');
                    }
                    if(!$('select[name=time]').val()){
                        return show_error('请选择用餐时间');
                    }
                    if(!$('select[name=city_id]').val()){
                        return show_error('请选择城市');
                    }
                    if(!$('input[name=community]').val()){
                        return show_error('请输入您的小区');
                    }
                    if(!$('input[name=name]').val()){
                        return show_error('请输入联系人');
                    }
                    if(!$('input[name=phone]').val()){
                        return show_error('请输入联系方式');
                    }
                    if(!/^1\d{10}$/.test($('input[name=phone]').val())){
                        return show_error('请输入正确手机号码');
                    }
                },
                success: function(){
                    location.href = base_url('bespeak/success');
                },
                error: function(code, msg){
                    $('#submit_lnk').smallnotify({
                        style: 2,	//2:错误 3:成功 4:帮助 5:提示
                        text: msg,
                        stay: 2000,	//停留时间
                        speed: 300
                    });
                },
                complete: function(){
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
<div class="main">
    <form method="post" onsubmit="return false" id="f1" autocomplete="off">
        <input type="hidden" name="package_id" value="1"/>
        <input type="hidden" name="package_type" value="1"/>
        <ul  class="taocan">
            <li class="on" value="1"><a >家常用餐</a></li>
            <li value="3" style="float:right;"><a>私人订制</a></li>
            <div class="clear"></div>
        </ul>
        <div class="package" value="1">
            <div class="tit_name on"><h2 class="toph2">做几个菜</h2></div>
            <div class="bloc_t">
                <ul class="meet_na" id="pklist">
                    <li class="taocana on" value="1">
                        <p class="green"></p>
                        <img width="300" src="http://www.idachu.com/icon/pc/images/recipe_4.jpg?ver=7f484403" />
                        <p class="beij"></p>
                        <a class="jia_name">四菜/158元<br/><span>建议两人用餐</span></a>
                    </li>
                    <li class="taocana " value="8">
                        <p class="green"></p>
                        <img width="300" src="http://www.idachu.com/icon/pc/images/recipe_5.jpg?ver=7f484403" />
                        <p class="beij"></p>
                        <a class="jia_name">五菜/158元<br/><span>建议三人用餐</span></a>
                    </li>
                    <li class="taocana " value="2">
                        <p class="green"></p>
                        <img width="300" src="http://www.idachu.com/icon/pc/images/recipe_6.jpg?ver=7f484403" />
                        <p class="beij"></p>
                        <a class="jia_name">六菜/158元<br/><span>建议四人用餐</span></a>
                    </li>
                </ul>
            </div>
            <p class="clea_hei"></p>
            <div class="tit_name on"><h2 class="toph2">食材供应</h2></div>
            <div class="bloc_t">
                <ul class="meet_na" id="shicai">
                    <li class="on" value="0">
                        <img src="http://www.idachu.com/icon/pc/images/img_grey.jpg"/>
                        <p class="bj_jt"></p>
                        <a class="jia_name">自备食材</a>
                    </li>
                    <li value="1">
                        <img src="http://www.idachu.com/icon/pc/images/img_grey.jpg"/>
                        <p class="bj_jt"></p>
                        <a class="jia_name">代买食材</a>
                    </li>
                    <input type="hidden" name="ingredient" value="0"/>
                </ul>
            </div>
            <p class="clea_hei"></p>
        </div>

        <div class="package" value="3" style="display:none;">
            <div class="tit_name"><h2 class="toph2">订制类型</h2></div>
            <div class="bloc_t">
                <ul class="meet_na" id="dingzhi">
                    <li class="taocana" value="10069">
                        <p class="green"></p>
                        <img src="http://img.idachu.com/201509/b7358019c5e7cc3dfeb098027f8a0b0e_300.jpg"/>
                        <p class="beij"></p>
                        <a class="jia_name">春花秋月·宴<br/><span>适用于4-6人/1288元</span></a>
                    </li>
                    <li class="taocana" value="10070">
                        <p class="green"></p>
                        <img src="http://img.idachu.com/201509/b4f38733d316e628b29abbe2cb2fe9a2_300.jpg"/>
                        <p class="beij"></p>
                        <a class="jia_name">稻谷飘香·宴<br/><span>适用于8-10人/1588元</span></a>
                    </li>
                    <li class="taocana" value="10071">
                        <p class="green"></p>
                        <img src="http://img.idachu.com/201509/27ee354650588e30dcc682bdf011b5e4_300.jpg"/>
                        <p class="beij"></p>
                        <a class="jia_name">浮郁金酒·宴<br/><span>适用于8-10人/2888元</span></a>
                    </li>
                    <li class="taocana" value="10074">
                        <p class="green"></p>
                        <img src="http://img.idachu.com/201509/bdb0400cdd6753373bece278fe5cfe02_300.jpg"/>
                        <p class="beij"></p>
                        <a class="jia_name">春诵夏弦·宴<br/><span>适用于8-10人/3588元</span></a>
                    </li>
                    <li class="taocana" value="10073">
                        <p class="green"></p>
                        <img src="http://img.idachu.com/201509/c95f165a3d80d6a15612ed65c2db1f3c_300.jpg"/>
                        <p class="beij"></p>
                        <a class="jia_name">圣郁金澜·宴<br/><span>适用于8-10人/5288元</span></a>
                    </li>
                    <li class="taocana" value="10072">
                        <p class="green"></p>
                        <img src="http://img.idachu.com/201509/2ce93606c6a5fc44e49bd4211b6081fc_300.jpg"/>
                        <p class="beij"></p>
                        <a class="jia_name">琼楼圣宴<br/><span>适用于8-10人/8888元</span></a>
                    </li>
                </ul>
                <script>$('#dingzhi li:eq(0)').addClass('on')</script>
                <span class="clear"></span>
                <p class="explain" style="margin-bottom:10px;">以上费用均含食材及厨师服务费，部分菜单支持菜品调换，并且免费提供专业服务人员一名；私人订制服务的上门主厨均为副厨师长以上级别资深大厨，从业年限超过十年，食材均来自国内知名生鲜食材配送O2O企业，安全、健康，品质保证。</p>
                <p class="explain">本季度十套自选菜单由爱大厨私人订制出品部精心制定，营养搭配合理，兼融多种菜系。官网部分功能暂已关闭，欢迎登录掌上厨师官方app或微信服务号“掌上厨师”，查看菜品详细并下单预约。掌上厨师客服热线：0570-12345678</p>
            </div>
        </div>
        <div class="tit_name on"><h2 class="toph2">用餐时间</h2></div>
        <div class="bloc_t">
            <div class="meet_na">
                <div class="input_box selected">
                    <input type="text" placeholder="日期" id="date_inp"/>
                    <a><img src="http://www.idachu.com/icon/pc/images/rili.jpg"/></a>
                    <select id="date_slt" name="date">
                        <option></option>
                        <option value="<?php echo date('Y-m-d')?>"><?php echo date('Y-m-d')?></option>
                        <option value="<?php echo date('Y-m-d',strtotime("+1 day"))?>"><?php echo date('Y-m-d',strtotime("+1 day"))?></option>
                        <option value="<?php echo date('Y-m-d',strtotime("+2 day"))?>"><?php echo date('Y-m-d',strtotime("+2 day"))?></option>
                        <option value="<?php echo date('Y-m-d',strtotime("+3 day"))?>"><?php echo date('Y-m-d',strtotime("+3 day"))?></option>
                        <option value="<?php echo date('Y-m-d',strtotime("+4 day"))?>"><?php echo date('Y-m-d',strtotime("+4 day"))?></option>
                        <option value="<?php echo date('Y-m-d',strtotime("+5 day"))?>"><?php echo date('Y-m-d',strtotime("+5 day"))?></option>
                        <option value="<?php echo date('Y-m-d',strtotime("+6 day"))?>"><?php echo date('Y-m-d',strtotime("+6 day"))?></option>
                    </select>
                </div>
                <div class="input_box selected">
                    <input type="text" id="time_inp" value="" placeholder="时间"/>
                    <a style=" margin:10px 0 0 0;  display:block;"><img src="http://www.idachu.com/icon/pc/images/xiangxia.jpg"/></a>
                    <select id="time_slt" name="time">
                        <option></option>
                        <option value="10:00">10:00</option>
                        <option value="10:30">10:30</option>
                        <option value="11:00">11:00</option>
                        <option value="11:30">11:30</option>
                        <option value="12:00">12:00</option>
                        <option value="12:30">12:30</option>
                        <option value="13:00">13:00</option>
                        <option value="13:30">13:30</option>
                        <option value="14:00">14:00</option>
                        <option value="14:30">14:30</option>
                        <option value="15:00">15:00</option>
                        <option value="15:30">15:30</option>
                        <option value="16:00">16:00</option>
                        <option value="16:30">16:30</option>
                        <option value="17:00">17:00</option>
                        <option value="17:30">17:30</option>
                        <option value="18:00">18:00</option>
                        <option value="18:30">18:30</option>
                        <option value="19:00">19:00</option>
                        <option value="19:30">19:30</option>
                        <option value="20:00">20:00</option>
                        <option value="20:30">20:30</option>
                    </select>
                </div>
            </div>
            <p class="clear"></p>
        </div>
        <div class="tit_name on"><h2 class="toph2">服务地址</h2></div>
        <div class="bloc_t">
            <div class="meet_na">
                <div class="input_box selected">
                    <input type="text" id="city_inp" value="" placeholder="城市"/>
                    <a style=" margin:10px 0 0 0;  display:block;"><img src="http://www.idachu.com/icon/pc/images/xiangxia.jpg"/></a>
                    <select id="city_slt" name="city_id">
                        <option></option>
                        <option value="1">北京</option>
                        <option value="2">深圳</option>
                        <option value="3">上海</option>
                        <option value="4">广州</option>
                        <option value="5">杭州</option>
                        <option value="6">开化</option>
                    </select>
                </div>
                <div class="input_box" style="width:25%;">
                    <input type="text" class="yuinput" name="community" value="" placeholder="小区地址"/>
                </div>
            </div>
            <p class="clear"></p>
        </div>
        <div class="tit_name on"><h2 class="toph2">联系方式</h2></div>
        <div class="bloc_t">
            <div class="meet_na">
                <div class="input_box">
                    <input type="text" name="name" value="" class="yuinput" placeholder="姓名"/>
                </div>
                <div class="input_box">
                    <input type="text" name="phone" class="yuinput" value="" placeholder="手机号"/>
                </div>
            </div>
            <p class="clear"></p>
        </div>
        <div class="tit_name on"><h2 class="toph2">其他备注</h2></div>
        <div class="bloc_t">
            <div class="meet_na">
                <textarea class="form-control" name="memo" style="width:33.5%; height:96px;" placeholder="还有什么要嘱咐大厨的吗？"></textarea>
                <p class="clear"></p>
                <p class="tijiao_sm">提交订单后，客服稍后会与您联系。</p>
                <a href="javascript:void(0)" id="submit_lnk" class="btn_ok">立即提交</a>
            </div>
        </div>
    </form>
</div>
<p class="clear"></p>
<?php include 'footer.php'; ?>
</body>
</html>

