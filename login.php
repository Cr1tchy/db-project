<?php
        if(!empty($_POST['id']) && !empty($_POST['pw']))
        {
			session_start();

            $db = mysqli_connect('localhost', 'test', 'test1234', 'market');
            $id = $_POST['id'];
            $pw = $_POST['pw'];
            $sql = "SELECT * FROM user where id='".$id."' and pw='".$pw."'";
            $result = mysqli_query($db,$sql);
			$_SESSION['id']=$id;

		}
        if(mysqli_num_rows($result) == 1)
        {
			$_SESSION[is_login]=1;
            echo "<script>alert('Login Success');location.href='./index.php';</script>";
        }
		else
			session_destroy();
			echo "<script>alert('Login Fail'); history.back();</script>";
?>

