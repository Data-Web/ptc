<div class="paddings">
  <div id="action-links">
  </div>
  <script>
	function update_order_status(order_id){
		var status = $("#status_id").val();
		if(status == '0') {
			alert("Bạn cần chọn 1 trạng thái");
			return false;	
		}
		if(confirm("Bạn đã chắc chắn chưa ?")) {
			$.post("ajax/manage_order.php",{action : 'update-status', order_id: order_id, status_id: status, comment : $("#status_comment").val() }, function(data) { $("#update_status").html("Cập nhật xong"); } );
		}
	}
</script> 
  <br />
  <div style="font-weight:bold; margin-bottom:10px">1. Thời gian: <?php echo $detail['date']; ?></div>
  <br />
  <div style="font-weight:bold; margin-bottom:10px">2. Thông tin người mua</div>
  <div id="user_info_1">
    <table>
      <tbody>
        <tr>
          <td>Họ tên</td>
          <td> : <?php echo $detail['name']; ?></td>
        </tr>
        <tr>
          <td>Email</td>
          <td> : <?php echo $detail['email']; ?></td>
        </tr>
        <tr>
          <td>Địa chỉ</td>
          <td> : <?php echo $detail['local']; ?></td>
        </tr>
        <tr>
          <td>Điện thoại</td>
          <td> : <?php echo $detail['phone']; ?> </td>
        </tr>
      </tbody>
    </table>
  </div>
  <br />
  <div style="font-weight:bold; margin-bottom:10px">3. Thông tin đơn hàng | (Tổng số sản phẩm: <?php echo isset($products) ? count($products) : 0; ?> )</div>
  <table id="tb_padding" width="100%" cellpadding="5" border="1" bordercolor="#CCCCCC">
    <tbody>
      <tr bgcolor="#EEEEEE">
        <td width="9%">STT</td>
        <td width="17%">Ảnh</td>
        <td width="32%">Tên sản phẩm</td>
        <td width="7%">Số lượng</td>
      </tr>
    <?php
		  $stt = 0;
      if (isset($products) && $products != null)
		  foreach($products as $product){
			   $stt++;
	   ?>
      <tr>
        <td><?php echo $stt; ?></td>
        <td><img src="<?php echo $product['image']; ?>" style="width:80px;" /></td>
        <td><?php echo $product['pro_name']; ?></td>
        <td><?php echo $product['pro_qty']; ?></td>
      </tr>
      <?php
	  	}
	  ?>
      
    </tbody>
  </table>
  <br />
</div>
