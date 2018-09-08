<!DOCTYPE html>
<html>
<!--STATUS OK-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="百度帐号是登录所有百度系产品的通行证，登录后还可以在帐户管理页管理/修改您的个人信息，包括修改密码、绑定手机、身份认证等">
    <title>
        注册百度帐号
    </title>
    <link rel="shortcut icon" href="https://www.baidu.com/favicon.ico" type="image/x-icon" />
    <link rel="icon" sizes="any" mask href="https://www.baidu.com/img/baidu.svg">
    <script type="text/javascript">
    window.wpo = { start: new Date * 1, pid: 109, page: 'passport' };
    var _hmt = _hmt || [];
    </script>
    <link href="static/css/base.css" type="text/css" rel="stylesheet" />
    <link href="static/css/ui.css" type="text/css" rel="stylesheet" />
    <link href="static/css/boot_reg_a416b96.css" type="text/css" rel="stylesheet" />
</head>

<body>
    <div id="wrapper" class="">
        <div id="head">
            <div class="mod-header">
                <a href="http://www.baidu.com/"><img src="static/picture/baidu.gif" alt="logo"></a>
            </div>
        </div>
        <div id="nav">
            <div class="nav-2">
                <div class="mod-nav clearfix">
                    <h1 class="page-type-notab"></h1>
                </div>
            </div>
        </div>
        <div id="content">
            <div class="mod-reg clearfix mod-reg-pink">
                <div class="reg-content" id="reg_content"></div>
                <div class="reg-sms">
                    <h3 class="reg-sms-title">手机快速注册</h3>
                    <div class="reg-sms-content">
                        <p class="reg-sms-p reg-sms-p-text">请使用中国大陆手机号，编辑短信：</p>
                        <p class="reg-sms-p reg-sms-p-warn">6-14位字符（支持数字/字母/符号）</p>
                        <p class="reg-sms-p reg-sms-p-text">作为登录密码，发送至：</p>
                        <p class="reg-sms-p reg-sms-p-warn">1069 0691 036590</p>
                        <p class="reg-sms-p reg-sms-p-last">即可注册成功，手机号即为登录帐号。</p>
                        <p class="reg-sms-qrcode">
                            <img src="static/picture/upreg.png" />
                            <br/>
                            <span>请使用手机百度进行扫码</span>
                        </p>
                    </div>
                </div>
                <div class="login-link" id="login_link">
                    <span>我已注册，现在就</span>
                    <button class="login-btn" id="login_btn">登录</button>
                </div>
            </div>
            <input type="hidden" value="nuomi" id="jsProduct" />
            <input type="hidden" value="" id="jsU" />
            <input type="hidden" value="pink" id="jsColor" />
            <input type="hidden" value="" id="jsSubpro" />
            <input type="hidden" value="https://sh.nuomi.com/?lf=1&ipd=bj" id="jsNorealU" />
            <input type="hidden" value="https://sh.nuomi.com/?lf=1&ipd=bj" id="jsRetu" />
            <input type="hidden" value="1" id="jsnoUsername" />
            <input type="hidden" value="" id="jsdefaultAccount" />
            <input type="hidden" value="" id="isSchoolReg" />
            <input type="hidden" value="" id="hasAuthsite" />
        </div>
        <div id="foot">
            <div class="mod-footer">
                <div class="copy-box">2018&nbsp;&copy;Baidu</div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="static/js/uni_wrapper.js"></script>
    <script type="text/javascript" src="static/js/core.js"></script>
    <script type="text/javascript" src="static/js/ui.js"></script>
    <script type="text/javascript" src="static/js/wrapper.js"></script>
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
        t.options = { product: o, u: s, userName: !0, isPhone: !0, color: u, subpro: n, noreal_u: a, retu: l, staticPage: document.location.protocol + "//" + document.location.host + "/static/passpc-account/html/v3Jump.html", noUsername: c, registerLink: d, qrcode: 2, sms: sms, regMerge: !1, regMergeUserName: !1, hasPlaceholder: !0, hasPasswordcheck: !0, isexchangeable: 1, overseas: overseas }, t.defaultAccount = document.getElementById("jsdefaultAccount").value, t.isSchoolReg = document.getElementById("isSchoolReg").value, t.hasAuthsite = document.getElementById("hasAuthsite").value }(baidu, window.Pass);
    </script>
    <script type="text/javascript" src="static/js/tpl2logourl.js"></script>
    <script type="text/javascript" src="static/js/nocaptcha.js"></script>
    <script type="text/javascript" src="static/js/boot_reg_c6d49e2.js"></script>
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
</body>

</html>