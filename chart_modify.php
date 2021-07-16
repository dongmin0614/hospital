<meta charset="UTF-8"/>
<?php 
include "dbconn.php";

if (isset($_GET["chart_id"]))
    $chart_id = $_GET["chart_id"];
    else{
        $chart_id = null;
    }

	$sql = mq("select * from chart where chart_id='$chart_id';");
	$chart = $sql->fetch_array();
 ?>

<!doctype html>
<head>
<meta charset="UTF-8">
<title>차트수정</title>
<link rel="stylesheet" href="/css/style.css" />
<style>
        table.table2{
                border-collapse: separate;
                border-spacing: 1px;
                text-align: center;
                line-height: 1.5;
                border-top: 1px solid #ccc;
                margin : 20px 10px;
        }
        table.table2 tr {
                 width: 50px;
                 padding: 10px;
                font-weight: bold;
                vertical-align: top;
                border-bottom: 1px solid #ccc;
        }
        table.table2 td {
                 width: 600px;
                 padding: 10px;
                 vertical-align: top;
                 border-bottom: 1px solid #ccc;
        }
        
	
	#button {

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
 
<script type="text/javascript">
	function open_doctor(){
		child = window.open("doctor_list.php","child","width=800,height=300");
	
	}
	function open_patient(){
		child = window.open("patient_list.php","child","width=800,height=300");
	}
    function open_disease(){
		child = window.open("disease_list.php","child","width=800,height=300");
	}
</script>

</head>
<body>
<header>
    	<?php include "header.php";?>
</header>
<h1 align="center">차트수정 하기</h1>

<form method = "post" action = "./chart_modify_ok.php?chart_id=<?php echo $chart['chart_id'] ?>">
        <table  style="padding-top:50px" align = center width=700 border=0 cellpadding=2 >
                <tr>
                <td height=20 align= center bgcolor=#000><font color=white>차트수정 </font></td>
                </tr>
                <tr>
                <td bgcolor=white>
                <table class = "table2">
                        <tr>
                        <td>진료날짜</td>
                        <td><input type = "date" name = "chart_treat_date" size=20 value="<?php echo $chart['treat_date'] ?>" > </td>
                        </tr>
 
                        <tr>
                        <td>의사번호</td>
                        <td><input type = "text" id ="doctor_id" name ="doctor_id" size="20" value="<?php echo $chart['doctor_id'] ?>" onclick="open_doctor()"></td>
                        </tr>
 						
 						 <tr>
                        <td>환자번호</td>
                        <td><input type = "text" id="patient_id" name = "patient_id" size="20" value="<?php echo $chart['patient_id'] ?>" onclick="open_patient()"></td>
                        </tr>
                       
                        <tr>
                        <td>질병번호</td>
                        <td><input type = "text" id="disease_id" name ="disease_id" size="20" value="<?php echo $chart['disease_id'] ?>" onclick="open_disease()"></td>
                        </tr>

                        <tr>
                        <td>진료내용</td>
                        <td><input type = "text" name ="chart_treat_content" size="20" value="<?php echo $chart['treat_content'] ?>" ></td>
                        </tr>

                        <tr>
                        <td>처방내용</td>
                        <td><input type = "text" name ="chart_prescribe_content" size="20" value="<?php echo $chart['prescribe_content'] ?>" ></td>
                        </tr>

                        

                        </table>
 
                        
                       <div align="center">
						<input type="submit" value="수정완료" id="button" >
						</div>
		
                </td>
                </tr>
        </table>
        </form>
</body>
</html>