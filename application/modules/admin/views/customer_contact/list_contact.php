<div class="paddings">
  <br />
  <table width="100%" id="tb_padding" border="1" bordercolor="#CCCCCC" style="border-collapse:collapse;">
    <tbody>
      <tr style="background-color:#EEE; font-weight:bold">
        <td width="50" style="text-align:center;">STT</td>
        <td width="150">Thời gian</td>
        <td width="150">Khách hàng</td>
        <td width="552">Nội dung</td>
        <td width="100">Chi nhánh</td>
        <td width="97">Xem chi tiết</td>
        <td width="74">Trạng thái</td>
      </tr>
      <?php
	  	if(isset($list_contact) && $list_contact != NULL){
			$stt = 0;
			foreach($list_contact as $value){
				$stt++;
	  ?>
	      <tr id="row_<?php echo $value['con_id']; ?>" onMouseOver="this.className='row-hover'" onMouseOut="this.className=''" class="">
	        <td style="text-align:center;"><?php echo $stt; ?></td>
	        <td><?php echo $value['con_date']; ?></td>
	        <td><b><?php echo $value['con_name']; ?></b><br />
		           <?php echo $value['con_phone']; ?><br />
		           <?php echo $value['con_email']; ?></td>
	        <td><?php echo $this->string->cut($value['con_full'],380); ?></td>
	        <td><?php echo $value['office_name']; ?></td>
			<td>
			    <a href="<?php echo base_url()."admin/customer_contact/detail/".$value['con_id']."" ?>" title="Xem chi tiết">
			    	<div class="pic icon_xem"></div>
				</a>
			</td>
            <td>
            	<?php
					if($value['con_status'] == 0){
	            		echo "<span style='background-color:#FFCC00'>Chưa đọc</span><br />";
						echo "<a href='javascript:remove_message(".$value['con_id'].")'>Xóa bỏ</a>";
					}else{
						echo "<span>Đã đọc</span><br />";
						echo "<a href='javascript:remove_message(".$value['con_id'].")'>Xóa bỏ</a>";
					}
				?>
		        
             </td>
	      </tr>
      <?php
		} }else{
			echo "<tr><td colspan='6'>Không có liên hệ nào</td></tr>";
		}
	  ?>
    </tbody>
  </table>
  <br />
  
  <div id="pagination"><?php  echo $this->pagination->create_links();?></div>
  
  <script>
	function remove_message(id) {
		if(confirm("Bạn chắc chắn muốn xóa nội dung này ?")){
			$.post("<?php echo base_url()."admin/customer_contact/del"; ?>", {action: "remove_message", id : id}, function(data) { $("#row_"+id).fadeOut();
			} );
		}
	}
</script> 
</div>
