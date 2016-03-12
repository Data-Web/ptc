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
					<a href="<?php echo base_url('tim-kiem').'?s='.$keyword.'&hsx='.$v['hangsanxuat_id'] ?>" title="<?php echo $v['hangsanxuat_name'] ?>">
						<?php echo $v['hangsanxuat_name'] ?>
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
		<div class="page-breadcrumbs breadcrumbs-category">
			<ul>
				<li>
					<a title="<?php echo $lang_page == '1' ? 'Trang chủ' : 'Home' ?>" href="/"><?php echo $lang_page == '1' ? 'Trang chủ' : 'Home' ?></a>
				</li>
				<li>
					<?php 
						if ($lang_page == '1') {
					?>
					<a title="Sản phẩm" href="javascript:;">Tìm kiếm</a>
					<?php } else { ?>
					<a title="Product" href="javascript:;">Search</a>
					<?php } ?>
				</li>
			</ul>
		</div>
        <div class="clearfix"></div>
		<div class="page-product-relative product-relative-sub">
			<div class="row">
				<div class="col-md-12">
					<?php 
						if (!empty($listProduct)) {
					?>
					<div class="alert alert-success">
						<?php if ($lang_page == '1') { ?>
							Tìm thấy <?php echo $totalRecord ?> sản phẩm phù hợp với từ khóa <?php echo $keyword ?>
						<?php } else { ?>
							Found <?php echo $totalRecord ?> products matching keyword <?php echo $keyword ?>
						<?php } ?>
					</div>
					<?php } else { ?>
					<div class="alert alert-danger">
						<?php if ($lang_page == '1') { ?>
							Không có sản phẩm nào phù hợp với từ khóa <?php echo $keyword ?>
						<?php } else { ?>
							No products matched keyword <?php echo $keyword ?>
						<?php } ?>
					</div>
					<?php } ?>
				</div>
			</div>
			<div class="row">
				<div class="module-home module-product">
					<div class="module-body">
						<?php
							if (!empty($listProduct)) {
								foreach ($listProduct as $v) {
						?>
							<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 full-xs product-home products-category">
								<div class="module-item">
									<div class="module-item-img">
										<?php 
											if ($lang_page == '1') {
										?>
										<a href="<?php echo base_url("san-pham/".$v['pro_name_rewrite']."-".$v['pro_id']) ?>" title="<?php echo $v['pro_name'] ?>">
											<img class="img-responsive" src="<?php echo $v['pro_images'] ?>">
										</a>
										<?php } else { ?>
										<a href="<?php echo base_url("product/".$v['pro_name_rewrite']."-".$v['pro_id']) ?>" title="<?php echo $v['pro_name'] ?>">
											<img class="img-responsive" src="<?php echo $v['pro_images'] ?>">
										</a>
										<?php } ?>
									</div>
									<div class="module-item-caption">
										<a href="<?php echo $lang_page == '1' ? base_url("san-pham/".$v['pro_name_rewrite']."-".$v['pro_id']) : base_url("product/".$v['pro_name_rewrite']."-".$v['pro_id']) ?>" title="<?php echo $v['pro_name'] ?>">
											<h3><?php echo $v['pro_name'] ?></h3>
										</a>
									</div>
								</div>
							</div>
						<?php } } ?>
						<div class="clearfix"></div>
						<div id="pagination"><?php  echo $this->pagination->create_links();?></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>