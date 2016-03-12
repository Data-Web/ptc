<?php 
  $roles = $this->session->userdata['roles'];
?>

<div class="paddings"> 
  <br />
  <div style="margin-bottom:6px">Tổng số đơn hàng : <b><?php echo $row; ?></b> <!-- - Tổng giá trị : <b>223.731.000 VND</b> --></div>
  <table width="100%" id="tb_padding" border="1" bordercolor="#CCCCCC" style="border-collapse:collapse;">
    <tbody>
      <tr style="background-color:#DDD; font-weight:bold;">
        <td width="29" style="text-align:center;">STT</td>
        <td width="160">Thời gian</td>
        <td width="317">Người mua</td>
        <td width="147">Số điện thoại</td>
        <td width="148">Giá bán</td>
        <td width="176">Email</td>
        <td width="90">Thao tác</td>
      </tr>
      <?php
	  	if(isset($list_order) && $list_order != NULL){
			$stt = 0;
			foreach($list_order as $items){
				$stt++;
	  ?>
      <tr id="row_<?php echo $items['id']; ?>" onmouseover="this.className='row-hover'" onmouseout="this.className=''" class="">
        <td style="text-align:center;"><?php echo $stt; ?></td>
        <td><?php echo $items['date']; ?></td>
        <td><a href="javascript:void(0);"><?php echo $items['name']; ?></a></td>
        <td><?php echo $items['phone']; ?></td>
        <td><b><?php echo @number_format($items['price'])." VNĐ"; ?></b></td>
        <td><a href="javascript:void(0)"><?php echo $items['email']; ?></a></td>
        <td>
          <a href="<?php echo base_url()."admin/order/detail/".$items['id']."" ;?>">xem chi tiết</a>
          &nbsp;
          &nbsp;
          <?php if ($roles['order']['del']) { ?>
            <a href="<?php echo "javascript:del_order('".$items['id']."')"; ?>">Xóa</a>
          <?php } ?>
        </td>
      </tr>
      <?php
			}
		}else{
			echo "<tr><td colspan='7'>Không có đơn hàng nào.</td></tr>";
		}
	  ?>
    </tbody>
  </table>
  <br />
  <div id="pagination"><?php  echo $this->pagination->create_links();?></div>
</div>
<script type="text/javascript">
	function del_order(id) {
		if(confirm("Bạn chắc chắn muốn xóa bỏ danh mục này ?")){
			$.post("<?php echo base_url()."admin/order/del"; ?>", {action: "del_order", id : id}, function(data) { $("#row_"+id).fadeOut();
			} );
		}
	}
</script>
