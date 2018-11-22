<?php
include_once 'config/smarty_ini.php';
include_once 'model/mysql.class.php';
session_start();
if(isset($_SESSION['member']))
{
	$id=$_GET['id'];
$sql="select * from shop where id=".$id;
$helper=new helper();
$res=$helper->dql($sql);
$sql1="select cate.cname from cate left join shop on cate.id=shop.cid where shop.id=".$id;
$res1=$helper->dql($sql1);
$smarty->assign('tittle',"商品详情");
$smarty->assign('cate',$res[0]['cname']);
$smarty->assign('product',$res[0]);
$smarty->display('describe.tpl');
}
else{
$smarty->display('login.tpl');	
}
	
?>