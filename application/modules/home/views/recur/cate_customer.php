<li>
  	<a title="<?php echo $v['cate_name'] ?>" href="<?php echo $lang_page == '1' ? base_url("danh-muc-khach-hang/".$v['cate_rewrite']."-".$v['cate_id']) : base_url("category-customer/".$v['cate_rewrite']."-".$v['cate_id']) ?>">
  		<?php echo $v['cate_name'] ?>
  	</a>
	<?php 
		if (!empty($v['sub'])) {
	?>
	<ul class="sub-menu">
		<?php 
			foreach ($v['sub'] as $v) {
				require('cate_customer.php');
			}
		?>
	</ul>
	<?php } ?>
</li>