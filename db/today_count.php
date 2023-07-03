<?php

$walk_sql="SELECT walk_count FROM `walk_tb` WHERE walk_date =DATE_FORMAT(now(),'%y-%m-%d');"; 
//현재 날짜에 해당한 count값을 검색한다
$walk_result= mysqli_query($connect,$walk_sql);
$walk_row=mysqli_fetch_array($walk_result);

if($walk_row==false){
    $walk_row['walk_count']=0;
}

$today=$walk_row['walk_count'];

?>