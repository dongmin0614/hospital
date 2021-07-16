<?php

include "./dbconn.php";

$dept_id = $_POST['dept_id'];
$name = $_POST['name'];
$birth = $_POST['birth'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];



if($name && $birth && $dept_id && $phone && $mail ){
    $sql = mq("INSERT INTO doctor(name, birth, dept_id, phone, mail) 
VALUES('$name','$birth','$dept_id','$phone','$mail')");

    echo "<script>
    alert('의사 등록이 완료되었습니다.');
    location.href='./doctor.php';</script>";
}else{
    echo "<script>
    alert('의사 등록이 실패하였습니다. 모든 칸을 채워주세요.');
    history.back();</script>";
}
?><?php
