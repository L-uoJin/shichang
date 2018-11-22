<?php
/* Smarty version 3.1.30, created on 2018-11-11 15:14:54
  from "F:\webphp\php-7.2.4\www\shichang\home\smarty\templates\detail.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5be7d6ee1bc2b7_30192185',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d5048c16310df4769110fd8b582725d6b7d56a7' => 
    array (
      0 => 'F:\\webphp\\php-7.2.4\\www\\shichang\\home\\smarty\\templates\\detail.tpl',
      1 => 1541920491,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:top.tpl' => 1,
    'file:bottom.tpl' => 1,
  ),
),false)) {
function content_5be7d6ee1bc2b7_30192185 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>详情</title>
	<!-- Main CSS file -->
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/owl.carousel.css" />
	<link rel="stylesheet" href="css/magnific-popup.css" />
	<link rel="stylesheet" href="css/font-awesome.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/products.css" />
	<link rel="stylesheet" href="css/responsive.css" />

	
	<!-- Favicon -->
	<link rel="shortcut icon" href="images/icon/favicon.png">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/icon/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/icon/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/icon/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="images/icon/apple-touch-icon-57-precomposed.png">
</head>
<body>
	<!-- PRELOADER -->
	<div id="st-preloader">
		<div id="pre-status">
			<div class="preload-placeholder"></div>
		</div>
	</div>
	<!-- /PRELOADER -->

	<!-- HEADER -->
		<?php $_smarty_tpl->_subTemplateRender("file:top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<!-- /HEADER -->

	<!-- content -->
	<section id="our-team">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p>
					<?php echo $_smarty_tpl->tpl_vars['context']->value;?>

                	</p>
				</div>
			</div>
		</div>
	</section>
	<!-- FOOTER -->
	<?php $_smarty_tpl->_subTemplateRender("file:bottom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<!-- /FOOTER -->	
	<!-- /content -->
	<!-- JS -->
	<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.min.js"><?php echo '</script'; ?>
><!-- jQuery -->
	<?php echo '<script'; ?>
 type="text/javascript" src="js/bootstrap.min.js"><?php echo '</script'; ?>
><!-- Bootstrap -->
	<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.parallax.js"><?php echo '</script'; ?>
><!-- Parallax -->
	<?php echo '<script'; ?>
 type="text/javascript" src="js/smoothscroll.js"><?php echo '</script'; ?>
><!-- Smooth Scroll -->
	<?php echo '<script'; ?>
 type="text/javascript" src="js/masonry.pkgd.min.js"><?php echo '</script'; ?>
><!-- masonry -->
	<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.fitvids.js"><?php echo '</script'; ?>
><!-- fitvids -->
	<?php echo '<script'; ?>
 type="text/javascript" src="js/owl.carousel.min.js"><?php echo '</script'; ?>
><!-- Owl-Carousel -->
	<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.counterup.min.js"><?php echo '</script'; ?>
><!-- CounterUp -->
	<?php echo '<script'; ?>
 type="text/javascript" src="js/waypoints.min.js"><?php echo '</script'; ?>
><!-- CounterUp -->
	<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.isotope.min.js"><?php echo '</script'; ?>
><!-- isotope -->
	<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.magnific-popup.min.js"><?php echo '</script'; ?>
><!-- magnific-popup -->
	<?php echo '<script'; ?>
 type="text/javascript" src="js/scripts.js"><?php echo '</script'; ?>
><!-- Scripts -->
	<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.colorbox-min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/zzsc.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
