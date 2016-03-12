<div class="paddings">
  <div id="action-links">
    <ul>
        <li id="add-prod"><a href="<?php echo base_url()."admin/role/add" ?>">Thêm quyền mới</a></li>
    </ul>
  </div>
  <table border="1" bordercolor="#CCCCCC" id="tb_padding" style="width:100%">
    <tbody>
        <tr style="background-color:#EEE; font-weight:bold;">
            <td width="1%" style="text-align:center;">STT</td>
            <td width="20%">Tên quyền</td>
            <td width="2%">Sửa</td>
            <td width="2%">Xóa</td>
        </tr>
      <?php if(isset($roles) && $roles != null ) { $stt = 1; ?>
        <?php foreach ($roles as $role) { ?>
        <tr>
            <td style="text-align:center;"><?php echo $stt; ?></td>
            <td width="15%"><?php echo $role['label']; ?></td>
            <td><a href="<?php echo base_url()."admin/role/update/".$role['id'].""; ?>">Sửa</a></td>
            <td><a href="<?php echo base_url()."admin/role/delete/".$role['id'].""; ?>">Xóa</a></td>
        </tr>
        <?php $stt++; }} else {
            echo "<tr><td colspan='4'>Chưa có dữ liệu</td></tr>";
        }
      ?>
    </tbody>
  </table>
</div>
