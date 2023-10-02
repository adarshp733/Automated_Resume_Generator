<?php
session_start();
require_once "controllers/user.php";
if(isset($_POST['register'])){
  $obj->Save($_POST);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">


    <title>LOGIN_FORM</title>
  </head>
  <body>
  <section class="main">
        <nav>
            <a href="#" class="logo">
                <img src="images/arg3.png"/>
            </a>
            <ul class="menu">
                <li><a href="index.php" >HOME</a></li>
                <li><a href="register.php" class="active">REGISTRATION</a></li>
                <li><a href="login.php">LOGIN</a></li>
            </ul>
        </nav>
        <div class="main-heading">
            <h1> Build your resume within a minutes!!!</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio nulla expedita eveniet, soluta rerum facilis!</p>
            <a class="main-btn" href="#register">Please register here!</a>
        </div>
  </section>

<div class="container mt-4">
<h3>Create a new user Id :</h3>
<hr><a id="register"></a>
<form action="" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Username</label>
      <input type="text" class="form-control" name="name" id="inputEmail4" placeholder="Enter your Username">
    </div>
    <br>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" name ="password" id="inputPassword4" placeholder="Enter Password">
    </div>
  </div>
  <div class="form-group">
      <label for="inputPassword4">Confirm Password</label>
      <input type="password" class="form-control" name ="confirm_password" id="inputPassword" placeholder="Confirm Password">
    </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Are you agree ?
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary" name="register">Sign in</button>
</form>
</div>
<br>
<br>
<section class="footer">
        <div class="footer-heading">
            <h1>AUTOMATED RESUME GENERATOR</h1>
            <p>MADE BY ADARSH AND TEAM | ©COPYRIGHT SINCE 2022 | ALL TERMS AND CONDITION APPLIED </p>
        </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
