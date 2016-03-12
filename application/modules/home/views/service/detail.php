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
					<a title="Dịch vụ" href="<?php echo base_url('dich-vu') ?>">Dịch vụ</a>
					<?php } else { ?>
					<a title="Service" href="<?php echo base_url('service') ?>">Service</a>
					<?php } ?>
				</li>
				<li>
					<a href="<?php echo $lang_page == '1' ? base_url("dich-vu/".$infoItem['url_rewrite']."-".$infoItem['id']) : base_url("service/".$infoItem['url_rewrite']."-".$infoItem['id']) ?>" title="<?php echo $infoItem['title'] ?>"><?php echo $infoItem['title'] ?></a>
				</li>
			</ul>
		</div>
		<div class="page-wrapper">
			<div class="page-title">
				<h1><?php echo $infoItem['title'] ?></h1>
			</div>
			<div class="page-body">
				<div class="page-detail">
					<?php echo $infoItem['content'] ?>
				</div>
			</div>
		</div>
	</div>
</div>