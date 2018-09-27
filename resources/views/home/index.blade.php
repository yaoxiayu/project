@include('layouts._daohang')
<div style="position:absolute;top:70px;right:-20px;">
        <iframe frameborder="0" allowtransparency="true" src="http://i.tianqi.com/index.php?c=code&id=36&icon=5&num=1"></iframe>
</div>
<div class="nav-bar-header nav-area-index static-hook-real static-hook-id-3">

    <div class="nav-inner flexible clearfix">
        <ul class="nav-list clearfix" mon="area=nav&element_type=nav" id="j-catg">
            <li class="nav-item cate-row all-cate deep">
                <ul id="menu">
                    <li style="background-color:#D4AB60;">
                        <a href="/" style="color:white;">全部分类</a>
                        <ul class="submenu">
                            @foreach($industry as $v)
                            <a href="/food/{{$v->id}}" style="color:white;">
                            <label >
                            <li style="border-top:1px solid white;" id="aa">
                                {{$v->name}}

                            </li>
                            </label>
                            </a>
                        @endforeach
                        </ul>
                    </li>
                </ul>
                <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
                <script>
                $('#menu > li').hover(function() {
                    //停止动画
                    $('#menu .submenu').stop().hide();
                    //获取当前li中的ul标签
                    $(this).find("ul").show();
                }, function() {
                    //停止动画
                    $(this).find("ul").stop().hide();
                    $(this).find("ul").hide();
                })
                </script>
                <style>
                * {
                    margin: 0;
                    padding: 0;
                }

                li {
                    list-style: none;
                }

                .solid {
                    width: 717px;
                    height: 372px;
                    margin: 0px auto 0;
                    box-shadow: 1px 7px 25px #fd8fd9;
                }

                .solid ul {
                    height: 100%;
                }

                .solid ul li {
                    position: relative;
                    float: left;
                    box-sizing: border-box;
                    transform-style: preserve-3d;
                    transform: translateZ(-180px);
                }

                .solid ul li div {
                    position: absolute;
                    width: 100%;
                    height: 80%;
                }

                .solid ul li div:nth-child(1) {
                    top: -360px;
                    background: url('./lunbo/img/02.jpg');
                    transform-origin: bottom;
                    transform: translateZ(180px) rotateX(90deg);
                }

                .solid ul li div:nth-child(2) {
                    top: 360px;
                    background: url('./lunbo/img/01.jpg');
                    transform-origin: top;
                    transform: translateZ(180px) rotateX(-90deg);
                }

                .solid ul li div:nth-child(3) {
                    background: url('./lunbo/img/03.jpg');
                    transform: translateZ(180px);
                }

                .solid ul li div:nth-child(4) {
                    background: url('./lunbo/img/04.jpg');
                    transform: translateZ(-180px) rotateX(180deg);
                }

                .solid ol {
                    position: absolute;
                    left: 50%;
                    width: 140px;
                    height: 20px;
                    transform: translateX(-50%);
                    display: flex;
                    justify-content: space-around;
                }

                .solid ol li {
                    width: 20px;
                    height: 20px;
                    background: black;
                    box-shadow: 0 2px 5px white;
                    border-radius: 50%;
                    color: white;
                    text-align: center;
                    /*斜体 12px大小/20px行高*/
                    font: italic 12px/20px 'Microsoft Yahei';
                    cursor: pointer;
                }

                .solid ol li.on {
                    background: red;
                }


                #menu {
                    width: 240px;
                }

                #menu>li {
                    width: 230px;
                    height: 40px;
                    float: left;
                    margin-right: 20px;
                    border: solid 1px #ddd;
                    font-size: 16px;

                    text-align: center;
                    line-height: 40px;
                    z-index: 10;
                    position: relative;
                }

                .submenu {
                    position: absolute;
                    background: black;

                    top: 40px;
                    left: 0px;
                    display: none;
                }

                .submenu li {
                    width: 230px;
                    border-bottom: 1px solid white;
                }

                #aa:hover {
                    background-color: #ccc;
                    cursor: pointer;
                }

                </style>

                <div class="left-menu clearfix" id="j-catg-list">
                    <div class="right-sidebar-re">
                        <div class="right-ad">
                            <a href="https://bj.nuomi.com/pcindex/dipin#/list/565" target="_blank">
                                    <img src="/home/static/picture/right-banner_562f509.jpg">
                                </a>
                        </div>
                        <div class="right-erweima" mon="area=app_download">
                            <a href="//d.nuomi.com/?1009764s" mon="element=https://d.nuomi.com/?1009764s" target="_blank" class="qrcode-discount" style="visibility: visible;">
                                    下载手机版
                                </a>
                        </div>
                    </div>
                </div>

                @include('layouts.caidan')

                <div class="container clearfix flexible">
                    <div class="re-top-content">
                        <div class="mid-area-re" style="float:left;margin-top:12px;">
                            <!--  <a href="http://zhaopin.baidu.com/" target="_blank">
                <img src="/home/static/picture/banner_21ada6c.jpg"/>
            </a> -->
                            <div class="solid">
                                <ul class="oUl"></ul>
                                <ol>
                                    <li class="on">1</li>
                                    <li>2</li>
                                    <li>3</li>
                                    <li>4</li>
                                </ol>
                            </div>
                            <script src="/lunbo/js/demo.js"></script>
                        </div>
                        <div class="right-sidebar-re">
                            <div class="right-ad">
                                <a href="https://bj.nuomi.com/pcindex/dipin#/list/565" target="_blank">
                    <img src="/home/static/picture/right-banner_562f509.jpg"/>
                </a>
                            </div>
                            <div class="right-erweima" mon="area=app_download">
                                <a href="//d.nuomi.com/?1009764s" mon="element=https://d.nuomi.com/?1009764s" target="_blank">
                    下载手机版
                </a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>

                    <div class="re-mid-content">
                        <div class="content-header clearfix">
                            <h3>
                                休闲娱乐
                            </h3>
                            <ul class="reco-words">
                                <li class="link-all">
                                    <a href="/{{$v['id']}}.html" mon="element=top_link" target="_blank">
                        查看全部
                        <span class="all-arrow">
                        </span>
                    </a>
                                </li>
                            </ul>
                        </div>
                        <ul class="item-list">
                    @foreach($play as $v)
                            <li class="item yule-item clearfix">
                                <a class="yule-content" href="/{{$v['id']}}.html" target="_blank">
                    <img class="yule-image" src="{{$v['pic']}}"/>
                    <div class="yule-title">
                        {{$v['name']}}
                    </div>
                    <object>
                        <a class="yule-ugc" href="https://www.nuomi.com/shop/comment/87933569" target="_blank">

                        </a>
                                </object>
                                <div class="shop-info">
                                    <span>
                            <span class="info-break">
                                |
                            </span>
                                    </span>
                                    <span class="has-sale">
                            {{$v['intro']}}
                        </span>
                                </div>
                                <div class="sale-info">
                                    人均{{$v['renprice']}}
                                </div>
                                </a>
                            </li>
                        @endforeach
                        </ul>
                    </div>

                    <!-- 酒店 -->
                    <div class="re-mid-content">
                        <div class="content-header clearfix">
                            <h3>
                                            酒店
                                        </h3>
                        </div>
                        <ul class="item-list">
                            @foreach($hotel as $v)
                            <li class="ly-item">
                                <a href="/{{$v['id']}}.html" target="_blank">
                                                <img src="{{$v['pic']}}" width="300" height="300">
                                                <div class="lv-title">
                                                    <div class="word-main">
                                                        {{$v['name']}}
                                                    </div>
                                                    <div class="word-title">
                                                        {{$v['intro']}}
                                                    </div>
                                            </div>
                                        </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- 美食 -->
                    <div class="re-mid-content">
                        <div class="content-header clearfix">
                            <h3>
                                美食
                            </h3>
                        </div>
                        <ul class="item-list">
                            @foreach($meishi as $v)
                            <li class="ly-item">
                                <a href="/{{$v['id']}}.html" target="_blank">
                                    <img src="{{$v['pic']}}" width="300" height="300">
                                    <div class="lv-title">
                                        <div class="word-main">
                                            {{$v['name']}}
                                        </div>
                                        <div class="word-title">
                                            {{$v['intro']}}
                                        </div>
                                </div>
                            </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- 结婚-->
                    <div class="re-mid-content">
                        <div class="content-header clearfix">
                            <h3>
                                结婚
                            </h3>
                        </div>
                        <ul class="item-list">
                            @foreach($marry as $v)
                            <li class="ly-item">
                                <a href="/{{$v['id']}}.html" target="_blank">
                                    <img src="{{$v['pic']}}" width="300" height="300">
                                    <div class="lv-title">
                                        <div class="word-main">
                                            {{$v['name']}}
                                        </div>
                                        <div class="word-title">
                                            {{$v['intro']}}
                                        </div>
                                </div>
                            </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>


                </div>
                <div class="w-top-search-box-revision ">
                    <div class="top-search-bg " id="j-top-search-bg ">
                    </div>
                    <div class="top-search-content " id="j-top-search-content ">
                        <div class="search-container ">
                            <div class="top-search-logo ">
                                <i class="new-logo ">
                                </i>
                            </div>
                            <div class="top-search " id="j-top-search ">
                                <div class="search-area clearfix ">
                                    <div class="form-wrap clearfix " data-ui-id="top-searcher ">
                                        <form action="/" id="j-top-searchForm " method="get ">
                                            <input autocomplete="off " class="searchinput " data-placeholder=" " id="j-topSearchInput " mon="element=search_input " name="keywords" placeholder="搜索商家 " type="text " value=" " />
                                            <div class="searchbtn-wrap ">
                                                <input class="searchbtn " id="j-topSearchBtn " mon="element=search_button " type="submit " value=" " />
                                                <span class="search-text ">
                                                    搜 索
                                                </span>
                                                <div class="btn-shadow ">
                                                </div>
                                            </div>
                                            <input id="j-top-input-hidden " name="rid " type="hidden " value="5e11a75122df4436dce95dd5720e3270 " />
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <input id="j-input-city-up " type="hidden " value="bj " />
                        </div>
                    </div>
                </div>

                <div class="re-footer-content ">
                    @include('layouts._foot')
