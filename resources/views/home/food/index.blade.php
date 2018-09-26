@include('layouts._daohang')
<div class="nav-bar-header nav-area-index static-hook-real static-hook-id-3">
    <div class="nav-inner flexible clearfix">
        <ul class="nav-list clearfix" mon="area=nav&element_type=nav" id="j-catg">
            <li class="nav-item cate-row all-cate deep"><span class="item "><a href="/">@foreach($industry as $v) @if($id == $v['id']) {{$v['name']}}@endif @endforeach分类</a></span>
                <div class="" id="j-catg-list">
                    <div catg-id="326" class="level-item">
                        <div class="first-level j-catg-row " data-index="6" mon="area=catg_326">
                        </div>
                        <div class="second-level with-min" mon="area=catg_hover_326">
                            <div class="section clearfix">
                                <div class="section-item clearfix no-top-border ">
                                </div>
                                <div class="section-item clearfix ">
                                </div>
                                <div class="section-item clearfix ">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div catg-id="955" class="level-item">
                        <div class="first-level j-catg-row first-level-last " data-index="7" mon="area=catg_955">
                        </div>
                        <div class="second-level with-min" mon="area=catg_hover_955">
                            <div class="section clearfix">
                                <div class="section-item clearfix">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <li class="nav-item nav-item-first">
                    <a class="item first new-item" href="/" mon="element=首页" target="_top">
                       
                    </a>
                </li>
                <li class="nav-item">
                    <a class="item new-item " href="/hotel/1" mon="element=酒店" target="_top">

                      
                    </a>
                </li>
               
                
                <li class="nav-item">
                    <a class="item new-item" href="/marry" mon="element=结婚" target="_top">

                    </a>
                </li>
                <li class="nav-item">
                    <a class="item new-item" href="/food" mon="element=结婚" target="_top">

                    </a>
                </li>
                <li class="nav-item">
                    <a class="item new-item" href="http://waimai.baidu.com/?utm_source=bainuo&utm_medium=nav&utm_content=toububiaoqian&utm_term=default&utm_campaign=beijing&cid=PC_%E5%93%81%E7%89%8C%E6%8E%A8%E5%B9%BF_940766" mon="element=外卖" target="_blank">
                  
                    </a>
                </li>
                <pre></pre>
                @section('content')
                <div class="page-body page-body-channel">
                    <div class="page-body-container clearfix">
                        <div class="page-body-left">
                            <div class="filter-bg">
                                <div alog-alias="bainuo-channel-filter-wrap" alog-group="bainuo-channel-filter-wrap" class="filter-wrap">
                                    <div class="w-filter-ab-test" style="position:relative">
                                        <div class="filter-breadcrumb">
                                        </div>
                                        <img class="page-body-right-img " src="/home/static/picture/search_active_ba4697e.png" width="208" / style="position:absolute;right:20px;height: 120px">
                                        <img class="page-body-right-img " src="/home/static/picture/search_active_ba4697e.png" width="208" / style="position:absolute;right:20px;top:150px;height: 120px">
                                        <div class="filter-wrapper" style="margin-bottom: 50px">
                                            <div class="normal-filter ">
                                                <div alog-alias="bainuo-filter-section" alog-group="bainuo-filter-section" class="w-filter-normal-ab filter-list-ab clearfix" mon="area=filterCatg">
                                                    <h5 class="filter-label-ab">
                                                        分类
                                                    </h5>
                                                    <span class="filter-all-ab">
                                                    <a class="w-filter-item-ab item-all-auto-ab" href="/food/{{$id}}?name=0" mon="element=0&element_type=filter&position=1">
                                                        <span class="item-content filter-active-all-ab ">
                                                            全部
                                                        </span>
                                                    </a>
                                                    </span>
                                                    <style>
                                                    .tag {
                                                        width: 100px;
                                                        height: 20px;
                                                        overflow: hidden;
                                                        color: #444;
                                                        margin: 0px auto;
                                                        float: left;
                                                        z-index: 3
                                                    }

                                                    .yellow {
                                                        background-color: yellow;
                                                    }
                                                    </style>

                                                    <div class="j-filter-items-wrap-ab filter-items-wrap-ab">
                                                        <div class="j-filter-items-ab filter-items-ab filter-content-ab">
                                                            @foreach($tag as $v)
                                                            <a class="w-filter-item-ab " mon="element=1000002&element_type=filter&position=1">
                                                                <div class="tag" id="sou{{$v['id']}}" @if($v[ 'id']==$industry_id) style="color:#ff318c" @endif>
                                                                    <b>{{$v['name']}}</b>
                                                                    <form action="/food/{{$id}}" method="get">
                                                                        <div class="am-input-group am-input-group-sm yellow" style="display: none;z-index: 1;">
                                                                            <input type="text" name="name" class="am-form-field" value="{{$v['id']}}" style="display:none;">
                                                                            <span class="am-input-group-btn">
                                                                            <button class="am-btn  am-btn-default am-btn-success tpl-am-btn-success am-icon-search" style="display:none" id="suo{{$v['id']}}"></button>
                                                                          </span>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </a>
                                                            <script src="/js/jquery.min.js"></script>
                                                            <script>
                                                            $('#sou{{$v['
                                                                id ']}}').click(function() {
                                                                $('#suo{{$v['
                                                                    id ']}}').trigger('click');
                                                            })
                                                            </script>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <a class="show-more j-more-button" mon="element=showMore">
                                                        <span class="j-more-or-less more-or-less">
                                                            更多
                                                        </span>
                                                        <span class="triggle">
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="district-filter ">
                                                <div alog-alias="bainuo-filter-district" alog-group="bainuo-filter-district" class="w-district-ab filter-list-ab">
                                                    <h5 class="filter-label-ab">
                                                        区域
                                                    </h5>
                                                    <div class="filter-all-ab" mon="area=filterAreaAll">
                                                        <a class="w-filter-item-ab item-all-auto-ab" href="javascript:;" mon="element=0&element_type=filter&position=1">
                                                            <span class="item-content filter-active-all-ab ">
                                                                全部
                                                         </span>
                                                        </a>
                                                    </div>



                                                    <div class="district-tab">
                                                        <span class="tab-item j-district-tab-li j-district-tab-li1 selected" index="1">
                                                            <span class="tab-item-wrap">
                                                                行政区
                                                                <span class="markup">

                                                                </span>
                                                        </span>
                                                        </span>
                                                    </div>
                                                    <div class="district-cont-wrap j-district-cont j-district-cont1 filterDistrict selected" index="1" mon="area=filterDistrict" style="clear: both;">
                                                        <div class="district-list-ab">
                                                            <a class="w-filter-item-ab " href="//bj.nuomi.com/326/307" mon="element=307&element_type=filter&position=1">
                                                                <span class="item-content ">
                                                                    朝阳区
                                                                </span>
                                                            </a>
                                                            <span class="district-ab-button district-ab-button-more" style="display:none;">
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="normal-filter ">
                                                        <div alog-alias="bainuo-filter-section" alog-group="bainuo-filter-section" class="w-filter-p-ab filter-list-ab clearfix" mon="area=filterPrice">
                                                            <h5 class="filter-label-ab">


                                            <div class="normal-filter ">
                                                <div alog-alias="bainuo-filter-section" alog-group="bainuo-filter-section" class="w-filter-p-ab filter-list-ab clearfix" mon="area=filterPrice">
                                                    <h5 class="filter-label-ab">

                                                        价格
                                                    </h5>
                                                            <span class="filter-all-ab">
                                                        <a class="w-filter-item-ab item-all-auto-ab" href="javascript:;" mon="element=0&element_type=filter&position=1">
                                                                    <span class="item-content filter-active-all-ab ">
                                                                        全部
                                                                    </span>

                                                        </a>
                                                    </span>
                                                    <span class="filter-items-ab filter-content-ab">

                                                            <a class="w-filter-item-ab" mon="element=1&element_type=filter&position=1">
                                                                <span class="item-content" min="0" max="49" id="price1">
                                                                    50元以下
                                                                </span>
                                                            </a>
                                                            <a class="w-filter-item-ab" mon="element=2&element_type=filter&position=1">
                                                                <span class="item-content" min="50" max="100" id="price2">
                                                                    50-100元
                                                                </span>
                                                            </a>
                                                            <a class="w-filter-item-ab " mon="element=3&element_type=filter&position=1">
                                                                <span class="item-content" min="100" max="200" id="price3">
                                                                    100-200元
                                                                </span>
                                                            </a>
                                                            <a class="w-filter-item-ab" mon="element=4&element_type=filter&position=1">
                                                                <span class="item-content" min="200" max="300" id="price4">
                                                                    200-300元
                                                                </span>
                                                            </a>
                                                            <a class="w-filter-item-ab" mon="element=5&element_type=filter&position=1" >
                                                                <span class="item-content" min="300" max="∞" id="price5">
                                                                    300元以上
                                                                </span>
                                                            </a>

                                                    </span>
                                                          <form action="/food/{{$id}}/name=&" method="get">
                                                                        <div class="am-input-group am-input-group-sm yellow" style="display: none;z-index: 1;">
                                                                            <input type="text" name="price" class="am-form-field" value="{{$v['id']}}" style="display:none;">
                                                                            <span class="am-input-group-btn">
                                                                            <button class="am-btn  am-btn-default am-btn-success tpl-am-btn-success am-icon-search" style="display:none" id="suo{{$v['id']}}"></button>
                                                                          </span>
                                                                        </div>
                                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div alog-alias="bainuo-sort-bar" alog-group="bainuo-sort-bar" class="w-sort-bar" id="j-sort-bar">
                                 <div class="bar-area" id="j-bar-area">
                                
                                        <div class="sortbar-right">
                                            <div class="w-search" mon="area=search&element_type=nav">
                                                <div class="search-wrap">
                                                    <form action="//www.nuomi.com/search" class="j-searchForm" method="get" target="_blank">
                                                        <input autocomplete="off" class="search-input placeholder j-searchInput" name="k" placeholder="艾灸" type="text" value="" />
                                                        <input class="btn search-btn j-search-btn" mon="element=button" type="submit" value="">
                                                        <input class="input-hidden j-input-hidden" name="rid" type="text" value="2113180bd5a56524f3b24fd64b5446d0">
                                                        </input>
                                                        </input>
                                                    </form>
                                                </div>
                                                <div alog-alias="bainuo-header-hot-area" alog-group="bainuo-header-hot-area" class="hot-area">
                                                </div>
                                            </div>
                                            <span class="page-area" mon="area=pageNum">
                                    
                                                </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                        void
                        function(e, t) {
                            for (var n = t.getElementsByTagName("img"), a = +new Date, i = [], o = function() { this.removeEventListener && this.removeEventListener("load", o, !1), i.push({ img: this, time: +new Date }) }, s = 0; s < n.length; s++) ! function() {
                                var e = n[s];
                                e.addEventListener ? !e.complete && e.addEventListener("load", o, !1) : e.attachEvent && e.attachEvent("onreadystatechange", function() { "complete" == e.readyState && o.call(e, o) })
                            }();
                            alog("speed.set", { fsItems: i, fs: a })
                        }(window, document);
                        </script>
                        <div class="content-wrap" id="j-goods-area">
                            <div alog-alias="bainuo-good-area" alog-group="bainuo-good-area" class="shop-infoo-list" data-index="1" mon="area=itemList">
                                <ul class="shop-infoo-list-ul">
                                    @foreach($shopuser as $v)
                                    <li class="shop-infoo-list-item clearfix">
                                        <a href="/{{$v['id']}}.html" target="_blank">

                                                <img alt="{{$v['name']}}" class="shop-infoo-list-item-img" src="{{$v['pic']}}"/>
                                            </a>
                                        <a href="/{{$v['id']}}.html" target="_blank">
                                            <h3 class="shop-infoo-list-item-title">
                                                    {{$v['name']}}
                                                </h3>

                                            </a>
                                            <p class="shop-infoo-list-item-line shop-infoo-list-item-line-middle">
                                                <a href="/{{$v['id']}}.html">

                                                    <span class="shop-infoo-list-item-line-label">
                                                        {{$v['address']}}
                                                    </span>
                                                </a>
                                        </p>
                                        <a class="shop-infoo-list-item-line shop-infoo-list-item-detail shop-infoo-list-item-gray" href="/{{$v['id']}}.html">
                                                <span>
                                                    <i class="icon-tuan icon-tuan-adjust">
                                                    </i>
                                                    40元代金券！免费WiFi！
                                                </span>
                                            </a>
                                        <a class="shop-infoo-list-item-line shop-infoo-list-item-detail shop-infoo-list-item-gray" href="/{{$v['id']}}.html">
                                                <span>
                                                    人均价格:￥{{$v['renprice']}}
                                                </span>
                                            </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="w-channel-pager">
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
                            </div>
                        </div>
                    </div>

                    @show
                    <div class="page-body-right">
                    </div>
                    <div class="hover-overlay" id="hover-overlay">
                    </div>
                    <div class="re-footer-content">

@include('layouts._foot')

                    
                    
