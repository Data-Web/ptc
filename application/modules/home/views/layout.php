<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<head>
    <title>Technology Solutions for Ongoing Product &amp; Service Advantage | PTC</title>
    <meta name="description"
          content="PTC provides technology solutions that transform how products are created and serviced, helping companies achieve product and service advantage."/>
    <meta name="keywords" content=""/>
    <meta property="og:title" content="Technology Solutions for Ongoing Product &amp; Service Advantage | PTC"/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="index.html"/>
    <meta property="og:image" content="index.html"/>
    <meta property="og:description"
          content="PTC provides technology solutions that transform how products are created and serviced, helping companies achieve product and service advantage."/>
    <meta name="twitter:account_id" content="651463036197318658"/>
    <meta name="twitter:title" content="Technology Solutions for Ongoing Product &amp; Service Advantage | PTC"/>
    <meta name="twitter:description"
          content="PTC provides technology solutions that transform how products are created and serviced, helping companies achieve product and service advantage."/>
    <link rel="canonical" href="index.html"/>
    <meta http-equiv="content-language" content="en-US"/>

    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>


    <script language="JavaScript" type="text/javascript"
            src="../sadmin.brightcove.com/js/BrightcoveExperiences.js"></script>
    <script>
        (function (d) {
            var config = {
                        kitId: 'liv4xji',
                        scriptTimeout: 3000,
                        async: true
                    },
                    h = d.documentElement, t = setTimeout(function () {
                        h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
                    }, config.scriptTimeout), tk = d.createElement("script"), f = false, s = d.getElementsByTagName("script")[0], a;
            h.className += " wf-loading";
            tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
            tk.async = true;
            tk.onload = tk.onreadystatechange = function () {
                a = this.readyState;
                if (f || a && a != "complete" && a != "loaded") return;
                f = true;
                clearTimeout(t);
                try {
                    Typekit.load(config)
                } catch (e) {
                }
            };
            s.parentNode.insertBefore(tk, s)
        })(document);
    </script>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet"/>
    <link href="css/style.css" rel="stylesheet"/>
    <link href="css/adjustments.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/jquery-ui.css"/>
    <!--[if IE 9]>
    <link rel="stylesheet" type="text/css" href="/css/ie9.css"/>
    <script src="/js/backgroundsize.min.htc"></script>
    <![endif]-->
    <script src="js/jquery-2.1.4.min.js"></script>


    <script src="js/jquery.bootpag.js"></script>

    <!-- Tracker Scripts -->
    <script type="text/javascript">
        var FirstLookup = true;
        var SecondLookup = false;
        var IsComplete = false;
        var QueryEmailAddy = '';
        var emailAddy = '';

        var _elqQ = _elqQ || [];
        _elqQ.push(['elqSetSiteId', '2826']);
        _elqQ.push(['elqTrackPageView']);
        //_elqQ.push(['elqTrackPageViewDisplayOptInBannerByCountry']);

        (function () {
            function async_load() {
                var s = document.createElement('script');
                s.type = 'text/javascript';
                s.async = true;
                s.src = '../img.en25.com/i/elqCfg.min.js';
                var x = document.getElementsByTagName('script')[0];
                x.parentNode.insertBefore(s, x);

                if (QueryEmailAddy.length > 0) {
                    emailAddy = QueryEmailAddy;
                    _elqQ.push(['elqDataLookup', escape('4da0a50b-e2db-4a56-a1a5-9d4bea5e0ea6'),
                        '<C_EmailAddress>' + emailAddy + '</C_EmailAddress>']);

                }
            }

            if (window.addEventListener) window.addEventListener('DOMContentLoaded', async_load, false);
            else if (window.attachEvent) window.attachEvent('onload', async_load);
        })();

        function SetElqContent() {
            if (FirstLookup) {
                if (QueryEmailAddy.length > 0) {
                    emailAddy = QueryEmailAddy;
                }
                else {
                    emailAddy = GetElqContentPersonalizationValue('C_EmailAddress');

                    if (emailAddy == '' || emailAddy.length < 1) {
                        return;
                    }
                    _elqQ.push(['elqDataLookup', escape('4da0a50b-e2db-4a56-a1a5-9d4bea5e0ea6'),
                        '<C_EmailAddress>' + emailAddy + '</C_EmailAddress>']);
                }

                _elqQ.push(['elqDataLookup', escape('76fe18c3b55f454086dc6a4aa75e99b0'), '<C_EmailAddress>' + emailAddy + '</C_EmailAddress>']);
                FirstLookup = false;
                SecondLookup = true;
            }
            else {
                if (typeof GetElqGroupMembershipStatus == 'function') {
                    if (IsComplete) {
                        return;
                    }

                    var $jq = jQuery.noConflict();

                    var tempEmailAddy = decodeURIComponent(GetElqContentPersonalizationValue('C_EmailAddress'));

                    if (QueryEmailAddy.length > 0 && SecondLookup && tempEmailAddy.length > 0 && tempEmailAddy == QueryEmailAddy) {
                        populateTextFields();
                        addRemoveShortFormFields();
                        populateCheckboxes();
                        IsComplete = true;
                    }
                    else if (SecondLookup && (QueryEmailAddy == null || QueryEmailAddy.length < 1)) {
                        populateTextFields();
                        addRemoveShortFormFields();
                        populateCheckboxes();
                        IsComplete = true;
                    }
                }
            }
        }

        function populateTextFields() {
            $jq('input[type=text], input[type=email], select, textarea').each(
                    function (index) {
                        var input = $jq(this);
                        if (typeof input.data('eloqua-name') !== 'undefined') {
                            var elqValue = GetElqContentPersonalizationValue(input.data('eloqua-name'));
                            if (elqValue != '' && elqValue.length > 0)
                                input.val(elqValue);
                        }
                    }
            );
        }

        function addRemoveShortFormFields() {
            var fName = GetElqContentPersonalizationValue('C_FirstName');
            var lName = GetElqContentPersonalizationValue('C_LastName');
            var country = GetElqContentPersonalizationValue('C_Country');

            if (fName == '' || fName.length < 1
                    || lName == '' || lName.length < 1
                    || country == '' || country.length < 1) {
                $jq('.pg1').slideDown("slow");
                $jq('.pg2, .pg3').remove();
            }
            else {
                var company = GetElqContentPersonalizationValue('C_Company');
                var jCat = GetElqContentPersonalizationValue('C_Job_Role1');
                var jFunct = GetElqContentPersonalizationValue('C_Job_Function1');
                if (company == '' || company.length < 1
                        || jCat == '' || jCat.length < 1
                        || jFunct == '' || jFunct.length < 1) {
                    $jq('.pg2').slideDown("slow");
                    $jq('.pg1, .pg3').remove();
                }
                else {
                    var state = GetElqContentPersonalizationValue('C_State_Prov');
                    var zip = GetElqContentPersonalizationValue('C_Zip_Postal');
                    var phone = GetElqContentPersonalizationValue('C_BusPhone');

                    if (state == '' || state.length < 1
                            || zip == '' || zip.length < 1
                            || phone == '' || phone.length < 1) {
                        $jq('.pg3').slideDown("slow");
                        $jq('.pg1, .pg2').remove();
                    }
                    else {
                        $jq('.pg1, .pg2, .pg3').slideDown("slow");
                    }
                }
            }
        }

        function populateCheckboxes() {
            $jq('input[type=checkbox]').each(function () {
                var subscribedGroupd = $jq(this).data('sub-groupid');
                var unSubscribedGroupd = $jq(this).data('unsub-groupid');

                if (GetElqGroupMembershipStatus(subscribedGroupd)) {
                    $jq(this).prop("checked", true);
                } else if (GetElqGroupMembershipStatus(unSubscribedGroupd)) {
                    $jq(this).prop("checked", false);
                }
            });
        }

        function elqVisitorTrackingOptIn() {
            _elqQ.push(['elqOptIn']);
        }

        function elqVisitorTrackingOptOut() {
            _elqQ.push(['elqOptOut']);
        }

        function elqCreateOptInBanner() {
            elqVisitorTrackingOptIn();
            var div = document.createElement('div');
            div.setAttribute('id', 'elqOptInBannerDiv');
            div.className = 'elqOptInBanner';
            div.innerHTML = '<div class="elqOptInBannerText"><div class="elq-msg"><h3>Important information regarding cookies and PTC.com.</h3><div>By using this website, you consent to the use of cookies in accordance with PTC\'s policy on website cookies & beacons. For more information on cookies, see our <a href="http://support.ptc.com/common/privacy.htm">Privacy Policy</a>.</div></div><div class="elqClose" onclick="elqVisitorTrackingOptIn();document.getElementById(\'elqOptInBannerDiv\').style.display = \'none\';">Hide this message</div></div>';
            document.body.appendChild(div);
        }
    </script>


    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-21507862-4', 'auto', {
            'allowLinker': true
        });
    </script>

</head>
<body itemscope itemtype="http://schema.org/WebPage">


<header>
    <nav role="navigation" class="navbar">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button aria-expanded="false" data-target="#bs-example-navbar-collapse-1"
                        data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <form role="search" class="navbar-form navbar-right mobile">
                    <button class="btn search-btn" type="submit"><img alt="search" src="images/search.png"></button>
                    <div class="form-group">
                        <input type="text" placeholder="Search" class="form-control search-box"
                               onblur="if (this.value.length == 0) { this.value = 'Search'; }"
                               onfocus="if (this.value == 'Search') this.value = ''"
                               value="Search"/>
                    </div>
                </form>
                <a href="<?php echo base_url(); ?>" class="navbar-brand"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">

                    <li class="wide-dropdown li-1">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"   role="button" aria-haspopup="true"
                           aria-expanded="false">
                           <?php echo $lang_page == '1' ? 'Sản phẩm' : 'Product' ?>
                           <span class="sr-only">(current)</span>
                        </a>
                        <ul class="dropdown-menu main">
                            <div class="dropdown-close"><span class="icon icon-close" aria-hidden="true"></span></div>
                            <div class="container">
                                <h4 style="display:none">
                                    Products
                                </h4>
                                <div class="col-lg-16" id="solutions">
                                    <ul>
                                        <?php foreach ($listCategory as $category): ?>
                                            <li class="" style="width:90px;padding:0px 10px 0 0;">
                                                <a href="<?php echo $lang_page == '1' ? base_url("danh-muc/".$category['cate_rewrite']."-".$category['cate_id']) : base_url("category/".$category['cate_rewrite']."-".$category['cate_id']) ?>">
                                                    <img src="/uploads/product_category/<?php echo $category['cate_images']; ?>?h=42&amp;la=en&amp;w=38&amp;hash=95BB131F42883DA01345F21401D96E7E678F7FCD"
                                                         alt="<?php echo $category['cate_name']; ?>" width="38" height="42"/>
                                                    <span class="glyphicon"> </span><br/>
                                                    <?php echo $category['cate_name']; ?>
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                        <li class="iot" style="padding:0 5px;">
                                            <a href="internet-of-things/technology-platform-thingworx.html">
                                                <img src="_/media/Images/Menu-Images/IoTdcfa.png?h=46&amp;la=en&amp;w=41&amp;hash=304885EDCCF53645C42E5564FD39D80844CE01D5"
                                                     alt="" width="41" height="46"/>
                                                <span class="glyphicon"> </span><br/>
                                                IoT Technology Platform
                                            </a>
                                        </li>
                                        <li class="iot" style="">
                                            <a href="augmented-reality.html">
                                                <img src="_/media/Images/Menu-Images/AugmentedReality-icon-white70a9.png?h=34&amp;la=en&amp;w=47&amp;hash=BAD1A48B10689104ECAD2529D0BA0A14C21E90DE"
                                                     alt="" width="47" height="34"/>
                                                <span class="glyphicon"> </span><br/>
                                                Augmented Reality (AR)
                                            </a>
                                        </li>
                                        <li class="" style="">
                                            <a href="/san-pham" title="<?php echo $lang_page == '1' ? 'Tất cả sản phẩm' : 'All Products' ?>">
                                                <img src="_/media/Images/Menu-Images/VIEW-ALL877c.png?h=46&amp;la=en&amp;w=47&amp;hash=BE2D65418658B089A875B52E449441A8AB5B8A21"
                                                     alt="<?php echo $lang_page == '1' ? 'Tất cả sản phẩm' : 'All Products' ?>" width="47" height="46"/>
                                                <span class="glyphicon"> </span><br/>
                                                <?php echo $lang_page == '1' ? 'Tất cả sản phẩm' : 'All Products' ?>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class="wide-dropdown li-2">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false"><?php echo $lang_page == '1' ? 'Dịch vụ' : 'Services' ?><span class="sr-only">(current)</span></a>
                        <ul class="dropdown-menu main">
                            <div class="dropdown-close"><span class="icon icon-close" aria-hidden="true"></span></div>
                            <div class="container">
                            <?php if (isset($listService) && $listService != null): ?>
                                <?php foreach($listService as $service): ?>
                                    <li>
                                        <a href="services/training.html">
                                            <?php echo $service['title']; ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            </div>
                        </ul>
                    </li>
                    <li class="wide-dropdown li-3">
                        <a href="/tin-tuc" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false" title="<?php echo $lang_page == '1' ? 'Tin tức' : 'News' ?>"><?php echo $lang_page == '1' ? 'Tin tức' : 'News' ?></a>
                    </li>

                    <li class="wide-dropdown li-5">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false"><?php echo $lang_page == '1' ? 'Giới thiệu về' : 'Introduce' ?> <span class="sr-only">(current)</span></a>
                        <ul class="dropdown-menu main"><div class="dropdown-close"><span class="icon icon-close" aria-hidden="true"></span></div>
                            <div class="container">
                                <?php
                                  if (!empty($listIntroduceMenu)) {
                                    foreach ($listIntroduceMenu as $v) {
                                ?>
                                    <li>
                                        <a href="<?php echo $lang_page == '1' ? base_url('gioi-thieu/'.$v['url_rewrite'].'-'.$v['id']) : base_url('introduce/'.$v['url_rewrite'].'-'.$v['id']) ?>" title="<?php echo $v['title'] ?>">
                                          <?php echo $v['title'] ?>
                                        </a>
                                    </li>
                                <?php }} ?>
                            </div>
                        </ul>
                    </li>
                    <li class="wide-dropdown li-6">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false"><?php echo $lang_page == '1' ? 'Liên hệ' : 'Contact' ?> <span class="sr-only">(current)</span></a>
                        <ul class="dropdown-menu main">
                            <div class="dropdown-close"><span class="icon icon-close" aria-hidden="true"></span></div>
                            <div class="container">


                                <li>
                                    <a href="http://store.ptc.com/">
                                        e-Store
                                    </a>
                                </li>
                                <li>
                                    <a href="contact-us.html">
                                        Contact Sales
                                    </a>
                                </li>
                                <li>
                                    <a href="http://support.ptc.com/appserver/search/resellers.jsp">
                                        Find a Software Reseller
                                    </a>
                                </li>
                                <li>
                                    <a href="subscription.html">
                                        Subscription
                                    </a>
                                </li>
                                <li>
                                    <a href="Products/free-downloads.html">
                                        Free Software Trials and Downloads
                                    </a>
                                </li>
                                <li>
                                    <a href="http://support.ptc.com/partners">
                                        Partners
                                    </a>
                                </li>
                            </div>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav secondary">
                    <li class="dropdown">
                        <a aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown"
                           class="dropdown-toggle" href="/setlang/vi" title="Việt Nam">Việt Nam<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/setlang/en" title="English">English</a></li>
                        </ul>
                    </li>
                </ul>
                <form role="search" class="navbar-form navbar-right desktop search">
                    <div class="form-group">
                        <input type="text" placeholder="Search" class="form-control search-box">
                    </div>
                    <button class="btn search-btn" type="submit"><img alt="search" src="images/search.png"></button>
                </form>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>


<style type="text/css">
    .talk-to-us .flag {
        background: #00548b url("images/talk-to-us.png") no-repeat scroll 50% 50%;
    }
</style>
<aside>
    <div class="talk-to-us">
        <div class="flag">
        </div>
        <div class="talk-content">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#call" aria-controls="call" role="tab" data-toggle="tab">
                        <img src="_/media/Images/Talk-To-Us/call830d.png?h=28&amp;la=en&amp;w=33&amp;hash=F129A6B0ACD54289F0B34B004F82FD59134DC886"
                             alt="" width="33" height="28"/>
                        <span>
                            Call US
                        </span>
                    </a>
                </li>
                <li role="presentation" class="">
                    <a href="#mail" aria-controls="mail" role="tab" data-toggle="tab">
                        <img src="_/media/Images/Talk-To-Us/emailb5f0.png?h=28&amp;la=en&amp;w=33&amp;hash=98B3172180A7627BA8DE0EF1627AA356DF150BBD"
                             alt="" width="33" height="28"/>
                        <span>
                            Email US
                        </span>
                    </a>
                </li>
                <li role="presentation" class="">
                    <a href="#support" aria-controls="support" role="tab" data-toggle="tab">
                        <img src="_/media/Images/Talk-To-Us/supportb655.png?h=28&amp;la=en&amp;w=33&amp;hash=1392DFCA9595F8FA7BA15C4E4136C68C443FE78B"
                             alt="" width="33" height="28"/>
                        <span>
                            Support
                        </span>
                    </a>
                </li>
                <li role="presentation" class="">
                    <a href="#trials" aria-controls="trials" role="tab" data-toggle="tab">
                        <img src="_/media/Images/Talk-To-Us/trials22b1.png?h=28&amp;la=en&amp;w=33&amp;hash=49109AE5E665D6B0BDBBC0091977989D5D5740EC"
                             alt="" width="33" height="28"/>
                        <span>
                            Trials
                        </span>
                    </a>
                </li>
                <li role="presentation">
                    <a href="#chat" aria-controls="chat" role="tab" data-toggle="tab">
                        <span class="icon-chat"></span>
                        <span>Chat Now <br/>(Available for <br/>Mathcad Only)</span>
                    </a>
                </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane" id="chat">
                    <p><strong>Chat Now</strong> - Let us know how we can help.</p>

                    <button type="submit" class="btn btn-default"
                            onclick="window.open('http://chat.ptc.com/newchat/chat.aspx?auth=PSLHOSTED&amp;p=/engineering-math-software/mathcad&amp;name=anonymous-132_253_204_23&amp;x-Email=anonymous-132_253_204_23%40no-domain-644830.com&amp;x-Category=&amp;domain=www.ptc.com&amp;timestamp=1448017095859&amp;session=416-1448017095534', '_blank')">
                        Start Chat
                    </button>
                </div>
                <div role="tabpanel" class="tab-pane active" id="call">

                    <p><a href="contact-us.html">
                        Customer Care: 1-877-ASK-4-PTC (1-877-275-4782)<br>
                        Technical Support 1-800-477-6435 or <a href="https://support.ptc.com/">click here</a>.<br>
                        You can also <a href="office-locations-map.html">search for an office</a> near you.
                    </a>
                    </p></div>
                <div role="tabpanel" class="tab-pane " id="mail">

                    <p><a href="contact-us.html">
                        Have a PTC Sales Representative <a href="contact-us.html">Contact Me</a><br>
                    </a>
                    </p></div>
                <div role="tabpanel" class="tab-pane " id="support">

                    <p><a href="contact-us.html">
                        <a href="https://support.ptc.com/">PTC eSupport</a><br>
                        <a href="support-services.html">Global Support Services</a>
                    </a>
                    </p></div>
                <div role="tabpanel" class="tab-pane " id="trials">

                    <p><a href="Products/free-downloads.html">
                        <a href="products/free-downloads/index.html">Free PTC Software Trials and Downloads</a>
                    </a>
                    </p></div>
            </div>

        </div>
</aside>

</div>


<div class="heroMarqueeCarouselWrapper">
    <div id="heroMarqueeCarousel" class="heroMarquee carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <?php 
                if (!empty($listSlide)):
                    $activeSlider = 1;
                    foreach ($listSlide as $v):
            ?>
                <div class="item photo <?php echo $activeSlider == 1 ? 'active' : ''; $activeSlider++; ?>" data-color="#a91f8e"
                     data-url="/product-lifecycle-report/complete-product-lifecycle-management-the-iot-comes-to-plm"
                     data-target="_blank">

                    <img src="<?php echo $v['slide_image']; ?>?h=611&amp;la=en&amp;w=1330&amp;hash=85CD3DC1BF6BA77E979EC3E14077B1BE6295E3A6"
                         class="first-slide hidden-xs" alt="" width="1330" height="611"/>
                    <img src="<?php echo $v['slide_image']; ?>?h=462&amp;la=en&amp;w=750&amp;hash=0275C2B3BCC0D96100E141550DDA2CD064584849"
                         class="first-slide visible-xs-block" alt="" width="750" height="462"/>
                    <div class="container">
                        <div class="carousel-caption col-sm-5 col-md-4 col-xs-12 col-md-offset-1">

                            <h1>
                                PTC Windchill Recognized as Leading IoT PLM Technology<br>
                            </h1>
                            <h1 class="mobileH1">
                                <a href="product-lifecycle-report/complete-product-lifecycle-management-the-iot-comes-to-plm.html"
                                   data-sect="b">
                                    PTC Windchill Recognized as Leading IoT PLM Technology<br>
                                </a>

                            </h1>
                            <p>
                                "PTC has built cutting-edge, industry-leading technologies to cater to the PLM needs of its
                                customers."<br>
                            </p>

                            <a target="" class="btn btn-lg orange btn-primary"
                               href="product-lifecycle-report/complete-product-lifecycle-management-the-iot-comes-to-plm.html"
                               title="Learn More">Learn More</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; endif; ?>
        </div>
        <a class="left carousel-control hidden-xs" href="#heroMarqueeCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control hidden-xs" href="#heroMarqueeCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <ol class="carousel-indicators top hidden-sm">
            <li data-target="#heroMarqueeCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#heroMarqueeCarousel" data-slide-to="1"></li>
            <li data-target="#heroMarqueeCarousel" data-slide-to="2"></li>
            <li data-target="#heroMarqueeCarousel" data-slide-to="3"></li>

        </ol>

    </div>
