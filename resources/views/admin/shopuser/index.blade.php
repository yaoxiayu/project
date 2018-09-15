@extends('layouts.index') @section('content')
<hr> @include('layouts._head')
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> 商家列表
        </div>
    </div>
    @include('layouts._session')
    <div class="tpl-block">
        <div class="am-g">
            <div class="am-u-sm-12 am-u-md-6">
                <div class="am-btn-toolbar">
                    <div class="am-btn-group am-btn-group-xs">
                        <a href="/shopuser/create" type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</a>
                        <button type="button" class="am-btn am-btn-default am-btn-danger"><span class="am-icon-trash-o"></span> 删除</button>
                    </div>
                </div>
            </div>
            <div class="am-u-sm-12 am-u-md-3">
                <form action="shopuser" method="get">
                    <div class="am-input-group am-input-group-sm">
                        <input type="text" name="keywords" class="am-form-field" value="{{request()->keywords}}">
                        <span class="am-input-group-btn">
                        <button class="am-btn  am-btn-default am-btn-success tpl-am-btn-success am-icon-search"></button>
                      </span>
                    </div>
                </form>
            </div>
        </div>
        <div class="am-g">
            <div class="am-u-sm-12">
                <table class="am-table am-table-striped am-table-hover table-main">
                    <thead>
                        <tr>
                            <th class="table-check">
                                <input type="checkbox" class="tpl-table-fz-check">
                            </th>
                            <th class="table-id">ID</th>
                            <th class="table-title">店铺名称</th>
                            <th class="table-title">商家用户名</th>
                            <th class="table-title">商家行业</th>
                            <th class="table-title">商家头像</th>
                            <th class="table-title">人均消费</th>
                            <th class="table-title">商家手机</th>
                            <th class="table-title">商家地址</th>
                            <th class="table-set">操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($shopuser as $v)
                        <tr>
                            <td>
                                <input type="checkbox">
                            </td>
                            <td>{{$v['id']}}</td>
                            <td class="am-hide-sm-only">{{$v['name']}}</td>
                            <td class="am-hide-sm-only">{{$v['username']}}</td>
                            <td class="am-hide-sm-only">{{$v->industry['name']}}</td>
                            <td><img src="{{$v['pic']}}" width="80" alt=""></td>
                            <td class="am-hide-sm-only">{{$v['renprice']}}</td>
                            <td class="am-hide-sm-only">{{$v['phone']}}</td>
                            <td class="am-hide-sm-only">{{$v['address']}}</td>
                            <td>
                                <div class="am-btn-toolbar">
                                    <div class="am-btn-group am-btn-group-xs">
                                        <a href="/shopuser/{{$v['id']}}/edit" class="am-btn am-btn-default am-btn-xs am-text-secondary" style="float:left"><span class="am-icon-pencil-square-o"></span> 编辑</a>
                                        <form action="/shopuser/{{$v['id']}}" method="post" style="float:left">
                                            <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                                            {{csrf_field()}} {{method_field('DELETE')}}
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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
                </style>
                <div class="am-cf">
                    <div class="am-fr">
                        {{ $shopuser->appends(request()->all())->links() }}
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
    <div class="tpl-alert"></div>
</div>
@endsection