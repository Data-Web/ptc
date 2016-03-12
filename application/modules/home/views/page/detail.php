<div class="content_full">
<style type="text/css">
.box_column_right{width: 97.6%;}
</style>
  <?php $this->load->view("column_left"); ?>
  
  <div class="column_right">
    <div id="location">
    <a href="/" title="Trang chủ"><b> Trang chủ </b></a> » <a href=""><?php echo $title; ?></a>
    </div>
    <div class="clear"></div>
    <div class="box_column_right" style="padding:10px;">
      <div id="detail_page">
        <h1><?php echo $detail_page['page_title']; ?></h1>
        <div class="time"><?php echo $detail_page['page_date']; ?></div>
        <div class="clear space2"></div>
        <div class="title_box_right" style="height:26px;">
          <div class="l"> 
            <!-- AddThis Button BEGIN -->
            <div class="addthis_toolbox addthis_default_style " style="width: 201px;">
            <a class="addthis_button_preferred_1"></a>
            <a class="addthis_button_preferred_2"></a>
            <a class="addthis_button_preferred_3"></a>
            <a class="addthis_button_preferred_4"></a>
            <a class="addthis_button_compact"></a>
            <a class="addthis_counter addthis_bubble_style"></a>
            </div>
            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-523824bb471c1b61"></script>
            <!-- AddThis Button END -->
          </div>
          <!--float:left-->
          <div class="r">
            <div class="l" style="margin-right:10px;"><a href="javascript:window.print();" target="_blank"><i class="bg icon_print"></i> <span class="blue">In trang</span></a></div>
            <div class="l"><a href="http://www.freetellafriend.com/tell/?heading=Share+This+Article&amp;bg=1&amp;option=email&amp;url=http://dochoikts.hurasoft.com/nikon-sua-ong-kinh-bang-cach-dun-soi/a31.html" target="_blank"><i class="bg icon_email_small"></i> <span class="blue">Gửi cho bạn bè</span></a></div>
          </div>
        </div>
        <!--title_box_right-->
        <div class="clear"></div>
        <div class="article">
          <?php
		  	if($detail_page['page_status'] == 0){
				echo "Nội dung đang chờ cập nhật và chỉnh sửa";
			}else{
				echo $detail_page['page_full'];
			}
		   ?>
        </div>
        <!--article--> 
      </div>
      <!--detail_page-->
      <div class="bg_border_page_detail"></div>
      <div class="clear"></div>
    </div>
    <!--box_column_right--> 
  </div>
</div>
