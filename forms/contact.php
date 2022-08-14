<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php

date_default_timezone_set("Asia/Taipei");

$dsn="mysql:host=localhost;charset=utf8;dbname=resume";
$pdo=new PDO($dsn,'root','');

$name=$_POST['name'];
$email=$_POST['email'];
$sub=$_POST['sub'];
$message=$_POST['message'];

$sql="INSERT INTO `r_contact` (`name`,`email`,`sub`,`message`)
                  values('{$_POST['name']}','{$_POST['email']}','{$_POST['sub']}','{$_POST['message']}');";

$pdo->exec($sql);

header('location:../index.php');
?>

