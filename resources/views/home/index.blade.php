@include('layouts._daohang')
<div class="nav-bar-header nav-area-index static-hook-real static-hook-id-3">
    <div class="nav-inner flexible clearfix">
        <ul class="nav-list clearfix" mon="area=nav&element_type=nav" id="j-catg">
            <li class="nav-item cate-row all-cate deep">
                <ul id="menu">
                    <li style="background-color:#D4AB60;">
                        <a href="/"  style="color:white;">全部分类</a>
                        <ul class="submenu">
                        @foreach($industry as $v)
                            <a href="/food/{{$v->id}}" style="color:white;">
                            <label >
                            <li style="border-top:1px solid white;">
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
                    $('#menu > li').hover(function(){
                        //停止动画
                        $('#menu .submenu').stop().hide();
                        //获取当前li中的ul标签
                        $(this).find("ul").show();
                    }, function(){
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
                    z-index:10;
                    position: relative;
                }

                .submenu {
                    position: absolute;
                    background:black;

                    top: 40px;
                    left:0px;
                    display:none;
                }

                .submenu li {
                    width: 230px;
                    border-bottom:1px solid white;

                }
                li:hover{background-color:#ccc;cursor: pointer;}
                
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
                <li class="nav-item nav-item-first">
                    <a class="item first new-item" href="/" mon="element=首页" target="_top">
                        首页
                    </a>
                </li>
                <li class="nav-item">
                    <a class="item new-item " href="/hotel/1" mon="element=酒店" target="_top">
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
                    <a class="item new-item" href="/marry/4" mon="element=结婚" target="_top">
        结婚
    </a>
                </li>
                <li class="nav-item">
                    <a class="item new-item" href="http://waimai.baidu.com/?utm_source=bainuo&utm_medium=nav&utm_content=toububiaoqian&utm_term=default&utm_campaign=beijing&cid=PC_%E5%93%81%E7%89%8C%E6%8E%A8%E5%B9%BF_940766" mon="element=外卖" target="_blank">
        外卖
    </a>
                </li>
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
                    <hr>
                    <hr>
                    <div class="re-mid-content">
                        <div class="content-header clearfix">
                            <h3>
                休闲娱乐
            </h3>
                            <ul class="reco-words">
                                <li class="link-all">
                                    <a href="https://bj.nuomi.com/320" mon="element=top_link" target="_blank">
                        查看全部
                        <span class="all-arrow">
                        </span>
                    </a>
                                </li>
                            </ul>
                        </div>
                        <ul class="item-list">
                            <li class="item yule-item clearfix">
                                <a class="yule-content" href="https://www.nuomi.com/shop/87933569" target="_blank">
                    <img class="yule-image" src="/home/static/picture/a6efce1b9d16fdfa4a5f6c36bf8f8c5494ee7b33.jpg"/>
                    <div class="yule-title">
                        达人联盟
                    </div>
                    <object>
                        <a class="yule-ugc" href="https://www.nuomi.com/shop/comment/87933569" target="_blank">
                            <span class="comment">
                                暂无评论
                            </span>
                        </a>
                                </object>
                                <div class="shop-info">
                                    <span>
                            <span class="info-break">
                                |
                            </span>
                                    </span>
                                    <span class="has-sale">
                            已售760
                        </span>
                                </div>
                                <div class="sale-info">
                                    暂无
                                </div>
                                </a>
                            </li>
                            <li class="item yule-item clearfix">
                                <a class="yule-content" href="https://www.nuomi.com/shop/80661709" target="_blank">
                    <img class="yule-image" src="/home/static/picture/e7cd7b899e510fb38c4515cbd533c895d1430c09.jpg"/>
                    <div class="yule-title">
                        安贞台球俱乐部
                    </div>
                    <object>
                        <a class="yule-ugc" href="https://www.nuomi.com/shop/comment/80661709" target="_blank">
                            <span class="comment">
                                暂无评论
                            </span>
                        </a>
                                </object>
                                <div class="shop-info">
                                    <span>
                            <span class="info-break">
                                |
                            </span>
                                    </span>
                                    <span class="has-sale">
                            已售152
                        </span>
                                </div>
                                <div class="sale-info">
                                    暂无
                                </div>
                                </a>
                            </li>
                            <li class="item yule-item clearfix">
                                <a class="yule-content" href="https://www.nuomi.com/shop/100936970" target="_blank">
                    <img class="yule-image" src="/home/static/picture/0b7b02087bf40ad1b87dcc105b2c11dfa8ecceac.jpg"/>
                    <div class="yule-title">
                        慢生活会馆
                    </div>
                    <object>
                        <a class="yule-ugc" href="https://www.nuomi.com/shop/comment/100936970" target="_blank">
                            <span class="comment">
                                暂无评论
                            </span>
                        </a>
                                </object>
                                <div class="shop-info">
                                    <span>
                            <span class="info-break">
                                |
                            </span>
                                    </span>
                                    <span class="has-sale">
                            已售226
                        </span>
                                </div>
                                <div class="sale-info">
                                    暂无
                                </div>
                                </a>
                            </li>
                            <li class="item yule-item clearfix">
                                <a class="yule-content" href="https://www.nuomi.com/shop/99736913" target="_blank">
                    <img class="yule-image" src="/home/static/picture/ae51f3deb48f8c54e175e29736292df5e1fe7fe7.jpg"/>
                    <div class="yule-title">
                        宝乐迪KTV
                    </div>
                    <object>
                        <a class="yule-ugc" href="https://www.nuomi.com/shop/comment/99736913" target="_blank">
                            <span class="comment">
                                暂无评论
                            </span>
                        </a>
                                </object>
                                <div class="shop-info">
                                    <span>
                            <span class="info-break">
                                |
                            </span>
                                    </span>
                                    <span class="has-sale">
                            已售144
                        </span>
                                </div>
                                <div class="sale-info">
                                    暂无
                                </div>
                                </a>
                            </li>
                            <li class="item yule-item clearfix">
                                <a class="yule-content" href="https://www.nuomi.com/shop/87929124" target="_blank">
                    <img class="yule-image" src="/home/static/picture/eac4b74543a982265de97cc88182b9014a90eb31.jpg"/>
                    <div class="yule-title">
                        爱丽丝奇幻乐园
                    </div>
                    <object>
                        <a class="yule-ugc" href="https://www.nuomi.com/shop/comment/87929124" target="_blank">
                            <span class="comment">
                                暂无评论
                            </span>
                        </a>
                                </object>
                                <div class="shop-info">
                                    <span>
                            <span class="info-break">
                                |
                            </span>
                                    </span>
                                    <span class="has-sale">
                            已售189
                        </span>
                                </div>
                                <div class="sale-info">
                                    暂无
                                </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="re-mid-content">
                        <div class="content-header clearfix">
                            <h3>
                美食
            </h3>
                            <ul class="reco-words">
                                <li class="link-all">
                                    <a href="https://lvyou.baidu.com/" mon="element=top_link" target="_blank">
                        查看全部
                        <span class="all-arrow">
                        </span>
                    </a>
                                </li>
                            </ul>
                        </div>
                        <ul class="item-list">
                            <li class="ly-item">
                                <a href="https://lvyou.baidu.com/scene/" target="_blank">
                    <img src="/home/static/picture/ly-mudidi_51c0cde.jpg"/>
                    <div class="lv-title">
                        <div class="word-main">
                            目的地攻略
                        </div>
                        <div class="word-title">
                            Travelling guide
                        </div>
                    </div>
                </a>
                            </li>
                            <li class="ly-item">
                                <a href="https://lvyou.baidu.com/plan/counselor/" target="_blank">
                    <img src="/home/static/picture/ly-xingcheng_77e0c83.jpg"/>
                    <div class="lv-title">
                        <div class="word-main">
                            行程计划
                        </div>
                        <div class="word-title">
                            Travelling plan
                        </div>
                    </div>
                </a>
                            </li>
                            <li class="ly-item">
                                <a href="https://lvyou.baidu.com/notes/" target="_blank">
                    <img src="/home/static/picture/ly-youji_7f7dac8.jpg"/>
                    <div class="lv-title">
                        <div class="word-main">
                            游记
                        </div>
                        <div class="word-title">
                            Travelling notes
                        </div>
                    </div>
                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="re-mid-content">
                        <div class="content-header clearfix">
                            <h3>
                结婚
            </h3>
                            <ul class="reco-words">
                                <li class="link-all">
                                    <a href="https://bj.nuomi.com/pcindex/dipin#/list/565" mon="element=top_link" target="_blank">
                        查看全部
                        <span class="all-arrow">
                        </span>
                    </a>
                                </li>
                            </ul>
                        </div>
                        <ul class="item-list">
                            <li class="jh-item">
                                <a class="big-pic" href="https://bj.nuomi.com/pcindex/dipin#/list/565/0" target="_blank">
                    <img src="/home/static/picture/jh-sheying_39f083d.jpg"/>
                    <div class="lv-title">
                        <div class="word-main">
                            婚纱摄影
                        </div>
                        <div class="word-title">
                            Wedding Photo
                        </div>
                    </div>
                </a>
                            </li>
                            <li class="jh-item">
                                <a class="big-pic" href="https://bj.nuomi.com/pcindex/dipin#/list/2014/0" target="_blank">
                    <img src="/home/static/picture/jh-hunsha_ea096c9.jpg"/>
                    <div class="lv-title">
                        <div class="word-main">
                            婚纱礼服
                        </div>
                        <div class="word-title">
                            Wedding Dress
                        </div>
                    </div>
                </a>
                            </li>
                            <li class="jh-item">
                                <a class="mid-pic" href="https://bj.nuomi.com/pcindex/dipin#/list/709/0" target="_blank">
                    <img src="/home/static/picture/jh-hunqing_59ba50f.jpg"/>
                    <div class="lv-title">
                        <div class="word-main">
                            婚庆服务
                        </div>
                        <div class="word-title">
                            Wedding Service
                        </div>
                    </div>
                </a>
                                <a class="mid-pic" href="https://bj.nuomi.com/pcindex/dipin#/list/614/0" target="_blank">
                    <img src="/home/static/picture/jh-xiezhen_91c4453.jpg"/>
                    <div class="lv-title">
                        <div class="word-main">
                            个性写真
                        </div>
                        <div class="word-title">
                            Personal Photo
                        </div>
                    </div>
                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="re-mid-content">
                        <div class="content-header clearfix">
                            <h3>
                酒店
            </h3>
                            <ul class="reco-words">
                                <li class="link-all">
                                    <a href="https://bj.nuomi.com/pcindex/dipin#/list/565" mon="element=top_link" target="_blank">
                        查看全部
                        <span class="all-arrow">
                        </span>
                    </a>
                                </li>
                            </ul>
                        </div>
                        <ul class="item-list">
                            <li class="jh-item">
                                <a class="big-pic" href="https://bj.nuomi.com/pcindex/dipin#/list/565/0" target="_blank">
                    <img src="/home/static/picture/jh-sheying_39f083d.jpg"/>
                    <div class="lv-title">
                        <div class="word-main">
                            婚纱摄影
                        </div>
                        <div class="word-title">
                            Wedding Photo
                        </div>
                    </div>
                </a>
                            </li>
                            <li class="jh-item">
                                <a class="big-pic" href="https://bj.nuomi.com/pcindex/dipin#/list/2014/0" target="_blank">
                    <img src="/home/static/picture/jh-hunsha_ea096c9.jpg"/>
                    <div class="lv-title">
                        <div class="word-main">
                            婚纱礼服
                        </div>
                        <div class="word-title">
                            Wedding Dress
                        </div>
                    </div>
                </a>
                            </li>
                            <li class="jh-item">
                                <a class="mid-pic" href="https://bj.nuomi.com/pcindex/dipin#/list/709/0" target="_blank">
                    <img src="/home/static/picture/jh-hunqing_59ba50f.jpg"/>
                    <div class="lv-title">
                        <div class="word-main">
                            婚庆服务
                        </div>
                        <div class="word-title">
                            Wedding Service
                        </div>
                    </div>
                </a>
                                <a class="mid-pic" href="https://bj.nuomi.com/pcindex/dipin#/list/614/0" target="_blank">
                    <img src="/home/static/picture/jh-xiezhen_91c4453.jpg"/>
                    <div class="lv-title">
                        <div class="word-main">
                            个性写真
                        </div>
                        <div class="word-title">
                            Personal Photo
                        </div>
                    </div>
                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="bottom-category" id="c-bottom">
                        <div class="bottom-cate">
                            <ul class="tab-nav clearfix">
                                <li>
                                    <a href="javascript:;">
                        最新团单
                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                        热门商场
                    </a>
                                </li>
                            </ul>
                            <ul class="bottom-content-wrap">
                                <div class="bottom-content" mon="area=bottom_link">
                                    <ul>
                                        <li>
                                            <a href="//www.nuomi.com/deal/f00vqsdlt.html " target="_blank ">
                                Today holi
                            </a>
                        </li>
                        <li>
                            <a  href="//www.nuomi.com/deal/200vpq3rt.html" target="_blank"> 夏月科技
                                            </a>
                                        </li>
                                        <li>
                                            <a href="//www.nuomi.com/deal/g00vqjjxp.html " target="_blank ">
                                美妤世家管家家政
                            </a>
                        </li>
                        <li>
                            <a href="//www.nuomi.com/deal/q00vqoe8g.html" target="_blank"> knight cof
                                            </a>
                                        </li>
                                        <li>
                                            <a href="//www.nuomi.com/deal/l00vp0ejb.html " target="_blank ">
                                齿泰华口腔(旧宫店)
                            </a>
                        </li>
                        <li>
                            <a href="//www.nuomi.com/deal/w00vpokrv.html" target="_blank"> 绿萝琴行
                                            </a>
                                        </li>
                                        <li>
                                            <a href="//www.nuomi.com/deal/c00vqvqoj.html " target="_blank ">
                                北京市景运律师事务所
                            </a>
                        </li>
                        <li>
                            <a href="//www.nuomi.com/deal/c00vqqqie.html" target="_blank"> 纪雯钧烘培
                                            </a>
                                        </li>
                                        <li>
                                            <a href="//www.nuomi.com/deal/000vqa13e.html " target="_blank ">
                                睛明堂
                            </a>
                        </li>
                        <li>
                            <a href="//www.nuomi.com/deal/m00vqxdct.html" target="_blank"> 阳雀茶坊
                                            </a>
                                        </li>
                                        <li>
                                            <a href="//www.nuomi.com/deal/i00vqocnf.html " target="_blank ">
                                咔嚓鱼儿童摄影
                            </a>
                        </li>
                        <li>
                            <a href="//www.nuomi.com/deal/n00vqtgrx.html" target="_blank"> 迦南之约教堂婚礼
                                            </a>
                                        </li>
                                        <li>
                                            <a href="//www.nuomi.com/deal/800vqvx47.html " target="_blank ">
                                金鸿源
                            </a>
                        </li>
                        <li>
                            <a href="//www.nuomi.com/deal/u00voxr4e.html" target="_blank"> 北京心悦东方舞艺术培
                                            </a>
                                        </li>
                                        <li>
                                            <a href="//www.nuomi.com/deal/c00vqdfou.html " target="_blank ">
                                CGWANG王氏教育
                            </a>
                        </li>
                        <li>
                            <a href="//www.nuomi.com/deal/j00vqjvh3.html" target="_blank"> 奥美科贸
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="bottom-content" mon="area=bottom_link">
                                    <ul>
                                        <li>
                                            <a href="//bj.nuomi.com/pcindex/marketdetail/?marketId=1 " target="_blank ">
                                朝阳大悦城
                            </a>
                        </li>
                        <li>
                            <a href="//bj.nuomi.com/pcindex/marketdetail/?marketId=2" target="_blank"> 蓝色港湾
                                            </a>
                                        </li>
                                        <li>
                                            <a href="//bj.nuomi.com/pcindex/marketdetail/?marketId=3 " target="_blank ">
                                世贸天阶
                            </a>
                        </li>
                        <li>
                            <a href="//bj.nuomi.com/pcindex/marketdetail/?marketId=4" target="_blank"> 万柳购物中心
                                            </a>
                                        </li>
                                        <li>
                                            <a href="//bj.nuomi.com/pcindex/marketdetail/?marketId=5 " target="_blank ">
                                清河五彩城
                            </a>
                        </li>
                        <li>
                            <a href="//bj.nuomi.com/pcindex/marketdetail/?marketId=6" target="_blank"> 五道口购物中心
                                            </a>
                                        </li>
                                        <li>
                                            <a href="//bj.nuomi.com/pcindex/marketdetail/?marketId=7 " target="_blank ">
                                新中关购物中心
                            </a>
                        </li>
                        <li>
                            <a href="//bj.nuomi.com/pcindex/marketdetail/?marketId=8" target="_blank"> 首地大峡谷购物中心
                                            </a>
                                        </li>
                                        <li>
                                            <a href="//bj.nuomi.com/pcindex/marketdetail/?marketId=9 " target="_blank ">
                                西单大悦城
                            </a>
                        </li>
                        <li>
                            <a href="//bj.nuomi.com/pcindex/marketdetail/?marketId=10" target="_blank"> 龙德广场
                                            </a>
                                        </li>
                                        <li>
                                            <a href="//bj.nuomi.com/pcindex/marketdetail/?marketId=15 " target="_blank ">
                                爱琴海购物中心
                            </a>
                        </li>
                        <li>
                            <a "="" href="//bj.nuomi.com/pcindex/marketdetail/?marketId=21" target="_blank"> 东方新天地
                                            </a>
                                        </li>
                                        <li>
                                            <a "=" " href="//bj.nuomi.com/pcindex/marketdetail/?marketId=23 " target="_blank ">
                                凤凰汇购物中心
                            </a>
                        </li>
                        <li>
                            <a href="//bj.nuomi.com/pcindex/marketdetail/?marketId=24" target="_blank"> 国瑞购物中心
                                            </a>
                                        </li>
                                        <li>
                                            <a href="//bj.nuomi.com/pcindex/marketdetail/?marketId=29 " target="_blank ">
                                欧美汇购物中心
                            </a>
                        </li>
                        <li>
                            <a href="//bj.nuomi.com/pcindex/marketdetail/?marketId=36" target="_blank"> 东方银座购物中心
                                            </a>
                                        </li>
                                        <li>
                                            <a href="//bj.nuomi.com/pcindex/marketdetail/?marketId=53 " target="_blank ">
                                华宇时尚购物中心
                            </a>
                        </li>
                        <li>
                            <a href="//bj.nuomi.com/pcindex/marketdetail/?marketId=81" target="_blank"> 望京华彩商业中心
                                            </a>
                                        </li>
                                        <li>
                                            <a href="//bj.nuomi.com/pcindex/marketdetail/?marketId=88 " target="_blank ">
                                丰联广场
                            </a>
                        </li>
                        <li>
                            <a href="//bj.nuomi.com/pcindex/marketdetail/?marketId=206" target="_blank"> 建外SOHO
                                            </a>
                                        </li>
                                        <li>
                                            <a href="//bj.nuomi.com/pcindex/marketdetail/?marketId=207 " target="_blank ">
                                中关村广场购物中心
                            </a>
                        </li>
                        <li>
                            <a href="//bj.nuomi.com/pcindex/marketdetail/?marketId=208" target="_blank"> 百荣世贸商城
                                            </a>
                                        </li>
                                        <li>
                                            <a href="//bj.nuomi.com/pcindex/marketdetail/?marketId=218 " target="_blank ">
                                金源新燕莎MALL
                            </a>
                        </li>
                        <li>
                            <a href="//bj.nuomi.com/pcindex/marketdetail/?marketId=219" target="_blank"> 悠唐生活广场
                                            </a>
                                        </li>
                                        <li>
                                            <a href="//bj.nuomi.com/pcindex/marketdetail/?marketId=220 " target="_blank ">
                                BHG Mall(华联常营购物中心)
                            </a>
                        </li>
                    </ul>
                </div>
            </ul>
        </div>
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
                        <form action="//www.nuomi.com/search " id="j-top-searchForm " method="get ">
                            <input autocomplete="off " class="searchinput " data-placeholder=" " id="j-topSearchInput " mon="element=search_input " name="k " placeholder="搜索商家/地点 " type="text " value=" "/>
                            <div class="searchbtn-wrap ">
                                <input class="searchbtn " id="j-topSearchBtn " mon="element=search_button " type="submit " value=" "/>
                                <span class="search-text ">
                                    搜 索
                                </span>
                                <div class="btn-shadow ">
                                </div>
                            </div>
                            <input id="j-top-input-hidden " name="rid " type="hidden " value="5e11a75122df4436dce95dd5720e3270 "/>
                        </form>
                    </div>
                </div>
            </div>
            <input id="j-input-city-up " type="hidden " value="bj "/>
        </div>
    </div>
</div>
<div class="re-footer-content ">
@include('layouts._foot')
   