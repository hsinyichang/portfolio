<?php
include_once "base.php";
?>
<div>
    <table>
        <tr>
            <td>序號</td>
            <td>姓名</td>
            <td>email</td>
            <td>留言主題</td>
            <td>留言內容</td>
            <td>留言時間</td>
        </tr>

        <?php
        $rows=$Contact->all("order by time");
        foreach($rows as $key=>$row){
        ?>
        <tr>
            <td><?=$key+1?></td>
            <td><?=$row['name']?></td>
            <td><?=$row['email']?></td>
            <td><?=$row['sub']?></td>
            <td><?=$row['message']?></td>
            <td><?=$row['time']?></td>
        </tr>
        <?php
        }
        ?>
    </table>
</div>