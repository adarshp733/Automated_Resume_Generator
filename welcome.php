<?php 
session_start();
require_once "db_conn/login_check.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>


    <section class="main">
        <nav>
            <a href="#" class="logo">
                <img src="images/arg3.png"/>
            </a>
            <ul class="menu">
                <li><a href="#"><img src="https://img.icons8.com/material-rounded/24/000000/user.png"/><?php echo "Welcome " . $_SESSION['user_name'] ;?></a></li>
                <li><a href="#Contact us">CONTACT US</a></li>
                <li><a href="logout.php">LOGOUT</a></li>
            </ul>
        </nav>
        <div class="main-heading">
            <h1> Build your resume within a minutes!!!</h1>
            <p>Our resume builder will save you time creating your resume.Simply fill the required credentials and get your resume.</p>
            <a class="main-btn" href="resume.php">Make my resume!</a>
        </div>
    </section>

    <section class="features">
        <div class="features-container">

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/icons8-create-128.png"/>
                </div>
                <div class="f-text">
                    <a href="resume.php" class="main-btn">Create New Resume</a>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/icons8-download-resume-96.png"/>
                </div>
                <div class="f-text">
                    <a href="resume_view.php" class="main-btn">Download Resume</a>
                </div>
            </div>
    </section>

    <section class="contact" >
        <div class="contact-heading">
            <h1><a id="Contact us"></a> CONTACT US</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <form action="userinformation.php" method="post">
            <input type="text" name="user" placeholder="Enter your full name">
            <input type="email" name="email" placeholder="Enter your Email">
            <textarea type="message" placeholder="Enter your message here..."></textarea>
            <button class="main-btn contact-btn" type="submit">Contact</button>
        </form>
    </section>

    <section class="footer">
        <div class="footer-heading">
            <h1>AUTOMATED RESUME GENERATOR</h1>
            <p>MADE BY ADARSH AND TEAM | ©COPYRIGHT SINCE 2022 | ALL TERMS AND CONDITION APPLIED </p>
        </div>
    </section>

</body>
</html>