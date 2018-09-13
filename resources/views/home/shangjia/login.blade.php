<!DOCTYPE html>
<html lang="en">
<head>

	<!-- start: Meta -->
	<meta charset="utf-8" />
	<title>SimpliQ - Flat & Responsive Bootstrap Admin Template</title>
	<meta name="description" content="SimpliQ - Flat & Responsive Bootstrap Admin Template." />
	<meta name="author" content="Łukasz Holeczek" />
	<meta name="keyword" content="SimpliQ, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina" />
	<!-- end: Meta -->

	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- end: Mobile Specific -->

	<!-- start: CSS -->
	<link href="/business/css/bootstrap.min.css" rel="stylesheet" />
	<link href="/business/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="/business/css/style.min.css" rel="stylesheet" />
	<link href="/business/css/style-responsive.min.css" rel="stylesheet" />
	<link href="/business/css/retina.css" rel="stylesheet" />
	<!-- end: CSS -->


	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->

	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->

	<!-- start: Favicon and Touch Icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/business/ico/apple-touch-icon-144-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/business/ico/apple-touch-icon-114-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/business/ico/apple-touch-icon-72-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" href="/business/ico/apple-touch-icon-57-precomposed.png" />
	<link rel="shortcut icon" href="ico/favicon.png" />
	<!-- end: Favicon and Touch Icons -->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>
		<div class="container-fluid-full">
		<div class="row-fluid">

			<div class="row-fluid">
				<div class="login-box">
					<h2>账号登录</h2>
					<form class="form-horizontal" action="/shangjia" method="post">
						<fieldset>
							
							<input class="input-large span12" name="username" id="username" type="text" placeholder="用户名" /><span class="remind"></span>

							<input class="input-large span12" name="password" id="password" type="password" placeholder="密码" /><span class="remind"></span>

							<div class="clearfix"></div>

							<label class="remember" for="remember"><input type="checkbox" id="remember" />Remember me</label>

							<div class="clearfix"></div>
							{{csrf_field()}}
							<button type="submit" class="btn btn-primary span12">登录</button>
						</fieldset>

					</form>
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
                                url: '/shopuser.php',
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
					<hr />
					
				</div>
			</div><!--/row-->

				</div><!--/fluid-row-->

	</div><!--/.fluid-container-->

	<!-- start: JavaScript-->
		<script src="/business/js/jquery-1.10.2.min.js"></script>
	<script src="/business/js/jquery-migrate-1.2.1.min.js"></script>
		<script src="/business/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="/business/js/jquery.ui.touch-punch.js"></script>
		<script src="/business/js/modernizr.js"></script>
		<script src="/business/js/bootstrap.min.js"></script>
		<script src="/business/js/jquery.cookie.js"></script>
		<script src='/business/js/fullcalendar.min.js'></script>
		<script src='/business/js/jquery.dataTables.min.js'></script>
		<script src="/business/js/excanvas.js"></script>
	<script src="/business/js/jquery.flot.js"></script>
	<script src="/business/js/jquery.flot.pie.js"></script>
	<script src="/business/js/jquery.flot.stack.js"></script>
	<script src="/business/js/jquery.flot.resize.min.js"></script>
	<script src="/business/js/jquery.flot.time.js"></script>

		<script src="/business/js/jquery.chosen.min.js"></script>
		<script src="/business/js/jquery.uniform.min.js"></script>
		<script src="/business/js/jquery.cleditor.min.js"></script>
		<script src="/business/js/jquery.noty.js"></script>
		<script src="/business/js/jquery.elfinder.min.js"></script>
		<script src="/business/js/jquery.raty.min.js"></script>
		<script src="/business/js/jquery.iphone.toggle.js"></script>
		<script src="/business/js/jquery.uploadify-3.1.min.js"></script>
		<script src="/business/js/jquery.gritter.min.js"></script>
		<script src="/business/js/jquery.imagesloaded.js"></script>
		<script src="/business/js/jquery.masonry.min.js"></script>
		<script src="/business/js/jquery.knob.modified.js"></script>
		<script src="/business/js/jquery.sparkline.min.js"></script>
		<script src="/business/js/counter.min.js"></script>
		<script src="/business/js/raphael.2.1.0.min.js"></script>
	<script src="/business/js/justgage.1.0.1.min.js"></script>
		<script src="/business/js/jquery.autosize.min.js"></script>
		<script src="/business/js/retina.js"></script>
		<script src="/business/js/jquery.placeholder.min.js"></script>
		<script src="/business/js/wizard.min.js"></script>
		<script src="/business/js/core.min.js"></script>
		<script src="/business/js/charts.min.js"></script>
		<script src="/business/js/custom.min.js"></script>
	<!-- end: JavaScript-->


</body>
</html>
