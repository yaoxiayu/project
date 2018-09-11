@extends('home.person.index')

@section('content')
<script type="text/javascript" src="/js/jquery.min.js"></script>
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
                                        @if(Session::get('id') == $v['user_id'])
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

                                        <td class="goods-info left">
                                            <div class="goods-img fl">
                                               <span class="font14">{!!$v['content']!!}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="goods-name fl">
                                                <span class="font14">{{$v->user->username}}</span>
                                            </div>
                                        </td>
                                        
                                        
                    
                                        <td class="blank-10">
                                             <p class="del"><button id="del{{$v['id']}}" class="btn btn-danger">删除评价</button></p>
                                            <script>
                                                $('#del{{$v['id']}}').click(function()
                                                {
                                                    if(confirm("确定要删除吗")){
                                                        location.href="/hcomment/delete/{{$v['id']}}";
                                                     }
                                                })
                                            </script>
                                        </td>
                                       
                                    </tr>
                                    @endif
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
                        {{$comment->appends(request()->all())->links()}}
                    </div>
                </div>
@endsection