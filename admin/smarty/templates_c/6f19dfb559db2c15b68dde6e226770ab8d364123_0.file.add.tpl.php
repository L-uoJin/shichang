<?php
/* Smarty version 3.1.30, created on 2018-11-12 22:46:39
  from "F:\webphp\php-7.2.4\www\shichang\admin\smarty\templates\add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5be9924f0ee009_96848767',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f19dfb559db2c15b68dde6e226770ab8d364123' => 
    array (
      0 => 'F:\\webphp\\php-7.2.4\\www\\shichang\\admin\\smarty\\templates\\add.tpl',
      1 => 1542033991,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5be9924f0ee009_96848767 (Smarty_Internal_Template $_smarty_tpl) {
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

    <title>cs后台</title> 

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
<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <!--sidebar end-->

      <!-- form  start-->
       <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> 添加货物</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_document_alt"></i>货物管理</li>
						<li><i class="fa fa-file-text-o"></i>添加货物</li>
					</ol>
				</div>
			</div>
              
              <!-- Basic Forms -->
              
              <div class="row">
                  <div class="col-lg-6">
                      <section class="panel">
                          <header class="panel-heading">
                              货物添加
                          </header>
                          <div class="panel-body">
                              <form role="form"  action="controller/add_product.php" method="post"    enctype="multipart/form-data">
                                  <div class="form-group">
                                      <label for="exampleInputName1">菜名</label>
                                      <input type="text" class="form-control" id="exampleInputName1" placeholder="name" name="name">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputPrice1">价格</label>
                                      <input type="text" class="form-control" id="exampleInputPrice1" placeholder="price" name="price">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputNumber1">数量</label>
                                      <input type="text" class="form-control" id="exampleInputNumber1" placeholder="number" name="num">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputFile">上传图片</label>
                                      <input type="file" id="exampleInputFile"  name="image"  multiple="multiple">
                                      <div></div>
                                      
                                  </div>
                                  <div class="form-group"> 
                                  		<label for="exampleInputKinds1">种类</label>
                                  		<select class="form-control m-bot15" name="cid">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cate']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</option>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                             <!--  <option>叶菜类</option>
                                              <option>根茎类</option>
                                              <option>瓜类</option>
                                              <option>豆类</option>
                                              <option>菌类</option>
                                              <option>茄果类</option> -->
                                  		</select>
                                  </div>
                                  
                                  <button type="submit" class="btn btn-primary">发布</button>
                              </form>

                          </div>
                      </section>
                  </div>
                  
              </div>
              
          </section>
      </section>
      <!--main content end-->
      <!-- form end -->
	</section>

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
</html><?php }
}
