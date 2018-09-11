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
    <!--[if IE]>
    <style type="text/css">
        li.remove_frame a {
            padding-top: 5px;
            background-position: 0px -3px;
        }
    </style>
    <![endif]-->
    <script type="text/javascript" src="/home/gstatic/js/jquery.min.js"></script>
    <script type="text/javascript" src="/home/gstatic/js/jquery.qrcode.min.js"></script>
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
                    <li class="list_price">单价</li>
                    <li class="list_amount">数量</li>
                    <li class="list_sum">金额</li>
                    <li class="list_op">操作</li>
                </ul>
            </div>
            <div class="cartBox">
                
                <div class="order_content">

                    @foreach($order as $v)
                    @if(Session::get('id') == $v['user_id'])
                    <ul class="order_lists">
                        <li class="list_chk">
                            <input type="checkbox" id="{{$v['id']}}" class="son_check">
                            <label for="{{$v['id']}}"></label>
                        </li>
                        <li class="list_con">
                            <div class="list_img" style="margin-left: 40px"><a href="javascript:;"><img src="{{$v->shopping->img}}" alt="" width="50px" height="70px"></a></div>
                            <div class="list_text"><a href="javascript:;">{{$v->shopping->name}}</a></div>
                        </li>
                        <li class="list_info">
                            <p>{!!$v->shopping->content!!}</p>
                        </li>
                        <li class="list_price">
                            <p class="price">￥{{$v->shopping->price}}</p>
                        </li>
                        <li class="list_amount">
                            <div class="amount_box">
                                <a href="javascript:;" class="reduce reSty">-</a>
                                <input type="text" value="{{$v['counts']}}" class="sum" style="height: 22px">
                                <a href="javascript:;" class="plus">+</a>
                            </div>
                        </li>
                        <li class="list_sum">
                            <p class="sum_price">￥{{($v->shopping->price)*($v['counts'])}}</p>
                        </li>
                        <li class="list_op">
                            <p class="del"><button id="del{{$v['id']}}" class="btn btn-danger">移除商品</button></p>
                        
                            <script>
                                $('#del{{$v['id']}}').click(function()
                                {
                                    if(confirm("确定要删除数据吗")){
                                        location.href="/order/delete/{{$v['id']}}";
                                     }
                                })
                            </script>
                        </li>
                    </ul>
                    @endif
                    @endforeach
                </div>
            </div>
            <!--底部-->
            <div class="bar-wrapper">
                <div class="bar-right">
                    <div class="piece">已选商品<strong class="piece_num">0</strong>件</div>
                    <div class="totalMoney">共计: <strong class="total_text">0.00</strong></div>
                    <div class="calBtn"><a href="javascript:;">结算</a></div>
                </div>
            </div>
        </section>
        <section class="model_bg"></section>
       
        <script src="/js/jquery.min.js"></script>
        <script src="/js/carts.js"></script>
    </div>
    <!--百度流量统计代码-->
    <!-- <script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?382f81c966395258f239157654081890";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
    </script> -->
</body>

</html>