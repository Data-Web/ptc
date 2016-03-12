<div class="clearfix"></div>
<?php 
	if (!empty($listSlide)) {
?>
<div class="andy-slider">
	<?php 
		foreach ($listSlide as $v) {
	?>
	<img src="<?php echo $v['slide_image'] ?>" alt="<?php echo $v['slide_title'] ?>" />
	<?php } ?>
</div>
<?php } ?>
<div class="clearfix"></div>