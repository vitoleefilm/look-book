<?php
require_once "weixin.php";
$jssdk = new WEIXIN("wx0c60164e2285620e", "06da31bfbcbe5457fc938054917997bb");
$signPackage = $jssdk->GetSignPackage();
?><html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>LACOSTE LOOKBOOK</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
</head>

<body>
    <script type="text/javascript">
        //判断手机横竖屏状态：  
        // function get_orientation() {  
        //     if(window.orientation == 180 || window.orientation == 0){  
        //         window.location.href = 'portrait.html';
        //     }
        // }
        // get_orientation();
        // window.addEventListener("onorientationchange" in window ? "orientationchange" : "resize", get_orientation, false);
    </script>
    <!-- Menu -->
    <button class="menu-button"><span>Menu</span></button>
    <aside class="menu">
        <h2><a href="javascript:;">LACOSTE LOOKBOOK</a></h2>
        <nav>
            <ul>
                <li><a href="javascript:;">读爱网球</a>
                </li>
                <li><a href="javascript:;">爱情对对碰</a>
                </li>
                <li><a href="javascript:;">挑战快拍手</a>
                </li>
                <li><a href="javascript:;">0元飞巴黎</a>
                </li>
                <li><a href="javascript:;">产品型录</a>
                </li>
                <li><a href="javascript:;">趣扫红土场</a>
                </li>
                <li><a href="javascript:;">查找活动门店</a>
                </li>
                <li><a href="javascript:;">京东旗舰店</a>
                </li>
            </ul>
        </nav>
    </aside>
    <!-- Menu End -->

    <!-- Page Content -->
    <section class="main">
        <div id="flux-site">
            <div class="partie" id="equipe">
                <div class="block-container" style="opacity: 1;">
                    <div class="block-content">
                        <div class="content-partie">
                            <div class="intro-partie">
                                <div _index="0" class="col" id="man-1">
                                    <div class="cadre-photo">
                                        <div class="first-photo" style="display:none;">

                                            <img src="images/model/MAN1-3x2.png" srcset="images/model/MAN1-3.png 500w, images/model/MAN1-3x2.png 1000w" alt="photo jc nb">
                                        </div>
                                        <div class="white-photo" style="display:none;">

                                            <img src="images/model/MAN1-5x2.png" srcset="images/model/MAN1-5.png 500w, images/model/MAN1-5x2.png 1000w" alt="">
                                        </div>
                                        <div class="anim-photo">

                                            <img id="jc" class="photo-viensla" _src="images/model/MAN1-1x2.png" srcset="images/model/MAN1-1.png 500w, images/model/MAN1-1x2.png 1000w" alt="photo jc follomaton">
                                        </div>
                                    </div>
                                </div>
                                <div _index="1" class="col" id="man-2">
                                    <div class="cadre-photo">
                                        <div class="first-photo" style="display:none;">

                                            <img src="images/model/MAN2-3x2.png" srcset="images/model/MAN2-3.png 500w, images/model/MAN2-3x2.png 1000w" alt="photo nico nb">
                                        </div>
                                        <div class="white-photo" style="display:none;">

                                            <img src="images/model/MAN2-5x2.png" srcset="images/model/MAN2-5.png 500w, images/model/MAN2-5x2.png 1000w" alt="">
                                        </div>
                                        <div class="anim-photo">

                                            <img id="niko" class="photo-viensla" _src="images/model/MAN2-1x2.png" srcset="images/model/MAN2-1.png 500w, images/model/MAN2-1x2.png 1000w" alt="photo nico follomaton">
                                        </div>
                                    </div>
                                </div>
                                <div _index="2" class="col" id="man-3">
                                    <div class="cadre-photo">
                                        <div class="first-photo" style="display:none;">

                                            <img src="images/model/MAN3-3x2.png" srcset="images/model/MAN3-3.png 500w, images/model/MAN3-3x2.png 1000w" alt="photo fred nb">
                                        </div>
                                        <div class="white-photo" style="display:none;">

                                            <img src="images/model/MAN3-5x2.png" srcset="images/model/MAN3-5.png 500w, images/model/MAN3-5x2.png 1000w" alt="">
                                        </div>
                                        <div class="anim-photo">

                                            <img id="fred" class="photo-viensla" _src="images/model/MAN3-1x2.png" srcset="images/model/MAN3-1.png 500w, images/model/MAN3-1x2.png 1000w" alt="photo fred follomaton">
                                        </div>
                                    </div>
                                </div>
                                <div _index="3" class="col" id="man-4">
                                    <div class="cadre-photo">
                                        <div class="first-photo" style="display:none;">

                                            <img src="images/model/MAN4-3x2.png" srcset="images/model/MAN4-3.png 500w, images/model/MAN4-3x2.png 1000w" alt="photo fred nb">
                                        </div>
                                        <div class="white-photo" style="display:none;">

                                            <img src="images/model/MAN4-5x2.png" srcset="images/model/MAN4-5.png 500w, images/model/MAN4-5x2.png 1000w" alt="">
                                        </div>
                                        <div class="anim-photo">

                                            <img id="fred" class="photo-viensla" _src="images/model/MAN4-1x2.png" srcset="images/model/MAN4-1.png 500w, images/model/MAN4-1x2.png 1000w" alt="photo fred follomaton">
                                        </div>
                                    </div>
                                </div>
                                <div _index="4" class="col" id="man-5">
                                    <div class="cadre-photo">
                                        <div class="first-photo" style="display:none;">

                                            <img src="images/model/MAN5-3x2.png" srcset="images/model/MAN5-3.png 500w, images/model/MAN5-3x2.png 1000w" alt="photo nico nb">
                                        </div>
                                        <div class="white-photo" style="display:none;">

                                            <img src="images/model/MAN5-5x2.png" srcset="images/model/MAN5-5.png 500w, images/model/MAN5-5x2.png 1000w" alt="">
                                        </div>
                                        <div class="anim-photo">

                                            <img id="niko" class="photo-viensla" _src="images/model/MAN5-1x2.png" srcset="images/model/MAN5-1.png 500w, images/model/MAN5-1x2.png 1000w" alt="photo nico follomaton">
                                        </div>
                                    </div>
                                </div>
                                <div _index="5" class="col" id="man-6">
                                    <div class="cadre-photo">
                                        <div class="first-photo" style="display:none;">

                                            <img src="images/model/MAN6-3x2.png" srcset="images/model/MAN6-3.png 500w, images/model/MAN6-3x2.png 1000w" alt="photo jc nb">
                                        </div>
                                        <div class="white-photo" style="display:none;">

                                            <img src="images/model/MAN6-5x2.png" srcset="images/model/MAN6-5.png 500w, images/model/MAN6-5x2.png 1000w" alt="">
                                        </div>
                                        <div class="anim-photo">

                                            <img id="jc" class="photo-viensla" _src="images/model/MAN6-1x2.png" srcset="images/model/MAN6-1.png 500w, images/model/MAN6-1x2.png 1000w" alt="photo jc follomaton">
                                        </div>
                                    </div>
                                </div>
                                <div class="click-fix-4"></div>
                                <div class="click-fix-5"></div>
                                <div class="click-fix-6"></div>
                                <div class="bench"></div>
                                <div class="ground"><img src="css/img/ground.png" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ribbon ribbon-blue"></div>
            <div class="ribbon ribbon-red"></div>
            <div class="ribbon ribbon-green"></div>
        </div>
        <div class="racket"><img src="css/img/racket.png?v=<? echo date('ds',time())?>" alt=""></div>
        <div id="tennisball" style="z-index:999;position:absolute;">
            <img style="width:30px;height:30px;" src="css/img/tennis.png?v=<? echo date('ds',time())?>">
        </div>
    </section>
    <div class="main-mask"></div>
    <!-- End Page Content -->
    <div class="detail-box for_man-1">
        <button class="close">关闭</button>
        <h3>LT12限量系列灰色T恤衫</h3>
        <div class="pic">
            <img src="images/product/01.png?v=<? echo date('ds',time())?>" alt="">
        </div>
        <span class="price">价格：590 元</span>
        <a target="_blank" href="http://item.jd.com/1543278289.html">立即购买</a>
    </div>
    <div class="detail-box for_man-2">
        <button class="close">关闭</button>
        <h3>LT12限量系列蓝色POLO衫</h3>
        <div class="pic">
            <img src="images/product/02.png?v=<? echo date('ds',time())?>" alt="">
        </div>
        <span class="price">价格：990 元</span>
        <a target="_blank" href="http://item.jd.com/1543281789.html">立即购买</a>
    </div>
    <div class="detail-box for_man-3">
        <button class="close">关闭</button>
        <h3>限量系列白色T恤衫</h3>
        <div class="pic">
            <img src="images/product/03.png?v=<? echo date('ds',time())?>" alt="">
        </div>
        <span class="price">价格：590 元</span>
        <a target="_blank" href="http://item.jd.com/1494360810.html">立即购买</a>
    </div>
    <div class="detail-box for_man-4">
        <button class="close">关闭</button>
        <h3>LT12限量系列蓝色T恤衫</h3>
        <div class="pic">
            <img src="images/product/04.png?v=<? echo date('ds',time())?>" alt="">
        </div>
        <span class="price">价格：590 元</span>
        <a target="_blank" href="http://item.jd.com/1543278289.html">立即购买</a>
    </div>
    <div class="detail-box for_man-5">
        <button class="close">关闭</button>
        <h3>LT12限量系列黑色T恤衫</h3>
        <div class="pic">
            <img src="images/product/05.png?v=<? echo date('ds',time())?>" alt="">
        </div>
        <span class="price">价格：590 元</span>
        <a target="_blank" href="http://item.jd.com/1543278289.htm">立即购买</a>
    </div>
    <div class="detail-box for_man-6">
        <button class="close">关闭</button>
        <h3>LT12限量系列黑色POLO衫</h3>
        <div class="pic">
            <img src="images/product/06.png?v=<? echo date('ds',time())?>" alt="">
        </div>
        <span class="price">价格：990 元</span>
        <a target="_blank" href="http://item.jd.com/1543274075.html">立即购买</a>
    </div>
    <!-- PRODUCT DETAIL -->
    <!-- PRODUCT DETAIL END -->

    <!-- LOADING PAGE -->
    <!-- 页面载入时loading-page淡入addClass=show 加载完成removeClass=show 两秒后淡出 -->
    <div class="loading-page" style="">
        <div class="inner">
            <h1><img src="css/img/logo.png?v=<? echo date('ds',time())?>" alt=""></h1>
            <span class="progress">0%</span>
        </div>
        <div class="ribbon ribbon-blue"></div>
        <div class="ribbon ribbon-red"></div>
        <div class="ribbon ribbon-green"></div>
    </div>
    <!-- END LOADING PAGE -->

    <!-- GAME GUIDE -->
    <div class="game-guide show">
        <div class="inner">
            <button class="close">关闭</button>
            <p>
                <span>左右滑动网球</span>
                <span>点击模特</span>
                <span>查看商品详情</span>
            </p>
        </div>
    </div>
    <!-- END GAME GUIDE -->

    <!-- Portrait -->
    <div class="portrait-box">
        <h1><a href="javascript:;"><img src="css/img/logo.png?v=<? echo date('ds',time())?>" alt=""></a></h1>
        <div class="gif">
            <p>转至横屏，体验更佳</p>
            <img src="css/img/portrait.gif" alt="">
        </div>
        <footer>
            <a class="read-tc" target="_blank" href="javascript:;">法律声明条款</a>
            <a target="_blank" href="javascript:;">ICP</a>
        </footer>
    </div>
    <!-- END PORTRAIT -->

    <!-- TC -->
    <div class="tc">
        <button class="close">关闭</button>
        <h4>法律声明条款</h4>
        <div class="inner">
            <p>
                本文所述为由位于上海市黄浦区徐家汇路610号日月光中心26层01&06-10室的梦田服装（上海）有限公司（简称“LACOSTE”）所有并由上海佛海佛瑞广告有限公司（Fred and Farid (Shanghai) Advertising Co. Ltd.，简称“FFC”）代表LACOSTE运营和/或维护的临时网站“LT12 mini-site”（简称“网页”）的正式条款与条件。 本条款与条件期限自 2015 年 5 月 1 日起至 2015 年 6 月 30 日止。 本条款与条件说明了您参与活动、浏览网页的义务、责任及权利，因此请仔细阅读本条款与条件，以确保您充分理解并遵守。若您不同意本条款与条件的任何一条，则不得参与活动、浏览网页。在进入和进行页面浏览之前，您特此同意受本条款与条件的如下规定：
            </p>
            <h5>承诺</h5>
            <p>
                1.参与者应按照本网站条款与条件、游戏规则及任何相关法律，真诚地参与活动、浏览网页、进行游戏。
            </p>
            <p>
                2.LACOSTE不声明也不保证您可以在您的司法管辖区内参与活动、浏览网页、进行游戏。 若您（或您获悉您）受所在司法管辖区的任何法律、法规、细则或条例规限，上述规例禁止或限制您根据本网站条款与条件及规则参与/浏览网页/进行游戏（下文统称“限制”），则您应马上中止参与活动、浏览网页、进行游戏。
            </p>
            <p>
                3.在忽略上述限制继续参与活动、浏览网页、进行游戏前，您特此：
            </p>
            <ul>
                <li>a.承诺就由于上述限制可能引起或产生的任何及所有起诉、诉讼、索赔、损失、损害和/或开支，向LACOSTE及 FFC 以及他们各自的员工、代理及承包商（下文统称“关联人”）负全部赔偿责任，并使他们不受损失；</li>
                <li>b.同意您不会就任何奖励或任何其他权利或权益向LACOSTE、FFC 或他们各自的任何关联人提起任何诉讼、提出索赔、补偿或赔偿。</li>
            </ul>
            <p>
                4.参与者不得制作、复制、发布或传播包含下列任何内容的信息：
            </p>
            <ul>
                <li>a.违背参与者所在国家宪法所载基本原则的信息；</li>
                <li>b.威胁参与者所在国家的国家安全、泄露国家机密或颠覆政府的信息；</li>
                <li>c.对参与者所在国家的名誉及利益构成损害的信息；</li>
                <li>d.煽动参与者所在国家的民族仇恨或民族歧视、破坏国家统一或社会稳定的信息；</li>
                <li>e.污蔑或诋毁任何宗教信仰的信息；</li>
                <li>f.传播色情或其他淫秽材料的信息；</li>
                <li>g.受适用法律或参与者所在国家的法律禁止的，宣传赌博、暴力、杀戮或恐怖主义、或教唆犯罪的信息；</li>
                <li>h.受适用法律或参与者所在国家的法律禁止的，侮辱或诽谤他人、侵害他人合法权利及利益的信息；</li>
                <li>i.适用法律或参与者所在国家的法律禁止的任何信息。</li>
            </ul>
            <p>
                5.参与者不得参与、协助或试图参与、协助任何攻击游戏服务器的行为，或从事涉及干扰游戏运行运作方式的任何行为，或可能修改游戏（或其任何部分）、导致游戏（或其任何部分）受破坏或出错的行为。参与者应就任何上述行为导致的任何民事和/或刑事责任负全责。
            </p>
            <h5>责任免除</h5>
            <p>
                受适用法律对上述免责及限制的规限（如适用），请仔细阅读本“责任免除”条文，这些条文免除或限制LACOSTE就您参与游戏而对您负有的法律责任。
            </p>
            <p>
                1.游戏以现有状态供参与者使用。 并没有就游戏或就所提供的与游戏相关的任何信息及材料作出任何形式的保证、承诺或声明（无论明示或暗示），LACOSTE明确表示在任何适用法律许可的最大范围内，不就任何及所有保证承担责任。为免有任何疑问，在不影响上述整体内容的情况下，LACOSTE并无就权属；不侵犯第三方权利；适销性；满意度；适用于某特定目的；内容的准确性、可靠性及完整性；或游戏将是安全且不受黑客、病毒、间谍软件、木马、蠕虫病毒或其他恶意、有破坏性的或受感染的代码、媒介、程序或宏病毒影响，或不会损坏任何数据、程序或财产作出任何保证。
            </p>
            <p>
                2.LACOSTE明确不就任何使用者使用、进入或参与游戏时由于下列任何情况而产生的任何及所有责任（无论是合约、侵权、疏忽、法定责任或其他，但需受任何适用法律所规限（如适用））负责，上述情况包括但不限于：
            </p>
            <ul>
                <li>a.网页存在任何错误或疏忽； </li>
                <li>b.使用、进入或参与网页发生任何延迟或中断（无论是由于连接问题、软硬件问题或其他原因）；</li>
                <li>c.未经授权第三方对网页内容作出任何变动、修改或改动；</li>
                <li>d.网页不可用；</li>
                <li>e.参与者提供的个人信息遭损毁；</li>
                <li>f.游戏或任何相关流程的不当操作/管理；</li>
                <li>g.颁发或授予任何奖励受任何法律和/或监管禁止或限制。</li>
            </ul>
            <p>
                3.在任何情况下，LACOSTE、FFC 或他们各自的任何关联人仍不会对参与者由于或就参与游戏而可能直接或间接遭受或产生的下列任何事项负责：
            </p>
            <ul>
                <li>a.经济损失（包括但不限于收入、数据、利润、合同、使用、机会、商业或预期的储蓄的损失）；</li>
                <li>b.商誉或声誉的损失；</li>
                <li>c.特定、意外或间接损失或损害；</li>
                <li>d.费用或开支。</li>
            </ul>
            <p>上述针对任何参与者的损失或损害因其参与网页或由参与网页引发而使参与者直接或间接遭受或产生。</p>
            <p>
                4.若由于不可抗力或任何不受LACOSTE合理控制且LACOSTE对其原因并无责任的事件，LACOSTE无法遵守游戏条款与条件或游戏规则，则其不应承担责任。
            </p>
            <p>
                5.参与游戏表明知悉及接受互联网的特性与限制，若干信息可能会因缺乏保护而被滥用或盗用，以及有被系统中任何病毒感染的风险。每名参与者有责任采取一切合理措施，保护其电脑和电话设备所载有的自身数据及/或软件免受任何攻击。任何人应对其连接网站及参与游戏的行为负全责。
            </p>
            <p>
                6.LACOSTE保留其于任何时间全权酌情停止或中断网页运行的权利。
            </p>
            <p>
                7.LACOSTE保留就任何参与者在网页中作弊采取法律行动的权利。
            </p>
            <h5>知识产权</h5>
            <p>
                网页包含多个商标或服务标识（统称“商标”）。 除非事先取得商标所有人及授权使用人（包括LACOSTE）的书面同意，否则您无权下载、复制或使用任何商标，更不得对商标图形进行修改。
            </p>
            <h5>执行</h5>
            <p>
                1.若本网页条款与条件的任何条文被认定不可执行，则该条文应为无效，且不得影响其余条文的有效性及可执行性。此外，在适用法律许可的范围内，LACOSTE可以使用其他有效、可执行且与不可执行的条文意图最相近的条文取代该条文（诚如LACOSTE可能合理决定）。
            </p>
            <h5>监管法律及争议解决</h5>
            <p>
                1.本游戏条款与条件应受中国的法律监管，并应据此解读。
            </p>
            <p>
                2.与本游戏条款与条件相关的任何争议应提请LACOSTE所在地的法院（应作为唯一的司法管辖区）解决。
            </p>
            <h5>其他事项</h5>
            <p>
                1.LACOSTE保留随时全权酌情行使终止向您授权使用、进入及浏览网页的权利。
            </p>
            <p>
                2.除非LACOSTE同意，否则本游戏条款与条件不得更改或修改。
            </p>
            <p>
                3.LACOSTE应有全权酌情行使设定及修改游戏规则的权利，且LACOSTE就游戏规则的解读及执行作出的任何决定对所有参与者而言属最终及具有约束力。
            </p>
            <p>
                4.若本网页条款及条件被翻译为其他语言，应以中文版本为准。
            </p>
        </div>
    </div>
    <!-- END TC -->
