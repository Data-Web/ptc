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
</div>
<div class="col-md-9 center">
	<div class="page-content">
		<div class="page-breadcrumbs">
			<ul>
				<li>
					<a title="<?php echo $lang_page == '1' ? 'Trang chủ' : 'Home' ?>" href="/"><?php echo $lang_page == '1' ? 'Trang chủ' : 'Home' ?></a>
				</li>
				<li>
					<a title="<?php echo $infoItem['cate_name'] ?>" href="<?php echo $fullURL ?>"><?php echo $infoItem['cate_name'] ?></a>
				</li>
			</ul>
		</div>
		<div class="page-wrapper">
			<div class="page-title">
				<h1><?php echo $infoItem['cate_name'] ?></h1>
			</div>
			<div class="page-body">
				<?php
					if (!empty($listCustomer)) {
						foreach ($listCustomer as $v) {
				?>
					<div class="col-md-12 col-sm-12 col-xs-12 full-xs page-item">
						<div class="page-item-img col-md-3 col-sm-4 col-xs-4 full-xs">
							<a href="<?php echo $lang_page == '1' ? base_url("khach-hang/".$v['url_rewrite']."-".$v['id']) : base_url("customer/".$v['url_rewrite']."-".$v['id']) ?>" title="<?php echo $v['title'] ?>">
								<img class="img-responsive" src="<?php echo $v['image'] ? $v['image'] : '/public/admin/images/no-images.jpg' ?>">
							</a>
						</div>
						<div class="page-item-caption col-md-9 col-sm-8 col-xs-8 full-xs">
							<a href="<?php echo $lang_page == '1' ? base_url("khach-hang/".$v['url_rewrite']."-".$v['id']) : base_url("customer/".$v['url_rewrite']."-".$v['id']) ?>" title="<?php echo $v['title'] ?>">
								<h3><?php echo $v['title'] ?></h3>
							</a>
							<div class="page-item-caption-sumary">
								<?php echo $v['desc'] ?>
							</div>
						</div>
					</div>
				<?php } } else { ?>
				<div class="col-md-12 col-sm-12 col-xs-12 full-xs">
					<h3><?php echo $lang_page == '1' ? 'Không tồn tại khách hàng nào' : 'Customer does not exist yet' ?></h3>
				</div>
				<?php } ?>
				<div class="clearfix"></div>
				<div id="pagination"><?php  echo $this->pagination->create_links();?></div>
			</div>
		</div>
	</div>
</div>