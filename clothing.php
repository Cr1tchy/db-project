<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Market - Clothing</title>
</head>
<body>
    <div>
        <h4>Market - Clothing</h4>
        <table>
        <div>
            <thead>
                <tr>
                    <th width="70" align="center" class="B_num">번호</th>
                    <th width="500" align="center" class="title">제목</th>
                    <th width="120" align="center" class="writer">작성자</th>
                    <th width="170" align="center" class="date">작성일</th>
                    <th width="100" align="center" class="view">조회수</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $db = mysqli_connect('localhost', 'test', 'test1234', 'market');
                    $sql="select * from noticeboard, product where kind='clothing' and B_num=P_num order by B_num desc";
                    $result=mysqli_query($db,$sql);
    
                    session_start();

                    if(isset($_SESSION['id'])){
                        echo $_SESSION['id'];?> 회원님 안녕하세요
						<button onclick="window.location.href='./logout.php'">로그아웃</button>
                        </br>
                <?php
                    }   
                    else {
                ?>      <button onclick="window.location.href='./login.html'">로그인</button>
                        </br>
                <?php   }   
    
                    while($row=mysqli_fetch_assoc($result))
                    {   
                ?>  
                <tr>
                    <td width="70" align="center"><?php echo $row['P_num']?></td>
                    <td width="500" align="center"><a href="./view.php?P_num=<?php echo $row['P_num']?>"><?php echo $row['title']?></td>
                    <td width="120" align="center"><?php echo $row['writer']?></td>
                    <td width="170" align="center"><?php echo $row['date']?></td>
                    <td width="80" align="center"><?php echo $row['view']?></td>
                </tr>
            </tbody>
            <?php } ?>
            <button onclick="window.location.href='./regist.html'">회원가입</button></br></br>
            <button onclick="window.location.href='./product.php'">등록</button>
            <div>
				<button onclick="window.location.href='./index.php'">home</button>
				<button onclick="window.location.href='./clothing.php'">clothing</button>
                <button onclick="window.location.href='./furniture.php'">furniture</button>
                <button onclick="window.location.href='./electronic_device.php'">electronic_device</button>
                <button onclick="window.location.href='./book.php'">book</button>
                <button onclick="window.location.href='./food.php'">food</button>
            </div>
        </table>
        </div>
    </div>
</body>
</html>


