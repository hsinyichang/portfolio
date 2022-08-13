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
    padding-bottom: 0.5rem;
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
    transform: scale(1.05);
    box-shadow: 1px 1px 8px #F7D8B3;
}
</style>
<?php
include_once "base.php";
?>
<h2>留言區</h2>
<div class="contactDiv">
        <li class="contactLi liheader">
            <div style="width: 5%;">序號</div>
            <div style="width: 19%;">姓名</div>
            <div style="width: 19%;">email</div>
            <div style="width: 19%;">留言主題</div>
            <div style="width: 19%;">留言內容</div>
            <div style="width: 19%;">留言時間</div>
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
        </li>
        <?php
        }
        ?>
</div>