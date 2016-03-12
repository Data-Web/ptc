<?php 
  $roles = $this->session->userdata['roles'];
?>

<?php if(isset($roles['recruitment']['add']) && $roles['recruitment']['add']): ?>
  <div id="action-links">
    <ul>
      <li id="add-prod">
        <a href="<?php echo base_url()."admin/recruitment/add" ?>">Thêm bài viết mới</a>
      </li>
    </ul>
  </div>
<?php endif; ?>

<?php $this->load->view('service/filter'); ?>

<div class="paddings"> 
  <table width="100%" id="tb_padding" border="1" 
         bordercolor="#CCCCCC" style="border-collapse:collapse;">
    <tbody>
      <tr style="background-color:#DDD; font-weight:bold;">
        <td width="29" style="text-align:center;">STT</td>
        <td width="50" style="text-align:center;">Ảnh đại diện</td>
        <td width="515">Tên bài viết</td>
        <td>Người tạo</td>
        <td>Người sửa</td>
        <td width="50">Ngôn ngữ</td>
        <td width="50">Trạng thái</td>
        <td width="100">Ngày đăng</td>
        <?php if(isset($roles['recruitment']['edit']) && $roles['recruitment']['edit']): ?>
          <td width="45">Sửa</td>
        <?php endif; ?>

        <?php if(isset($roles['recruitment']['del']) && $roles['recruitment']['del']): ?>
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
            <td style="text-align: center;">
              <?php echo $post['language'] == 1 ? '<img src="/uploads/lang/flag-vi.png" />' : '<img src="/uploads/lang/flag-en.png" />'; ?>
            </td>
            <td><?php echo $post['status'] == 1 ? "Hiển thị" : "Không hiển thị"; ?></td>
            <td><?php echo $post['created_at'] ?></td>
            <?php if(isset($roles['recruitment']['edit']) && $roles['recruitment']['edit']): ?>
              <td><a href='/admin/recruitment/edit/<?php echo $post['id']; ?>'>Sửa</a></td>
            <?php endif; ?>

            <?php if(isset($roles['recruitment']['del']) && $roles['recruitment']['del']): ?>
              <td><a href='/admin/recruitment/delete/<?php echo $post['id']; ?>'>Xóa</a></td>
            <?php endif; ?>
          </tr>
        <?php $stt++; endforeach; ?>
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
<?php $this->load->view('service/script'); ?>
