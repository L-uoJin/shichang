<?php
include_once 'config/smarty_ini.php';
include_once 'model/mysql.class.php';
session_start();
$helper=new helper();
if(isset($_SESSION['root']))
{
	$sql="select * from shop";
	$res=$helper->dql($sql);
	$smarty->assign('product',$res);
	$smarty->display('product.tpl');
}
else{
	$smarty->display('login.tpl');
}

?>