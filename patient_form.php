<!doctype html>
<head>
    <meta charset="UTF-8">
    <title>환자 등록</title>
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
    <h1 align="center">환자 등록</h1>
    <form method = "POST" action = "./patient_insert.php">
        <table  style="padding-top:50px" align = center width=700 border=0 cellpadding=2 >
            <tr>
                <td bgcolor=white>
                    <table class = "table2">
                        <tr>
                            <td>이름</td>
                            <td><input type = "text" name = "name" size=20 > </td>
                        </tr>
                        <tr>
                            <td>주민등록번호</td>
                            <td><input type = "text" name = "birthnumber" size=20 > </td>
                        </tr>
                        <tr>
                            <td>휴대폰번호</td>
                            <td><input type = "text" name = "phone" size=20 > </td>
                        </tr>
                        <tr>
                            <td>성별</td>
                            <td><input type = "text" name = "sex" size=20 > </td>
                        </tr>
                        <tr>
                            <td>키</td>
                            <td><input type = "text" name = "height" size=20 > </td>
                        </tr>
                        <tr>
                            <td>몸무게</td>
                            <td><input type = "text" name = "weight" size=20 > </td>
                        </tr>
                        <tr>
                            <td>혈액형</td>
                            <td><input type = "text" name = "blood" size=20 > </td>
                        </tr>


                    </table>


                    <div align="center">
                        <input type="submit" value="등록하기" id="button" >
                    </div>

                </td>
            </tr>
        </table>
    </form>
   
</body>
</html>