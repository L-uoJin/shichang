<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<title>{$tittle}</title>
	
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

	<!-- SERVICES -->
	<section id="services">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h3>
							<a href="index.html">首页</a>
							<i class="glyphicon glyphicon-menu-right"></i>
							<a href="#">{$cate}</a>
							<i class="glyphicon glyphicon-menu-right"></i>
							{$product['name']}
						</h3>
						<span class="st-border"></span>
						<form class="navbar-form navbar-right">
				        <div class="form-group">
				          <input type="text" class="form-control" placeholder="请输入菜名">
				        </div>
				        <button type="submit" class="btn btn-default">搜索</button>
      				</form>
					</div>
				</div>

				<div>
					<div class="cart clearfix">
						<!-- <div class="left_pic con-FangDa" id="fangdajing">
							<div id="box con-fangDaIMg">
								<img src="images/works/eggplant/3.jpg" alt="" class="img">
								滑块  
    							<div class="magnifyingBegin"></div>
    							放大镜显示的图片
    							<div class="magnifyingShow"><img src="images/works/eggplant/3.jpg"></div>
							</div>
							<i class="glyphicon glyphicon-menu-left left"></i>
							<ul class="img_list con-FangDa-ImgList">
								<li class="active"><img src="images/works/eggplant/3-1.jpg" data-bigimg="images/works/eggplant/3.jpg" alt=""></li>
								<li><img src="images/works/eggplant/3-1.jpg" data-bigimg="images/works/eggplant/3.jpg" alt=""></li>
								<li><img src="images/works/eggplant/3-1.jpg" data-bigimg="images/works/eggplant/3.jpg" alt=""></li>
								<li><img src="images/works/eggplant/3-1.jpg" data-bigimg="images/works/eggplant/3.jpg" alt=""></li>		
							</ul>
							<i class="glyphicon glyphicon-menu-right"></i>
						</div> -->
						<div class="con-FangDa" id="fangdajing">
							<div class="con-fangDaIMg">
								 <!-- 正常显示的图片 -->
							  	<img src="{$product['img']}">
							  	 <!-- 滑块   -->
							    <div class="magnifyingBegin"></div>
							    <!-- 放大镜显示的图片 -->
							    <div class="magnifyingShow"><img src="{$product['img']}"></div>
							</div>
							  
							<ul class="con-FangDa-ImgList">
							    <!-- 图片显示列表 -->
							    <li class="active"><img src="{$product['img']}" data-bigimg="{$product['img']}"></li>
							    <li><img src="{$product['img']}" data-bigimg="{$product['img']}"></li>
							    <li><img src="{$product['img']}" data-bigimg="{$product['img']}"></li>
							    <li><img src="{$product['img']}" data-bigimg="{$product['img']}"></li>
							  
							</ul>
						</div>
						<div class="cart-right">
							<div>
								<h2>{$product['name']}</h2>
								<h3>￥{$product['price']}</h3>
								<div class="center_add_left">
									<!-- <a href="javascript:;" onclick="buyNumber.minus()">
										<img src="images/jian.gif" alt="">
									</a> -->
									<!-- <input name="number" type="text" value="1" defaultnumber="1" onblur="changePrice()" id="product_num"> -->
									<!-- <a href="javascript:;" onclick="buyNumber.plus()">
										<img src="images/jia.gif" alt="">
									</a> -->
								</div>
								<p style="font-size:18px;">库存：{$product['num']}</p>
								<button type="button" class="btn btn-send"
								 onclick="return buycommo({$product.id})">加入购物车</button>
							</div>	
						</div>
					</div>
				</div>
				<script>
                       
                                // add by liuguichun 2011-7-19
                                var buyNumber = {
                                    maxNumber : 100,
                                    minNumber : 1,
                                    defaultNumber : function(){
                                        var defaultnumber = $('#product_num').attr('defaultnumber');
                                        defaultnumber = parseInt(defaultnumber)
                                        if(defaultnumber < 1){
                                            defaultnumber = 1;
                                        }
                                        return defaultnumber;
                                    },
                                                                                                                                    
                                    goodNumber : function(num){
                                        if(typeof(num) == 'number'){
                                            return $('#product_num').val(num);
                                        }else{
                                            return parseInt($('#product_num').val());
                                        }
                                                                                                                                        
                                    },
                                    plus : function(){
                                        var num = buyNumber.goodNumber() + buyNumber.defaultNumber();
                                        if(num <= buyNumber.maxNumber){
                                            buyNumber.goodNumber(num);
                                        }
                                    },
                                    minus : function(){
                                        var num = buyNumber.goodNumber() - buyNumber.defaultNumber();
                                        if(num >= buyNumber.minNumber){
                                            buyNumber.goodNumber(num);
                                        }
                                    }
                                                                                                                                    
                                }
                            </script>
			</div>
		</div>
	</section>
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
	<script type="text/javascript" src="js/jquery.colorbox-min.js"></script>
	<script type="text/javascript" src="js/zzsc.js"></script>

	<script>
       function buycommo(id)
 	   {
 	   	$.ajax({
	      	url:"controller/chklogin.php?key="+id,
	            type: "GET",
	            dataType: "json",
	            success: function (msg) {
	               if(msg==2)
					{
						alert(msg);
						alert("请先登录");
						return false;
					}
					else if(msg==3)
					{
						alert('该商品已添加');
						location='index.php';
						return false;
					}
					else{
						alert('该商品成功添加');
						location='index.php';
					}
	            },
	            error: function () {
	                alert("连接失败");
	                return false;
	            }
	        });
     }
	</script>
</body>
</html>