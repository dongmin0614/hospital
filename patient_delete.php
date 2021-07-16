<?php

include("./dbconn.php");

$patient_id = $_GET['patient_id'];


if($patient_id ){
    $sql = mq("DELETE FROM patient where patient_id='".$patient_id."'");
    echo "<script>
    alert('환자 삭제가 완료되었습니다.');
    location.href='/patient.php';</script>";
}else{
    echo "<script>
    alert('환자 삭제가 실패하였습니다.');
    history.back();</script>";
}
?>