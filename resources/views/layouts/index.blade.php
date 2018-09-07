<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>黑米后台管理系统 </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/admin/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/admin/assets/css/font-awesome.min.css" />
    <!--[if IE 7]>
          <link rel="stylesheet" href="/admin/assets/css/font-awesome-ie7.min.css" />
        <![endif]-->
    <link rel="stylesheet" href="/admin/assets/css/ace.min.css" />
    <link rel="stylesheet" href="/admin/assets/css/ace-rtl.min.css" />
    <link rel="stylesheet" href="/admin/assets/css/ace-skins.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <!--[if lte IE 8]>
          <link rel="stylesheet" href="/admin/assets/css/ace-ie.min.css" />
        <![endif]-->
    <script src="/admin/assets/js/ace-extra.min.js"></script>
    <!--[if lt IE 9]>
        <script src="/admin/assets/js/html5shiv.js"></script>
        <script src="/admin/assets/js/respond.min.js"></script>
        <![endif]-->
    <!--[if !IE]> -->
    <script src="/admin/js/jquery-1.9.1.min.js"></script>
    <!-- <![endif]-->
    <!--[if IE]>
         <script type="text/javascript">window.jQuery || document.write("<script src='/admin/assets/js/jquery-1.10.2.min.js'>"+"<"+"script>");</script>
        <![endif]-->
    <script type="text/javascript">
    if ("ontouchend" in document) document.write("<script src='/admin/assets/js/jquery.mobile.custom.min.js'>" + "<" + "script>");
    </script>
    <script src="/admin/assets/js/bootstrap.min.js"></script>
    <script src="/admin/assets/js/typeahead-bs2.min.js"></script>
    <!--[if lte IE 8]>
          <script src="/admin/assets/js/excanvas.min.js"></script>
        <![endif]-->
    <script src="/admin/assets/js/ace-elements.min.js"></script>
    <script src="/admin/assets/js/ace.min.js"></script>
    <script src="/admin/assets/layer/layer.js" type="text/javascript"></script>
    <script src="/admin/assets/laydate/laydate.js" type="text/javascript"></script>
    <script src="/admin/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(function() {
        var cid = $('#nav_list> li>.submenu');
        cid.each(function(i) {
            $(this).attr('id', "Sort_link_" + i);

        })
    })
    jQuery(document).ready(function() {
        $.each($(".submenu"), function() {
            var $aobjs = $(this).children("li");
            var rowCount = $aobjs.size();
            var divHeigth = $(this).height();
            $aobjs.height(divHeigth / rowCount);
        });
        //初始化宽度、高度

        $("#main-container").height($(window).height() - 76);
        $("#iframe").height($(window).height() - 140);

        $(".sidebar").height($(window).height() - 99);
        var thisHeight = $("#nav_list").height($(window).outerHeight() - 173);
        $(".submenu").height();
        $("#nav_list").children(".submenu").css("height", thisHeight);

        //当文档窗口发生改变时 触发  
        $(window).resize(function() {
            $("#main-container").height($(window).height() - 76);
            $("#iframe").height($(window).height() - 140);
            $(".sidebar").height($(window).height() - 99);

            var thisHeight = $("#nav_list").height($(window).outerHeight() - 173);
            $(".submenu").height();
            $("#nav_list").children(".submenu").css("height", thisHeight);
        });
        $(document).on('click', '.iframeurl', function() {
            var cid = $(this).attr("name");
            var cname = $(this).attr("title");
            $("#iframe").attr("src", cid).ready();
            $("#Bcrumbs").attr("href", cid).ready();
            $(".Current_page a").attr('href', cid).ready();
            $(".Current_page").attr('name', cid);
            $(".Current_page").html(cname).css({ "color": "#333333", "cursor": "default" }).ready();
            $("#parentIframe").html('<span class="parentIframe iframeurl"> </span>').css("display", "none").ready();
            $("#parentIfour").html('').css("display", "none").ready();
        });



    });
    /******/
    $(document).on('click', '.link_cz > li', function() {
        $('.link_cz > li').removeClass('active');
        $(this).addClass('active');
    });
    /*******************/
    //jQuery( document).ready(function(){
    //    $("#submit").click(function(){
    //  // var num=0;
    //     var str="";
    //     $("input[type$='password']").each(function(n){
    //          if($(this).val()=="")
    //          {
    //              // num++;
    //             layer.alert(str+=""+$(this).attr("name")+"不能为空！\r\n",{
    //                title: '提示框',             
    //              icon:0,             
    //          }); 
    //             // layer.msg(str+=""+$(this).attr("name")+"不能为空！\r\n");
    //             layer.close(index);
    //          }         
    //     });    
    //})        
    //  });

    /*********************点击事件*********************/
    $(document).ready(function() {
        $('#nav_list,.link_cz').find('li.home').on('click', function() {
            $('#nav_list,.link_cz').find('li.home').removeClass('active');
            $(this).addClass('active');
        });
        //时间设置
        function currentTime() {
            var d = new Date(),
                str = '';
            str += d.getFullYear() + '年';
            str += d.getMonth() + 1 + '月';
            str += d.getDate() + '日';
            str += d.getHours() + '时';
            str += d.getMinutes() + '分';
            str += d.getSeconds() + '秒';
            return str;
        }

        setInterval(function() { $('#time').html(currentTime) }, 1000);
        //修改密码
        $('.change_Password').on('click', function() {
            layer.open({
                type: 1,
                title: '修改密码',
                area: ['300px', '300px'],
                shadeClose: true,
                content: $('#change_Pass'),
                btn: ['确认修改'],
                yes: function(index, layero) {
                    if ($("#password").val() == "") {
                        layer.alert('原密码不能为空!', {
                            title: '提示框',
                            icon: 0,

                        });
                        return false;
                    }
                    if ($("#Nes_pas").val() == "") {
                        layer.alert('新密码不能为空!', {
                            title: '提示框',
                            icon: 0,

                        });
                        return false;
                    }

                    if ($("#c_mew_pas").val() == "") {
                        layer.alert('确认新密码不能为空!', {
                            title: '提示框',
                            icon: 0,

                        });
                        return false;
                    }
                    if (!$("#c_mew_pas").val || $("#c_mew_pas").val() != $("#Nes_pas").val()) {
                        layer.alert('密码不一致!', {
                            title: '提示框',
                            icon: 0,

                        });
                        return false;
                    } else {
                        layer.alert('修改成功！', {
                            title: '提示框',
                            icon: 1,
                        });
                        layer.close(index);
                    }
                }
            });
        });
        $('#Exit_system').on('click', function() {
            layer.confirm('是否确定退出系统？', {
                    btn: ['是', '否'], //按钮
                    icon: 2,
                },
                function() {
                    location.href = "login.html";

                });
        });
    });

    function link_operating(name, title) {
        var cid = $(this).name;
        var cname = $(this).title;
        $("#iframe").attr("src", cid).ready();
        $("#Bcrumbs").attr("href", cid).ready();
        $(".Current_page a").attr('href', cid).ready();
        $(".Current_page").attr('name', cid);
        $(".Current_page").html(cname).css({ "color": "#333333", "cursor": "default" }).ready();
        $("#parentIframe").html('<span class="parentIframe iframeurl"> </span>').css("display", "none").ready();
        $("#parentIfour").html('').css("display", "none").ready();


    }
    </script>
