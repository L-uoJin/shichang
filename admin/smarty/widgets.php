<?php
include_once 'config/smarty_ini.php';
include_once 'model/mysql.class.php';
session_start();
$helper=new helper();
if(isset($_SESSION['root']))
{
	$smarty->display('widgets.tpl');
}
else{
	$smarty->display('login.tpl');
}

?>