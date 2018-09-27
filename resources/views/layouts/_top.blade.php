<div class="navbar navbar-default" id="navbar">
    <script type="text/javascript">
    try { ace.settings.check('navbar', 'fixed') } catch (e) {}
    </script>
    <div class="navbar-container" id="navbar-container">
        <div class="navbar-header pull-left">
            <a href="/houtai" class="navbar-brand">
                        <small>
                        <img src="/admin/images/wen.png" width="200px" height="70px">
                        </small>
                    </a>
            <!-- /.brand -->
        </div>
        <!-- /.navbar-header -->
        <div class="navbar-header operating pull-left">
        </div>
        <div class="navbar-header pull-right" role="navigation">
          @if(Session::has('admin'))
            <ul class="nav ace-nav">
                <li class="light-blue open">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle" id="a">
                     <span  class="time"><em id="time"></em></span><span class="user-info"><small>欢迎光临,</small>超级管理员</span><span>{{Session::get('adminname')}}</span>
                     <i class="icon-caret-down"></i>
                    </a>
                    <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close" id="b" style="display: none;">
                        <li><a href="/admin/setting" title="系统设置" class="iframeurl"><i class="icon-cog"></i>网站设置</a></li>
                        <li><a href="/admin/geren" name="admin_info.html" title="个人信息" class="iframeurl"><i class="icon-user"></i>个人资料</a></li>
                        <li class="divider"></li>
                        <li><a href="#" id="Exit_system">退出</a></li>
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
            @endif
            @if(!Session::has('admin'))
              <ul class="nav ace-nav">
                  <li class="light-blue open">
                      <a data-toggle="dropdown" href="#" class="dropdown-toggle" id="a">
                       <span  class="time"><em id="time"></em></span><span class="user-info"><small>请登录,</small>超级管理员</span>
                       <i class="icon-caret-down"></i>
                      </a>
                      <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close" id="b" style="display: none;">
                          <li><a href="/admin/login" title="系统设置" class="iframeurl"><i class="icon-cog"></i>登录</a></li>
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
              @endif
        </div>
    </div>
</div>
