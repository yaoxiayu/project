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
<div class="nav-bar-header  static-hook-real static-hook-id-3">
    <div class="nav-inner flexible clearfix">
        <ul class="nav-list clearfix" mon="area=nav&element_type=nav" id="j-catg">
            <li class="nav-item cate-row all-cate deep"><span class="item ">全部分类</span>
                <li class="nav-item nav-item-first"><a href="//www.nuomi.com" target="_top" class="item first new-item" mon="element=首页">首页</a></li>
                <li class="nav-item"><a href="//t.nuomi.com" target="_top" class="item new-item " mon="element=酒店">酒店</a></li>
                <li class="nav-item item-dropdown">
                    <div class="item new-item">出行</div><i class="item-icon-arrowdown"></i>
                    <ul class="item-arrowdown-container">
                        <div class="drop-block"></div>
                        <li class="arrowdown-item">
                            <a class="arrowdown-item-link" href="http://flight.baidu.com/flight/h5redirect?v=1.0&type=1&client=pcweb&app_from=bainuo&src_from=bainuo_pc_main" mon="element=机票" target="_blank">
                                <div>机票</div>
                            </a>
                        </li>
                        <li class="arrowdown-item">
                            <a class="arrowdown-item-link" href="http://api.kuai.baidu.com/cserver/train/redirectctrip?&u=http%253a%252f%252ftrains.ctrip.com%252f%253f%2526mkt_header%253dbdkx%2526allianceID%253d106175%2526sid%253d549977%0a&us=nuomi_pc" mon="element=火车" target="_blank">
                                <div>火车票</div>
                            </a>
                        </li>
                        <li class="arrowdown-item">
                            <a class="arrowdown-item-link" href="//kuai.baidu.com/pc/index/index?us=nuomi_pc" mon="element=汽车" target="_blank">
                                <div>汽车票</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item hot-item-s"><a href="//dianying.nuomi.com?cityId=131" target="_blank" class="item new-item " mon="element=电影">电影<i class="new-item-hot"></i></a></li>
                <li class="nav-item"><a href="//bj.nuomi.com/pcindex/dipin#/list/565" target="_top" class="item new-item" mon="element=结婚">结婚</a></li>
                <li class="nav-item"><a href="http://waimai.baidu.com/?utm_source=bainuo&utm_medium=nav&utm_content=toububiaoqian&utm_term=default&utm_campaign=beijing&cid=PC_%E5%93%81%E7%89%8C%E6%8E%A8%E5%B9%BF_940766" target="_blank" class="item new-item" mon="element=外卖">外卖</a></li>
        </ul>
    </div>
</div>
<div class="p-detail">
    <div data-huodong="共有多少人团购"></div>
    <div class="p-bread-crumb" mon="deal_id=33330185" alog-alias="bainuo-detail-bread-crumb" alog-group="bainuo-detail-bread-crumb" class="static-hook-real static-hook-id-4">
        <div class="w-bread-crumb" mon="area=breadCrumbs">
        </div>
    </div>
    <script type="text/template" id="autocomplete-template">
        <!--for:${data} as ${suggestion}, ${index}-->
        <div data-index="${index}" class="j-suggestion-item n-textbox-autocomplete-item" mon="area=sug&element=${suggestion.relword}">
            <span class="word">${suggestion.relword}</span>
            <span class="sug-count">约<em class="count">${suggestion.count}</em>个结果</span>
        </div>
        <!--/for-->
    </script>
    
        

    <div class="static-hook-real static-hook-id-5">

    </div>
    <div class="p-item-info" mon="deal_id=33330185">
        <div class="w-item-info clearfix">
            <h2>{{$shopping['name']}}</h2>
            <div class="item-title">
                <span class="text-main">仅元{{$shopping['price']}}！最高价值198元，四人普间/大床房2选1。</span>
                <span class="hot hide">优惠内容</span>
            </div>
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
                            <li class=" "><a href="###" id="j-item-collect" class="item-collect " mon="element=collect">收藏</a>
                                <div id="mir"  class="right clearfloat fr" style="text-align: center;">
     <i id="shoucang" class="iconfont icon-shoucang"></i>
     <p style="cursor: pointer;" id="btn" class=""><a style="color: #8f8f94;" href="Javascript:window.external.addFavorite(document.location.href,document.title)">收藏</a></p>
</div>

    <script type="text/javascript">  
         
       var productID = ${requestScope.productID};  
       var userID = ${requestScope.userID};  
       function addbtn(){  
            $("#shoucang").addClass('icon-shoucang1').removeClass('icon-shoucang');  
            $("#btn").text('已收藏');  
        };  
          
        function dedlebtn(){  
            $("#btn").text('收藏');  
            $("#shoucang").addClass('icon-shoucang').removeClass('icon-shoucang1');  
        };  
          
        $(document).ready(function () {  
        if (${message.type} == 0){  
                dedlebtn();  
            }else{  
                addbtn();  
            }  
        });  
        $("#mir").click(function() {  
            if ($("#btn").text() == '收藏' ) {  
                $("#shoucang").addClass('icon-shoucang1').removeClass('icon-shoucang');  
                $("#btn").text('已收藏');  
            } else {  
                $("#btn").text('收藏');  
                $("#shoucang").addClass('icon-shoucang').removeClass('icon-shoucang1');  
            }  
            if($("#btn").text() == '收藏'){  
                deleteCollection(productID,userID);  
            }  
            else{  
                addUserCollection(productID,userID);  
                  
            }  
        });  
         
  
        function addUserCollection(productID){  
            $.ajax({  
                type: "POST",  
                url: "collection.do",  
                data:{"productID":productID,"userID":userID},  
                dataType: "text",  
                success:function(data){  
                    if(data=="1"){  
                        $("#shoucang").addClass('icon-shoucang1').removeClass('icon-shoucang');  
                        $("#btn").text('已收藏');  
                          
                    }else{  
                        $("#btn").text('收藏');  
                        $("#shoucang").addClass('icon-shoucang').removeClass('icon-shoucang1');  
                    }  
  
                }  
            })  
        }  
  
        function deleteCollection(productID,userID){  
            $.ajax({  
                type: "POST",  
                url: "deleteUcByUPId.do",  
                data:{"productID":productID,"userID":userID},  
                dataType: "text",  
                success:function(data){  
                    if(data=="1"){  
                        $("#btn").text('收藏');  
                        $("#shoucang").addClass('icon-shoucang').removeClass('icon-shoucang1');  
                    }else{  
                        $("#shoucang").addClass('icon-shoucang1').removeClass('icon-shoucang');  
                        $("#btn").text('已收藏');  
  
                    }  
  
                }  
            })  
        }  
         
    </script> 



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
                            <div class="market-price-area">
                                <div class="price">&yen;198</div>
                                <div class="name">门市价</div>
                            </div>
                        </div>
                    </div>
                    <div class="static-hook-real static-hook-id-9"></div>
                    <ul class="ugc-strategy-area clearfix  static-hook-real static-hook-id-10" mon="area=promoteBuy&element_type=function" alog-alias="bainuo-detail-item-intro-more" alog-group="bainuo-detail-item-intro-more">
                        <li class="item-bought">
                            <div class="sl-wrap">
                                <div class="sl-wrap-cnt">
                                    <div class="item-bought-num"><span class="intro-strong">商品数量</span>{{$shopping['counts']}}</div>
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
                                    <div class="buycount-ctrl"><a href="javascript:;" class="j-ctrl ctrl minus disabled"><span class="horizontal"></span></a>
                                        <input type="text" value="1" maxlength="10" autocomplete="off"><a href="javascript:;" class="ctrl j-ctrl plus "><span class="horizontal"></span><span class="vertical"></span></a></div>
                                </div>
                            </div>
                            <div class="item-buy-area clearfix">
                                <div style="float:left" class="static-hook-real static-hook-id-12" id="buy-button-wrap"><a href="/shopcart" class="btn-buy btn-buy-qrnew j-btn-buy btn-hit" >立即抢购</a></div>
                            </div>
                        </div>
                    </div>
                    <script type="text/template" data-role="tips-tags">
                        <div class="tips-tags">
                            <div class="tips-tags-mask"></div><i></i>
                            <div class="tips-tags-main"><span class="tips-tags-desc">${desc}</span>
                                <!--if:${link}--><a href="${link}" target="_blank">查看详情</a>
                                <!--/if-->
                            </div>
                        </div>
                    </script>
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
                                <h3>买了又买</h3><a href="javascript:;" mon="element=Buy2BuyChange" id="j-change-btn" class="change-btn">换一换<span>&nbsp;</span><span class="icon"></span></a></div>
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
                                <div class="j-buy2buy-page buy2buy-page " index="1">
                                    <div class="buy2buy-item first">
                                        <div class="w-goods-item-b2b"><a mon="element=38124685&position=5&element_type=item" href="//www.nuomi.com/deal/z00tjfgpf.html" data-item-st='{"s":"364dd9f17f6db28a36cbab19078ce16a"}' target="_blank"><img class="goods-img" src="static/picture/b151f8198618367a7a142e0e27738bd4b21ce540.jpg" alt="天伦松鹤特惠午餐自助" title="天伦松鹤特惠午餐自助"></a><a mon="element=38124685&position=5&element_type=item" class="title" href="//www.nuomi.com/deal/z00tjfgpf.html" data-item-st='{"s":"364dd9f17f6db28a36cbab19078ce16a"}'>天伦松鹤特惠午餐自助</a>
                                            <div class="price-sold clearfix">
                                                <div class="price"><span class="current">&yen;110</span></div>
                                                <div class="sold"><span class="name">已售</span><span class="current">261</span></div>
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
                                <i></i>
                                <a href="#j-info-all" data-rel-content="all" mon="element=本单详情">
                                        <span>本单详情</span>
                                        </a>
                            </li>
                            <li class="">
                                <i></i>
                                <a href="#j-info-consum-tip" data-rel-content="consum-tip" mon="element=消费提示">
                                        <span>消费提示</span>
                                        </a>
                            </li>
                            <li class="">
                                <i></i>
                                <a href="#j-info-intro" data-rel-content="intro" mon="element=商家介绍">
                                        <span>商家介绍</span>
                                        </a>
                            </li>
                            <li class=" static-hook-real static-hook-id-16">
                                <i></i>
                                <a id="j-nav-ugc" href="" data-rel-content="ugc" class="spec-nav-last" mon="element=会员评价">
                                        <span>会员评价</span>
                                    </a>
                                <!--  @if(!Session::has('username'))
                                        <li class="login"><a href="/login" id="j-barLoginBtn" class="pad-left">请登录</a></li>
                                        <li class="reg"><a href="/home/zhuce" class="pad-left">免费注册</a></li>
                                    @endif -->
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
                                            <script type="text/template" id="tpl-map-dlg">
                                                <div class="tpl-map-dlg">
                                                    <div class="md-header clearfix">
                                                        <h3><%=shopName%><span id="j-dlgShopCount"></span></h3>
                                                        <div id="j-md-shop-all" class="md-shop-all">
                                                            <select name="city" id="j-dialogFilterCity" class="af-content">
                                                                <option>城市</option>
                                                            </select>
                                                            <select name="district" id="j-dialogFilterDistrict" class="af-content">
                                                                <option>地区</option>
                                                            </select>
                                                        </div>
                                                        <a href="//d.nuomi.com/inter/group" target="_blank">
                                                                <span>用百度糯米手机版，随时随地查看商家地图</span>
                                                                <span class="download-free">免费下载</span>
                                                            </a>
                                                    </div>
                                                    <div class="md-map-area clearfix">
                                                        <div id="j-md-map-view" class="md-map-view">
                                                        </div>
                                                        <div class="md-map-info">
                                                            <div id="j-md-branch-view" class="shop-branch-view">
                                                            </div>
                                                            <div id="j-search-result" class="md-search-result">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </script>
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
                                        <div class="branch-detail">
                                            <div id="j-area-filter" alog-alias="bainuo-detail-area-filter" alog-group="bainuo-detail-area-filter">
                                                <div id="j-area-filter" class="w-area-filter">
                                                    <label>筛选：</label>
                                                    <select name="city" id="j-af-1" class="af-content">
                                                    </select>
                                                    <select name="district" id="j-af-2" class="af-content">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="branch-list-content">
                                                <div class="w-branch-list">
                                                    <ul id="j-branch-list-content" class="branch-list-content">
                                                    </ul>
                                                    <div class="branch-all clearfix" alog-alias="bainuo-detail-branch-all" alog-group="bainuo-detail-branch-all">
                                                        <div class="branch-pages">
                                                            <div id="j-branch-page" class="w-branch-page clearfix">
                                                            </div>
                                                        </div>
                                                        <a href="/" class="branch-total" style="display: none;">
查看全部家分店<span>&gt;&gt;</span>
</a>
                                                    </div>
                                                </div>
                                                <script type="text/template" id="tpl-branch-list">
                                                    <% for (var i in branch) { %>
                                                        <li class="branch branch-close">
                                                            <a <%if (branch[i].link) { %>href="<%=branch[i].link%>" target="_blank"<% } %> class="branch-name"><%=branch[i].name%></a>
                                                            <p class="branch-address">
                                                                <%=branch[i].address%>
                                                            </p>
                                                            <p class="branch-tel">
                                                                <%=branch[i].phone%>
                                                            </p>
                                                            <p class="map-travel clearfix" data-longitude="<%=branch[i].baidu_longitude%>" data-latitude="<%=branch[i].baidu_latitude%>">
                                                                <a href="javascript:;" class="map">
                    <span class="icon"></span>
                    <span class="text">查询地图</span>
                </a>
                                                                <a href="javascript:;" class="travel">
                    <span class="icon"></span>
                    <span class="text">公交/驾车去这里</span>
                </a>
                                                            </p>
                                                        </li>
                                                        <% } %>
                                                </script>
                                            </div>
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
                            <div class="w-user-comment static-hook-real static-hook-id-19" id="j-user-comment">
                                <h3 class="w-section-header">
                                    会员评价
                                </h3>
                                <div class="detail clearfix " style="min-height: 200px">
                                   
                                    <ul>
                            @if($comment)
                                @foreach($comment as $v)
                                    @if($v['shopping_id']==$shopping['id'] && $v['user_id']==$v->user->id)    
                                        <div style="width: 720px;height: 80px">
                                            <div style="float:left;"><img src="/home/static/images/icon_4e372f0.png" style="border-radius: 50%" width="60px" height="60px" style="float:left;"></div>
                                            <div style="float:left;line-height:80px;width: 140px;height: 20px">{{$v->user->username}}</div>
                                            <div style="float:left;width: 360px;height:20px;margin-left:20px;padding-top: 20px">{{$v->content}}</div>
                                            <div style="padding-top: 20px;color:#ff658e">评价时间<br>{{$v['updated_at']}}</div>
                                        </div>
                                        
                                    @endif
                                @endforeach 
                                    @else
                                        <div>暂无评价</div>
                            @endif   
                                    </ul>
                                            
                                            
                                        
                                    
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="buy-bottom static-hook-real static-hook-id-20">
                    <div class="w-buy-bottom clearfix">
                        <ul class="bb-info-list">
                            <li class="info-price">
                                <div class="pic-price-area"><span class="unit">&yen;</span> <span style="font-size: 50px;">{{$shopping['price']}}</span></div>
                            </li>
                            <li class="info-ori">
                                <p class="info-title">门市价</p>
                                <p class="info-value">￥198</p>
                            </li>
                        </ul>
                        <a mon="area=buy&element=buyBottom&element_type=nav" href="//www.nuomi.com/buy/beijing/t00qpcidc?s=a816c32acc2bd60c8ade97fa9907cf13" class="btn-buy btn-buy-m j-btn-buy " id="pc-buy-bottom-id-for-hmt">
立即抢购</a>
                    </div>
                </div>
                <div class="bottom-recommend" id="j-bottomRecommend">
                    <div class="user-bought clearfix" id="ajax-recent-recommend">
                        <script id="j-recent-recommend-list" type="text/template">
                            <div mon="area=historyRecommend&s=<%=s%>" bn_box="historyRecommend&position" alog-alias="bainuo-detail-history-item" alog-group="bainuo-detail-history-item">
                                <div class="rcmd-title clearfix">
                                    <h3>根据您浏览历史的相关推荐</h3>
                                    <% var count = goodsItemList.length %>
                                        <%if (count > 4) { %>
                                            <a href="javascript:;" mon="element=historyRecommend" id="j-change-btn-r" class="change-btn">换一换<span>&nbsp;</span><span class="icon"></span></a>
                                            <% } %>
                                </div>
                                <div class="w-recent-recommend-list">
                                    <% var pageIndex = 0 %>
                                        <%for (var i in goodsItemList) { %>
                                            <%if (i % 4 == 0){ %>
                                                <div class="j-recommend-page recommend-page <%if (i==0) { %> show <% } %>" index="<%=Math.floor((parseInt(i)+1)/4)%>">
                                                    <% } %>
                                                        <% var goods_info = goodsItemList[i]%>
                                                            <div class="goods-item-recommend" <%if ((parseInt(i)+1) % 4==0){ %> style="margin-right: 0;"
                                                                <%}%> >
                                                                    <a mon="element=<%=goods_info.id%>&position=<%=i*1+1%>&element_type=item&s=<%=s%>" href="<%=goods_info.link%>" class="clearfix" target="_blank" data-item-st="<%=s%>">
                        <img class="goods-img" src="<%=goods_info.tiny_image%>" alt="<%=goods_info.min_title%>" title="<%=goods_info.min_title%>">

                    <div class="title"><%=goods_info.min_title%></div>
                    <div class="price-sold clearfix">
                        <div class="price">
                            <span class="current">&yen;<%=goods_info.current_price/100%></span>
                        </div>
                        <div class="sold">
                            <span class="name">已售</span><span class="current"><%=goods_info.sale_count%></span>
                        </div>
                    </div>
                    </a>
                                                            </div>
                                                            <%if ((parseInt(i)+1) % 4 == 0 || i== count-1 ){ %>
                                                </div>
                                                <% } %>
                                                    <% } %>
                                </div>
                            </div>
                        </script>
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
    <div id="footer" class="footer">
        <div class="re-footer-inner clearfix flexible">
            <div class="footer-size">
                <h3>用户帮助</h3>
                <ul>
                    <li><a href="//www.nuomi.com/help">常见团购问题</a></li>
                    <li><a href="//www.nuomi.com/help/api">开放API</a></li>
                </ul>
            </div>
            <div class="footer-size-2">
                <h3>手机百度助手</h3>
                <ul>
                    <li><a href="https://m.nuomi.com" target="_blank">百度糯米触屏版</a></li>
                    <li><a href="//d.nuomi.com/inter/group?from=WebRootWord" target="_blank">下载手机版</a></li>
                </ul>
            </div>
            <div class="footer-size-2">
                <h3>商务合作</h3>
                <ul>
                    <li><a href="//www.nuomi.com/links">友情链接</a></li>
                    <li><a href="https://mct.y.nuomi.com/sc/pc/guide/guideFlow?page=true">市场合作</a></li>
                </ul>
            </div>
            <div class="footer-size-2">
                <h3>公司信息</h3>
                <ul>
                    <li><a href="//www.nuomi.com/about">关于百度糯米</a></li>
                    <li><a href="http://weibo.com/nuomiwang" target="_blank">百度糯米新浪微博</a></li>
                    <li><a href="javascript:;" id="j-tttel">业务投诉</a></li>
                </ul>
            </div>
            <div class="footer-size-3">
                <h3>400-9216-666</h3>
                <ul>
                    <li>周一至周日&nbsp;9:00-22:00</li>
                    <li>客服电话&nbsp;免长途费</li>
                </ul>
                <a href="//d.nuomi.com/inter/group?from=WebRootWord" class="mobile-btn">手机专享优惠</a>
            </div>
        </div>
        <div class="footer-bottom">
            <a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11000002000001" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;"><img src="/home/static/picture/police_logo_2aa5dfa.png" style="float:left;"/><p style="float:left;height:20px;line-height:20px;margin: 0px 0px 0px 5px;">京公网安备 11000002000001号</p></a>
        </div>
    </div>
</div>
<script>
var monkeyPageId = "bainuo-detail-page-detail";
</script>
<script type="text/javascript">
<!--
(function(d) {
    (window.bd_cpro_rtid = window.bd_cpro_rtid || []).push({ id: "nH0znjDv" });
    var s = d.createElement("script");
    s.type = "text/javascript";
    s.async = true;
    s.src = location.protocol + "//cpro.baidu.com/cpro/ui/rt.js";
    var s0 = d.getElementsByTagName("script")[0];
    s0.parentNode.insertBefore(s, s0);
})(document);
//-->
</script>
<script>
(function() {
    try {
        if (!(!('performance' in window) || !('getEntriesByType' in window.performance) || !(window.performance.getEntriesByType('resource') instanceof Array))) {
            var LOG_REQUEST_URL = window.location.host.indexOf('m.nuomi.com') !== -1 ? '//m.nuomi.com/s.gif?' : '//www.nuomi.com/s.gif?';
            window.addEventListener('load', function() {
                setTimeout(function() {
                    try {
                        var events = ['navigationStart', 'redirectStart', 'redirectEnd', 'fetchStart', 'domainLookupStart', 'domainLookupEnd', 'connectStart', 'connectEnd', 'secureConnectionStart', 'requestStart', 'responseStart', 'responseEnd', 'domLoading', 'domInteractive', 'domContentLoadedEventStart', 'domContentLoadedEventEnd', 'domComplete', 'loadEventStart', 'loadEventEnd'];
                        var timing = window.performance.timing;
                        var zero = timing.navigationStart;
                        var mon = document.body.getAttribute('mon') || 'page=unknown';
                        var query = ['performance=1', 'zero=' + zero, mon];
                        for (var i = 0; i < events.length; i++) {
                            var event = events[i];
                            var eventTime = timing[event];
                            if (typeof eventTime !== 'undefined') {
                                var delta = eventTime - zero;
                                query.push(event + '=' + (delta < 0 ? 0 : delta));
                            }
                        }
                        var img = document.createElement('img');
                        img.style.display = 'none';
                        document.body.appendChild(img).src = LOG_REQUEST_URL + query.join('&');
                    } catch (err) {}
                }, 100);
            });
        }
    } catch (err) {}
})();
</script>
<script src="/home/static/js/jquery-1.10.2_d88366fd.js"></script>
</body>
<script type="text/javascript" src="/home/static/js/mod_e56bbba.js"></script>
<script type="text/javascript">
require.resourceMap({ "res": { "detail:widget/tongji_hm/tongji_hm.js": { "url": "//gss0.bdstatic.com/8r1VfDn9KggZnd_b8IqT0jB-xx1xbK/static/detail/widget/tongji_hm/tongji_hm_01d96e3.js" }, "detail:widget/ui/change_goods_page/change_goods_page.js": { "url": "//gss0.bdstatic.com/8r1VfDn9KggZnd_b8IqT0jB-xx1xbK/static/detail/widget/ui/change_goods_page/change_goods_page_ba1e7fb.js", "pkg": "detail:p2" }, "detail:widget/ui/change_pic/change_pic.js": { "url": "//gss0.bdstatic.com/8r1VfDn7KggZnd_b8IqT0jB-xx1xbK/static/detail/widget/ui/change_pic/change_pic_20fd959.js", "pkg": "detail:p2" }, "detail:widget/item_info/item_intro/item_intro.js": { "url": "//gss0.bdstatic.com/8r1VfDn-KggZnd_b8IqT0jB-xx1xbK/static/detail/widget/item_info/item_intro/item_intro_4d9af35.js", "pkg": "detail:p1" }, "detail:widget/item_info/item_intro/tips.js": { "url": "//gss0.bdstatic.com/8r1VfDn-KggZnd_b8IqT0jB-xx1xbK/static/detail/widget/item_info/item_intro/tips_993344e.js", "pkg": "detail:p1", "deps": ["common:widget/dep/etpl/main.js"] }, "detail:widget/spec_nav/spec_nav.js": { "url": "//gss0.bdstatic.com/8r1VfDn-KggZnd_b8IqT0jB-xx1xbK/static/detail/widget/spec_nav/spec_nav_888c3da.js", "pkg": "detail:p1" }, "detail:widget/see2see/see2see.js": { "url": "//gss0.bdstatic.com/8r1VfDn9KggZnd_b8IqT0jB-xx1xbK/static/detail/widget/see2see/see2see_4651d1f.js", "pkg": "detail:p1", "deps": ["detail:widget/ui/change_goods_page/change_goods_page.js"] }, "detail:widget/ugc/comment_content/comment_content.js": { "url": "//gss0.bdstatic.com/8r1VfDn7KggZnd_b8IqT0jB-xx1xbK/static/detail/widget/ugc/comment_content/comment_content_46bb876.js", "pkg": "detail:p1" }, "detail:widget/ugc/user_comment/user_comment.js": { "url": "//gss0.bdstatic.com/8r1VfDn7KggZnd_b8IqT0jB-xx1xbK/static/detail/widget/ugc/user_comment/user_comment_f857915.js", "pkg": "detail:p1", "deps": ["common:widget/ui/dialog/dialog.js", "common:widget/ui/pager/pager.js", "common:widget/ui/comment/comment.js", "detail:widget/ui/change_pic/change_pic.js", "common:widget/ui/usertrack/usertrack.js", "common:widget/ui/passport/passport.js"] } }, "pkg": { "detail:p2": { "url": "//gss0.bdstatic.com/8r1VfDn7KggZnd_b8IqT0jB-xx1xbK/static/detail/pkg/ui_97d7108.js" }, "detail:p1": { "url": "//gss0.bdstatic.com/8r1VfDn7KggZnd_b8IqT0jB-xx1xbK/static/detail/pkg/detail_old_9370079.js" } } });
</script>
<script type="text/javascript" src="/home/static/js/common_5e9cc9b.js"></script>
<script type="text/javascript" src="/home/static/js/tongji_hm_01d96e3.js"></script>
<script type="text/javascript" src="/home/static/js/detail_old_9370079.js"></script>
<script type="text/javascript" src="/home/static/js/ui_97d7108.js"></script>
<script type="text/javascript" src="/home/static/js/searchinfowindow_b411a5b.js"></script>
<script type="text/javascript" src="/home/static/js/shop_branch_c7fefe1.js"></script>
<script type="text/javascript" src="/home/static/js/detail_7f561fd.js"></script>
<script type="text/javascript">
! function() { require.async(['common:widget/static/init.js'], function(init) {}); }();
! function() {
    F.context('staticController').run(function(data, tools) {
        require.async(['detail:widget/tongji_hm/tongji_hm.js'],
            function(dsp) {
                dsp.init(
                    // 
                    { "staticData": { "p_id": "33330185", "p_name": "\u5b8f\u7535\u5bbe\u9986(\u62a5\u56fd\u5bfa\u5e97)", "p_img_url": "\/\/gss0.baidu.com\/7Po3dSag_xI4khGko9WTAnF6hhy\/nuomi\/eWH%3D720%2C436\/sign=137342cdc4bf6c81e55d51e58b0c8119\/562c11dfa9ec8a13ecd6f145ff03918fa1ecc043.jpg" }, "dynamicData": [] }
                );
            }
        );
    });
}();
! function() {
    F.context('staticController').run(function(data, tools) {
        //   
    });
}();
! function() {
    F.context('staticController').run(function() {
        require.async(['common:widget/new_header/bar/revision_bar.js']);
        require.async(['common:widget/new_header/bar/dropdown.js'], function(Dropdown) {
            var nav = new Dropdown({
                container: '#header-bar',
                containerClass: 'j-bar-dropdown'
            });
        });
    });
}();
! function() { F.context('staticController').run(function() { require.async(['common:widget/new_header/nav/nav.js'], function(Nav) { var nav = new Nav({ selectedClass: 'selected', container: '#j-catg', navContainerClass: 'all-cate', navClass: 'j-catg-row' }); }); }); }();
! function() {
    F.context({
        isHotCity: '1', // 
        isIndex: '', // 
        erweimaCurrentTime: new Date(1536236663 * 1000)
    });
    F.context('staticController').run(function() {
        require.async(['common:widget/iot_header/revision_header.js']);
    });
}();
! function() {
    (function() {
        var bp = document.createElement('script');
        var curProtocol = window.location.protocol.split(':')[0];
        if (curProtocol === 'https') {
            bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
        } else {
            bp.src = 'http://push.zhanzhang.baidu.com/push.js';
        }
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(bp, s);
    })();
}();
! function() {
    F.context('staticController').run(function() {

        require.async(["common:widget/ui/passport/passport.js"], function(loginApi) {

            $("#j-item-share").on("mouseover", function(e) {
                $("#j-share-channel").show();
            }).on("mouseout", function(e) {
                $("#j-share-channel").hide();
            });

            $("#j-item-collect").on("click", function(e) {
                loginApi.check(function() {
                    // 如果已经登录 // 
                    var url = '/pcindex/main/dealmark?dealId=33330185&dealmarkToken=3b40c07d294638472b57534f0f3ebc70';

                    $.getJSON(url, function(jsonData) {
                        if (0 == jsonData.errno) {
                            if (1 == jsonData.data) {
                                //收藏成功
                                $("#j-item-collect").addClass("item-collect-success");
                                $("#j-item-collect").html("已收藏");
                                $("#j-collect-success").fadeIn(500);
                                setTimeout(function() { $("#j-collect-success").fadeOut(500); }, 2000);
                            } else if (0 == jsonData.data) {
                                //取消收藏
                                $("#j-item-collect").removeClass("item-collect-success");
                                $("#j-collect-success").hide();
                            }
                        }
                    });
                });

                return false;
            });
        });

    });
}();
! function() {
    F.context('staticController').run(function() {
        $(function() {
            $("#j-images-list li").on("mouseover", function(e) {
                var $this = $(this);
                var src = $this.find("img").attr("data-img");

                $("#j-images-board .item-img-large").attr("src", src);
            });
        });
    });
}();
! function() {
    F.context('staticController').run(function(data, tools) {

        require.async('detail:widget/item_info/item_intro/tips.js',
            function(tips) {
                tips.init();
            }
        );

        // 
        if (this.isStatic) {

            var base = tools.smarty.base;
            var has = base.has;
            var output = base.output;
            var itemIntro = data.dtail_attr;
            if (has('data.t10.total') && data.t10.total > 0) {
                require.async('detail:widget/item_info/item_intro/item_intro.js', function(Jx) {
                    var marketingData = {
                        marketing_price: data.t10.preHotPrice,
                        actState: data.t10.actState
                    }
                    new Jx({
                        price: output(marketingData, 'marketing_price') + '',
                        status: output(marketingData, 'actState') + '',
                        period: data.t10.period
                    });
                });
            }

        } else {


        }

    });
}();
! function() { F.context('staticController').run(function() { $(function() { require.async("detail:widget/ui/change_goods_page/change_goods_page.js", function(change) { change(".j-buy2buy-page", "#j-change-btn"); }); }); }); }();
! function() {
    F.context('staticController').run(function() {
        require.async("detail:widget/spec_nav/spec_nav.js");
    });
}();
! function() { // 
    $("#j-branch-list-content").on("mouseover", function(e) {

        var $target = $(e.target);
        if ("li" != $target[0].tagName.toLowerCase()) {
            $target = $target.parents("li.branch");
        }

        if ($target.hasClass("branch-open")) {

            return true;
        }

        $("#j-branch-list-content li").removeClass("branch-open").addClass("branch-close");
        $target.removeClass("branch-close").addClass("branch-open");

    });
}();
! function() {
    F.context('ajax_url_shopchain', '/pcindex/main/shopchain'); // 
    F.context('deal_id', '33330185'); // 
    F.context('previewCode', ''); // 
    F.context('specifyMerchantID', '');
}();
! function() {
    F.context('staticController').run(function(data, tools) {
        // 
        var output = tools.smarty.base.output;
        F.context('status', this.isStatic ? output('data.ugc.user_comment.status', {}) :
            '1');
        F.context('dealId', '33330185'); // 
        F.context('orderId', this.isStatic ? output('data.ugc.user_comment.billId', {}) :
            '');
        F.context('catg_ids', '377,642,934'); // 
        F.context('buyUrl', '//www.nuomi.com/buy/beijing/t00qpcidc?s=' +
            (this.isStatic ? output('data.s', {}) : 'a816c32acc2bd60c8ade97fa9907cf13'));
        require.async(["detail:widget/ugc/user_comment/user_comment.js"], function(comment) {
            comment.init({
                isAsyncData: true
            });
        });
    });
}();
! function() {
    F.context('staticController').run(function() {
        require.async('detail:widget/see2see/see2see.js');
    });
}();
! function() {
    F.context('staticController').run(function(data, tools) {


        // 
        if (this.isStatic) {
            var smarty = tools.smarty;
            var base = smarty.base;
            var has = base.has;
            var output = base.output;
        }


        F.context('girlsHdDlgDetail', ''); // 

        // 初始化see2see，buy2buy  // 
        F.context(
            'hasLoggedInDetail',
            this.isStatic ? (smarty.fn.empty('data.userInfo', {}) ? '' : 1) :
            ''
        );

        F.context('dealid', '33330185'); // 

        $(function() {
            var dealid = F.context("dealid");
            //  // 
            var url_recent_view = '/pcindex/deal/visitdeal' +
                '?s=' + (this.isStatic ? output('data.s', {}) : 'a816c32acc2bd60c8ade97fa9907cf13');
            var url_clear_visited = '/pcindex/clearvst';

            require.async(["common:widget/ui/template/template.js"], function(Baidu) {
                var bdTpl = Baidu.template;

                var queryData = {
                    deal_id: '33330185', // 
                    refer: document.referrer //  // 
                }
                $.getJSON(url_recent_view, queryData, function(json) {
                    if (0 !== json.errno) {
                        return false;
                    }
                    var data = json.data;

                    if (data && data.historyRec && data.historyRec.list && data.historyRec.list.length > 0) {
                        /*相关推荐*/
                        var tpl = $("#j-recent-recommend-list").html();
                        //data.visitedDeal.detail.splice(0,data.visitedDeal.detail.length-4);
                        var tpl_data = {
                            "goodsItemList": data.historyRec.list,
                            "s": data.historyRec.s
                        }
                        var html = bdTpl(tpl, tpl_data);
                        $("#ajax-recent-recommend").html(html);
                        /*相关推荐的“换一换”按钮绑定事件*/
                        var change = require.async("detail:widget/ui/change_goods_page/change_goods_page.js", function(change) {
                            change(".j-recommend-page", "#j-change-btn-r");
                        });
                    } else {
                        //没有相关推荐
                        $('#j-bottomRecommend').hide();
                    }

                    if (data && data.visitedDeal && data.visitedDeal.detail && data.visitedDeal.detail.length > 0) {
                        /*最近查看*/
                        var tpl = $("#j-recent-view-list").html();
                        //data.visitedDeal.detail.splice(0,data.visitedDeal.detail.length-4);
                        var tpl_data = {
                            "goodsItemList": data.visitedDeal.detail,
                            "s": data.visitedDeal.s
                        }
                        var html = bdTpl(tpl, tpl_data);
                        $("#ajax-recent-view").html(html);
                        $("#j-empty-recent-view").on("click", function() {
                            $.post(url_clear_visited);
                            $("#ajax-recent-view").animate({ height: 0 }, 600, function() {
                                $("#ajax-recent-view").html("");
                            });
                        });
                    } else {
                        //没有最近查看
                        $('#j-bottomHistory').hide();
                    }

                });
            });


        });

    });
}();
! function() {
    require.async(['common:widget/ui/dialog/dialog.js'], function(Dialog) {
        $('#j-tttel').on('click', function() {
            Dialog.confirm({
                width: 560,
                customClassName: "ui-confirm-lz",
                content: '<p>业务投诉平台受理对团购业务运营过程的投诉和建议:<br />投诉地址：<a target="_blank" href="http://help.baidu.com/newadd?prod_id=25" class="link">http://help.baidu.com/newadd?prod_id=25</a></p><p>感谢您的反馈！</p>',
                footer: ['<a href="javascript:;" class="dialog-btn-cancel j-dialog-btn" data-event="cancel">关闭</a>'].join('')
            });
        });
    });
}();
! function() {
    F.context('staticController').run(function(data, tools) {
        var isStatic = this.isStatic;

        $.ajaxSetup({
            cache: false
        });

        //2014_10_11 zhangyijun02: 因增加广告轮播曝光日志逻辑，调整showtrack初始化方式
        require.async(['common:widget/ui/usertrack/usertrack.js', 'common:widget/ui/sidlog/pclog.js', 'common:widget/ui/lazyload/lazyload.js', 'common:widget/ui/cookie/cookie.js', 'common:widget/ui/showtrack/showtrack.js', 'common:widget/ui/items_post/items_post.js'], function(usertrack, pclog, LazyLoad, Cookie, ShowTrack, itemsPost) {
            // 初始化点击监听
            usertrack.init();

            new LazyLoad({
                lazy: $('img[data-original]'),
                expect: 250
            });

            itemsPost.init();

            var sendPv = (function(smartyData) {
                return function() {
                    var logInfoExt = isStatic ?
                        data && data.logInfoExt :
                        smartyData.dynamicData.logInfoExt;
                    logInfoExt = logInfoExt && Object.prototype.toString.call(logInfoExt) !== '[object Array]' ?
                        logInfoExt : {};
                    logInfoExt.page = smartyData.staticData.page;
                    pclog.sendPv(logInfoExt);

                    usertrack.send({
                        da_src: encodeURIComponent($.stringify({
                            page: smartyData.staticData.page
                        })),
                        element_type: 'pv'
                    });
                }
            })(
                // 
                { "staticData": { "page": "item_detail" }, "dynamicData": { "logInfoExt": { "s": "a816c32acc2bd60c8ade97fa9907cf13", "search_key": "[{\"s\":\"d52b8397e73f98ae5625528074cea219\",\"s_name\":\"merchantotherhot\"},{\"s\":\"8aa0923203e522f93b01edc37c2cfabc\",\"s_name\":\"seetosee\"},{\"s\":\"364dd9f17f6db28a36cbab19078ce16a\",\"s_name\":\"dbuytobuy\"}]" } } }
            );

            function handleBaiduid() {
                // 
                var getBaiduidUrl = '//nuomipassport.baidu.com/getbdid';
                var retryCount = 1;
                getBaiduid();

                function getBaiduid() {
                    $.ajax(getBaiduidUrl, {
                        dataType: 'jsonp',
                        success: function(json) {
                            if (json.errno == 0) {
                                var baiduid = json.data.baiduid;
                                if (baiduid) {
                                    Cookie.setRaw('BAIDUID', baiduid, 365);
                                }
                                // 不管有没有baiduid，都发送pv
                                sendPv();
                            } else {
                                if (retryCount--) {
                                    getBaiduid();
                                } else {
                                    // 最后一次也获取失败
                                    sendPv();
                                }
                            }
                        }
                    });
                }
            }

            handleBaiduid();

            //2014_10_11 zhangyijun02: 因增加广告轮播曝光日志逻辑，调整ShowTrack初始化方式
            //曝光日志统计
            ShowTrack.startShowTrack();
        });

    });
}();
! function() {
    require.async("common:widget/ui/httpslink/httpslink.js", function(httpslink) {
        httpslink.init();
    });
}();
! function() {
    require.async('common:widget/util/request_check.js',
        function(reqCheck) {
            reqCheck.init(F.context('da_page'));
        }
    );
}();
</script>

</html>
<!--14630533610928892682090620-->
<script>
var _trace_page_logid = 1463053361;
</script>