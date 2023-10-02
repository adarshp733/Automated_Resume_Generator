<?php
session_start();
require_once "db_conn/login_check.php";
require_once "controllers/resume.php";
if(isset($_REQUEST['id'])){
   $parntList= $obj->Show($_REQUEST['id']);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print</title>
</head>

<body>
    <div style="border-style: solid;padding:10px">
        <div style="float: left;width:80%;height:150px ">
            <h2><u><?=$parntList['name']?></u></h2>
            <?=@$parntList['sem_branch']?><br>
            <b><u>Mobile: </u></b> <?=@$parntList['mobile']?><br>
            <b><u>Email: </u></b> <?=@$parntList['email']?><br>
            <b><u>Address: </u></b> <?=@$parntList['address']?>
            <br>
        </div>
        <div style="float:right;width:20%">
            <img src="<?=@$parntList['photo']?>" style="width:150px;height:150px ">
        </div>
        <div style="display: flex;clear:both"></div>
        <hr style=" border: 2px solid black;">
        <h3>Objective</h3>
        <hr>
        <?=@$parntList['objective']?>
        <hr style=" border: 2px solid black;">
        <h3>Work Experience</h3>
        <hr>
        <?=@$parntList['work_experience']?>
        <hr style=" border: 2px solid black;">
        <h3>Eduction Qualification</h3>
        <table border='1' style="  border-collapse: collapse;width:100%">
            <tr>
                <th>Degree</th>
                <th>Name of The Institute/School</th>
                <th>Name of Board/Univerversity</th>
                <th>Year of Passing</th>
                <th>%/CGPA</th>
            </tr>
            <?php foreach($parntList['child'] as $key=>$value){ ?>
            <tr>
                <td><?=@$value['degree']?></td>
                <td><?=@$value['school']?></td>
                <td><?=@$value['board']?></td>
                <td><?=@$value['pass']?></td>
                <td><?=@$value['cgpa']?></td>
            </tr>
            <?php
            }
            ?>
        </table>
        <hr style=" border: 2px solid black;">
        <h3>Technical Skill</h3>
        <hr>
        <?=@$parntList['technical_skill']?>
        <hr style=" border: 2px solid black;">
        <h3>Course/Training</h3>
        <hr>
        <?=@$parntList['course']?>
        <hr style=" border: 2px solid black;">
        <h3>Personal Details</h3>
        <hr>
        <ul>
            <li>Father's Name: <?=@$parntList['father']?></li>
            <li>Mother's Name: <?=@$parntList['mother']?></li>
            <li>Date of Birth: <?=@$parntList['dob']?></li>
            <li>Gender: <?=@$parntList['gender']?></li>
            <li>Marital Status: <?=@$parntList['marital_status']?></li>
            <li>Nationality: <?=@$parntList['nationality']?></li>
            <li>Languages Known: <?=@$parntList['language']?></li>
            <li>Hobbies: <?=@$parntList['hobbies']?></li>
        </ul>
        <hr style=" border: 2px solid black;">
        <h3>Declaration</h3>
        <hr>
        <?=@$parntList['declaration']?>

    </div>
    <script>
    //  window.print();
    </script>
</body>

</html>