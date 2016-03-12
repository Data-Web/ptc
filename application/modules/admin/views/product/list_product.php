<?php 
  $roles = $this->session->userdata['roles'];
?>
<div class="paddings">
  <?php if(isset($roles) && $roles['product']['add']) { ?>
    <div id="action-links">
      <ul>
        <li id="add-prod"><a href="<?php echo base_url()."admin/product/add?lang=1" ; ?>">Thêm sản phẩm mới (tiếng việt)</a></li>
        <li id="add-prod"><a href="<?php echo base_url()."admin/product/add?lang=2" ; ?>">Thêm sản phẩm mới (tiếng anh)</a></li>
      </ul>
    </div>
  <?php } ?>
  <div style="color:red;"></div>
  <form action="" method="get" id="form_filter">
        <table id="tb-list">
          <tbody>
            <tr>
              <td style="float: left;">
              <div>
            <select class="filter" name="cate">
              <option value="">Tất cả danh mục</option>
              <?php 
                if(isset($list_cate) && $list_cate != null): 
                  foreach ($list_cate as $key => $value):
              ?>
                <option value="<?php echo $value['cate_id'] ?>" <?php echo isset($_GET['cate']) && $_GET['cate'] == $value['cate_id'] ? "selected" : ""; ?>><?php echo $value['cate_name']; ?></option>
              <?php endforeach; endif; ?>
            </select>
            </div>

            </td>
            <td style="float: left;">
              <select class="filter" name="language">
                <option value="">Tất cả ngôn ngữ</option>
                <option value="1" <?php echo isset($_GET['language']) && $_GET['language'] == 1 ? 'selected' : ''; ?>>Tiếng Việt</option>
                <option value="2" <?php echo isset($_GET['language']) && $_GET['language'] == 2 ? 'selected' : ''; ?>>Tiếng Anh</option>
              </select>   
            </td>
            <?php 
              if (!empty($listhsx)) {
            ?>
            <td style="float: left;">
              <select class="filter" name="hangsanxuat">
                <option value="">Tất cả hãng sản xuất</option>
                <?php 
                  foreach($listhsx as $v) {
                ?>
                  <option value="<?php echo $v['hangsanxuat_id'] ?>" <?php echo isset($_GET['hangsanxuat']) && $_GET['hangsanxuat'] == $v['hangsanxuat_id'] ? 'selected' : ''; ?>><?php echo $v['hangsanxuat_name'] ?></option>
                <?php } ?>
              </select>   
            </td>
            <?php } ?>
            <td style="float: left;">
              <select class="filter" name="hot">
                <option value="">Chọn sản phẩm HOT</option>
                <option value="1" <?php echo isset($_GET['language']) && $_GET['language'] == 1 ? 'selected' : ''; ?>>Sản phẩm HOT</option>
              </select>   
            </td>
            <td style="float: left;">
              <input type="text" name="pro_name" id="pro_name" size="45" value="<?php echo isset($_GET['pro_name']) ? $_GET['pro_name'] : ''; ?>" />
            </td>
            <td style="float: left;">
              <input type="submit" value="Tìm kiếm" />
              <input type="reset" onclick="location.href='/admin/product'" value="Hủy bỏ" />
            </td>
            </tr>
          </tbody>
      </table>
    </form>
  <br />
  <table cellspacing="0" id="tb-list" border="1" bordercolor="#CCCCCC">
    <tbody>
      <tr bgcolor="#EEEEEE" style="font-weight:bold;">
        <td style="text-align:center;">Ngôn ngữ</td>
        <td>Ảnh</td>
        <td>Sản phẩm</td>
        <td>Người tạo</td>
        <td>Người sửa</td>
        <td>Ngày (thêm/sửa)</td>
        <td>Thông tin bán hàng</td>
        <td>Thông tin khác</td>
        <?php if(isset($roles) && $roles['product']['edit']) { ?>
          <td>Cập nhật</td>
        <?php } ?>
        <td>Công cụ</td>
      </tr>
      <?php
      if (isset($list_pro) && $list_pro != NULL) {
      $stt= 0;
      foreach($list_pro as $value){
        $stt++;
      ?>
      <tr id="row_<?php echo $value['pro_id']; ?>" onMouseOver="this.className='row-hover'" onMouseOut="this.className=''" class="">
        <td style="text-align:center;">
          <?php 
            if ($value['pro_lang'] == '1') {
          ?>
            <img style='max-width:200px;max-height:150px;margin-right:5px;' src='<?php echo base_url('uploads/lang/flag-vi.png') ?>' />
          <?php } else { ?>
            <img style='max-width:200px;max-height:150px;margin-right:5px;' src='<?php echo base_url('uploads/lang/flag-en.png') ?>' />
          <?php } ?>
        </td>
        <td align="center">
    <?php
    @$images = unserialize($value['pro_images']);
        if($value['pro_images'] == NULL){
          echo "<img style='max-width: 70px;' src='".base_url()."public/admin/images/no-images.jpg' alt='No images' />";
        }else{
          echo "<img style='max-width: 80px;' src='".base_url()."uploads/products/thumb/".$images[0]."'/>";
        }
        ?>
        <br />
        </td>
        <td>
          <b style='font-size: 16px;'><?php echo $value['pro_name']; ?></b> <br />
          Danh mục  : <b><?php echo $value['cate_name']; ?></b>
          <!-- <b><?php echo $value['cate_name']; ?></b> (<a href="<?php echo base_url()."admin/product/update/".$value['pro_id']."" ; ?>" class="pop-up-small cboxElement">Thay đổi </a>) </span> -->
          <br />
          Hãng sản xuất: <b><?php echo $value['hangsanxuat_name']; ?></b>
          <br/>
          Cập nhật: <?php echo $value['pro_date']; ?><br />
        </td>
        <td><?= $value['usercreate'] ?></td>
        <td><?= $value['userupdate'] ?></td>
        <td> 
          <?php 
            echo '<b>Thêm ngày</b><br/>'. $value['created_at'];
            echo '<br/>';
            echo '<b>Sửa ngày</b><br/>'. $value['updated_at']; 
          ?>
        </td>
        <td> - Giá web : <b style="color:red;"><?php echo @number_format($value['pro_price']); ?></b> vnd 
          <br />
          - SL tổng : <span class="stock-level-critical"><?php echo $value['pro_qty']; ?></span><br /></td>
        <td id="">
          - Giá : <b><?php echo @number_format($value['pro_market']); ?> vnđ</b> <br />
          - Bảo hành : <?php echo $value['pro_war']; ?> <br />
          <div id="button_<?php echo $value['pro_id']; ?>"></div>
        </td>
        <?php if(isset($roles) && $roles['product']['edit']) { ?>
        <td>
          <div id="hot_info_<?php echo $value['pro_id']; ?>">
            <input type="checkbox" id="pro_hot_<?php echo $value['pro_id']; ?>" value="hot" <?php if($value['pro_hot'] == 1){ echo "checked='checked'"; } ?> />
            <?php if($value['pro_hot'] == 1){ echo "<span style='background:#FFB800;'> HOT</span>"; }else{echo "<span style='background:none;'> HOT</span>";} ?>
            <br />
            <span id="hot_button_<?php echo $value['pro_id']; ?>">
            <input type="button" value="Cập nhật" class="update-bt-all" onClick="update_product_hot(<?php echo $value['pro_id']; ?>)" />
            </span></div></td>
        <?php } ?>
        <td>
          <div id="del_wait_<?php echo $value['pro_id']; ?>"> 
            <?php if(isset($roles) && $roles['product']['edit']) { ?>
                <a href="<?php echo base_url()."admin/product/update/".$value['pro_id']."" ; ?>" class="pop-up cboxElement">
                  Sửa lại
                </a>
              <br />
            <?php } ?>

            <a href="<?php echo base_url()."".$value['pro_name_rewrite']."/p".$value['pro_id'].".html"; ?>" target="_blank">Xem tại web</a><br />
            
            <span id="status_<?php echo $value['pro_id']; ?>"></span> 
            
            <?php
              if(isset($roles) && $roles['product']['edit']) {
                if($value['pro_status'] == 1){
                  echo "<a rel='".$value['pro_id']."' name='1' class='status_active' href='javascript:void(0);'>Hạ xuống</a>";
                }else{
                  echo "<a style='background:#FFB800;' rel='".$value['pro_id']."' name='0' class='status_active' href='javascript:void(0);'>Cho hiển thị</a>";
                }
              }
            ?>
            <br />
            <?php if(isset($roles) && $roles['product']['del']) { ?>
              <a href="javascript:;" onClick="delete_product(<?php echo $value['pro_id']; ?>)">Xóa sản phẩm</a><br />
            <?php } ?>
            <?php if(isset($roles) && $roles['product']['edit']) { ?>
              <span id="update_ordering_<?php echo $value['pro_id']; ?>">STT :
              <input class="change_order" type="text" rel="<?php echo $value['pro_id']; ?>" value="<?php echo $value['pro_order']; ?>" size="2" />
              </span> 
            <?php } ?>
            </div>
        </td>
      </tr>
      <?php
      }
    }else{
      echo "<tr><td colspan='8'>Không có sản phẩm nào .</td></tr>";
    }
    ?>
    </tbody>
  </table>
  
  <br />
  <div id="btm-nav" class="act-screen">
    <?php if($list_pro != null): ?>
      <div id="pagination">
        <?php 
          for($i = 1; $i <= $totalPage; $i++) {
            $active = isset($_REQUEST['page']) && $_REQUEST['page'] == $i ? "style='color: red;'" : '';
            echo '<a href="'.base_url(uri_string() . '?' . $uri . '&page='. $i).'" '.$active.'> ' . $i . ' </a>';
          }
        ?>
      </div>
    <?php endif; ?>
  </div>

  <script type="text/javascript">
    $(document).ready(function(e) 
    {
      $(".status_active").live("click",function() {
        
      val = $(this).attr("name");
      rel = $(this).attr("rel");
      type = "bachnx";
      if (val == 1) {
        $(this).css("background-color","#FFB800").html("Cho hiển thị");
        $(this).attr("name","0");
      } else {
        $(this).css("background","none").html("Hạ xuống");
        $(this).attr("name","1");
      }

      $.ajax({
        "url" : "<?php echo base_url()."admin/product/update_status"; ?>",
        "type"  : "post",
        "data"  : "val="+val+"&rel="+rel+"&type="+type,
        "async" : "false",
        success : function(result_active){
          $(".status_cago_active").html(result_active);
        }
      });
    });
    
    //Change
    $(".change_order").change(function(){
      val = $(this).val();
      id = $(this).attr("rel");
      type = "bachnx";
      $.ajax({
        "url"   : "<?php echo base_url()."admin/product/update_order"; ?>",
        "type"  : "post",
        "data"  : "val="+val+"&id="+id+"&type="+type,
        "async" : "false",
        success : function(result_val){
          $("#update_ordering_"+id).html("xong");
        }
      });
    })
    
  });
  
  /*update*/
  function update_product_hot(pro_id){
    var pro_hot = "";
    if(document.getElementById('pro_hot_'+pro_id).checked){
      pro_hot = '1';
    }
    
    $("#hot_button_"+pro_id).html("... vui lòng đợi");
    $.post("<?php echo base_url()."admin/product/update_all"; ?>",{action:"update-pro-hot", pro_hot : pro_hot, pro_id:pro_id },function(data){ $("#hot_button_"+pro_id).html("xong");});
  }
  
  function delete_product(pro_id){
    $("#row_"+pro_id).attr('class', 'row-hover');
    if(confirm("Bạn chắc chắn muốn xóa sản phẩm")){
      $("#del_wait_"+pro_id).html("<img class='pro_refresh' src='"+links+"public/admin/images/refresh.gif' /> đang xóa...");
      $.post("<?php echo base_url()."admin/product/del"; ?>"
           ,{action:"delete-product",pro_id:pro_id}
           ,function(data){$("#row_"+pro_id).fadeOut();
           //alert(data);
      });
    }else{
      $("#row_"+pro_id).attr('class', '');  
    }
  }
</script> 

</div>

<style type="text/css">
  select, input#pro_name, input[type='submit'], input[type='reset'] {
    padding: 5px;
  }
  #action-links {
    text-align: right;
  }
</style>
