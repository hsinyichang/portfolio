<?php
include_once "../base.php";
$DB=new DB($_POST['table']);

$data=[];

if(isset($_FILES['img']['tmp_name'])){   
    move_uploaded_file($_FILES['img']['tmp_name'],"../assets/img/portfolio/".$_FILES['img']['name']);
    $data['img']=$_FILES['img']['name'];
}


switch($_POST['table']){
    case 'r_portfolio':
        $data['type']=$_POST['type'];
        $data['href']=$_POST['href'];
        $data['title']=$_POST['title'];
    break;
    default:
        $data['sh']=1;

}

$DB->save($data);

to("../back.php?do={$_POST['table1']}");

?>