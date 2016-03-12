<div class="upcomingEventsModuleWrapper">
    <div class="container-fluid" id="events">
        <div class="eventItems">
        <?php if(isset($listProduct) && !empty($listProduct)): ?>
            <?php foreach ($listProduct as $key => $product): ?>
                <div class="col-md-4 col-sm-12 upcomingEventsCol eventsLanding">
                    <div class="event">
                        <a href="<?php echo base_url().'san-pham/'.$product['pro_name_rewrite']; ?>">
                            <div class="eventTitle">
                                <span class="icon icon-LongThinRightArrow square"></span>
                                <h3></h3>
                            </div>
                            <div class="eventImg">
                                <img src="<?php echo $product['pro_images']; ?>?h=232&amp;la=en&amp;w=407&amp;hash=070E26DBDF1513107FAB070AAD8051E20E7EEDA5" alt="" width="407" height="232"/>
                            </div>
                        </a>
                        <div class="eventDescription">
                            <a href="<?php echo base_url().'san-pham/'.$product['pro_name_rewrite']; ?>"></a>
                            <div class="posts">
                                <a href="events/liveworx-2016.html">
                                    <div class="post featured">
                                        <img src="<?php echo $product['pro_images']; ?>?h=112&amp;la=en&amp;w=112&amp;hash=A3CC6EBC30F949EEC5DDF09834481C4B471B0ADD"
                                             alt="" width="100" height="112"/>
                                        <h4><?php echo (!empty($product['pro_name']) ? $product['pro_name'] : 'Không có tên'); ?></h4>
                                        <p><?php echo (!empty($product['pro_des']) ? $product['pro_name'] : 'Không có mô tả sản phẩm');  ?><br></p>
                                    </div>
                                </a>
                                <a target="_blank" class="btn btn-lg drk-purple btn-primary"
                                   href="<?php echo base_url().'san-pham/'.$product['pro_name_rewrite']; ?>&amp;cmsrc=ptc.com&amp;cid=701F0000000nUMbIAM&amp;elqCampaignId=1912"
                                   title="Chi tiết sản phẩm">Chi tiết
                                    <span aria-hidden="true" class="icon icon-CTA-arrow"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
        </div>
    </div>
    <div class="clearfix visible-xs-block"></div>
    <div class="text-center">
        <div class="col-md-16 col-xs-16 center-text">
            <div id="page-selection" class="pagination">
                <?php echo $this->pagination->create_links(); ?>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var $jq = jQuery.noConflict();
    $jq(function () {

        var pageCount = $jq("#events .eventItems").length;
        $jq("#events .eventItems:eq(0)").show();
        $jq("#page-selection").bootpag({
            total: pageCount,
            page: 1,
            maxVisible: 5,
            leaps: true,
            firstLastUse: true,
            first: '←',
            last: '→',
            wrapClass: 'pagination',
            activeClass: 'active',
            disabledClass: 'disabled',
            nextClass: 'next',
            prevClass: 'prev',
            lastClass: 'last',
            firstClass: 'first'
        }).on("page", function (event, num) {
            $jq("#events .eventItems").hide();
            $jq("#events .eventItems:eq(" + (num - 1) + ")").show();
            $jq("html, body").animate({scrollTop: $jq("#events").position().top}, "slow");
        });
    });
</script>