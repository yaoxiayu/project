@extends('layouts.index')
@section('content')
<hr>
@include('layouts._head')
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> 行业修改
        </div>
    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="tpl-form-body tpl-form-line">
                <form class="am-form tpl-form-line-form" method="post" action="/industry/{{$industry['id']}}">
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">行业名称 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="name" class="tpl-form-input" id="user-name" placeholder="" value="{{$industry['name']}}">
                            <small>用户名为6-20位字母数字下划线</small>
                        </div>
                    </div>
  
            {{csrf_field()}}         
          {{method_field('put')}}
         
                    <div class="am-form-group">
                        <div class="am-u-sm-9 am-u-sm-push-3">
                            <button class="am-btn am-btn-primary tpl-btn-bg-color-success ">保存</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection