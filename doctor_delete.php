<?php

include("./dbconn.php");

$doctor_id = $_GET['doctor_id'];


if($doctor_id ){
    $sql = mq("DELETE FROM doctor where doctor_id='".$doctor_id."'");
    echo "<script>
    alert('의사 삭제가 완료되었습니다.');
    location.href='/doctor.php';</script>";
}else{
    echo "<script>
    alert('의사 삭제가 실패하였습니다.');
    history.back();</script>";
}
?>