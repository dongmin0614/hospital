<?php

include("./dbconn.php");

?>

<html>
<head>
    <title>환자 목록</title>

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
</html>
<body>
<header>
    <?php include "header.php";?>
</header>
<h1 align="center">환자 목록</h1>

<div class = "table" align="center">
    <div class = "row header">
        <div class="cell">
            환자 번호
        </div>
        <div class="cell">
            환자 이름
        </div>
        <div class="cell">
            주민등록번호
        </div>
        <div class="cell">
            휴대폰 번호
        </div>
        <div class="cell">
            성별
        </div>
        <div class="cell">
            키
        </div>
        <div class="cell">
            몸무게
        </div>
        <div class="cell">
            혈액형
        </div>
        <div class="cell">
            수정
        </div>
        <div class="cell">
            삭제
        </div>

    </div>

    <?php
    $sql = mq("select * from patient");
    while( $patient = $sql->fetch_array()){ ?>

        <div class="row" onclick="location.href='./patient_info.php?patient_id=<?php echo $patient['patient_id'] ?>'">
            <div class="cell" data-title="환자 번호">
                <?php echo $patient['patient_id']; ?>
            </div>
            <div class="cell" data-title="이름">
                <?php echo $patient['name'];?>
            </div>
            <div class="cell" data-title="주민등록번호">
                <?php echo $patient['birthnumber']?>
            </div>
            <div class="cell" data-title="휴대폰 번호">
                <?php echo $patient['phone']; ?>
            </div>
            <div class="cell" data-title="성별">
                <?php echo $patient['sex']?>
            </div>
            <div class="cell" data-title="키">
                <?php echo $patient['height']; ?>
            </div>
            <div class="cell" data-title="몸무게">
                <?php echo $patient['weight']; ?>
            </div>
            <div class="cell" data-title="혈액형">
                <?php echo $patient['blood']; ?>
            </div>
            <div class="cell" data-title="수정">
                <a href="./patient_modify_form.php?patient_id=<?php echo $patient['patient_id'] ?>"><button>수정</button></a></td>
            </div>
            <div class="cell" data-title="삭제">
                <a href="./patient_delete.php?patient_id=<?php echo $patient['patient_id'] ?>"><button>삭제</button></a></td>
            </div>
        </div>

    <?php }
    ?>
</div>

<div align="center">
    <input type="button" value="환자 등록" class="button" onclick= "location.href='./patient_form.php'">
</div>

</body>
