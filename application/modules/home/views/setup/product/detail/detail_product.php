<link rel="stylesheet" href="<?php echo base_url(); ?>public/styles/magiczoom.css" type="text/css" />
<script type="text/javascript" src="<?php echo base_url(); ?>public/scripts/magiczoom.js"></script> 
<script type="text/javascript">
  MagicZoom.options = {
    'disable-zoom' : false,
    'selectors-change' : 'mouseover',
    'zoom-align' : 'center'
  }
</script> 
<script>
$(document).ready(function(e) {
$("#tab_detail_product .title_tab a").click(function(){
  $("#tab_detail_product .title_tab a").removeClass("current");
  $(this).addClass("current");
  $("#tab_detail_product .content_tab .cf").hide();
  $($(this).attr("href")).show();
  
  return false;
});
  $(".show_lightbox_img a").lightBox(); 
});
</script>
<div class="content_full">
  <?php $this->load->view("column_left"); ?>
  <div class="column_right">
    <div id="location">
    <a href="<?php echo base_url(); ?>" title="Trang chủ">Trang chủ</a> &raquo; <a href=""><?php echo $detail['pro_name']; ?></a></div>
    <div class="clear"></div>
    <div class="box_column_right" style="padding:10px;">
      <div id="detail_product">
        <div class="clear"></div>
        <p>&nbsp;</p>
        <div id="img_product">
          <div id="img_large" style="border: 1px solid #ccc;width: 348px;">
          <?php
			@$images = unserialize($detail['pro_images']);
		  ?>
            <div class='zoomp' style="height:309px; width:317px; display:table-cell; vertical-align:middle;"> 
            <a class="MagicZoom" id="Zoomer" rel="selectors-effect-speed: 600" href="<?php echo base_url()."uploads/products/".$detail['pro_folderimg']."/".$images[0].""; ?>" title="<?php echo $detail['pro_name']; ?>" > 
            <img src="<?php echo base_url()."uploads/products/".$detail['pro_folderimg']."/".$images[0].""; ?>" title="<?php echo $detail['pro_name']; ?>" alt="<?php echo $detail['pro_name']; ?>" /> 
            </a> 
            </div>
          </div>
          <!--img_large-->
          
          <div class="show_lightbox_img"> 
          <a id="view_large" class="bg" href="<?php echo base_url()."uploads/products/".$detail['pro_folderimg']."/".$images[0].""; ?>"></a> 
          	<?php
				if($detail['pro_images'] != NULL){
					foreach($images as $value){
						echo "<a  href='".base_url()."uploads/products/".$detail['pro_folderimg']."/".$value."'></a> ";
					}
				}
			?>
          </div>
          <div id="rate"> </div>
          <!--rate-->
          <div class="clear space2"></div>
          <ul id="img_thumb">
          	<?php
				if($detail['pro_images'] != NULL){
					foreach($images as $img){
						echo "<li> ";
						echo "<a class='img_thumb'  href='".base_url()."uploads/products/".$detail['pro_folderimg']."/".$img."' title='".$detail['pro_name']."' rel='zoom-id:Zoomer;' rev='".base_url()."uploads/products/".$detail['pro_folderimg']."/".$img."'>";
							echo "<img src= '".base_url()."uploads/products/thumb/".$img."' alt='".$detail['pro_name']."' /> ";
						echo "</a> ";
						echo "</li>";
					}
				}
			?>
            
          </ul>
        </div>
        <!--img_product-->
        <div id="overview_product">
          <h1 class="detail_title"><?php echo $detail['pro_name']; ?></h1>
          <p class="detail_des">
          	<?php echo $detail['pro_info']; ?>
          </p>


          <p class="right_pro_pro_code" style="width:323px"><span style="color:black;font-weight:bold">Mã sp:</span><?php if($detail['pro_code'] == NULL){echo " - ";}else{echo $detail['pro_code'].""; } ?></p>
          <p class="warranty"><span style="font-weight:bold;">Bảo hành:</span> <?php if($detail['pro_war'] == NULL){echo " - ";}else{echo $detail['pro_war'].""; } ?></p>
          <p class="promotions"><span style="text-decoration:underline;font-weight:bold;">Khuyến mãi:</span> <?php if($detail['pro_promotion'] == NULL){echo " - ";}else{echo $detail['pro_promotion'].""; } ?></p>
          <p class="status">Trạng thái: <span style="color:#f00;"> <?php if($detail['pro_qty'] == NULL){echo "Hết hàng";}else{echo "Còn hàng";}?></span></p>
          <p class="price">Giá: <span style="color:#f00;font-size:16px;"> <?php if($detail['pro_price'] == NULL){echo "Liên hệ";}else{echo @number_format($detail['pro_price'])." đ"; } ?></span></p>
          <p class="market_price">Giá thị trường: <span style="text-decoration:line-through;color:#666;"> <?php if($detail['pro_market'] == NULL){echo "Liên hệ";}else{echo @number_format($detail['pro_market'])." đ"; } ?> </span></p>
          
          
          <div class="synthesis">
          <form action="<?php echo base_url()."home/cart/addcart/".$detail['pro_id'].""; ?>" method="post">
            <div class="cssOrder" style="float:left;"><span style="font-size:14px">Số lượng</span>
              <select id="s_quantity" name="s_quantity">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
            </div>
            <div class="cssOrder" style="float:right;"> 
            <input style="position:relative;left:17px;top:-5px;border: none;cursor:pointer;" type="submit" value="" class="btn_datmua_to bg" />
            </div>
            </form>
          </div>
          <div class="share_this"> <span class='st_facebook' displayText=''></span> <span class='st_twitter' displayText=''></span> <span class='st_googleplus' displayText=''></span> <span class='st_sharethis' displayText=''></span> 
            <script type="text/javascript">var switchTo5x=true;</script> 
            <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script> 
            <script type="text/javascript">stLight.options({publisher: "a7e862b4-2800-4bf5-9a3a-015522fcf16b", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script> 
          </div>
        </div>
        <!--overview_product-->
        <div class="clear"></div>
      </div>
      <!--detail_product-->
      <div class="clear"></div>
      <div id="tab_detail_product">
        <div class="title_tab">
        <a href="#dacdiem" class="nobdr_l current">Đặc điểm</a>
        <a href="#thongsokythuat" class="">Thông số kỹ thuật</a> 
        <a href="#binhluan" class="">Bình luận</a>
        </div>
        <!--title_tab-->
        <div class="content_tab">
          <div id="dacdiem" class="cf current">
            <?php if($detail['pro_info'] == NULL){echo "Thông tin chưa cập nhật";}else{echo $detail['pro_info'].""; } ?>
          </div>
          <!--dacdiem-->
          <div id="thongsokythuat" class="cf">
            <?php if($detail['pro_full'] == NULL){echo "Thông tin chưa cập nhật";}else{echo $detail['pro_full'].""; } ?>
          </div>
          <!--thongsokythuat-->
          <div id="binhluan" class="cf">
          	<div id="comment_fb" style="margin-top:10px;">
                <div id="cmt_face" class="fb-comments" data-href="<?php echo base_url().uri_string().".html";?>" data-width="651" data-num-posts="100"></div>
            </div>
          </div>
          <!--huongdan-->
        </div>
        <!--content_tab--> 
      </div>
      <!--tab_detail_product-->
      <div class="clear"></div>
      <p>&nbsp;</p>
      <div class="clear"></div>
    </div>
    <!--box_column_right--> 
  </div>
  <!--column_right-->
  <?php $this->load->view("column_right"); ?>
</div>
<script type="text/javascript">
// User like product
function user_like_content(a,b){
	$.post("<?php echo base_url()."home/users/user_like_content"; ?>",{pro_id:a,user_id:b},
		function(c){
			//alert(c);
			//return false;
			if(c == 1){
				if(confirm("Để sử dụng chức năng này bạn cần đăng nhập. Click OK để đăng nhập")){
					window.location="/dang-nhap.html?returnTo="+window.location
				}
			}else{
				if(c == 2){
					alert("Bạn đã lưu rồi")
				}else{
					alert("Bạn đã lưu thành công")
				}
			}
		}
	)
}
</script>
