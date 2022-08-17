<?php
include_once "base.php";
$admin=$Admin->all();
?>

<style>
    h2{
        text-align: center;
        margin-top: 1rem;
    }
    .liheader{
        background-color: #FFE2BE;
        font-weight: bolder;
        font-size: large;
    }
    .adminli{
        display: flex;
        text-align: center;
        min-width: max-content;
    }
    .admindiv{
        width: 40%;
        margin: 2rem auto;
    }
    .button div{
        margin: auto;

    }
    .button div input{
        background-color: #F7D8B3;
        border: 1px solid #FF8961;
        border-radius: 20px;
        box-shadow: 1px 1px 6px #F7D8B3;
        margin-left: 10px;
        margin-top: 5px;
    }
</style>

<h2>編輯管理者</h2>
<div class="admindiv">
<form action="./api/edit.php" method="post">
    <li class="adminli liheader">
        <div style="width:50%">帳號</div>
        <div style="width:50%">密碼</div>
    </li>

    <?php
        foreach($admin as $ad){
            echo "<li class='adminli'>";
            echo "<div style='width:50%'><input type='text' name='acc[]' id='acc' width='100px' value={$ad['acc']}></div>
            <div style='width:50%'><input type='text' name='pw[]' id='pw' width='100px' value={$ad['pw']}></div>";
            echo "</li>";
            echo "<input type='hidden' name='id[]' value='{$ad['id']}'>";
            //傳誦多個陣列  name要加上[]
        }
    ?>

    <li class="adminli button">
        <div>
            <input type="submit" value="修改確定">
            <input type="hidden" name="table" value="r_<?=$do?>">
            <input type="hidden" name="table1" value="<?=$do?>">
        </div>
    </li>
</form>
</div>
