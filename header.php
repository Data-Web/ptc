<div class="sidebar_header" style="position: fixed; top: 0px;">
   <div class="container andy-container" style="text-align: right; ">
        <div class="hotline">
          <span><i class="fa fa-phone-square"></i> Hotline : </span><?php echo $configWeb['hotline'] ?>
        </div>

        <div class="cart">
            <i class="fa fa-shopping-cart"></i>
            <a href="<?php echo $lang_page == '1' ? base_url('gio-hang') : base_url('cart') ?>">
              <?php echo $lang_page == '1' ? 'Xem Giỏ Hàng ('.mycart::total().')' : 'View Cart ('.mycart::total().')' ?>
            </a>
        </div>

        <a class="facebook" title="facebook" href="https://www.facebook.com/ThietBiOToTanPhat/?fref=ts" target="_blank">
              <i class="fa fa-facebook"></i>
        </a>
        <a class="vector_icon" title="Google+" href="https://plus.google.com/share?url=<?=urlencode(base_url(uri_string()))?>&title=<?= isset($title) ?  urlencode($title) : ''; ?>" target="_blank">
            <img src="/public/img/google.png" alt="Google+" width="25" />
        </a>
        <a class="youtube" title="youtube" href="https://www.youtube.com/channel/UCGOMCYbqtx3AHsBY5yqi_kg/videos" target="_blank">
          <img src="/public/img/youtube.png" alt="Youtube" style="margin-top: -3px;" />
        </a>
        <a class="rss" title="rss" href="/sitemap.xml" target="_blank">
          <i class="fa fa-rss"></i>
        </a>

        <div class="lang-area">
          <ul>
            <li>
              <a href="<?php echo base_url('setlang/vi'); ?>"><img src="<?php echo base_url();?>public/home/imgs/flag-vi.png" alt="Viet Nam" /></a>
            </li>
            <li>
              <a href="<?php echo base_url('setlang/en'); ?>"><img src="<?php echo base_url();?>public/home/imgs/flag-en.png" alt="English" /></a>
            </li>
          </ul>
        </div>
   </div>
</div>
<div class="header">
  <div class="container andy-container">
    <div class="row row-header">
      <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4 full-xs logo-area">
        <a href="/" style="border: none;">
          <img class="img-responsive" src="<?php echo base_url($configWeb['logo'])?>" alt="Logo" />
        </a>
      </div>
      <div class="col-lg-5 col-md-3 col-sm-9 col-xs-8 full-xs search-area">
        <form role="search" class="search-form" method="get" id="search-form" action="<?php echo $lang_page == '1' ? "/tim-kiem" : "/search" ?>">
          <input class="search-key form-control" type="text" value="" name="s" placeholder="<?php echo $lang_page == '1' ? "Tìm kiếm" : "Search" ?>">
          <input type="submit" class="search-submit" id="searchsubmit" value="">
        </form>
        <div class="branch">
          <?= isset($configWeb['mienbac']) && $configWeb['mienbac'] != null ?
              $configWeb['mienbac'] : 'Đang cập nhật'; ?>
        </div>
      </div>
      <div class="clearfix-smaller-xs"></div>
      <div class="col-md-5 full-xs slide-area">
        <?php
          $this->load->view("slide");
        ?>
      </div>
    </div>
  </div>
</div><!-- end .header -->
<div class="marquee">
  <marquee behavior="scroll">
    <?php echo $configWeb['marquee'] ?>
  </marquee>
