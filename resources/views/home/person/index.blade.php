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
                    <a class="item new-item" href="/food/4" mon="element=结婚" target="_top">
        结婚
    </a>
                </li>
                <li class="nav-item">
                    <a class="item new-item" href="/food/2" mon="element=美食" target="_top">
        美食
    </a>
                </li>
                <li class="nav-item">
                    <a class="item new-item" href="/food/3" mon="element=娱乐" target="_top">
        娱乐
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
                                </li>
                                <li class="nav-active">
                                    <a class="nav-txt j-nav" href="/hcomment">
										我的评价
									</a>

                                </li>
                                <li class="nav-active">
                                    <a class="nav-txt nav-link" href="/cunshoucang">
                                        我的收藏
                                    </a>
                                </li>
                                <li class="nav-active last">
                                    <a class="nav-txt j-nav">
                                        我的账户
                                    </a>
                                    <ul class="sub-nav" mon="area=subNav">
                                        <li>
                                            <a href="/zhanghu" class="">
                                                <span class="sub-nav-ico">&#149;</span>账户设置
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/mycoupon" class="">
                                                <span class="sub-nav-ico">&#149;</span>优惠券
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/cunzuji" class="">
                                                <span class="sub-nav-ico">&#149;</span>我的足迹
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
