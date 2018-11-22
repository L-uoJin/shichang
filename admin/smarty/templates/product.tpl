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
                                {foreach $product as $k=>$v}                         
                              <tr {if $k is odd }class="success"{else}class="warning"{/if}>
                                <td>1</td>
                                <td><img src="{$v.img}" alt="" style="width:74px;height:58px"></td>
                                <td>{$v.name}</td>
                                <td>{$v.price}</td>
                                <td>{$v.num}</td>
                                <td>{if $v.status eq 0}下架{else}在售{/if}</td>
                                <td>
                                  <div class="btn-group text-c">
                                      <a class="btn btn-primary" href="edit.php?id={$v.id}"><i class="icon_plus_alt2">编辑</i></a>
                                      <a class="btn btn-success" href="controller/status.php?id={$v.id}&status=1"><i class="icon_check_alt2">上架</i></a>
                                      <a class="btn btn-danger" href="controller/status.php?id={$v.id}&status=0"><i class="icon_close_alt2">取消</i></a>
                                  </div>
                                  </td>
                              </tr>  
                              {/foreach}                            
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
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nicescroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>


  </body>
</html>