</div>


<script type="text/javascript">
    var $jq = jQuery.noConflict();
    $jq(function () {
        var mainItem = $jq(".heroMarqueeCarouselWrapper .item").click(function () {
            var link = $jq(this).data('url');
            var target = $jq(this).data('target');

            if (target == '_blank') {
                window.open(link, "_blank");
                return true;
            } else {
                location.href = link;
                return false;
            }
        });
    });
</script>
<div class="newsAnnouncementsFeedWrapper">
    <div id="newsAnnouncementsFeed" class="newsFeed carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <?php if(isset($news) && $news != null):
                $newsStt = 1;
                foreach($news as $new): ?>
                <div class="item <?php echo $newsStt == 1 ? 'active' : ''; $newsStt++; ?>">
                    <div class="container-fluid">
                        <div class="carousel-caption col-sm-11 col-md-offset-1">
                            <p class="new">
                                <a href="news/2016/ptc-appoints-phil-fernandez-to-its-board-of-directors.html">
                                <?php echo $new['news_title']; ?><br>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; endif; ?>
        </div>
        <a class="right carousel-control hidden-xs" href="#newsAnnouncementsFeed" role="button" data-slide="next">

        </a>
    </div>
</div>


<div class="partnersCarouselWrapper">
    <div id="partnersCarouselDesktop" class="partnersCarouselDesktop carousel slide hidden-sm hidden-xs"
         data-ride="carousel">
        <div class="carousel-inner" role="listbox">
        <?php if(isset($listDoitac) && $listDoitac != null): ?>
                <?php 
                    $fourDoitac = 1; 
                    while($fourDoitac <= ceil(count($listDoitac)/4)) {
                ?>
                    <div class="item <?php echo $fourDoitac == 1 ? 'active' : ''; ?>">
                        <div class="container-fluid">
                            <div class="carousel-caption">
                                <?php $i = isset($a) && $a != null ? $a : 0; ?>
                                <?php for($i; $i < count($listDoitac); $i++): ?>
                                <a class="partnerLink" href="#" title="<?php echo $listDoitac[$i]['doitac_name'] ?>" 
                                    target="Active Browser">
                                    <img class="nonhover" rel="0" alt="<?php echo $listDoitac[$i]['doitac_name'] ?>" 
                                        src="<?php echo $listDoitac[$i]['doitac_image'] ?>" />
                                    <img class="onhover" rel="0" alt="<?php echo $listDoitac[$i]['doitac_name'] ?>" 
                                        src="<?php echo $listDoitac[$i]['doitac_image'] ?>" style="display:none"/>
                                </a>
                                <?php if($i == 4) { break; $a = 5; }endfor; ?>
                            </div>
                        </div>
                    </div>
                <?php $fourDoitac++; } ?>
        </div>
        <a class="left carousel-control " href="#partnersCarouselDesktop" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control " href="#partnersCarouselDesktop" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    <?php endif; ?>
    </div>
    <div id="partnersCarouselMobile" class="partnersCarouselMobile carousel slide visible-sm-block visible-xs-block"
         data-ride="carousel">
        <div class="carousel-inner" role="listbox">

            <div class="item active">
                <div class="container-fluid">
                    <div class="carousel-caption">
                        <img src="#"/>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container-fluid">
                    <div class="carousel-caption">
                        <img src="#"/>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container-fluid">
                    <div class="carousel-caption">
                        <img src="#"/>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container-fluid">
                    <div class="carousel-caption">
                        <img src="#"/>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container-fluid">
                    <div class="carousel-caption">
                        <img src="#"/>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container-fluid">
                    <div class="carousel-caption">
                        <img src="#"/>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container-fluid">
                    <div class="carousel-caption">
                        <img src="#"/>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container-fluid">
                    <div class="carousel-caption">
                        <img src="#"/>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container-fluid">
                    <div class="carousel-caption">
                        <img src="#"/>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container-fluid">
                    <div class="carousel-caption">
                        <img src="#"/>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container-fluid">
                    <div class="carousel-caption">
                        <img src="#"/>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container-fluid">
                    <div class="carousel-caption">
                        <img src="#"/>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container-fluid">
                    <div class="carousel-caption">
                        <img src="#"/>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container-fluid">
                    <div class="carousel-caption">
                        <img src="#"/>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container-fluid">
                    <div class="carousel-caption">
                        <img src="#"/>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container-fluid">
                    <div class="carousel-caption">
                        <img src="#"/>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container-fluid">
                    <div class="carousel-caption">
                        <img src="#"/>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container-fluid">
                    <div class="carousel-caption">
                        <img src="#"/>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container-fluid">
                    <div class="carousel-caption">
                        <img src="#"/>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container-fluid">
                    <div class="carousel-caption">
                        <img src="#"/>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container-fluid">
                    <div class="carousel-caption">
                        <img src="#"/>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container-fluid">
                    <div class="carousel-caption">
                        <img src="#"/>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container-fluid">
                    <div class="carousel-caption">
                        <img src="#"/>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container-fluid">
                    <div class="carousel-caption">
                        <img src="#"/>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container-fluid">
                    <div class="carousel-caption">
                        <img src="#"/>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control " href="#partnersCarouselMobile" role="button" data-slide="prev"
           style="display:none;">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control " href="#partnersCarouselMobile" role="button" data-slide="next"
           style="display:none;">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>


<div class="caseStudiesCarouselWrapper">
    <div id="caseStudiesCarousel" class="caseStudies carousel slide" data-ride="carousel" data-interval="8000">
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="_/media/Images/Homepage/CaseStudies/CnBYatch_V204e1.jpg?h=605&amp;la=en&amp;w=1330&amp;hash=A98398CEF203FB986BEEC524BBC2831A6CE76B99"
                     class="first-slide hidden-xs" alt="" width="1330" height="605"/>
                <div class="container">
                    <div class="carousel-caption col-sm-5 col-md-5 col-xs-12 col-md-offset-1">
                        <a href="case-studies/cnb-yachts.html">
                            <p class="subhed">Case Studies</p>
                            <h2>
                                Designing the CNB 76
                            </h2>
                            <span>A Luxury Yacht for the 21st Century</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="_/media/Images/Homepage/CaseStudies/11-15/CaseStudy-KHS14268.jpg?h=605&amp;la=en&amp;w=1330&amp;hash=7A78599E5B79EFFE8FEC55BE39752EEEFE142C57"
                     class="first-slide hidden-xs" alt="" width="1330" height="605"/>
                <div class="container">
                    <div class="carousel-caption col-sm-5 col-md-5 col-xs-12 col-md-offset-1">
                        <a href="case-studies/khs.html">
                            <p class="subhed">Case Studies</p>
                            <h2>
                                200-Year-Old Brewery Delivers Award-Winning Beer with KHS<br/>
                                <br/>
                            </h2>
                            <span>KHS GmbH, based in Dortmund, Germany, offers filling machinery for glass and PET bottles, kegs, and cans for the beverage, food, and non-food industries.</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="longThinArrowCarouselNav">
            <a class="left carousel-control" href="#caseStudiesCarousel" role="button" data-slide="prev">
                <span class="icon icon-LongThinLeftArrow" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#caseStudiesCarousel" role="button" data-slide="next">
                <span class="icon icon-LongThinRightArrow" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

