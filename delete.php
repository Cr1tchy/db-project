<?php
    $db = mysqli_connect('localhost','test','test1234','market');
    $num=$_GET['B_num'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<div>
		<div>
			<form action="./delete_raise.php" method="post">
				<input type="hidden" name="B_num" value=<?php echo $num?>>
				<input type="password" name="B_passwd">
				<input type="submit" value="delete">
				<input type="button" value="이전" onclick="history.back(-1)">
			</form>
		</div>
	</div>
</body>
</html>

