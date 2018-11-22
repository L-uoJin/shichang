<?php
include_once '../model/mysql.class.php';
$helper = new helper();
$sql="update shop set  status=".$_GET['status']." where id=".$_GET['id'];
$res=$helper->exectue_dml($sql);
if($res==1)
echo "<script>alert('商品上架成功'); window.location.href='../index.php';</script>";
else{
	echo "<script>alert('商品上架失败'); window.location.href='../index.php';</script>";
}
?>