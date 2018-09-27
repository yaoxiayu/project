@include('layouts._daohang')
<div class="re-mid-content" style="padding:200px;margin-left:150px;padding-top: 50px;">
        <div class="content-header clearfix" style="margin-top: 0px;">
            <h3>
                全部商家
            </h3>
            <ul class="reco-words">
                <li class="link-all">
                    
                </li>
            </ul>
        </div>
        <ul class="item-list">
    	@foreach($shopuser as $v)
            <li class="item yule-item clearfix">
                <a class="yule-content" href="/{{$v['id']}}.html" target="_blank">
				    <img class="yule-image" src="{{$v['pic']}}"/>
				    <div class="yule-title">
				        {{$v['name']}}
				    </div>
    		<object>
		        <a class="yule-ugc" href="https://www.nuomi.com/shop/comment/87933569" target="_blank">

		        </a>
            </object>
                <div class="shop-info">
                    <span>
			            <span class="info-break">
			                |
			            </span>
                    </span>
                    <span class="has-sale">
			            {{$v['intro']}}
			        </span>
                </div>
                <div class="sale-info">
                    人均{{$v['renprice']}}
                </div>
                </a>
            </li>
    	@endforeach
    </ul>

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
        <div class="am-cf" style="float:right;">
            <div class="am-fr">
                {{ $shopuser->appends(request()->all())->links() }}
            </div>
        </div>
    </div>
</div>
@include('layouts._foot')
