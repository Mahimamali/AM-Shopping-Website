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
    <title>Product Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<section id="header">
    <a href="#"><img src="img/logo1.png" class="logo" alt="logo" width="100px"></a>
    <div>
        <ul id="navbar">
        <li><a href="index.php">Home</a></li>
        <li><a class="active" href="shop.php">Shop</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="includes\registration.php">Registration</a></li>
        <li><a href="includes\login.php">Login</a></li>
        <li><a href="cart.php"><i class="far fa-shopping-bag"></i></a></li>
        <a href="#" id="close"><i class="far fa-times"></i></a>
        </ul>
    </div>
    <div id="mobile">
    <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
    <i id="bar" class="fas fa-outdent"></i>
    </div>
</section>

<section id="prodetails" class="section-p1">
        <div class="single-pro-image">
            <img src="https://www.andindia.com/media/catalog/product/cache/8ba85772601582a264183d0a493354f1/a/n/and-pink-top-ss22ak052tfk-_5_.jpg" width="100%" id="MainImg" alt="">
            
            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="https://www.andindia.com/media/catalog/product/cache/8ba85772601582a264183d0a493354f1/a/n/and-pink-top-ss22ak052tfk-_2_thumbnail.jpg" width="100%" class="small-img" alt=""> 
                </div>

                <div class="small-img-col">
                    <img src="https://www.andindia.com/media/catalog/product/cache/8ba85772601582a264183d0a493354f1/a/n/and-pink-top-ss22ak052tfk-_13_.jpg" width="100%" class="small-img" alt=""> 
                </div>
                <div class="small-img-col">
                    <img src="https://www.andindia.com/media/catalog/product/cache/8ba85772601582a264183d0a493354f1/a/n/and-pink-top-ss22ak052tfk-_3_.jpg" width="100%" class="small-img" alt=""> 
                </div>
                <div class="small-img-col">
                    <img src="https://www.andindia.com/media/catalog/product/cache/8ba85772601582a264183d0a493354f1/a/n/and-pink-top-ss22ak052tfk-_1_.jpg" width="100%" class="small-img" alt=""> 
                </div>
            </div>
        </div>

        <div class="single-pro-details">
            <h6>Home/ Clothing/ Shirts & Tops</h6>
            <h4>Women's Clothing</h4>
            <h2>Rs 800</h2>
            <select>
                <option>Select Size</option>
                <option>XL</option>
                <option>Large</option>
                <option>Medium</option>
                <option>Small</option>
            </select>
            <input type="number" value="1">
            <button class="normal">Add to Cart</button>
            <h4>Product Details</h4>
            <span>Make a fashionable statement in the next coffee date with this undoubtedly
                cool knitted t-shirt for women from AND. Made from light and breathable material
                for uninterrupted movement featuring a chevron knit pattern, athletic V-neck and
                short sleeves. Team this casual top with a range of jeans and sneakers.</span>
        </div>
</section>
    
<section id="newsletter" class="section-p1 section-m1">
    <div class="newstext">
    <h4>Sign Up For Newsletters</h4>
    <p>Get E-mail updates about our latest shop and <span>special offers.</span></p>
    </div>
    <div class="form">
    <input type="text" placeholder="Your email address">
    <button class="normal">Sign Up</button>
    </div>
</section>

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

    <script>
        var MainImg=document.getElementById("MainImg");
        var smallimg=document.getElementsByClassName("small-img");

        smallimg[0].onclick=function(){
            MainImg.src=smallimg[0].src;
        }
        smallimg[1].onclick=function(){
            MainImg.src=smallimg[1].src;
        }
        smallimg[2].onclick=function(){
            MainImg.src=smallimg[2].src;
        }
        smallimg[3].onclick=function(){
            MainImg.src=smallimg[3].src;
        }
    </script>
    <script src="script.js"></script>
</body>
</html>
