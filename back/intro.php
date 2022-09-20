<style>
    *{
        box-sizing: border-box;
    }
    .intro_li{
        display: flex;
    }
    .intro_div{
        width: 60%;
        margin: 2rem auto;
    }
    .intro_div div{
        text-align: center;
        margin-bottom: 1rem;
    }
    h2{
        text-align: center;
        margin-top: 1rem;
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

<h2>自我介紹</h2>
<div class="intro_div">
    <form action="./api/edit.php" method="post">
        <li class="intro_li header">
            <div style="width: 10%;">序號</div>
            <div style="width: 35%;">標題</div>
            <div style="width: 55%;">內容</div>
        </li>
        <?php
        $rows=$Intro->all();
        foreach($rows as $key=>$row){
        ?>
        <li class="intro_li">
            <div style="width: 10%;"><?=$key+1?></div>
            <div style="width: 35%;"><input type="text" name="title" value="<?=$row['title'];?>"></div>
            <div style="width: 55%;"><textarea name="content" cols="30" rows="6"><?=$row['content'];?></textarea></div>
        </li>
        <input type="hidden" name="id" value="<?=$row['id']?>"><!--要加一個隱藏的id[]-->
        <?php
        }
        ?>
        <div class="button">
            <div>
                <input type="submit" value="修改確定" style="margin:auto">
                <input type="hidden" name="table" value="r_<?=$do?>">
                <input type="hidden" name="table1" value="<?=$do?>">
            </div>
        </div>
    </form>
</div>