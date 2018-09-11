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
                            <a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11000002000001" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;"><img src="/home/pstatic/picture/police_logo_2aa5dfa.png" style="float:left;"/><p style="float:left;height:20px;line-height:20px;margin: 0px 0px 0px 5px;">京公网安备 11000002000001号</p></a>
                        </div>
                    </div>
                </div>
                <script>
                var monkeyPageId = "bainuo-user-page-orderlist";
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
                <script src="/home/pstatic/js/jquery-1.10.2_d88366fd.js"></script>
                </body>
                <script type="text/javascript" src="/home/static/js/mod_e56bbba.js"></script>
                <script type="text/javascript">
                require.resourceMap({ "res": { "user:widget/address_form/address_form.js": { "url": "//gss0.bdstatic.com/8r1VfDn9KggZnd_b8IqT0jB-xx1xbK/static/user/widget/address_form/address_form_557d87d.js", "pkg": "user:p0", "deps": ["common:widget/ui/dialog/dialog.js"] }, "user:widget/balance/balance_list/card_exchange.js": { "url": "//gss0.bdstatic.com/8r1VfDn7KggZnd_b8IqT0jB-xx1xbK/static/user/widget/balance/balance_list/card_exchange_6664b2d.js", "pkg": "user:p0", "deps": ["common:widget/ui/dialog/dialog.js"] }, "user:widget/comment/comment_wrap.js": { "url": "//gss0.bdstatic.com/8r1VfDn9KggZnd_b8IqT0jB-xx1xbK/static/user/widget/comment/comment_wrap_d1176dc.js", "pkg": "user:p0", "deps": ["common:widget/ui/comment/comment.js"] }, "user:widget/my_account/account_info/account_info.js": { "url": "//gss0.bdstatic.com/8r1VfDn-KggZnd_b8IqT0jB-xx1xbK/static/user/widget/my_account/account_info/account_info_5c0bf07.js", "pkg": "user:p0", "deps": ["common:widget/ui/voice_check/voice_check.js"] }, "user:widget/my_account/address/address.js": { "url": "//gss0.bdstatic.com/8r1VfDn9KggZnd_b8IqT0jB-xx1xbK/static/user/widget/my_account/address/address_090a85c.js", "pkg": "user:p0", "deps": ["common:widget/ui/dialog/dialog.js"] }, "user:widget/my_account/password/Abstract.js": { "url": "//gss0.bdstatic.com/8r1VfDn7KggZnd_b8IqT0jB-xx1xbK/static/user/widget/my_account/password/Abstract_ce71d77.js", "pkg": "user:p0", "deps": ["common:widget/dep/moye/Dialog.js", "common:widget/dep/moye/lib.js", "common:widget/dep/avalon/avalon.js"] }, "user:widget/my_account/password/amount.js": { "url": "//gss0.bdstatic.com/8r1VfDn7KggZnd_b8IqT0jB-xx1xbK/static/user/widget/my_account/password/amount_778932a.js", "pkg": "user:p0", "deps": ["common:widget/util/sms.js", "common:widget/util/ejson.js", "common:widget/dep/moye/lib.js", "common:widget/dep/avalon/avalon.js", "user:widget/my_account/password/Abstract.js", "common:widget/dep/moye/Dialog.js"] }, "user:widget/my_account/password/tel.js": { "url": "//gss0.bdstatic.com/8r1VfDn-KggZnd_b8IqT0jB-xx1xbK/static/user/widget/my_account/password/tel_5a96777.js", "pkg": "user:p0", "deps": ["common:widget/util/sms.js", "common:widget/util/ejson.js", "common:widget/dep/moye/lib.js", "common:widget/dep/avalon/avalon.js", "common:widget/dep/moye/Dialog.js", "user:widget/my_account/password/Abstract.js"] }, "user:widget/my_account/password/setting.js": { "url": "//gss0.bdstatic.com/8r1VfDn-KggZnd_b8IqT0jB-xx1xbK/static/user/widget/my_account/password/setting_0c28731.js", "pkg": "user:p0", "deps": ["common:widget/dep/avalon/avalon.js", "common:widget/util/ejson.js", "user:widget/my_account/password/amount.js", "user:widget/my_account/password/tel.js"] }, "user:widget/my_account/main.js": { "url": "//gss0.bdstatic.com/8r1VfDn7KggZnd_b8IqT0jB-xx1xbK/static/user/widget/my_account/main_11157dd.js", "pkg": "user:p0", "deps": ["common:widget/dep/moye/Tab.js", "user:widget/my_account/password/setting.js"] }, "user:widget/my_account/password/password.js": { "url": "//gss0.bdstatic.com/8r1VfDn9KggZnd_b8IqT0jB-xx1xbK/static/user/widget/my_account/password/password_f67f86a.js", "pkg": "user:p0", "deps": ["common:widget/ui/passport_bind_phone/passport_bind_phone.js", "common:widget/util/sms.js", "common:widget/dep/avalon/avalon.js", "common:widget/util/encrypt.js", "common:widget/util/ejson.js"] }, "user:widget/my_collection/my_collection.js": { "url": "//gss0.bdstatic.com/8r1VfDn7KggZnd_b8IqT0jB-xx1xbK/static/user/widget/my_collection/my_collection_7291004.js", "pkg": "user:p0", "deps": ["common:widget/ui/dialog/dialog.js"] }, "user:widget/order_cinema/list/list.js": { "url": "//gss0.bdstatic.com/8r1VfDn-KggZnd_b8IqT0jB-xx1xbK/static/user/widget/order_cinema/list/list_19fd522.js", "pkg": "user:p0", "deps": ["common:widget/ui/dialog/dialog.js", "common:widget/ui/template/template.js", "common:widget/ui/passport_bind_phone/passport_bind_phone.js"] }, "user:widget/order_wuliu/detail/detail.js": { "url": "//gss0.bdstatic.com/8r1VfDn9KggZnd_b8IqT0jB-xx1xbK/static/user/widget/order_wuliu/detail/detail_02fbc9b.js", "pkg": "user:p0", "deps": ["common:widget/ui/dialog/dialog.js", "common:widget/ui/template/template.js"] }, "user:widget/ui/order_operate/order_operate.js": { "url": "//gss0.bdstatic.com/8r1VfDn9KggZnd_b8IqT0jB-xx1xbK/static/user/widget/ui/order_operate/order_operate_1f6134a.js", "pkg": "user:p0", "deps": ["common:widget/ui/dialog/dialog.js", "common:widget/ui/template/template.js", "common:widget/ui/comment/comment.js"] }, "user:widget/ui/qianbao/sync_bduss.js": { "url": "//gss0.bdstatic.com/8r1VfDn-KggZnd_b8IqT0jB-xx1xbK/static/user/widget/ui/qianbao/sync_bduss_bc35d29.js", "pkg": "user:p0" } }, "pkg": { "user:p0": { "url": "//gss0.bdstatic.com/8r1VfDn9KggZnd_b8IqT0jB-xx1xbK/static/user/pkg/user_66d4cce.js" } } });
                </script>
                <script type="text/javascript" src="/home/static/js/common_5e9cc9b.js"></script>
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
                        erweimaCurrentTime: new Date(1536240851 * 1000)
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
                    var passBindPhone = require('common:widget/ui/passport_bind_phone/passport_bind_phone.js');
                    //直接调用，自动判断status并弹出绑定
                    $("#j-uc-bind-phone").click(function() {
                        passBindPhone.bind();
                    });
                }();
                ! function() { /* require("user:widget/nav/nav.js"); */
                    $(function() {

                        $("#j-uc-nav .j-nav").on('click', function() {
                            $(this).parent("li").toggleClass("nav-active");
                        });

                    });

                }();
                ! function() {
                    require.async(['user:widget/ui/qianbao/sync_bduss.js'], function(qianbao) {
                        qianbao.init({ "appid": 2, "tpl": "nuomi", "bds": "AUJ67TO+5SUkr3v+HQilEnp+8xmxh\/44q44iFwfURDOU0Nj9LNbwcc5lvUkD5GxLGb+r+HluZIEYro0Q4XbvkskIJyrFyNhsJAVcby2wCa9BI3rh3rZxnLKCn+tOZOxerLGd76ADfKrHmY16\/E1zPsuLdkcECvMPGM+BlFvsnsHUmXrV9cgjTDVYVmbdoBSHvcg61gOG2rQWPuiboHcbjPZ\/phCHknnNoiWWyv18BhZjI+La40lNwXfLPvN\/tNY\/", "bdid": "NDI2RjlCNUFBQzAxNTM2OUVFNTg2QUIyMkVDRENGQjA6Rkc9MQ==", "version": "safe", "sign": "d4a46558fb635c90fc190d541103d2cd" });
                    });
                }();
                ! function() {
                    require.async('user:widget/ui/order_operate/order_operate.js', function(order) {
                        order.init("#J-orders-wrap");
                    });
                }();
                ! function() { // 翻页
                    require.async('common:widget/ui/pager/pager.js', function(Pager) {
                        var p = $("#J-pager").attr("data-p"),
                            pn = $("#J-pager").attr("data-pn"),
                            total = $("#J-pager").attr("data-total"),

                            status = $("#J-pager").attr("data-status");

                        var urlBase = '/uc/order/order?status=' + status + '&';

                        var options = {
                            currentPage: p || 1,
                            totalPage: Math.ceil(total / (pn || 20)),
                            viewSize: 10,

                            labelFirst: '<div class="ico-pre"></div>',
                            labelPrev: '上一页',
                            labelNext: '下一页',
                            labelLast: '<div class="ico-next"></div>',
                            islabelLastShow: true
                        };

                        if ((options.totalPage) > 1) {
                            var pager = new Pager('J-pager', options);

                            pager.on('pagechange', function(pageNum) {
                                location.href = urlBase + 'p=' + pageNum;
                                return false;
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
                                { "staticData": { "page": "order_list" }, "dynamicData": { "logInfoExt": { "order_id": "2282279537" } } }
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

                </html>
                <!--20514742410946784010090621-->
                <script>
                var _trace_page_logid = 2051474241;
                </script>

                