<script type="text/javascript" src="js/jquery.transit.min.js"></script>
<script>
    /*set content size*/
    function setContentSize() {
        var ww = window.innerWidth;
        var wh = window.innerHeight;

        $("body").css({width: ww, height: wh});

        /*menu*/
        $(".menu nav").css({
            height: wh-76
        });
        
        /*main*/
        $(".main").css({width: ww, height: wh});
        $(".ribbon").css({height: ww*0.015})
        $(".intro-partie").css({width: ww, height: wh});
        $("#equipe .block-content .content-partie .intro-partie .col").css({
            width: ww*0.32,
            height: ww*0.352-10
        });
        $("#equipe .block-content .content-partie .intro-partie .col#man-1").css({
            marginLeft: -ww*0.11
        });
        $("#equipe .block-content .content-partie .intro-partie .col#man-2").css({
            left: ww*0.15
        });
        $("#equipe .block-content .content-partie .intro-partie .col#man-3").css({
            left: ww*0.4
        });
        $("#equipe .block-content .content-partie .intro-partie .col#man-4").css({
            bottom: ww*0.124,
            left: ww*0.035
        });
        $("#equipe .block-content .content-partie .intro-partie .col#man-5").css({
            bottom: ww*0.124,
            left: ww*0.26
        });
        $("#equipe .block-content .content-partie .intro-partie .col#man-6").css({
            bottom: ww*0.124,
            left: ww*0.55
        });
        $(".click-fix-4").css({
            width: ww*0.13,
            height: ww*0.2,
            bottom: ww*0.22,
            left: ww*0.18
        });
        $(".click-fix-5").css({
            width: ww*0.13,
            height: ww*0.2,
            bottom: ww*0.22,
            left: ww*0.41
        });
        $(".click-fix-6").css({
            width: ww*0.13,
            height: ww*0.2,
            bottom: ww*0.22,
            left: ww*0.68
        });
        $(".bench").css({height: ww*0.124});

        $(".racket").css({
            width: ww*0.11
        });

        /*detail-box*/
        $(".detail-box").css({
            width: ww*0.24,
            height: ww*0.33,
            bottom: ww*0.015
        });
        $(".detail-box.for_man-1, .detail-box.for_man-2, .detail-box.for_man-4").css({
            marginRight: -ww*0.335
        });
        $(".detail-box.for_man-3, .detail-box.for_man-5, .detail-box.for_man-6").css({
            marginLeft: -ww*0.47
        });
        $(".detail-box .pic").css({
            height: ww*0.32-100
        });
        $(".detail-box a").css({
            height: ww*0.034,
            lineHeight: ww*0.034+'px'
        });

        /*tc*/
        // $(".tc").css({marginLeft: -ww});
        // $(".tc.show").css({translate: [100,0]});
        $(".tc .inner").css({height: wh-50});
        
        
    };
    setContentSize();

    $(window).resize(function(){
        setContentSize();
    }).resize();

    /*game guide*/
    // setTimeout(function(){
    //     $(".game-guide").addClass("show");
    // },500);
