@extends('layouts.index')
@extends('layouts._head')
@section('content')
<hr>
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> 用户修改
        </div>
    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="tpl-form-body tpl-form-line">
                <form class="am-form tpl-form-line-form" method="post" action="/user/{{$user['id']}}"  enctype="multipart/form-data">
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">用户名 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="username" class="tpl-form-input" id="user-name" placeholder="" value="{{$user['username']}}">
                            <small>用户名为6-20位字母数字下划线</small>
                        </div>
                    </div>
	
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">密码 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="password" name="password" class="tpl-form-input" id="user-name" placeholder="">
                            <small>密码为6~20位非空白字符</small>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">手机号 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="phone" class="tpl-form-input" id="user-name" placeholder="" value="{{$user->phone}}">
                            <small>请输入您的手机号</small>
                        </div>
                    </div>
					
					<div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">地址 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <div class="info">
                                <div data-toggle="distpicker">
                                    <select class="form-control" id="province2" data-province="{{$asd[0]}}" name="s_province"></select>
                                    <select class="form-control" id="city2" data-city="{{$asd[1]}}" name="s_city"></select>
                                    <select class="form-control" id="district2" data-district="{{$asd[2]}}" name="s_county"></select>
                                    <textarea name="address" id="" cols="5" rows="1">{{$asd[3]}}</textarea>
                                </div>
                            <div id="show"></div>
                            </div>
                        </div>
                    </div>
					<div class="am-form-group">
                        <label for="user-weibo" class="am-u-sm-3 am-form-label">头像</label>
                        <div class="am-u-sm-9">
                            <div class="am-form-group am-form-file">
                                <div class="tpl-form-file-img">
                                </div>
                                <img src="{{$user->pic}}" width="80" height="80">
                                <button type="button" class="am-btn am-btn-danger am-btn-sm">
                                    <i class="am-icon-cloud-upload"></i>选张美美的照片当头像吧</button>
                                <input id="doc-form-file" type="file" name="pic">
                            </div>
                        </div>
                    </div>
                    {{method_field('PUT')}}
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