<?php
$today_walk=$_POST['today_walk'];
$today_date=date("Y-m-d");
include "sql_connect.php";

$walk_sql="INSERT INTO `walk_tb`(`walker_id`, `walk_count`, `walk_date`) VALUES ('admin','$today_walk','$today_date')";
$walk_result= mysqli_query($connect,$walk_sql);

if ($walk_result === false) {
    echo "저장에 문제가 생겼습니다. 관리자에게 문의해주세요.";
    echo mysqli_error($conn);
} else {
?>
    <script>
        alert("입력이 완료되었습니다");
        location.href = "../index.php";
    </script>
<?php
}
?>

