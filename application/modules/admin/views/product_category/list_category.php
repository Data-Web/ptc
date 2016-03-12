<?php 
  $roles = $this->session->userdata['roles'];
?>
<div class="paddings">
    <?php if(isset($roles) && $roles['product_category']['add']) { ?>
      <div id="action-links">
        <form action='' method="get" id="filter_form">
            <select name="language" id="language">
                <option value="">Tất cả ngôn ngữ</option>
                <option value="1" <?php echo isset($_GET['language']) && $_GET['language'] == 1 ? 'selected' : ''; ?>>Tiếng việt</option>
                <option value="2" <?php echo isset($_GET['language']) && $_GET['language'] == 2 ? 'selected' : ''; ?>>Tiếng anh</option>
            </select>
            <input type="text" name="cate_name" value="<?php echo isset($_GET['cate_name']) ? $_GET['cate_name']  : ''; ?>" placeholder="Tên danh mục" />
            <input type="submit" name="filter" value="Tìm kiếm" />
            <input type="reset" onclick="location.href='/admin/product_category'" value="Hủy bỏ" />
        </form>
        <ul>
          <li id="add-prod"><a href="<?php echo base_url()."admin/product_category/add/1" ?>">Thêm mới tiếng việt</a></li>
          <li id="add-prod"><a href="<?php echo base_url()."admin/product_category/add/2" ?>">Thêm mới tiếng anh</a></li>
        </ul>
      </div>
    <?php } ?>
  <style type="text/css">
    .tb-cat-row { width:100%;}
    .tb-cat-row td { padding:1px}
  </style>
  <table id="tb_padding" cellpadding="2" cellspacing="0" width="100%" border="1" bordercolor="#CCCCCC">
    <tbody>
        <tr style="background-color:#EEE; font-weight:bold;">
            <td width="30">STT</td>
            <td width="30">ID</td>
            <td>Tên danh mục</td>
            <td>Người tạo</td>
            <td>Người sửa</td>
            <td width="60px">Ngôn ngữ</td>
            <td width="80px">Hình ảnh</td>
            <td width="60px">Trang chủ</td>
            <?php if(isset($roles) && $roles['product_category']['edit']) { ?>
                <td width="80px">Sắp xếp</td>
                <td width="70px">Trạng thái</td>
                <td width="60px">Sửa</td>
            <?php } ?>
            <?php if(isset($roles) && $roles['product_category']['del']) { ?>
                <td width="50px">Xóa</td>
            <?php } ?>
        </tr>

        <?php
            if ($categories != null):
                $stt = 1;
                foreach($categories as $key=>$val):
        ?>
        <tr>
            <td><?php echo $stt; ?></td>
            <td><?php echo $val['cate_id']; ?></td>
            <td><?php echo $val['cate_name']; ?></td>
            <td><?= $val['usercreate'] ?></td>
            <td><?= $val['userupdate'] ?></td>
            <td align="center">
                <?php if ($val['cate_lang'] == '1'):?>
                    <img style='max-width:200px;max-height:150px;margin-right:5px;' src='<?php echo base_url('uploads/lang/flag-vi.png') ?>' />
                <?php else: ?>
                    <img style='max-width:200px;max-height:150px;margin-right:5px;' src='<?php echo base_url('uploads/lang/flag-en.png') ?>' />
                <?php endif; ?>
            </td>

            <td align="center">
                <?php if ($val['cate_images'] != null): ?>
                    <img style='max-width: 50px;' src='<?php echo base_url('/uploads/product_category/thumb/'. $val['cate_images']) ?>' />
                <?php else: ?>
                    <img style='max-width:50px;' src='<?php echo base_url('/public/admin/images/no-images.jpg') ?>' />
                <?php endif; ?>
            </td>
            <td><?php echo $val['is_home'] == '1' ? 'Có' : 'Không' ; ?></td>
            <?php if(isset($roles) && $roles['product_category']['edit']) : ?>
            <td>
                <span id="change_<?php echo $val['cate_id']; ?>">
                    <input class="change_order" type="text" rel="<?php echo $val['cate_id']; ?>" value="<?php echo $val['cate_order']; ?>" size="2" />
                </span>
            </td>

            <td>
                <?php
                    if($val['cate_status'] == 1){
                        echo "<a rel='".$val['cate_id']."' name='1' class='status_active' href='javascript:void(0);'>Hạ xuống</a>";
                    }else{
                        echo "<a style='background:#FFB800;' rel='".$val['cate_id']."' name='0' class='status_active' href='javascript:void(0);'>Cho hiển thị</a>";
                    }
                ?>
            </td>

            <td><a href="<?php echo base_url()."admin/product_category/update/".$val['cate_id']."/". $val['cate_lang']; ?>">Sửa lại</a></td>
            <?php endif; ?>
            <?php if(isset($roles) && $roles['product_category']['del']): ?>
                <td><a href='<?php echo base_url('admin/product_category/delete/'. $val['cate_id']) ?>' onclick='return confirm("Bạn chắc chắn muốn xóa bỏ danh mục này ?")'>Xóa</a></td>
            <?php endif; ?>
        </tr>
        <?php $stt++; endforeach; else: echo '<tr><td colspan="9"><h3>Không có kết sản phẩm nào</tr></td></h3>'; endif; ?>
            
    </tbody>
  </table>
    <input type="hidden" id="save_open_row" value="," />
    <input type="hidden" id="track_open_row" value="0" />

  <div class="status_cago_active"></div>
  <br />
  <?php if($categories != null): ?>
      <div id="pagination">
        <?php 
          for($i = 1; $i <= $totalPage; $i++) {
            $active = isset($_REQUEST['page']) && $_REQUEST['page'] == $i ? "style='color: red;'" : '';
            echo '<a href="'.base_url(uri_string() . $uri . '&page='. $i).'" '.$active.'> ' . $i . ' </a>';
          }
        ?>
      </div>
    <?php endif; ?>
  <input type="hidden" id="track_open_row" value="0">
</div>


<script type="text/javascript">
    function open_child_row(cls){
        var current_open = $('#save_open_row').val();
        if(current_open.indexOf(','+cls+',') == -1) {
            $("."+cls).css('display', 'table-row');
            $('#save_open_row').val(current_open + cls + ',');
        }else{
            $("."+cls).css('display', 'none');
            $('#save_open_row').val(current_open.replace(','+ cls + ',', ','));
        }
    }

    function open_all_row(){
        var current_status = $("#track_open_row").val();
        if(current_status == '0') {
            $(".expand_all").css('display', 'table-row');
            $("#open_sign").html("[-]");
            $("#track_open_row").val('1');
        }else{
            window.location = '<?php echo base_url();?>admin/product_category';
        }
    }

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
                "url"   : "<?php echo base_url()."admin/product_category/update_status"; ?>",
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
                "url"   : "<?php echo base_url()."admin/product_category/update_order"; ?>",
                "type"  : "post",
                "data"  : "val="+val+"&id="+id+"&type="+type,
                "async" : "false",
                success : function(result_val){
                    $("#change_"+id).html("xong");
                }
            });
        })
    });
</script>

<style type="text/css">
    #action-links {
        text-align: right;
    }

    #filter_form {
        float: left;
    }

    #filter_form select, input[type='submit'], input[type='reset'] {
        padding: 5px;
    }

    #filter_form input[type='text'] {
        padding: 5px;
        width: 250px;  
    }
</style>
