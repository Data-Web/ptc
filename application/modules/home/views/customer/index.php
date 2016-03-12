<div class="col-md-3 left">
	<?php if (!empty($listCategory)) { ?>
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

	<?php if (!empty($listHangSanXuat)) { ?>
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
					<a title="Khách hàng" href="<?php echo base_url('khach-hang') ?>">Khách hàng</a>
					<?php } else { ?>
					<a title="Customer" href="<?php echo base_url('customer') ?>">Customer</a>
					<?php } ?>
				</li>
			</ul>
		</div>
		<div class="page-wrapper">
			<div class="page-title">
				<h1><?php echo $lang_page == '1' ? 'Khách hàng' : 'Customer' ?></h1>
			</div>
			<div class="page-body">
				<?php
					if (!empty($listCustomer)) {
						foreach ($listCustomer as $v) {
				?>
					<div class="col-md-12 col-sm-12 col-xs-12 full-xs page-item">
						<div class="page-item-img col-md-3 col-sm-4 col-xs-4 full-xs">
							<a href="<?php echo $lang_page == '1' ? base_url("khach-hang/".$v['url_rewrite']."-".$v['id']) : base_url("customer/".$v['url_rewrite']."-".$v['id']) ?>" title="<?php echo $v['title'] ?>">
								<img class="img-responsive" src="<?php echo $v['image'] ? $v['image'] : '/public/admin/images/no-images.jpg' ?>" alt="<?php echo $v['title'] ?>" style='max-width: 45%;'>
							</a>
						</div>
						<div class="page-item-caption col-md-9 col-sm-8 col-xs-8 full-xs">
							<a href="<?php echo $lang_page == '1' ? base_url("khach-hang/".$v['url_rewrite']."-".$v['id']) : base_url("customer/".$v['url_rewrite']."-".$v['id']) ?>" title="<?php echo $v['title'] ?>">
								<h3 style="font-size: 16px;"><?php echo $v['title'] ?></h3>
							</a>
							<div class="page-item-caption-sumary">
								<?php echo $v['desc'] ?>
							</div>
						</div>
					</div>
				<?php } } else { ?>
				<div class="col-md-12 col-sm-12 col-xs-12 full-xs">
					<h2 style="font-size: 14px;"><?php echo $lang_page == '1' ? 'Không tồn tại khách hàng nào' : 'Customer does not exist yet' ?></h2>
				</div>
				<?php } ?>
				<div class="clearfix"></div>
				<div id="pagination"><?php  echo $this->pagination->create_links();?></div>
			</div>
		</div>
	</div>
</div>