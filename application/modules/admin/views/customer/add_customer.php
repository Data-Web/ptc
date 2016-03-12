<div class="paddings">
  <form action="<?php echo base_url()."admin/customer/add"; ?>" method="post" enctype="multipart/form-data">
    <style>
	.set_orange { background-color:#FF3}
  	</style>
    <div class="group">
      <div class="group-fields">
      	<div class="error_red" style="color:red;"><?php if(isset($error)) { echo "<p>".$error."</p>"; } ?></div>
        <dl>
          <dt class="top">
            <label for="custom_collection_title">Tên đăng nhập</label>
          </dt>
          <dd>
            <input type="text" size="60" name="cus_name" value="" />
          </dd>
          <dt class="top">
            <label for="custom_collection_title">Mật khẩu</label>
          </dt>
          <dd>
            <input type="password" size="60" name="cus_pass" value="" />
          </dd>
          <dt class="top">
            <label for="custom_collection_title">Họ và tên</label>
          </dt>
          <dd>
            <input type="text" size="60" name="cus_fullname" value="" />
          </dd>
          <dt class="top">
            <label for="custom_collection_title">Giới tính</label>
          </dt>
          <dd>
            <select name="cus_gender">
            	<option value="1">-- Nam --</option>
                <option value="2">-- Nữ --</option>
            </select>
          </dd>
          <dt class="top">
            <label for="custom_collection_title">Số điện thoại</label>
          </dt>
          <dd>
            <input type="text" size="60" name="cus_phone" value="" />
          </dd>
          <dt class="top">
            <label for="custom_collection_title">Email</label>
          </dt>
          <dd>
            <input type="text" size="60" name="cus_email" value="" />
          </dd>
          
          <dt class="top">
            <label for="custom_collection_title">Địa chỉ</label>
          </dt>
          <dd>
            <input type="text" size="60" name="cus_address" value="" />
          </dd>
        </dl>
      </div>
      <!-- .group-fields -->
      <div class="group-actions">
        <input class="btn btn_submit_bachnx" id="submit-collection-btn" name="ok" type="submit" value="Cập nhật">
        hoặc <a href="<?php echo base_url()."admin"; ?>">Hủy bỏ</a> </div>
      <!-- .group-actions --> 
    </div>
  </form>
</div>
