<li>
  	<a title="<?php echo $v['cate_name'] ?>" <?php echo isset($idActive) && $idActive == $v['cate_id'] ? 'style="color: #ff5d2a;"' : ''; ?> href="<?php echo $lang_page == '1' ? base_url("danh-muc/".$v['cate_rewrite']."-".$v['cate_id']) : base_url("category/".$v['cate_rewrite']."-".$v['cate_id']) ?>">
  		<?php echo $v['cate_name'] ?>
  	</a>
	<?php 
		if (!empty($v['sub'])) {
	?>
	<ul class="sub-menu">
		<?php 
			foreach ($v['sub'] as $v) {
				require('category.php');
			}
		?>
	</ul>
	<?php } ?>
</li>