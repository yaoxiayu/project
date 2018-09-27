@include('layouts._daohang')
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>购物车</title>
    <link href="/css/demo.css" rel="stylesheet" media="all" />
    <link rel="stylesheet" href="/css/reset.css">
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/carts.css">
    <script type="text/javascript" src="/home/gstatic/js/jquery.min.js"></script>
    <script type="text/javascript" src="/home/gstatic/js/jquery.qrcode.min.js"></script>
    <style>
      .stamp *{padding: 0;margin: 0;list-style:none;font-family:"Microsoft YaHei",'Source Code Pro', Menlo, Consolas, Monaco, monospace;}

      .stamp {
      width: 200px;
      height: 100px;
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
      .stamp .par .sign{font-size: 30px;}
      .stamp .par sub{position: relative;top:-5px;
      color:rgba(255,255,255,.8);
      }
      .stamp01{
      background: #F39B00;
      background: radial-gradient(rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, 0) 5px, #F39B00 5px);
      background-size: 15px 15px;
      background-position: 9px 3px;
      }
      .stamp01:before{
      background-color:#F39B00;
      }
      .bg-ddd{
        background:#ddd;
      }
    }
    </style>
    <script type="text/javascript">
    $(document).ready(function() {
        function fixHeight() {
            var headerHeight = $("#switcher").height();
            $("#iframe").attr("height", $(window).height() - 54 + "px");
        }
        $(window).resize(function() {
            fixHeight();
        }).resize();

        $('.icon-monitor').addClass('active');

        $(".icon-mobile-3").click(function() {
            $("#by").css("overflow-y", "auto");
            $('#iframe-wrap').removeClass().addClass('mobile-width-3');
            $('.icon-tablet,.icon-mobile-1,.icon-monitor,.icon-mobile-2,.icon-mobile-3').removeClass('active');
            $(this).addClass('active');
            return false;
        });

        $(".icon-mobile-2").click(function() {
            $("#by").css("overflow-y", "auto");
            $('#iframe-wrap').removeClass().addClass('mobile-width-2');
            $('.icon-tablet,.icon-mobile-1,.icon-monitor,.icon-mobile-2,.icon-mobile-3').removeClass('active');
            $(this).addClass('active');
            return false;
        });

        $(".icon-mobile-1").click(function() {
            $("#by").css("overflow-y", "auto");
            $('#iframe-wrap').removeClass().addClass('mobile-width');
            $('.icon-tablet,.icon-mobile,.icon-monitor,.icon-mobile-2,.icon-mobile-3').removeClass('active');
            $(this).addClass('active');
            return false;
        });

        $(".icon-tablet").click(function() {
            $("#by").css("overflow-y", "auto");
            $('#iframe-wrap').removeClass().addClass('tablet-width');
            $('.icon-tablet,.icon-mobile-1,.icon-monitor,.icon-mobile-2,.icon-mobile-3').removeClass('active');
            $(this).addClass('active');
            return false;
        });

        $(".icon-monitor").click(function() {
            $("#by").css("overflow-y", "hidden");
            $('#iframe-wrap').removeClass().addClass('full-width');
            $('.icon-tablet,.icon-mobile-1,.icon-monitor,.icon-mobile-2,.icon-mobile-3').removeClass('active');
            $(this).addClass('active');
            return false;
        });
    });
    </script>
    <script type="text/javascript">
    function Responsive($a) {
        if ($a == true) $("#Device").css("opacity", "100");
        if ($a == false) $("#Device").css("opacity", "0");
        $('#iframe-wrap').removeClass().addClass('full-width');
        $('.icon-tablet,.icon-mobile-1,.icon-monitor,.icon-mobile-2,.icon-mobile-3').removeClass('active');
        $(this).addClass('active');
        return false;
    };
    </script>

</head>

