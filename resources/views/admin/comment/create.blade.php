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
            <span class="am-icon-code"></span> 评论添加
        </div>
    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="tpl-form-body tpl-form-line">
                <form class=" tpl-form-line-form" method="post" action="/comment" enctype="multipart/form-data">
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">评价分值 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <select name="values">
                                <option value="1">🌹好评</option>
                                <option value="2">😫中评</option>
                                <option value="3">💣差评</option>
                            </select>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">商品id <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <select name="shopping_id">
                                @foreach($shopping as $v)
                                <option value="{{$v['id']}}">{{$v['name']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
	
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">评论人id <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <!-- <input type="text" name="user_id" class="tpl-form-input"> -->
                            <select name="user_id">
                            @foreach($user as $v)
                                <option value="{{$v['id']}}">{{$v['username']}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>

                    

					<div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label">评价内容</label>
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