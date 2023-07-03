<?php
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
    </section>
    <section class="two">
	
    <div id="count">
	<div id="count_title">오늘의 걸음 수</div>
	<div id="num"><?php echo $today; ?> 걸음</div>
	<progress id="progress" value="<?php echo $today; ?>" min="0" max="10000"></progress>
	<!-- 오늘 걸음 수를 가져와서 해당 값을 프로세스바를 통해서 보여준다. -->
	
	</div>

    </section>
    <section class="three">
        <div id="chartContainer" style="height: 370px; width: 100%;"></div>
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