@extends('layouts.shangjia.shangjia')
@section('content')
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<h1 class="text-info">
				评论列表
			</h1>

			<table class="table table-hover">
				<thead>
					<tr>
						<th>评论ID</th>
						<th>用户名</th>
						<th>商品名</th>
						<th>评论内容</th>
						<th>评论类别</th>
						<th>评论时间</th>
					</tr>
				</thead>
				<tbody>
					<?php $a = array_rand(array_flip(['waring','success','error','info'])); ?>
          @foreach($comment as $v)
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
                  <div class="container-fluid">
                     <div class="row-fluid">
                       <div class="span12">
                          <a id="modal-486976" href="#modal-container-486976" role="button" class="btn" data-toggle="modal">详情</a>

                         <div id="modal-container-486976" class="modal hide fade show" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                             <h3 id="myModalLabel">
                               评论内容
                             </h3>
                           </div>
                           <div class="modal-body">
                             {{$v['content']}}
                           </div>
                           <div class="modal-footer">
                              <button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
                           </div>
                         </div>
                       </div>
                     </div>
                    </div>
	  						</td>
	  						<td>
	  								@if($v['values']==1)
                      🌹好评
                    @elseif($v['values']==2)
                      😫中评
                    @elseif($v['values']==3)
                      💣差评
                    @endif
	  						</td>
                <td>
	  								{{$v['updated_at']}}
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
								{{$comment->appends(request()->all())->links()}}
						</div>
				</div>
		</div>
	</div>
</div>
@endsection
