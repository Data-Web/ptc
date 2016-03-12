<div class="paddings">
  <div class="spacer"></div>
  <style type="text/css">
	#post_product_box {width:960px; margin:auto}
</style>
  <div id="action-links">
    <ul>
      <li id="add-prod"><a href="<?php echo base_url()."/admin/product/add"; ?>">Thêm sản phẩm mới form chuẩn</a><!--  (<a href="">form rút gọn</a>) --></li>
      <!-- <li class="csv"><a href="">Tạo sản phẩm tương tự</a></li> -->
      <li class="csv"><a href="<?php echo base_url()."/admin/product"; ?>">Danh sách sản phẩm</a></li>
      <li id="shipping"><a href="<?php echo base_url()."".$get['pro_name_rewrite']."/p".$get['pro_id'].".html"; ?>" style="color:red" target="_blank">Xem sản phẩm tại website</a></li>
    </ul>
  </div>
  <form method="post" enctype="multipart/form-data" name="account_form">
    <div class="group">
    	<div style="text-align:center;color:#f00;"><?php if(isset($error)) { echo "<p>".$error."</p>"; } ?></div>
      <div class="group-fields">
        <div style="margin: 14px 0px;">
          <div class="label">Chọn ngôn ngữ</div>
          <select id="bachnx_change" name="pro_lang" onChange="">
            <option value="1" <?php echo $get['pro_lang'] == '1' ? 'selected' : '' ?>>Tiếng Việt</option>
            <option value="2" <?php echo $get['pro_lang'] == '2' ? 'selected' : '' ?>>Tiếng Anh</option>
          </select>
        </div>
        
        <?php 
          if (!empty($listhsx)) {
        ?>
        <div style="margin: 14px 0px;">
          <div class="label">Chọn hãng sản xuất</div>
          <select id="bachnx_change" name="hangsanxuat_id" onChange="">
            <?php 
              foreach($listhsx as $v) {
            ?>
            <option value="<?php echo $v['hangsanxuat_id'] ?>" <?php echo $v['hangsanxuat_id'] == $get['hangsanxuat_id'] ? 'selected' : '' ?>><?php echo $v['hangsanxuat_name'] ?></option>
            <?php } ?>
          </select>
        </div>
        <?php } ?>

      <div style="margin: 14px 0px;">
	    <div class="label">Danh mục</div>
	    <select id="bachnx_change" name="cate_id" onChange="">
	      <option value="0">Chọn danh mục</option>
	      <?php 
			if(isset($list_cate['cate']) && $list_cate['cate'] != NULL){
				foreach($list_cate['cate'] as $key => $cate){
					echo "<option value='".$cate['cate_id']."' ";
					if($get['cate_id'] == $cate['cate_id']){
						echo "selected='selected'";
					}
					echo ">".$cate['cate_name']."</option>";
					if(isset($list_cate['sub']) && $list_cate['sub'] != NULL){
						foreach($list_cate['sub'][$key] as $k => $v){
							echo "<option value='".$cate['cate_id'].",".$v['cate_id']."'";
							if($get['cate_id_parent'] == $v['cate_id']){
								echo "selected='selected'";
							}
							echo "> &nbsp; - ".$v['cate_name']."</option>";
						}
					}
				}
			}
			?>
	    </select>
	    </div>
    
        <div class="label">Đặt tên sản phẩm</div>
        <div>
          <input type="text" value="<?php echo $get['pro_name']; ?>" size="70" name="pro_name" id="pro_name">
          <a class="short_tooltip" href="#"><img src="<?php echo base_url() ?>public/admin/images/about.png" width="16" height="16" alt=""><span class="tooltip_classic">Bạn muốn Google tìm ra sản phẩm này hoặc người xem hiểu ngay về sản phẩm ? Hãy viết tên sản phẩm một cách cụ thể, đầy đủ nhất. Thay vì viết <b>Vaio ABC</b>, hãy viết : <b>Máy tính xách tay Sony Vaio ABC, 500GB, 4GB RAM, 2.4GHz, USA, mới 100%</b> Hoặc thay vì viết <b>Áo 123</b>, hãy viết : <b>Áo khoác nam Made In VietNam, màu đen, đủ size, mã 123</b></span></a></div>
        <br />
        <div class="label">URL Rewrite</div>
        <input type="text" value="<?php echo $get['pro_name_rewrite']; ?>" size="70" name="pro_name_rewrite" id="pro_name_rewrite" class="name-rewrite">
        <br>
