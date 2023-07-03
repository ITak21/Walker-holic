<?php 
 $walk_sql="SELECT walk_count,walk_date from walk_tb where date_format(walk_date,'%Y-%m-%d')
 BETWEEN
     (SELECT ADDDATE(CURDATE(), - WEEKDAY(CURDATE()) + 0 ))
 AND
     (SELECT ADDDATE(CURDATE(), - WEEKDAY(CURDATE()) + 6 ))

ORDER by walk_date;";
//현재날짜를 기준으로 월요일부터 일요일에 해당하는 날짜의 값을 검색하고 날짜를 기준으로 정렬한다.

$walk_result= mysqli_query($connect,$walk_sql);

$num=mysqli_num_rows($walk_result);

while($walk_row=mysqli_fetch_array($walk_result)){

//$id=$walk_row['walker_id'];
$count[]=$walk_row['walk_count'];
$date[]=$walk_row['walk_date'];


}

if($num!=7){
for($i=$num;$i<=7;$i++)
$count[$i]=0;

}
mysqli_close($connect);




$dataPoints = array(

	array("label"=> "월요일", "y"=> $count[0]),
	array("label"=> "화요일", "y"=> $count[1]),
	array("label"=> "수요일", "y"=> $count[2]),
	array("label"=> "목요일", "y"=> $count[3]),
	array("label"=> "금요일", "y"=> $count[4]),
	array("label"=> "토요일", "y"=> $count[5]),
	array("label"=> "일요일", "y"=> $count[6])

);
?>