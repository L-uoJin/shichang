<?php
include_once 'config/smarty_ini.php';
include_once 'model/mysql.class.php';
session_start();
if(isset($_SESSION['member']))
{
$helper=new helper();
$name=$_POST["name"];
$data['own']=$_POST["own"];
$data['tel']=$_POST["tel"];
$data['email']=$_POST["email"];
$data['address']=$_POST["address"];
$data['beizhu']=$_POST["desc"];
$data['commo_id']=$_POST["str"];
$data['commo_num']=$_POST["str1"];
$data['pay_method']=$_POST["pay_method"];
$data['priceTotal']=$_POST["priceTotal"];
$data['formid']=time().rand(0,100);
$commo_id=explode(",", $data['commo_id']);
$data['commo_name']="";
foreach ($commo_id as $key => $value) {
	$sql="select name from shop where id=".$value;
	$res=$helper->dql($sql);
    $data['commo_name'].=$res[0]['name'].",";
}
 $data['commo_name']=trim($data['commo_name'],",");
$table="form";
$result=$helper->insert_dml($table,$data);
if($result==1)
{
$sql2="update user set shopping='' where name='".$name."'";
$result1=$helper->exectue_dml($sql2);
	echo "<script>alert('成功购买'); location.href='index.php'</script>";
	// $smarty->display('index.tpl');
}
else{
	echo "<script>alert('购买失败');location.href='index.php'</script>";
	// $smarty->display('index.tpl');
}
}
else{
	$smarty->display('login.tpl');
}
?>