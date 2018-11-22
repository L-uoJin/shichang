<?php
/* Smarty version 3.1.30, created on 2018-11-12 21:27:01
  from "F:\webphp\php-7.2.4\www\shichang\admin\smarty\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5be97fa5a93fd1_55405489',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9bb07e41217a29b39918545cff1e96a61dbef53' => 
    array (
      0 => 'F:\\webphp\\php-7.2.4\\www\\shichang\\admin\\smarty\\templates\\index.tpl',
      1 => 1542027913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5be97fa5a93fd1_55405489 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Creative - Bootstrap Admin Template</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
	<link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
	<link rel="stylesheet" href="css/fullcalendar.css">
	<link href="css/widgets.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
	<link href="css/xcharts.min.css" rel=" stylesheet">	
	<link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="js/html5shiv.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="js/respond.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="js/lte-ie7.js"><?php echo '</script'; ?>
>
    <![endif]-->
  </head>

  <body>
  <!-- container section start -->
  <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <!--sidebar end-->
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i>我的菜铺</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-laptop"></i>我的菜铺</li>						  	
					</ol>
				</div>
			</div>
              
            <div class="row">
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="info-box blue-bg">
						<i class="fa fa-cloud-download"></i>
						<div class="count">174</div>
						<div class="title">订单</div>						
					</div><!--/.info-box-->			
				</div><!--/.col-->
				
				<div class="col-lg-3 col-md-31col-sm-12 col-xs-12">
					<div class="info-box brown-bg">
						<i class="fa fa-shopping-cart"></i>
						<div class="count">88</div>
						<div class="title">购买</div>						
					</div><!--/.info-box-->			
				</div><!--/.col-->	
				
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="info-box dark-bg">
						<i class="fa fa-thumbs-o-up"></i>
						<div class="count">262</div>
						<div class="title">好评</div>						
					</div><!--/.info-box-->			
				</div><!--/.col-->
				
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="info-box green-bg">
						<i class="glyphicon glyphicon-envelope"></i>
						<div class="count">126</div>
						<div class="title">评价</div>						
					</div><!--/.info-box-->			
				</div><!--/.col-->
				
                
			</div><!--/.row-->
            <div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >免费网站模板</a></div>
		
			
           <div class="row">
		    <div class="col-lg-9 col-md-12">
					
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2><i class="fa fa-map-marker red"></i><strong>地区</strong></h2>
							<div class="panel-actions">
								<a href="index.php#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
								<a href="index.php#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
								<a href="index.php#" class="btn-close"><i class="fa fa-times"></i></a>
							</div>	
						</div>
						<div class="panel-body-map">
							<div id="map" style="height:380px;"></div>	
						</div>
	
					</div>
				</div>
              <div class="col-md-3">
              <!-- List starts -->
				<ul class="today-datas">
                <!-- List #1 -->
				<li>
                  <!-- Graph -->
                  <div><span id="todayspark1" class="spark"></span></div>
                  <!-- Text -->
                  <div class="datas-text">500 访客/天</div>
                </li>
                <li>
                  <div><span id="todayspark2" class="spark"></span></div>
                  <div class="datas-text">1000 访问页次</div>
                </li>
                <li>
                  <div><span id="todayspark3" class="spark"></span></div>
                  <div class="datas-text">30.55% 订单率</div>
                </li>
                <li>
                  <div><span id="todayspark4" class="spark"></span></div>
                  <div class="datas-text">16,00 每日收入</div>
                </li> 
                <li>
                  <div><span id="todayspark5" class="spark"></span></div>
                  <div class="datas-text">15,000 每月访客</div>
                </li>                                                                                                              
              </ul>
              </div>   	 
           </div>  
            
            				
        <!-- project team & activity start -->
		<div class="row">
			<div class="col-md-6 portlets">
            <div class="panel panel-default">
				<div class="panel-heading">
                  <h2><strong>日历</strong></h2>
				<div class="panel-actions">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                </div>  
                 
                </div><br><br><br>
                <div class="panel-body">
                  <!-- Widget content -->
                  
                    <!-- Below line produces calendar. I am using FullCalendar plugin. -->
                    <div id="calendar"></div>
                  
                </div>
              </div> 
               
            </div>
			
			<div class="col-md-6 portlets">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="pull-left">小记</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                  <div class="padd">
                    
                      <div class="form quick-post">
                                      <!-- Edit profile form (not working)-->
                                      <form class="form-horizontal">
                                          <!-- Title -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="title">标题</label>
                                            <div class="col-lg-10"> 
                                              <input type="text" class="form-control" id="title">
                                            </div>
                                          </div>   
                                          <!-- Content -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="content">内容</label>
                                            <div class="col-lg-10">
                                              <textarea class="form-control" id="content"></textarea>
                                            </div>
                                          </div>                           
                                          <!-- Cateogry -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-2">类别</label>
                                            <div class="col-lg-10">                               
                                                <select class="form-control">
                                                  <option value="">- 选择类别 -</option>
                                                  <option value="1">普通</option>
                                                  <option value="2">消息</option>
                                                  <option value="3">媒体</option>
                                                  <option value="4">趣事</option>
                                                </select>  
                                            </div>
                                          </div>              
                                          <!-- Tags -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="tags">Tags</label>
                                            <div class="col-lg-10">
                                              <input type="text" class="form-control" id="tags">
                                            </div>
                                          </div>
                                          
                                          <!-- Buttons -->
                                          <div class="form-group">
                                             <!-- Buttons -->
											 <div class="col-lg-offset-2 col-lg-9">
												<button type="submit" class="btn btn-primary">发布</button>
												<button type="submit" class="btn btn-danger">保存草稿</button>
												<button type="reset" class="btn btn-default">重置</button>
											 </div>
                                          </div>
                                      </form>
                                    </div>
                  

                  </div>
                  
                </div>
              </div>
              
            </div>
                        
          </div> 
              <!-- project team & activity end -->

          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->

    <!-- javascripts -->
    <?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/jquery-ui-1.10.4.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"><?php echo '</script'; ?>
>
    <!-- bootstrap -->
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <!-- nice scroll -->
    <?php echo '<script'; ?>
 src="js/jquery.scrollTo.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/jquery.nicescroll.js" type="text/javascript"><?php echo '</script'; ?>
>
    <!-- charts scripts -->
    <?php echo '<script'; ?>
 src="assets/jquery-knob/js/jquery.knob.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/jquery.sparkline.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/owl.carousel.js" ><?php echo '</script'; ?>
>
    <!-- jQuery full calendar -->
    <<?php echo '<script'; ?>
 src="js/fullcalendar.min.js"><?php echo '</script'; ?>
> <!-- Full Google Calendar - Calendar -->
	<?php echo '<script'; ?>
 src="assets/fullcalendar/fullcalendar/fullcalendar.js"><?php echo '</script'; ?>
>
    <!--script for this page only-->
    <?php echo '<script'; ?>
 src="js/calendar-custom.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/jquery.rateit.min.js"><?php echo '</script'; ?>
>
    <!-- custom select -->
    <?php echo '<script'; ?>
 src="js/jquery.customSelect.min.js" ><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="assets/chart-master/Chart.js"><?php echo '</script'; ?>
>
   
    <!--custome script for all page-->
    <?php echo '<script'; ?>
 src="js/scripts.js"><?php echo '</script'; ?>
>
    <!-- custom script for this page-->
    <?php echo '<script'; ?>
 src="js/sparkline-chart.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/easy-pie-chart.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/jquery-jvectormap-1.2.2.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/jquery-jvectormap-world-mill-en.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/xcharts.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/jquery.autosize.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/jquery.placeholder.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/gdp-data.js"><?php echo '</script'; ?>
>	
	<?php echo '<script'; ?>
 src="js/morris.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/sparklines.js"><?php echo '</script'; ?>
>	
	<?php echo '<script'; ?>
 src="js/charts.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/jquery.slimscroll.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
	  
	  /* ---------- Map ---------- */
	$(function(){
	  $('#map').vectorMap({
	    map: 'world_mill_en',
	    series: {
	      regions: [{
	        values: gdpData,
	        scale: ['#000', '#000'],
	        normalizeFunction: 'polynomial'
	      }]
	    },
		backgroundColor: '#eef3f7',
	    onLabelShow: function(e, el, code){
	      el.html(el.html()+' (GDP - '+gdpData[code]+')');
	    }
	  });
	});



  <?php echo '</script'; ?>
>

  </body>
</html>
<?php }
}
