@include('layouts._daohang')
<link rel="stylesheet" type="text/css" href="/home/pstatic/css/global-revision_ee57746.css" />
<link rel="stylesheet" type="text/css" href="/home/pstatic/css/common_d7fb37f.css" />
<link rel="stylesheet" type="text/css" href="/home/pstatic/css/header_8e018e5.css" />
<link rel="stylesheet" type="text/css" href="/home/pstatic/css/user_0d53ca2.css" />
<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<div class="nav-bar-header nav-area-index static-hook-real static-hook-id-3">
    <div class="nav-inner flexible clearfix">
        <ul class="nav-list clearfix" mon="area=nav&element_type=nav" id="j-catg">
            <li class="nav-item cate-row all-cate deep"><span class="item ">个人中心</span>
                <li class="nav-item nav-item-first">
                    <a class="item first new-item" href="//www.nuomi.com" mon="element=首页" target="_top">
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
                <div class="uc p-order-list clearfix" style="margin-left:100px">
                    <div class="w-user-info" style="margin-top:60px">
                        <div class="user-name-wrap fl">
                            @if(Session::has('username'))   
                            <span class="user-name">{{Session::get('username')}}</span>
                            <span class="tit">手机已绑定</span>
                            <span class="account-info-con">
                            {{Session::get('phone')}}
                            </span>
                            @endif
                        </div>
                        <ul class="user-money-wrap fr">
                            <li>
                                <span class="tit">我的余额</span>
                                <span class="org">
                                &nbsp;&yen;0
                                </span>
                            </li>
                            <li class="last">
                                <span class="tit">优惠券</span>
                                <span class="org">
                                    &nbsp;0
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="uc-wrap">
                        <div class="uc-side fl">
                            <ul class="w-nav clearfix" id="j-uc-nav" mon="element_type=nav" alog-alias="bainuo-user-pagetab" alog-group="bainuo-user-pagetab">
                                <li class="nav-active nav-current">
                                    <a class="nav-txt j-nav" href="/person" style="color: #666">我的订单</a>
                                    <ul class="sub-nav" mon="area=subNav">
                                     
                                        <li>
                                            <a href="" class="">
												<span class="sub-nav-ico">&#149;</span>储值卡
											</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-active">
                                    <a class="nav-txt j-nav" href="/hcomment">
										我的评价
									</a>
                                    <ul class="sub-nav" mon="area=subNav">
                                        <li>
                                            <a href="/uc/comment/not" class="">
                                                <span class="sub-nav-ico">&#149;</span>待评价
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/uc/comment/already" class="">
                                                <span class="sub-nav-ico">&#149;</span>已评价
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-active">
                                    <a class="nav-txt nav-link" href="/uc/collection/online">
                                        我的收藏
                                    </a>
                                </li>
                                <li class="nav-active last">
                                    <a class="nav-txt j-nav" href="/zhanghu">
                                        我的账户
                                    </a>
                                    <ul class="sub-nav" mon="area=subNav">
                                        <li>
                                            <a href="/uc/user/userinfo" class="">
                                                <span class="sub-nav-ico">&#149;</span>账户设置
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/uc/hongbao/list?status=1&type=2" class="">
                                                <span class="sub-nav-ico">&#149;</span>余额(充值卡兑换)
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/uc/giftcard/find?status=1" class="">
                                                <span class="sub-nav-ico">&#149;</span>优惠券
                                            </a>
                                        </li>
                                        <li>
                                            <a href="//baifubao.baidu.com/jump?uri=%2Fuser%2F0%2Fmy_bfb%2F0&domain=https%3A%2F%2Fwww.baifubao.com" class="" target="_blank">
                                                <span class="sub-nav-ico">&#149;</span>百度钱包余额
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="w-phone-info">
                                <p class="phone-num">400-9216-666</p>
                                <p class="phone-tips">客服电话 免长途费
                                    <br />周一至周日 9:00-22:00</p>
                                <span class="sprite-line"></span>
                            </div>
                        </div>
                        @section('content')
                     
                        @show

    
                    </div>
                </div>
                

@include('layouts._foot')

                
