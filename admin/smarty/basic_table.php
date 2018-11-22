<?php
include_once 'config/smarty_ini.php';
include_once 'model/mysql.class.php';
session_start();
$helper=new helper();
if(isset($_SESSION['root']))
{
	$sql="select * from form where state=0";
	$form=$helper->dql($sql);
	
	$sum=0;
	
	foreach ($form as $key => $value) {
		$form[$key]['num']=array();
		$num=$value['commo_num'];
		$count=explode(",", $num);
		foreach ($count as $k => $v) {
			(int)$sum+=(int)$v;
		}
		array_push($form[$key]['num'],$sum);
	}
	$smarty->assign('dingdan',$form);

	$smarty->display('basic_table.tpl');
}
else{
	$smarty->display('login.tpl');
}

?>