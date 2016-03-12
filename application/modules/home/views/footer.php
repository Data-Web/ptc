<div class="footer">
  <div class="footer-top" style="margin-top: -20px;">
    <div class="container andy-container">
      <div class="row">
        <?php 
          if (!empty($footerInfo)) {
            foreach($footerInfo as $k => $v) {
        ?>
        <div class="col-md-3 col-sm-6 col-xs-12 full-xs office">
          <h3 style="text-align:center; font-size: 16px; "><?php echo $v['office_name'] ?></h3>
          <div style="font-size: 13px;">
            <?php echo $v['office_address'] ?>
          </div>
        </div>
        <?php 
          if (($k + 1) % 2 == 0) {
        ?>
          <div class="clearfix andy-clear-footer"></div>
        <?php } } } ?>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
  <div class="footer-bottom">
    <div class="container andy-container">
      <div class="row" style="margin-top: 8px;">
        <div class="col-md-3 col-sm-6 col-xs-12 full-xs copy-right">
          Copyright © <?php echo @date('Y') ?> Tân Phát
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 full-xs statistics">
          <ul>
            <li>User Online: <?php echo $userOnline ?></li>
            <li>Total Visitor: <?php echo $userAccess ?></li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 full-xs box-lienket">
          <b>Liên kết:</b>
          <select id="lienket" class="form-control" onchange='if(this.value != "") { window.open(this.value) }'>
            <option value="">--Lựa Chọn--</option>
            <?php
              $listLink = $this->mlink->getAll();
              if (!empty($listLink)) {
                foreach ($listLink as $v) {
            ?>
            <option value="<?php echo $v['link_url'] ?>" ><?php echo $v['link_url'] ?></option>
            <?php } } ?>
          </select>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 full-xs social">
          <ul class="list-inline">
                <div class="social-icon">
                  <a class="facebook" title="facebook" href="http://facebook.com" target="_blank">
                    <i class="fa fa-facebook"></i>
                  </a>
                  <a class="twitter" title="twitter" href="http://twitter.com" target="_blank">
                    <i class="fa fa-twitter"></i>
                  </a>
                  <a class="youtube" title="youtube" href="http://youtube.com" target="_blank">
                    <img src="/public/img/youtube.png" alt="Youtube" style="margin-top: -3px;" />
                  </a>
                  <a class="rss" title="rss" href="sitemap.xml" target="_blank">
                    <i class="fa fa-rss"></i>
                  </a>
                </div>          
              </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<h2 style="display:none;">
  <?php echo $config['config_des']; ?>
</h2>


<style type="text/css">
  .office {
    margin-bottom: 25px;
  }
  .clearfix { display: none; }
</style>
