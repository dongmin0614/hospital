<?php

include("./dbconn.php");

$sql = "SELECT * FROM doctor";
$result = mysqli_query($conn, $sql);

?>

<html>
<head>
<title>의사리스트</title>
<link rel="stylesheet" type="text/css" href="./css/table_main.css">
<script type="text/javascript">
function setText(doctor_id){
	opener.document.getElementById("doctor_id").value = doctor_id ;
	window.close()
}
</script>
</head>
<body>
<div class = "table" align="center"> 
    		<div class = "row header">
    			<div class="cell">
    				의사번호
    			</div>
    			<div class="cell">
    				이름
    			</div>
			</div>
			
			<?php 
	
	
			while( $row = mysqli_fetch_array( $result )){ ?>
		
		<div class="row" onclick="setText(<?php echo $row['doctor_id'] ?>)">
			<div class="cell" data-title="의사번호">
				<span id="doctor_id"> <?php echo $row['doctor_id'] ?> </span>
			</div>
			<div class="cell" data-title="이름">
				<?php echo $row['name'] ?>
			</div>
		</div>
	
	<?php }
	mysqli_close($conn);     
	?>
		</div>
		</div>
</body>
</html>