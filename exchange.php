 <?php
    session_start();
    $db=mysqli_connect('localhost','test','test1234','market');
    $price=$_GET['price'];
    $num=$_GET['num'];
    $id=$_SESSION['id'];
    $writer=$_GET['writer'];
    
    $sql="select title, price from noticeboard,product,user where B_num=P_num and writer=id and writer=$id and price=$price";
    $result=mysqli_query($db,$sql);

    if($id != $writer){
        if($result){
            $sql3="update noticeboard set title='판매완료' where B_num=$num and writer=$id and price=$price";
            mysqli_query($db,$sql3);

            echo "<script>alert('교환되었습니다.');location.href='./index.php'</script>";
        }   
        else{
            echo "<script>alert('금액이 맞지 않습니다.');history.back();</script>";
        } 
    }
    else
        echo "<script>alert('당신껍니다.');history.back();</script>";
?>
