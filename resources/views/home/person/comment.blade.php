@extends('home.person.index') @section('content')
<script type="text/javascript" src="/js/jquery.min.js"></script>

<div class="uc-main fr" >
   @foreach($comment as $v)
    <div style="width: 580px;float: right;margin-top:25px;">
        用户名 : <span class="name">{{$v->user->username}}</span>
        <div style="height:10px"></div>

         商品名称:<span>{{$v->shopping->name}}</span>
         <div style="height:10px"></div>

         <div class="goods-img fl">
          @if($v['values']==1) 🌹好评
             @elseif($v['values']==2) 😫中评
            @elseif($v['values']==3) 💣差评
             @endif
        </div>
        
        <div style="height:10px"></div><br>
        评论内容 : <span class="desc">{!!$v['content']!!}</span>
        <span class="font14">{{$v->shopping->shopuser->img}}</span>
        
        <div class="date" style="float: right;margin-top:25px;"><span>{{$v->created_at}}</span></div>
       
    </div>
 <div style="width: 80px;height: 80px;float: left;margin-top: 25px;"><img src="/home/static/images/icon_4e372f0.png"></div>

    @endforeach
</div>

<style>
.am-cf {
    float: right;
}

       <div class="uc-main fr">
                            <div class="w-list" id="J-orders-wrap">
                                <table class="order-list" mon="area=orderList">
                                    <tr>
                                        <th width="70">商品名称</th>
                                        <th width="70">商家名称</th>
                                        <th width="70">评论分值</th>                                 
                                        <th width="120">评论内容</th>
                                        <th width="70">评论人</th>
                                        <th style="padding-left:80px">操作</th>
                                    </tr>
                                    <tr>
                                        @foreach($comment as $v)

                                        <td class="font14 total-amount">{{$v->shopping->name}}</td>
                                        <td>
                                            <span class="font14">{{$v->shopping->shopuser->username}}</span>
                                        </td>
                                        <td>
                                            <div class="goods-img fl">
                                                @if($v['values']==1) 🌹好评
                                                @elseif($v['values']==2) 😫中评
                                                @elseif($v['values']==3) 💣差评
                                                @endif
                                            </div>
                                        </td>
                                        @endforeach
                                    
                                        


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
</style>
<div class="am-cf">
    <div class="am-fr">
        {{$comment->appends(request()->all())->links()}}
    </div>
</div>
@endsection