<div class="paddings">
  <div id="action-links">
    <ul>
      <li id="add-prod"><a href="<?php echo base_url()."admin/hangsanxuat/add" ?>">Thêm hãng sản xuất</a></li>
      <!-- <li id="add-prod"><a href="/admin/?opt=admin&amp;view=admin-log-product">Theo dõi tạo sản phẩm</a></li> -->
    </ul>
  </div>
  <table border="1" bordercolor="#CCCCCC" id="tb_padding" style="width:100%">
    <tbody>
      <tr style="background-color:#EEE; font-weight:bold;">
        <td width="5%" style="text-align:center;">STT</td>
        <td width="67%">Tên hãng sản xuất</td>
        <td width="7%">Sắp xếp</td>
        <td width="5%" style="text-align: center;">Ngôn ngữ</td>
        <td width="7%">Trạng thái</td>
        <td width="7%">Sửa</td>
        <td width="7%">Xóa</td>
      </tr>
      <?php
        if (!empty($list)) {
          $stt= 0;
          foreach($list as $value){
          $stt++;
      ?>
      <tr id="row_<?php echo $value['hangsanxuat_id']; ?>" onMouseOver="this.className='row-hover'" onMouseOut="this.className=''" class="">
        <td style="text-align:center;"><?php echo $stt; ?></td>
        <td><?php echo $value['hangsanxuat_name']; ?></td>
        <td style="text-align: center;">
              <?php echo $value['language'] == 1 ? '<img src="/uploads/lang/flag-vi.png" />' : '<img src="/uploads/lang/flag-en.png" />'; ?>
            </td>
        <td>
          <span id="change_<?php echo $value['hangsanxuat_order']; ?>">
            <input class="change_order" type="text" rel="<?php echo $value['hangsanxuat_id']; ?>" value="<?php echo $value['hangsanxuat_order']; ?>" size="2" />
          </span>
        </td>
        <td>
          <?php
            if($value['hangsanxuat_status'] == 1){
              echo "<a rel='".$value['hangsanxuat_id']."' name='1' class='status_active' href='javascript:void(0);'>Hạ xuống</a>";
            }else{
              echo "<a style='background:#FFB800;' rel='".$value['hangsanxuat_id']."' name='0' class='status_active' href='javascript:void(0);'>Cho hiển thị</a>";
            }
          ?>
        </td>
        <td><a href="<?php echo base_url()."admin/hangsanxuat/update/".$value['hangsanxuat_id'].""; ?>">Sửa</a></td>
        <?php echo "<td><a href='javascript:del_slide(".$value['hangsanxuat_id'].")'>Xóa</a></td>"; ?>
      </tr>
      <?php } } ?>
    </tbody>
  </table>
  <br />
  <div id="pagination"><?php  echo $this->pagination->create_links();?></div>
  
<script type="text/javascript">
  $(document).ready(function(e) {
    $(".status_active").live("click",function(){
      val = $(this).attr("name");
      rel = $(this).attr("rel");
      type = "chungnd";
      if(val == 1){
        $(this).css("background-color","#FFB800").html("Cho hiển thị");
        $(this).attr("name","0");
      }else{
        $(this).css("background","none").html("Hạ xuống");
        $(this).attr("name","1");
      }
      $.ajax({
        "url" : "<?php echo base_url()."admin/hangsanxuat/update_status"; ?>",
        "type"  : "post",
        "data"  : "val="+val+"&rel="+rel+"&type="+type,
        "async" : "false",
        success : function(result_active){
          //$(".status_cago_active").html(result_active);
        }
      });
    });
    //Change
    $(".change_order").change(function(){
      val = $(this).val();
      id = $(this).attr("rel");
      type = "chungnd";
      $.ajax({
        "url"   : "<?php echo base_url()."admin/hangsanxuat/update_order"; ?>",
        "type"  : "post",
        "data"  : "val="+val+"&id="+id+"&type="+type,
        "async" : "false",
        success : function(result_val){
          $("#change_"+id).html("xong");
          //$(".status_cago_active").html(result_val);
        }
      });
    })
    
    });
    
  
  function del_slide(id) {
    if(confirm("Bạn chắc chắn muốn xóa bỏ hãng sản xuất này ?")){
      $.post("<?php echo base_url()."admin/hangsanxuat/del"; ?>", {action: "del_cate", id : id}, function(data) { $("#row_"+id).fadeOut();
      } );
    }
  }
</script>
  
 </div>
