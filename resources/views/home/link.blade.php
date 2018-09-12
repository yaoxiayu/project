@include('layouts._daohang')

<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<h3  style="padding-left:250px;color: #666">
				友情链接
			</h3>
			<hr style="width: 1200px">
			<div style="padding-left:250px;width: 1200px">
				@foreach($link as $v)
				<p style="float: left;width:150px">
					<a href="{{$v['url']}}">{{$v['name']}}</a>
				</p>
				@endforeach
			</div>
		</div>
	</div>
</div>
@include('layouts._foot')