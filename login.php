<?php
session_start();
require_once "controllers/login.php";
if(isset($_POST['login'])){
  $obj->login_check($_POST['username'],$_POST['password']);
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


    <title>PHP Login System</title>
  </head>
  <body>
  <section class="main">
    <nav>
      <a href="#" class="logo">
        <img src="images/arg3.png"/>
      </a>
      <ul class="menu">
        <li><a href="index.php" >HOME</a></li>
        <li><a href="register.php">REGISTRATION</a></li>
        <li><a href="#" class="active">LOGIN</a></li>
      </ul>
    </nav>
    <div class="main-heading">
       <h1> Build your resume within a minutes!!!</h1>
          <p>Our resume builder will save you time creating your resume.Simply fill the required credentials and get your resume.</p>
          <a class="main-btn" href="#login">Please login here!</a>
    </div>
  </section>

<div class="container mt-4">
    <h2><strong> Please Login Here</strong></h2>
    <hr><a id="login"></a>
    <form action="" method="Post">
    <div class="form-group">
      <label for="inputEmail4">Username</label>
      <input type="text" class="form-control" name="username" id="inputEmail4" placeholder="Username">
    </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remember me.</label>
  </div>
  <button type="submit" name="login" class="btn btn-primary">Submit</button>
</form>
</div><br> <br>


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