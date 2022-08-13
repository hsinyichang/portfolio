<style>
    *{
        box-sizing: border-box;
    }
    .footer_li{
        display: flex;
    }
    .footer_div{
        width: 60%;
        margin: 2rem auto;
    }
    .footer_div div{
        text-align: center;
        margin-bottom: 1rem;
    }
    h2{
        text-align: center;
        margin-top: 1rem;
    }
</style>

<h2>頁尾版權</h2>
<div class="footer_div">
    <form action="./api/add.php" method="post">
        <li class="footer_li">
            <div style="width: 10%;">名稱</div>
            <div style="width: 70%;"><input type="text" name="footer"></div>
            <div style="width: 10%;"><input type="submit" value="新增"></div>
            <input type="hidden" name="table" value="r_<?=$do?>">
            <input type="hidden" name="table1" value="<?=$do?>">
        </li>
    </form>
    <form action="./api/edit.php" method="post">
        <li class="footer_li">
            <div style="width: 10%;">序號</div>
            <div style="width: 70%;">頁尾名稱</div>
            <div style="width: 10%;">顯示</div>
            <div style="width: 10%;">刪除</div>
        </li>
        <?php
        $rows=$Footer->all();
        foreach($rows as $key=>$row){
        ?>
        <li class="footer_li">
            <div style="width: 10%;"><?=$key+1?></div>
            <div style="width: 70%;"><input type="text" name="footer[]" value="<?=$row['footer'];?>"></div>
            <div style="width: 10%;"><input type="radio" name="sh" value="<?=$row['id']?>" <?=($row['sh']==1)?'checked':'';?>></div>
            <div style="width: 10%;"><input type="checkbox" name="del[]" value="<?=$row['id']?>"></div>
        </li>
        <input type="hidden" name="id[]" value="<?=$row['id']?>"><!--要加一個隱藏的id[]-->
        <?php
        }
        ?>
        <li class="footer_li">
        <input type="submit" value="修改確定" style="margin:auto">
        <input type="hidden" name="table" value="r_<?=$do?>">
        <input type="hidden" name="table1" value="<?=$do?>">
        </li>
    </form>
</div>