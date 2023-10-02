<?php
session_start();
require_once "db_conn/login_check.php";
require_once "controllers/resume.php";
if(isset($_POST['save'])){
    $obj->Save($_POST,$_FILES);
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
    <title>RESUME FORM</title>
    <style>
    label,table {
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
                <li><a href="register.php">REGISTRATION</a></li>
                <li><a href="logout.php">LOGOUT</a></li>
            </ul>
        </nav>
       
    </section>
    <div class="container mt-4" id="resume">
        <h1>Resume Form.</h1> <br>
        <form action="" method="post" enctype="multipart/form-data">


            <div class="form-group">
                <div class="row">
                    <label class="col-md-3">Name</label>
                    <input type="text" class="form-control col-md-9" name="name" placeholder="Name">
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <label class="col-md-3">Semester and Branch Name </label>
                    <input type="text" class="form-control col-md-9" name="sem_branch"
                        placeholder="Semester and Branch Name">
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label class="col-md-3">Address</label>
                    <textarea name="address" class="form-control col-md-9" placeholder="Address"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label class="col-md-3">Mobile Number </label>
                    <input type="number" class="form-control col-md-9" name="mobile" placeholder="Mobile Number">
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label class="col-md-3">Email</label>
                    <input type="email" class="form-control col-md-9" name="email" placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label class="col-md-3">Objective</label>
                    <textarea name="objective" class="form-control col-md-9" placeholder="Objective"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label class="col-md-3">Work Experience</label>
                    <textarea name="work_experience" class="form-control col-md-9"
                        placeholder="Work Experience"></textarea>
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
                <tr>
                    <th>Degree</th>
                    <th>Name of The Institute/School</th>
                    <th>Name of Board/Univerversity</th>
                    <th>Year of Passing</th>
                    <th>%/CGPA</th>
                </tr>
                <tr>
                    <td><input type="text" name="degree[]" class="form-control" placeholder="Degree"></td>
                    <td><input type="text" name="school[]" class="form-control"
                            placeholder="Name of The Institute/School">
                    </td>
                    <td><input type="text" name="board[]" class="form-control"
                            placeholder="Name of Board/Univerversity">
                    </td>
                    <td><input type="text" name="pass[]" class="form-control" placeholder="Year of Passing"></td>
                    <td><input type="text" name="cgpa[]" class="form-control" placeholder="%/CGPA"></td>
                </tr>
                <tr>
                    <td><input type="text" name="degree[]" class="form-control" placeholder="Degree"></td>
                    <td><input type="text" name="school[]" class="form-control"
                            placeholder="Name of The Institute/School">
                    </td>
                    <td><input type="text" name="board[]" class="form-control"
                            placeholder="Name of Board/Univerversity">
                    </td>
                    <td><input type="text" name="pass[]" class="form-control" placeholder="Year of Passing"></td>
                    <td><input type="text" name="cgpa[]" class="form-control" placeholder="%/CGPA"></td>
                </tr>
                <tr>
                    <td><input type="text" name="degree[]" class="form-control" placeholder="Degree"></td>
                    <td><input type="text" name="school[]" class="form-control"
                            placeholder="Name of The Institute/School">
                    </td>
                    <td><input type="text" name="board[]" class="form-control"
                            placeholder="Name of Board/Univerversity">
                    </td>
                    <td><input type="text" name="pass[]" class="form-control" placeholder="Year of Passing"></td>
                    <td><input type="text" name="cgpa[]" class="form-control" placeholder="%/CGPA"></td>
                </tr>
            </table>
            <div class="form-group">
                <div class="row">
                    <label class="col-md-3">Technical Skill</label>
                    <textarea name="technical_skill" class="form-control col-md-9" placeholder="Objective"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label class="col-md-3">Course/Training</label>
                    <textarea name="course" class="form-control col-md-9" placeholder="Course/Training"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label class="col-md-3"><h2>Personal Details</h2></label>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label class="col-md-3">Father's Name </label>
                    <input type="text" name="father" class="form-control col-md-9" placeholder="Father's Name">
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label class="col-md-3">Mother's Name</label>
                    <input type="text" name="mother" class="form-control col-md-9" placeholder="Mother's Name">
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label class="col-md-3">Date of Birth</label>
                    <input type="date" name="dob" class="form-control col-md-9">
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label class="col-md-3">Gender</label>
                    <input type="text" name="gender" placeholder="Gender" class="form-control col-md-9">
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label class="col-md-3">Marital Status</label>
                    <input type="text" name="marital_status" placeholder="Marital Status" class="form-control col-md-9">
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label class="col-md-3">Nationality</label>
                    <input type="text" name="nationality" placeholder="Nationality" class="form-control col-md-9">
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label class="col-md-3">Languages Known</label>
                    <input type="text" name="language" placeholder="Languages Known" class="form-control col-md-9">
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label class="col-md-3">Hobbies</label>
                    <input type="text" name="hobbies" placeholder="Hobbies" class="form-control col-md-9">
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label class="col-md-3">Declaration</label>
                    <textarea name="declaration" placeholder="Declaration"
                        class="form-control col-md-9">I am Prince Kumar</textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label class="col-md-3">Photo</label>
                    <input type="file" name="photo" placeholder="Photo" require class="form-control col-md-9">
                </div>
            </div>
            <input type="submit" class="btn btn-success" name="save" value="Save">
        </form>
        <br>
        <br>
        <br>
    </div>
    <section class="footer">
        <div class="footer-heading">
            <h1>AUTOMATED RESUME GENERATOR</h1>
            <p>MADE BY ADARSH AND TEAM | ©COPYRIGHT SINCE 2022 | ALL TERMS AND CONDITION APPLIED </p>
        </div>
    </section>
</body>

</html>