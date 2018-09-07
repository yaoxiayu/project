@extends('home.person.index')

@section('content')
       <div class="uc-main fr">
                            <div class="w-list" id="J-orders-wrap">
                                <table class="order-list" mon="area=orderList">
                                    <tr>                                      
                                        <th width="70">评论内容</th>
                                        <th width="260">评论人</th>
                                        <th width="100">商家名称</th>
                                        <th width="120">商品名称</th>
                                        <th>操作</th>
                                    </tr>

                                    <tr>
                                        @foreach($comment as $v)
                                        <td class="goods-info left">
                                            <div class="goods-img fl">
                                               <span class="font14">{{$v['content']}}</span>
                                            </div>
                                            <div class="goods-name fl">
                                                <span class="font14">{{$v->user->username}}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="font14">{{$v->shopping->shopuser->}}</span>
                                        </td>
                                        <td class="font14 total-amount">{{$v['counts']}}</td>
                                        <td style="margin-top: 0px">
                                            <!-- {{$v['state']}} -->
                                            @if($v['state']==1) 未使用 @elseif($v['state']==2) 已使用 @endif
                                        </td>
                                        <td class="blank-10">
                                            <a class="btn-s btn-org" href="javascript:;" data-id="2282279537" data-target="pay" mon="element=2282279537&element_type=nav">订单退款</a>
                                            <a class="link" href="/person/delete/{{$v['id']}}" data-id="2282279537" data-target="delete" mon="element=2282279537&element_type=nav">删除订单</a>
                                        </td>
                                    </tr>
                                </table>



                <div id="J-pager" class="uc-pager" data-p="1" data-pn="20" data-total="1" data-status="all" mon="area=pageNum"></div>
                </div>
                </div>
@endsection