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
    <a href="cart.html"><i class="far fa-shopping-bag"></i></a>
    <i id="bar" class="fas fa-outdent"></i>
    </div>
</section>

<section id="page-header">
        <h2>#Stayhome offers</h2>
        <p>Save more with coupons & upto 70% off!</h1>
</section>

<section id="product1" class="section-p1">
        <div class="pro-container">
            <div class="pro">
                <a href="singleprod.php"><img src="https://www.andindia.com/media/catalog/product/cache/8ba85772601582a264183d0a493354f1/a/n/and-pink-top-ss22ak052tfk-_5_.jpg" alt=""> </a>
                <div class="des">
                    <span>tops</span>
                    <h5>Pink solid Top</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs 800</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>

            </div>
            <div class="pro">
                <a href="product2.php"><img src="https://www.andindia.com/media/catalog/product/cache/8ba85772601582a264183d0a493354f1/a/n/and-white-top-ss22ag021tss1--_2_.jpg" alt=""></a>
                <div class="des">
                    <span>tops</span>
                    <h5>White solid Top</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs 1300</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <a href="product3.php"><img src="https://www.andindia.com/media/catalog/product/cache/8ba85772601582a264183d0a493354f1/a/n/and-ss22at013tk7-_1_.jpg" alt=""></a>
                <div class="des">
                    <span>tops</span>
                    <h5>Floral Tops</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs 1600</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <a href="product4.php"><img src="https://www.andindia.com/media/catalog/product/cache/8ba85772601582a264183d0a493354f1/a/n/and-white-top-ss22ag014tr25-_6_-thumbnail.jpg" alt=""></a>
                <div class="des">
                    <span>tops</span>
                    <h5>Floral Tops</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs 1800</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="https://www.andindia.com/media/catalog/product/cache/8ba85772601582a264183d0a493354f1/a/n/and-pink-top-ss22ag040tr26--_3_-thumbnail.jpg" alt="">
                <div class="des">
                    <span>tops</span>
                    <h5>Floral Tops</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs 1800</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="https://www.andindia.com/media/catalog/product/cache/8ba85772601582a264183d0a493354f1/a/n/and-lime-top-ss22ag002tr14-_2_.jpg" alt="">
                <div class="des">
                    <span>tops</span>
                    <h5>Floral Tops</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs 1900</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="https://www.andindia.com/media/catalog/product/cache/8ba85772601582a264183d0a493354f1/a/n/and-powder-blue-top-ss22aj136tr154--_3_.jpg" alt="">
                <div class="des">
                    <span>tops</span>
                    <h5>Floral Tops</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs 2000</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="https://www.andindia.com/media/catalog/product/cache/8ba85772601582a264183d0a493354f1/a/n/and-mint-top-ss22aj019tr156-_4_.jpg" alt="">
                <div class="des">
                    <span>tops</span>
                    <h5>Floral Tops</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs 2200</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="https://www.andindia.com/media/catalog/product/cache/8ba85772601582a264183d0a493354f1/a/n/and-pink-top-ss22ak052tfk-_5_.jpg" alt="">
                <div class="des">
                    <span>tops</span>
                    <h5>Pink solid Top</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs 800</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>

            </div>
            <div class="pro">
                <img src="https://www.andindia.com/media/catalog/product/cache/8ba85772601582a264183d0a493354f1/a/n/and-white-top-ss22ag021tss1--_2_.jpg" alt="">
                <div class="des">
                    <span>tops</span>
                    <h5>White solid Top</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs 1300</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="https://www.andindia.com/media/catalog/product/cache/8ba85772601582a264183d0a493354f1/a/n/and-ss22at013tk7-_1_.jpg" alt="">
                <div class="des">
                    <span>tops</span>
                    <h5>Floral Tops</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs 1600</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="https://www.andindia.com/media/catalog/product/cache/8ba85772601582a264183d0a493354f1/a/n/and-white-top-ss22ag014tr25-_6_-thumbnail.jpg" alt="">
                <div class="des">
                    <span>tops</span>
                    <h5>Floral Tops</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs 1800</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="https://www.andindia.com/media/catalog/product/cache/8ba85772601582a264183d0a493354f1/a/n/and-pink-top-ss22ag040tr26--_3_-thumbnail.jpg" alt="">
                <div class="des">
                    <span>tops</span>
                    <h5>Floral Tops</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs 1800</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="https://www.andindia.com/media/catalog/product/cache/8ba85772601582a264183d0a493354f1/a/n/and-lime-top-ss22ag002tr14-_2_.jpg" alt="">
                <div class="des">
                    <span>tops</span>
                    <h5>Floral Tops</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs 1900</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="https://www.andindia.com/media/catalog/product/cache/8ba85772601582a264183d0a493354f1/a/n/and-powder-blue-top-ss22aj136tr154--_3_.jpg" alt="">
                <div class="des">
                    <span>tops</span>
                    <h5>Floral Tops</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs 2000</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="https://www.andindia.com/media/catalog/product/cache/8ba85772601582a264183d0a493354f1/a/n/and-mint-top-ss22aj019tr156-_4_.jpg" alt="">
                <div class="des">
                    <span>tops</span>
                    <h5>Floral Tops</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs 2200</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
        <div class="pro">
            <img src="img/products/n1.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5><strong>Cartoon Astronaut T-Shirt</strong></h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            <h4>Rs 999</h4>
            </div>
            <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>

        <div class="pro">
            <img src="img/products/n2.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5><strong>Cartoon Astronaut T-Shirt</strong></h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            <h4>Rs 999</h4>
            </div>
            <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>

        <div class="pro">
            <img src="img/products/n3.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5><strong>Cartoon Astronaut T-Shirt</strong></h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            <h4>Rs 999</h4>
            </div>
            <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>

        <div class="pro">
            <img src="img/products/n4.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5><strong>Cartoon Astronaut T-Shirt</strong></h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            <h4>Rs 999</h4>
            </div>
            <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        
        <div class="pro">
            <img src="img/products/n5.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5><strong>Cartoon Astronaut T-Shirt</strong></h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            <h4>Rs 999</h4>
            </div>
            <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>

        <div class="pro">
            <img src="img/products/n6.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5><strong>Cartoon Astronaut T-Shirt</strong></h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            <h4>Rs 999</h4>
            </div>
            <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>

        <div class="pro">
            <img src="img/products/n7.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5><strong>Cartoon Astronaut T-Shirt</strong></h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            <h4>Rs 999</h4>
            </div>
            <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>

        <div class="pro">
            <img src="img/products/n8.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5><strong>Cartoon Astronaut T-Shirt</strong></h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            <h4>Rs 999</h4>
            </div>
            <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
    </div>
</section>

<section id="pagination" class="section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#"><i class="fal fa-long-arrow-alt-right"></i></a>      
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

    <script src="script.js"></script>
</body>
</html>

