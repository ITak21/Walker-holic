<?php
$user_id=$_POST['userId'];
$user_pw=$_POST['userPassword'];
include "sql_connect.php"; //sql 연결

$walk_sql="SELECT * FROM `user_tb` WHERE id='$user_id'and password='$user_pw'"; 
$walk_result= mysqli_query($connect,$walk_sql);

if(mysqli_num_rows($walk_result) == 1){
    session_start();

    $_SESSION['userId']=$user_id;
    echo "<script>location.replace('../index.php');</script>";
    

}else{
    echo "<script>alert('아이디 혹은 비밀번호가 잘못되었습니다')</script>";
    echo "<script>location.replace('walk_login.php');</script>";
}
?>