@extends('home.person.index')

@section('content')
<script type="text/javascript" src="/js/jquery.min.js"></script>
         <div class="uc-main fr">
                            <div class="w-list" id="J-orders-wrap">
                                <table class="order-list" mon="area=orderList">
                                    <tr>
                                        <th width="260">商品信息</th>
                                        <th width="70">单价</th>
                                        <th width="100">数量</th>
                                        <th width="120">状态</th>
                                        <th>操作</th>
                                    </tr>
                                    <tr>
                                    @foreach($order as $v)
                                        <td class="goods-info left">
                                            <div class="goods-img fl">
                                                <img src="{{$v->shopping->img}}" title="{{$v->shopping->name}}" />
                                            </div>
                                            <div class="goods-name fl">
                                                <h6>
                                                    <a href="/home/{{$v['shopping_id']}}.html" target="_blank"><p style="margin-top: 5px">{{$v->shopping->content}}</p></a>
                                                </h6>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="font14">{{$v['price']}}</span>
                                        </td>
                                        <td class="font14 total-amount">{{$v['counts']}}</td>
                                        <td style="margin-top: 0px">
                                            @if($v['state']==1) 未使用 @elseif($v['state']==2) 已使用 @endif
                                        </td>
                                        <td class="blank-10">
                                            <p class="del"><button id="del{{$v['id']}}" class="btn btn-danger">删除订单</button></p>
                                            <script>
                                                $('#del{{$v['id']}}').click(function()
                                                {
                                                    if(confirm("确定要删除吗")){
                                                        location.href="/order/delete/{{$v['id']}}";
                                                     }
                                                })
                                            </script>
                                        </td>
                                    </tr>
                                    @endforeach
                                   
                                </table>
                                <div id="J-pager" class="uc-pager" data-p="1" data-pn="20" data-total="1" data-status="all" mon="area=pageNum"></div>
                            </div>
                        </div>
    
                <style>
                    .am-cf{
                        float: right;
                    }
                    .pagination{
                        padding-left: 0;
                        margin: 1.5rem 0;
                        list-style: none;
                        color: #999;
                        text-align: left;
                        padding: 0;
                    }

                    .pagination li{
                        display: inline-block;
                    }

                    .pagination li a, .pagination li span{
                        color: #23abf0;
                        border-radius: 3px;
                        padding: 6px 12px;
                        position: relative;
                        display: block;
                        text-decoration: none;
                        line-height: 1.2;
                        background-color: #fff;
                        border: 1px solid #ddd;
                        border-radius: 0;
                        margin-bottom: 5px;
                        margin-right: 5px;
                    }

                    .pagination .active span{
                        color: #23abf0;
                        border-radius: 3px;
                        padding: 6px 12px;
                        position: relative;
                        display: block;
                        text-decoration: none;
                        line-height: 1.2;
                        background-color: #fff;
                        border: 1px solid #ddd;
                        border-radius: 0;
                        margin-bottom: 5px;
                        margin-right: 5px;
                        background: #23abf0;
                        color: #fff;
                        border: 1px solid #23abf0;
                        padding: 6px 12px;
                    }
                </style>
                <div class="am-cf">
                    <div class="am-fr">
                        {{$order->appends(request()->all())->links()}}
                    </div>
                </div>
@endsection