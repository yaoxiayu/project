@extends('layouts.shangjia.shangjia')
@section('content')
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<h1 class="text-info">
				已成交订单
			</h1>
			<form class="form-search" action="/shangjia" method="get">
				<input class="input-medium search-query" name="keywords" type="text" value="{{request()->keywords}}">
				<button class="btn">查找</button>
			</form>
			<table class="table table-hover">
				<thead>
					<tr>
						<th>订单ID</th>
						<th>用户名</th>
						<th>商品</th>
						<th>价格</th>
						<th>数量</th>
						<th>状态</th>
					</tr>
				</thead>
				<tbody>
					<?php $a = array_rand(array_flip(['waring','success','error','info'])); ?>
          @foreach($order as $v)
						@if(in_array($v['shopping_id'],$shop)==1)
	  					<tr class="{{$a}}">
	  						<td>
	  							{{$v['id']}}
	  						</td>
	  						<td>
	  							{{$v->user->username}}
	  						</td>
	  						<td>
	  							{{$v->shopping->name}}
	  						</td>
	  						<td>
	                ¥{{$v['price']}}
	  						</td>
	  						<td>
	                {{$v['counts']}}
	  						</td>
	  						<td>
	                @if($v['state'] == 2)
	  									<button type="button" class="btn btn-danger">未成交</button>
									@elseif($v['state'] == 1)
											<button type="button" class="btn btn-success">已成交</button>
									@endif
	  						</td>
	  					</tr>
							@endif
					@endforeach
				</tbody>
			</table>

		</div>
	</div>
</div>
@endsection
