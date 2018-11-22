<?php
include_once 'config/smarty_ini.php';
include_once 'model/mysql.class.php';
$sql="select * from recommend";
$helper=new helper();
$res=$helper->dql($sql);
$sql1="select * from cate";
$res1=$helper->dql($sql1);
$sql2="select * from shop where cid=".$res1[0]['id']." and status=1";
$data1=$helper->dql($sql2);

$sql3="select * from shop where cid=".$res1[1]['id']." and status=1";
$data2=$helper->dql($sql3);

$sql4="select * from shop where cid=".$res1[2]['id']." and status=1";
$data3=$helper->dql($sql4);

$sql5="select * from shop where cid=".$res1[3]['id']." and status=1";
$data4=$helper->dql($sql5);

$sql6="select * from shop where cid=".$res1[4]['id']." and status=1";
$data5=$helper->dql($sql6);

$sql7="select * from shop where cid=".$res1[5]['id']." and status=1";
$data6=$helper->dql($sql7);

$smarty->assign('recommend',$res);
$smarty->assign('cate',$res1);
$smarty->assign('data1',$data1);
$smarty->assign('data2',$data2);
$smarty->assign('data3',$data3);
$smarty->assign('data4',$data4);
$smarty->assign('data5',$data5);
$smarty->assign('data6',$data6);
$smarty->display('index.tpl');
?>