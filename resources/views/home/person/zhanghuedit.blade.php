@extends('home.person.index')

@section('content')
<!-- 城市三级联动 stant -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://www.jq22.com/jquery/bootstrap-3.3.4.css" rel="stylesheet">
    <script src="http://www.jq22.com/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://www.jq22.com/jquery/bootstrap-3.3.4.js"></script>
    <script src="/dizhi/js/distpicker.data.js"></script>
    <script src="/dizhi/js/distpicker.js"></script>
    <script src="/dizhi/js/main.js"></script>
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <!-- 城市三级联动 end -->
    <div class="tpl-block">
        <div class="am-g">
            <div style="margin:50px 300px">
                <form class="am-form tpl-form-line-form" method="post" action="/zhanghu/{{$user['id']}}"  enctype="multipart/form-data">
                  
	
                    <div class="am-form-group">
                            <p style="font-size: 18px">输入您的新手机号</p><input type="text" name="phone"  placeholder="" value="{{$user->phone}}" style="width: 190px;height:30px" class="form-control" id="exampleInputEmail1" >
                    </div>
					
					<div class="am-form-group">
                        <p style="font-size: 18px;margin-top: 15px">地址</p>
                        <div class="am-u-sm-9" >
                            <div class="info">
                                <div data-toggle="distpicker">
                                    <select class="form-control" id="province2" data-province="{{$asd[0]}}" name="s_province" style="margin-top: 5px;width: 190px"></select>
                                    <select class="form-control" id="city2" data-city="{{$asd[1]}}" name="s_city" style="margin-top: 5px;width: 190px"></select>
                                    <select class="form-control" id="district2" data-district="{{$asd[2]}}" name="s_county" style="margin-top: 5px;width: 190px"></select>
				                         <input type="text" name="address" placeholder="" value="{{$user->phone}}" style="width: 190px;height:25px;margin-top: 5px"  class="form-control" id="exampleInputEmail1" >
                                </div>
                            <div id="show"></div>
                            </div>
                        </div>
                    </div>
					
                    {{method_field('PUT')}}
					{{csrf_field()}}
                    <div class="am-form-group">
                        <div class="am-u-sm-9 am-u-sm-push-3">
                            <button class="am-btn am-btn-primary tpl-btn-bg-color-success btn btn-info" style="width: 50px;margin-top: 15px;margin-left: 50px">提交</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection