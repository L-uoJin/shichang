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
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <body>
{include file="header.tpl"}

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
                               {foreach item=item from=$dingdan}  
                              <tr>
                                 <td>{$item.own}</td>
                                 <td>{$item.formtime}</td>
                                 
                                 <td>价格：￥{$item.priceTotal}，数量：{$item.num[0]}个，{$item.pay_method}。备注:{if $item.beizhu eq ''}无{else}{$item.beizhu}{/if}</td>
                                 <td>{$item.email}</td>
                                 <td>{$item.address}</td>
                              <td>{$item.tel}</td>
                                 
                                 <td>
                                  <div class="btn-group">
                                  {if $item.state eq 0}
                                      <a class="btn btn-primary" href="controller/fahuo.php?id={$item.id}"><i class="icon_plus_alt2"></i>发货</a>
                                      {else}
                                    <i class="icon_close_alt2">已发货
                                    {/if}
                                  <!--     <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                      <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a> -->
                                  </div>
                                  </td>
                              </tr>
                                  {/foreach}                   
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
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nicescroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>


  </body>
</html>
