<!DOCTYPE html>
<!--[if lt IE 7]><html class="ie6"><![endif]-->
<!--[if IE 7]><html class="ie7"><![endif]-->
<!--[if IE 8]><html class="ie8"><![endif]-->
<!--[if IE 9]><html class="ie9"><![endif]-->
<!--[if !IE]><!-->
<html>
<!--<![endif]-->

<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="renderer" content="webkit">
    <meta name="baidu_ssp_verify" content="8541ea43669332b498d0d46a88e31c5c">

    <script>
    var F = {};
    (function() {
        var b = {};
        F.context = function(p, r) { var q = arguments.length; if (q > 1) { b[p] = r } else { if (q == 1) { if (typeof p == "object") { for (var o in p) { if (p.hasOwnProperty(o)) { b[o] = p[o] } } } else { return b[p]; } } } };
    })();
    </script>
    <script>
    !F.context('staticController') && F.context('staticController', { run: function(f) { f && f.call(this); }, /**/ fail: function() { /**/ } });
    </script>
    <script src="/home/static/js/staticloader_f1971d5.js"></script>
    <script>
    F.context('staticController').init && F.context('staticController').init(!!'', !!'', !!'', null, '');
    </script>
    <title>【温代】高品质生活服务网站！</title>
    <meta name="description" content="温代，中国领先的互联网本地生活服务平台，精选美食、电影、旅游、酒店、KTV、丽人、结婚、休闲娱乐，及鲜花、汽车、机票火车票等优享服务。一起温代，惠享品质生活！！" />
    <meta name="keywords" content="温代,本地生活服务,美食,电影,旅游,酒店,KTV">
    <script>
    var _hmt = _hmt || [];
    F.context('tongji_hm', {
        init: (function() {
            return function(rtTag) {
                rtTag && _hmt.push(['_trackRTEvent', rtTag]);
                var hm = document.createElement('script');
                hm.src = '//hm.baidu.com/hm.js?a028c07bf31ffce4b2d21dd85b0b8907';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(hm, s);
            }
        })()
    });
    F.context('tongji_hm').init();
    </script>
    <link rel="stylesheet" type="text/css" href="/home/static/css/global-revision_ee57746.css" />
    <link rel="stylesheet" type="text/css" href="/home/static/css/common_d7fb37f.css" />
    <link rel="stylesheet" type="text/css" href="/home/static/css/header_8e018e5.css" />
    <link rel="stylesheet" type="text/css" href="/home/static/css/index_a4c176c.css" />
    <link rel="stylesheet" type="text/css" href="/home/static/css/list_a00e520.css" />


</head>

<body mon="page=index_new" class="gl-big-screen">

    <script>
    F.context({
        'channel': 'zhifang', //
        'channel_content': '', //
        'da_page': 'index_new', //
        'nuomi_base': '//www.nuomi.com',
        'logout_nuomi': '/pclogin/main/logout',
        'baid_uss_url': '//nuomipassport.baidu.com/getbduss',
        'baidu_stoken_url': '//passport.baidu.com/v3/login/api/auth?tpl=nuomi&return_type=5&u=https%3A%2F%2Fm.nuomi.com%2Fwebapp%2Fuser%2Fsetstoken%3Fcallback%3Dcb',
        'logout_baidu': 'https://passport.baidu.com/?logout',
        'xll': '', //
        'label_sort_js': '', //
        'loginTest': '1', //
        'passport_base': '//passport.baidu.com',
        'nuomi_old_base': '//login.nuomi.com',
        'login_idc': '' || 'sh',
        'passport_reg': '//passport.baidu.com/v2/?reg&tpl=nuomi&color=pink',
        'login_id': '',
        'sample_hit': '' //
    });
    </script>
    <!--[if IE 6]>
<div id="kie-bar" class="kie-bar">
目前您正在使用ie6浏览器，该浏览器已经过时了，为了更加安全和方便地进行团购，温代推荐您使用以下浏览器：<a href="http://www.microsoft.com/china/windows/IE/upgrade/index.aspx" class="kie-setup-IE8"  target="_blank" title="免费升级至IE8浏览器">免费升级</a>或下载使用<a href="http://browser.baidu.com/" class="kie-setup-baidu" target="_blank" title="百度浏览器">百度浏览器</a>，体验极速浏览体验！</div>
<style>
        .kie-bar {
            height: 24px;
            line-height: 1.8;
            font-weight:normal;
            text-align: center;
            border-bottom:1px solid #fce4b5;
            background-color:#FFFF9B;
            color:#e27839;
            position: relative;
            font-size: 14px;
            text-shadow:  0 0  1px #efefef;
            padding: 5px 0;
        }
        .kie-bar a {
            color:#08c;
            text-decoration: none;
        }
    </style>
