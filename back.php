<?php
include_once "base.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Resume - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="./assets/css/back.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">後台管理</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="./assets/img/<?=$Img->find(['sh'=>1])['img']?>" alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="?do=contact">留言區</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="?do=footer">頁尾版權</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="?do=img">頭像</a></li>
                    <?php
                    if(!isset($_SESSION['admin'])){
                    ?>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="?do=login">登入</a></li>
                    <?php
                    }else{
                    ?>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="./api/logout.php">登出</a></li>   
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <?php
                if(!isset($_SESSION['admin'])){
                    include './back/login.php';
                }else{
                $do=$_GET['do']??'contact';
                $file='./back/'.$do.'.php';
                if(file_exists($file)){
                    include $file;
                }else{
                    include './back/contact.php';
                }
            }
            ?>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="./assets/js/scripts.js"></script>
    </body>
</html>
