<?php
	$db = mysqli_connect('localhost','test','test1234','market');
    $num=$_GET['B_num'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Simple NoticeBoard_Write</title>
</head>
<style>
        table.e_table{
                border-collapse: separate;
                border-spacing: 1px;
                text-align: left;
                line-height: 1.5;
                border-top: 1px solid #ccc;
                margin : 20px 10px;
        }
        table.e_table tr {
                 width: 50px;
                 padding: 10px;
                font-weight: bold;
                vertical-align: top;
                border-bottom: 1px solid #ccc;
        }
        table.e_table td {
                 width: 100px;
                 padding: 10px;
                 vertical-align: top;
                 border-bottom: 1px solid #ccc;
        }
</style>
<body>
    <div>
        <div>
            <form action="./edit_raise.php" method="post">
			<input type="hidden" name="B_num" value=<?php echo $num;?>>
            <table class = "e_table">
                <tbody>
                    <tr>
                        <th scope="row">제목</th>
                        <td class="title"><input type="text" size=60 name="w_title"></td>
                    </tr>
                    <tr>
                        <th scope="row">글</th>
                        <td class="comment"><textarea cols=85 rows=15 name="w_comment"></textarea></td>
                    </tr>
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
                    <tr>
                        <th scope="row">비밀번호</th>
                        <td class="passwd"><input type="password" size=10  name="w_passwd"></td>
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
