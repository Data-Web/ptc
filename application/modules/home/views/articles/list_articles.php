<?php 
  $roles = $this->session->userdata['roles'];
?>

<div class="paddings">
  <?php if (isset($roles) && $roles['articles']['add']) { ?>
      <div id="action-links">
        <ul>
          <li id="add-prod"><a href="<?php echo base_url()."admin/articles/add" ; ?>">Thêm tin tức</a></li>
        </ul>
      </div>
  <?php } ?>

  <div style="margin-top:14px">
    <select id="bachnx_change" onChange="">
      <option value="0">Chọn danh mục</option>
      <?php
          foreach($list_cago as $value){
            echo "<option class='cago_change' value='".$value['cago_id']."'> - ".$value['cago_name']."</option>";
          }
      ?>
    </select>
    </div>
  <br />

  <div class="code_bachnx">
      <table id="tb_padding" border="1" bordercolor="#CCC" style="border-collapse:collapse;" width="100%">
        <tbody>
          <tr style="background-color:#EEE; font-weight:bold;">
            <td width="40px" style="text-align:center;">STT</td>
            <td width="120px">Ảnh</td>
            <td>Tên bài viết</td>
            <td width="60px">Ngôn ngữ</td>
            <td width="60px" style="text-align:center;">Lần xem</td>
            <td width="150px">Thời gian cập nhật</td>
            <?php if ($roles['articles']['edit'] || $roles['articles']['del']) { ?>
                <td width="100px">Lựa chọn</td>
            <?php } ?>
          </tr>
          <?php
            if(isset($list_news) && $list_news != NULL){
                $stt  = 0;
                foreach($list_news as $value){
                    $stt++;
          ?>
              <tr id="row_<?php echo $value['news_id']; ?>" onMouseOver="this.className='row-hover'" onMouseOut="this.className=''" class="">
                <td style="text-align:center;"><?php echo $stt ?></td>
                <td style="text-align:center;">
                    <?php
                        if($value['news_images'] == NULL){
                            echo "<img style='max-width: 150px;' src='".base_url()."public/admin/images/no-images.jpg' alt='No images' />";
                        }else{
                            echo "<img style='max-width: 150px;' src='".base_url()."uploads/news/thumb/".$value['news_images']."'>";
                        }
                    ?>
                    <!-- <img style="max-width: 150px;" src="<?php echo base_url()."uploads/news/".$value['news_images']; ?>"> -->
                </td>
                <td><a href="<?php echo base_url()."tin-tuc/".$value['news_rewrite']."/".$value['news_id'].".html"; ?>" target="_blank"><b><?php echo $value['news_title']; ?></b></a><br />
                    <?php echo $value['news_info']; ?>
                <br />
                  
                  <!-- <b>Thời gian của bài</b>: 24-02-2014, 5:03 pm --> 
                  <br />
                  <!-- STT: <span id="update_order_251">
                  <input type="text" id="order_251" value="0" size="2" onChange="update_order(251,this.value)">
                  </span> -->
                  </td>
                <td style="text-align: center;">
                    <?php 
                        if ($value['news_lang'] == '1') {
                    ?>
                        <img style='max-width:200px;max-height:150px;margin-right:5px;' src='<?php echo base_url('uploads/lang/flag-vi.png') ?>' />
                    <?php } else { ?>
                        <img style='max-width:200px;max-height:150px;margin-right:5px;' src='<?php echo base_url('uploads/lang/flag-en.png') ?>' />
                    <?php } ?>
                </td>
                <td style="text-align:center;"><?php echo $value['news_view']; ?></td>
                <td> <?php echo $value['news_date']; ?> </td>
                <?php if (isset($roles['articles']) && $roles['articles']['edit']) { ?>
                    <td>
                        <a href="<?php echo base_url()."admin/articles/update/".$value['news_id']."" ; ?>">Sửa lại</a><br />
                        <?php
                            if($value['news_status'] == 1){
                                echo "<a rel='".$value['news_id']."' name='1' class='status_active' href='javascript:void(0);'>Hạ xuống</a>";
                            }else{
                                echo "<a style='background:#FFB800;' rel='".$value['news_id']."' name='0' class='status_active' href='javascript:void(0);'>Cho hiển thị</a>";
                            }
                        ?>
                    </td>
                <?php }
                    if (isset($roles['articles']) && $roles['articles']['del']) {  
                        echo $roles['articles']['edit'] ? '' : '<td>';
                        echo "<a href='javascript:del_news(".$value['news_id'].")'>Xóa bài</a>"; 
                        echo  $roles['articles']['edit'] ? '' : '</td>';
                    }
                ?>
            </tr>
          <?php
            } }else{
                echo "<tr><td colspan='7'>Không có tin tức nào.</td></tr>";
            }
          ?>
        </tbody>
      </table>
  </div>
  <div class="status_cago_active"></div>
  <br />
  <div id="pagination"><?php  echo $this->pagination->create_links();?></div>
  </div>
  
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
                "url"   : "<?php echo base_url()."admin/articles/update_status"; ?>",
                "type"  : "post",
                "data"  : "val="+val+"&rel="+rel+"&type="+type,
                "async" : "false",
                success : function(result_active){
                    //$(".status_cago_active").html(result_active);
                }
            });
        });
        
        //check hot
        $(".hot_active").live("click",function(){
            val = $(this).attr("name");
            rel = $(this).attr("rel");
            type = "bachnx";
            if(val == 1){
                $(this).css("background-color","#FFB800").html("Hạ nổi bật");
                $(this).attr("name","0");
            }else{
                $(this).css("background","none").html("Chọn nổi bật");
                $(this).attr("name","1");
            }
            $.ajax({
                "url"   : "<?php echo base_url()."admin/articles/update_hot"; ?>",
                "type"  : "post",
                "data"  : "val="+val+"&rel="+rel+"&type="+type,
                "async" : "false",
                success : function(result_active){
                    //$(".status_cago_active").html(result_active);
                }
            });
        });
        //Change cago
        $("#bachnx_change").change(function(){
            val = $(this).val();
            type = "bachnx";
            if(val == 0){
                return false;
            }else{
                $.ajax({
                    "url"   : "<?php echo base_url()."admin/articles/change_articles"; ?>",
                    "type"  : "post",
                    "data"  : "val="+val+"&type="+type,
                    "async" : "false",
                    beforeSend: function(){
                        $(".code_bachnx").html("<img src='"+links+"public/admin/images/ajaxLoading.gif' />Đang load dữ liệu, vui lòng chờ...");
                    },
                    success : function(result_change){
                        //alert(result_change);
                        $(".code_bachnx").html(result_change);
                    }
                });
            }
        })
        
    });
        
    
    function del_news(id) {
        if(confirm("Bạn chắc chắn muốn xóa bỏ tin này ?")){
            $.post("<?php echo base_url()."admin/articles/del"; ?>", {action: "del_news", id : id}, function(data) { $("#row_"+id).fadeOut();
            } );
        }
    }
</script>

<style type="text/css">
    #action-links {
        text-align: right;
    }
    select {
        padding: 5px;
    }
</style>