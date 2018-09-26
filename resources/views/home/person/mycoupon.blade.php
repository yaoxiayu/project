@extends('home.person.index') @section('content')
<style>
  .stamp *{padding: 0;margin: 0;list-style:none;font-family:"Microsoft YaHei",'Source Code Pro', Menlo, Consolas, Monaco, monospace;}

  .stamp {
  width: 387px;
  height: 160px;
  padding: 0 10px;
  margin-bottom: 20px;
  margin-right: 10px;
  position: relative;
  overflow: hidden;
  }
  .stamp:before {
  content: '';
  position: absolute;
  top:0;
  bottom:0;
  left:10px;
  right:10px;

  z-index: -1;
  }
  .stamp:after {
  content: '';
  position: absolute;
  left: 10px;
  top: 10px;
  right: 10px;
  bottom: 10px;
  box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.5);
  z-index: -2;
  }

  .stamp i{
  position: absolute;
  left: 20%;
  top: 45px;
  height: 190px;
  width: 390px;
  background-color: rgba(255,255,255,.15);
  transform: rotate(-30deg);
  }
  .stamp .par{
  float: left;
  padding: 16px 15px;
  width: 220px;
  border-right:2px dashed rgba(255,255,255,.3);
  text-align: left;
  }
  .stamp .par p{color:#fff;font-size: 16px;
      line-height: 21px;}
  .stamp .par span{
  font-size: 50px;
  color:#fff;
  margin-right: 5px;
  line-height: 65px;
  }
  .stamp .par .sign{font-size: 34px;}
  .stamp .par sub{position: relative;top:-5px;
  color:rgba(255,255,255,.8);
  }
  .stamp .copy{
  display: inline-block;
  padding:21px 14px;
  width:100px;
  vertical-align: text-bottom;
  font-size: 30px;
  color:rgb(255,255,255);
  text-align: center;
  line-height: initial;
  }
  .stamp .copy p{font-size: 16px;margin-top: 15px;}
  .stamp01{
  background: #F39B00;
  background: radial-gradient(rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, 0) 5px, #F39B00 5px);
  background-size: 15px 15px;
  background-position: 9px 3px;
  }
  .stamp01:before{
  background-color:#F39B00;
  }
}
</style>
<div class="uc-main fr" style="width:800px;padding:0px">
  @foreach($coupon as $v)
  <div class="stamp stamp01" style="float:left">
    <div class="par"><p>温代生活服务</p><sub class="sign">￥</sub><span>{{$v['min']}}</span><sub>优惠券</sub><p>订单满{{$v['max']}}元</p></div>
    <div class="copy">副券<p>{{substr($v['created_at'],0,10)}}<br>{{date('Y-m-d',strtotime($v['created_at'])+ 3600*24*$v['time'])}}</p></div>
    <i></i>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    @if(time() > strtotime($v['created_at'])+ 3600*24*$v['time'])

        <script src="/js/jquery.min.js"></script>
        <script>
              var coupon_id = {{$v['id']}}
              $(window).ready(function(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url:'/coupon/del',
                    type:'post',
                    data:{coupon_id:coupon_id},
                })
              })
        </script>
    @endif
  </div>
  @endforeach
</div>
@endsection
