<?php
//檢查帳密是否正確

include_once "../base.php";
$acc=$_POST['acc'];
$pw=$_POST['pw'];

/* if($acc==資料表中的acc && $pw==資料表中的pw){
    //登入成功->會員中心
}else{
    //登入失敗->回到登入頁->顯示錯誤訊息
}
 */

// $sql="SELECT count(*) FROM `r_admin` WHERE `acc`='$acc' && `pw`='$pw'";

//$user=$pdo->query($sql)->fetch();
$chk=$Admin->math('count','id',['acc'=>$acc, 'pw'=>$pw]);

//if($acc==$user['acc'] && $pw==$user['pw']){
if($chk>0){
    $_SESSION['admin']=1;//存入帳號到session
    to("../back.php");
}else{
    to("../back.php?do=login&error=帳號或密碼錯誤");
}
?>