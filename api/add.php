<?php
include_once "../base.php";
$DB=new DB($_POST['table']);

$data=[];

if(isset($_FILES['img']['tmp_name'])){
    move_uploaded_file($_FILES['img']['tmp_name'],"../assets/img/".$_FILES['img']['name']);
    $data['img']=$_FILES['img']['name'];
}

if(isset($_POST['text'])){
    $data['text']=$_POST['text'];
}

switch($_POST['table']){
    case 'r_footer':
        $data['footer']=$_POST['footer'];
    break;
    case 'r_admin':
        $data['acc']=$_POST['acc'];
        $data['pw']=$_POST['pw'];
    break;
    case 'menu':
        $data['text']=$_POST['text'];
        $data['href']=$_POST['href'];
        $data['sh']=1;
    break;
    default:
        $data['sh']=0;

}

$DB->save($data);

to("../back.php?do={$_POST['table1']}");

?>