<?php
    $db = mysqli_connect('localhost','test','test1234','market');

    $prod_name=$_POST['prod_name'];
    $price=$_POST['price'];
    $kind=$_POST['kind'];

    $sql="INSERT INTO product(prod_name,price,kind) VALUES('".$prod_name."','".$price."','".$kind."')";

    $result=mysqli_query($db,$sql);

    if($result === false)
    {   
        echo "<script>alert('Fail');history.back(-1)</script>";
        error_log(mysqli_error($db));
    }    
    else
    {   
        echo "<script>alert('Success');location.href='./write.php'</script>";
    }   
?>
