<?php 
session_start();
include('includes/config.php');
error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equi="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AM-Shopping website</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section id="header">
    <a href="index.php"><img src="img/logo1.png" class="logo" alt="logo" width="100px"></a>
    <div>
        <ul id="navbar">
        <li><a href="index.php">Home</a></li>
        <li><a href="shop.php">Shop</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a class="active" href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="includes\registration.php">Registration</a></li>
        <li><a href="includes\login.php">Login</a></li>
        <li><a href="cart.php"><i class="far fa-shopping-bag"></i></a></li>
        <a href="#" id="close"><i class="far fa-times"></i></a>
        </ul>
    </div>
    <div id="mobile">
    <a href="cart.html"><i class="far fa-shopping-bag"></i></a>
    <i id="bar" class="fas fa-outdent"></i>
    </div>
</section>

<section id="page-header" class="about-header">
        <h2>#KnowUS</h2>
        <p>know everything about us!</h1>
</section>

<section id="about-head" class="section-p1">
    <center>
    <div>
        <h1>Who Are WE!</h1>
        <h4>know everything about us!  Need a new website for your fashion business? Emerging designers fashion website design inspiration here. #startupfashion #emergingdesigners</h4><br><br><br>
        <h1 style="color:#eb9524"><marquee behavior="alternate" direction="left" loop="6" scrollamount="5" scrolldelay="40" title="click here" width="75%" height="20%">know everything about us!  Need a new website for your fashion business? Emerging designers fashion website design inspiration here. #startupfashion #emergingdesigners #fashionbusiness…</marquee><br><br></h1>
        </div>
        <img src="img/about/a6.jpg" alt="" width="50%">
</center>


<footer class="section-p1">
        <div class="col">
            <img class=logo src="img/logo1.png" alt="logo" width="100px">
            <h4>Contact</h4>
            <p><strong>134 anyroad, St Anystreet, Anywhere</strong></p>
            <p><strong>Phone: </strong>123456789/+91 9999999999</p>
            <p><strong>Hours: </strong>10:00- 18:00, Mon- Sat</p>
            <div class="follow">
                <h4>Follow Us</h4>
                <div class="icon">
                <i class="fab fa-instagram"></i>
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-pinterest-p"></i>
                <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>

        <div class="col">
            <h4>About</h4>
            <a href="#">About Us</a>
            <a href="#">Delivery Information</a>
            <a h ref="#">Privacy Policy</a>
            <a href="#">Terms and Conditions</a>
            <a href="#">Contact Us</a>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a h ref="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>

        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store or Google Play</p>
            <div class="row">
                <img src="img/pay/app.jpg" alt="">
                <img src="img/pay/play.jpg" alt="">
            </div>
        <p>Secured Payment Gateways</p>
        <img src="img/pay/pay.png" alt="">
        </div>

        <div class="copyright">
            <p>@ 2022, MWA, HTML CSS Ecommerce website</p>
        </div>
</footer>

    <script src="script.js"></script>
</body>
</html>

