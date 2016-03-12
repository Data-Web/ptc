<div class="paddings">
  <form action="" method="post" enctype="multipart/form-data">
    <div class="group">
      <div class="group-fields">
        <div style="text-align:center;color:#f00;"><?php if(isset($error)) { echo "<p>".$error."</p>"; } ?></div>
        <dl>
          <dd>
            <input type="hidden" name="type" value="article">
          </dd>

          <div style="margin: 14px 0px;">
            <div class="label">Hiển thị ngoài trang chủ</div>
            <?php
              // YES 
              if(isset($category['is_home']) && $category['is_home'] == 0) {
                $selectNo = 'selected';
              } else if($this->input->post('is_home') != null && !$this->input->post('is_home')) {
                $selectNo = 'selected';
              } else {
                $selectNo = '';
              }

              //NO 
              if(isset($category['is_home']) && $category['is_home'] == 1) {
                $selectYes = 'selected';
              } else if($this->input->post('is_home') == 1) {
                $selectYes = 'selected';
              } else {
                $selectYes = '';
              }
              
            ?>
            <select name="is_home">
              <option value="0" <?php echo $selectNo; ?>>Không</option>
              <option value="1" <?php echo $selectYes; ?>>Có</option>
            </select>
          </div>

          <dt class="top">
            <label for="custom_collection_title">Tên danh mục</label>
          </dt>
          <dd>
            <input type="text" size="80" name="cate_name" id="name" value="<?php echo isset($category['cate_name']) ? $category['cate_name'] : $this->input->post('cate_name') ?>" class="name-title">
            <?php echo form_error('cate_name'); ?>
          </dd>

          <dt>
            <label for="custom_collection_title">URL Rewrite</label>
          </dt>
          <dd>
            <input type="text" size="80" name="cate_rewrite" class="name-rewrite" id="cate_rewrite" value="<?php echo isset($category['cate_rewrite']) ? $category['cate_rewrite'] : $this->input->post('cate_rewrite') ?>" />
            <?php echo form_error('cate_rewrite'); ?>
          </dd>
          
          <dt>
            <label>Chọn danh mục</label>
          </dt>
          <dd>
            <?php
              $system = new recursive($categories);
              $result = $system->buildArray();
              $attr   = array('size'=> 15, 'style'=> 'width: 520px');
              $select = createSelect('cate_id_parent', 0, $result, $attr);
              
              if(isset($category) && $category != NULL) {
                $select = createSelect('cate_id_parent',$category['cate_id_parent'], $result, $attr);
              } else {
                $select = createSelect('cate_id_parent', $this->input->post('cate_id_parent'), $result, $attr);   
              }

              echo $select;
            ?>
          </dd>

          <dt>
            <label>Thứ tự xuất hiện</label>
          </dt>
          <dd>
            <input type="text" size="10" name="cate_order" id="cate_order" value="<?php echo isset($category['cate_order']) ? $category['cate_order'] : $this->input->post('cate_order') ?>" />
          </dd>

          <dt style="padding-bottom:5px;">Meta Keyword</dt>
          <dd>
            <textarea name="cate_key" class="cate_info meta_desc"><?php echo isset($category['cate_key']) ? $category['cate_key'] : $this->input->post('cate_key') ?></textarea>
          </td>

          <dt>Meta Description</dt>
          <dt>
            <textarea name="cate_des" id="cate_des" class="cate_info meta_desc"><?php echo isset($category['cate_des']) ? $category['cate_des'] : $this->input->post('cate_des') ?></textarea>
          </dt>

          <dt style='display: none;'>
            <label for="custom_collection_body_html">Thông tin mô tả</label>
          </dt>
          <dd style="margin-bottom: 0; display: none;"> 
            <textarea name="cate_info" class="cate_info meta_desc"><?php echo isset($category['cate_info']) ? $category['cate_info'] : $this->input->post('cate_info') ?></textarea>
          </dd>

          <dt>
            <label for="custom_collection_body_html">Mô tả chi tiết</label>
          </dt>

          <dd style="margin-bottom: 0"> 
          <?php
            $cate_full = isset($category['cate_full']) ? $category['cate_full'] : $this->input->post('cate_full');
            $fck = new FCKeditor('cate_full');
            $fck->BasePath = sBASEPATH;
            $fck->Value  = $cate_full;
            $fck->Width  = '100%';
            $fck->Height = 500;
            $fck->Create();
          ?> 

          </dd>
          <dt>
            <label>Ảnh đại diện</label>
          </dt>
          <dd>
            <input type="file" size="30" name="cate_images">
            <?php echo isset($category['cate_images']) && $category['cate_images'] != null ? 
                      "<img src='/uploads/product_category/thumb/". $category['cate_images'] ."' width='100' />" : "";
            ?>
          </dd>
        </dl>
      </div>

      <div class="group-actions">
        <input class="btn" id="ok" name="ok" type="submit" value="Lưu lại">
        hoặc <a href="">Hủy bỏ</a> </div>
    </div>
  </form>
</div>

<style type="text/css">
  input[type='text'] {
    padding: 5px;
  }
  select {
    padding: 5px;
    width: 80px;
  }

  .cate_info 
  {
    width: 875px;
    resize: none;
    height: 80px;
  }

  select#cate_id_parent option {
    font-size: 13px;
    height: 20px;
    line-height: 20px;
    display: block;
    vertical-align: middle;
  }
</style>
