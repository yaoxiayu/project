@extends('layouts.shangjia.shangjia')
@section('content')
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<h1 class="text-info">
				会员管理
			</h1>
			<form class="form-search" action="/shangjia" method="get">
				<input class="input-medium search-query" name="keywords" type="text" value="{{request()->keywords}}">
				<button class="btn">查找</button>
			</form>
			<table class="table table-hover">
				<thead>
					<tr>
						<th>会员ID</th>
						<th>用户名</th>
						<th>手机号</th>
						<th>订单数量</th>
						<th>状态</th>
						<th>操作</th>
					</tr>
				</thead>
				<tbody>
					<?php $a = array_rand(array_flip(['waring','success','error','info'])); ?>
          @foreach($order as $v)
	  					<tr class="{{$a}}">
	  						<td>
	  							{{$v['user_id']}}
	  						</td>
	  						<td>
	  							{{$v->user->username}}
	  						</td>
	  						<td>
	  							{{$v->user->phone}}
	  						</td>
	  						<td>
	                1
	  						</td>
	  						<td>
	  									<button type="button" class="btn btn-danger">会员</button>
	  						</td>
	  						<td>
	                <button type="button" class="btn btn-success" id="start">移除会员</button>
									<script type="text/javascript" src="/js/jquery.min.js"></script>
									<script type="text/javascript">
											$('#start').click(function()
											{
												location.href="/order/gai/{{$v['id']}}";
											})
									</script>
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
								{{$order->appends(request()->all())->links()}}
						</div>
				</div>
		</div>
	</div>
</div>
@endsection