<!--         <div class="label">Url index</div>
        <div>
          <input type="text" value="<?php echo $get['pro_name_rewrite']; ?>" size="70" name="pro_name_rewrite" id="url_index">
        </div>
        <br />
 -->        
        <div class="label">Thông tin bán sản phẩm</div>
        <table id="tb_padding" border="1" bordercolor="#CCC" style="background-color:#FFF">
          <tbody>
            <tr>
              <td>Giá bán</td>
              <td><input type="text" value="<?php echo $get['pro_price']; ?>" size="20" name="pro_price"> VND (Giá hiển thị trên website)</td>
            </tr>
	        <tr>
              <td>Giá thị trường</td>
              <td><input type="text" value="<?php echo $get['pro_market']; ?>" size="20" name="pro_market">
                VND (để tham khảo nếu cần)</td>
            </tr>
            <tr>
              <td>Số lượng kho hàng</td>
              <td><input type="text" value="<?php echo $get['pro_qty']; ?>" size="10" name="pro_qty">
                <input type="hidden" value="1" name="old_quantity"></td>
            </tr>
            <tr>
              <td>Khuyến mại kèm theo <br />
                (mỗi KM một dòng)</td>
              <td><textarea name="pro_promotion" id="specialOffer" rows="4" cols="50"><?php echo $get['pro_promotion']; ?></textarea></td>
            </tr>
            <tr>
              <td>Thông tin bảo hành</td>
              <td><textarea name="pro_war" id="warranty" rows="4" cols="50"><?php echo $get['pro_war']; ?></textarea></td>
            </tr>
          </tbody>
        </table>
        <br />
        
        <div class="label">Tóm tắt đặc tính chính</div>
        <div>
          <?php 
			$fck = new FCKeditor('pro_info');
			$fck->BasePath = sBASEPATH;
			$fck->Value  = $get['pro_info'];
			$fck->Width  = '100%';
			$fck->Height = 500;
			$fck->Create();
		?>
        </div>
        <br />
        <div class="label">Chi tiết</div>
        <?php 
			$fck = new FCKeditor('pro_full');
			$fck->BasePath = sBASEPATH;
			$fck->Value  = $get['pro_full'];
			$fck->Width  = '100%';
			$fck->Height = 500;
			$fck->Create();
		?>
        <dt>
            <label>Dùng cho SEO</label>
          </dt>
            <table>
              <tbody>
                <tr>
                  <td style="padding-bottom:5px;">Meta Keyword</td>
                  <td style="padding-bottom:5px;">
                    <textarea  name="pro_key" style="width: 780px; resize: none; height: 50px; padding-left: 5px;"  id="pro_key"><?php echo $get['pro_key']; ?></textarea>
                  </td>
                </tr>
                
                <tr>
                  <td>Meta Description</td>
                  <td>
                    <textarea name="pro_des" id="pro_des" style="width: 780px; resize: none;  height: 50px; padding-left: 5px;"><?php echo $get['pro_des']; ?></textarea>
                    <br />
                  </td>
                </tr>
              </tbody>
            </table>
          <br />
        <br />
        <div class="instruct" style="font-size: 14px;font-weight: bold;margin: 10px 0px;">Hình ảnh sản phẩm</div><br />
        <div>
        <?php
		  @$images = unserialize($get['pro_images']);
		  if(isset($images) && $images != NULL){
				foreach($images as $value){
					echo "<img style='max-width:100px;max-height:70px;margin-right:5px;' src='".base_url()."uploads/products/thumb/".$value."' />";
				}
			}
		?>
        </div>
        <p style="font-size:14px; color:#F00;margin-top: 5px;"><b>Chú ý:</b> Bạn có thể chọn nhiều ảnh cùng 1 lúc. Chấp nhận các file ảnh: gif, jpg, png</p><br />
        <input type="file" name="image[]" id="filesToUpload" multiple >
        
      </div>
      <div class="group-actions">
        <input class="btn btn_submit_bachnx" name="ok" id="submit-collection-btn" type="submit" value="Cập nhật &gt;&gt;">
      </div>
    </div>
    <br />
   
  </form>
</div>
