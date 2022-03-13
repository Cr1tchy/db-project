<?php
	session_start();
    if($_SESSION[is_login] == 0){
        echo "<script>alert('Requried Login');history.back();</script>";
        exit();
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Simple NoticeBoard_Write</title>
</head>
<style>
        table.w_table{
                border-collapse: separate;
                border-spacing: 1px;
                text-align: left;
                line-height: 1.5;
                border-top: 1px solid #ccc;
                margin : 20px 10px;
        }
        table.w_table tr {
                 width: 50px;
                 padding: 10px;
                font-weight: bold;
                vertical-align: top;
                border-bottom: 1px solid #ccc;
        }
        table.w_table td {
                 width: 100px;
                 padding: 10px;
                 vertical-align: top;
                 border-bottom: 1px solid #ccc;
        }
</style>
<body>
    <div>
        <div>
            <form action="./product_raise.php" method="post">
            <table class = "w_table">
                <tbody>
                    <tr>
                        <th scope="row">상품명</th>
                        <td class="prod_name"><input type="text" size=10  name="prod_name"></td>
                    </tr>
                    <tr>
                        <th scope="row">상품 가격</th>
                        <td class="price"><input type="text" size=10  name="price"></td>
                    </tr>
                    <tr>
                        <th scope="row">종류</th>
                        <td class="kind"><input type="text" size=10  name="kind"></td>
                    </tr>
                </tbody>
                <div>
                    <button type="submit">완료</button>
                    <input type=button value="이전" onclick="history.back(-1)">
                </div>
            </table>
            </form>
        </div>
    </div>
</body>
</html>
