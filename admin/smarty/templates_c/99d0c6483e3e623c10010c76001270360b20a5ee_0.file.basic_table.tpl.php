<?php
/* Smarty version 3.1.30, created on 2018-11-17 12:15:16
  from "F:\webphp\php-7.2.4\www\shichang\admin\smarty\templates\basic_table.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bef95d41e7a74_34790265',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99d0c6483e3e623c10010c76001270360b20a5ee' => 
    array (
      0 => 'F:\\webphp\\php-7.2.4\\www\\shichang\\admin\\smarty\\templates\\basic_table.tpl',
      1 => 1542428113,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5bef95d41e7a74_34790265 (Smarty_Internal_Template $_smarty_tpl) {
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
					<h3 class="page-header"><i class="fa fa-table"></i>订单处理</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-table"></i>订单处理</li>
						<li><i class="fa fa-th-list"></i>订单处理</li>
					</ol>
				</div>
			</div>
              <!-- page start-->
              
              
             
               
             
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              待处理订单
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 <th width="50px"> 姓名</th>
                                 <th width="80px"><i class="icon_calendar"></i> 日期</th>
                               
                                 <th width="130px"><i class="glyphicon glyphicon-font"></i> 订单详情</th>
                                 <th width="80px">邮箱</th>
                                 <th width="50px"><i class="icon_pin_alt"></i> 地址</th>
                                 <th width="80px"><i class="icon_mobile"></i> 号码</th>
                                    <!-- <th><i class="icon_mail_alt"></i> 邮箱</th> -->
                                 
                                 <th width="90px"><i class="icon_cogs"></i> 操作</th>
                              </tr>
                               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dingdan']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>  
                              <tr>
                                 <td><?php echo $_smarty_tpl->tpl_vars['item']->value['own'];?>
</td>
                                 <td><?php echo $_smarty_tpl->tpl_vars['item']->value['formtime'];?>
</td>
                                 
                                 <td>价格：￥<?php echo $_smarty_tpl->tpl_vars['item']->value['priceTotal'];?>
，数量：<?php echo $_smarty_tpl->tpl_vars['item']->value['num'][0];?>
个，<?php echo $_smarty_tpl->tpl_vars['item']->value['pay_method'];?>
。备注:<?php if ($_smarty_tpl->tpl_vars['item']->value['beizhu'] == '') {?>无<?php } else {
echo $_smarty_tpl->tpl_vars['item']->value['beizhu'];
}?></td>
                                 <td><?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>
</td>
                                 <td><?php echo $_smarty_tpl->tpl_vars['item']->value['address'];?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['item']->value['tel'];?>
</td>
                                 
                                 <td>
                                  <div class="btn-group">
                                  <?php if ($_smarty_tpl->tpl_vars['item']->value['state'] == 0) {?>
                                      <a class="btn btn-primary" href="controller/fahuo.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><i class="icon_plus_alt2"></i>发货</a>
                                      <?php } else { ?>
                                    <i class="icon_close_alt2">已发货
                                    <?php }?>
                                  <!--     <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                      <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a> -->
                                  </div>
                                  </td>
                              </tr>
                                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
                   
                           </tbody>
                        </table>
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
