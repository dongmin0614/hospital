<meta charset="UTF-8"/>
<?php
include "dbconn.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>차트작성</title>
	<link rel="stylesheet" type="text/css" href="./css/table_main.css">

</head>
<body>
<header>
<?php include "header.php";?>
</header>
<?php
		if (isset($_GET["chart_id"]))
    $chart_id = $_GET["chart_id"];
    else{
        $chart_id = null;
    }

$sql = "SELECT d.name as doctor_name, p.name as patient_name,
				 di.disease_name as disease_name, di.code as code,
				  c.chart_id as chart_id, c.treat_date as treat_date,
				   c.treat_content as treat_content, c.prescribe_content  as prescribe_content 
		FROM chart c 
		INNER join doctor d ON c.doctor_id=d.doctor_id
		INNER join patient p ON c.patient_id = p.patient_id
		INNER join disease di ON c.disease_id=di.disease_id
		        WHERE c.chart_id = $chart_id";
$result = mysqli_query($conn, $sql);
$chart = mysqli_fetch_array($result);

	?>
	<h1 align="center">차트 상세 확인</h1>
        
		<form method="post" id="modify_form" action="./chart_modify.php?chart_id=<?php echo $chart['chart_id']; ?>">
	
	<div class = "table" align="center"> 
    		<div class = "row header">
    			<div class="cell">
    				항목
    			</div>
    			<div class="cell">
    				내용
    			</div>
			</div>
			
			<div class="row" >
			<div class="cell" data-title="항목">
				차트번호
			</div>
			<div class="cell" data-title="내용">
				<?php echo $chart['chart_id']?>
			</div>
			</div>
			
			<div class="row" ondblclick="dbl_click()">
			<div class="cell" data-title="항목">
				진료날짜
			</div>
			<div class="cell" data-title="내용" id ="dateDiv">
				<span id="date"><?php echo $chart['treat_date'] ?></span>
			</div>
			</div>
			
			<div class="row" >
			<div class="cell" data-title="항목">
				담당의사
			</div>
			<div class="cell" data-title="내용">
				<?php echo $chart['doctor_name'] ?>
			</div>
			</div>
			
			<div class="row" >
			<div class="cell" data-title="항목">
				환자이름
			</div>
			<div class="cell" data-title="내용">
				<?php echo $chart['patient_name'] ?>
			</div>
			</div>
			<div class="row" >
			<div class="cell" data-title="항목">
				질병코드
			</div>
			<div class="cell" data-title="내용">
				<?php echo $chart['code'] ?>
			</div>
			</div>
			<div class="row" >
			<div class="cell" data-title="항목">
				질병명
			</div>
			<div class="cell" data-title="내용">
				<?php echo $chart['disease_name'] ?>
			</div>
			</div>
			<div class="row" >
			<div class="cell" data-title="항목">
				진료내용
			</div>
			<div class="cell" data-title="내용">
				<?php echo $chart['treat_content'] ?>
			</div>
			</div>
			<div class="row" >
			<div class="cell" data-title="항목">
				처방내용
			</div>
			<div class="cell" data-title="내용">
				<?php echo $chart['prescribe_content'] ?>
			</div>
			</div>
		</div>	
	<!-- 목록, 수정, 삭제 -->
	<div align="center">
		<input type="submit" value="수정" class="button" >
		<input type="button" value="삭제" class="button" onclick= "location.href='./chart_delete.php?chart_id=<?php echo $chart['chart_id']; ?>'">
		<input type="button" value="목록" class="button" onclick= "location.href='./chart_list.php'">
	</div>
</form>
</body>
</html>

<style>
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