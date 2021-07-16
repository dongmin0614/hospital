<?php
$mysql_host = "localhost"; //접속할 ip주소
$mysql_user = "dongmin"; //데이터베이스 아이디
$mysql_password = "database"; //데이터베이스 패스워드
$mysql_db = "hospital"; //데이터베이스 명



$conn  = mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_db);
mysqli_query($conn, "set session character_set_connection=utf8;");
mysqli_query($conn, "set session character_set_results=utf8;");
mysqli_query($conn, "set session character_set_client=utf8;");

if (!$conn){
    die("연결실패:".mysqli_connect_error());
}

function mq($sql)
{
    global $conn;
    return $conn->query($sql);
}

session_start();

?>