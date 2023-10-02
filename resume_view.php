<?php
session_start();
require_once "db_conn/login_check.php";
require_once "controllers/resume.php";
$datas=$obj->AllShow();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Login System</title>
    <style>
    label,
    table {
        color: #bdc3c7;
    }
    </style>
</head>

<body>
    <section class="main">
        <nav>
            <a href="#" class="logo">
                <img src="images/arg3.png" />
            </a>
            <ul class="menu">
                <li><a href="index.php">HOME</a></li>
                
                <li><a href="login.php" >LOGOUT</a></li>
            </ul>
        </nav>
        <div class="main-heading">
            <h1> Build your resume within a minutes!!!</h1>
            <p>Our resume builder will save you time creating your resume.Simply fill the required credentials and get your resume.</p>
            <a class="main-btn" href="#resume">Resume View!</a>
        </div>
    </section>
    <div class="container mt-4" id="resume">
        <table class="table">
            <thead>
                <tr>
                    <th>SI. No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i=1;
                foreach($datas as $key=>$value){
                    ?>
                <tr>
                    <td><?=$i++?></td>
                    <td><?=$value['name']?></td>
                    <td><?=$value['email']?></td>
                    <td><?=$value['mobile']?></td>
                    <td><a href="resume_edit.php?id=<?=$value['id']?>"><button class="btn btn-success">Edit</button></a>
                    <a href="resume_print.php?id=<?=$value['id']?>"><button class="btn btn-info">Print</button></a>  </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <br>
    <br> <br>
    <br>
    <br> <br>
    <section class="footer">
        <div class="footer-heading">
            <h1>AUTOMATED RESUME GENERATOR</h1>
            <p>MADE BY ADARSH AND TEAM | ©COPYRIGHT SINCE 2022 | ALL TERMS AND CONDITION APPLIED </p>
        </div>
    </section>
</body>

</html>