</head>

<body>
    @include('layouts._top')
    <div class="main-container" id="main-container">
        <script type="text/javascript">
        try { ace.settings.check('main-container', 'fixed') } catch (e) {}
        </script>
        <div class="main-container-inner">
            <a class="menu-toggler" id="menu-toggler" href="#">
                    <span class="menu-text"></span>
                </a> @include('layouts._menu')
            <div class="main-content">
                @section('content')
                    
                @show
            </div>
            <!-- /.main-content -->
            <div class="ace-settings-container" id="ace-settings-container">
                <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                    <i class="icon-cog bigger-150"></i>
                </div>
                <div class="ace-settings-box" id="ace-settings-box">
                    <div>
                        <div class="pull-left">
                            <select id="skin-colorpicker" class="hide">
                                <option data-skin="default" value="#438EB9">#438EB9</option>
                                <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                                <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                                <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                            </select>
                        </div>
                        <span>&nbsp; 选择皮肤</span>
                    </div>
                    <div>
                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
                        <label class="lbl" for="ace-settings-sidebar"> 固定滑动条</label>
                    </div>
                    <div>
                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
                        <label class="lbl" for="ace-settings-rtl">切换到左边</label>
                    </div>
                    <div>
                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
                        <label class="lbl" for="ace-settings-add-container">
                            切换窄屏
                            <b></b>
                        </label>
                    </div>
                </div>
            </div>
            <!-- /#ace-settings-container -->
        </div>
        <!-- /.main-container-inner -->
    </div>
    <!-- /.main-container -->
    <!-- basic scripts -->
</body>

</html>