<?php

include("./dbconn.php");
//각 변수에 write.php에서 input name값들을 저장한다

$patient_id = $_GET['patient_id'];
$name = $_POST['name'];
$birthnumber = $_POST['birthnumber'];
$sex = $_POST['sex'];
$blood = $_POST['blood'];
$phone = $_POST['phone'];
$height = $_POST['height'];
$weight = $_POST['weight'];

if($patient_id && $name && $birthnumber && $sex && $blood && $phone && $height && $weight ){
    $sql = mq("UPDATE patient SET name = '$name', birthnumber = '$birthnumber' , sex = '$sex', 
    blood='$blood', phone='$phone', height='$height', weight='$weight' where patient_id='$patient_id'");

    echo "<script>
    alert('환자 수정이 완료되었습니다.');
    location.href='./patient.php';</script>";
}else{
    echo "<script>
    alert('환자 수정이 실패하였습니다.');
    history.back();</script>";
}
?>