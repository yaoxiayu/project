@extends('home.person.index')
@section('content')
<script type="text/javascript" src="/js/jquery.min.js"></script>
@foreach($comment as $v)
<div class="uc-main fr" >

    <div style="width: 580px;float: right;margin-top:25px;color: #ff4883">
        用户名 : <span class="name" style="color: black">{{$v->user->username}}</span>
        <div style="height:10px"></div>


         商品名称:<span style="color: black">{{$v->shopping->name}}</span>
         <div style="height:10px"></div>


         <div class="goods-img fl" style="color: #ff4883;">
            评论分值：<span style="color: black">
          @if($v['values']==1) 🌹好评
             @elseif($v['values']==2) 😫中评
            @elseif($v['values']==3) 💣差评
             @endif
            </span>
        </div>

        <div style="height:10px"></div><br>
        评论内容 : <span class="desc" style="color: black">{!!$v['content']!!}</span>
        <span class="font14">{{$v->shopping->shopuser->img}}</span>

        <div class="date" style="float: right;margin-top:25px;"><span>{{$v->created_at}}</span></div>

    </div>
 <div style="width: 80px;height: 80px;float: left;margin-top: 25px;"><img src="/home/static/images/icon_4e372f0.png"></div>
</div>
    @endforeach




<style>
.pagination {
    padding-left: 0;
    margin: 1.5rem 0;
    list-style: none;
    color: #999;
    text-align: left;
    padding: 0;
}


.pagination li {
    display: inline-block;
}


.pagination li a,
.pagination li span {
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


.pagination .active span {
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
.am-cf {
    float: right;
}


</style>
<div class="am-cf">
    <div class="am-fr">
        {{$comment->appends(request()->all())->links()}}
    </div>
</div>
@endsection
