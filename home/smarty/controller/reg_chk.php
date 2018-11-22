<?php
session_start();
include_once '../model/mysql.class.php';
$helper = new helper();
$reback =1;
$name = $_GET['name'];
$password =md5($_GET['pass']);
$email = $_GET['email'];
$sql= "insert  into user(name,pass,email) ";
$sql.="values ('$name','$password','$email')";
$sql1="select * from user where name='".$name."'";
$res=$helper->dql($sql1);
if($res==null){
	$rst= $helper->exectue_dml($sql);
	if($rst!=1)
	{
		$reback =3;
	echo  $reback;
	}
	else 
	{
		$_SESSION['member']=$name;
		$_SESSION['id'] =$helper->insert_id();
		$reback =2;
	echo  $reback;
	}
}
else echo  $reback;

?>