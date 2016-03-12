<div class="paddings">
<div class="paddings">
  <div class="spacer"></div>
  <form method="post" action="" name="account_form" enctype="multipart/form-data"> 
    <div class="group">
    <div style="text-align:center;color:#f00;"><?php if(isset($error)) { echo "<p>".$error."</p>"; } ?></div>
    
      <div class="group-fields">   
        <div class="label">Ngôn ngữ</div>
        <div>
          <select name="language">
            <option value="1" <?php echo isset($info['language']) && $info['language'] == 1 ? "selected" : ""; ?> >Tiếng việt</option>
            <option value="2" <?php echo isset($info['language']) && $info['language'] == 2 ? "selected" : ""; ?>>Tiếng anh</option>
          </select>
          <?php echo form_error('language') ?>    
          <br>
        </div>
        <br>
        <div class="label">Tên chi nhánh</div>
        <div>
          <input type="text" value="<?php echo isset($info['office_name']) && $info['office_name'] != null ? $info['office_name'] : '' ?>" size="70" name="office_name">
          <?php echo form_error('office_name') ?>    
          <br>
        </div>
        <br>
        <div class="label">Thông tin chi nhánh</div>
        <div>
          <?php 
              $value = isset($info['office_address']) && $info['office_address'] != null ? $info['office_address'] : $this->input->post('office_address');
              $fck = new FCKeditor('office_address');
              $fck->BasePath = sBASEPATH;
              $fck->Value = $value;
              $fck->Width  = '100%';
              $fck->Height = 250;
              $fck->ToolbarSet = 'Basic';
              $fck->Create();
          ?>
          <?php echo form_error('office_address') ?>    
          <br>
        </div>
      <div class="group-actions">
        <input class="btn btn_submit_bachnx" name="ok" id="ok" type="submit" value="Lưu lại">
      </div>
    </div>
    <br />
  </form>
</div>
<style type="text/css">
  #post_product_box {
    width:960px; margin:auto;
  }
  input{
    padding: 5px;
  }
  select {
    padding: 5px;
  }
</style>