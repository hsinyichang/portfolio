<?php
include_once "../base.php";
$DB=new DB($_POST['table']);

if(!empty($_POST['id'])){
    foreach($_POST['id'] as $idx=>$id){
        if(isset($_POST['del']) && in_array($id,$_POST['del'])){
            $DB->del($id);
        }else{
            $row=$DB->find($id);
            
            switch($_POST['table']){
                case 'r_footer':
                    $row['footer']=$_POST['footer'][$idx]; //要加上key 才知道傳送的是第幾筆
                    $row['sh']=(isset($_POST['sh']) && $_POST['sh']==$id)?1:0;
                break;
                case "r_img":
                    $row['sh']=(isset($_POST['sh']) && $_POST['sh']==$id)?1:0;                
                break;
                case 'r_admin':
                    $row['acc']=$_POST['acc'][$idx];
                    $row['pw']=$_POST['pw'][$idx];
                
            }

            $DB->save($row);
        }
    }
}

to("../back.php?do={$_POST['table1']}");
