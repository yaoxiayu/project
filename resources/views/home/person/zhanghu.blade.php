@extends('home.person.index') @section('content')
<div class="uc-main fr">
    <div class="w-list" id="J-orders-wrap">
        <table class="order-list" mon="area=orderList">
            <tr>
                <th width="70" style="padding-left: 120px">用户名</th>
                <th width="70" style="padding-left: 80px">手机号</th>
                <th width="70" style="padding-left:80px">操作</th>
            </tr> 
        @if(Session::has('username'))    
            <tr style="height: 60px">
                <td class="font14 total-amount">{{Session::get('username')}}</td>
                <td>
                    <span class="font14">{{Session::get('phone')}}</span>
                </td>
                <td class="blank-10">
                    <a class="btn-s btn-org" href="/zhanghu/{{Session::get('id')}}/edit" data-id="2282279537" data-target="pay" mon="element=2282279537&element_type=nav">修改个人信息</
                </td>
            </tr>
        @endif
        </table>



                <div id="J-pager" class="uc-pager" data-p="1" data-pn="20" data-total="1" data-status="all" mon="area=pageNum"></div>
                </div>
                </div>
@endsection