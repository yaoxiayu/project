<div class="navbar navbar-default" id="navbar">
    <script type="text/javascript">
    try { ace.settings.check('navbar', 'fixed') } catch (e) {}
    </script>
    <div class="navbar-container" id="navbar-container">
        <div class="navbar-header pull-left">
            <a href="#" class="navbar-brand">
                        <small>
                        <img src="/admin/images/logo.png" width="470px">
                        </small>
                    </a>
            <!-- /.brand -->
        </div>
        <!-- /.navbar-header -->
        <div class="navbar-header operating pull-left">
        </div>
        <div class="navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">
                <li class="light-blue">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle" id="a">
                     <span  class="time"><em id="time"></em></span><span class="user-info"><small>欢迎光临,</small>超级管理员</span>
                     <i class="icon-caret-down"></i>
                    </a>
                    <ul id="b" class="user-menu pull-right  dropdown-yellow dropdown-caret dropdown-close" style="background-color:#62a8d1;list-style:none;margin:0px auto;display:none">
                        <li><a href="/admin/setting" title="系统设置" class="iframeurl"  style="color:#fff;"><i class="icon-cog"></i>网站设置</a></li>
                        <li><a href="javascript:void(0)" name="admin_info.html" title="个人信息" class="iframeurl" style="color:#fff;"><i class="icon-user"></i>个人资料</a></li>
                        <li class="divider"></li>
                        <li><a href="javascript:ovid(0)" id="Exit_system" style="color:#fff;"><i class="icon-off"></i>退出</a></li>
                    </ul>

                    <script>
                          var a = document.getElementById('a');
                          var b = document.getElementById('b');
                          a.onclick = function()
                          {
                            var display = b.style.display;
                            if(display == 'none'){
                              b.style.display='block';
                            }else if(display == 'block'){
                              b.style.display='none';
                            }

                          }
                    </script>
                </li>

            </ul>

            <!-- <div class="right_info">

                   <div class="get_time" ><span id="time" class="time"></span>欢迎光临,管理员</span></div>
                    <ul class="nav ace-nav">
                        <li><a href="javascript:ovid(0)" class="change_Password">修改密码</a></li>
                        <li><a href="javascript:ovid(0)" id="Exit_system">退出系统</a></li>

                    </ul>
                </div>-->
        </div>
    </div>
</div>
