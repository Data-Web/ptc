<div class="paddings">
<div class="paddings">
  <div class="spacer"></div>
  <style type="text/css">
	  #post_product_box {width:960px; margin:auto}
  </style>
  <form method="post" action="" name="account_form" enctype="multipart/form-data"> 
    <ul id="tabnav">
      <li class="tab-select"><a href="">Cơ bản</a></li>
    </ul>
    <div class="group">
    <div style="text-align:center;color:#f00;"><?php if(isset($error)) { echo "<p>".$error."</p>"; } ?></div>
    
      <div class="group-fields">   
        <div class="label">Link liên kết</div>
        <div>
          <input type="text" value="<?php echo isset($info['link_url']) && $info['link_url'] != null ? $info['link_url'] : '' ?>" size="70" name="link_url">
          <?php echo form_error('link_url') ?>    
          <br>
      </div>
      <div class="group-actions">
        <input class="btn btn_submit_bachnx" name="ok" id="ok" type="submit" value="Cập nhật &gt;&gt;">
      </div>
    </div>
    <br />
  </form>
</div>
