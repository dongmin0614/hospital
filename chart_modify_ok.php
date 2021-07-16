<meta charset="UTF-8"/>
<?php
include "dbconn.php";

    $idx = $_GET['chart_id'];
    $doctor_id =$_POST['doctor_id'];
    $patient_id =$_POST['patient_id'];
    $disease_id =$_POST['disease_id'];
    $p_cont = $_POST['chart_prescribe_content'];
    $t_cont = $_POST['chart_treat_content'];
    $t_date = $_POST['chart_treat_date'];
  
    // $sel_doctor= mq("SELECT doctor_id FROM doctor WHERE name='".$c_doctor_name."'");
    // $doctor_id = $sel_doctor->fetch_array();
    // //환자 id, name 추가할 것

    //$result=mysqli_query($conn, $sql);
    if($idx && $doctor_id && $patient_id && $disease_id && $p_cont && $t_cont && $t_date){
        $sql = mq("update chart set doctor_id='".$doctor_id."',patient_id='".$patient_id."',disease_id='".$disease_id."',prescribe_content='".$p_cont."',treat_content='".$t_cont."',treat_date='".$t_date."' where chart_id='".$idx."'"); 
        echo "<script>
        alert('수정 완료되었습니다.');
        location.href='./chart_detail.php?chart_id=$idx';</script>";
    }else{
        echo "<script>
    alert('수정 실패하였습니다.');
    history.back();</script>";
}
    ?>
    
 