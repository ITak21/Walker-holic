<?php
$user_nm=$_POST['userName'];
$user_id=$_POST['userId'];
$user_pw=$_POST['userPassword'];
include "sql_connect.php";
$walk_sql="SELECT * FROM `user_tb` WHERE id='$user_id'"; 
$walk_result= mysqli_query($connect,$walk_sql);

if(mysqli_num_rows($walk_result) == 1){
    echo "<script>alert('이미 존재하는 아이디 입니다')</script>";
    echo "<script>location.replace('walk_join.php');</script>";
}else{
    $walk_sql="INSERT INTO `user_tb`(`id`, `name`, `password`) VALUES ('$user_id','$user_nm','$user_pw')";
    $walk_result= mysqli_query($connect,$walk_sql);

    if ($walk_result === false) {
        echo "가입에 문제가 생겼습니다. 관리자에게 문의해주세요.";
        echo mysqli_error($connect);
    } else {
    ?>
        <script>
            alert("가입이 완료되었습니다");
            location.href = "../index.php";
        </script>
    <?php
    }
}


?>
