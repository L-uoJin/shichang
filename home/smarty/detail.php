<?php
include_once 'config/smarty_ini.php';
include_once 'model/mysql.class.php';
session_start();
if(isset($_SESSION['member']))
{
	$id=$_GET['id'];
	if($id==1)
	{
		$path="text/1.txt";
		if(file_exists($path))
		{
		 $con=file_get_contents($path);
		 $con =str_replace("\r\n","<br />",$con);
		$smarty->assign("context",$con);
		$smarty->display('detail.tpl');
		}
		else
		{
			$smarty->display('index.tpl');
		}
	}
	else if($id==2)
	{
		$path2="text/2.txt";
		if(file_exists($path2))
		{
		 $con2=file_get_contents($path2);
		 $con2 =str_replace("\r\n","<br />",$con2);
		$smarty->assign("context",$con2);
		$smarty->display('detail2.tpl');
		}
		else
		{
			//$smarty->display('index.tpl');
			echo "<script>location.href='index.php'</script>";
		}
	}
	else if($id==3)
	{
		$path="text/3.txt";
		if(file_exists($path))
		{
         $handle=fopen($path, "r");
        $con= fread($handle, filesize($path));
        fclose($handle);
		$smarty->assign("context",$con);
		$smarty->display('detail3.tpl');
		}
		else
		{
			echo "<script>location.href='index.php'</script>";
		}
	}
	
}
else{
	$smarty->display('login.tpl');
}