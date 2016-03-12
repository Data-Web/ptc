<div class="paddings">
  <form action="" method="post" enctype="multipart/form-data">
    <style>
  .set_orange { background-color:#FF3}
    </style>
    <div class="group">
      <div class="group-fields">
        <div class="error_red" style="color:red;"><?php if(isset($error)) { echo "<p>".$error."</p>"; } ?></div>
        <dl>
          <dt class="top">
            <label for="custom_collection_title">Địa chỉ email</label>
          </dt>
          <dd>
            <input type="email" size="60" name="user_email" value="<?php echo isset($user['user_email']) ? $user['user_email'] : set_value('user_email'); ?>" />
            <?php echo form_error('user_email') ?>    
          </dd>
          <dt class="top">
            <label for="custom_collection_title">Họ và tên</label>
          </dt>
          <dd>
            <input type="text" size="60" name="user_fullname" value="<?php echo isset($user['user_fullname']) ? $user['user_fullname'] : set_value('user_fullname'); ?>" />
            <?php echo form_error('user_fullname') ?>    
          </dd>
          <dt class="top">
            <label for="custom_collection_title">Giới tính</label>
          </dt>
          <dd>
            <select name="user_gender">
              <option value="1" <?= isset($user['user_gender']) && $user['user_gender'] == 1 ? 'selected' : '';  ?>>-- Nam --</option>
                <option value="2" <?= isset($user['user_gender']) && $user['user_gender'] == 2 ? 'selected' : '';  ?>>-- Nữ --</option>
            </select>
          </dd>
          <dt class="top">
            <label for="custom_collection_title">Số điện thoại</label>
          </dt>
          <dd>
            <input type="text" size="60" name="user_phone" value="<?php echo isset($user['user_phone']) ? $user['user_phone'] : set_value('user_phone'); ?>" />
          </dd>
          <dt class="top">
            <label for="custom_collection_title">Địa chỉ</label>
          </dt>
          <dd>
            <input type="text" size="60" name="user_address" value="<?php echo isset($user['user_address']) ? $user['user_address'] : set_value('user_address'); ?>" />
          </dd>
        </dl>
      </div>
      <!-- .group-fields -->
      <div class="group-actions">
        <input class="btn btn_submit_bachnx" id="submit-collection-btn" name="ok" type="submit" value="Thay đổi">
        <span class='success'><?php echo isset($success) ? $success  : ''; ?></span>
      </div>
      <!-- .group-actions --> 
    </div>
  </form>
</div>
<style type="text/css">
  input, select {
    padding: 5px;
  }
  .success { color:  blue; }
</style>
<script type="text/javascript">
  $(document).ready(function() {
    $('#user_role').select2();
  });
</script>
