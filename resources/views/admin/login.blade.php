<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>后台登陆页面</title>
    <meta name="description" content="">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="/guanli/assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="/guanli/assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="/guanli/assets/css/amazeui.min.css" />
    <link rel="stylesheet" href="/guanli/assets/css/admin.css">
    <link rel="stylesheet" href="/guanli/assets/css/app.css">
</head>

<body data-type="login">
    <div class="am-g myapp-login">
        <div class="myapp-login-logo-block  tpl-login-max">
            <div class="myapp-login-logo-text">
                <div class="myapp-login-logo-text">
                    管理员后台<span> 登陆</span> <i class="am-icon-skyatlas"></i>
                </div>
            </div>
            <div class="am-u-sm-10 login-am-center">
                @if(Session::has('success'))
                <div class=" am-u-sm-12" style="padding:0px;margin:0px;">
                    <div class="dashboard-stat green">
                        <div class="desc" style="text-align: center;line-height:95px;color:white">{{Session::get('success')}} </div>
                    </div>
                </div>
                @endif @if(Session::has('error'))
                <div class=" am-u-sm-12" style="padding:0px;margin:0px;">
                    <div class="dashboard-stat red">
                        <div class="desc" style="text-align: center;line-height:95px;color:white">{{Session::get('error')}} </div>
                    </div>
                </div>
                @endif
                <form class="am-form" method="post" action="/admin/login">
                    <fieldset>
                        <div class="am-form-group">
                            <input type="text" name="username" class="" id="doc-ipt-email-1" placeholder="用户名">
                        </div>
                        <div class="am-form-group">
                            <input type="password" name="password" class="" id="doc-ipt-pwd-1" placeholder="密码">
                        </div>
                        {{csrf_field()}}
                        <p>
                            <button type="submit" class="am-btn am-btn-default">登录</button>
                        </p>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <script src="/guanli/assets/js/jquery.min.js"></script>
    <script src="/guanli/assets/js/amazeui.min.js"></script>
    <script src="/guanli/assets/js/app.js"></script>
</body>

</html>
<SCRIPT Language=VBScript>
<!--

//-->
</SCRIPT>


 
<!-- <!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <title>后台管理</title>
    <link href="/login.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="login_box">
        <div class="login_l_img"><img src="/images/login-img.png" /></div>
        <div class="login">
            <div class="login_logo"><a href="#"><img src="/images/login_logo.png" /></a></div>
            <div class="login_name">
                <p>后台管理系统</p>
            </div>
            <form method="post" action="/admin/login">
                <input name="username" type="text" value="用户名" onfocus="this.value=''" onblur="if(this.value==''){this.value='用户名'}">
                <span id="password_text" onclick="this.style.display='none';document.getElementById('password').style.display='block';document.getElementById('password').focus().select();">密码</span>
                <input name="password" type="password" id="password" style="display:none;" onblur="if(this.value==''){document.getElementById('password_text').style.display='block';this.style.display='none'};" />
                <input value="登录" style="width:100%;" type="submit"> {{csrf_field()}}
            </form>
            <div>
                @if(Session::has('success'))
                <div class=" am-u-sm-12" style="padding:0px;margin:0px;">
                    <div class="dashboard-stat green">
                        <div class="desc" style="text-align: center;line-height:30px;color:white">{{Session::get('success')}} </div>
                    </div>
                </div>
                @endif @if(Session::has('error'))
                <div class=" am-u-sm-12" style="padding:0px;margin:0px;">
                    <div class="dashboard-stat red">
                        <div class="desc" style="text-align: center;line-height:30px;color:white">{{Session::get('error')}} </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
        <div class="copyright">某某有限公司 版权所有©2016-2018 技术支持电话：000-00000000</div>
    </div>
</body>

</html>*/ -->