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
<script src="https://cdnjs.cloudflare.com/ajax/libs/social-share.js/1.0.16/js/social-share.min.js"></script>
<div class="nav-bar-header nav-area-index static-hook-real static-hook-id-3">
    <div class="nav-inner flexible clearfix">
        <ul class="nav-list clearfix" id="j-catg" mon="area=nav&element_type=nav">
            <li class="nav-item cate-row all-cate deep">
                <span class="item ">

                    <a href="/food/2">@foreach($industry as $v) @if($shopuser['industry_id'] == $v['id']) {{$v['name']}} @endif @endforeach分类</a>
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
                    <a class="item new-item " href="/food/1" mon="element=酒店" target="_top">
                        酒店
                    </a>
                </li>
                <li class="nav-item">
                    <a class="item new-item " href="/food/3" mon="element=娱乐" target="_top">
                        娱乐
                    </a>
                </li>
                <li class="nav-item">
                    <a class="item new-item " href="/food/2" mon="element=美食" target="_top">
                        美食
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="item new-item" href="/food/4" mon="element=结婚" target="_top">
                        结婚
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
                        <p class="shop-info" style="color: #ff4883;font-size: 16px">
                                人均：
                                <strong>
                                    ¥{{$shopuser['renprice']}}
                                </strong>
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

                                    <div class="newsview" style="padding:20px;float:right">
                                                   <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
                                        <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"24"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
                                            </div>

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

    
                    </div>
                    <div class="main-aside ">
                        <div class="shop-map">
                        </div>
                        <div class="shop-map shop-map-panorama">
                           
                        </div>
                        <div class="panel pc_shortview no-bottom-border" id="guess-like" mon="area=shortview">
                            <h3>
                                黄金广告位
                            </h3>
                            @foreach($ad as $v)
                                <img src="{{$v['img']}}" width="226px" height="100px" style="margin-top: 20px" title="{{$v['name']}}">
                            @endforeach
                        </div>
                    </div>
                </div>


@include('layouts._foot')



  