<body id="by">

    <div id="iframe-wrap">

        <section class="cartMain">
            <div class="cartMain_hd">
                <ul class="order_lists cartTop">
                    <li class="list_chk">
                        <!--所有商品全选-->
                        <input type="checkbox" id="all" class="whole_check">
                        <label for="all"></label>
                        全选
                    </li>
                    <li class="list_con">商品信息</li>
                    <li class="list_info">商品参数</li>
                    <li class="list_price" style="margin-left:80px">单价</li>
                    <li class="list_amount">数量</li>
                    <li class="list_sum" style="margin-left:80px">金额</li>
                </ul>
            </div>
            <div class="cartBox">

                <div class="order_content">


                    <ul class="order_lists">
                        <li class="list_chk">
                            <input type="checkbox" id="{{$shopping['id']}}" class="son_check">
                            <label for="{{$shopping['id']}}"></label>
                        </li>
                        <li class="list_con">
                            <div class="list_img" style="margin-left: 40px"><a href="javascript:;"><img src="{{$shopping['img']}}" alt="" width="50px" height="70px"></a></div>
                            <div class="list_text"><a href="javascript:;">{{$shopping['name']}}</a></div>
                        </li>
                        <li class="list_info">
                            <p>{!!$shopping['content']!!}</p>
                        </li>
                        <li class="list_price" style="margin-left:80px">
                            <p class="price">￥{{$shopping['price']}}</p>
                        </li>
                        <li class="list_amount">
                            <div class="amount_box">
                                <a href="javascript:;" class="reduce reSty">-</a>
                                <input type="text" value="{{$counts}}" class="sum" style="height: 22px">
                                <a href="javascript:;" class="plus">+</a>
                            </div>
                        </li>
                        <li class="list_sum">
                            <p class="sum_price" style="margin-left:80px">¥{{($shopping['price'])*($counts)}}</p>
                        </li>

                    </ul>
                    <ul class="order_lists">
                      <li class="list_chk">
                        <h5>优惠券:</h5>
                      </li>
                      @foreach($coupon as $v)
                      <li id="sp{{$v['id']}}" min="{{$v['min']}}" max="{{$v['max']}}">
                        <div class="stamp stamp01" style="float:left">
                          <div class="par"><p>温代生活服务</p><sub class="sign">￥</sub><span>{{$v['min']}}</span><sub>优惠券</sub><p>订单满{{$v['max']}}元</p></div>

                          <i></i>

                          <meta name="csrf-token" content="{{ csrf_token() }}">
                      </li>
                      <script>
                            $('#sp{{$v['id']}}').click(function(){
                                $(this).children('.stamp').addClass('bg-ddd');
                                $(this).siblings().children('.stamp').removeClass('bg-ddd');
                                var min = $(this).attr('min');
                                var max = $(this).attr('max');
                                $('h5').attr('yhq','{{$v['id']}}');
                                var sum = $('.sum_price').text().substring(1,20);
                                if(sum>=max){
                                  var zhi = '¥'+(sum-min);
                                  $('.sum_price').text(zhi);
                                }else{
                                  $(this).children('.stamp').removeClass('bg-ddd');
                                  alert('不支持使用该优惠券');
                                }

                            })


                      </script>
                      @endforeach

                    </ul>
                </div>


            </div>
            <!--底部-->


            <div class="bar-wrapper">
                <div class="bar-right">
                    <div class="piece">已选商品<strong class="piece_num">0</strong>件</div>
                    <div class="totalMoney">共计: <strong class="total_text">0.00</strong></div>
                    <div class="calBtn"><a id="mai">结算</a></div>
                </div>
            </div>
            <script>
                $('#mai').click(function(){
                  //订单金额
                  var jiesuan =$('.total_text').text().substring(1,20);
                  //商品数量
                  var counts =$('.piece_num').text();
                  //优惠券
                  var yhq = $('h5').attr('yhq');
                  window.location.href="/jiesuan/{{$shopping['id']}}/{{Session::get('id')}}/"+counts+'/'+jiesuan+'/'+yhq;
                })
            </script>

        </section>
        <section class="model_bg"></section>

        <script src="/js/jquery.min.js"></script>
        <script src="/js/carts.js"></script>
    </div>
</body>

</html>
