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
</style>

<h2>作品集管理</h2>

<form action="./api/add.php" method="post">
<table class="addport">
<tr>
    <td>分類：</td>
    <td><input type="text" name="filter"></td>
</tr>
<tr>
    <td>上傳圖片：</td>
    <td><input type="file" name="img"></td>
</tr>
<tr>
    <td>資料夾連結名稱：</td>
    <td><input type="text" name="a_href" id=""></td>
</tr>
<tr>
    <td>標題：</td>
    <td><input type="text" name="title" id=""></td>
</tr>
</table>
<div class="button"><div><button type="button">新增作品</button></div></div>
</form>