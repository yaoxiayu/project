@extends('layouts.shangjia.shangjia')
@section('content')
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<h1 class="text-info">
				商品列表
			</h1>
			<form class="form-search" action="/business/shopping/index" method="get">
				<input class="input-medium search-query" name="keywords" type="text" value="{{request()->keywords}}">
				<button class="btn">查找</button>
			</form>
			<table class="table table-hover">
				<thead>
					<tr>
						<th>商品ID</th>
						<th>商品名</th>
						<th>商品图片</th>
						<th>价格</th>
						<th>商家</th>
						<th>商品详情</th>
						<th>上架时间</th>
						<th>操作</th>
					</tr>
				</thead>
				<tbody>
					<?php $a = array_rand(array_flip(['waring','success','error','info'])); ?>
          @foreach($shopping as $v)
	  					<tr class="{{$a}}">
	  						<td>
	  							{{$v['id']}}
	  						</td>
	  						<td>
	  							{{$v['name']}}
	  						</td>
	  						<td>
	  							<img src="{{$v['img']}}" alt="" width="80" height="80">
	  						</td>
	  						<td>
	                ¥{{$v['price']}}
	  						</td>
                <td>
                  {{\Session::get('username')}}
                </td>
	  						<td>
	                请在编辑页面查看
	  						</td>
	  						<td>
	                {{$v['created_at']}}
	  						</td>
                <td>
                  <button type="button" class="btn btn-danger">删除</button>
                  <button type="button" class="btn btn-success">编辑</button>
                </td>
	  					</tr>
					@endforeach
				</tbody>
			</table>
      <style>
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
      <div class="am-cf" style="float:right;">
          <div class="am-fr">
              {{$shopping->appends(request()->all())->links()}}
          </div>
      </div>
		</div>
	</div>
</div>
@endsection
