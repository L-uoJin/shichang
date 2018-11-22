<?php
include_once 'config/smarty_ini.php';
include_once 'model/mysql.class.php';
session_start();
if(isset($_SESSION['member']))
{
	$str=$_GET['str'];
	$str1=$_GET['str1'];
	$priceTotal=$_GET['priceTotal'];
	$smarty->assign('str',$str);
	$smarty->assign('str1',$str1);
	$smarty->assign('priceTotal',$priceTotal);
	$smarty->assign('name',$_SESSION['member']);
$smarty->display('order.tpl');
}else{
$smarty->display('login.tpl');
}
?>