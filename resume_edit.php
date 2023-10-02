<?php
session_start();
require_once "db_conn/login_check.php";
require_once "controllers/resume.php";
if(isset($_REQUEST['id'])){
   $data= $obj->Show($_REQUEST['id']);
}

if(isset($_POST['save'])){
    $obj->Edit($_POST,$_FILES);
}
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
                <li><a href="welcome.php">CONTACT US</a></li>
                <li><a href="login.php" >LOGOUT</a></li>
            </ul>
        </nav>
        <div class="main-heading">
            <h1> Build your resume within a minutes!!!</h1>
            <p>Our resume builder will save you time creating your resume.Simply fill the required credentials and get your resume.</p>
            <a class="main-btn" href="#resume">Resume!</a>
        </div>
    </section>
    <div class="container mt-4" id="resume">
    <h1>Resume Form.</h1> <br>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <div class="row">
                    <input type="hidden" name='parent_id' value="<?=$data['id']?>">
                    <label class="col-md-3">Name</label>
                    <input type="text" class="form-control col-md-9" value="<?=$data['name']?>" name="name"
                        placeholder="Name">
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <label class="col-md-3">Semester and Branch Name </label>
                    <input type="text" class="form-control col-md-9" name="sem_branch" value="<?=$data['sem_branch']?>"
                        placeholder="Semester and Branch Name">
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label class="col-md-3">Address</label>
                    <textarea name="address" class="form-control col-md-9"
                        placeholder="Address"><?=$data['address']?></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label class="col-md-3">Mobile Number </label>
                    <input type="number" class="form-control col-md-9" value="<?=$data['mobile']?>" name="mobile"
                        placeholder="Mobile Number">
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label class="col-md-3">Email</label>
                    <input type="email" class="form-control col-md-9" value="<?=$data['email']?>" name="email"
                        placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label class="col-md-3">Objective</label>
                    <textarea name="objective" class="form-control col-md-9" value="<?=$data['objective']?>"
                        placeholder="Objective"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label class="col-md-3">Work Experience</label>
                    <textarea name="work_experience" class="form-control col-md-9"
                        placeholder="Work Experience"><?=$data['work_experience']?></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label>
                        <h2>Eduction Qualification</h2>
                    </label>
                </div>
            </div>
            <table class="table table-striped" style="color: #bdc3c7;">
                <thead>
                    <tr>
                        <th>Degree</th>
                        <th>Name of The Institute/School</th>
                        <th>Name of Board/Univerversity</th>
                        <th>Year of Passing</th>
                        <th>%/CGPA</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    foreach($data['child'] as $key=>$value){
                ?>
                    <tr>
                        <td><input type="hidden" name="child_id[]" value="<?=$value['id']?>">
                            <input type="text" name="degree[]" class="form-control" value="<?=$value['degree']?>"
                                placeholder="Degree">
                        </td>
                        <td><input type="text" name="school[]" class="form-control" value="<?=$value['school']?>"
                                placeholder="Name of The Institute/School">
                        </td>
                        <td><input type="text" name="board[]" class="form-control" value="<?=$value['board']?>"
                                placeholder="Name of Board/Univerversity">
                        </td>
                        <td><input type="text" name="pass[]" class="form-control" value="<?=$value['pass']?>"
                                placeholder="Year of Passing"></td>
                        <td><input type="text" name="cgpa[]" class="form-control" value="<?=$value['cgpa']?>"
                                placeholder="%/CGPA"></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div class="form-group">
                <div class="row">
                    <label class="col-md-3">Technical Skill</label>
                    <textarea name="technical_skill" class="form-control col-md-9"
                        placeholder="Objective"><?=$data['technical_skill']?></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label class="col-md-3">Course/Training</label>
                    <textarea name="course" class="form-control col-md-9"
                        placeholder="Course/Training"><?=$data['course']?></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label class="col-md-3">
                        <h2>Personal Details</h2>
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label class="col-md-3">Father's Name </label>
                    <input type="text" name="father" class="form-control col-md-9" value="<?=$data['father']?>"
                        placeholder="Father's Name">
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label class="col-md-3">Mother's Name</label>
                    <input type="text" name="mother" class="form-control col-md-9" value="<?=$data['mother']?>"
                        placeholder="Mother's Name">
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label class="col-md-3">Date of Birth</label>
                    <input type="date" name="dob" value="<?=$data['dob']?>" class="form-control col-md-9">
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label class="col-md-3">Gender</label>
                    <input type="text" name="gender" value="<?=$data['gender']?>" placeholder="Gender"
                        class="form-control col-md-9">
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label class="col-md-3">Marital Status</label>
                    <input type="text" name="marital_status" value="<?=$data['marital_status']?>"
                        placeholder="Marital Status" class="form-control col-md-9">
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label class="col-md-3">Nationality</label>
                    <input type="text" name="nationality" value="<?=$data['nationality']?>" placeholder="Nationality"
                        class="form-control col-md-9">
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label class="col-md-3">Languages Known</label>
                    <input type="text" name="language" value="<?=$data['language']?>" placeholder="Languages Known"
                        class="form-control col-md-9">
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label class="col-md-3">Hobbies</label>
                    <input type="text" name="hobbies" value="<?=$data['hobbies']?>" placeholder="Hobbies"
                        class="form-control col-md-9">
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label class="col-md-3">Declaration</label>
                    <textarea name="declaration" placeholder="Declaration"
                        class="form-control col-md-9"><?=$data['declaration']?></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label class="col-md-3">Photo</label>
                    <input type="file" name="photo" placeholder="Photo"  class="form-control col-md-9">
                </div>
            </div>
            <input type="submit" class="btn btn-success" name="save" value="Save">
        </form>
    </div>
    <br>
    <br><br>
    <section class="footer">
        <div class="footer-heading">
            <h1>AUTOMATED RESUME GENERATOR</h1>
            <p>MADE BY ADARSH AND TEAM | ©COPYRIGHT SINCE 2022 | ALL TERMS AND CONDITION APPLIED </p>
        </div>
    </section>
</body>

</html>