<form action="" method="post" enctype="multipart/form-data">
<div class="paddings" style="float: left; width: 100%;">
    <div class="group">
      <div class="group-fields">
        <div class="error_red" style="color:red;"><?php if(isset($error)) { echo "<p>".$error."</p>"; } ?></div>
        <dl class="user_input">
          <dt class="top">
            <label for="custom_collection_title">Tên đăng nhập</label>
          </dt>
          <dd>
            <input type="text" size="60" name="user_name" value="<?php echo isset($user['user_name']) ? $user['user_name'] : set_value('user_name'); ?>" />
            <?php echo form_error('user_name') ?>
          </dd>
          <dt class="top">
            <label for="custom_collection_title">Mật khẩu</label>
          </dt>
          <dd>
            <input type="password" size="60" name="password" value="" />
            <?php echo form_error('password') ?>
          </dd>
          <dt class="top">
            <label for="custom_collection_title">Email</label>
          </dt>
          <dd>
            <input type="email" size="60" name="user_email" value="<?php echo isset($user['user_email']) ? $user['user_email'] : set_value('user_email'); ?>" />
            <?php echo form_error('user_email') ?>    
          </dd>
          <dt class="top">
            <label for="custom_collection_title">Quyền quản trị</label>
          </dt>
          <dd>
            <select name="user_level">
              <option value="">Chọn quyền quản trị</option>
              <?php if(isset($roles) && $roles != null): ?>
                  <?php  foreach ($roles as $role): 
                    if(isset($user) && $user != null) {
                      if($user['user_level'] == $role['id']) {
                        $selected = 'selected';
                      } else {
                        $selected = '';
                      }
                    } else {
                      if($this->input->post('user_level') == $role['id']) {
                        $selected = 'selected';
                      } else {
                        $selected = '';
                      }
                    }
                  ?>
                    <option <?php echo $selected; ?> value="<?php echo $role['id']; ?>"><?php echo $role['label']; ?></option>
                  <?php endforeach; ?>
              <?php endif; ?>
            </select>
            <?php echo form_error('user_level') ?>
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
              <option value="1">-- Nam --</option>
                <option value="2">-- Nữ --</option>
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
          <?php if ($this->session->userdata('supper_admin') == 4):  ?>
            <dt class="top">
              <label for="custom_collection_title">
                Full quyền admin
                <input type="checkbox" size="60" name="user_role" <?php echo isset($user['user_role']) && $user['user_role'] == 4  ? "checked" :""; ?> value="4" />
              </label>
            </dt>
          <?php endif; ?>
        </dl>
      </div> 
    </div>

    <div class="group" id="list_category">
      <div class="label_category">Danh sách danh mục sản phẩm</div>
      <?php if (isset($categories) && $categories != null): ?>
        <?php
          $user_categories = isset($user['categories']) && $user['categories'] != "" ? json_decode($user['categories'], true) : array();
          foreach ($categories as $category): 
            $checked = $user_categories != null && in_array($category['cate_id'], $user_categories) ? 'checked' : '';
        ?>
          <input type="checkbox" name="categories[]" 
            value="<?php echo $category['cate_id'] ?>" <?php echo $checked; ?> />&nbsp;
          <?php echo $category['cate_name']; ?><br/>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  
  <div class="group-actions">
    <input class="btn btn_submit_bachnx" id="submit-collection-btn" name="ok" type="submit" value="Lưu lại">
    hoặc <a href="<?php echo base_url('admin/user') ?>">Hủy bỏ</a> 
  </div>
</div>
<div class="clear"></div>
</form>


<style type="text/css">
  input, select {
    padding: 5px;
  }
  .set_orange { background-color:#FF3}
  .group {
    width: 420px;
    float: left;
    margin-right: 20px;
    padding: 5px;
  }
  .clear, .group-actions {
    clear: left;
  }
  .label_category {
    border: 1px solid #ccc;
    padding: 5px;
    background: orange;
  }
  .group-actions { width: 870px; }
  #list_category {
    height: 513px;
  }
</style>
<script type="text/javascript">
$(document).ready(function() {
  $('#user_role').select2();
});
</script>
