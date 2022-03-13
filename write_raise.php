<?php
	session_start();
	$db = mysqli_connect('localhost','test','test1234','market');
	$title=$_POST['w_title'];
	$writer=$_SESSION['id'];
	$passwd=$_POST['w_passwd'];
	$comment=$_POST['w_comment'];

	$sql="INSERT INTO noticeboard(title,writer,B_passwd,comment,date) VALUES('".$title."', '".$writer."', '".$passwd."', '".$comment."', now())";

	$result1=mysqli_query($db,$sql);

	if($result1 === false)
	{
		echo "<script>alert('Fail');history.back(-1)</script>";
		error_log(mysqli_error($db));
	}		
	else
	{
		echo "<script>alert('Success');location.href='./index.php'</script>";
	}
?>

