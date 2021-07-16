<?php

include "./dbconn.php";

$name = $_POST['name'];
$birthnumber = $_POST['birthnumber'];
$sex = $_POST['sex'];
$blood = $_POST['blood'];
$phone = $_POST['phone'];
$height = $_POST['height'];
$weight = $_POST['weight'];



if($name && $birthnumber && $sex && $blood && $phone && $height && $weight ){
    $sql = mq("INSERT INTO patient(name, birthnumber, sex, blood, phone, height, weight) 
VALUES ('$name','$birthnumber','$sex','$blood','$phone','$height','$weight')");

    echo "<script>
    alert('환자 등록이 완료되었습니다.');
    location.href='./patient.php';</script>";
}else{
    echo "<script>
    alert('환자 등록이 실패하였습니다. 모든 칸을 채워주세요.');
    history.back();</script>";
}
?>