<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> 黑米</title>
    <meta name="keywords" content="黑米">
    <meta name="content" content="黑米">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <link type="text/css" rel="stylesheet" href="/zhuce/css/login.css">
    <script type="text/javascript" src="/zhuce/js/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/jquery-validate/1.17.0/jquery.validate.min.js"></script>
    <script src="https://cdn.bootcss.com/jquery-validate/1.9.0/localization/messages_cn.min.js"></script>
</head>

<body class="login_bj">
    <div class="zhuce_body">
        <div class="logo"><a href="#"></a></div>
        <div class="zhuce_kong">
            <div class="zc">
                <div class="bj_bai" style="height:450px;">
                    <h3>欢迎注册</h3>
                    <form action="/home/zhuce" method="post">
                        <input name="username" type="text" class="kuang_txt phone" placeholder="用户名" style="width:270px;"><span class="remind"></span>
                        <input name="password" type="password" class="kuang_txt email" placeholder="密码" style="width:270px;"><span class="remind"></span>
                        <input name="repassword" type="password" class="kuang_txt email" placeholder="确认密码" style="width:270px;"><span class="remind"></span>
                        <input name="phone" type="text" class="kuang_txt possword" placeholder="手机号" style="width:270px;"><span class="remind"></span><br><br>

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
                        $(this).next().show().html('输入8~18位字母数字下划线');
                    }).blur(function() {
                        //移出激活状态的class active
                        $(this).removeClass('active');
                        //正则判断
                        var v = $(this).val();
                        //声明正则
                        var reg = /^\w{8,18}$/;
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
               
                <div class="bj_right" style="height:450px;">
                    <p>使用以下账号直接登录</p>
                    <a href="/home/zhuce" class="zhuce_qq">QQ注册</a>
                    <a href="/home/zhuce" class="zhuce_wb">微博注册</a>
                    <a href="/home/zhuce" class="zhuce_wx">微信注册</a>
                    <p>已有账号？<a href="/login">立即登录</a></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>