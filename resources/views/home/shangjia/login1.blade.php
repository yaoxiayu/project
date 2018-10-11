<!DOCTYPE html>
<html>

<head>
    <title>温代</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript">
    addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);

    function hideURLbar() { window.scrollTo(0, 1); }
    </script>
    <meta name="keywords" content="Flat Dark Web Login Form Responsive Templates, Iphone Widget Template, Smartphone login forms,Login form, Widget Template, Responsive Templates, a Ipad 404 Templates, Flat Responsive Templates" />
    <link href="/shangjia1/css/style.css" rel='stylesheet' type='text/css' />
    <!--webfonts-->
    <link href='http://fonts.useso.com/css?family=PT+Sans:400,700,400italic,700italic|Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.useso.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
    <!--//webfonts-->
    <script src="http://ajax.useso.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>

<body>
    <script>
    $(document).ready(function(c) {
        $('.close').on('click', function(c) {
            $('.login-form').fadeOut('slow', function(c) {
                $('.login-form').remove();
            });
        });
    });
    </script>
    <!--SIGN UP-->

    <div class="login-form">
        <div class="close"> </div>
        <div class="head-info">
         		
            <label class="lbl-1"> </label>
            <label class="lbl-2"> </label>
            <label class="lbl-3"> </label>
        </div>
        <div class="clear"> </div>
        <div class="avtar">
		<img src="/shangjia1/images/avtar.png" />
	</div>
        <form action="/shangjia" method="post">
            <fieldset>
                <input class="input-large span12" style="width:300px;" name="username" id="username" type="text" placeholder="用户名" /><span class="remind"></span>
                <input class="input-large span12" style="width:300px;" name="password" id="password" type="password" placeholder="密码" /><span class="remind"></span>
               
                {{csrf_field()}}
                 @if(Session::has('success'))
                                <div class=" am-u-sm-12" style="padding:0px;margin:0px;">
                                    <div class="dashboard-stat green">
                                        <div class="desc" style="text-align: center;line-height:20px;color:red">{{Session::get('success')}} </div>
                                    </div>
                                </div>
                                @endif @if(Session::has('error'))
                                <div class=" am-u-sm-12" style="padding:0px;margin:0px;">
                                    <div class="dashboard-stat red">
                                        <div class="desc" style="text-align: center;line-height:20px;color:red">{{Session::get('error')}} </div>
                                    </div>
                                </div>
                                @endif
            </fieldset>

                   
                
            <div class="signin">
                <input type="submit" value="Login">
            </div>
        </form>
        <div>
         	
                   </div>
        <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
        <script>
        var CUSER = false;

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
                // $.post('/shopuser.php', {username: v}, function(data){
                //})

                $.ajax({
                    url: '/shangjia.php',
                    type: 'post',
                    data: { username: v },
                    success: function(data) {
                        if (data != '1') {
                            //边框
                            input.addClass('error');
                            //文字提醒
                            input.next().html('<span style="color:red">该用户名不正确!!</span>').show();
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

        //表单的提交事件
        $('form').submit(function() {

            //触发错误提醒
            $('input').trigger('blur');
            //console.log(CUSER);
            //判断输入值是否都正确
            if (CUSER) {
                return true;
            } else {
                return false;
            }
        });
        </script>
    </div>
</body>

</html>