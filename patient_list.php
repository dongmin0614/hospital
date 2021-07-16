<?php

include("./dbconn.php");

$sql = "SELECT * FROM patient";
$result = mysqli_query($conn, $sql);

?>

<html>
<head>
<title>환자리스트</title>
<link rel="stylesheet" type="text/css" href="./css/table_main.css">
<script type="text/javascript">
function setText(patient_id){
	opener.document.getElementById("patient_id").value = patient_id ;
	window.close()
}
</script>
</head>
<body>
<div class = "table" align="center"> 
    		<div class = "row header">
    			<div class="cell">
    				환자번호
    			</div>
    			<div class="cell">
    				이름
    			</div>
    			<div class="cell">
    				생년월일
    			</div>
			</div>
			
			<?php 
	
	
			while( $row = mysqli_fetch_array( $result )){ ?>
		
		<div class="row" onclick="setText(<?php echo $row['patient_id'] ?>)">
			<div class="cell" data-title="환자번호">
				<span id="patient_id"> <?php echo $row['patient_id'] ?> </span>
			</div>
			<div class="cell" data-title="이름">
				<?php echo $row['name'] ?>
			</div>
			<div class="cell" data-title="생년월일">
				<?php echo $row['birthnumber'] ?>
			</div>
		</div>
	
	<?php }
	mysqli_close($conn);     
	?>
		</div>
		</div>
</body>
</html>