<?php if(isset($pro_hot) && count($pro_hot) >= 4): ?>
<div class="solutionsWrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="one-col-50-50-split col-sm-6 no-padding image"
                 style="background-image:url('<?php echo $pro_hot[0]['pro_images'] ?>');background-position: right;">
            </div>
            <div class="col-lg-6 col-lg-offset-6 col-md-offset-6 col-sm-offset-6 col-sm-6 rightc copy">
                <a href="http://liveworx.com/?utm_source=ptc.com&amp;utm_medium=banner&amp;utm_campaign=LiveWorx%20Boston%20FY16&amp;utm_content=LiveWorx_Boston_FY16-ptc.com-banner-homepage_panel-WW-2029&amp;cl1=LiveWorx_Boston_FY16-ptc.com-banner-homepage_panel-WW-2029&amp;cmsrc=ptc.com&amp;cid=701F0000000nUMbIAM&amp;elqCampaignId=1912"
                   target="_blank">
                    <h2><?php echo $pro_hot[1]['pro_name'] ?></h2>
                    <p><?php echo $pro_hot[1]['pro_info']; ?></p>
                    <br>
                </a>
                <a target="_blank" class="btn btn-lg med-blue btn-primary"
                   href="http://liveworx.com/?utm_source=ptc.com&amp;utm_medium=banner&amp;utm_campaign=LiveWorx%20Boston%20FY16&amp;utm_content=LiveWorx_Boston_FY16-ptc.com-banner-homepage_panel-WW-2029&amp;cl1=LiveWorx_Boston_FY16-ptc.com-banner-homepage_panel-WW-2029&amp;cmsrc=ptc.com&amp;cid=701F0000000nUMbIAM&amp;elqCampaignId=1912">Xem thêm</a>
            </div>
        </div>
    </div>
</div>

<div class="solutionsWrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="one-col-50-50-split col-sm-6 col-sm-offset-6 no-padding image"
                 style="background-image:url('<?php echo $pro_hot[3]['pro_images'] ?>');">
            </div>
            <div class="col-lg-6 col-lg-pull-6 col-md-pull-6 col-md-offset-1 col-sm-6 col-sm-pull-6 leftc copy">
                <a href="product-lifecycle-report.html" target="">
                    <h2><?php echo $pro_hot[2]['pro_name'] ?></h2>
                    <p><?php echo $pro_hot[2]['pro_info'] ?></p>
                </a>
                <a class="btn btn-lg med-blue btn-primary" href="product-lifecycle-report.html" title="LEARN MORE">Xem thêm</a>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<?php if(isset($listNews) && $listNews != null): ?>
<div class="eventsModuleWrapper">
    <div class="container-fluid eventsModuleTitle">
        <div class="col-md-12">
            <h3 align="center">Tin tức</h3>
        </div>
    </div>
    <div class="container-fluid eventsModule">
        <div class="container">
            <div class="row">
                <div class="col-lg-16 col-md-16 col-sm-16">
                    <div class="grid-content">
                        <?php foreach($listNews as $newsInfo): ?>
                        <div class="col-lg-4 col-md-4 col-sm-12 event vcenter">
                            <div class="eventImage">
                                <a href="news/2016/ptc-named-technology-leader-in-the-global-iot-plm-market.html">
                                    <img src="<?php echo $newsInfo['news_images'] ?>"
                                         alt="Frost and Sullivan PLM IoT Award" width="407" height="232"/>
                                </a>
                            </div>
                            <div class="eventDescription">
                                <a target="Active Browser"
                                   href="news/2016/ptc-named-technology-leader-in-the-global-iot-plm-market.html"
                                   title="Read More">

                                    <p class="date"><?php echo $newsInfo['news_date']; ?></p>
                                    <h3><?php echo $newsInfo['news_title']; ?><br></h3>
                                    <p><?php echo $newsInfo['news_info']; ?></p>
                                    <p class="eventDescriptionBtn" align="center">
                                    <a class="btn btn-lg med-blue btn-primary"
                                                                      href="news/2016/ptc-named-technology-leader-in-the-global-iot-plm-market.html"
                                                                      role="button">Read More</a></p>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<div class="miniPromosWrapper greenChevronCarouselNav">
    <div class="container-fluid">
        <div class="row equal-row" data-breakpoint="992">

            <div class="col-md-8">
                <div class="promoCarouselWrapper ">
                    <div id="promoCarousel" class="promoCarousel carousel slide equal-col">
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="container-fluid">
                                    <div class="carousel-caption">
                                        <p>PTC (NASDAQ: PTC) is a global provider of technology platforms and solutions
                                            that transform how
                                            companies create, operate, and service the &ldquo;things&rdquo; in the
                                            Internet of Things (IoT).</p>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="container-fluid">
                                    <div class="carousel-caption">
                                        <p>PTC's field-proven software and solutions are deployed in more than 26,000
                                            businesses worldwide to generate a product or service advantage.</p>
                                        <br>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="container-fluid">
                                    <div class="carousel-caption">
                                        <p>PTC has ~6,000 employees in 30 countries around the world.</p>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="container-fluid">
                                    <div class="carousel-caption">
                                        <p>PTC has 750+ partners, including value-added-resellers, enterprise software
                                            and performance team partners, hardware and system integration partners, and
                                            service and training partners.</p>
                                        <br>
                                        <br>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control hidden-xs" href="#promoCarousel" role="button"
                           data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control hidden-xs" href="#promoCarousel" role="button"
                           data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <ol class="carousel-indicators hidden-lg hidden-md hidden-sm">
                            <li data-target="#promoCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#promoCarousel" data-slide-to="1"></li>
                        </ol>
                    </div>
                </div>
            </div>


            <div class="col-md-2 no-padding-left">
                <div class="promo1 equal-col">
                    <div class="promo">
                        <p><a>Designing in a Multi-CAD Environment</a></p>
                        <br>
                        <a role="button" href="cad/designing-in-a-multi-cad-environment.html"
                           class="btn btn-lg trans btn-primary">Learn more <span aria-hidden="true"
                                                                                 class="icon icon-CTA-arrow"></span></a>
                    </div>
                </div>
            </div>


            <div class="col-md-2 no-padding-left">
                <div class="promo2 equal-col">
                    <div class="promo">
                        <p><a>The IoT is Revolutionizing SLM Software</a></p>
                        <br>
                        <a role="button" href="service-lifecycle-management/iot-takes-slm-to-the-next-level.html"
                           class="btn btn-lg trans btn-primary">Learn more <span aria-hidden="true"
                                                                                 class="icon icon-CTA-arrow"></span></a>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- ------------------------------------ -->

