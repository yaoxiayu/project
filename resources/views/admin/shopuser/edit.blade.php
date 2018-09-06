@extends('layouts.index')
@section('content')
<hr>
@include('layouts._head')
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> 商家信息修改
        </div>
    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="tpl-form-body tpl-form-line">
                <form class="am-form tpl-form-line-form" method="post" action="/shopuser/{{$shopuser['id']}}" enctype="multipart/form-data">
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">商家名称 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="username" class="tpl-form-input" id="user-name" placeholder="" value="{{$shopuser['username']}}">
                            <small>用户名为6-20位字母数字下划线</small>
                        </div>
                    </div>
                
                    <div class="am-form-group">
                        <label for="user-phone" class="am-u-sm-3 am-form-label">商家行业</label>
                        <div class="am-u-sm-9">
                            <select name="industry_id" style=" width:150px">
                                @foreach($industry as $v)
                                    <option value="{{$v['id']}}" 
                                        @if($v['id'] == $shopuser['industry_id'])
                                            selected
                                        @endif 
                                    >{{$v['name']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">商家手机号 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="phone" class="tpl-form-input" id="user-name" placeholder="" value="{{$shopuser['phone']}}">
                            <small>请输入您的手机号</small>
                        </div>
                    </div>
          
          
                    <div class="am-form-group">
                        <label for="user-weibo" class="am-u-sm-3 am-form-label">主图 </label>
                        <div class="am-u-sm-9">
                            <img src="{{$shopuser['pic']}}" alt="" width="80">
                            <div class="am-form-group am-form-file">
                                <div class="tpl-form-file-img">
                                </div>
                                <button type="button" class="am-btn am-btn-danger am-btn-sm">
                                    <i class="am-icon-cloud-upload"></i> 添加封面图片</button>
                                <input id="doc-form-file" type="file" name="pic">
                            </div>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">商家地址 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <div class="info">
                                <div data-toggle="distpicker">
                                    <select class="form-control" id="province2" data-province="{{$asd[0]}}"></select>
                                    <select class="form-control" id="city2" data-city="{{$asd[1]}}"></select>
                                    <select class="form-control" id="district2" data-district="{{$asd[2]}}"></select>
                                    <textarea name="address" id="" cols="5" rows="1">{{$asd[3]}}</textarea>
                                </div>
                            <div id="show"></div>
                            </div>
                        </div>
                    </div>
   
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">商家简介 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="intro" class="tpl-form-input" id="user-name" placeholder="" value="{{$shopuser['intro']}}">
                            <small>介绍一下你的店铺吧</small>
                        </div>
                    </div>
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                  
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