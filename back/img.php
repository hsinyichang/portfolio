
<style>
    *{
        box-sizing: border-box;
    }
    .photo{
        border: 2px solid orange;
        width: 60%;
        margin: auto;
    }
    .photodiv{
        width: 100%;
        margin: auto;
        text-align: center;
    }
    h2{
        text-align: center;
        margin-top: 1rem;
    }
    .photoli{
        display: flex;
        width: 80%;
        margin: 3rem auto;
        font-weight: bolder;
        color: black;
        text-align: center;
    }
    .photoli input{
        margin: auto;
    }
    .header{
        background-color: #FFE2BE;
    font-weight: bolder;
    font-size: large;
    }
    .button div{
        margin: auto;
    }
    .button input{
        background-color: #F7D8B3;
        border: 1px solid #FF8961;
        border-radius: 20px;
        box-shadow: 1px 1px 6px #F7D8B3;
        margin-left: 10px;
        margin-top: 5px;
    }
</style>

<h2>頭像</h2>
<form action="./api/add.php" method="post" enctype="multipart/form-data">
    <div class="photo">
    <div class="photodiv"><input type="file" name="img"></div>
    <div class="photodiv"><input type="submit" value="新增"></div>
    <input type="hidden" name="table" value="r_<?=$do?>">
    <input type="hidden" name="table1" value="<?=$do?>">
    </div>
</form>

<form action="./api/edit.php" method="post">
    <li class="photoli header">
        <div style="width: 10%;">序號</div>
        <div style="width: 40%;">圖片名稱</div>
        <div style="width: 30%;">圖像</div>
        <div style="width: 10%;">顯示</div>
        <div style="width: 10%;">刪除</div>
        
        <input type="hidden" name="table" value="r_<?=$do?>">
        <input type="hidden" name="table1" value="<?=$do?>">
    </li>
    <?php
    $rows=$Img->all();
    foreach($rows as $key=>$row){
    ?>
    <li class="photoli">
        <div style="width: 10%;"><?=$key+1?></div>
        <div style="width: 40%;"><?=$row['img'];?></div>
        <div style="width: 30%;"><img src="./assets/img/<?=$row['img'];?>"  style="width:80px;heigh:80px;"></div>
        <div style="width: 10%;"><input type="radio" name="sh" value="<?=$row['id']?>" <?=($row['sh']==1)?'checked':'';?>></div>
        <div style="width: 10%;"><input type="checkbox" name="del[]" value="<?=$row['id']?>"></div>
        <input type="hidden" name="id[]" value="<?=$row['id']?>"><!--要加一個隱藏的id[]-->
        
        <input type="hidden" name="table" value="r_<?=$do?>">
        <input type="hidden" name="table1" value="<?=$do?>">
    </li>
    <?php
    }
    ?>
    <li class="photoli button">
        <div>
            <input type="submit" value="修改完成">
        </div>
    </li>
</form>