<?php
	$db = mysqli_connect('localhost','test','test1234','market');
	$num=$_GET['B_num'];
	$id=$_SESSION['id'];
	$sql1="select *from noticeboard, product where B_num=$num and P_num=$num";
	$sql2="update noticeboard set view=view+1 where B_num=$num";
	
	$result=mysqli_query($db,$sql1);
	mysqli_query($db,$sql2);
	$row=mysqli_fetch_assoc($result);

	session_start();
	if($_SESSION[is_login] == 0){
		echo "<script>alert('Requried Login');history.back();</script>";
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
</head>
<body>
	<div>
		<h3>Simple Noticeboard</h3>
		<div>
			<div>
				<div>글제목 : <?php echo $row['title']?></div><br>
				<div>작성자 : <?php echo $row['writer']?></div><br>
				<div>작성일 : <?php echo $row['date']?></div><br>
				<div>조회수 : <?php echo $row['view']?></div><br>
				<div>글내용 : <?php echo $row['comment']?></div><br>
				<div>---------------------------------------</div><br>
				<div>상품명 : <?php echo $row['prod_name']?></div><br>
				<div> 가 격 : <?php echo $row['price']?></div><br>
				<div> 종 류 : <?php echo $row['kind']?></div><br>
			</div>
		</div>
		<?php
		if(isset($_SESSION['id'])){
        ?>
						<input type=button value="이전" onclick="history.back(-1)">
						<button onclick="window.location.href='./edit.php?B_num=<?php echo $num?>'">수정</button>
						<form action="./buy.php" method="get">
				            <input type="hidden" name="price" value=<?php echo $row['price']?>>
							<input type="hidden" name="num" value=<?php echo $num?>>
							<input type="hidden" name="id" value=<?php echo $id?>>
							<button type="submit">구매</button>
						</form>
						<button onclick="window.location.href='./delete.php?B_num=<?php echo $num?>'">삭제</button>
                        </br>
                <?php
                    }
                    else {
				?>		<input type=button value="이전" onclick="history.back(-1)">
                        <button onclick="window.location.href='./edit.php?B_num=<?php echo $num?>'">수정</button>
						</br>
                <?php   }
		?>
	</div>
</body>	
</html>

