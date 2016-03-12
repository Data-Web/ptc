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
				<a href="<?php echo base_url('san-pham') ?>" title="Sản phẩm">Sản phẩm</a>
				<?php } else { ?>
				<a href="<?php echo base_url('product') ?>" title="Product">Product</a>
				<?php } ?>
			</li>
			<li>
				<a href="<?php echo $lang_page == '1' ? base_url("danh-muc/".$infoCate['cate_rewrite']."-".$infoCate['cate_id']) : base_url("category/".$infoCate['cate_rewrite']."-".$infoCate['cate_id']) ?>" title="<?php echo $infoCate['cate_name'] ?>"><?php echo $infoCate['cate_name'] ?></a>
			</li>
			<li>
				<a href="<?php echo $lang_page == '1' ? base_url("san-pham/".$infoItem['pro_name_rewrite']."-".$infoItem['pro_id']) : base_url("product/".$infoItem['pro_name_rewrite']."-".$infoItem['pro_id']) ?>" title="<?php echo $infoItem['pro_name'] ?>"><?php echo $infoItem['pro_name'] ?></a>
			</li>
		</ul>
	</div>
	<div class="page-wrapper">
		<div class="page-body">
			<div class="product-view">
				<div class="product-view-image no-padding col-md-4 col-xs-12">
					<div class="product-main-image">
						<a class="fancybox-buttons" data-fancybox-group="button" href="<?php echo $infoItem['pro_first_image'] ?>">
							<img src="<?php echo  $infoItem['pro_first_image']; ?>" class="img-responsive andy-img-responsive" alt="<?php echo $infoItem['pro_name'] ?>">
						</a>
					</div>
					<div class="clearfix"></div>
					<?php 
						if (isset($thumbs) && $thumbs != null) {
					?>
					<div class="product-gallery-image">
						<div id="product-gallery-image">
							<?php 
								if (isset($thumbs) && $thumbs != null) {
									foreach ($thumbs as $k => $v) {
							?>
								<a class="fancybox-buttons" data-fancybox-group="button" href="<?php echo "/uploads/images_products/". $v['url']; ?>"> 
									<img src="<?php echo "/uploads/images_products/thumbs/". $v['url'];  ?>"  alt="<?php echo $infoItem['pro_name'] ?>" class="img-responsive" />
								</a> 
							<?php } } else  ?>
						</div>
						<a id="prev_gallery_image" href="javascript:;" title="prev" style="display: block;">&lt;</a>
						<a id="next_gallery_image" href="javascript:;" title="next" style="display: block;">&gt;</a>
					</div>
					<?php } ?>
				</div>
				<div class="product-view-detail col-md-8 col-xs-12">
					<div class="product-detail-name">
						<h1><?php echo $infoItem['pro_name'] ?></h1>
						<?php if(isset($brand['hangsanxuat_id'])): ?>
						<p><?php echo $lang_page == 1 ? '<b>Hãng sản xuất:</b> <a href="/san-pham?hsx='.$brand['hangsanxuat_id'].'" title="'.$brand['hangsanxuat_name'].'">'. $brand['hangsanxuat_name'] . '</a>' : 'Brand: '; ?></p>
						<?php endif; ?>

						<?php if(isset($infoCate['cate_id'])): ?>
						<p>
							<?php echo $lang_page == 1 ? '<b>Danh mục: </b>' : '<b>Category: </b>'; ?>
							<a href="<?php echo $lang_page == '1' ? base_url("danh-muc/".$infoCate['cate_rewrite']."-".$infoCate['cate_id']) : base_url("category/".$infoCate['cate_rewrite']."-".$infoCate['cate_id']) ?>" title="<?php echo $infoCate['cate_name'] ?>"><?php echo $infoCate['cate_name'] ?></a>
						</p>
						<?php endif; ?>
						<?php if(isset($infoItem['pro_war']) && $infoItem['pro_war'] != null): ?>
							<p><b>Bảo hành:</b> <?= $infoItem['pro_war']; ?></p>
						<?php endif; ?>

						<?php if(isset($infoItem['pro_price']) && $infoItem['pro_price'] > 0): ?>
							<p><b>Giá bán:</b> <font color='red'><?= number_format($infoItem['pro_price'], 0); ?> VNĐ</font></p>
						<?php endif; ?>
						
					</div>
                                        <div style="clear: both;">
						
						
						
                        <div class="fb-like" data-href="<?=urlencode(base_url(uri_string()))?>&title=<?= isset($title) ? urlencode($title) : ''; ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
					</div>
					<a href="<?php echo $lang_page == '1' ? base_url('them-gio-hang/'.$infoItem['pro_id']) : base_url('add-cart/'.$infoItem['pro_id']) ?>" class="ndc-addcart"><i class="fa fa-shopping-cart"></i> <?php echo $lang_page == '1' ? 'Thêm vào giỏ hàng' : 'Add Cart' ?></a>
					<div class="clearfix"></div>
					
					<div class="clearfix"></div>
					<div class="product-tab">
						<ul class="nav nav-tabs">
				            <li class="active"><a data-toggle="tab" href="#desc"><?php echo $lang_page == '1' ? 'Mô tả' : 'Description' ?></a></li>
				            <li><a data-toggle="tab" href="#video"><?php echo $lang_page == '1' ? 'Video' : 'Video' ?></a></li>
				            <li><a data-toggle="tab" href="#detail"><?php echo $lang_page == '1' ? 'Chi tiết' : 'Detail' ?></a></li>
				            <li><a data-toggle="tab" href="#accessory"><?php echo $lang_page == '1' ? 'Phụ kiện' : 'Accessory' ?></a></li>
                                            <li><a data-toggle="tab" href="#comment"><?php echo $lang_page == '1' ? 'Bình luận' : 'Comment' ?></a></li>
				        </ul>
				        <div class="tab-content">
				        	<div id="desc" class="tab-pane fade in active">
				        		<?php echo $infoItem['pro_info'] ?>
				        	</div>
				        	<div id="video" class="tab-pane fade product-video">
				        		<?php echo $infoItem['video_youtube'] ?>
				        	</div>
				        	<div id="detail" class="tab-pane fade">
				        		<?php echo $infoItem['pro_full'] ?>
				        	</div>
				        	<div id="accessory" class="tab-pane fade">
				        		<?php echo $infoItem['phukien'] ?>
				        	</div>
                                                <div id="comment" class="tab-pane fade" style="padding-bottom: 80px;">
                                                    <div class="fb-comments" data-href="<?php echo base_url(uri_string()); ?>" style="padding-bottom: 80px;" data-numposts="10" data-width="100%" data-height="600px"></div>
                                                </div>

				        </div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="page-product-relative">
				<div class="row">
					<div class="module-home module-product">
						<div class="module-body">
							<div class="col-md-12 col-sm-12 col-xs-12 full-xs product-relative-title">
								Sản phẩm cùng danh mục
							</div>
							<?php
								if (!empty($productRelative)) {
									foreach ($productRelative as $v) {
							?>
								<div class="col-md-3 col-sm-3 col-xs-6 full-xs product-item-new product-home product-hot">
									<div class="module-item">
										<div class="module-item-img">
											<a href="<?php echo base_url("san-pham/".$v['pro_name_rewrite']."-".$v['pro_id']) ?>" title="<?php echo $v['pro_name'] ?>">
												<img class="img-responsive" src="<?php echo $v['pro_images'] ?>">
											</a>
										</div>
										<div class="module-item-caption">
											<a href="<?php echo base_url("san-pham/".$v['pro_name_rewrite']."-".$v['pro_id']) ?>" title="<?php echo $v['pro_name'] ?>">
												<h3><?php echo $v['pro_name'] ?></h3>
											</a>
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
			</div>
		</div>
	</div>
</div>
