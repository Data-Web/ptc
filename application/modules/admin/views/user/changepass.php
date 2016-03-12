<div class="paddings">
  <form action="" method="post" enctype="multipart/form-data">
    <div class="group">
      <div class="group-fields">
        <dl>
          <dt class="top">
            <label for="custom_collection_title">Nhập mật khẩu mới</label>
          </dt>
          <dd>
            <input type="password" size="80" name="password" value="" />
            <?php echo form_error('password') ?>
          </dd>
          <dt class="top">
            <label for="custom_collection_title">Xác nhận lại</label>
          </dt>
          <dd>
            <input type="password" size="80" name="repassword" value="" />
            <?php echo form_error('repassword') ?>
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
  .success {
    color: blue;
  }
  .set_orange { background-color:#FF3}
</style>
<script type="text/javascript">
  $(document).ready(function() {
    $('#user_role').select2();
  });
</script>