<footer>

    <nav class="navbar" role="navigation">
        <div class="container-fluid">
            <div class="row">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="contact-us.html">
                            Contact Us
                        </a>
                    </li>
                    <li>
                        <a href="careers.html">
                            Careers
                        </a>
                    </li>
                    <li>
                        <a href="http://investor.ptc.com/">
                            Investor Relations
                        </a>
                    </li>
                    <li>
                        <a href="news.html">
                            News
                        </a>
                    </li>
                    <li>
                        <a href="http://support.ptc.com/partners/">
                            Partners
                        </a>
                    </li>
                    <li>
                        <a href="blogs.html">
                            Blogs
                        </a>
                    </li>
                    <li>
                        <a href="policies.html">
                            Policies
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right social">
                    <li>
                        <a target="_blank" href="https://www.facebook.com/PTC.Inc">
                            <span class="icon icon-Facebook"></span>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://twitter.com/PTC">
                            <span class="icon icon-Twitter"></span>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://www.linkedin.com/company/ptc">
                            <span class="icon icon-LinkedIn"></span>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://www.youtube.com/ptc">
                            <span class="icon icon-YouTube"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <ul class="nav navbar-nav secondary">
                    <li class="active"><a href="policies/copyright-and-trademarks.html">&copy; Copyright 2016 PTC</a>
                    </li>
                    <li><a href="policies/privacy.html">Privacy</a></li>
                </ul>
            </div>
        </div>
    </nav>
</footer>


<script src="js/jquery.mobile.custom.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src="js/jCookie.js" type="text/javascript"></script>
<script type="text/javascript">
    /*********************************/
    /*CLM*/
    /*********************************/
    var $jq = jQuery.noConflict();
    var dt = new Date();
    var mins = 30;
    dt.setTime(dt.getTime() + (mins * 60 * 1000));
    var cTime = dt;

    var socialCookGACID = 'elqCLM-CID';
    var socialCookSrcVal = 'elqCLM-CMSRC';
    var elqCIDCookSrcVal = 'elqCLM-ELQCID';
    var elqCL1CookSrcVal = 'elqCLM-CL1';
    var clientId = '';

    function isEmpty(map) {
        for (var key in map) {
            if (map.hasOwnProperty(key) && map[key] != undefined) {
                return false;
            }
        }
        return true;
    }
    function getQueryString() {
        var hash;
        var vars = {};
        var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
        for (var i = 0; i < hashes.length; i++) {
            hash = hashes[i].split('=');
            vars[hash[0]] = hash[1];
        }
        return vars;
    }

    ga(function (tracker) {
        clientId = tracker.get('clientId');

        //Load the plugin
        ga('require', 'linker');
        //Define which domains to autoLink
        ga('linker:autoLink', ['liveworx.com', 'showreg.net', 'eventpoint.com', 'thingevent.com', 'thingworx.com']);

        //Set the dimenion variables to store the Google ID and the Google Session ID
        ga('set', 'dimension1', clientId);

        if (jQuery.cookie('__utma') != null && jQuery.cookie('__utma').length > 0) {
            var sessionArray = jQuery.cookie('__utma').split('.');
            if (sessionArray != null && sessionArray.length > 3) {
                var newSessionId = sessionArray[sessionArray.length - 3] + '.' + sessionArray[sessionArray.length - 2];
                ga('set', 'dimension2', newSessionId);
            }
        }
        ga('send', 'pageview');

        //Populate any Eloqua form field values
        var elem1 = $jq('.hdnGoogleUID');
        elem1.val(clientId);
    });

    $jq(document).ready(function () {
        var cl1 = '';
        var cid = '';
        var cmsrc = '';
        var elqId = '';

        var qVals = getQueryString();

        //product trial download
        if (qVals != null && qVals != undefined && !isEmpty(qVals)) {
            var iframe = $jq('#ctl11_blneWidgetMainContent2_widget_uxIframe');
            if (iframe.length > 0) {
                var emailAddy = qVals['email'];
                if (emailAddy != undefined && emailAddy.length > 0) {
                    iframe.attr('src', ('http://support.ptc.com/apps/creo_naas/demo.jsp?email=' + emailAddy));
                }
            }
        }

        if (qVals == null || qVals == undefined || isEmpty(qVals)) {
            var proceed = false;

            var cookGA = $jq.cookie(socialCookGACID);
            var cookSrc = $jq.cookie(socialCookSrcVal);
            var cookElqCID = $jq.cookie(elqCIDCookSrcVal);
            var cookCL1 = $jq.cookie(elqCL1CookSrcVal);

            if (cookGA != null && cookGA != undefined && cookGA.length > 0) {
                cid = cookGA;
                proceed = true;
            }
            if (cookSrc != null && cookSrc != undefined && cookSrc.length > 0) {
                cmsrc = cookSrc;
                proceed = true;
            }
            if (cookElqCID != null && cookElqCID != undefined && cookElqCID.length > 0) {
                elqId = cookElqCID;
                proceed = true;
            }
            if (cookCL1 != null && cookCL1 != undefined && cookCL1.length > 0) {
                cl1 = cookCL1;
                proceed = true;
            }

            //if there are no query-string values, and there are no cookie values, then do not proceed with the rest of the function
            if (!proceed) {
                return false;
            }
        }

        if (qVals['cl1'] != null && qVals['cl1'] != undefined) {
            cl1 = qVals['cl1'];
        }
        if (qVals['cid'] != null && qVals['cid'] != undefined) {
            cid = qVals['cid'];
        }
        if (qVals['cmsrc'] != null && qVals['cmsrc'] != undefined) {
            cmsrc = qVals['cmsrc'];
        }
        if (qVals['elqCampaignId'] != null && qVals['elqCampaignId'] != undefined) {
            elqId = qVals['elqCampaignId'];
        }
        if (qVals['elqCampaignID'] != null && qVals['elqCampaignID'] != undefined) {
            elqId = qVals['elqCampaignID'];
        }
        if (qVals['elqcampaignID'] != null && qVals['elqcampaignID'] != undefined) {
            elqId = qVals['elqcampaignID'];
        }
        if (qVals['elqcampaignId'] != null && qVals['elqcampaignID'] != undefined) {
            elqId = qVals['elqcampaignID'];
        }

        if (cl1 != null && cl1 != undefined && cl1.length > 1) {
            var elem1 = $jq('.ddlSocialCategory');

            var elem2 = $jq('.hdnMedia');
            if (elem2.length > 0) {
                elem2.val(cl1);
            }
            $jq.cookie(elqCL1CookSrcVal, cl1, {path: '/', expires: cTime});

            if (elem1.length > 0) {
                if (cl1.indexOf("acebook") > -1) {
                    elem1.val('Facebook');
                }
                else if (cl1.indexOf("witter") > -1) {
                    elem1.val('Twitter');
                }
                else if (cl1.indexOf("inkedin") > -1) {
                    elem1.val('LinkedIn');
                }
                else if (cl1.indexOf("anner") > -1) {
                    elem1.val('Banner Ad');
                }
                else if (cl1.indexOf("oogle") > -1) {
                    elem1.val('Google');
                }
                else if (cl1.indexOf("ress") > -1) {
                    elem1.val('Press Release');
                }
                else if (cl1.indexOf("hingworx") > -1) {
                    elem1.val('Thingworx.com');
                }
                else if (cl1.indexOf("tc.com") > -1) {
                    elem1.val('PTC.com');
                }
                else if (cl1.indexOf("mail") > -1) {
                    elem1.val('Email');
                }
            }
        }

        if (cid != null && cid != undefined && cid.length > 1) {
            var elem1 = $jq('.hdnCID');
            if (elem1.length > 0) {
                elem1.val(cid);
            }
            $jq.cookie(socialCookGACID, cid, {path: '/', expires: cTime});
        }

        if (cmsrc != null && cmsrc != undefined && cmsrc.length > 1) {
            var elem1 = $jq('.hdnCMSource');
            if (elem1.length > 0) {
                elem1.val(cmsrc);
            }
            $jq.cookie(socialCookSrcVal, cmsrc, {path: '/', expires: cTime});
        }

        if (elqId != null && elqId != undefined && elqId.length > 1) {
            var elem1 = $jq('.elqCampaignId');
            if (elem1.length > 0) {
                elem1.val(elqId);
            }
            $jq.cookie(elqCIDCookSrcVal, elqId, {path: '/', expires: cTime});
        }

        var elem1 = $jq('.hdnGoogleUID');
        elem1.val(clientId);
    });
