<?php
$reg_id = $_GET["reg_id"];


include "./dbconn.php";
$sql = "delete from reservation where reg_id= $reg_id";

mysqli_query($conn, $sql);

mysqli_close($conn);

echo "
		<script>
			location.href = './reservation.php';
		</script>
	";

?>
