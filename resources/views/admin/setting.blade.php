@extends('layouts.index') 
@section('title') {{$setting->title}} @endsection
@section('title','$setting->title') 
@section('content')
@include('layouts._head')
<hr>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="/ueditor/lang/zh-cn/zh-cn.js"></script>
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> 网站设置
        </div>
    </div>
@include('layouts._session')

    <div class="tpl-block">
        <div class="am-g">
            <div class="tpl-form-body tpl-form-line">
                <form class="am-form tpl-form-line-form" method="post" action="/admin/setting" enctype="multipart/form-data">
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">网站标题 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="title" class="tpl-form-input" id="user-name" placeholder="" value="{{$setting ?  $setting->title : ''}}">
                            
                        </div>
                    </div>
                     
                  
                    <div class="am-form-group">
                       <label for="user-name" class="am-u-sm-3 am-form-label">关键字<span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="keywords" class="tpl-form-input" id="user-name" placeholder="" value="{{$setting ?  $setting->keywords : ''}}">
                            <small></small>
                        </div>
                    </div>
                     
                  
                    <script>
                        var ue = UE.getEditor('editor');
                    </script>

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