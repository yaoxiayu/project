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
            <span class="am-icon-code"></span> 商品添加
        </div>
    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="tpl-form-body tpl-form-line">
                <form class=" tpl-form-line-form" method="post" action="/shopping" enctype="multipart/form-data">
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">商品名 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="name" class="tpl-form-input" placeholder="">
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">商品价格 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="price" class="tpl-form-input" placeholder="">
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">商品总数 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="counts" class="tpl-form-input"  placeholder="">
                        </div>
                    </div>



					          <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">商家ID <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <select name="shopUser_id">
                                @foreach($shopUser as $v)
								                        <option value="{{$v['id']}}">{{$v['name']}}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>


					         <div class="am-form-group">
                        <label for="user-weibo" class="am-u-sm-3 am-form-label">主图</label>
                        <div class="am-u-sm-9">
                            <div class="am-form-group am-form-file">
                                <div class="tpl-form-file-img">
                                </div>
                                <button type="button" class="am-btn am-btn-danger am-btn-sm">
                                    <i class="am-icon-cloud-upload"></i>选张美美的照片当主图吧</button>
                                <input id="doc-form-file" type="file" name="img">
                            </div>
                        </div>
                    </div>


					<div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label">内容</label>
                        <div class="am-u-sm-9">
                            <script id="editor" type="text/plain" name="content" style="width:100%;height:500px;"></script>
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
