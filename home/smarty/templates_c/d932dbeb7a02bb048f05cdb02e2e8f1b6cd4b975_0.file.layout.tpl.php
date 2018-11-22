<?php
/* Smarty version 3.1.30, created on 2018-11-08 21:48:14
  from "F:\webphp\php-7.2.4\www\shichang\home\smarty\templates\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5be43e9e098a28_31007694',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd932dbeb7a02bb048f05cdb02e2e8f1b6cd4b975' => 
    array (
      0 => 'F:\\webphp\\php-7.2.4\\www\\shichang\\home\\smarty\\templates\\layout.tpl',
      1 => 1541684891,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be43e9e098a28_31007694 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
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
	<link rel="stylesheet" href="css/products.css" />
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
	<header id="header">
		<nav class="navbar st-navbar navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#st-navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
				    	<span class="icon-bar"></span>
				    	<span class="icon-bar"></span>
				    	<span class="icon-bar"></span>
					</button>
					<a class="logo" href="index.html"><img src="images/logo.png" alt=""></a>
					<a href="shopcar.php" class="btn btn-default" style="margin-left:250px;margin-bottom:15px;"><i class="glyphicon glyphicon-shopping-cart"></i>购物车</a>
				</div>
			
				<div class="collapse navbar-collapse" id="st-navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
				    	<li><a href="#header">首页</a></li>
				    	<li><a href="#services">服务</a></li>
				    	<li><a href="#our-team">推荐</a></li>
				    	<li><a href="#our-works">蔬菜</a></li>
				    	<li><a href="#pricing">小常识</a></li>
				    	<li><a href="#contact">联系</a></li>
				    	<li><a href="blog.html">个人中心</a></li>
				    	<li><a href="login.php">登录</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container -->
		</nav>
	</header>
	<!-- /HEADER -->


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20223542825be43e9e094ba0_67821679', "main");
?>

	
	<!-- SERVICES -->
	<section id="services">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h1>服务</h1>
						<span class="st-border"></span>
					</div>
				</div>

				<div class="col-md-4 col-sm-6 st-service">
					<h2><i class="glyphicon glyphicon-question-sign"></i> 新手上路</h2>
					<ul>
						<li>售后流程</li>
						<li>购物流程</li>
						<li>订购方式</li>
					</ul>
					
				</div>

				<div class="col-md-4 col-sm-6 st-service">
					<h2><i class="glyphicon glyphicon-search"></i> 手机常识</h2>
					<ul>
						<li>如何分辨原装电池</li>
						<li>如何分辨水货手机</li>
						<li>如何享受全国联保</li>
					</ul>
				</div>

				<div class="col-md-4 col-sm-6 st-service">
					<h2><i class="glyphicon glyphicon-yen"></i> 配送支付</h2>
					<ul>
						<li>货到付款区域</li>
						<li>配送支付智能查询</li>
						<li>支付方式说明</li>
					</ul>
				</div>

				<div class="col-md-4 col-sm-6 st-service">
					<h2><i class="glyphicon glyphicon-user"></i> 会员中心</h2>
					<ul>
						<li>资金管理</li>
						<li>我的收藏</li>
						<li>我的订单</li>
					</ul>
				</div>

				<div class="col-md-4 col-sm-6 st-service">
					<h2><i class="glyphicon glyphicon-ok-circle"></i> 服务保证</h2>
					<ul>
						<li>退货原则</li>
						<li>售后服务保证</li>
						<li>产品质量保证</li>
					</ul>
				</div>

				<div class="col-md-4 col-sm-6 st-service">
					<h2><i class="glyphicon glyphicon-phone-alt"></i> 联系我们</h2>
					<ul>
						<li>网站故障报告</li>
						<li>选机咨询</li>
						<li>投诉与建议</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- /SERVICES -->

	
	<!-- CONTACT -->
<!-- 	<section id="contact"> -->
<!-- 		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h1>联系我们</h1>
						<span class="st-border"></span>
					</div>
				</div>
				<div class="col-sm-4 contact-info">
					<p class="st-address"><i class="fa fa-map-marker"></i> <strong>中山市博爱7路</strong></p>
					<p class="st-phone"><i class="fa fa-mobile"></i> <strong>+00 123-456-789</strong></p>
					<p class="st-email"><i class="fa fa-envelope-o"></i> <strong>email@yourdomain.com</strong></p>
					<p class="st-website"><i class="fa fa-globe"></i> <strong>www.yourdomain.com</strong></p>
				
				</div>
				<div class="col-sm-7 col-sm-offset-1">
					<form action="php/send-contact.php" class="contact-form" name="contact-form" method="post">
						<div class="row">
							<div class="col-sm-6">
								<input type="text" name="name" required="required" placeholder="Name*">
							</div>
							<div class="col-sm-6">
								<input type="email" name="email" required="required" placeholder="Email*">
							</div>
							<div class="col-sm-6">
								<input type="text" name="subject" placeholder="Subject">
							</div>
							<div class="col-sm-6">
								<input type="text" name="website" placeholder="Website">
							</div>
							<div class="col-sm-12">
								<textarea name="message" required="required" cols="30" rows="7" placeholder="Message*"></textarea>
							</div>
							<div class="col-sm-12">
								<input type="submit" name="submit" value="Send Message" class="btn btn-send">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section> -->
	<!-- /CONTACT -->

	<!-- FOOTER -->
	<footer id="footer">
		<div class="container">
			<div class="row">
				<!-- SOCIAL ICONS -->
				<div class="col-sm-6 col-sm-push-6 footer-social-icons">
					<span>Follow us:</span>
					<a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a>
					<a href=""><i class="fa fa-google-plus"></i></a>
					<a href=""><i class="fa fa-pinterest-p"></i></a>
				</div>
				<!-- /SOCIAL ICONS -->
				<div class="col-sm-6 col-sm-pull-6 copyright">
					<p>Copyright &copy; 2018.DengTongYe.<a target="_blank" href="http://www.tongye.com/">www.tongye.com</a></p>
				</div>
			</div>
		</div>
	</footer>
	<!-- /FOOTER -->


	<!-- Scroll-up -->
	<div class="scroll-up">
		<ul><li><a href="#header"><i class="fa fa-angle-up"></i></a></li></ul>
	</div>

	
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
/* {block "main"} */
class Block_20223542825be43e9e094ba0_67821679 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "main"} */
}
