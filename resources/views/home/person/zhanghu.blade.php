@extends('home.person.index')

@section('content')
       <div class="uc-main fr">
                            <div class="w-list" id="J-orders-wrap">
                                <table class="order-list" mon="area=orderList">
                                    <tr>
                                        <th width="70">用户名</th>
                                        <th width="70">手机号</th>
                                        <th width="70">地址</th>                                 
                                        <th width="70">操作</th>                                 
                                    </tr>
                                    @foreach($user as $v)
                                    <tr style="height: 60px">
                                        <td class="font14 total-amount">{{$v['username']}}</td>
                                        <td>
                                            <span class="font14">{{$v['phone']}}</span>
                                        </td>
                                        <td>
                                            <span class="font14">{{$v['address']}}</span>
                                        </td>
                                    
                                        <td class="blank-10">
                                                <a class="btn-s btn-org" href="/zhanghu/{{$v['id']}}/edit" data-id="2282279537" data-target="pay" mon="element=2282279537&element_type=nav">用户修改</
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>



                <div id="J-pager" class="uc-pager" data-p="1" data-pn="20" data-total="1" data-status="all" mon="area=pageNum"></div>
                </div>
                </div>
@endsection