</div>
<div class="menu">
  <div class="row">
    <div class="andy-responsive">
      <i class="fa fa-bars"></i>
    </div>
    <ul class="nav-header">
      <li <?php echo isset($activeMenu) && $activeMenu == 'home' ? "class='active'" : '' ?>>
        <a href="/" title="<?php echo $lang_page == '1' ? 'Trang chủ' : 'Home' ?>">
          <?php echo $lang_page == '1' ? 'Trang chủ' : 'Home' ?>
        </a>
      </li>
      <li <?php echo isset($activeMenu) && $activeMenu == 'product' ? "class='active'" : '' ?>>
        <a href="<?php echo $lang_page == '1' ? base_url('san-pham') : base_url('product') ?>" title="<?php echo $lang_page == '1' ? 'Sản phẩm' : 'Product' ?>">
          <?php echo $lang_page == '1' ? 'Sản phẩm' : 'Product' ?>
        </a>
        <?php
          if (!empty($listCategory)) {
        ?>
        <ul class="sub-menu">
          <?php
            foreach ($listCategory as $v) {
              $data['v'] = $v;
              $this->load->view('recur/category', $data);
            }
          ?>
        </ul>
        <?php } ?>
      </li>
      <li <?php echo isset($activeMenu) && $activeMenu == 'news' ? "class='active'" : '' ?>>
        <a title="<?php echo $lang_page == '1' ? 'Tin tức' : 'News' ?>" href="<?php echo $lang_page == '1' ? base_url('tin-tuc') : base_url('news') ?>">
          <?php echo $lang_page == '1' ? 'Tin tức' : 'News' ?>
        </a>
      </li>
      <li <?php echo isset($activeMenu) && $activeMenu == 'service' ? "class='active'" : ''; ?>>
        <a href="<?php echo $lang_page == '1' ? base_url('dich-vu') : base_url('service') ?>" title="<?php echo $lang_page == '1' ? 'Dịch vụ' : 'Service' ?>">
          <?php echo $lang_page == '1' ? 'Dịch vụ' : 'Service' ?>
        </a>
      </li>

      <li <?php echo isset($activeMenu) && $activeMenu == 'recruit' ? "class='active'" : '' ?>>
        <a href="<?php echo $lang_page == '1' ? base_url('tuyen-dung') : base_url('recruit') ?>">
          <?php echo $lang_page == '1' ? 'Tuyển dụng' : 'Recruit' ?>
        </a>
      </li>

      <li <?php echo isset($activeMenu) && $activeMenu == 'customer' ? "class='active'" : '' ?>>
        <a href="<?php echo $lang_page == '1' ? base_url('khach-hang') : base_url('customer') ?>">
          <?php echo $lang_page == '1' ? 'Khách hàng' : 'Customer' ?>
        </a>
        <?php
          if (!empty($listCategory)) {
        ?>
        <ul class="sub-menu">
          <?php
            foreach ($listCategory as $v) {
              $data['v'] = $v;
              $this->load->view('recur/cate_customer', $data);
            }
          ?>
        </ul>
        <?php } ?>
      </li>
      <li <?php echo isset($activeMenu) && $activeMenu == 'introduce' ? "class='active'" : '' ?>>
        <a title="<?php echo $lang_page == '1' ? 'Giới thiệu' : 'Introduce' ?>" href="<?php echo $lang_page == '1' ? base_url('gioi-thieu') : base_url('introduce') ?>">
          <?php echo $lang_page == '1' ? 'Giới thiệu' : 'Introduce' ?>
        </a>
        <?php
          if (!empty($listIntroduceMenu)) {
        ?>
        <ul class="sub-menu">
          <?php
            foreach ($listIntroduceMenu as $v) {
          ?>
          <li>
            <a href="<?php echo $lang_page == '1' ? base_url('gioi-thieu/'.$v['url_rewrite'].'-'.$v['id']) : base_url('introduce/'.$v['url_rewrite'].'-'.$v['id']) ?>" title="<?php echo $v['title'] ?>">
              <?php echo $v['title'] ?>
            </a>
          </li>
          <?php } ?>
        </ul>
        <?php } ?>
      </li>
      <li <?php echo isset($activeMenu) && $activeMenu == 'contact' ? "class='active'" : '' ?>>
        <a href="<?php echo $lang_page == '1' ? base_url('lien-he') : base_url('contact') ?>">
          <?php echo $lang_page == '1' ? 'Liên hệ' : 'Contact' ?>
        </a>
      </li>
    </ul>
  </div>
</div>
<div class='right-share'>
   <a class="facebook" title="Facebook" href="https://www.facebook.com/sharer.php?u=<?=urlencode(base_url(uri_string()))?>&title=<?= isset($title) ? urlencode($title) : ''; ?>" target="_blank">
       <i class="fa fa-facebook"></i>
   </a>
   <a class="twitter" title="Twitter" href="https://twitter.com/intent/tweet?url=<?=urlencode(base_url(uri_string()))?>&title=<?= isset($title) ?  urlencode($title) : ''; ?>" target="_blank">
       <i class="fa fa-twitter"></i>
   </a>
   <a class="twitter" title="Google" href="https://plus.google.com/share?url=<?=urlencode(base_url(uri_string()))?>&title=<?= isset($title) ?  urlencode($title) : ''; ?>" target="_blank">
       <img src="/public/img/google.png" alt="Google+" />
   </a>
</div>

<style type="text/css">
    div.branch {
      line-height: 25px;
      margin-top: -5px;
      padding-left: 10px;
    }
</style>
