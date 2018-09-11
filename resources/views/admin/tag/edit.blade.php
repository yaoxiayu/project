@extends('layouts.index')
@section('content')
<hr>
@include('layouts._head')
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> 标签添加
        </div>
    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="tpl-form-body tpl-form-line">
                <form class="form-inline am-form tpl-form-line-form" method="post" action="/tag/{{$tag['id']}}" enctype="multipart/form-data">
                  <div class="am-form-group">
                      <label for="user-phone" class="am-u-sm-3 am-form-label">行业</label>
                      <div class="am-u-sm-9">
                          <select data-am-selected="{searchBox: 1}" name="industry_id">
                              @foreach($industry as $v)
                              <option value="{{$v['id']}}" @if($v['id']==$tag['industry_id'])
                                                              selected
                                                          @endif>{{$v['name']}}</option>
                              @endforeach
                          </select>
                      </div>
                  </div>

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">标签名称 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="name" class="tpl-form-input" id="user-name" placeholder="" value="{{$tag['name']}}">

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
