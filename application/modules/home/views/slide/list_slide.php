<?php
  $roles = $this->session->userdata['roles']; 
  if(isset($roles['slide']['view']) && $roles['slide']['view']):
?>
  <div class="paddings">
    <?php if(isset($roles['slide']['add']) && $roles['slide']['add']): ?>
    <div id="action-links">
      <ul>
        <li id="add-prod"><a href="<?php echo base_url()."admin/slide/add" ?>">Thêm slide mới</a></li>
      </ul>
    </div>
    <?php endif; ?>
    <table border="1" bordercolor="#CCCCCC" id="tb_padding" style="width:100%">
      <tbody>
        <tr style="background-color:#EEE; font-weight:bold;">
          <td width="5%" style="text-align:center;">STT</td>
          <td width="10%">Ảnh slide</td>
          <td width="57%">Tên slide</td>
          <?php if(isset($roles['slide']['edit']) && $roles['slide']['edit']): ?>
          <td width="7%">Sắp xếp</td>
          <td width="7%">Trạng thái</td>
          <td width="7%">Sửa</td>
          <?php endif; ?>
          <?php if(isset($roles['slide']['del']) && $roles['slide']['del']): ?>
          <td width="7%">Xóa</td>
          <?php endif; ?>
        </tr>
        <?php
          if (!empty($list)) {
            $stt= 0;
            foreach($list as $value){
            $stt++;
        ?>
        <tr id="row_<?php echo $value['slide_id']; ?>" onMouseOver="this.className='row-hover'" onMouseOut="this.className=''" class="">
          <td style="text-align:center;"><?php echo $stt; ?></td>
          <td align="center">
          <?php
            if($value['slide_image'] == NULL){
              echo "<img style='max-width: 200px;' src='".base_url()."public/admin/images/no-images.jpg' alt='No images' />";
            }else{
              echo "<img style='max-width: 200px;' src='".base_url()."uploads/slideshow/thumb/".$value['slide_image']."'/>";
            }
          ?>
          </td>
          <td><?php echo $value['slide_title']; ?></td>
          <?php if(isset($roles['slide']['edit']) && $roles['slide']['edit']): ?>
          <td>
            <span id="change_<?php echo $value['slide_type']; ?>">
              <input class="change_order" type="text" rel="<?php echo $value['slide_id']; ?>" value="<?php echo $value['slide_type']; ?>" size="2" />
            </span>
          </td>
          <td>
            <?php
              if($value['slide_status'] == 1){
                echo "<a rel='".$value['slide_id']."' name='1' class='status_active' href='javascript:void(0);'>Hạ xuống</a>";
              }else{
                echo "<a style='background:#FFB800;' rel='".$value['slide_id']."' name='0' class='status_active' href='javascript:void(0);'>Cho hiển thị</a>";
              }
            ?>
          </td>
          <td><a href="<?php echo base_url()."admin/slide/update/".$value['slide_id'].""; ?>">Sửa</a></td>
          <?php endif; ?>
          <?php if(isset($roles['slide']['del']) && $roles['slide']['del']): ?>
          <?php echo "<td><a href='javascript:del_slide(".$value['slide_id'].")'>Xóa</a></td>"; ?>
          <?php endif; ?>
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
        type = "bachnx";
        if(val == 1){
          $(this).css("background-color","#FFB800").html("Cho hiển thị");
          $(this).attr("name","0");
        }else{
          $(this).css("background","none").html("Hạ xuống");
          $(this).attr("name","1");
        }
        $.ajax({
          "url" : "<?php echo base_url()."admin/slide/update_status"; ?>",
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
          "url"   : "<?php echo base_url()."admin/slide/update_order"; ?>",
          "type"  : "post",
          "data"  : "val="+val+"&id="+id+"&type="+type,
          "async" : "false",
          success : function(result_val){
            // $("#change_"+id).html("xong");
            //$(".status_cago_active").html(result_val);
          }
        });
      })
      
      });
      
    
    function del_slide(id) {
      if(confirm("Bạn chắc chắn muốn xóa bỏ slide này ?")){
        $.post("<?php echo base_url()."admin/slide/del"; ?>", {action: "del_cate", id : id}, function(data) { $("#row_"+id).fadeOut();
        } );
      }
    }
  </script>
   </div>
<?php else: ?>
  <h2 align='center'>Bạn không đủ quyền truy cập vào chức năng này</h2>
<?php endif;  ?>
