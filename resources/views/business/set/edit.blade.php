@extends('layouts.shangjia.shangjia')
@section('content')
@include('layouts._head')
<hr>
@include('layouts._head')
@include('layouts._session')
  <h1 class="text-info">
    店铺编辑
  </h1>
  <div class="tpl-block">
      <div class="am-g">
          <div class="tpl-form-body tpl-form-line">
              <form class=" tpl-form-line-form" method="post" action="/business/xiugai/{{\Session::get('id')}}" enctype="multipart/form-data">
                  <div class="am-form-group">
                      <label for="user-name" class="am-u-sm-3 am-form-label">店铺名称 <span class="tpl-form-line-small-title"></span></label>
                      <div class="am-u-sm-9">
                          <input type="text" name="name" class="tpl-form-input" placeholder="" value="{{$shopuser['name']}}">
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
                      <label for="user-name" class="am-u-sm-3 am-form-label">商家用户名 <span class="tpl-form-line-small-title"></span></label>
                      <div class="am-u-sm-9">
                          <input type="text" name="username" class="tpl-form-input" placeholder="" style="border-bottom-color: rgb(194, 202, 216);" value="{{$shopuser['username']}}">
                      </div>
                  </div>

                  <div class="am-form-group">
                      <label for="user-name" class="am-u-sm-3 am-form-label">商家手机号<span class="tpl-form-line-small-title"></span></label>
                      <div class="am-u-sm-9">
                          <input type="text" name="phone" class="tpl-form-input" placeholder="" style="border-bottom-color: rgb(194, 202, 216);" value="{{$shopuser['phone']}}">
                      </div>
                  </div>

                  <div class="am-form-group">
                      <label for="user-name" class="am-u-sm-3 am-form-label">商家简介<span class="tpl-form-line-small-title"></span></label>
                      <div class="am-u-sm-9">
                          <input type="text" name="intro" class="tpl-form-input" placeholder="" style="border-bottom-color: rgb(194, 202, 216);" value="{{$shopuser['intro']}}">
                      </div>
                  </div>






                  {{csrf_field()}}
                  <div class="am-form-group">
                      <div class="am-u-sm-9 am-u-sm-push-3">
                          <button class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
                      </div>
                  </div>


              </form>
          </div>
      </div>
  </div>
</div>
@endsection
