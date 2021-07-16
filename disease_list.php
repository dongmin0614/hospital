<?php

include("./dbconn.php");

if(empty($_REQUEST["search_word"])){ // 검색어가 empty일 때 예외처리를 해준다.

    $search_word ="";
    
    }else{
    
    $search_word =$_REQUEST["search_word"];
    
    }
$sql = "SELECT * FROM disease where code LIKE '%$search_word%' or disease_name LIKE '%$search_word%' order by disease_id asc" ;
$result = mysqli_query($conn, $sql);

?>

<html>
<head>
<title>질병리스트</title>
<link rel="stylesheet" type="text/css" href="./css/table_main.css">
<script type="text/javascript">
function setText(disease_id){
	opener.document.getElementById("disease_id").value = disease_id ;
	window.close()
}
</script>
</head>
<body>
<form class="navbar-form pull-left" method="get" action="">

<input type="text" name="search_word" class="form-control" placeholder="질병 관련내용을 입력하세요.  (전체조회: 빈칸입력) " autofocus>

</form>
<div class = "table" align="center"> 
    		<div class = "row header">
    			<div class="cell">
    				질병번호
    			</div>
                <div class="cell">
    				질병코드
    			</div>
    			<div class="cell">
    				질병이름
    			</div>
			</div>
			
			<?php 
	
	
			while( $row = mysqli_fetch_array( $result )){ ?>
		
		<div class="row" onclick="setText(<?php echo $row['disease_id'] ?>)">
			<div class="cell" data-title="질병번호">
				<span id="disease_id"> <?php echo $row['disease_id'] ?> </span>
			</div>
            <div class="cell" data-title="질병코드">
            <span>
				<?php echo $row['code'] ?> </span>
			</div>
			<div class="cell" data-title="질병이름">
            <span>
				<?php echo $row['disease_name'] ?> </span>
			</div>
		</div>
	
	<?php }
	mysqli_close($conn);     
	?>
		</div>
		</div>
</body>
</html>

<style>
    .form-control{
        width: 300px;
        height: 35px;
        margin-left: 35%;
        margin-top:10px;
}
</style>