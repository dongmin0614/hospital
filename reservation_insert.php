<?php
$reg_date = $_GET["reg_date"];
$doctor_id = $_GET["doctor_id"];
$patient_id = $_GET["patient_id"];


include "./dbconn.php";


$sql2 = "insert into reservation(reg_date,doctor_id,patient_id)";
$sql2 .= "values('$reg_date', $doctor_id,$patient_id)";

mysqli_query($conn, $sql2);

mysqli_close($conn);

echo "
		<script>
			location.href = './reservation.php';
		</script>
	";

?>
