<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section class="main">
        <nav>
            <a href="#" class="logo">
                <img src="images/arg3.png"/>
            </a>
            <ul class="menu">
                <li><a href="#" class="active">HOME</a></li>
                <li><a href="#about">ABOUT</a></li>
                <li><a href="#Contact us">CONTACT US</a></li>
                <li><a href="register.php">REGISTRATION</a></li>
                <li><a href="login.php">LOGIN</a></li>
            </ul>
        </nav>
        <div class="main-heading">
            <h1> Build your resume within a minutes!!!</h1>
            <p>Our resume builder will save you time creating your resume.Simply fill the required credentials and get your resume.</p>
            <a class="main-btn" href="login.php">Make my resume!</a>
        </div>
    </section>

    <section class="features">
        <div class="features-container">

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/info-icon1.png"/>
                </div>
                <div class="f-text">
                    <h4>Web Development</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="#" class="main-btn">CHECK</a>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/info-icon1.png"/>
                </div>
                <div class="f-text">
                    <h4>Software Development</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="#" class="main-btn">CHECK</a>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/info-icon1.png"/>
                </div>
                <div class="f-text">
                    <h4>IT Development</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="#" class="main-btn">CHECK</a>
                </div>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="about-img">
            <img src="images/about.png" alt="">
        </div>
        <div class="about-text"><a id="about"></a>
            <h2>Start Tracking your statistics</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit aliquam illum officia facere unde consectetur ducimus veniam. Possimus sequi excepturi, sed veritatis ab, vitae, tempore dolorum doloremque libero eos nihil?</p>
            <button href="#" class="main-btn">Read More</button>
        </div>
    </section>

    <section class="contact" >
        <div class="contact-heading">
            <h1><a id="Contact us"></a> CONTACT US</h1>
            <p>Share your feedback and comment with us.</p>
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