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
                <label for="custom_collection_title">Tên quyền quản trị</label>
            </dt>
            <dd>
              <input type="text" size="60" name="label" value="<?php echo $role['label'] ?>" />
              <?php echo form_error('label') ?>    
            </dd>
          </dl>
      </div>

      <!-- Start List Roles -->
      <?php require_once('list_roles.php'); ?>
      <!-- End List Roles-->
      
      <!-- .group-fields -->
      <div class="group-actions">
        <input class="btn btn_submit_bachnx" id="submit-collection-btn" name="ok" type="submit" value="Lưu lại">
        hoặc <a href="<?php echo base_url('admin/role'); ?>">Hủy bỏ</a> </div>
      <!-- .group-actions --> 
    </div>
  </form>
</div>

<style type="text/css">
    input[type='text'] {
        padding: 5px;
    }
</style>

<script type="text/javascript">
    $(document).ready(function() {
      $('#user_role').select2();
    });
</script>