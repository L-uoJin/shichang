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
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
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
	{include file="top.tpl"}
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
						{foreach item=item from=$commarr}
							<tr>
								<td><input type="checkbox" class="check-one check" id="id" value="{$item.id}"></td>
								<td class="goods"><img src="{$item.img}" style="width:100px;" class="img"><span style="margin-left: 10px;"><a href="products.html">{$item.name}</a></span></td>
								<td class="price">{$item.price}</td>
								<td class="count"><span class="reduce"></span><input class="count-input" type="text" value="1"/><span class="add">+</span></td>
								<td class="subtotal">{$item.price}</td>
								<td class="operation"><span class="delete">删除</span></td>
							</tr>
						{/foreach}
						</tbody>
					</table>
					<div>
					<input type="hidden" value="{$str}" id="good">
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
	  {include file="services.tpl"}
	<!-- /SERVICES -->

	<!-- FOOTER -->
	{include file="bottom.tpl"}
	<!-- /FOOTER -->
	<!-- JS -->
	<script type="text/javascript" src="js/jquery.min.js"></script><!-- jQuery -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script><!-- Bootstrap -->
	<script type="text/javascript" src="js/jquery.parallax.js"></script><!-- Parallax -->
	<script type="text/javascript" src="js/smoothscroll.js"></script><!-- Smooth Scroll -->
	<script type="text/javascript" src="js/masonry.pkgd.min.js"></script><!-- masonry -->
	<script type="text/javascript" src="js/jquery.fitvids.js"></script><!-- fitvids -->
	<script type="text/javascript" src="js/owl.carousel.min.js"></script><!-- Owl-Carousel -->
	<script type="text/javascript" src="js/jquery.counterup.min.js"></script><!-- CounterUp -->
	<script type="text/javascript" src="js/waypoints.min.js"></script><!-- CounterUp -->
	<script type="text/javascript" src="js/jquery.isotope.min.js"></script><!-- isotope -->
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script><!-- magnific-popup -->
	<script type="text/javascript" src="js/scripts.js"></script><!-- Scripts -->
	<script type="text/javascript" src="js/demo.js"></script>s
</body>
</html>