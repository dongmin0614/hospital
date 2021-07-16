<?php

include("./dbconn.php");

?>

<html>
<head>
    <title>의사 목록</title>

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
<h1 align="center">의사 목록</h1>

<div class = "table" align="center">
    <div class = "row header">
        <div class="cell">
            의사 번호
        </div>
        <div class="cell">
            부서
        </div>
        <div class="cell">
            이름
        </div>
        <div class="cell">
            주민등록번호
        </div>
        <div class="cell">
            휴대폰번호
        </div>
        <div class="cell">
            이메일
        </div>
        <div class="cell">
            수정
        </div>
        <div class="cell">
            삭제
        </div>

    </div>

    <?php
    $sql = mq("SELECT doctor_id, dept_name, name, birth, phone, mail FROM doctor INNER JOIN dept ON doctor.dept_id = dept.dept_id ");
    while( $doctor = $sql->fetch_array()){ ?>

        <div class="row">
            <div class="cell" data-title="의사 번호">
                <?php echo $doctor['doctor_id']; ?>
            </div>
            <div class="cell" data-title="부서">
                <?php echo $doctor['dept_name'];?>
            </div>
            <div class="cell" data-title="이름">
                <?php echo $doctor['name']?>
            </div>
            <div class="cell" data-title="주민등록번호">
                <?php echo $doctor['birth']; ?>
            </div>
            <div class="cell" data-title="휴대폰번호">
                <?php echo $doctor['phone']?>
            </div>
            <div class="cell" data-title="메일">
                <?php echo $doctor['mail']; ?>
            </div>
            <div class="cell" data-title="수정">
                <a href="./doctor_modify_form.php?doctor_id=<?php echo $doctor['doctor_id'] ?>"><button>수정</button></a></td>
            </div>
            <div class="cell" data-title="삭제">
                <a href="./doctor_delete.php?doctor_id=<?php echo $doctor['doctor_id'] ?>"><button>삭제</button></a></td>
            </div>
        </div>

    <?php }
    ?>
</div>

<div align="center">
    <input type="button" value="의사 등록" class="button" onclick= "location.href='./doctor_form.php'">
</div>

</body>
