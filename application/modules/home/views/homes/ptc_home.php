<div id="partnersCarouselMobile" class="partnersCarouselMobile carousel slide visible-sm-block visible-xs-block"
         data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <?php 
                if (!empty($listCustomer)):
                    foreach ($listCustomer as $key => $kh):
                        $image = explode('/', $kh['image']);
            ?>
            <div class="item <?php echo ($key == 0 ? 'active' : '') ?>">
                <div class="container-fluid">
                    <div class="carousel-caption">
                        <img src="<?php echo base_url().'uploads/posts/'.$image[4]; ?>" width="100%"/>
                        <div class="container">
                            <div class="carousel-caption col-sm-5 col-md-5 col-xs-12 col-md-offset-1">
                                <a href="case-studies/cnb-yachts.html">
                                    <p class="subhed"><?php echo $kh['title']; ?></p>
                                    <?php echo $kh['desc']; ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; endif; ?>
        </div>
        <div class="longThinArrowCarouselNav">
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
</div>


<div class="caseStudiesCarouselWrapper">
    <div id="caseStudiesCarousel" class="caseStudies carousel slide" data-ride="carousel" data-interval="8000">
        <div class="carousel-inner" role="listbox">
        <?php 
            if (!empty($listCustomer)):
                foreach ($listCustomer as $key => $kh):
                    $image = explode('/', $kh['image']);
        ?>
            <div class="item <?php echo ($key == 0 ? 'active' : '') ?>">
                <img src="<?php echo base_url().'uploads/posts/'.$image[4]; ?>"
                     class="first-slide hidden-xs" alt="" width="100%" height="605"/>
                <div class="container">
                    <div class="carousel-caption col-sm-5 col-md-5 col-xs-12 col-md-offset-1">
                        <a href="case-studies/cnb-yachts.html">
                            <p class="subhed"><?php echo $kh['title']; ?></p>
                            <?php echo $kh['desc']; ?>
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; endif; ?>
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
