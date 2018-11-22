<?php
session_start();
include_once '../model/mysql.class.php';
$helper = new helper();
$id=$_GET['id'];
$sql="update form set state=1 where id=".$id;
$res=$helper->exectue_dml($sql);
if($res==1)
{
	echo "<script>alert('订单已发货'); window.location.href='../index.php';</script>";
}
else{
	echo "<script>alert('未知错误'); window.location.href='../index.php';</script>";
}
?>
