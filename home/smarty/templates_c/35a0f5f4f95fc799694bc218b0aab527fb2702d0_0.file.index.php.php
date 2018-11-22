<?php
/* Smarty version 3.1.30, created on 2018-11-11 10:49:26
  from "F:\webphp\php-7.2.4\www\shichang\home\smarty\index.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5be798b604e803_68414769',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35a0f5f4f95fc799694bc218b0aab527fb2702d0' => 
    array (
      0 => 'F:\\webphp\\php-7.2.4\\www\\shichang\\home\\smarty\\index.php',
      1 => 1541468410,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be798b604e803_68414769 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
';?>include_once 'config/smarty_ini.php';
include_once 'model/mysql.class.php';
$sql="select * from recommend";
$helper=new helper();
$res=$helper->dql($sql);
$sql1="select * from cate";
$res1=$helper->dql($sql1);
$sql2="select * from shop where cid=".$res1[0]['id'];
$data1=$helper->dql($sql2);

$sql3="select * from shop where cid=".$res1[1]['id'];
$data2=$helper->dql($sql3);

$sql4="select * from shop where cid=".$res1[2]['id'];
$data3=$helper->dql($sql4);

$sql5="select * from shop where cid=".$res1[3]['id'];
$data4=$helper->dql($sql5);

$sql6="select * from shop where cid=".$res1[4]['id'];
$data5=$helper->dql($sql6);

$sql7="select * from shop where cid=".$res1[5]['id'];
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
<?php echo '?>';
}
}
