<div class="col-md-3 left">
	<?php 
		if (!empty($listCategory)) {
	?>
	<div class="block-module module-has-title">
		<div class="block-module-title">
			<span><?php echo $lang_page == '1' ? 'Danh mục sản phẩm' : 'Product Category' ?></span>
		</div>
		<div class="block-module-body">
			<ul class="product-categories">
				<?php 
	            	foreach ($listCategory as $v) {
	            		$data['v'] = $v;
	                	$this->load->view('recur/category', $data);
	              	}
	            ?>
			</ul>
		</div>
	</div>
	<?php } ?>

	<?php 
		if (!empty($listHangSanXuat)) {
	?>
	<div class="block-module module-has-title">
		<div class="block-module-title">
			<span><?php echo $lang_page == '1' ? 'Hãng sản xuất' : 'Manufacturer' ?></span>
		</div>
		<div class="block-module-body">
			<ul class="product-categories">
				<?php 
					foreach ($listHangSanXuat as $v) {
				?>
				<li>
					<a href="<?php echo base_url('san-pham').'?hsx='.$v['hangsanxuat_id'] ?>" title="<?php echo $v['hangsanxuat_name'] ?>">
						<?php echo $v['hangsanxuat_name']. '&nbsp;('. $v['total_product'] .')'; ?>
					</a>
				</li>
				<?php } ?>
			</ul>
		</div>
	</div>
	<?php } ?>
</div>
<div class="col-md-9 center">
	<div class="page-content">
		<div class="page-breadcrumbs">
			<ul>
				<li>
					<a title="<?php echo $lang_page == '1' ? 'Trang chủ' : 'Home' ?>" href="/"><?php echo $lang_page == '1' ? 'Trang chủ' : 'Home' ?></a>
				</li>
				<li>
					<?php 
						if ($lang_page == '1') {
					?>
					<a title="Tin tức" href="<?php echo base_url('tin-tuc') ?>">Tin tức</a>
					<?php } else { ?>
					<a title="News" href="<?php echo base_url('news') ?>">News</a>
					<?php } ?>
				</li>
				<?php 
					if (!empty($infoCate)) {
				?>
				<li>
					<a title="<?php echo $infoCate['cago_name'] ?>" href="<?php echo $fullURL ?>"><?php echo $infoCate['cago_name'] ?></a>
				</li>
				<?php }  ?>
			</ul>
		</div>
		<div class="page-wrapper">
			<div class="page-title">
				<h1>
					<?php 
						if (!empty($infoCate)) {
							echo $infoCate['cago_name'];
					 	} else {
					 		echo $lang_page == '1' ? 'Tin tức' : 'News';
					 	} 
					?>
				</h1>
			</div>
			<div class="page-body">
				<?php
					if (!empty($listNews)) {
						foreach ($listNews as $v) {
				?>
					<div class="col-md-12 col-sm-12 col-xs-12 full-xs page-item">
						<div class="page-item-img col-md-3 col-sm-4 col-xs-4 full-xs">
							<?php 
								if ($lang_page == '1') {
							?>
							<a href="<?php echo base_url("tin-tuc/".$v['news_rewrite']."-".$v['news_id']) ?>" title="<?php echo $v['news_title'] ?>">
								<img class="img-responsive" src="<?php echo $v['news_images'] ?>" alt="<?php echo $v['news_title'] ?>">
							</a>
							<?php } else { ?>
							<a href="<?php echo base_url("news/".$v['news_rewrite']."-".$v['news_id']) ?>" title="<?php echo $v['news_title'] ?>">
								<img class="img-responsive" src="<?php echo $v['news_images'] ?>" alt="<?php echo $v['news_title'] ?>">
							</a>
							<?php } ?>
						</div>
						<div class="page-item-caption col-md-9 col-sm-8 col-xs-8 full-xs">
							<a href="<?php echo $lang_page == '1' ? base_url("tin-tuc/".$v['news_rewrite']."-".$v['news_id']) : base_url("news/".$v['news_rewrite']."-".$v['news_id']) ?>" title="<?php echo $v['news_title'] ?>">
								<h3 style="overflow: inherit !important;"><?php echo $v['news_title'] ?></h3>
							</a>
							<div class="page-item-caption-sumary">
								<?php echo $v['news_info'] ?>
							</div>
						</div>
					</div>
				<?php } } else { ?>
				<div class="col-md-12 col-sm-12 col-xs-12 full-xs">
					<h3><?php echo $lang_page == '1' ? 'Không tồn tại tin tức nào' : 'News does not exist yet' ?></h3>
				</div>
				<?php } ?>
				<div class="clearfix"></div>
				<div id="pagination"><?php  echo $this->pagination->create_links();?></div>
			</div>
		</div>
	</div>
</div>