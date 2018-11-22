<?php
/* Smarty version 3.1.30, created on 2018-11-12 23:54:41
  from "F:\webphp\php-7.2.4\www\shichang\admin\smarty\templates\product.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5be9a2418ab0f8_37578553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1286ef5ad9eadc3e5186c5e3aa50eeeb4399d9be' => 
    array (
      0 => 'F:\\webphp\\php-7.2.4\\www\\shichang\\admin\\smarty\\templates\\product.tpl',
      1 => 1542038077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5be9a2418ab0f8_37578553 (Smarty_Internal_Template $_smarty_tpl) {
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

    <title>Basic Table | Creative - Bootstrap 3 Responsive Admin Template</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

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


      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-table"></i>货物管理</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-table"></i>货物管理</li>
						<li><i class="fa fa-th-list"></i>货物管理</li>
					</ol>
				</div>
			</div>
              <!-- page start-->
              
              
             
               
             
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              管理货物
                          </header>
                          
                          <table class="table table-hover">
                            <thead>
                              <tr class="active">
                                <th>#</th>
                                <th>图片</th>
                                <th>菜名</th>
                                <th>单价</th>
                                <th>数量</th>
                                <th>状态</th>
                                <th width="280">操作</th>
                              </tr>
                            </thead>
                            <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>                         
                              <tr <?php if ((1 & $_smarty_tpl->tpl_vars['k']->value)) {?>class="success"<?php } else { ?>class="warning"<?php }?>>
                                <td>1</td>
                                <td><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['img'];?>
" alt="" style="width:74px;height:58px"></td>
                                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['num'];?>
</td>
                                <td><?php if ($_smarty_tpl->tpl_vars['v']->value['status'] == 0) {?>下架<?php } else { ?>在售<?php }?></td>
                                <td>
                                  <div class="btn-group text-c">
                                      <a class="btn btn-primary" href="edit.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><i class="icon_plus_alt2">编辑</i></a>
                                      <a class="btn btn-success" href="controller/status.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
&status=1"><i class="icon_check_alt2">上架</i></a>
                                      <a class="btn btn-danger" href="controller/status.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
&status=0"><i class="icon_close_alt2">取消</i></a>
                                  </div>
                                  </td>
                              </tr>  
                              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
                            
                             <!--  <tr class="warning">
                                <td>2</td>
                                <td><img src="img/2.jpg" alt=""></td>
                                <td>洋葱</td>
                                <td>6</td>
                                <td>8</td>
                                <td>
                                  <div class="btn-group text-c">
                                      <a class="btn btn-primary" href="#"><i class="icon_plus_alt2">编辑</i></a>
                                      <a class="btn btn-success" href="#"><i class="icon_check_alt2">上架</i></a>
                                      <a class="btn btn-danger" href="#"><i class="icon_close_alt2">取消</i></a>
                                  </div>
                                </td>
                              </tr>                              
                              <tr class="danger">
                                <td>3</td>
                                <td><img src="img/3.jpg" alt=""></td>
                                <td>姜</td>
                                <td>6.5</td>
                                <td>11</td>
                                <td>
                                  <div class="btn-group text-c">
                                      <a class="btn btn-primary" href="#"><i class="icon_plus_alt2">编辑</i></a>
                                      <a class="btn btn-success" href="#"><i class="icon_check_alt2">上架</i></a>
                                      <a class="btn btn-danger" href="#"><i class="icon_close_alt2">取消</i></a>
                                  </div>
                                  </td>
                              </tr>
                              <tr class="default">
                                <td>4</td>
                                <td><img src="img/4.jpg" alt=""></td>
                                <td>芋头</td>
                                <td>7</td>
                                <td>9</td>
                                <td>
                                  <div class="btn-group text-c">
                                      <a class="btn btn-primary" href="#"><i class="icon_plus_alt2">编辑</i></a>
                                      <a class="btn btn-success" href="#"><i class="icon_check_alt2">上架</i></a>
                                      <a class="btn btn-danger" href="#"><i class="icon_close_alt2">取消</i></a>
                                  </div>
                                  </td>
                              </tr>  
                              
                              </tr>     -->
                            </tbody>
                          </table
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->
    <!-- javascripts -->
    <?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <!-- nicescroll -->
    <?php echo '<script'; ?>
 src="js/jquery.scrollTo.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/jquery.nicescroll.js" type="text/javascript"><?php echo '</script'; ?>
>
    <!--custome script for all page-->
    <?php echo '<script'; ?>
 src="js/scripts.js"><?php echo '</script'; ?>
>


  </body>
</html>
<?php }
}
