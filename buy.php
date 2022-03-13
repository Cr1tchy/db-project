 <?php
	session_start();
    $db=mysqli_connect('localhost','test','test1234','market');
	$price=$_GET['price'];
	$num=$_GET['num'];
	$id=$_SESSION['id'];
	
	$sql1="update user set cash=cash-'".$price."' where id='".$id."'";

	$result1=mysqli_query($db,$sql1);

	if($result1){
		$sql2="update noticeboard set title='판매완료' where B_num=$num";
		mysqli_query($db,$sql2);

		echo "<script>alert('구매되었습니다');location.href='./index.php'</script>";
	}
	else{
		echo "<script>alert('잔액이 부족합니다.');history.back();</script>";
	}
?>
