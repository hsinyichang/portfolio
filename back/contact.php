<style>
    *{
        box-sizing: border-box;
    }
.contactDiv{
    width: 92%;
    margin: 2rem auto;

}
.contactLi{
    display: flex;
    text-align: center;
    min-width: max-content;
}
.contactLi div{
    overflow-wrap: break-word; 
    padding-bottom: 1.5rem;
}
h2{
    text-align: center;
    margin-top: 1rem;
}
.liheader{
    background-color: #FFE2BE;
    font-weight: bolder;
    font-size: large;
}
.li:hover{
    background-color: rgba(252, 243, 232, 0.5);
    transform: scale(1.01);
    box-shadow: 1px 1px 8px #F7D8B3;
}
.button div{
    margin: 20px auto;
}
.button div input{
    background-color: #F7D8B3;
    border: 1px solid #FF8961;
    border-radius: 20px;
    box-shadow: 1px 1px 6px #F7D8B3;
    margin-left: 10px;
}
.li{
    border-bottom: 1px solid #eee;
}
</style>
<?php
include_once "base.php";
?>
<h2>留言區</h2>
<div class="contactDiv">
    <form action="./api/edit.php" method="post">
        <li class="contactLi liheader">
            <div style="width: 5%;">序號</div>
            <div style="width: 18%;">姓名</div>
            <div style="width: 18%;">email</div>
            <div style="width: 18%;">留言主題</div>
            <div style="width: 18%;">留言內容</div>
            <div style="width: 18%;">留言時間</div>
            <div style="width: 5%;">刪除</div>
            
        </li>

        <?php
        $rows=$Contact->all("order by date");
        foreach($rows as $key=>$row){
        ?>
        <li class="contactLi li">
            <div style="width: 5%;"><?=$key+1?></div>
            <div style="width: 19%;"><?=$row['name']?></div>
            <div style="width: 19%;"><?=$row['email']?></div>
            <div style="width: 19%;"><?=$row['sub']?></div>
            <div style="width: 19%;"><?=$row['message']?></div>
            <div style="width: 19%;"><?=$row['date']?></div>
            <div style="width: 5%;"><input type="checkbox" name="del[]" value="<?=$row['id']?>"></div>
            <input type="hidden" name="id[]" value="<?=$row['id']?>"><!--要加一個隱藏的id[]-->
        </li>
        <?php
        }
        ?>
        <li class="contactLi button">
            <div><input type="submit" value="修改確定">
            <input type="reset" value="重置"></div>
            <input type="hidden" name="table" value="r_<?=$do?>">
            <input type="hidden" name="table1" value="<?=$do?>">
        </li>
    </form>
</div>