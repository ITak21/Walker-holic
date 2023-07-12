<?php
 session_start();
 include "db/sql_connect.php"; //sql 연결
 include "db/today_count.php"; //오늘의 걸음 수 가져오기
 include "db/week_count.php";	//한 주간의 걸음 수 가져오기
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/walk_css.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">

    <title>Walker Holic</title>
</head>
<body>
    <section class="one">
        <div id="title">Walker Holic</div>
		<?php
		if(isset($_SESSION['userId'])){
		echo "<a href='db/logout.php' id='logout'>로그아웃</a>";
		}
		?>
    </section>
    <section class="two">
	
    <div id="count">
		
		<?php 
		if(isset($_SESSION['userId'])) {
			// 세션에 아이디 값이 없으면 로그인 화면을 출력하게 한다
		if($today !=0) 
		    //하루 걸음 수가 0 일경우 걸음 수를 입력하는 창을 보이게 한다.
		{echo 

		"<div id='count_title'>오늘의 걸음 수</div>
		<div id='num'> $today 걸음</div> 
		<progress id='progress' value='$today' min='0' max='10000'></progress>
		<!-- 오늘 걸음 수를 가져와서 해당 값을 프로세스바를 통해서 보여준다. -->
		
		";}else{
		echo 

		"<div id='count_title'>오늘 하루 얼마나 걸으셨나요?</div>
		<form method='POST' action='db/walk_insert.php'>
		<input type='number' id='walk_input' placeholder='하루동안 걸은 걸음 수' name='today_walk'>
		<input type='submit' id='walk_submit' value='입력'>
		</form>
		
		";}
		}else{
			echo
			"
			<div id='count_title'>하루 걸음을 기록해 보세요</div>
			<form method='POST' action='db/walk_login.php'>
			<input type='submit' id='login' value='로그인' >
			</form>
			<a href='db/walk_join.php' id='join'>계정이 없으신가요?</a>
			";
		}?>

	</div>

    </section>
    <section class="three">
		<?php
		if(isset($_SESSION['userId'])){
		echo"
        <div id='chartContainer' style='height: 370px; width: 100%;'></div>
		";
		}else{
			echo"
			<div id='chartContainer' style='height: 370px; width: 100%; filter: blur(4px);'></div>
			";
		}
		?>
		<!-- 한 주간의 걸음 수를 불러와 차트형식으로 보여준다. canvasJS소스 활용. -->
    </section>


	<script>
	window.onload = function () {
 
	var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	theme: "light1", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "한 주간 걸은 걸음"
	},
	axisY:{
		includeZero: true
	},
	data: [{
		type: "column", //change type to bar, line, area, pie, etc
		//indexLabel: "{y}", //Shows y value on all Data Points
		indexLabelFontColor: "#5A5757",
		indexLabelPlacement: "outside",   
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
	});
chart.render();
 
}
	</script>
	<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</body>
</html>