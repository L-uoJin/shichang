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
						      <span style="color:#383838;font-weight:900">￥{$priceTotal}</span>
						      <input type="hidden" value="{$priceTotal}"  id="priceTotal" name="priceTotal">
						       <input type="hidden" value="{$name}"  id="name" name="name">
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
						      <input type="hidden" name="str" value="{$str}">
						      <input type="hidden" name="str1" value="{$str1}">
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

	<script>
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
	</script>
</body>
</html>