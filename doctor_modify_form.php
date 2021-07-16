<?php include("./dbconn.php");

$doctor_id =  $_GET['doctor_id'];
$doctor = mysqli_fetch_array(mq("select * from doctor where doctor_id ='$doctor_id'"));

?>


<!doctype html>
<head>
    <meta charset="UTF-8">
    <title>의사 수정</title>
    <script type="text/javascript">
    function open_dept(){
		child = window.open("dept_list.php","child","width=800,height=300");
	}
    </script>
    
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
</head>
<header>
    <?php include "header.php";?>
</header>
<body>
<h1 align="center">의사 수정</h1>
<form method = "POST" action = "./doctor_update.php?doctor_id=<?php echo $doctor['doctor_id'] ?>">
    <table  style="padding-top:50px" align = center width=700 border=0 cellpadding=2 >
        <tr>
            <td bgcolor=white>
                <table class = "table2">
                    <tr>
                        <td>부서번호</td>
                        <td><input type = "text" name = "dept_id" size=20 value="<?php echo $doctor['dept_id'] ?>" onclick="open_dept()" id="dept_id"> </td>
                    </tr>
                    <tr>
                        <td>이름</td>
                        <td><input type = "text" name = "name" size=20 value="<?php echo $doctor['name'] ?>"> </td>
                    </tr>
                    <tr>
                        <td>주민등록번호</td>
                        <td><input type = "text" name = "birth" size=20 value="<?php echo $doctor['birth'] ?>"> </td>
                    </tr>
                    <tr>
                        <td>휴대폰번호</td>
                        <td><input type = "text" name = "phone" size=20 value="<?php echo $doctor['phone'] ?>"> </td>
                    </tr>
                    <tr>
                        <td>이메일</td>
                        <td><input type = "text" name = "mail" size=20 value="<?php echo $doctor['mail'] ?>"> </td>
                    </tr>


                </table>


                <div align="center">
                    <input type="submit" value="수정하기" id="button" >
                </div>

            </td>
        </tr>
    </table>
</form>
z
</body>
</html>