<![endif]-->
    <div class="header-bar static-hook-real static-hook-id-1" mon="area=navigation" id="header-bar">
        <div class="header-inner clearfix flexible ">
            <ul class="left-city first-level" id="j-ucLoginList">
                @if(!Session::has('username'))
                <li class="welcome-text"><span class="welcome-tag" id="j-welcomeTag">Hi，欢迎来到温代</span></li>
                <li class="login"><a href="/login" id="j-barLoginBtn" class="pad-left">请登录</a></li>
                <li class="reg"><a href="/home/zhuce" class="pad-left">免费注册</a></li>
                @endif
                @if(Session::has('username'))
                <li class="welcome-text"><span class="welcome-tag" id="j-welcomeTag">Hi，{{Session::get('username')}}</span></li>
                <li class="reg"><a href="/logoutt" class="pad-left">退出</a></li> @endif
            </ul>
            <ul class="right-util first-level">


            @if(Session::has('username'))
            <li><a href="/person" class="pad-right" mon="element=my_order">个人中心</a></li>
            @endif
                <li class="qr-code j-bar-dropdown"><a href="//d.nuomi.com/?1009764s" class="pad-left pad-right" target="_blank">温代APP<span class="arrow-down-logo"></span></a>
                    <div class="header-dropmenu">
                        <div class="drop-block"></div><a class="img" href="//d.nuomi.com/?1009764s" target="_blank">二维码</a></div>
                </li>
                <li class="qr-code j-bar-dropdown"><a href="/coupon/all" class="pad-left pad-right" target="_blank">领券中心</a>
                </li>
                <li class="j-bar-dropdown"><a href="/shangjia" class="pad-right"><span>我是商家</span><span class="arrow-down-logo"></span></a><span class="sep-lines"></span>
                    <div class="merchant-list header-dropmenu">
                        <div class="drop-block"></div><a href="/shangjia/login" class="link" target="_blank">登录</a><a href="/shangjia/zhuce" class="link" target="_blank">注册</a></div>
                </li>
                <li><a href="//www.nuomi.com/help" class="pad-left" mon="element=help_center">帮助中心</a></li>
                <li><a href="//www.nuomi.com/pcindex/about/foodsafe " class="pad-left" mon="element=help_foodsafe">食品安全</a></li>
            </ul>
        </div>
    </div>
    <script type="text/javascript">
    F.context("page_name", "index_new"); //
    F.context("coupon_url", "//www.nuomi.com/uc/giftcard/find?status=1"); //
    </script>
    <div class="search-bar clearfix flexible static-hook-real static-hook-id-2" mon="area=searchTop">
        <div class="logo-area"><a href="/" class="logo" mon="element=logo" title="温代"><img class="fix-new-logo" src="/home/static/picture/logo.png"></a>
            <div class="city-wrap"><span class="city-pos"></span><span>北京</span><span class="arrow-down-line"></span>
                <div class="city-drop-down">
                    <div class="drop-block"></div>
                    <h3>热门城市</h3>
                    <ul>
                        <li><a href="//bj.nuomi.com">北京</a></li>
                        <li><a href="//sh.nuomi.com">上海</a></li>
                        <li><a href="//gz.nuomi.com">广州</a></li>
                        <li class="no-right-margin"><a href="//sz.nuomi.com">深圳</a></li>
                        <li><a href="//tj.nuomi.com">天津</a></li>
                        <li><a href="//hz.nuomi.com">杭州</a></li>
                        <li><a href="//xa.nuomi.com">西安</a></li>
                        <li class="no-right-margin"><a href="//cd.nuomi.com">成都</a></li>
                        <li><a href="//zz.nuomi.com">郑州</a></li>
                        <li><a href="//xm.nuomi.com">厦门</a></li>
                        <li><a href="//qd.nuomi.com">青岛</a></li>
                        <li class="no-right-margin"><a href="//ty.nuomi.com">太原</a></li>
                        <li><a href="//cq.nuomi.com">重庆</a></li>
                        <li><a href="//wh.nuomi.com">武汉</a></li>
                        <li><a href="//nj.nuomi.com">南京</a></li>
                        <li class="no-right-margin"><a href="//sy.nuomi.com">沈阳</a></li>
                        <li><a href="//jn.nuomi.com">济南</a></li>
                        <li><a href="//hrb.nuomi.com">哈尔滨</a></li>
                    </ul><a href="//www.nuomi.com/changecity" class="link morelink">更多城市 &gt;</a></div>
            </div>
        </div>
        <div class="search-area clearfix" >
            <div data-ui-id="main-searcher" class="form-wrap clearfix">
                <form method="get" action="/shopuser" id="j-searchForm" >
                    <input type="text" id="j-searchInput" class="searchinput" name="keyword" value="" data-placeholder="" placeholder="搜索商家/地点" autocomplete="off" mon="element=search_input" style="height:37.5px;padding:0px;">
                    <div class="searchbtn-wrap">
                        <input type="submit" class="searchbtn" id="j-searchBtn" value="" mon="element=search_button"><span class="search-text">搜&nbsp;索</span>
                        <div class="btn-shadow"></div>
                    </div>
                    <input type="hidden" id="j-input-hidden" name="rid" value="5e11a75122df4436dce95dd5720e3270">
                </form>
            </div>

        </div>
        <input type="hidden" id="j-input-city-fix" value="bj">
        <div class="utils clearfix">
            <a href="//www.nuomi.com/pcindex/about/promise" mon="element=just_retire" target="_blank">
                <div class="util-item refund">
                    <div class="u-icon refund">
                        <div class="drop-block"></div>
                    </div>
                    <div class="util-tip">未消费，随便退！</div>
                </div>
                <div class="util-item mid">
                    <div class="u-icon pei">
                        <div class="drop-block"></div>
                    </div>
                    <div class="util-tip">消费不满意先行赔付！</div>
                </div>
                <div class="util-item last">
                    <div class="u-icon money">
                        <div class="drop-block"></div>
                    </div>
                    <div class="util-tip">过期自动退！</div>
                </div>
            </a>
        </div>
    </div>
    <script type="text/template" id="autocomplete-template">

    </script>
