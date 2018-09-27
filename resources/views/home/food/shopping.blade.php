@include('layouts._daohang')
<script src="/home/static/js/jquery-1.10.2_d88366fd.js"></script>
<script type="text/javascript" src="/home/static/js/mod_e56bbba.js"></script>
<script type="text/javascript" src="/home/static/js/common_5e9cc9b.js"></script>
<script type="text/javascript" src="/home/static/js/tongji_hm_01d96e3.js"></script>
<script type="text/javascript" src="/home/static/js/detail_old_9370079.js"></script>
<script type="text/javascript" src="/home/static/js/ui_97d7108.js"></script>
<script type="text/javascript" src="/home/static/js/searchinfowindow_b411a5b.js"></script>
<script type="text/javascript" src="/home/static/js/shop_branch_c7fefe1.js"></script>
<script type="text/javascript" src="/home/static/js/detail_7f561fd.js"></script>
<link rel="stylesheet" type="text/css" href="/home/static/css/global-revision_ee57746.css" />
<link rel="stylesheet" type="text/css" href="/home/static/css/common_d7fb37f.css" />
<link rel="stylesheet" type="text/css" href="/home/static/css/header_8e018e5.css" />
<link rel="stylesheet" type="text/css" href="/home/static/css/detail_old_acd0c5d.css" />
<link rel="stylesheet" type="text/css" href="/home/static/css/searchinfowindow_1da1739.css" />
<link rel="stylesheet" type="text/css" href="/home/static/css/detail_cf6a9f9.css" />
<link rel="stylesheet" type="text/css" href="/home/static/css/detail_0bf534b.css" />
<div class="p-detail">
    <div data-huodong="共有多少人团购"></div>
    <div class="p-bread-crumb" mon="deal_id=33330185" alog-alias="bainuo-detail-bread-crumb" alog-group="bainuo-detail-bread-crumb" class="static-hook-real static-hook-id-4">
        <div class="w-bread-crumb" mon="area=breadCrumbs">
            <div class="nav-bar-header  static-hook-real static-hook-id-3">
            <div class="nav-inner flexible clearfix">
            <ul class="nav-list clearfix" mon="area=nav&element_type=nav" id="j-catg">
                <li class="nav-item cate-row all-cate deep"><span class="item "><a href="/{{$shopuser['id']}}.html">@foreach($industry as $v) @if($shopping->shopuser->industry_id == $v['id']) {{$v['name']}} @endif @endforeach分类</a></span>
                    <li class="nav-item nav-item-first"><a href="/" target="_top" class="item first new-item" mon="element=首页">首页</a></li>
                    <li class="nav-item"><a href="/food/1" target="_top" class="item new-item " mon="element=酒店">酒店</a></li>
                    <li class="nav-item"><a href="/food/4" target="_top" class="item new-item" mon="element=结婚">结婚</a></li>
                     <li class="nav-item"><a href="/food/3" target="_top" class="item new-item" mon="element=结婚">娱乐</a></li>
                     <li class="nav-item"><a href="/food/2" target="_top" class="item new-item" mon="element=结婚">美食</a></li>
            </ul>
        </div>
        </div>
    </div>
    <script type="text/template" id="autocomplete-template">

    </script>



        <div class="static-hook-real static-hook-id-5">
        </div>
        <div class="p-item-info" mon="deal_id=33330185">
            <div class="w-item-info clearfix">
                <h2>{{$shopping['name']}}</h2>

                <div class="ii-images clearfix static-hook-real static-hook-id-6">
                    <div class="w-item-images">
                        <div id="j-images-board" class="images-board">
                            <div class="item-status clearfix ">
                            </div>

                            <img src="{{$shopping['img']}}" alt="{{$shopping['name']}}" title="{{$shopping['name']}}" />
                        </div>
                            <ul id="j-images-list" class="images-list clearfix">
                                <li class="images images-last">
                                    <img src="{{$shopping['img']}}" alt="{{$shopping['name']}}" title="{{$shopping['name']}}" />
                                </li>
                            </ul>
                        <div class="erweima-share-collect">
                            <ul class="item-option clearfix" mon="area=dealCollect&element_type=nav" alog-alias="bainuo-detail-item-option" alog-group="bainuo-detail-item-option">
                                <li class=""><span class="item-collect " mon="element=collect" id="shou">收藏</span>
                                    <div id="j-collect-success" class="collect-success">
                                        <p>收藏成功！</p><a href="//www.nuomi.com/uc/collection/online">去看看我的收藏</a></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="ii-intro">
                    <div class="w-item-intro">
                        <div class="promotion-area static-hook-real static-hook-id-7"></div>
                        <div class="price-area-wrap clearfix static-hook-real static-hook-id-8">
                            <div class="price-area clearfix ">
                                <div class="pic-price-area"><span class="unit">&yen;</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size: 50px;">{{$shopping['price']}}</span></div>

                            </div>
                        </div>
                        <div class="static-hook-real static-hook-id-9"></div>
                        <ul class="ugc-strategy-area clearfix  static-hook-real static-hook-id-10" mon="area=promoteBuy&element_type=function" alog-alias="bainuo-detail-item-intro-more" alog-group="bainuo-detail-item-intro-more">
                            <li class="item-bought">
                                <div class="sl-wrap">
                                    <div class="sl-wrap-cnt">
                                        <div class="item-bought-num" ><span class="intro-strong">商品数量</span ><a id="counts">{{$shopping['counts']}}</a></div>
                                    </div>
                                </div>
                            </li>
                            <li id="j-ugc-grade" class="ugc-grade ">
                                <div class="sl-wrap">
                                    <div class="sl-wrap-cnt">
                                        <div class="no-comment">
                                            评论
                                            <div class="no-comment-reason"><span class="ico-mark-up"></span>
                                                <p>{!!$shopping['content']!!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item-strategy">
                                <div class="sl-wrap">
                                    <div class="sl-wrap-cnt"><a href="//www.nuomi.com/pcindex/about/promise" target="_blank" class="refund-all " mon="element=refund">随便退</a></div>
                                </div>
                            </li>
                        </ul>
                        <div class="buy-panel-wrap ">
                            <div class="buy-panel">
                                <div class="validdate-buycount-area static-hook-real static-hook-id-11">
                                    <div class="item-countdown-row clearfix"><span class="name">有效期</span><span class="value">2018-09-30</span></div>
                                    <div class="item-buycount-row j-item-buycount-row clearfix" data-stock="10000000" data-personmax="2147483636" data-min="1" data-max="10000000">
                                        <div class="name">数&nbsp;&nbsp;&nbsp;量</div>

                                        <div class="buycount-ctrl">
                                            <a class="ctrl" id="min"><span class="horizontal"></span></a>

                                            <input type="text" value="1" maxlength="10" autocomplete="off" id="val">
                                            <a class="ctrl" id="max"><span class="horizontal"></span>
                                            <span class="vertical"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <script src="/js/jquery.min.js"></script>

                            </div>
                            <div class="item-buy-area clearfix">
                                    <div style="float:left" class="static-hook-real static-hook-id-12" id="buy"><button class="btn-buy btn-buy-qrnew j-btn-buy btn-hit">立即抢购</button>
                                    </div>
                                 <script>
                                    $('#max').click(function(){
                                       var moren = $('#val').val();
                                       if(moren >= $('#counts').text()){
                                           $("#val").val(parseInt($('#counts').text()));
                                       }else{
                                           $("#val").val(parseInt(moren)+1);
                                       }
                                   })
                                    $('#min').click(function(){
                                        var moren = $('#val').val();
                                        // document.write(moren);
                                        if(moren == 1){
                                            $("#val").val(1);
                                        }else{
                                            $("#val").val(parseInt(moren)-1);
                                        }
                                    })
                                    $('#buy').click(function(){
                                        var counts = $("#val").val();
                                        window.location.href= "/shopcart/{{$shopping['id']}}&"+counts+""
                                    })
                                </script>


                                </form>



                            </div>
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
        <div class="p-item-info-more" mon="deal_id=33330185">
            <div class="iim-wrapper clearfix">
                <div class="info-detail">
                    <div class="static-hook-real static-hook-id-13">
                    </div>
                    <div class="static-hook-real static-hook-id-14">
                        <div class="w-buy-2-buy-list" mon="area=recomBottom&s=364dd9f17f6db28a36cbab19078ce16a" bn_box="recomBottom&position" alog-alias="bainuo-detail-bye2bye" alog-group="bainuo-detail-bye2bye">
                            <div id="j-cellingRecent" class="clearfix">
                                <div class="rcmd-title clearfix">
                                    <h3>看了又看</h3><span class="icon"></span></a></div>
                                <div>
                                    <div class="j-buy2buy-page buy2buy-page show" index="0">
                                        <div class="buy2buy-item first">
                                            <div class="w-goods-item-b2b"><a mon="element=40008047&position=1&element_type=item" href="//t10sc.nuomi.com/pc/goods/detail?tiny_url=j00unex76" data-item-st='{"s":"364dd9f17f6db28a36cbab19078ce16a"}' target="_blank"><img class="goods-img" src="/home/static/picture/b151f8198618367a8e22e49b25738bd4b21ce5c9.jpg" alt="大渔铁板烧500元储值卡" title="大渔铁板烧500元储值卡"></a><a mon="element=40008047&position=1&element_type=item" class="title" href="//t10sc.nuomi.com/pc/goods/detail?tiny_url=j00unex76" data-item-st='{"s":"364dd9f17f6db28a36cbab19078ce16a"}'>大渔铁板烧500元储值卡</a>
                                                <div class="price-sold clearfix">
                                                    <div class="price"><span class="current">&yen;450</span></div>
                                                    <div class="sold"><span class="name">已售</span><span class="current">25759</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="static-hook-real static-hook-id-15">
                    </div>
                    <div class="spec-nav ">
                        <div id="nav-bar" class="nav-bar" style="margin-top:20px;"></div>
                        <div id="j-sn-ceiling" class="w-spec-nav clearfix">
                            <ul id="j-sn-list" class="sn-list" mon="area=detailTab&element_type=nav" alog-alias="bainuo-detail-sn-list" alog-group="bainuo-detail-sn-list">
                                <li class="spec-nav-current ">


                                    <a href="#j-info-all" data-rel-content="all" mon="element=本单详情">
                                        <span>本单详情</span>
                                    </a>
                                </li>
                            </ul>
                        <div class="ceiling-buy clearfix static-hook-real static-hook-id-17">
                            <div class="pic-price-area"><span class="unit">&yen;</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size: 50px;line-height:35px;">{{$shopping['price']}}</span></div>
                            <a mon="area=buyCell" href="//www.nuomi.com/buy/beijing/t00qpcidc?s=a816c32acc2bd60c8ade97fa9907cf13" class="btn-buy btn-buy-s j-btn-buy " mon="area=buy&element=buyCell&element_type=nav" id="pc-buy-spec-nav-id-for-hmt">

                                立即抢购</a>
                            </div>
                        </div>
                    </div>
                    <ul id="j-info-all">
                        <li class="item-info-detail j-item-content">
                            <div id="ajax-shopchain" class="info-area" style="display: none;">
                                <div class="ia-shop-branch">
                                    <div class="w-shop-branch clearfix">
                                        <h3 class="w-section-header">
                                            分店信息
                                            </h3>
                                        <div class="branch-content">
                                            <div class="shop-map">
                                                <div class="w-map" alog-alias="bainuo-map" alog-group="bainuo-map">
                                                    <div id="j-map-container" class="map-container">
                                                    </div>
                                                    <a href="###" id="j-map-zoom" class="map-zoom">
                                                        <span>
                                                        查看完整地图</span>
                                                        </a>
                                                </div>

                                                <script type="text/html" id="tpl-dlg-shoplist">
                                                    <%for (var i in shopList) { %>
                                                        <a class="shop-branch" data-value="name=<%=shopList[i].name%>&address=<%=shopList[i].address%>&tel=<%=shopList[i].phone%>&baidu_longitude=<%=shopList[i].baidu_longitude%>&baidu_latitude=<%=shopList[i].baidu_latitude%>" data-longitude="<%=shopList[i].baidu_longitude%>" data-latitude="<%=shopList[i].baidu_latitude%>">
                                                            <h3><%=shopList[i].name%></h3>
                                                            <p class="branch-address">
                                                                <%=shopList[i].address%>
                                                            </p>
                                                            <p class="branch-tel">
                                                                <%=shopList[i].phone%>
                                                            </p>
                                                        </a>
                                                        <% } %>
                                                </script>
                                                <script type="text/javascript" src="/home/static/js/46d584d47250419093399de619378ba7.js"></script>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="info-buy-content">
                                <div class="w-rich-text">
                                    <h3 class="w-section-header">
                                    团单详情
                                </h3>
                                    <div class="rt-content" style="width: 500px">
                                        <div>{!!$shopping['content']!!}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="info-buy-content">
                            </div>
                            <div class="info-buy-content">
                            </div>
                        </li>
                        <li id="j-info-consum-tip" class="item-info-detail" style="display: none;">
                            <div class="info-buy-content">
                                <div class="w-rich-text">
                                    <h3 class="w-section-header">
                                    消费提示
                                    </h3>
                                    <div class="rt-content">
                                        <div class="ct">
                                            <div>
                                                <div class="sect lh22">
                                                    1、请携带有效证件办理入住登记；
                                                    <br />2、驾驶证不是有效证件；
                                                    <br />3、每位入住的客人都需要登记；
                                                    <br />4、如不小心损坏房间内的物品，需照价赔偿；
                                                    <br />
                                                </div>
                                                <div class="sect lh22">
                                                    &nbsp;
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li id="j-info-intro" class="item-info-detail j-item-content">
                            <div class="info-buy-content">
                                <div class="w-rich-text">
                                    <h3 class="w-section-header">
                                    商家介绍
                                </h3>
                                    <div class="rt-content">
                                        <br/>
                                        <div>{{$shopping->shopuser->intro}}</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <div class="static-hook-real static-hook-id-18">
                        </div>
                        <li id="j-info-ugc" class="item-info-detail j-item-content">
                            <div id="shop-ugc" class="info-bar"></div>
                            <div class="user-comment">
                                <div class="w-user-comment static-hook-real static-hook-id-19" id="j-user-comment" >
                                    <h3 class="w-section-header">
                                    会员评价
                                </h3>

                                    <div class="detail clearfix " style="min-height: 200px">
                                        <ul>
                               @if(json_decode($comment)!=null)
                                                @foreach($comment as $v) 
                                                <div style="width: 720px;height: 80px">
                                                    <div style="float:left;"><img src="/home/static/images/icon_4e372f0.png" style="border-radius: 50%" width="60px" height="60px" style="float:left;">
                                                    </div>
                                                    <div style="float:left;line-height:80px;">{{substr($v->user->username,0,8)}}
                                                    </div>
                                                    <div style="float:left;width: 360px;height:20px;margin-left:20px;padding-top: 20px">{!!$v->content!!}
                                                    </div>
                                                    <div style="padding-top: 20px;color:#ff658e">评价时间
                                                    {{$v['updated_at']}}
                                                    </div>
                                                </div>
                                                @endforeach
                                            @else
                                                <div style="color:#ff4883;font-size: 25px;margin:50px auto">暂无评价</div>
                                            @endif

                                        </ul>
                                    </div>
                            </div>
                        </li>
                    </ul>

                    <div class="bottom-recommend" id="j-bottomRecommend">
                        <div class="user-bought clearfix" id="ajax-recent-recommend">
                        </div>
                    </div>
                    <div class="bottom-recommend" id="j-bottomHistory">
                        <div class="user-bought clearfix" id="ajax-recent-view">
                            <script id="j-recent-view-list" type="text/template">
                                <div mon="area=recentViewed&s=<%=s%>" bn_box="visited">
                                    <div class="rcmd-title clearfix">
                                        <h3>最近浏览</h3>
                                    </div>
                                    <div class="w-recent-view-list" id="j-recent-view-item">
                                        <%for (var i in goodsItemList) { %>
                                            <%if (i<7) { %>
                                                <% var goods_info = goodsItemList[i]%>
                                                    <div class="goods-item-recent-view" <% if( i==6 ){ %> style="margin-right:0;"
                                                        <% } %> >
                                                            <a mon="element=<%=goods_info.deal_id%>&position=<%=i*1+1%>&element_type=item" href="<%=goods_info.link%>" class="clearfix" target="_blank" data-item-st="<%=s%>">
                        <img class="goods-img" src="<%=goods_info.tiny_image%>" alt="<%=goods_info.min_title%>">
                    </a>
                                                            <div class="price-sold clearfix">
                                                                <div class="price">
                                                                    <span class="current">&yen;<%=goods_info.current_price/100%></span>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <% } %>
                                                        <% } %>
                                    </div>
                                </div>
                            </script>
                        </div>
                    </div>
                </div>
                <div class="recommend-area">
                    <div class="recommend-ad static-hook-real static-hook-id-21" id="detail-right-ad-first" mon="area=adsRight&element_type=nav" bn_box="ads_right&position">
                    </div>
                    <div class="recommend-ad" id="detail-right-ad" mon="area=adsRight&element_type=nav" bn_box="ads_right&position">
                    </div>
                    <div class="static-hook-real static-hook-id-22">
                        <div id="ajax-see2see" class="w-see-2-see">
                            <div mon="area=recomRight&s=8aa0923203e522f93b01edc37c2cfabc" bn_box="recomRight&position" id="j-see2see" class="other-user" alog-alias="bainuo-detail-see2see" alog-group="bainuo-detail-see2see">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="re-footer-content">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        var shop_id = {{$shopping['id']}};
        $(window).load(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url:'/cunzuji',
                type:'post',
                data:{shop_id:shop_id},
                success:function(data){
                },
                async:false
            })
            
            $.ajax({
                url:'/shoucang',
                type:'post',
                data:{shop_id:shop_id},
                success:function(data){
                    if(data == 1){
                        $('#shou').html('已收藏');
                    }
                },               
                async:false
            })

        })
        $('#shou').click(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url:'/cunshoucang',
                type:'post',
                data:{shop_id:shop_id},
                success:function(data){
                    if(data == 0){
                        alert('不可重复收藏');
                    }else if(data == 1){
                        alert('收藏成功');
                    }else{
                        alert('请先登录再收藏');
                    }
                },
                async:false
            })
        })


    </script>
@include('layouts._foot')
