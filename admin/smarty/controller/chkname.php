<?php
/** 0 3 2 1**/
session_start();
include_once '../model/mysql.class.php';
$helper = new helper();
$reback ='0';
$sql = "select * from user where name='" .$_GET['name']. "'";
if(!empty($_GET['pass']))
{
	$sql.="and pass ='".md5($_GET['pass'])."'";
}
$rst =$helper->dql($sql) ;
if($rst!=null)
{
    if($rst[0]['isfreeze']!=0)
    {
    	$reback='3'; 
    }else {
    	$_SESSION['root']=$rst[0]['name'];
    	$_SESSION['id']=$rst[0]['id'];
    	$reback=2;
    }
}
else $reback=1;
echo  $reback;

?>