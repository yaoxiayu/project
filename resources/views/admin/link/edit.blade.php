@extends('layouts.index')
@section('title') 友情链接修改 @endsection
@section('title','友情链接修改') 
@section('content')
@include('layouts._head')

<hr>
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> 友情链接修改
        </div>
    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="tpl-form-body tpl-form-line">
                <form class="am-form tpl-form-line-form" method="post" action="/link/{{$link['id']}}">
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">友情链接名 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="name" class="tpl-form-input" id="user-name" placeholder="" value="{{$link['name']}}">
                            
                        </div>
                    </div>
                      <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">地址 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="url" class="tpl-form-input" id="user-name" placeholder="" value="{{$link['url']}}">
                          
                        </div>
                    </div>
                 
                    {{csrf_field()}}
                    {{method_field('PUT')}}

                    <div class="am-form-group">
                        <div class="am-u-sm-9 am-u-sm-push-3">
                            <button class="am-btn am-btn-primary tpl-btn-bg-color-success ">确认修改</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection