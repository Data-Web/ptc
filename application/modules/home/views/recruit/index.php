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
					<a title="Tuyển dụng" href="<?php echo base_url('tuyen-dung') ?>">Tuyển dụng</a>
					<?php } else { ?>
					<a title="Recruit" href="<?php echo base_url('recruit') ?>">Recruit</a>
					<?php } ?>
				</li>
			</ul>
		</div>
		<div class="page-wrapper">
			<div class="page-title">
				<h1><?php echo $lang_page == '1' ? 'Tuyển dụng' : 'Recruit' ?></h1>
			</div>
			<div class="page-body">
				<?php
					if (!empty($listRecruit)) {
						foreach ($listRecruit as $v) {
				?>
					<div class="col-md-12 col-sm-12 col-xs-12 full-xs page-item">
						<div class="page-item-img col-md-3 col-sm-4 col-xs-4 full-xs">
							<a href="<?php echo $lang_page == '1' ? base_url("tuyen-dung/".$v['url_rewrite']."-".$v['id']) : base_url("recruit/".$v['url_rewrite']."-".$v['id']) ?>" title="<?php echo $v['title'] ?>">
								<img class="img-responsive" src="<?php echo $v['image'] ? $v['image'] : '/public/admin/images/no-images.jpg' ?>">
							</a>
						</div>
						<div class="page-item-caption col-md-9 col-sm-8 col-xs-8 full-xs">
							<a href="<?php echo $lang_page == '1' ? base_url("tuyen-dung/".$v['url_rewrite']."-".$v['id']) : base_url("recruit/".$v['url_rewrite']."-".$v['id']) ?>" title="<?php echo $v['title'] ?>">
								<h3><?php echo $v['title'] ?></h3>
							</a>
							<div class="page-item-caption-sumary">
								<?php echo $v['desc'] ?>
							</div>
						</div>
					</div>
				<?php } } else { ?>
				<div class="col-md-12 col-sm-12 col-xs-12 full-xs">
					<h3><?php echo $lang_page == '1' ? 'Không tồn tại tin tuyển dụng nào' : 'Recruit does not exist yet' ?></h3>
				</div>
				<?php } ?>
				<div class="clearfix"></div>
				<div id="pagination"><?php  echo $this->pagination->create_links();?></div>
			</div>
		</div>
	</div>
	<h1 style="display: none;"> <?php echo isset($title) ? $title : ''; ?> </h1>
	<h2 style="display: none;"> <?php echo isset($title) ? $title : ''; ?> </h2>
</div>