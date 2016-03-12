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
        <div class="label">Tên slide</div>
        <div>
          <input type="text" value="<?php echo isset($info['slide_title']) && $info['slide_title'] != null ? $info['slide_title'] : '' ?>" size="70" name="slide_title">
          <?php echo form_error('slide_title') ?>    
          <br>
        
        <div class="instruct" style="font-size: 14px;font-weight: bold;margin: 10px 0px;">Hình ảnh</div><br />
        <?php 
          if (isset($info['slide_image']) && $info['slide_image'] != null) {
        ?>
          <img src='<?php echo base_url('uploads/slideshow/thumb/'.$info['slide_image']) ?>' />
        <?php } ?>
        <p style="font-size:14px; color:#F00"><b>Chú ý:</b> Bạn chỉ có thể chọn một ảnh. Chấp nhận các file ảnh: gif, jpg, png</p><br />
        <input type="file" name="slide_image" id="filesToUpload">
        <?php echo form_error('slide_image') ?>    
        <p style="font-size:14px; color:#F00"><b>Chú ý:</b> Bạn có thể chọn nhiều ảnh cùng 1 lúc. Chấp nhận các file ảnh: gif, jpg, png</p><br />
            <p style="font-size:14px; color:#F00">Nên để kích thước ảnh 780 x 150 thì chất lượng ảnh sản phẩm sẽ đẹp </p>
      </div>
      <div class="group-actions">
        <input class="btn btn_submit_bachnx" name="ok" id="ok" type="submit" value="Cập nhật">
      </div>
    </div>
    <br />
  </form>
</div>