</script>
<script type="text/javascript">
    /*********************************/
    /*UI Custom*/
    /*********************************/
    var $jq = jQuery.noConflict();
    /**Get all query-string parameters from the page*/
    function getQueryString() {
        var hash;
        var vars = {};
        var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
        for (var i = 0; i < hashes.length; i++) {
            hash = hashes[i].split('=');
            vars[hash[0]] = hash[1];
        }
        return vars;
    }
    function replaceAll(str, find, replace) {
        return str.replace(new RegExp(find, 'g'), replace);
    }
    function escapeRegExp(string) {
        return string.replace(/([.*+?^=!:${}()|\[\]\/\\])/g, "\\$1");
    }
    /********************************/
    //Add on-click behaviour to the search boxes
    var searchRedirected = false;
    function SearchRedirect(isMobile) {
        if (searchRedirected)
            return false;

        var search = (isMobile) ? $jq('form.navbar-form.mobile input.search-box').val() : $jq('form.desktop input.search-box').val();

        var resultsUrl = '/searchresults' + location.search + ((location.search.length > 0) ? '&' : '?') + 'q=' + encodeURIComponent(search);
        if (location.search.indexOf('q=') > 0) {
            resultsUrl = '/searchresults' + '?q=' + encodeURIComponent(search);
        }
        searchRedirected = true;
        location.href = resultsUrl;
        return false;
    }
    $jq(document).ready(function () {
        $jq('.navbar-form.desktop.search button.search-btn').click(function () {
            return SearchRedirect(false);
        });
        $jq('input.search-box').keypress(function (e) {
            if (e.which == 13) {
                //Enter key pressed
                var parElem = $jq(this).parent().parent();
                if (parElem.hasClass('mobile')) {
                    return SearchRedirect(true);
                } else {
                    return SearchRedirect(false);
                }
            }
        });
    });

    $jq(document).ready(function () {
        //Check for empty content break tags before the widgets placeholder
        $jq('.col-md-6.interior-content > section, .col-sm-8.body > section').each(function () {
            var prevTag = $jq(this).prev();
            if (prevTag.prop("tagName") == "BR") {
                prevTag.remove();
            }
        });

        //Remove green header if the h2 tag is empty from 2-column pages
        $jq('.heroColor h2').each(function () {
            if ($jq(this).text().length == 0) {
                $jq('.heroColor').remove();
            }
        });

        //Remove excess break tags from CTA widgets and HTML widgets
        $jq('.right-left-cta, .video-copy-promo, .photo-copy-promo, .right-links, .html-content > div > div').children(':last').each(function () {
            if ($jq(this).prop('tagName') == "BR") {
                $jq(this).remove();
            }
        });

        //Homepage on-hover states
        $jq(".partnersCarouselWrapper .item .partnerLink").hover(
                function () {
                    $jq(this).find('img:eq(0)').hide();
                    $jq(this).find('img:eq(1)').show();
                }, function () {
                    $jq(this).find('img:eq(0)').show();
                    $jq(this).find('img:eq(1)').hide();
                });

        //Alternate Product Nav Item Styles
        var allCount = $jq("ul.navbar-nav").find("li.iot").length;

        $jq("ul.navbar-nav").find("li.iot").each(function (i) {
            if (i > 0) {
                if ($jq(this).prev().hasClass("iot")) {
                    $jq(this).addClass("addLeftBorder");
                }
            }
            else if (i == 0) {
                $jq(this).removeClass("addLeftBorder");
                $jq(this).addClass("removeLeftBorder");
            }
        });

        $jq.fn.extend({
            renameAttr: function (name, newName, removeData) {
                var val;
                return this.each(function () {
                    val = $jq.attr(this, name);
                    $jq.attr(this, newName, val);
                    $jq.removeAttr(this, name);
                    // remove original data
                    if (removeData !== false) {
                        $jq.removeData(this, name.replace('data-', ''));
                    }
                });
            }
        });

        //adjust menu styles on page load
        var headerElem = $jq("div.interiorHeroImage div.inner");
        if ($jq(window).width() < 1147) {
            $jq("ul.navbar-nav").find("#solutions li").renameAttr('style', 'desktop-styles');
        }
        //adjust main desktop image on page load
        if ($jq(window).width() < 769) {
            if (headerElem.length > 0) {
                var mHeaderImage = headerElem.data('mobile-style');
                if (mHeaderImage.length > 0 && mHeaderImage.indexOf("background-image:url('')") < 0) {
                    headerElem.attr('style', mHeaderImage);
                }
            }
        }

        $jq(window).resize(function () {
            //adjust menu styles
            if ($jq(window).width() < 1146) {
                $jq("ul.navbar-nav").find("#solutions li").renameAttr('style', 'desktop-styles');
            }
            else {
                $jq("ul.navbar-nav").find("#solutions li").renameAttr('desktop-styles', 'style');
            }
            //adjust main desktop image
            if ($jq(window).width() < 768) {
                var mHeaderImage = headerElem.data('mobile-style');
                if (mHeaderImage.length > 0 && mHeaderImage.indexOf("background-image:url('')") < 0) {
                    headerElem.attr('style', mHeaderImage);
                }
            }
            else {
                headerElem.attr('style', headerElem.data('desktop-style'));
            }
        });

        //Navigation selection
        if (location.pathname != "index.html") {
            $jq("ul.navbar-nav > li").each(function (i) {
                var celement = $jq(this).find('a[href="' + location.pathname.toLowerCase() + '"]');

                if (celement.length > 0) {
                    $jq(this).addClass("selected");
                }
            });
            //leftRightMenu
            $jq(".sidebar .navbar-nav li").each(function (i) {
                var celement = $jq(this).find('a[href="' + location.pathname.toLowerCase() + '"]');

                if (celement.length > 0) {
                    //$jq(this).attr('style', "font-weight:bold");
                    celement.addClass('selected');
                }
            });
        }

        //Alter the width of the main menu so that everything fits into a single line
        var firstNavItem = $jq('header .nav .wide-dropdown:eq(0) .dropdown-menu');
        firstNavItem.addClass('itemcount' + firstNavItem.find('#solutions li').length);

        //Modify the title of detail pages if the title is one of the blogs on the site
        if (location.pathname.indexOf("mathcad-software-blog/index.html") > 0) {
            $jq('.interiorHeroImageWrapper h1, ol.breadcrumb li:eq(1) > a').html('PTC Mathcad Software Blog');
        }
        else if (location.pathname.indexOf("cad-software-blog/index.html") > 0) {
            $jq('.interiorHeroImageWrapper h1, ol.breadcrumb li:eq(1) > a').html('CAD Software Blog');
        } else if (location.pathname.indexOf("product-lifecycle-report/index.html") > 0) {
            $jq('.interiorHeroImageWrapper h1, ol.breadcrumb li:eq(1) > a').html('Product Lifecycle Report');
        } else if (location.pathname.indexOf("integrity-blog/index.html") > 0) {
            $jq('.interiorHeroImageWrapper h1, ol.breadcrumb li:eq(1) > a').html('PTC Integrity Blog');
        }

        //Modify the title of detail pages if the title is one of the blogs on the site
        if (location.pathname.indexOf("mathcad-software-blog/index.html") > 0) {
            if (location.hostname.indexOf('-de')) {
                $jq('.interiorHeroImageWrapper h1, ol.breadcrumb li:eq(1) > a').html('PTC-Mathcad Software Blog');
            } else {
                $jq('.interiorHeroImageWrapper h1, ol.breadcrumb li:eq(1) > a').html('PTC Mathcad Software Blog');
            }
        }
        else if (location.pathname.indexOf("cad-software-blog/index.html") > 0) {
            if (location.hostname.indexOf('-de')) {
                $jq('.interiorHeroImageWrapper h1, ol.breadcrumb li:eq(1) > a').html('CAD-Software Blog');
            }
            else {
                $jq('.interiorHeroImageWrapper h1, ol.breadcrumb li:eq(1) > a').html('CAD Software Blog');
            }
        }
        else if (location.pathname.indexOf("product-lifecycle-report/index.html") > 0) {
            if (location.hostname.indexOf('-de')) {
                $jq('.interiorHeroImageWrapper h1, ol.breadcrumb li:eq(1) > a').html('Product Lifecycle Report');
            }
            else {
                $jq('.interiorHeroImageWrapper h1, ol.breadcrumb li:eq(1) > a').html('Product Lifecycle Report');
            }
        }
        else if (location.pathname.indexOf("integrity-blog/index.html") > 0) {
            if (location.hostname.indexOf('-de')) {
                $jq('.interiorHeroImageWrapper h1, ol.breadcrumb li:eq(1) > a').html('PTC-Integrity Blog');
            }
            else {
                $jq('.interiorHeroImageWrapper h1, ol.breadcrumb li:eq(1) > a').html('PTC Integrity Blog');
            }
        }

        //Remove unused p-tags from the news page
        $jq('.postDescription h3').each(function () {
            var ptag = $jq(this).next();
            if (ptag.prop('tagName') == "P") {
                ptag.remove();
            }
        });

        //Add a class to the 50/50 split modules for the home page
        if (window.location.pathname == 'index.html') {
            // Index (home) page
            $jq('.solutionsWrapper').each(function () {
                $jq(this).addClass('home');
                $jq(this).css('max-width', 'initial');
            });
        }

        if (typeof String.prototype.trim !== 'function') {
            String.prototype.trim = function () {
                return this.replace(/^\s+|\s+$/g, '');
            }
        }

        //remove emtpy p-tags from CTAs
        $jq('.blogCategory .description p').each(function () {
            if ($jq(this).text().trim().length < 3) {
                $jq(this).remove();
            }
        });

        //Hide right column if content isn't found on it (to prevent the border from showing up)
        if ($jq('.push230').text().trim().length < 1) {
            $jq('.push230').hide();
        }

        //Overrides for breadcrumbs
        $jq('.breadcrumb a[href="/engineering-math-software"]').each(function () {
            $jq(this).attr('href', 'javascript:void(0)');
        });

        //On the right column CTAs, dynamically add a bottom light gray border to show separation between similar components
        $jq('.sidebar > .standalone-link').each(function () {
            var nextSection = $jq(this).next();
            if (nextSection.hasClass('standalone-link')) {
                $jq(this).css('border-bottom', '1px solid lightgray');
            }
        });

        //Nav tabs
        $jq('.wide-dropdown > ul.dropdown-menu > a.nav-tabs').click(function (e) {
            e.preventDefault()
            $jq(this).tab('show');
            $jq(this).parent().parent().find('a.nav-tabs').removeClass('active');
            $jq(this).addClass('active');
        });

        //fix home page paragraph height
        /*$jq('.event .eventDescription').each(function(){
         $jq(this).find('h3').css('height', '60px');
         $jq(this).find('p:eq(1)').css('height', '45px');
         });*/

        //fix brake tag issue
        $jq(".heroMarqueeCarouselWrapper").children("br, BR").remove();
        //remove excess break tags from content


        //fix 'active browser' target attribute on all links:
        $jq('a[target*="Active Browser"]').each(function () {
            $jq(this).attr('target', '');
        });

        $jq('.innerPages:eq(0)').addClass('first');

        //fix the header lengths
        $jq(document).ready(function () {
            var h1length = $jq('h1.pad60').text().length;
            if (h1length > 70) {
                $jq('h1.pad60').attr('style', 'font-size:1.9em;line-height: 45px;');
            }
        });

    });
</script>
<div style="display:none">
    <!--Tracker script hidden to avoid spacing issues with the img it generates-->
    <script type="text/javascript" language="javascript">llactid = 19408</script>
    <script type="text/javascript" language="javascript"
            src="../t2.trackalyzer.com/trackalyze.js"></script>
</div>
<script>
    (function (h, o, t, j, a, r) {
        h.hj = h.hj || function () {
                    (h.hj.q = h.hj.q || []).push(arguments)
                };
        h._hjSettings = {hjid: 128718, hjsv: 5};
        a = o.getElementsByTagName('head')[0];
        r = o.createElement('script');
        r.async = 1;
        r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
        a.appendChild(r);
    })(window, document, '//static.hotjar.com/c/hotjar-', '.js?sv=');
</script>
<!-- put this immediately before the closing /body tag -->
<script type="text/javascript">
    (function () {
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        var host = (document.location.protocol == 'index.html') ?
                'cdn.snapapp.com' : 'scdn.snapapp.com';
        s.src = '//' + host + '/widget/widget.js';
        s.id = 'eeload';
        document.getElementsByTagName('head')[0].appendChild(s);
    })();
</script>


</body>

<!-- Mirrored from www.ptc.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Mar 2016 02:29:40 GMT -->
</html>