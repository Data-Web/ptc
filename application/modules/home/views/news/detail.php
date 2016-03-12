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
					<a href="/" title="<?php echo $lang_page == '1' ? 'Trang chủ' : 'Home' ?>"><?php echo $lang_page == '1' ? 'Trang chủ' : 'Home' ?></a>
				</li>
				<li>
					<?php 
						if ($lang_page == '1') {
					?>
					<a href="<?php echo base_url('tin-tuc') ?>" title="Tin tức">Tin tức</a>
					<?php } else { ?>
					<a href="<?php echo base_url('news') ?>" title="News">News</a>
					<?php } ?>
				</li>
				<li>
					<a href="<?php echo $lang_page == '1' ? base_url("danh-muc-tin/".$infoCate['cago_rewrite']."-".$infoCate['cago_id']) : base_url("newscategory/".$infoCate['cago_rewrite']."-".$infoCate['cago_id']) ?>" title="<?php echo $infoCate['cago_name'] ?>"><?php echo $infoCate['cago_name'] ?></a>
				</li>
				<li>
					<a href="<?php echo $lang_page == '1' ? base_url("tin-tuc/".$infoItem['news_rewrite']."-".$infoItem['news_id']) : base_url("news/".$infoItem['news_rewrite']."-".$infoItem['news_id']) ?>" title="<?php echo $infoItem['news_title'] ?>"><?php echo $infoItem['news_title'] ?></a>
				</li>
			</ul>
		</div>
		<div class="page-wrapper">
			<div class="page-title">
				<h1><?php echo $infoItem['news_title'] ?></h1>
			</div>
			<div class="page-body">
				<div class="page-detail">
					<?php echo $infoItem['news_full'] ?>
				</div>
			</div>
		</div>
		<h2 style="display: none;"><?php echo isset($title) ? $title : ""; ?></h2>
	</div>
</div>