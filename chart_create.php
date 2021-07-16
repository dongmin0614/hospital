<meta charset="UTF-8"/>
<?php 
include "dbconn.php";

$sql="SELECT chart_id from chart WHERE chart_id > 0 ORDER BY chart_id DESC LIMIT 1";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
//$last_id=mysql_insert_id($result);
//$last_id=$row[0]+1;

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>차트작성</title>
        <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
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
<h1 align="center">차트작성 하기</h1>

<form method = "post" action = "./chart_create_ok.php">
        <table  style="padding-top:50px" align = center width=700 border=0 cellpadding=2 >
                <tr>
                <td height=20 align= center bgcolor=#000><font color=white>차트작성 </font></td>
                </tr>
                <tr>
                <td bgcolor=white>
                <table class = "table2">
                        <tr>
                        <td>진료날짜</td>
                        <td><input type = "date" name = "chart_date" size=20 > </td>
                        </tr>
 
                        <tr>
                        <td>의사번호</td>
                        <td><input type = "text" id ="doctor_id" name ="doctor_id" size="20" onclick="open_doctor()"></td>
                        </tr>
 						
 						 <tr>
                        <td>환자번호</td>
                        <td><input type = "text" id="patient_id" name = "patient_id" size="20" onclick="open_patient()"></td>
                        </tr>
                       
                        <tr>
                        <td>질병번호</td>
                        <td><input type = "text" id="disease_id" name ="disease_id" size="20" onclick="open_disease()"></td>
                        </tr>

                        <tr>
                        <td>진료내용</td>
                        <td><input type = "text" name ="chart_treat_content" size="20" ></td>
                        </tr>

                        <tr>
                        <td>처방내용</td>
                        <td><input type = "text" name ="chart_prescribe_content" size="20" ></td>
                        </tr>

                        

                        </table>
 
                        
                       <div align="center">
						<input type="submit" value="작성완료" id="button" >
						</div>
		
                </td>
                </tr>
        </table>
        </form>
</body>
</html>

    <style>
        #id {
            width: 80px;
            margin-bottom: 1%;
        }
        #text, .text {
            width: 300px;
            height: 50px;
            font-size: 13pt;
            margin-bottom: 1%;

        }
        #textarea {
            width: 300px;
            height: 100px;
            margin-bottom: 1%;

        }
        #wrapper {
            /* border: 1px solid #FFBB00; */
            width: 90%;
            padding: 10px;
            position: absolute;
            top: 5%;
            overflow: hidden;

        }

        #contents {
            border: 1px solid #487BE1;
            width: 40%;
            float: left;
            padding: 10px;
            margin-left: 10%;
            margin-top: 5%;
        }

        #sidebar {
            border: 1px solid #487BE1;
            width: 40%;
            float: left;
            padding: 10px;
            margin-left: 10px;
            margin-top: 5%;
            font-size: 13pt;

        }
        #sidebar {
            overflow: auto;
            height: 100px;
        }
        .search {
            font-size: 13pt;
        }
        .option {
            height: 30px;
        }
    </style>