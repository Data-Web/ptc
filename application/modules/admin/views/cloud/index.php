<?php 
  $roles = $this->session->userdata['roles'];
?>

<div id="action-links">
  <ul>
    <li id="add-prod">
      <a href="<?php echo base_url()."admin/cloud/add" ?>">Thêm cloud</a>
    </li>
  </ul>
</div>

<div class="paddings"> 
  <table width="100%" id="tb_padding" border="1" 
         bordercolor="#CCCCCC" style="border-collapse:collapse;">
    <tbody>
      <tr style="background-color:#DDD; font-weight:bold;">
        <td width="29" style="text-align:center;">STT</td>
        <td width="40">Name</td>
        <td width="50">Link</td>
        <td width="50">User</td>
        <td width="50">Password</td>
        <td width="50">Code</td>
        <td width="45">Sửa</td>
        <td width="45">Xóa</td>
      </tr>
      <?php if ($clouds != null): ?>
        <?php $stt = 1; foreach ($clouds as $cloud): ?>
          <tr>
            <td width="29" style="text-align:center;"><?php echo $stt; $stt++; ?></td>
            <td width="40"><?php echo $cloud['label1'] ?></td>
            <td width="50"><?php echo $cloud['label2'] ?></td>
            <td width="50"><?php echo $cloud['label3'] ?></td>
            <td width="50"><?php echo $cloud['label4'] ?></td>
            <td width="50"><?php echo $cloud['label5'] ?></td>
            <td width="45"><a href='/admin/cloud/edit/<?php echo $cloud['id']; ?>'>Sửa</a></td>
            <td width="45"><a href='/admin/cloud/delete/<?php echo $cloud['id']; ?>'>Xóa</a></td>
          </tr>
        <?php endforeach; ?>
      <?php endif;  ?>
    </tbody>
  </table>
  <br/>
</div>

<?php $this->load->view('service/style'); ?>
<?php $this->load->view('service/script'); ?>
