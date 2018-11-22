<?php
	include_once '../model/mysql.class.php';
	$reback=0;
	$helper =new  helper();
	session_start();
	$rd=$_GET['id'];
 	$sql="select id,shopping from user where id=".$_SESSION['id'];
	$srt =$helper->dql($sql);
	$shopcont=$srt[0]['shopping'];//转为一维数组
	if(!empty($shopcont))
	{
		$arr1=explode('@', $shopcont);//分割成新数组
		$rd=explode(',', $rd);//分割成新数组
		foreach ($rd as  $rdvalue) {
		foreach ($arr1 as $key=> $value) {
	      if($rdvalue==substr($value,0,strpos($value,',')) )
	      {
	      	unset($arr1[$key]);
	      	break;
	      }
		}
	}
	$addshop='';
	$arr=array_values($arr1);

		foreach ($arr as $key => $value) {
			for($i=0;$i<strlen($value);$i++)
			{
				$addshop.=$value[$i];
			}
		   $addshop.='@';
		}
		$addshop=trim($addshop,"@");
		$table="user";
		$id=$_SESSION['id'];
		$updatesql="update ".$table." set shopping ='".$addshop."'where id =".$_SESSION['id'];
		$updaterst=$helper->exectue_dml($updatesql);
		if($updaterst!=1)
		{
			$reback=2;
		}
		else{
			$reback=1;
		}
   }
  
echo $reback;
?>