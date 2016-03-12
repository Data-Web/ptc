<ol class="breadcrumb hidden-xs hidden-sm">
    <li><a href="../index.html">Home</a></li>

    <li id="lastChild" class="active">CAD Software Blog</li>
</ol>
<script type="text/javascript">
    // var $jq = jQuery.noConflict();
    // $jq(function () {
    //     var previousUrl = document.referrer;
    //     var currentUrl = document.URL;
    //     if (previousUrl.indexOf("cad-software-blog") > -1 || previousUrl.indexOf("product-lifecycle-report") > -1
    //             || previousUrl.indexOf("integrity-blog") > -1 || previousUrl.indexOf("mathcad-software-blog") > -1) {
    //         if (currentUrl.indexOf("categories") > -1) {
    //             $jq('#lastChild').before('<li><a href="' + previousUrl + '">Blogs</a></li>');
    //         }
    //     }
    // });
</script>


<div class="interiorHeroImageWrapper">
    <div id="interiorHeroImage" class="interiorHeroImage">
        <div class="inner trimHeight"
             style="background-image:url('../_/media/Images/Headers/Blogs/Headers-DESKTOP-COLORGreen.jpg')"
             data-desktop-style="background-image:url('/~/media/Images/Headers/Blogs/Headers-DESKTOP-COLORGreen.ashx')"
             data-mobile-style="background-image:url('/~/media/Images/Headers/Blogs/Headers-MOBILE-COLORGreen.ashx')">
            <div class="oneCol col-md-offset-1">
                <div class="col-md-6 caption col-sm-10 col-xs-12">
                    <h1 class="pad60">Nơi tin tức cập nhật thường xuyên</h1>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="blogEditorsPickWrapper blogsfeaturedlist">
    <div class="container-fluid blogEditorsPickTitle">
        <div class="col-md-12">
            <div class="dropdown">
                <h2 style="margin:auto;margin-top:20px;margin-bottom:20px;">
                    Editor&#39;s Picks
                    <a href="categories/index.html" type="button"
                       class="dropdown-toggle featured-list btn btn-lg drk-purple btn-primary">View all Categories</a>
                </h2>
            </div>
        </div>
    </div>
    <div class="container-fluid blogEditorsPick" id="featuredblogs">
        <div class="blogitems">
        <?php if(isset($listNews) && !empty($listNews)): ?>
            <?php foreach ($listNews as $key => $news): ?>
                <div class="grid-content">
                    <div class="col-md-4 col-sm-12 post">
                        <div class="postImage">
                            <a href="<?php echo base_url().'tin-tuc/'.$news['news_rewrite']; ?>">
                                <img src="<?php echo $news['news_images']; ?>?h=280&amp;la=en&amp;w=600&amp;hash=130AC5808E78680ECFAEEE62752FBC797E588E20"
                                     alt="" width="600" height="280" Style="max-height:200px;min-height:200px"/>
                            </a>
                        </div>
                        <div class="postDescription">
                            <p class="author">
                                <a href="<?php echo base_url().'tin-tuc/'.$news['news_rewrite']; ?>"><?php echo (!empty($news['news_title']) ? $news['news_title'] : 'Không có tên'); ?></a>
                            </p>
                            <br />
                            <br />
                            <p class="date">
                                <?php echo (!empty($news['news_date']) ? $news['news_date'] : 'Không rõ'); ?>
                            </p>
                            <br />
                            <br />
                            <br />
                            <a href="<?php echo base_url().'tin-tuc/'.$news['news_rewrite']; ?>">
                                <span>
                                    <?php echo (!empty($news['news_des']) ? $news['news_des'] : 'Không có mô tả'); ?>
                                </span>
                            </a>
                            <br />
                            <br />
                            <p>
                                <a href="<?php echo base_url().'tin-tuc/'.$news['news_rewrite']; ?>"
                                   class="btn btn-lg drk-purple btn-primary" role="button">
                                    Đọc thêm<span class="icon icon-cta-arrow" aria-hidden="true"></span>
                                </a>
                            </p>
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
