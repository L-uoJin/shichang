<?php
include_once 'config/smarty_ini.php';
include_once 'model/mysql.class.php';
session_start();
$helper=new helper();
if(isset($_SESSION['root']))
{
	$id=$_GET['id'];
    $sql="select * from shop where id=".$id;
	$res=$helper->dql($sql);
	$smarty->assign("product",$res[0]);
	$sql1="select * from cate";
	$res1=$helper->dql($sql1);
	$smarty->assign("cate",$res1);
	$smarty->display('edit.tpl');
}
else{
	$smarty->display('login.tpl');
}

?>