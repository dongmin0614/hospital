<?php

include("./dbconn.php");

$sql = "SELECT * FROM dept";
$result = mysqli_query($conn, $sql);

?>

<html>
<head>
<title>부서리스트</title>
<link rel="stylesheet" type="text/css" href="./css/table_main.css">
<script type="text/javascript">
function setText(dept_id){
	opener.document.getElementById("dept_id").value = dept_id;
	window.close()
}
</script>
</head>
<body>
<div class = "table" align="center"> 
    		<div class = "row header">
    			<div class="cell">
    				부서번호
    			</div>
    			<div class="cell">
    				부서명
    			</div>
    			<div class="cell">
    				전화번호
    			</div>
			</div>
			
			<?php 
	
	
			while( $row = mysqli_fetch_array( $result )){ ?>
		
		<div class="row" onclick="setText(<?php echo $row['dept_id'] ?>)">
			<div class="cell" data-title="부서번호">
				<span id="dept_id"> <?php echo $row['dept_id'] ?> </span>
			</div>
			<div class="cell" data-title="부서명">
				<?php echo $row['dept_name'] ?>
			</div>
			<div class="cell" data-title="전화번호">
				<?php echo $row['dept_phone'] ?>
			</div>
		</div>
	
	<?php }
	mysqli_close($conn);     
	?>
		</div>
</body>
</html>