<?php
/* Smarty version 3.1.30, created on 2018-11-13 17:33:58
  from "F:\webphp\php-7.2.4\www\shichang\home\smarty\templates\order.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bea9a86a6a285_72831717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66d11f18bf83c4e0d5bd34e48b2344adacc21681' => 
    array (
      0 => 'F:\\webphp\\php-7.2.4\\www\\shichang\\home\\smarty\\templates\\order.tpl',
      1 => 1542098760,
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
function content_5bea9a86a6a285_72831717 (Smarty_Internal_Template $_smarty_tpl) {
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
	<link rel="stylesheet" href="css/order_handle.css" />
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
						<h1>
						订单处理
						</h1>
						<span class="st-border"></span>
					</div>
				</div>
				<div id="tab">
					<div class="top">
						<h3>订单信息</h3>
					</div>
					
					<div class="tab_box">
						<form class="form-horizontal" style="margin-left:50px;" onsubmit="return chksubmit();" method="post" action="dingdan.php">
    					<div class="form-group">
						    <label for="inputEmail3" class="col-sm-3 control-label" >金额</label>
						    <div class="col-sm-5" style="margin-top:6px;">
						      <span style="color:#383838;font-weight:900">￥<?php echo $_smarty_tpl->tpl_vars['priceTotal']->value;?>
</span>
						      <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['priceTotal']->value;?>
"  id="priceTotal" name="priceTotal">
						       <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"  id="name" name="name">
						    </div>
					    </div>
						<div class="form-group">
						    <label for="inputEmail3" class="col-sm-3 control-label" >姓名*</label>
						    <div class="col-sm-7">
						      <input type="text" class="form-control" id="own" name="own" placeholder="Name">
						    </div>
					    </div>
					    <div class="form-group">
						    <label for="inputEmail3" class="col-sm-3 control-label" >号码*</label>
						    <div class="col-sm-7">
						      <input type="text" class="form-control" id="tel" name="tel" placeholder="Tele-numbers">
						    </div>
					    </div>
					   <!--  <div class="form-group">
						    <label for="inputEmail3" class="col-sm-3 control-label">QQ</label>
						    <div class="col-sm-7">
						      <input type="email" class="form-control" id="inputEmail3" placeholder="QQ">
						    </div>
					    </div> -->
						<div class="form-group">
						    <label for="inputEmail3" class="col-sm-3 control-label">邮箱</label>
						    <div class="col-sm-7">
						      <input type="email" class="form-control" name="email" placeholder="Email" id="email" >
						    </div>
					    </div>
					    <div class="form-group">
						    <label for="inputEmail3" class="col-sm-3 control-label" >地址*</label>
						    <div class="col-sm-7">
						      <input type="text" class="form-control" id="address"  name="address" placeholder="Address">
						    </div>
					    </div>
					    <div class="form-group">
						    <label for="inputEmail3" class="col-sm-3 control-label" >备注</label>
						    <div class="col-sm-7">
						      <input type="text" class="form-control" id="desc" name="desc" placeholder="Remarks">
						      <input type="hidden" name="str" value="<?php echo $_smarty_tpl->tpl_vars['str']->value;?>
">
						      <input type="hidden" name="str1" value="<?php echo $_smarty_tpl->tpl_vars['str1']->value;?>
">
						    </div>
					    </div>
					    <div class="form-group">
					    	<label for="inputEmail3" class="col-sm-3 control-label" style="width:100px;">支付方式</label>
					    	<div class="col-sm-5">
					    		<span class="select-box" >
								<select name="pay_method" id="pay_method"  class="select" style="height: 30px" >
									<option value="货到付款">货到付款</option>
									<option value="微信支付">微信支付</option>
									<option value="支付宝支付">支付宝支付</option>
								</select>
							</span>
					    	</div>
					    	<div class="col-sm-5" style="margin-top:20px;">
					    		<button type="submit" class="btn btn-send">确定</button>
					    		<button type="reset" class="btn btn-send">取消</button>
					    	</div>
					    	
					    </div>
					</form>
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
>
      function chksubmit()
      {
      	own=$("#own").val();
      	tel=$("#tel").val();
      	email=$("#email").val();
      	address=$("#address").val();
         if(own=="")
         {
         	alert("请输入您的姓名");
         	return false;
         }
         if(tel=="")
         {
         	alert("请输入您的电话");
         	return false;
         }
         if(email=="")
         {
         	alert("请输入您的邮箱");
         	return false;
         }
         if(address=="")
         {
         	alert("请输入您的住址");
         	return false;
         }
        return true;
      }
	<?php echo '</script'; ?>
>
</body>
</html><?php }
}
