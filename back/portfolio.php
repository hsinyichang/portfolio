<style>
    h2{
        text-align: center;
        margin-top: 1rem;
    }
    .addport{
        border: 2px solid orange;
        width: 60%;
        margin: auto;
    }
    .addport tr td:first-child{
        text-align: right;
    }
    .button{
        width: 50%;
        margin: auto;
        text-align: center;
        margin-top: 5px;
    }
    .button button{
        border: 2px solid orange;
        border-radius: 20px;
        box-shadow: 1px 1px 6px #F7D8B3;
    }
    .portfolio{
        display: flex;
        width: 80%;
        margin: 3rem auto;
        font-weight: bolder;
        color: black;
        text-align: center;
    }
    .portfolio div{
        width: 100%;
        margin: auto;
        text-align: center;
    }
    .header{
        background-color: #FFE2BE;
        font-weight: bolder;
        font-size: large;
    }
    .portfolioli{
        display: flex;
        width: 80%;
        margin: 3rem auto;
        font-weight: bolder;
        color: black;
        text-align: center;
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
    .button div button{
        background-color: #F7D8B3;
        border: 1px solid #FF8961;
        border-radius: 20px;
        box-shadow: 1px 1px 6px #F7D8B3;
        margin-left: 10px;
        margin-top: 5px;
    }
</style>

<h2>作品集管理</h2>

<form action="./api/add_port.php" method="post" enctype="multipart/form-data">
<table class="addport">
<tr>
    <td>分類：</td>
    <td><select name="type">
            <option value="PHP">PHP</option>
            <option value="HTML">HTML</option>
            <option value="PS">PS</option>
            <option value="AI">AI</option>
        </select>
    </td>
</tr>
<tr>
    <td>上傳圖片：</td>
    <td><input type="file" name="img"></td>
</tr>
<tr>
    <td>資料夾連結名稱：</td>
    <td><input type="text" name="href"></td>
</tr>
<tr>
    <td>標題：</td>
    <td><input type="text" name="title"></td>
</tr>
</table>
<input type="hidden" name="table" value="r_<?=$do?>">
<input type="hidden" name="table1" value="<?=$do?>">
<div class="button"><div><button type="submit">新增作品</button></div></div>
</form>

<form action="./api/edit.php" method="post">
    <li class="portfolio header">
        <div style="width: 8%;">序號</div>
        <div style="width: 19%;">圖片</div>
        <div style="width: 19%;">連結</div>
        <div style="width: 19%;">標題</div>
        <div style="width: 19%;">分類</div>
        <div style="width: 8%;">顯示</div>
        <div style="width: 8%;">刪除</div>
        
        <input type="hidden" name="table" value="r_<?=$do?>">
        <input type="hidden" name="table1" value="<?=$do?>">
    </li>
    <?php
    $rows=$Port->all();
    foreach($rows as $key=>$row){
    ?>
    <li class="portfolioli">
        <div style="width: 8%;"><?=$key+1?></div>
        <div style="width: 19%;"><img src="./assets/img/portfolio/<?=$row['img'];?>"  style="width:80px;heigh:80px;"></div>
        <div style="width: 19%;"><input type="text" name="href[]" value="<?=$row['href']?>" style="width: 132px;margin-right:5px"></div>
        <div style="width: 19%;"><input type="text" name="title[]" value="<?=$row['title']?>" style="width: 140px;"></div>
        <div style="width: 19%;"><input type="text" name="type[]" value="<?=$row['type']?>" style="width: 140px;"></div>
        <div style="width: 8%;"><input type="checkbox" name="sh[]" value="<?=$row['id']?>" <?=($row['sh']==1)?'checked':'';?>></div>
        <div style="width: 8%;"><input type="checkbox" name="del[]" value="<?=$row['id']?>"></div>
        <input type="hidden" name="id[]" value="<?=$row['id']?>"><!--要加一個隱藏的id[]-->
        
        <input type="hidden" name="table" value="r_<?=$do?>">
        <input type="hidden" name="table1" value="<?=$do?>">
    </li>
    <?php
    }
    ?>
    <li class="portfolioli button">
        <div>
            <input type="submit" value="修改完成">
        </div>
    </li>
</form>