@extends('layouts.shangjia.shangjia')
@section('content')
@include('layouts._head')
<hr>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="/ueditor/lang/zh-cn/zh-cn.js"></script>
@include('layouts._head')

  <h1 class="text-info">
    商品修改
  </h1>
  <div class="tpl-block">
      <div class="am-g">
          <div class="tpl-form-body tpl-form-line">
              <form class=" tpl-form-line-form" method="post" action="/business/shopping/update/{{$shopping['id']}}" enctype="multipart/form-data">
                  <div class="am-form-group">
                      <label for="user-name" class="am-u-sm-3 am-form-label">商品名 <span class="tpl-form-line-small-title"></span></label>
                      <div class="am-u-sm-9">
                          <input type="text" name="name" class="tpl-form-input" placeholder="" value="{{$shopping['name']}}">
                      </div>
                  </div>
                  <style>
                  input[placeholder], [placeholder], [placeholder] {
                    color: #666!important;
                  }

                  .add-on, textarea, input[type="text"], input[type="file"], .uneditable-input {
                        border-color: #ccc!important;
                    }

                  </style>


                  <div class="am-form-group">
                      <label for="user-name" class="am-u-sm-3 am-form-label">商品价格 <span class="tpl-form-line-small-title"></span></label>
                      <div class="am-u-sm-9">
                          <input type="text" name="price" class="tpl-form-input" placeholder="" style="border-bottom-color: rgb(194, 202, 216);" value="{{$shopping['price']}}">
                      </div>
                  </div>

                  <div class="am-form-group">
                      <label for="user-name" class="am-u-sm-3 am-form-label">商品总数 <span class="tpl-form-line-small-title"></span></label>
                      <div class="am-u-sm-9">
                          <input type="text" name="counts" class="tpl-form-input"  placeholder="" value="{{$shopping['counts']}}">
                      </div>
                  </div>
                 <div class="am-form-group">
                      <label for="user-weibo" class="am-u-sm-3 am-form-label">主图</label>
                      <div class="am-u-sm-9">
                          <div class="am-form-group am-form-file">
                              <div class="tpl-form-file-img">
                              </div>
                              <button id="A" type="button" class="am-btn am-btn-danger am-btn-sm">
                                  <i class="am-icon-cloud-upload"></i>选张美美的照片当主图吧</button>
                              <input id="B" type="file" name="img" onchange="showPreview(this)" style="display:none;"/><br>
                              <img id="portrait" src="{{$shopping['img']}}" width="200" height="200" />
                              <script src="/js/jquery.min.js"></script>
                              <script>
                                  $('#A').click(function(){
                                    $('#B').trigger('click');

                                  })
                                    function showPreview(source) {
                                      var file = source.files[0];
                                      if(window.FileReader) {
                                          var fr = new FileReader();
                                          console.log(fr);
                                          var portrait = document.getElementById('portrait');
                                          fr.onloadend = function(e) {
                                            portrait.src = e.target.result;
                                          };
                                          fr.readAsDataURL(file);
                                          portrait.style.display = 'block';
                                      }
                                    }
                              </script>
                          </div>
                      </div>
                  </div>


        <div class="am-form-group">
                      <label class="am-u-sm-3 am-form-label">内容</label>
                      <div class="am-u-sm-9">
                          <script id="editor" type="text/plain" name="content" style="width:100%;height:500px;">
                              {!!$shopping['content']!!}
                          </script>
                      </div>
                  </div>

                  {{csrf_field()}}
                  <div class="am-form-group">
                      <div class="am-u-sm-9 am-u-sm-push-3">
                          <button class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
                      </div>
                  </div>

                   <script>
                    var ue = UE.getEditor('editor');
                </script>
              </form>
          </div>
      </div>
  </div>
</div>
@endsection
