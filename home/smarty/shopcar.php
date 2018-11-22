<?php
include_once 'config/smarty_ini.php';
include_once 'model/mysql.class.php';
session_start();
if(isset($_SESSION['member']))
{
	$helper=new helper();
$sql1="select id,shopping from user where id =".$_SESSION['id'];
$rst=$helper->dql($sql1);
if($rst[0]['shopping']==null)
{
 echo "<p>";
 echo "<script>alert('购物车里暂时没有商品');</script>";
 echo "<script>location.href='index.php'</script>";
 echo "</p>";
 exit();
}
$tmparr[0]=$rst[0]['shopping'];
$commarr=array();
 $str="";
foreach($tmparr as $value)
{
	$tmpnum=explode('@',$value);
	$sum=0;
	foreach ($tmpnum as $key=> $value) {
		$s_commo=explode(',', $value);
		$sql2="select id,name,price,img from shop";
		$commsql=$sql2." where id = ".$s_commo[0];
		$commrst=$helper->dql($commsql);
		$arr=$commrst;
		$commarr[$key]=$arr[0];
		$str.=$s_commo[0].",";
	}
}
	$smarty->assign('commarr',$commarr);//购物车的商品
	$smarty->assign('tittle','我的购物车');
    
   
    $str1=rtrim($str,',');
  $smarty->assign('str',$str1);
	$smarty->display('shopcar.tpl');	
}
else{
$smarty->display('login.tpl');	
}
	
?>