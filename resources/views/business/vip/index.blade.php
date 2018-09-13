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
					</tr>
				</thead>
				<tbody>
					<?php $a = array_rand(array_flip(['waring','success','error','info'])); ?>
          @foreach($vip as $k=>$val)
	  					<tr class="{{$a}}">
	  						<td>
	  							{{$k}}
	  						</td>
	  						<td>
	  							@foreach($user as $v)
										@if($k == $v['id'])
											{{$v['username']}}
										@endif
									@endforeach
	  						</td>
	  						<td>
									@foreach($user as $v)
										@if($k == $v['id'])
											{{$v['phone']}}
										@endif
									@endforeach
	  						</td>
	  						<td>
	               {{$val}}
	  						</td>
	  						<td>
	  									<button type="button" class="btn btn-success">会员</button>
	  						</td>
	  					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection
