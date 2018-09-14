@include('layouts._daohang')
<link rel="stylesheet" type="text/css" href="/home/static/css/global-revision_ee57746.css" />
<link rel="stylesheet" type="text/css" href="/home/static/css/common_d7fb37f.css" />
<link rel="stylesheet" type="text/css" href="/home/static/css/header_8e018e5.css" />
<link rel="stylesheet" type="text/css" href="/home/static/css/searchinfowindow_1da1739.css" />
<link rel="stylesheet" type="text/css" href="/home/static/css/panorama_89f6053.css" />
<link rel="stylesheet" type="text/css" href="/home/static/css/detail_da66d95.css" />
<link rel="stylesheet" type="text/css" href="/home/static/css/breadcrumb_3e56baf.css" />
<link rel="stylesheet" type="text/css" href="/home/static/css/dialog_206ad62.css" />
<link rel="stylesheet" type="text/css" href="/home/static/css/credentials_img_719f906.css" />
<link rel="stylesheet" type="text/css" href="/home/static/css/detail_old_acd0c5d.css" />
<div class="nav-bar-header nav-area-index static-hook-real static-hook-id-3">
    <div class="nav-inner flexible clearfix">
        <ul class="nav-list clearfix" id="j-catg" mon="area=nav&element_type=nav">
            <li class="nav-item cate-row all-cate deep">
                <span class="item ">
                    <a href="/food/2">美食分类</a>
                </span>
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
                        首页
                    </a>
                </li>
                <li class="nav-item">
                    <a class="item new-item " href="//t.nuomi.com" mon="element=酒店" target="_top">
                        酒店
                    </a>
                </li>
                <li class="nav-item item-dropdown">
                    <div class="item new-item">
                        出行
                    </div>
                    <i class="item-icon-arrowdown">
                    </i>
                    <ul class="item-arrowdown-container">
                        <div class="drop-block">
                        </div>
                        <li class="arrowdown-item">
                            <a class="arrowdown-item-link" href="http://flight.baidu.com/flight/h5redirect?v=1.0&type=1&client=pcweb&app_from=bainuo&src_from=bainuo_pc_main" mon="element=机票" target="_blank">
                                <div>
                                    机票
                                </div>
                            </a>
                        </li>
                        <li class="arrowdown-item">
                            <a class="arrowdown-item-link" href="http://api.kuai.baidu.com/cserver/train/redirectctrip?&u=http%253a%252f%252ftrains.ctrip.com%252f%253f%2526mkt_header%253dbdkx%2526allianceID%253d106175%2526sid%253d549977%0a&us=nuomi_pc" mon="element=火车" target="_blank">
                                <div>
                                    火车票
                                </div>
                            </a>
                        </li>
                        <li class="arrowdown-item">
                            <a class="arrowdown-item-link" href="//kuai.baidu.com/pc/index/index?us=nuomi_pc" mon="element=汽车" target="_blank">
                                <div>
                                    汽车票
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item hot-item-s">
                    <a class="item new-item " href="//dianying.nuomi.com?cityId=131" mon="element=电影" target="_blank">
                        电影
                        <i class="new-item-hot">
                        </i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="item new-item" href="//bj.nuomi.com/pcindex/dipin#/list/565" mon="element=结婚" target="_top">
                        结婚
                    </a>
                </li>
                <li class="nav-item">
                    <a class="item new-item" href="http://waimai.baidu.com/?utm_source=bainuo&utm_medium=nav&utm_content=toububiaoqian&utm_term=default&utm_campaign=beijing&cid=PC_%E5%93%81%E7%89%8C%E6%8E%A8%E5%B9%BF_940766" mon="element=外卖" target="_blank">
                        外卖
                    </a>
                </li>
                <pre></pre>
                <div alog-alias="bainuo-detail-bread-crumb" alog-group="bainuo-detail-bread-crumb" class="static-hook-real static-hook-id-4" mon="deal_id=">
                    <div class="w-bread-crumb" mon="area=breadCrumbs">
                        <ul class="crumb-list clearfix">
                        </ul>
                    </div>
                </div>
                <div class="main-container">
                    <div class="shop-box">
                        <h2 class="shop-title">
                            {{$shopuser['name']}}
                            <a class=" credentials-icon credentials-hide " href="#" id="credentials-icon" mon="
                    area=partner_qualification&element=&position=&element_type=item
                " title="商家资质信息">
                            </a>
                        </h2>
                        <p class="shop-info">
                            <span class="n-star n-star-small">
                                <span class="n-star-cnt" style="width: 0px;">
                                </span>
                            </span>
                            <span class="score">
                                0.0
                            </span>
                            <span class="evaluate">
                                <a href="#user-comment-title">
                                    （0人评价）
                                </a>
                            </span>
                            <span class="price">
                                人均：
                                <strong>
                                    ¥78
                                </strong>
                            </span>
                        </p>
                        <ul class="shop-list">
                            <li class="item">
                                <label>
                                    地
                                    <span>
                                        址
                                    </span> ：
                                </label>
                                <p class="bd detail-shop-address">
                                    <span>
                                        {{$shopuser['address']}}
                                    </span>
                                    <span class="map" id="map-view">
                                        <i class="iconfont">
                                            
                                        </i>
                                        <a href="">查看地图</a>
                                    </span>
                                </p>
                            </li>
                            <li class="item">
                                <label>
                                    电
                                    <span>
                                        话
                                    </span> ：
                                </label>
                                <p class="bd">
                                    {{$shopuser['phone']}}
                                </p>
                            </li>
                        </ul>
                        <div class="shop-logo">
                            <img alt="{{$shopuser['name']}}" class=" more-width " src="{{$shopuser['pic']}}" />
                        </div>
                    </div>
                    <div class="main-section">
                        <h4 class="n-title">
                            当前商家团购
                        </h4> @foreach($shopping as $v) @if($v['shopUser_id']==$shopuser['id'])
                        <div class="shop-current-wrap ">
                            <div class="shop-current" mon="area=shop_current">
                                <div class="col-wrap">
                                    <div class="n-item col col-1">
                                        <a class="n-item-image" data-item-st="22c6db79f151ca833ed03c36960cf669" href="/home/{{$v->id}}.html" mon="element=33330185&position=0&s=22c6db79f151ca833ed03c36960cf669" target="_blank">
                                            <img alt="{{$v['name']}}" src="{{$v['img']}}"/>
                                        </a>
                                        <div class="n-item-content">
                                            <h4 class="header">
                                                <a data-item-st="22c6db79f151ca833ed03c36960cf669" href="/home/{{$v->id}}.html">
                                                    {{$v['name']}}
                                                </a>
                                            </h4>
                                            <p class="meta">
                                            </p>
                                            <p class="meta">
                                                现有{{$v['counts']}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col col-2">
                                        <div class="sl-hvalign">
                                            <p class="meta sl-hvalign-cnt">
                                                有效期：2018-09-30
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col col-3">
                                        <div class="sl-hvalign">
                                            <div class="sl-hvalign-cnt">
                                                <p class="price">
                                                    ￥
                                                    <strong>
                                                        {{$v['price']}}
                                                    </strong>
                                                </p>
                                                <p class="meta">
                                                    门市价
                                                    <del>
                                                        ￥198
                                                    </del>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-4">
                                        <a class="n-btn n-btn-primary btn-buy" href="/home/{{$v->id}}.html" mon="element=33330185&position=0&s=22c6db79f151ca833ed03c36960cf669" target="_blank">
                                            立即购买
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif @endforeach

                        <h4 class="n-title" id="user-comment-title">用户评价</h4>
                        <div class="user-comment user-comment-shop">
                            <div class="w-user-comment static-hook-real static-hook-id-5" id="j-user-comment">
                                <div class="detail clearfix ">
                                    <div class="no-comment">
                                    </div>
                                    <div class="no-comment">
                                        暂无评论
                                    </div>
                                </div>
                            </div>
                        </div>

               

                    </div>
                    <div class="main-aside ">
                        <div class="shop-map">
                            <div class="inner">
                                <div alog-alias="bainuo-map" alog-group="bainuo-map" class="w-map">
                                    <div class="map-container" id="j-map-container">
                                    </div>
                                    <a class="map-zoom" href="###" id="j-map-zoom">
                                        <span>
                                            查看完整地图
                                        </span>
                                    </a>
                                </div>
                                <script id="tpl-map-dlg" type="text/template">
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
                                <script id="tpl-dlg-shoplist" type="text/html">
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
                                <script src="/home/static/js/46d584d47250419093399de619378ba7.js" type="text/javascript">
                                </script>
                            </div>
                        </div>
                        <div class="shop-map shop-map-panorama">
                            <div class="inner">
                                <div class="w-map">
                                    <div class="map-container" id="map-panorama-container">
                                    </div>
                                    <a class="map-zoom map-zoom-panorama" href="javascript:;" id="map-panorama-zoom">
                                        <span>
                                            查看全景大图
                                        </span>
                                    </a>
                                </div>
                                <script id="tpl-map-panorama-dlg" type="text/template">
                                    <div class="tpl-map-dlg map-panorama-dlg">
                                        <div class="md-header clearfix">
                                            <h3>宏电宾馆(报国寺店)</h3>
                                            <a href="//d.nuomi.com/inter/group" target="_blank">
                <span>用百度糯米手机版，随时随地查看商家地图</span>
                <span class="download-free">免费下载</span>
            </a>
                                        </div>
                                        <div class="md-map-area clearfix">
                                            <div id="map-panorama-dlg-view" class="md-map-view md-map-panorama">
                                            </div>
                                            <div class="md-map-info">
                                                <h3 class="shop-name ">宏电宾馆(报国寺店)</h3>
                                                <p class="phone">地址：北京市西城区广安门内大街报国寺西夹道32号地铁7号线--广安门内站</p>
                                                <p class="phone">电话：01083167543</p>
                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>
                        </div>
                        <div class="panel pc_shortview no-bottom-border" id="guess-like" mon="area=shortview">
                            <h3>
                                看了又看
                                <a class="refresh" href="#" id="shortview_btn">
                                    <span class="refresh-logo">
                                    </span>
                                </a>
                            </h3>
                            <ul bn_box="shortview&position" class="panellist" data-current="1" data-page="3" id="shortview_btn_list" mon="s=">
                            </ul>
                        </div>
                    </div>
                </div>
                <script id="tpl-map-shop-dlg" type="text/template">
                    <div class="tpl-map-dlg">
                        <div class="md-header clearfix">
                            <h3>宏电宾馆(报国寺店)</h3>
                            <a href="//d.nuomi.com/inter/group" target="_blank">
                    <span>用百度糯米手机版，随时随地查看商家地图</span>
                    <span class="download-free">免费下载</span>
                </a>
                        </div>
                        <div class="md-map-area clearfix">
                            <div id="j-md-map-view" class="md-map-view">
                            </div>
                            <div class="md-map-info">
                                <h3 class="shop-name ">宏电宾馆(报国寺店)</h3>
                                <p class="phone">地址：北京市西城区广安门内大街报国寺西夹道32号地铁7号线--广安门内站</p>
                                <p class="phone">电话：01083167543</p>
                                <p class="btn-wrap">
                                    <button class="n-btn n-btn-primary btn-go">公交/驾车去这里</button>
                                </p>
                                <div id="j-search-result" class="result-panel">
                                </div>
                            </div>
                        </div>
                    </div>
                </script>
                <div class="re-footer-content">
                    <div class="footer" id="footer">
                        <div class="re-footer-inner clearfix flexible">
                            <div class="footer-size">
                                <h3>
                                    用户帮助
                                </h3>
                                <ul>
                                    <li>
                                        <a href="//www.nuomi.com/help">
                                            常见团购问题
                                        </a>
                                    </li>
                                    <li>
                                        <a href="//www.nuomi.com/help/api">
                                            开放API
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="footer-size-2">
                                <h3>
                                    手机百度助手
                                </h3>
                                <ul>
                                    <li>
                                        <a href="https://m.nuomi.com" target="_blank">
                                            百度糯米触屏版
                                        </a>
                                    </li>
                                    <li>
                                        <a href="//d.nuomi.com/inter/group?from=WebRootWord" target="_blank">
                                            下载手机版
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="footer-size-2">
                                <h3>
                                    商务合作
                                </h3>
                                <ul>
                                    <li>
                                        <a href="//www.nuomi.com/links">
                                            友情链接
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://mct.y.nuomi.com/sc/pc/guide/guideFlow?page=true">
                                            市场合作
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="footer-size-2">
                                <h3>
                                    公司信息
                                </h3>
                                <ul>
                                    <li>
                                        <a href="//www.nuomi.com/about">
                                            关于百度糯米
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://weibo.com/nuomiwang" target="_blank">
                                            百度糯米新浪微博
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" id="j-tttel">
                                            业务投诉
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="footer-size-3">
                                <h3>
                                    400-9216-666
                                </h3>
                                <ul>
                                    <li>
                                        周一至周日 9:00-22:00
                                    </li>
                                    <li>
                                        客服电话 免长途费
                                    </li>
                                </ul>
                                <a class="mobile-btn" href="//d.nuomi.com/inter/group?from=WebRootWord">
                                    手机专享优惠
                                </a>
                            </div>
                        </div>
                        <div class="footer-bottom">
                            <a href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11000002000001" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;" target="_blank">
                                <img src="/home/static/picture/police_logo_2aa5dfa.png" style="float:left;"/>
                                <p style="float:left;height:20px;line-height:20px;margin: 0px 0px 0px 5px;">
                                    京公网安备 11000002000001号
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
                <script>
                var monkeyPageId = "bainuo-business-page-detail";
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
                <script src="/home/static/js/jquery-1.10.2_d88366fd.js">
                </script>
            </li>
        </ul>
    </div>
</div>
<script src="/home/static/js/mod_e56bbba.js" type="text/javascript">
</script>
<script type="text/javascript">
require.resourceMap({ "res": { "detail:widget/map_panorama/panorama.js": { "url": "//gss0.bdstatic.com/8r1VfDn-KggZnd_b8IqT0jB-xx1xbK/static/detail/widget/map_panorama/panorama_321b5e3.js" }, "detail:widget/map_panorama/panoramaDialog.js": { "url": "//gss0.bdstatic.com/8r1VfDn-KggZnd_b8IqT0jB-xx1xbK/static/detail/widget/map_panorama/panoramaDialog_1c68737.js", "deps": ["common:widget/dep/moye/Dialog.js", "detail:widget/map_panorama/panorama.js"] }, "detail:widget/credentials_img/mock.js": { "url": "//gss0.bdstatic.com/8r1VfDn-KggZnd_b8IqT0jB-xx1xbK/static/detail/widget/credentials_img/mock_2326eaf.js" }, "detail:widget/credentials_img/helper.js": { "url": "//gss0.bdstatic.com/8r1VfDn-KggZnd_b8IqT0jB-xx1xbK/static/detail/widget/credentials_img/helper_694538c.js", "deps": ["common:widget/dep/etpl/main.js"] }, "detail:widget/credentials_img/credentials_img.js": { "url": "//gss0.bdstatic.com/8r1VfDn-KggZnd_b8IqT0jB-xx1xbK/static/detail/widget/credentials_img/credentials_img_69f68fb.js", "deps": ["detail:widget/credentials_img/mock.js", "detail:widget/credentials_img/helper.js"] }, "detail:widget/ui/change_goods_page/change_goods_page.js": { "url": "//gss0.bdstatic.com/8r1VfDn9KggZnd_b8IqT0jB-xx1xbK/static/detail/widget/ui/change_goods_page/change_goods_page_ba1e7fb.js", "pkg": "detail:p2" }, "detail:widget/ui/change_pic/change_pic.js": { "url": "//gss0.bdstatic.com/8r1VfDn7KggZnd_b8IqT0jB-xx1xbK/static/detail/widget/ui/change_pic/change_pic_20fd959.js", "pkg": "detail:p2" }, "detail:widget/item_info/item_intro/item_intro.js": { "url": "//gss0.bdstatic.com/8r1VfDn-KggZnd_b8IqT0jB-xx1xbK/static/detail/widget/item_info/item_intro/item_intro_4d9af35.js", "pkg": "detail:p1" }, "detail:widget/item_info/item_intro/tips.js": { "url": "//gss0.bdstatic.com/8r1VfDn-KggZnd_b8IqT0jB-xx1xbK/static/detail/widget/item_info/item_intro/tips_993344e.js", "pkg": "detail:p1", "deps": ["common:widget/dep/etpl/main.js"] }, "detail:widget/spec_nav/spec_nav.js": { "url": "//gss0.bdstatic.com/8r1VfDn-KggZnd_b8IqT0jB-xx1xbK/static/detail/widget/spec_nav/spec_nav_888c3da.js", "pkg": "detail:p1" }, "detail:widget/see2see/see2see.js": { "url": "//gss0.bdstatic.com/8r1VfDn9KggZnd_b8IqT0jB-xx1xbK/static/detail/widget/see2see/see2see_4651d1f.js", "pkg": "detail:p1", "deps": ["detail:widget/ui/change_goods_page/change_goods_page.js"] }, "detail:widget/ugc/comment_content/comment_content.js": { "url": "//gss0.bdstatic.com/8r1VfDn7KggZnd_b8IqT0jB-xx1xbK/static/detail/widget/ugc/comment_content/comment_content_46bb876.js", "pkg": "detail:p1" }, "detail:widget/ugc/user_comment/user_comment.js": { "url": "//gss0.bdstatic.com/8r1VfDn7KggZnd_b8IqT0jB-xx1xbK/static/detail/widget/ugc/user_comment/user_comment_f857915.js", "pkg": "detail:p1", "deps": ["common:widget/ui/dialog/dialog.js", "common:widget/ui/pager/pager.js", "common:widget/ui/comment/comment.js", "detail:widget/ui/change_pic/change_pic.js", "common:widget/ui/usertrack/usertrack.js", "common:widget/ui/passport/passport.js"] }, "detail:widget/shop_map/shopMap.js": { "url": "//gss0.bdstatic.com/8r1VfDn9KggZnd_b8IqT0jB-xx1xbK/static/detail/widget/shop_map/shopMap_fe2a567.js", "deps": ["common:widget/map/map.js"] }, "detail:widget/shop_map/MapDialog.js": { "url": "//gss0.bdstatic.com/8r1VfDn7KggZnd_b8IqT0jB-xx1xbK/static/detail/widget/shop_map/MapDialog_fa29061.js", "deps": ["common:widget/dep/moye/Dialog.js", "detail:widget/shop_map/shopMap.js"] }, "detail:widget/shop_map/main.js": { "url": "//gss0.bdstatic.com/8r1VfDn9KggZnd_b8IqT0jB-xx1xbK/static/detail/widget/shop_map/main_04fe4b7.js", "deps": ["detail:widget/shop_map/shopMap.js", "detail:widget/shop_map/MapDialog.js"] } }, "pkg": { "detail:p2": { "url": "//gss0.bdstatic.com/8r1VfDn7KggZnd_b8IqT0jB-xx1xbK/static/detail/pkg/ui_97d7108.js" }, "detail:p1": { "url": "//gss0.bdstatic.com/8r1VfDn7KggZnd_b8IqT0jB-xx1xbK/static/detail/pkg/detail_old_9370079.js" } } });
</script>
<script src="/home/static/js/common_5e9cc9b.js" type="text/javascript">
</script>
<script src="/home/static/js/searchinfowindow_b411a5b.js" type="text/javascript">
</script>
<script src="/home/static/js/panorama_321b5e3.js" type="text/javascript">
</script>
<script src="/home/static/js/mock_2326eaf.js" type="text/javascript">
</script>
<script src="/home/static/js/helper_694538c.js" type="text/javascript">
</script>
<script src="/home/static/js/credentials_img_69f68fb.js" type="text/javascript">
</script>
<script src="/home/static/js/detail_4e51b19.js" type="text/javascript">
</script>
<script type="text/javascript">
! function() { require.async(['common:widget/static/init.js'], function(init) {}); }();
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
        erweimaCurrentTime: new Date(1536236662 * 1000)
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
    F.context('page', 'merchant_detail');
    F.context('merchant_id', '2261826');
    F.context('comment_total', '0');
}();
! function() {
    F.context('staticController').run(function(data, tools) {
        // 
        var output = tools.smarty.base.output;
        F.context('status', this.isStatic ? output('data.ugc.user_comment.status', {}) :
            '');
        F.context('dealId', ''); // 
        F.context('orderId', this.isStatic ? output('data.ugc.user_comment.billId', {}) :
            '');
        F.context('catg_ids', ''); // 
        F.context('buyUrl', '//www.nuomi.com/buy//?s=' +
            (this.isStatic ? output('data.s', {}) : ''));
        require.async(["detail:widget/ugc/user_comment/user_comment.js"], function(comment) {
            comment.init();
        });
    });
}();
! function() {
    require.async(['detail:widget/map_panorama/panorama.js', 'detail:widget/map_panorama/panoramaDialog.js'],
        function(panorama, panoramaDialog) {
            var config = {
                pid: '09002200121706251455268492Q',
                iid: '',
                angle: {
                    pitch: 0,
                    heading: 335,
                    zoom: 1
                },
                isMercator: true,
                position: {
                    lng: '12953897',
                    lat: '4823363'
                }
            }
            panorama('map-panorama-container').init(config);
            panoramaDialog.init('map-panorama-dlg-view', config);
        });
}();
! function() {
    (function(data) {
        'use strict';

        require.async(['detail:widget/credentials_img/credentials_img.js'], function(credentials) {
            var tpls = function() {};

            credentials.init(tpls, data);
        });

    })({ "show": false, "data": [], "compentUrl": "\/\/m.nuomi.com\/component\/merchants\/qualifications.html?merchantId=2261826" });
}();
! function() {
    require.async(['detail:widget/shop_map/shopMap.js', 'detail:widget/shop_map/main.js'], function(ShopMap, main) {
        var myGeo = null;
        var lat = '39.897609';
        var lon = '116.3654';
        if (lat.length < 1 || lon.length < 1) {
            myGeo = new BMap.Geocoder();
            myGeo.getPoint('北京市西城区广安门内大街报国寺西夹道32号地铁7号线--广安门内站', function(point) {
                point = [{
                    lat: point.lat,
                    lon: point.lng
                }];
                initShopMap(point);
            });
        } else {
            initShopMap([{ lat: lat, lon: lon }]);
        }

        function initShopMap(point) {
            var sm = new ShopMap({
                main: 'j-map-container',
                point: point
            });
            sm.addPin(point);
            main.init({
                shop: {
                    name: '宏电宾馆(报国寺店)',
                    address: '北京市西城区广安门内大街报国寺西夹道32号地铁7号线--广安门内站',
                    phone: '01083167543'
                },
                point: point
            });
        }
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
                { "staticData": { "page": "shop_page" }, "dynamicData": { "logInfoExt": { "search_key": "[{\"s\":\"7bdb2eef75065fc873b44c8cc6b3aa7b\",\"s_name\":\"visited\"}]" } } }
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
</script>
<!--14622689260762103562090620-->
<script>
var _trace_page_logid = 1462268926;
</script>