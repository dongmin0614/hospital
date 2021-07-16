<?php
?>

<html>
<head>
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
	function open_dept(){
		var f = document.f1;
		window.open("dept_list.php","child3","width=800,height=300");
	}
</script>
</head>
<body>
<header>
    	<?php include "header.php";?>
</header>
<h1 align="center">예약 하기</h1>

<form method = "get" action = "./reservation_insert.php">
        <table  style="padding-top:50px" align = center width=700 border=0 cellpadding=2 >
                <tr>
                <td height=20 align= center bgcolor=#000><font color=white>예약 </font></td>
                </tr>
                <tr>
                <td bgcolor=white>
                <table class = "table2">
                        <tr>
                        <td>등록일</td>
                        <td><input type = "date" name = "reg_date" size=20 > </td>
                        </tr>
 
                        <tr>
                        <td>의사번호</td>
                        <td><input type = "text" id ="doctor_id" name ="doctor_id" size="20" onclick="open_doctor()"></td>
                         
                        </tr>
 						
 						 <tr>
                        <td>환자번호</td>                       
                        <td><input type = "text" id="patient_id" name = "patient_id" size="20" onclick="open_patient()">
                        </td>
                        </tr>
                       
                        </table>
 			
                        
                       <div align="center">
						<input type="submit" value="예약하기" id="button" >
						</div>
		
                </td>
                </tr>
        </table>
        </form>

</body>
</html>