<?php
/* Smarty version 3.1.30, created on 2018-11-10 21:48:08
  from "F:\webphp\php-7.2.4\www\shichang\home\smarty\templates\shopcar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5be6e1987fe206_84627731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07410ab9165bb1e27e98dc48fe3fce2521e8f85f' => 
    array (
      0 => 'F:\\webphp\\php-7.2.4\\www\\shichang\\home\\smarty\\templates\\shopcar.tpl',
      1 => 1541857419,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:top.tpl' => 1,
    'file:services.tpl' => 1,
    'file:bottom.tpl' => 1,
  ),
),false)) {
function content_5be6e1987fe206_84627731 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<title>S市场</title>
	
	<!-- Main CSS file -->
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/owl.carousel.css" />
	<link rel="stylesheet" href="css/magnific-popup.css" />
	<link rel="stylesheet" href="css/font-awesome.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/shopping_cart.css" />
	<link rel="stylesheet" href="css/responsive.css" />

	
	<!-- Favicon -->
	<link rel="shortcut icon" href="images/icon/favicon.png">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/icon/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/icon/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/icon/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="images/icon/apple-touch-icon-57-precomposed.png">
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
	  <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
	<![endif]-->
	
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

	<!-- PURCHASE -->		
	<section id="services">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h1>购物车</h1>
						<span class="st-border"></span>
					</div>
				</div>
      
				<div>
					<table id="cartTable" class="table table-border table-bordered table-bg table-hover table-sort table-responsive">
						<thead>
							<tr>
								<th style="width: 80px;"><input class="check-all check" type="checkbox" style="margin-left: 39px;" />&nbsp;全选</th>
					            <th>商品</th>
					            <th>单价</th>
					            <th>数量</th>
					            <th>小计</th>
					            <th>操作</th>
							</tr>
						</thead>
						<tbody>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['commarr']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
							<tr>
								<td><input type="checkbox" class="check-one check" id="id" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"></td>
								<td class="goods"><img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['img'];?>
" style="width:100px;" class="img"><span style="margin-left: 10px;"><a href="products.html"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></span></td>
								<td class="price"><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</td>
								<td class="count"><span class="reduce"></span><input class="count-input" type="text" value="1"/><span class="add">+</span></td>
								<td class="subtotal"><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</td>
								<td class="operation"><span class="delete">删除</span></td>
							</tr>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

						</tbody>
					</table>
					<div>
					<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['str']->value;?>
" id="good">
						<button type="button" class="btn btn-send"><a href="index.php#our-works">继续购物</a></button>
						<button type="button" class="btn btn-send" id="jiesuan">立即结算</button>
						<button type="button" class="btn btn-send" id="deleteAll">全部删除</button>
						<button type="button" class="btn btn-send" >已选<span id="selectedTotal">0</span>个，合计：￥<span id="priceTotal">0</span></button>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!-- /PURCHASE -->

	<!-- SERVICES -->
	  <?php $_smarty_tpl->_subTemplateRender("file:services.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<!-- /SERVICES -->

	<!-- FOOTER -->
	<?php $_smarty_tpl->_subTemplateRender("file:bottom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<!-- /FOOTER -->
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
 type="text/javascript" src="js/demo.js"><?php echo '</script'; ?>
>s
</body>
</html><?php }
}
