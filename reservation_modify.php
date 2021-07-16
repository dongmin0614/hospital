<?php
$reg_id = $_GET["reg_id"];

$date = $_POST["dateId"];

include "./dbconn.php";
$sql = "update reservation set reg_date='$date'";
$sql .= " where reg_id='$reg_id'";
mysqli_query($conn, $sql);

mysqli_close($conn);

echo "
		<script>
			location.href = './reservation_info.php?reg_id=$reg_id';
		</script>
	";

?>
