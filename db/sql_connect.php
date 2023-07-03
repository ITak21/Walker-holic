<?php
    $servername = "localhost";
    $user = "root";
    $password = "";
    $dbname = "walker";

    $connect = mysqli_connect($servername, $user, $password, $dbname);

    if (!$connect) {
       // die() 함수는 인수로 전달받은 메시지를 출력하고, 현재 실행 중인 PHP 스크립트를 종료시키는 함수입니다.
       die("서버와의 연결 실패! : ".mysqli_connect_error());
    }


?>