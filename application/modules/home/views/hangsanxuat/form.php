<div class="paddings">
<div class="paddings">
  <div class="spacer"></div>
  <style type="text/css">
	  #post_product_box {width:960px; margin:auto}
  </style>
  <form method="post" action="" name="account_form" enctype="multipart/form-data"> 
    <div class="group">
    <div style="text-align:center;color:#f00;"><?php if(isset($error)) { echo "<p>".$error."</p>"; } ?></div>
      <div class="group-fields">   
        <div class="label">Ngôn ngữ</div>
        <div>
          <select name="language">
            <option value="1">Tiếng việt</option>
            <option value="2">Tiếng anh</option>
          </select> 
          <br>
        </div>
        <br/>
        <div class="label">Tên hãng sản xuất</div>
        <div>
          <input type="text" value="<?php echo isset($info['hangsanxuat_name']) && $info['hangsanxuat_name'] != null ? $info['hangsanxuat_name'] : '' ?>" size="70" name="hangsanxuat_name">
          <?php echo form_error('hangsanxuat_name') ?>    
          <br>
        </div>
      <div class="group-actions">
        <input class="btn btn_submit_bachnx" name="ok" id="ok" type="submit" value="Cập nhật">
      </div>
    </div>
    <br />
  </form>
</div>
<style type="text/css">
  input, select {
    padding: 5px;
  }
</style>