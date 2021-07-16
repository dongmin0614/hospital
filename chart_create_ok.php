<meta charset="UTF-8"/>
<?php
include "dbconn.php";

$c_date=$_POST['chart_date']; //날짜

$c_t_content=$_POST['chart_treat_content']; //진료 내용
$c_p_content=$_POST['chart_prescribe_content']; //처방 내용
$doctor_id=$_POST['doctor_id'];//의사번호
$patient_id=$_POST['patient_id'];//환자번호
$disease_id=$_POST['disease_id'];//질병번호

$reset = mq("ALTER TABLE chart AUTO_INCREMENT =1"); //인덱스 재정렬
mysqli_query($conn, $reset);


$sql="INSERT INTO chart(doctor_id, patient_id, disease_id, treat_date, treat_content, prescribe_content)
VALUES('".$doctor_id."','".$patient_id."','".$disease_id."','".$c_date."','".$c_t_content."','".$c_p_content."')";

$result=mysqli_query($conn, $sql);
if($result===false){
    echo "<script>alert('실패');</script>";
}else{
    echo "<script>alert('차트작성 성공');location.href='./chart_list.php';</script>";
}
?>