</script>
<script type="text/javascript" src="js/common.js"></script>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script type="text/javascript">
    function isWeixinBrowser(){
        var ua = navigator.userAgent.toLowerCase();
        return (/micromessenger/.test(ua)) ? true : false ;
    }
    if (isWeixinBrowser()) {
        wx.config({
            appId: '<?php echo $signPackage["appId"];?>',
            timestamp: <?php echo $signPackage["timestamp"];?>,
            nonceStr: '<?php echo $signPackage["nonceStr"];?>',
            signature: '<?php echo $signPackage["signature"];?>',
            jsApiList: [
                'onMenuShareTimeline','onMenuShareAppMessage'
            ]
        });

        wx.ready(function () {
            wx.onMenuShareTimeline({
                title: ' LACOSTE互动【产品型录】中更有型男演绎LT12限量系列！速来围观！', // 分享标题
                link: '', // 分享链接
                imgUrl: 'http://lt12.ffshtest.net/lookbook/css/img/logo.png?v=<? echo time();?>', // 分享图标
                success: function () {
                },
                cancel: function () {
                }
            });
            wx.onMenuShareAppMessage({
                title: '', // 分享标题
                desc: '', // 分享描述
                link: '', // 分享链接
                imgUrl: '', // 分享图标
                type: '', // 分享类型,music、video或link，不填默认为link
                dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
                success: function () { 
                    // 用户确认分享后执行的回调函数
                },
                cancel: function () { 
                    // 用户取消分享后执行的回调函数
                }
            });
        });
    }
</script>
</body>

</html>
