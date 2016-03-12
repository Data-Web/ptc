<?php 
	if(!isset($_SESSION['ulogin']) && $info['set_pass'] != NULL){
		redirect(base_url()."close");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo $lang_page == 1 ? 'vi' : 'en'; ?>" xml:lang="<?php echo $lang_page == 1 ? 'vi' : 'en'; ?>">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=1, minimum-scale=0.5, maximum-scale=1.0"/>
<meta http-equiv="refresh" content="600" />
<title><?php echo isset($title) && $title != null ? $title : $config['config_title'] ; ?></title>
<link rel="canonical" href="<?php echo base_url(); ?>" />
<link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.ico" />
<meta name="keywords" content="<?= isset($keyword) && $keyword != null ? $keyword : $config['config_key']; ?>" />
<meta name="description" content="<?= isset($description) && $description != null ? $description : $config['config_des']; ?>" />
<meta property="og:title" content="<?php echo isset($title) && $title != null ? $title : $config['config_title'] ; ?>" />
<meta property="og:description" content="<?= isset($description) && $description != null ? $keyword : $config['config_des']; ?>" />
<meta property="og:url" content="<?php echo base_url(); ?>" />
<meta property="og:site_name" content="<?php echo $config['config_title']; ?>" />

<meta property="og:image" content="<?= isset( $infoItem['pro_first_image']) &&  $infoItem['pro_first_image'] != null ?  $infoItem['pro_first_image'] : ''; ?>">
<meta property="og:image:width" content="754">
<meta property="og:image:height" content="347">

<?php $this->load->view("styles");?>
</head>

<body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<?php $this->load->view("header");?>
	<div class="main">
		<div class="container andy-container">
			<?php $this->load->view($template);?>
		</div>
	</div>
	<?php $this->load->view("footer");?>	
</body>
<?php $this->load->view("scripts");?>
</html>
