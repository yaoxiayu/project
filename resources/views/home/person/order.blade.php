@extends('home.person.index')

@section('content')
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
                                </table>
                <div id="J-pager" class="uc-pager" data-p="1" data-pn="20" data-total="1" data-status="all" mon="area=pageNum"></div>
                </div>
                </div>
@endsection