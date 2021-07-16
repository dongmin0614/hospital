<?php

include("./dbconn.php");

$patient_id = $_GET['patient_id'];

?>

<html>
<head>
    <title>환자 진료정보</title>

    <link rel="stylesheet" type="text/css" href="./css/table_main.css">
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
</html>
<body>
<header>
    <?php include "header.php"; ?>
</header>
<h1 align="center">환자 진료정보</h1>

<div class="table" align="center">
    <div class="row header">
        <div class="cell">
            차트번호
        </div>
        <div class="cell">
            이름
        </div>
        <div class="cell">
            진료의사
        </div>
        <div class="cell">
            병명
        </div>
        <div class="cell">
            진료 날짜
        </div>
    </div>

    <?php
    $sql = mq("SELECT p.name AS patient_name, d.name AS doctor_name, c.chart_id AS chart_id, e.disease_name AS disease_name, c.treat_date AS date FROM chart c 
    INNER JOIN doctor d ON c.doctor_id = d.doctor_id 
    INNER JOIN patient p ON c.patient_id = p.patient_id 
    INNER JOIN disease e ON c.disease_id = e.disease_id 
    WHERE p.patient_id = '$patient_id'");

    while ($patient = $sql->fetch_array()) { ?>

        <div class="row">
            <div class="cell" data-title="차트번호">
                <?php echo $patient['chart_id']; ?>
            </div>
            <div class="cell" data-title="이름">
                <?php echo $patient['patient_name']; ?>
            </div>
            <div class="cell" data-title="진료의사">
                <?php echo $patient['doctor_name'] ?>
            </div>
            <div class="cell" data-title="병명">
                <?php echo $patient['disease_name'] ?>
            </div>
            <div class="cell" data-title="진료날짜">
                <?php echo $patient['date'] ?>
            </div>
        </div>

    <?php }
    ?>
</div>


<h1 align="center">환자 예약정보</h1>

<div class="table" align="center">
    <div class="row header">
        <div class="cell">
            예약번호
        </div>
        <div class="cell">
            이름
        </div>
        <div class="cell">
            담당의사
        </div>
        <div class="cell">
            예약날짜
        </div>
    </div>

    <?php
    $sql = mq("select p.name as patient_name, d.name as doctor_name, reg_id , reg_date from reservation r 
    INNER JOIN doctor d on r.doctor_id = d.doctor_id 
    INNER JOIN patient p on r.patient_id = p.patient_id 
    WHERE p.patient_id = '$patient_id'");

    while ($patient = $sql->fetch_array()) { ?>

        <div class="row">
            <div class="cell" data-title="예약번호">
                <?php echo $patient['reg_id']; ?>
            </div>
            <div class="cell" data-title="이름">
                <?php echo $patient['patient_name']; ?>
            </div>
            <div class="cell" data-title="담당의사">
                <?php echo $patient['doctor_name'] ?>
            </div>
            <div class="cell" data-title="예약날짜">
                <?php echo $patient['reg_date']; ?>
            </div>
        </div>

    <?php }
    ?>
</div>

<div align="center">
    <input type="button" value="확인" class="button" onclick="location.href='./patient.php'">
</div>

</body>
