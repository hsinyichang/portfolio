<?php
//檢查帳密是否正確

include_once "../base.php";
session_start();
$acc=$_POST['acc'];
$pw=base64_encode($_POST['pw']);//編碼過的

/* if($acc==資料表中的acc && $pw==資料表中的pw){
    //登入成功->會員中心
}else{
    //登入失敗->回到登入頁->顯示錯誤訊息
}
 */

$sql="SELECT count(*) FROM `users` WHERE `acc`='$acc' && `pw`='$pw'";

//$user=$pdo->query($sql)->fetch();
$chk=$pdo->query($sql)->fetchColumn();

//if($acc==$user['acc'] && $pw==$user['pw']){
if($chk){
    $_SESSION['user']=$acc;//存入帳號到session
    header("location:../index.php");
}else{
    header("location:../index.php?do=login&error=帳號或密碼錯誤");
}
?>