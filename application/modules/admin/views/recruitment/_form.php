<div class="paddings">
  <form method="post" action="" method="post" enctype="multipart/form-data" name="account_form">
    <input type="hidden" name="create_new_record" value="no">

    <table id="tb-list" border="1" bordercolor="#CCCCCC">
      <tbody>
        <tr style="background:none !important;color:inherit">
          <td>Ngôn ngữ</td>
          <td>
            <select name="language">
              <option value="">Chọn ngôn ngữ</option>
              <option value="1" <?php echo isset($post) && $post['language'] == 1 || (isset($_POST['language']) && $_POST['language'] == 1) ? 'selected'  : ''; ?>>Tiếng việt</option>
              <option value="2" <?php echo isset($post) && $post['language'] == 2  || (isset($_POST['language']) && $_POST['language'] == 2) ? 'selected'  : ''; ?>>Tiếng anh</option>
            </select>
            <?php echo form_error('language'); ?>
          </td>
        </tr>
        <tr style="background:none !important;color:inherit">
          <td>Tên bài viết</td>
          <td>
            <input type="text" value="<?php echo isset($post) && $post['title'] ? $post['title']  : $this->input->post('title'); ?>" size="100%" name="title" class="name-title" />
            <?php echo form_error('title'); ?>  
          </td>     
        </tr>
        <tr>
          <td>URL Rewrite</td>
          <td>
            <input type="text" size="100%" name="url_rewrite" class="name-rewrite" value="<?php echo isset($post) && $post['url_rewrite'] ? $post['url_rewrite']  : $this->input->post('url_rewrite'); ?>" />
            <?php echo form_error('url_rewrite'); ?>
          </td>
        </tr>
        <tr>
          <td>Meta Keywords</td>
          <td>
            <textarea class="seo_info meta_desc" name="seo_keyword"><?php echo isset($post) && $post['seo_keyword'] ? $post['seo_keyword']  : $this->input->post('seo_keyword'); ?></textarea>
          </td>
        </tr>
        <tr>
          <td>Meta Description</td>
          <td>
            <textarea class="seo_info meta_desc" name="seo_desc"><?php echo isset($post) && $post['seo_desc'] ? $post['seo_desc']  : $this->input->post('seo_desc'); ?></textarea>
          </td>
        </tr>
        <tr>
          <td>Ảnh đại diện </td>
          <td>
            <input type="file"  name="image" value="" />
            <?php 
              echo isset($post['image']) && $post['image'] != null ? 
                '<img src="'. $post['image'] .'" style="width: 120px" />' : '';
            ?>
            <p style="font-size:14px; color:#F00"><b>Chú ý:</b> Bạn có thể chọn nhiều ảnh cùng 1 lúc. Chấp nhận các file ảnh: gif, jpg, png</p><br />
            <p style="font-size:14px; color:#F00">Nên để kích thước ảnh 250 x 250 thì chất lượng ảnh sản phẩm sẽ đẹp </p>
          </td>
        </tr>
        <tr>
          <td>Hiển thị bài viết</td>
          <td>
              <select name="status">
                <option value="1" <?php echo isset($post) && $post['status'] == 1 || (isset($_POST['status']) && $_POST['status'] == 1) ? 'selected'  : ''; ?>>Có</option>
                <option value="2" <?php echo isset($post) && $post['status'] == 2  || (isset($_POST['status']) && $_POST['status'] == 2) ? 'selected'  : ''; ?>>Không</option>
              </select>
          </td>
        </tr>

        <tr>
          <td>Nội dung mô tả</td>
          <td>
              <textarea style="height: 150px;" class="seo_info" name="desc"><?php echo isset($post) && $post['desc'] ? $post['desc']  : $this->input->post('desc'); ?></textarea>
          </td>
        </tr>
      </tbody>
    </table>
    <br />
    <table width="100%">
      <tbody>
        <tr>
          <td>
            <h4>Nội dung bài viết</h4>
            <?php 
              $content = isset($post) && $post['content'] ? $post['content']  : $this->input->post('content');  
              $fck = new FCKeditor('content');
              $fck->BasePath = sBASEPATH;
              $fck->Value  = $content;
              $fck->Width  = '100%';
              $fck->Height = 500;
              $fck->Create();
            ?>
            <?php echo form_error('content'); ?>
          </td>
        </tr>
      </tbody>
    </table><br/>
    <div align="center">
      <p><input name="ok" type="submit" value="Lưu lại" class="btn_submit_bachnx"></p>
    </div>
  </form>
</div>

<style type="text/css">
  .seo_info{
    width: 100%;
    resize: none;
    height: 50px;
    text-indent: 3px;
  }
  table td{
    padding-left: 3px;
    font-size: 14px;
  }
  select, input {
    padding: 5px;
  }
</style>
