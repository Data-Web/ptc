<?php 
  $roles = $this->session->userdata['roles'];
?>

<?php if(isset($roles['khachhang']['add']) && $roles['khachhang']['add']): ?>
  <div id="action-links" style="padding-top: 5px;">
    <ul>
      <li id="add-prod">
        <a href="<?php echo base_url()."admin/khachhang/add" ?>">Thêm khách hàng</a>
      </li>
    </ul>
  </div>
<?php endif; ?>

<div style="color:red;"></div>
  <form action="" method="get" id="form_filter">
    <table id="tb-list">
      <tbody>
        <tr>
        <td style="float: left;">
          <select name="category" id="category">
            <option value="">Tất cả danh mục</option>
            <?php 
              if (isset($categories) && $categories != null): 
                foreach ($categories as $category): ?>
              <option value="<?php echo $category['cate_id'] ?>" <?php echo isset($_REQUEST['category']) && $_REQUEST['category'] == $category['cate_id'] ? 'selected' : ''; ?>> 
                <?php echo $category['cate_name'] ?> 
              </option>
            <?php endforeach; endif; ?>
          </select>&nbsp; <b>Tổng số khách hàng là <?php echo isset($total) ? $total : 0; ?></b>  
        </td>
        <td style="float: left;">
          <input type="submit" value="Tìm kiếm" />
          <input type="reset" onclick="location.href='/admin/khachhang'" value="Hủy bỏ" />
        </td>
        </tr>
      </tbody>
    </table>
  </form>
  <br />

<div class="paddings"> 
  <table width="100%" id="tb_padding" border="1" 
         bordercolor="#CCCCCC" style="border-collapse:collapse;">
    <tbody>
      <tr style="background-color:#DDD; font-weight:bold;">
        <td width="29" style="text-align:center;">STT</td>
        <td width="50" style="text-align:center;">Logo</td>
        <td width="515">Tên khách hàng</td>
        <td>Người tạo</td>
        <td>Người sửa</td>
        <td width="50">Trạng thái</td>
        <td width="100">Ngày thêm</td>
        <?php if(isset($roles['khachhang']['edit']) && $roles['khachhang']['edit']): ?>
          <td width="45">Sửa</td>
        <?php endif; ?>

        <?php if(isset($roles['khachhang']['del']) && $roles['khachhang']['del']): ?>
          <td width="45">Xóa</td>
        <?php endif; ?>
      </tr>
      <?php if (isset($posts) && $posts != null): ?>
        <?php $stt = 1; foreach ($posts as $post): ?>
          <tr>
            <td style="text-align:center;"><?php echo $stt; ?></td>
            <td style="text-align:center;">
              <?php echo $post['image'] != null ? '<img src="'. $post['image'] .'" style="width: 100px;" />' : '<img src="/public/admin/images/no-images.jpg" style="width: 100px;" />'; ?>
            </td>
            <td><?php echo $post['title']; ?></td>
            <td><?= $post['usercreate'] ?></td>
            <td><?= $post['userupdate'] ?></td>
            <td><?php echo $post['status'] == 1 ? "Hiển thị" : "Không hiển thị"; ?></td>
            <td><?php echo $post['created_at'] ?></td>
            <?php if(isset($roles['khachhang']['edit']) && $roles['khachhang']['edit']): ?>
              <td><a href='/admin/khachhang/edit/<?php echo $post['id']; ?>'>Sửa</a></td>
            <?php endif; ?>

            <?php if(isset($roles['khachhang']['del']) && $roles['khachhang']['del']): ?>
              <td><a href='/admin/khachhang/delete/<?php echo $post['id']; ?>' onclick='return confirm("Bạn có muốn xóa khách hàng không ?")'>Xóa</a></td>
            <?php endif; ?>
          </tr>
        <?php $stt++; endforeach; ?>
      <?php else: ?>
        <tr><td colspan="6"><p>Không có khách hàng nào </p></td></tr>
    <?php endif; ?>
    </tbody>
  </table>
  <br/>
  <div id="btm-nav" class="act-screen" style="text-align: center;">
    <?php if($posts != null ): ?>
      <div id="pagination">
        <?php 
          for($i = 1; $i <= $totalPage; $i++) {
            $active = isset($_REQUEST['page']) && $_REQUEST['page'] == $i ? "style='color: red;'" : '';
            echo '<a href="'.base_url(uri_string() . $uri . '&page='. $i).'" '.$active.'> ' . $i . ' </a>';
          }
        ?>
      </div>
    <?php endif; ?>
  </div>
</div>

<?php $this->load->view('service/style'); ?>
<script type="text/javascript">
  $(document).ready(function() {
        $('#category').change(function() {
            $( "#form-filter" ).submit();
        });
    });
</script>
