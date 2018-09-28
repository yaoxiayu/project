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
               
                <pre></pre>
                @section('content')
                <div class="page-body page-body-channel">
                    <div class="page-body-container clearfix">
                        <div class="page-body-left">
                            <div class="filter-bg">

                                    <div class="w-filter-ab-test" style="position:relative">
                                        <div class="filter-breadcrumb">
                                        </div>
                                        <img class="page-body-right-img " src="/home/static/picture/search_active_ba4697e.png" width="208" / style="position:absolute;right:20px;height: 120px">
                                        <img class="page-body-right-img " src="/home/static/picture/search_active_ba4697e.png" width="208" / style="position:absolute;right:20px;top:190px;height: 120px">
                                        <div class="filter-wrapper" >
                                            <div class="normal-filter ">
                                                <div alog-alias="bainuo-filter-section" alog-group="bainuo-filter-section" class="w-filter-normal-ab filter-list-ab clearfix" mon="area=filterCatg">
                                                    <h5 class="filter-label-ab">
                                                        分类
                                                    </h5>
                                                    <span class="filter-all-ab">
                                                    <a class="w-filter-item-ab item-all-auto-ab" href="/food/{{$id}}" mon="element=0&element_type=filter&position=1">
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
                                                            <a class="w-filter-item-ab tag" tag="{{$v['id']}}">
                                                                <div @if($v['id']==$name) style="color:#ff318c" @endif>
                                                                    <b>{{$v['name']}}</b>
                                                                </div>
                                                            </a>
                                                            @endforeach
                                                        </div>
                                                        <script src="/js/jquery.min.js"></script>
                                                        <script>
                                                            $('.tag').click(function(){
                                                                var tag_id = $(this).attr('tag');

                                                                location.href = "/food/{{$id}}?name="+tag_id+"";

                                                            })
                                                        </script>
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
                                                        <a class="w-filter-item-ab item-all-auto-ab" href="/food/{{$id}}" mon="element=0&element_type=filter&position=1">
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
                                                                <span class="item-content price" min="1" max="50">
                                                                    50元以下
                                                                </span>
                                                            </a>
                                                            <a class="w-filter-item-ab" mon="element=2&element_type=filter&position=1">
                                                                <span class="item-content price" min="51" max="100">
                                                                    50-100元
                                                                </span>
                                                            </a>
                                                            <a class="w-filter-item-ab " mon="element=3&element_type=filter&position=1">
                                                                <span class="item-content price" min="101" max="200">
                                                                    100-200元
                                                                </span>
                                                            </a>
                                                            <a class="w-filter-item-ab" mon="element=4&element_type=filter&position=1">
                                                                <span class="item-content price" min="201" max="300">
                                                                    200-300元
                                                                </span>
                                                            </a>
                                                            <a class="w-filter-item-ab" mon="element=5&element_type=filter&position=1" >
                                                                <span class="item-content price" min="301" max="9999">
                                                                    300元以上
                                                                </span>
                                                            </a>
                                                    </span>
                                                    <style>
                                                          .col{
                                                            background-color: #ff318c;
                                                          }
                                                    </style>
                                                            <script type="text/javascript">

                                                                  $('.price').click(function(){
                                                                      var min = $(this).attr("min");
                                                                      var max = $(this).attr("max");
                                                                      location.href = "/food/{{$id}}?min="+min+"&max="+max+"";


                                                                  })
                                                            </script>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div style="margin:40px 0 0;"></div>
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
                                                    代金券！免费WiFi！
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
