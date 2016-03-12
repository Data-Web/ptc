<div class="content_full">
<style type="text/css">
.box_column_right{width: 97.6%;}
</style>
  <?php $this->load->view("articles/column_left"); ?>
  <div class="column_right">
    <div id="location"><!--i class="bg icon_home"></i--><a href="/" title="Trang chủ">Trang chủ</a> » <a href="javascript:void(0)" title="Tin tức">Tin tức</a></div>
    <div class="clear"></div>
    <div class="box_column_right" style="padding:10px;">
		<?php
			if(isset($news_hot) && $news_hot != NULL){
				foreach($news_hot as $news){
		?>    
	      <div class="hot_news" style="width:100%"> 
		      <a href="<?php echo base_url()."tin-tuc/".$news['news_rewrite']."/".$news['news_id'].".html"; ?>" class="img_hot_news" title="<?php echo $news['news_title']; ?>">
		      <img src="<?php echo base_url()."uploads/news/thumb/".$news['news_images'].""; ?>" style="max-width:250px;margin-bottom: 10px;" align="<?php echo $news['news_title']; ?>" />
	          </a>
		      <p><a href="<?php echo base_url()."tin-tuc/".$news['news_rewrite']."/".$news['news_id'].".html"; ?>" class="font18" title="<?php echo $news['news_title']; ?>"><strong><?php echo $news['news_title']; ?></strong></a></p>
		      <p><?php echo $news['news_date']; ?></p>
		      <p class="line_height18"><?php echo $news['news_info']; ?></p>
		        
		      <div class="clear"></div>
	      </div>
      <?php
	  		}
		}
	  ?>
      <!--hot_news-->
      
      <?php
	  	if(isset($listnews['cago']) && $listnews['cago'] != NULL){
			foreach($listnews['cago'] as $k => $v){
	  ?>
      <div class="box_news" style="padding-top:10px;">
        <div class="title_box_news"><i class="bg icon_box_news"></i>
          <h2><a style="color:#f00;" href=""><?php echo $v['cago_name']; ?></a></h2>
        </div>
        <div class="content_box_news">
          <div class="hot_news" style="width:100%"> 
	          	<?php
		            if(isset($listnews['news']) && $listnews['news'] != NULL){
						$stt = 0;
			            foreach($listnews['news'][$k] as $key => $value){
							$stt++;
				?>
				<a href="<?php echo base_url()."tin-tuc/".$value['news_rewrite']."/".$value['news_id'].".html"; ?>" class="img_hot_news" title="<?php echo $value['news_title']; ?>">
				<img src="<?php echo base_url()."uploads/news/thumb/".$value['news_images'].""; ?>" alt="<?php echo $value['news_title']; ?>" />
				</a>
				<p><a href="<?php echo base_url()."tin-tuc/".$value['news_rewrite']."/".$value['news_id'].".html"; ?>" class="font18" title="<?php echo $value['news_title']; ?>"><strong><?php echo $value['news_title']; ?></strong></a></p>
				<p><?php echo $value['news_date']; ?></p>
				<p class="line_height18"><?php echo $value['news_info']; ?></p>
	            <?php
					break;
						}
					}
				?>     
            <div class="clear"></div>
            <ul>
			<?php
	            if(isset($listnews['news']) && $listnews['news'] != NULL){
					$stt = 0;
		            foreach($listnews['news'][$k] as $key => $value){
						$stt++;
						if($stt > 1){
							echo "<li><a href='".base_url()."tin-tuc/".$value['news_rewrite']."/".$value['news_id'].".html' title='".$value['news_title']."'>".$value['news_title']."</a></li>";
						}
		            }
	            }
            ?>
            </ul>
          </div>
          <div class="clear"></div>
        </div>
        <!--content_box_news--> 
      </div>
      <!--box_news-->
      <?php
	  		}
		}else{
			echo "Không có dữ liệu";
		}
	  ?>
      <div class="clear"></div>
    </div>
    <!--box_column_right--> 
  </div>
</div>
