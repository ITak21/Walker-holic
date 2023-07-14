<?php
if(isset($_SESSION['userId'])){
$user_id=$_SESSION['userId'];

$walk_sql="SELECT walk_count FROM `walk_tb` WHERE walk_date =DATE_FORMAT(now(),'%y-%m-%d') and walker_id='$user_id';"; 
//현재 날짜에 해당한 count값을 검색한다
$walk_result= mysqli_query($connect,$walk_sql);
$walk_row=mysqli_fetch_array($walk_result);

if($walk_row==false){
    $walk_row['walk_count']=0;
}

$today=$walk_row['walk_count'];
}
?>