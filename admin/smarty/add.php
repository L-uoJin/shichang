<?php
include_once 'config/smarty_ini.php';
include_once 'model/mysql.class.php';
session_start();
$helper=new helper();
if(isset($_SESSION['root']))
{
	$sql="select * from cate";
	$res=$helper->dql($sql);
	$smarty->assign("cate",$res);
	$smarty->display('add.tpl');
}
else{
	$smarty->display('login.tpl');
}

?>