<?php

include("./dbconn.php");

$sql = "SELECT reg_id, reg_date, doctor_id, patient_id FROM reservation";
$result = mysqli_query($conn, $sql);

$sql2 = "SELECT count(*) FROM reservation";
$result2 = mysqli_query($conn, $sql2);
$count = mysqli_fetch_array($result2)[0];

if (isset($_GET["page"]))
    $page = $_GET["page"];
    else{
        $page = 1;
    }

$PHP_SELP ="./reservation.php";
    
?>

<html>
<head>
	<title>예약페이지</title>
	
	<link rel="stylesheet" type="text/css" href="./css/table_main.css">
	<style type="text/css">
	
	.button {

    width:100px;

    background-color: #000;

    border: none;

    color:#fff;

    padding: 15px 0;

    text-align: center;

    text-decoration: none;

    display: inline-block;

    font-size: 15px;

    margin: 4px;

    cursor: pointer;
    
    border-radius: 15px;

}
	</style>
	
</head>
</html>
<body>
	<header>
    	<?php include "header.php";?>
    </header>
	<h1 align="center">예약 확인</h1>
	
		<div class = "table" align="center"> 
    		<div class = "row header">
    			<div class="cell">
    				예약 번호
    			</div>
    			<div class="cell">
    				예약 날짜
    			</div>
    			<div class="cell">
    				의사 번호
    			</div>
    			<div class="cell">
    				환자 번호
    			</div>
			</div>
			
			<?php 
	
	
			while( $row = mysqli_fetch_array( $result )){ ?>
		
		<div class="row" onclick="location.href='./reservation_info.php?reg_id=<?php echo $row['reg_id'] ?>'">
			<div class="cell" data-title="예약 번호">
			<?php echo $row['reg_id'] ?>
			</div>
			<div class="cell" data-title="예약 날짜" ondblclick="dbl_click()">
				<span id="date"> <?php echo $row['reg_date'] ?> </span>
			</div>
			<div class="cell" data-title="의사 번호">
				<?php echo $row['doctor_id'] ?>
			</div>
    		<div class="cell" data-title="환자 번호">
    			<?php echo $row['patient_id'] ?>
    		</div>
		</div>
	
	<?php }
	mysqli_close($conn);     
	?>
		</div>
		
		<div align="center">
		<input type="button" value="예약추가" class="button" onclick= "location.href='./reservation_form.php'">
		</div>
		
		<!-- 페이징 -->
	<br>
	
	<div id="paging" align="center">
	
	<a href="<?php echo $PHP_SELP?>?page=<?php echo $s_page-1 ?>">이전</a>
	
	<?php

	   $num = $count;
	   $list = 10;
	   $block = 10;
	   
	   $pageNum = ceil($num/$list); // 총 페이지
	   $blockNum = ceil($pageNum/$block); // 총 블록
	   $nowBlock = ceil($page/$block);
	   
	   $s_page = ($nowBlock * $block) - ($block - 1);
	   
	   if ($s_page <= 1) {
	       $s_page = 1;
	   }
	   $e_page = $nowBlock*$block;
	   if ($pageNum <= $e_page) {
	       $e_page = $pageNum;
	   }
	   
	   
	   
	   for ($p=$s_page; $p<=$e_page; $p++) {
	       ?>

    <a href="<?php echo $PHP_SELP?>?page=<?php echo $p?>"><?php echo $p?></a>

<?php
}
?>		
		
</body>