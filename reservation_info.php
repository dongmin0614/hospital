<?php

include("./dbconn.php");


if (isset($_GET["reg_id"]))
    $reg_id = $_GET["reg_id"];
else {
    $reg_id = null;
}

$sql = "SELECT reg_id, reg_date, doctor_id, patient_id FROM reservation WHERE reg_id = $reg_id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

$sql2 = "SELECT doctor.name , dept.dept_name FROM reservation , doctor ,dept
        WHERE reservation.doctor_id = doctor.doctor_id
        AND doctor.dept_id = dept.dept_id 
        AND reservation.reg_id = $reg_id";

$result2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_array($result2);

$sql3 = "SELECT patient.name FROM reservation , patient
        WHERE reservation.patient_id = patient.patient_id
        AND reservation.reg_id = $reg_id";
$result3 = mysqli_query($conn, $sql3);
$row3 = mysqli_fetch_array($result3);

?>

<html>
<head>
    <title>예약 상세페이지</title>

    <link rel="stylesheet" type="text/css" href="./css/table_main.css">

    <script type="text/javascript">
        function dbl_click() {
            const span = document.getElementById("date");
            const dateValue = document.getElementById("date").innerHTML.trim();

            span.remove();
            const div = document.getElementById("dateDiv");
            const newS = document.createElement("span");
            newS.innerHTML = "<input type='date' placeholder='날짜' id='dateId' name='dateId'>";
            div.appendChild(newS);
            document.getElementById('dateId').value = dateValue;
        }
    </script>

    <style type="text/css">
        .button {

            width: 100px;

            background-color: #000;

            border: none;

            color: #fff;

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
    <?php include "header.php"; ?>
</header>
<h1 align="center">예약 상세 확인</h1>

<form method="post" id="modify_form" action="./reservation_modify.php?reg_id=<?php echo $reg_id ?>">
    <div class="table" align="center">
        <div class="row header">
            <div class="cell">
                항목
            </div>
            <div class="cell">
                내용
            </div>
        </div>

        <div class="row">
            <div class="cell" data-title="항목">
                예약번호
            </div>
            <div class="cell" data-title="내용">
                <?php echo $reg_id ?>
            </div>
        </div>

        <div class="row" ondblclick="dbl_click()">
            <div class="cell" data-title="항목">
                예약날짜
            </div>
            <div class="cell" data-title="내용" id="dateDiv">
                <span id="date"><?php echo $row['reg_date'] ?></span>
            </div>
        </div>

        <div class="row">
            <div class="cell" data-title="항목">
                부서
            </div>
            <div class="cell" data-title="내용">
                <?php echo $row2['dept_name'] ?>
            </div>
        </div>


        <div class="row">
            <div class="cell" data-title="항목">
                담당의사
            </div>
            <div class="cell" data-title="내용">
                <?php echo $row2['name'] ?>
            </div>
        </div>

        <div class="row">
            <div class="cell" data-title="항목">
                환자이름
            </div>
            <div class="cell" data-title="내용">
                <?php echo $row3['name'] ?>
            </div>
        </div>
    </div>

    <div align="center">
        <input type="submit" value="수정" class="button">
        <input type="button" value="삭제" class="button"
               onclick="location.href='./reservation_delete.php?reg_id=<?php echo $reg_id ?>'">
        <input type="button" value="목록" class="button" onclick="location.href='./reservation.php'">
    </div>
</form>


</body>
</html>