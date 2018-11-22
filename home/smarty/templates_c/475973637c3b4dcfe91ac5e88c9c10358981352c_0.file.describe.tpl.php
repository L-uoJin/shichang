<?php
/* Smarty version 3.1.30, created on 2018-11-11 17:41:45
  from "F:\webphp\php-7.2.4\www\shichang\home\smarty\templates\describe.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5be7f9592d9304_65658797',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '475973637c3b4dcfe91ac5e88c9c10358981352c' => 
    array (
      0 => 'F:\\webphp\\php-7.2.4\\www\\shichang\\home\\smarty\\templates\\describe.tpl',
      1 => 1541929302,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:top.tpl' => 1,
    'file:bottom.tpl' => 1,
  ),
),false)) {
function content_5be7f9592d9304_65658797 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<title><?php echo $_smarty_tpl->tpl_vars['tittle']->value;?>
</title>
	
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
	<?php $_smarty_tpl->_subTemplateRender("file:top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
							<a href="#"><?php echo $_smarty_tpl->tpl_vars['cate']->value;?>
</a>
							<i class="glyphicon glyphicon-menu-right"></i>
							<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>

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
							  	<img src="<?php echo $_smarty_tpl->tpl_vars['product']->value['img'];?>
">
							  	 <!-- 滑块   -->
							    <div class="magnifyingBegin"></div>
							    <!-- 放大镜显示的图片 -->
							    <div class="magnifyingShow"><img src="<?php echo $_smarty_tpl->tpl_vars['product']->value['img'];?>
"></div>
							</div>
							  
							<ul class="con-FangDa-ImgList">
							    <!-- 图片显示列表 -->
							    <li class="active"><img src="<?php echo $_smarty_tpl->tpl_vars['product']->value['img'];?>
" data-bigimg="<?php echo $_smarty_tpl->tpl_vars['product']->value['img'];?>
"></li>
							    <li><img src="<?php echo $_smarty_tpl->tpl_vars['product']->value['img'];?>
" data-bigimg="<?php echo $_smarty_tpl->tpl_vars['product']->value['img'];?>
"></li>
							    <li><img src="<?php echo $_smarty_tpl->tpl_vars['product']->value['img'];?>
" data-bigimg="<?php echo $_smarty_tpl->tpl_vars['product']->value['img'];?>
"></li>
							    <li><img src="<?php echo $_smarty_tpl->tpl_vars['product']->value['img'];?>
" data-bigimg="<?php echo $_smarty_tpl->tpl_vars['product']->value['img'];?>
"></li>
							  
							</ul>
						</div>
						<div class="cart-right">
							<div>
								<h2><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</h2>
								<h3>￥<?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</h3>
								<div class="center_add_left">
									<!-- <a href="javascript:;" onclick="buyNumber.minus()">
										<img src="images/jian.gif" alt="">
									</a> -->
									<!-- <input name="number" type="text" value="1" defaultnumber="1" onblur="changePrice()" id="product_num"> -->
									<!-- <a href="javascript:;" onclick="buyNumber.plus()">
										<img src="images/jia.gif" alt="">
									</a> -->
								</div>
								<p style="font-size:18px;">库存：<?php echo $_smarty_tpl->tpl_vars['product']->value['num'];?>
</p>
								<button type="button" class="btn btn-send"
								 onclick="return buycommo(<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
)">加入购物车</button>
							</div>	
						</div>
					</div>
				</div>
				<?php echo '<script'; ?>
>
                       
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
                            <?php echo '</script'; ?>
>
			</div>
		</div>
	</section>
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
 type="text/javascript" src="js/jquery.colorbox-min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/zzsc.js"><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
>
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
	<?php echo '</script'; ?>
>
</body>
</html><?php }
}
