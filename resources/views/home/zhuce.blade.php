<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> 黑米</title>
    <meta name="keywords" content="黑米">
    <meta name="content" content="黑米">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <link type="text/css" rel="stylesheet" href="/qiantaizhuce/css/login.css">
    <script type="text/javascript" src="/qiantaizhuce/js/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/jquery-validate/1.17.0/jquery.validate.min.js"></script>
    <script src="https://cdn.bootcss.com/jquery-validate/1.9.0/localization/messages_cn.min.js"></script>
</head>

<body class="login_bj">
    <div class="zhuce_body">
        <div class="logo"><a href="#"></a></div>
        <div class="zhuce_kong">
            <div class="zc">
                <div class="bj_bai" style="height:650px;">
                    <h3>欢迎注册</h3>
                    <form action="/home/zhuce" method="post" enctype="multipart/form-data">
                        <input name="username" type="text" class="kuang_txt phone" placeholder="用户名" style="width:270px;"><span class="remind"></span>
                        <input name="password" type="password" class="kuang_txt email" placeholder="密码" style="width:270px;"><span class="remind"></span>
                        <input name="repassword" type="password" class="kuang_txt email" placeholder="确认密码" style="width:270px;"><span class="remind"></span>
                        <input name="phone" type="text" class="kuang_txt possword" placeholder="手机号" style="width:270px;"><span class="remind"></span>
                         <div class="am-form-group">
                                <label for="user-weibo" class="am-u-sm-3 am-form-label">主图 </label>
                                <div class="am-u-sm-9">
                                    <div class="am-form-group am-form-file">
                                        <div class="tpl-form-file-img">
                                        </div>
                                       
                                        <input id="doc-form-file" type="file" name="pic">
                                    </div>
                                </div>
                            </div>

                         <div class="am-form-group">
                                <label for="user-name" class="am-u-sm-3 am-form-label">商家地址 <span class="tpl-form-line-small-title"></span></label>
                                <div class="am-u-sm-9">
                                    <div class="info">
                                        <div>
                                            <div style="width: 150px;">
                                                <select id="s_province" name="s_province"></select>
                                                <select id="s_city" name="s_city"></select>
                                                <select id="s_county" name="s_county"></select>
                                                <textarea cols="5" rows="1" name="address"></textarea>
                                            </div>
                                            <script class="resources library" src="http://sandbox.runjs.cn/uploads/rs/267/g3ugugjp/area.js" type="text/javascript"></script>
                                            <script type="text/javascript">
                                            _init_area();
                                            </script>
                                        </div>
                                        <div id="show"></div>
                                    </div>
                                </div>
                            </div>
                        <br><br>
                                    
                         {{csrf_field()}}
                        <input type="submit" class="btn_zhuce" value="注册">
                        <!-- <button class="btn_zhuce" value="注册">注册</button> -->
                    </form>

                     </div>
                    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
                    <script>
                    /**
                                1. 布局
                                2. 绑定事件
                                    获得焦点
                                    丧失焦点事件
                                    表单提交事件
                            */
                    var CUSER = false;
                    var CPHONE = false;
                    var CPASS = false;
                    var CREPASS = false;


                    //用户名
                    $('input[name=username]').focus(function() {
                        //边框颜色
                        $(this).addClass('active');
                        //提示语显示
                        $(this).next().show().html('6~20位字母数字下划线');
                    }).blur(function() {
                        //移出激活状态的class active
                        $(this).removeClass('active');
                        //正则判断
                        var v = $(this).val();
                        //声明正则
                        var reg = /^\w{6,20}$/;
                        //判断
                        if (!reg.test(v)) {
                            //边框
                            $(this).addClass('error');
                            //文字提醒
                            $(this).next().html('<span style="color:red">格式不正确</span>').show();
                            CUSER = false;
                        } else {
                            var input = $(this);
                            //发送 AJAX 请求检测用户名是否已经存在
                            // $.post('./check-user-exists.php', {username: v}, function(data){
                            // })

                            $.ajax({
                                url: '/check-user-exists.php',
                                type: 'post',
                                data: { username: v },
                                success: function(data) {
                                    if (data != '1') {
                                        //边框
                                        input.addClass('error');
                                        //文字提醒
                                        input.next().html('<span style="color:red">该用户名太受欢迎, 请换一个!!</span>').show();
                                        CUSER = false;
                                    } else {
                                        input.removeClass('error');
                                        input.next().html('<span style="color:green;font-size:16px;font-weight:bold">&nbsp;&nbsp;√</span>').show();
                                        CUSER = true;
                                    }
                                },
                                async: false
                            })



                        }
                    })

                   

                    //密码
                    $('input[name=password]').focus(function() {
                        //边框颜色
                        $(this).addClass('active');
                        //提示语显示
                        $(this).next().show().html('6~20非空白字符');
                    }).blur(function() {
                        $(this).removeClass('active');
                        //获取用户的输入值
                        var v = $(this).val();
                        //正则
                        var reg = /^\S{6,20}$/;

                        if (!reg.test(v)) {
                            //边框
                            $(this).addClass('error');
                            //文字提醒
                            $(this).next().html('<span style="color:red">格式不正确</span>').show();
                            CPASS = false;
                        } else {
                            //边框
                            $(this).removeClass('error');
                            //文字提醒
                            $(this).next().html('<span style="color:green;font-size:16px;font-weight:bold">&nbsp;&nbsp;√</span>').show();
                            CPASS = true;

                        }
                    })

                    //确认密码
                    $('input[name=repassword]').focus(function() {
                        //边框颜色
                        $(this).addClass('active');
                        //提示语显示
                        $(this).next().show().html('再次输入密码');
                    }).blur(function() {
                        $(this).removeClass('active');
                        //获取用户的输入值
                        var v = $(this).val();

                        if (v != $('input[name=password]').val()) {
                            //边框
                            $(this).addClass('error');
                            //文字提醒
                            $(this).next().html('<span style="color:red">两次密码不一致</span>').show();
                            CREPASS = false;
                        } else {
                            //边框
                            $(this).removeClass('error');
                            //文字提醒
                            $(this).next().html('<span style="color:green;font-size:16px;font-weight:bold">&nbsp;&nbsp;√</span>').show();
                            CREPASS = true;

                        }
                    })
                    //手机号
                    $('input[name=phone]').focus(function() {
                        //边框颜色
                        $(this).addClass('active');
                        //提示语显示
                        $(this).next().show().html('输入您的手机号');
                    }).blur(function() {
                        $(this).removeClass('active');
                        //获取用户的输入值
                        var v = $('input[name=phone]').val();
                        //正则
                        var reg = /^1\d{10}$/;
                        if (!reg.test(v)) {
                            //边框
                            $(this).addClass('error');
                            //文字提醒
                            $(this).next().html('<span style="color:red">格式不正确</span>').show();
                            CPHONE = false;
                        } else {
                            //边框
                            $(this).removeClass('error');
                            //文字提醒
                            $(this).next().html('<span style="color:green;font-size:16px;font-weight:bold">&nbsp;&nbsp;√</span>').show();
                            CPHONE = true;

                        }
                    })
                    //表单的提交事件
                    $('form').submit(function() {
                        
                        //触发错误提醒
                        $('input').trigger('blur');
                        //console.log(CUSER);
                        //判断输入值是否都正确
                        if (CUSER && CPASS && CPHONE && CREPASS) {
                            return true;
                        } else {
                            return false;
                        }
                    });
                    </script>
               
                <div class="bj_right" style="height:650px;">
                    <p>使用以下账号直接登录</p>
                    <a href="/home/zhuce" class="zhuce_qq">QQ注册</a>
                    <a href="/home/zhuce" class="zhuce_wb">微博注册</a>
                    <a href="/home/zhuce" class="zhuce_wx">微信注册</a>
                    <p>已有账号？<a href="/login">立即登录</a></p>
                </div>
            </div>

            <input type="hidden" value="nuomi" id="jsProduct" />
            <input type="hidden" value="" id="jsU" />
            <input type="hidden" value="pink" id="jsColor" />
            <input type="hidden" value="" id="jsSubpro" />
            <input type="hidden" value="" id="jsNorealU" />
            <input type="hidden" value="" id="jsRetu" />
            <input type="hidden" value="1" id="jsnoUsername" />
            <input type="hidden" value="" id="jsdefaultAccount" />
            <input type="hidden" value="" id="isSchoolReg" />
            <input type="hidden" value="" id="hasAuthsite" />
        </div>
       
    </div>
    <script type="text/javascript" src="/qiantaizhuce/static/js/uni_wrapper.js"></script>
    <script type="text/javascript" src="/qiantaizhuce/static/js/core.js"></script>
    <script type="text/javascript" src="/qiantaizhuce/static/js/ui.js"></script>
    <script type="text/javascript" src="/qiantaizhuce/static/js/wrapper.js"></script>
    <script type="text/javascript">
    var sms = !1;
    </script>
    <script type="text/javascript">
    var overseas = 0;
    </script>
    <script type="text/javascript">
    ! function(e, t) { var o = document.getElementById("jsProduct").value,
            s = document.getElementById("jsU").value,
            u = document.getElementById("jsColor").value,
            n = document.getElementById("jsSubpro").value,
            a = document.getElementById("jsNorealU").value,
            l = document.getElementById("jsRetu").value,
            c = document.getElementById("jsnoUsername").value,
            d = "/v2/?reg&u=" + l + "&tpl=" + o;
        t.options = { product: o, u: s, userName: !0, isPhone: !0, color: u, subpro: n, noreal_u: a, retu: l, /zhuce/staticPage: document.location.protocol + "//" + document.location.host + "//zhuce/static/passpc-account/html/v3Jump.html", noUsername: c, registerLink: d, qrcode: 2, sms: sms, regMerge: !1, regMergeUserName: !1, hasPlaceholder: !0, hasPasswordcheck: !0, isexchangeable: 1, overseas: overseas }, t.defaultAccount = document.getElementById("jsdefaultAccount").value, t.isSchoolReg = document.getElementById("isSchoolReg").value, t.hasAuthsite = document.getElementById("hasAuthsite").value }(baidu, window.Pass);
    </script>
    <script type="text/javascript" src="/qiantaizhuce/static/js/tpl2logourl.js"></script>
    <script type="text/javascript" src="/qiantaizhuce/static/js/nocaptcha.js"></script>
    <script type="text/javascript" src="/qiantaizhuce/static/js/boot_reg_c6d49e2.js"></script>
    <script type="text/javascript">
    (function($, ns) {
        var require = ns.require;
        var feedback = require('ui/feedback/feedback');
        var feed = new feedback();
    })(window.baidu, window.Pass);
    </script>
    <script type="text/javascript">
    _hmt.push(['_setAutoPageview', false]);
    (function() {
        try {
            var tjstr = location.search,
                tjarr2 = [],
                tjresult = '';
            if (tjstr) {
                var tjarr = tjstr.slice(1).split('&');
                for (var i = 0, len = tjarr.length; i < len; i++) {
                    var query = tjarr[i].split('=')[0];
                    if (query != 't' && query != '_t') {
                        tjarr2.push(tjarr[i])
                    }
                }
            }
            tjresult = location.pathname + (tjarr2.length > 0 ? ('?' + tjarr2.join('&')) : '')
        } catch (e) {
            var tjresult = location.pathname
        }
        _hmt.push(['_trackPageview', tjresult]);
    })()
    var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
    document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F90056b3f84f90da57dc0f40150f005d5' type='text/javascript'%3E%3C/script%3E"));
    </script>
    <script type="text/javascript">
    wpo.tti = new Date * 1;
    </script>

        </div>
    </div>

</body>

</html>
