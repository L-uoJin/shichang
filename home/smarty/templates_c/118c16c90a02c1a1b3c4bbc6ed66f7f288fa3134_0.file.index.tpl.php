<?php
/* Smarty version 3.1.30, created on 2018-11-12 21:41:16
  from "F:\webphp\php-7.2.4\www\shichang\home\smarty\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5be982fc6d8379_05293511',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '118c16c90a02c1a1b3c4bbc6ed66f7f288fa3134' => 
    array (
      0 => 'F:\\webphp\\php-7.2.4\\www\\shichang\\home\\smarty\\templates\\index.tpl',
      1 => 1542030073,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:top.tpl' => 1,
    'file:bottom.tpl' => 1,
  ),
),false)) {
function content_5be982fc6d8379_05293511 (Smarty_Internal_Template $_smarty_tpl) {
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
	<link rel="stylesheet" href="css/responsive.css" />

	
	<!-- Favicon -->
	<link rel="shortcut icon" href="/shichang/images/icon/favicon.png">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/shichang/images/icon/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/shichang/images/icon/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/shichang/images/icon/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="/shichang/images/icon/apple-touch-icon-57-precomposed.png">
	
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


	<!-- SLIDER -->
	<section id="slider">
		<div id="home-carousel" class="carousel slide" data-ride="carousel">			
			<div class="carousel-inner">
				<div class="item active" style="background-image: url(/shichang/images/slider/1.jpg)">
					<div class="carousel-caption container">
						<div class="row">
							<div class="col-sm-7">
								<h1>欢迎来到</h1>
								<h2>CS 市场</h2>
								<h4>Convenient Services</h4>
								<p>这是一个便民的网购市场网站</p>
							</div>
						</div>
					</div>					
				</div>
				<div class="item" style="background-image: url(/shichang/images/slider/2.jpg)">
					<div class="carousel-caption container">
						<div class="row">
							<div class="col-sm-7">
								<h1>欢迎来到</h1>
								<h2>CS 市场</h2>
								<p>这是一个便民的网购市场网站</p>
							</div>
						</div>
					</div>					
				</div>
				<div class="item" style="background-image: url(/shichang/images/slider/3.jpg)">
					<div class="carousel-caption container">
						<div class="row">
							<div class="col-sm-7">
								<h1>欢迎来到</h1>
								<h2>CS 市场</h2>
								<p>这是一个便民的网购市场网站</p>
							</div>
						</div>
					</div>					
				</div>
				<div class="item" style="background-image: url(/shichang/images/slider/4.jpg)">
					<div class="carousel-caption container">
						<div class="row">
							<div class="col-sm-7">
								<h1>欢迎来到</h1>
								<h2>CS 市场</h2>
								<p>这是一个便民的网购市场网站</p>
							</div>
						</div>
					</div>					
				</div>
				<a class="home-carousel-left" href="#home-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
				<a class="home-carousel-right" href="#home-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
			</div>		
		</div> <!--/#home-carousel--> 
    </section>
	<!-- /SLIDER -->

	
	

	<!-- RECOMMEND -->
	<section id="our-team">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h1>推荐菜式</h1>
						<span class="st-border"></span>
					</div>
				</div>
               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recommend']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
				<div class="col-md-3 col-sm-6 h270">
					<div class="team-member">
						<div class="member-image">
							<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['img'];?>
" alt="">
							<div class="member-social">
								<a href=""><i class="glyphicon glyphicon-shopping-cart"></i></a>
								<a href=""><i class="glyphicon glyphicon-eye-open"></i></a>
							</div>
						</div>
						<div class="member-info">
							<h4><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</h4>
							<span><i class="glyphicon glyphicon-thumbs-up"></i><?php echo $_smarty_tpl->tpl_vars['item']->value['zan'];?>
</span>
						</div>
					</div>
				</div>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</div>
		</div>
	</section>
	<!-- /RECOMMEND  -->

	<!-- VEGETABLE -->
	<section id="our-works">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h1>新鲜蔬菜</h1>
						<span class="st-border"></span>
						<form class="navbar-form navbar-right">
				        <div class="form-group">
				          <input type="text" class="form-control" placeholder="请输入菜名">
				        </div>
				        <button type="submit" class="btn btn-default">搜索</button>
      				</form>
					</div>
				</div>

				<div class="portfolio-wrapper" >
					<div class="col-md-12">
						<ul class="filter">  			
							<li><a class="active" href="#" data-filter="*">全部</a></li>	
							<li><a href="#" data-filter=".leaf"><?php echo $_smarty_tpl->tpl_vars['cate']->value[0]['cname'];?>
</a></li>
							<li><a href="#" data-filter=".root"><?php echo $_smarty_tpl->tpl_vars['cate']->value[1]['cname'];?>
</a></li>
							<li><a href="#" data-filter=".melon"><?php echo $_smarty_tpl->tpl_vars['cate']->value[2]['cname'];?>
</a></li>
							<li><a href="#" data-filter=".bean"><?php echo $_smarty_tpl->tpl_vars['cate']->value[3]['cname'];?>
</a></li>
							<li><a href="#" data-filter=".mushroom"><?php echo $_smarty_tpl->tpl_vars['cate']->value[4]['cname'];?>
</a></li>
							<li><a href="#" data-filter=".eggplant"><?php echo $_smarty_tpl->tpl_vars['cate']->value[5]['cname'];?>
</a></li>
						</ul><!--/#portfolio-filter-->

					</div>
					<div class="portfolio-items">	
					<!--豆类-->		
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data4']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
						<div class="col-md-2 col-sm-6 work-grid bean">
							<div class="portfolio-content">
								<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['img'];?>
" alt="">
								<div class="portfolio-overlay">								
									<a href="describe.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><i class="glyphicon glyphicon-shopping-cart"></i></a><h5 style="float:right;">￥<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
<p><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</p></h5>			
								</div>
							</div>	
						</div>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

						<!--瓜类-->		
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data3']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
						<div class="col-md-2 col-sm-6 work-grid  melon">
							<div class="portfolio-content">
								<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['img'];?>
" alt="">
								<div class="portfolio-overlay">
									<a href="describe.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><i class="glyphicon glyphicon-shopping-cart"></i></a><h5 style="float:right;">￥<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
<p><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</p></h5>
									
								</div>
							</div>	
						</div>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

						<!--菜类-->	
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data1']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>	
						<div class="col-md-2 col-sm-6 work-grid leaf">
							<div class="portfolio-content">
								<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['img'];?>
" alt="">
								<div class="portfolio-overlay">
									<a href="describe.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><i class="glyphicon glyphicon-shopping-cart"></i></a><h5 style="float:right;">￥<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
<p><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</p></h5>
								</div>
							</div>	
						</div>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

								<!--根茎类-->	
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data2']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
						<div class="col-md-2 col-sm-6 work-grid  root">
							<div class="portfolio-content">
								<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['img'];?>
" alt="">
								<div class="portfolio-overlay">
									<a href="describe.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><i class="glyphicon glyphicon-shopping-cart"></i></a><h5 style="float:right;">￥<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
<p><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</p></h5>
									
								</div>
							</div>	
						 </div>
						 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

						 <!--菌类-->	
						 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data5']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
						<div class="col-md-2 col-sm-6 work-grid mushroom">
							<div class="portfolio-content">
								<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['img'];?>
" alt="">
								<div class="portfolio-overlay">
									<a href="describe.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><i class="glyphicon glyphicon-shopping-cart"></i></a><h5 style="float:right;">￥<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
<p><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</p></h5>
									
								</div>
							</div>	
						</div>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

						 <!--茄果类-->	
						 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data6']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
						<div class="col-md-2 col-sm-6 work-grid eggplant">
							<div class="portfolio-content">
							<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['img'];?>
" alt="">
								<div class="portfolio-overlay">
									<a href="describe.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><i class="glyphicon glyphicon-shopping-cart"></i></a><h5 style="float:right;">￥<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
<p><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</p></h5>
								</div>	
							</div>
						</div>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					</div>				
				</div>
			</div>
		</div>
	</section>
	<!-- /VEGETABLE  -->

	
	<!-- PRICING -->
	<section id="pricing">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h1>小常识</h1>
						<span class="st-border"></span>
					</div>
				</div>

				<div class="col-sm-4">
					<div class="st-pricing text-center">		
						<h3>10种蔬菜的养生功效</h3>
						<div class="st-border"></div>
						<ul>
							<li>菠菜</li>
							<li>菠菜含有大量的植物粗纤维，</li>
							<li>具有促进肠道蠕动的作用</li>
							<li>利于排便，且能促进胰腺分泌</li>
							<li>帮助消化</li>
							<li>菠菜对于痔疮、慢性胰腺炎、便秘</li>
							<li>和肛裂等病症有治疗作用</li>
						</ul>
						<a href="detail.php?id=1" class="btn btn-send">详情</a>
					</div>
				</div>

				<div class="col-sm-4">
					<div class="st-pricing text-center">
						<h3>12种错误的菜肴搭配</h3>			
						<div class="st-border"></div>
						<ul>
							<li>土豆烧牛肉：</li>
							<li>由于土豆和牛肉在被消化时</li>
							<li>所需的胃酸的浓度不同，</li>
							<li>就势必延长食物在胃中的滞留时间，</li>
							<li>从而引起胃肠消化吸收时间的延长，</li>
							<li>久而久之，</li>
							<li>必然导致肠胃功能的紊乱。</li>
						</ul>
						<a href="detail.php?id=2" class="btn btn-send">详情</a>
					</div>
				</div>

				

				<div class="col-sm-4">
					<div class="st-pricing text-center">
						<h3>25条选蔬菜小常识</h3>
						<div class="st-border"></div>
						<ul>
							<li>如何选购冬笋</li>
							<li>当你在选购冬笋的时候，</li>
							<li>发现其孙壳张开翘起，</li>
							<li>还有一股硫磺气味，</li>
							<li>那么表明它可能硫磺熏过的。</li>
							<li>如果是新鲜的冬笋，</li>
							<li>它的壳包的很紧。</li>
						</ul>
						<a href="detail.php?id=3" class="btn btn-send">详情</a>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- /PRICING -->


	

	<!-- ABOUT US -->
	<section id="about-us">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6">
					<div class="about-us text-center">
						<h3>蔬菜</h3>
						<p>蔬菜是指可以做菜、烹饪成为食品的一类植物或菌类，蔬菜是人们日常饮食中必不可少的食物之一。蔬菜可提供人体所必需的多种维生素和矿物质等营养物质。据国际物质粮农组织1990年统计，人体必需的VC的90%、VA的60%来自蔬菜。此外，蔬菜中还有多种多样的植物化学物质，是人们公认的对健康有效的成分，目前果蔬中的营养素可以有效预防慢性、退行性疾病的多种物质，正在被人们研究发现。</p>
						<a href="" class="btn btn-send">更多</a>
					</div>
				</div>
				<div class="col-sm-6 our-office">
					<div id="office-carousel" class="carousel slide" data-ride="carousel">			
						<div class="carousel-inner">
							<div class="item active">
								<img src="/shichang/images/office/1.jpg" alt="">
							</div>
							<div class="item">
								<img src="/shichang/images/office/2.jpg" alt="">			
							</div>
							<div class="item">
								<img src="/shichang/images/office/3.jpg" alt="">			
							</div>
							
							<a class="office-carousel-left" href="#office-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
							<a class="office-carousel-right" href="#office-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
						</div>		
					</div> <!--/#office-carousel--> 
				</div>
			</div>
		</div>
	</section>
	<!-- /ABOUT US -->
	
	<!-- TESTIMONIAL -->
	<section id="testimonial">
		<div class="container">
			<div class="row">
				<div class="overlay"></div>
				<div class="col-md-8 col-md-offset-2 col-sm-12">
					<div class="st-testimonials">

						<div class="item active text-center">
							<h4>韭菜炒鸡蛋、椒油炝拌莴笋、鸡汁春笋、松仁菠菜卷、芦蒿炒肉丝、香椿焖蛋、清炒草头、豆干丁拌马兰头</h4>
							<div class="st-border"></div>
							<div class="client-info">
								<h3>春季时令菜</h3>
							</div>
						</div>

						<div class="item text-center">
							<p>南瓜粉蒸排骨、蒜蓉空心菜、红椒肉片炒扁豆、茭白炒毛豆、河虾丝瓜、黄豆冬瓜煲猪脚、肉末豇豆、土豆焖豆角</p>
							<div class="st-border"></div>
							<div class="client-info">
								<h3>夏季时令菜</h3>
							</div>
						</div>

						<div class="item text-center">
							<p>虾丁炒时蔬、鲜藕排骨清汤、腊八豆蒸山药、鱼香豆角荚、彩椒培根炒秋葵、茄汁菜花、口蘑卷心菜、鱼香茄子</p>
							<div class="st-border"></div>
							<div class="client-info">
								<h3>秋季时令菜</h3>
							</div>
						</div>

						<div class="item text-center">
							<p>麻辣肉丝、醋溜白菜、板栗排骨、山药萝卜粥、杏仁西芹炒虾仁、腊肠蒸南瓜、熏干拌芹丁、清炒番薯丝、茶树菇核桃炒小肉</p>
							<div class="st-border"></div>
							<div class="client-info">
								<h3>冬季时令菜</h3>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /TESTIMONIAL -->



	<!-- FUN FACTS -->
	<section id="fun-facts">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-3">
					<div class="fun-fact text-center">
						<h3><i class="fa fa-thumbs-o-up"></i> <span class="st-counter">666</span></h3>
						<p>Happy Clients</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="fun-fact text-center">
						<h3><i class="fa fa-briefcase fa-6"></i> <span class="st-counter">73987</span></h3>
						<p>Completed Shopping</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="fun-fact text-center">
						<h3><i class="glyphicon glyphicon-eye-open"></i> <span class="st-counter">297345</span></h3>
						<p>Have a Look</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="fun-fact text-center">
						<h3><i class="fa fa-code"></i> <span class="st-counter">9823686</span></h3>
						<p>Lines of History</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /FUN FACTS -->
	
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
	<section id="contact">
		<div class="container">
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
	</section>
	<!-- /CONTACT -->

	<!-- FOOTER -->
    <?php $_smarty_tpl->_subTemplateRender("file:bottom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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

</body>
</html><?php }
}
