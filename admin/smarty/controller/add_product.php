<?php
session_start();
include_once '../model/mysql.class.php';
$helper = new helper();
$data["name"]=$_POST['name'];
$data["price"]=$_POST['price'];
$data["num"]=$_POST['num'];
$data["cid"]=$_POST['cid'];
$file=$_FILES['image'];

  $allow_upload_ext = ['gif', 'jpg', 'jpeg', 'bmp', 'png', 'wbmp'];
  if($file['type']=="image/jpeg"||$file['type']=="image/png")
  {
    $arr=pathinfo($file['name']);
    $ext=$arr['extension'];
    if(in_array($ext, $allow_upload_ext))
    {
    	$path=$_SERVER['DOCUMENT_ROOT'].'/shichang/admin/upload/';
        $filepath='/shichang/admin/upload/';
            if( move_uploaded_file($file["tmp_name"],$path.time().$file['name']))
            {
                $img=$filepath.time().$file['name'];
            }
            $data['img']=$img;
           if($res==1)
            echo "<script>alert('商品修改成功'); window.location.href='../index.php';</script>";
          else echo "<script>alert('商品修改失败'); window.location.href='../index.php';</script>"; 
     }
      else echo "<script>alert('商品修改失败'); window.location.href='../index.php';</script>";
  }
else{
  echo "<script>alert('商品修改失败'); window.location.href='../index.php';</script>";
}
?>
 