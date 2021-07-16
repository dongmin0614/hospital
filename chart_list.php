<meta charset="UTF-8"/>
<?php
include "dbconn.php";

$sql="SELECT * from chart";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);

if(empty($_REQUEST["search_word"])){ // 검색어가 empty일 때 예외처리를 해준다.

    $search_word ="";
    
    }else{
    
    $search_word =$_REQUEST["search_word"];
    
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>차트조회</title>
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
<body>
<header>
    	<?php include "header.php";?>
 </header>
 <h1 align="center">차트 확인</h1>
 <form class="navbar-form pull-left" method="get" action="">

<input type="text" name="search_word" class="form-control" placeholder="조회할 환자번호를 검색하세요(전체조회 enter입력)." autofocus>

</form>
	
		<div class = "table" align="center"> 
    		<div class = "row header">
            <div class="cell">
              차트 번호
            </div>
            <div class="cell">
              진료 날짜
            </div>
            <div class="cell">
              의사 번호
            </div>
            <div class="cell">
              환자 번호
            </div>
            <div class="cell">
              질병 번호
            </div>
			</div>
      <?php

// 테이블에서 idx를 기준으로 내림차순해서 5개까지 표시
  $sql =mq("SELECT * FROM chart where patient_id LIKE '%$search_word%' order by chart_id desc limit 0,5 "); 
    while($chart = $sql->fetch_array())
    { 
?>
		<div class="row" onclick="location.href='./chart_detail.php?chart_id=<?php echo $chart['chart_id'] ?>'">
        <div class="cell" data-title="차트 번호">
        <?php echo $chart['chart_id'] ?>
        </div>
        <div class="cell" data-title="진료 날짜" ondblclick="dbl_click()">
          <span id="date"> <?php echo $chart['treat_date'] ?> </span>
        </div>
        <div class="cell" data-title="의사 번호">
          <?php echo $chart['doctor_id'] ?>
        </div>
          <div class="cell" data-title="환자 번호">
            <?php echo $chart['patient_id'] ?>
          </div>
          <div class="cell" data-title="질병 번호">
            <?php echo $chart['disease_id'] ?>
          </div>
		</div>
      <?php } ?>
  </div>
  <div align="center">
		<input type="button" value="차트작성" class="button" onclick= "location.href='./chart_create.php'">
		</div>
</body>
</html>
<style>
    .form-control{
        width: 300px;
        height: 30px;
        margin-left: 40%;
        margin-top:10px;
}
</style>