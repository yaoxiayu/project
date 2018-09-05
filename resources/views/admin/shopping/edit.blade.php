@extends('layouts.index')
@section('content')
<hr>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="/ueditor/lang/zh-cn/zh-cn.js"></script>

@include('layouts._head')

<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> 商品修改
        </div>
    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="tpl-form-body tpl-form-line">
                <form class=" tpl-form-line-form" method="post" action="/shopping/{{$shopping['id']}}" enctype="multipart/form-data">
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">商品名 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="name" class="tpl-form-input" value="{{$shopping['name']}}">
                        </div>
                    </div>
	
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">商品价格 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="price" class="tpl-form-input" value="{{$shopping['price']}}">
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">商品总数 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="counts" class="tpl-form-input"  value="{{$shopping['counts']}}">
                        </div>
                    </div>
					

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">行业ID <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <select name="industry_id">
								<option value="1">1</option>
								<option value="2">2</option>
                            </select>
                            
                        </div>
                    </div>
					
					<div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">商家ID <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <select name="shopUser_id">
								<option value="1">1</option>
								<option value="2">2</option>
                            </select>
                            
                        </div>
                    </div>
					
					<div class="am-form-group">
                        <label for="user-weibo" class="am-u-sm-3 am-form-label">主图</label>
                        <div class="am-u-sm-9">
                            <div class="am-form-group am-form-file">
                                <div class="tpl-form-file-img">
                                </div>
                                <img src="{{$shopping['img']}}" alt="" width="100">
                                <button type="button" class="am-btn am-btn-danger am-btn-sm">
                                    <i class="am-icon-cloud-upload"></i>选张美美的照片当主图吧</button>
                                <input id="doc-form-file" type="file" name="img">
                            </div>
                        </div>
                    </div>
					

					<div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label">内容</label>
                        <div class="am-u-sm-9">
                            <script id="editor" type="text/plain" name="content" style="width:100%;height:500px;">
                            {!!$shopping['content']!!}</script>
                        </div>
                    </div>

					{{csrf_field()}}
                    {{method_field('PUT')}}
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