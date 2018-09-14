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
                    <a href="/food">美食分类</a>
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
                        </h4> 
                        @foreach($shopping as $v) 
                        @if($v['shopUser_id']==$shopuser['id'])
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
                                        <a class="n-btn n-btn-primary btn-buy" href="" mon="element=33330185&position=0&s=22c6db79f151ca833ed03c36960cf669" target="_blank">
                                            立即购买
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif @endforeach
               
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
@include('layouts._foot')
