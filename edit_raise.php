<?php
    $db = mysqli_connect('localhost','test','test1234','market');
	$num=$_POST['B_num'];
    $title=$_POST['w_title'];
    $passwd=$_POST['w_passwd'];
    $comment=$_POST['w_comment'];
	$prod_name=$_POST['prod_name'];
	$price=$_POST['price'];
	$kind=$_POST['kind'];

	$sql1="update noticeboard set title='".$title."', comment='".$comment."' where B_num='".$num."'";
	$sql2="update product set prod_name='".$prod_name."', price='".$price."', kind='".$kind."' where P_num='".$num."'";

	$result1=mysqli_query($db,$sql1);
	$result2=mysqli_query($db,$sql2);
    $result3=mysqli_query($db,$sql3);   

    if($result1 && $result2 === false)
    {   
        echo "<script>alert('Fail');history.back(-1)</script>";
        error_log(mysqli_error($db));
    }    
    else
    {   
        echo "<script>alert('Success');location.href='./index.php'</script>";
    }   
?>
