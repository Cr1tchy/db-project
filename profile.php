<?php
    session_start();

	$db = mysqli_connect('localhost','test','test1234','market');
    $sql1="select *from user where id='".$_SESSION['id']."'";

    $result=mysqli_query($db,$sql1);
    $row=mysqli_fetch_assoc($result);

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
                <div>닉네임    : <?php echo $row['nick']?></div><br>
                <div>보유 금액 : <?php echo $row['cash']?></div><br>
                <div>이메일    : <?php echo $row['email']?></div><br>
				<div>연락처    : <?php echo $row['phone']?></div><br>
                <div>---------------------------------------</div><br>
            </div>
        </div>
        <input type=button value="이전" onclick="history.back(-1)">
    </div>
</body> 
</html>
