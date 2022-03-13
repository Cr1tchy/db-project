<?php
        if(!empty($_POST['id']) && !empty($_POST['pw']) && !empty($_POST['phone'])  && !empty($_POST['nick']))
        {
                $db = mysqli_connect('localhost', 'test', 'test1234', 'market');
                $id=$_POST['id'];
                $pw=$_POST['pw'];
	    $phone=$_POST['phone'];
                $nick=$_POST['nick'];
                $sql1="SELECT * FROM user where id='".$id."' or nick='".$nick."'";
                $sql2="INSERT INTO user(id, pw, nick, phone) values ('".$id."','".$pw."','".$nick."','".$phone."')";
                $result1 = mysqli_query($db, $sql1);
        }

        if(mysqli_num_rows($result1) != 1)
        {
                mysqli_query($db, $sql2);
                mysqli_close($db);
                echo "<script>alert('회원 가입 성공! 로그인 페이지로 이동합니다!');location.href='./login.html';</script>";
        }
        if(mysqli_num_rows($result1) == 1)
        {
                echo "<script>alert('해당 닉네임 혹은 아이디가 이미 존재합니다');location.href='./regist.html'</script>";
                mysqli_close($db);
                exit;
        }
?>
