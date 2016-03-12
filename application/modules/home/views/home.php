<h1 style="display:none;">
	<?php echo isset($title) && $title != null ?  $title : $config['config_des']; ?>
</h1>
<div class="row">
	<div class="module-home module-product">
		<div class="module-title col-md-12 col-sm-12 col-xs-12 full-xs">
			<h2><?php echo $lang_page == '1' ? 'Danh Mục Sản Phẩm Chính' : 'Main Category' ?></h2>
		</div>
		<div class="module-body">
			<?php 
				if (!empty($cateProduct)) {
					foreach($cateProduct as $v) { ?>
					<div class="col-md-3 col-sm-3 col-xs-6 full-xs">
						<div class="module-item">
							<div class="module-item-img">
								<?php 
									if ($lang_page == '1') {
								?>
								<a href="<?php echo base_url("danh-muc/".$v['cate_rewrite']."-".$v['cate_id']) ?>" title="<?php echo $v['cate_name'] ?>">
									<img class="img-responsive" src="<?php echo $v['cate_images'] ?>" alt="<?= $v['cate_name'] ?>" />
								</a>
								<?php } else { ?>
								<a href="<?php echo base_url("category/".$v['cate_rewrite']."-".$v['cate_id']) ?>" title="<?php echo $v['cate_name'] ?>">
									<img class="img-responsive" src="<?php echo $v['cate_images'] ?>" alt="<?= $v['cate_name'] ?>">
								</a>
								<?php } ?>
							</div>
							<div class="module-item-caption">
								<?php 
									if ($lang_page == '1') {
								?>
								<a href="<?php echo base_url("danh-muc/".$v['cate_rewrite']."-".$v['cate_id']) ?>" title="<?php echo $v['cate_name'] ?>">
									<h3><?php echo $v['cate_name'] ?></h3>
								</a>
								<?php } else { ?>
								<a href="<?php echo base_url("category/".$v['cate_rewrite']."-".$v['cate_id']) ?>" title="<?php echo $v['cate_name'] ?>">
									<h3><?php echo $v['cate_name'] ?></h3>
								</a>
								<?php } ?>
							</div>
						</div>
					</div>
			<?php } } else { ?>
				<div class="col-md-12 col-sm-12 col-xs-12 full-xs">
					<h3><?php echo $lang_page == '1' ? 'Nội dung đang được cập nhật' : 'Content is being updated' ?></h3>
				</div>
			<?php } ?>
		</div>
	</div>
</div>
<div class="row">
	<div class="module-home module-video col-md-6 col-sm-12 col-xs-12 full-xs">
		<div class="module-title col-md-12 video-intro">
			<h2><?php echo $lang_page == '1' ? 'Video Giới Thiệu' : 'Introduction Video' ?></h2>
		</div>
		<div class="module-body">
			<?php echo $configWeb['youtube'] ?>
		</div>
	</div>
	<div class="module-home module-news col-md-6 col-sm-12 col-xs-12 full-xs">
		<div class="module-title col-md-12 no-padding">
			<h2><?php echo $lang_page == '1' ? 'Bài Viết Mới Nhất' : 'Lastest Posts' ?></h2>
		</div>
		<div class="module-body">
			<?php 
				if (!empty($lastestPost)) {
					foreach ($lastestPost as $v) {
			?>
			<div class="col-md-12 col-sm-12 col-xs-12 full-xs no-padding item">
				<div class="module-item">
					<div class="col-md-2 col-sm-3 col-xs-3 module-item-img no-padding">
						<a href="<?php echo $lang_page == '1' ? base_url("tin-tuc/".$v['news_rewrite']."-".$v['news_id']) : base_url("news/".$v['news_rewrite']."-".$v['news_id']) ?>" title="<?php echo $v['news_title'] ?>">
							<img class="img-responsive" src="<?php echo $v['news_images'] ?>" alt="<?= $v['news_title'] ?>">
						</a>
					</div>
					<div class="col-md-10 col-sm-9 col-xs-9 module-item-caption">
						<a href="<?php echo $lang_page == '1' ? base_url("tin-tuc/".$v['news_rewrite']."-".$v['news_id']) : base_url("news/".$v['news_rewrite']."-".$v['news_id']) ?>" title="<?php echo $v['news_title'] ?>">
							<h3><?php echo $v['news_title'] ?></h3>
							<span> (<?php echo $v['news_date'] ?>)</span>
						</a>
					</div>
				</div>
			</div>
			<?php } ?>
			<p class="pull-right"><a style="color: red;" title="<?= $lang_page == 1 ? 'Xem thêm' : 'Read more'; ?>" href='<?= base_url('tin-tuc'); ?>'><?= $lang_page == 1 ? 'Xem thêm' : 'Read more'; ?></a></p>
			<?php } else { ?>
			<div class="col-md-12 col-sm-12 col-xs-12 full-xs no-padding item">
				<h3><?php echo $lang_page == '1' ? 'Nội dung đang được cập nhật' : 'Content is being updated' ?></h3>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
<div class="row">
	<div class="module-home module-product">
		<div class="module-title col-md-12 col-sm-12 col-xs-12 full-xs">
			<h2><?php echo $lang_page == '1' ? 'Sản Phẩm Mới Nhất' : 'Product Lastest New' ?></h2>
		</div>
		<div class="module-body">
		        <!-- Start HOT Product -->
				<?php
					if (isset($pro_hot) && !empty($pro_hot)): foreach ($pro_hot as $v):
				?>
					<div class="col-md-3 col-sm-3 col-xs-6 full-xs product-item-new product-home product-hot">
						<div class="module-item">
							<div class="module-item-img">
								<?php 
									if ($lang_page == '1') {
								?>
								<a href="<?php echo base_url("san-pham/".$v['pro_name_rewrite']."-".$v['pro_id']) ?>" title="<?php echo $v['pro_name'] ?>">
									<img class="img-responsive" src="<?php echo $v['pro_images'] ?>" alt="<?= $v['pro_name'] ?>">
								</a>
								<?php } else { ?>
								<a href="<?php echo base_url("product/".$v['pro_name_rewrite']."-".$v['pro_id']) ?>" title="<?php echo $v['pro_name'] ?>">
									<img class="img-responsive" src="<?php echo $v['pro_images'] ?>" alt="<?= $v['pro_name'] ?>">
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
				<?php endforeach; endif; ?>
			<!-- End HOT Product -->
		</div>
	</div>
</div>
<?php 
	if (!empty($listDoitac)) {
?>
<div class="row">
	<div class="module-home module-doitac">
		<div class="module-title col-md-12 col-sm-12 col-xs-12 full-xs">
			<h2>Nhà Cung Cấp</h2>
		</div>
		<div class="module-body col-md-12 col-sm-12 col-xs-12 full-xs">
			<ul class="owl-doitac">
				<?php foreach($listDoitac as $v) { ?>
				<li>
					<a href="javascript:;" title="<?php echo $v['doitac_name'] ?>">
						<img class="img-responsive" src="<?php echo $v['doitac_image'] ?>" alt="<?= $v['doitac_name'] ?>">
					</a>
				</li>
				<?php } ?>
			</ul>
			<div class="prev-carousel"></div>
            <div class="next-carousel"></div>
		</div>
	</div>
</div>
<?php } ?>