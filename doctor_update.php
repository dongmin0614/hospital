<?php

include("./dbconn.php");
//각 변수에 write.php에서 input name값들을 저장한다

$doctor_id = $_GET['doctor_id'];
$dept_id = $_POST['dept_id'];
$name = $_POST['name'];
$birth = $_POST['birth'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];


if($doctor_id && $name && $birth  && $mail && $phone && $dept_id ){
    $sql = mq("UPDATE doctor SET name = '$name', birth = '$birth' ,
    mail='$mail', phone='$phone', dept_id = '$dept_id' where doctor_id = '$doctor_id'");

    echo "<script>
    alert('의사 수정이 완료되었습니다.');
    location.href='./doctor.php';</script>";
}else{
    echo "<script>
    alert('의사 수정이 실패하였습니다.');
    history.back();</script>";
}
?>