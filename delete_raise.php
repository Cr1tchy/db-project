<?php
	$db = mysqli_connect('localhost','test','test1234', 'market');
	$passwd=$_POST['B_passwd'];
	$num=$_POST['B_num'];
	
	$sql="DELETE FROM noticeboard WHERE B_passwd='".$passwd."'";
	$sql2="DELETE FROM product where P_num=$num";
	$sql3="alter table noticeboard auto_increment=1";
	$sql4="alter table product auto_increment=1";
	
	mysqli_query($db,$sql3);
	mysqli_query($db,$sql4);
	$result=mysqli_query($db,$sql);
	$result=mysqli_query($db,$sql2);

	if($result && $result2 === false)
        {
                echo "<script>alert('Fail');history.back(-1)</script>";
                error_log(mysqli_error($db));
        }
        else
        {
                echo "<script>alert('Delete Success');location.href='./index.php'</script>";
        }
?>

