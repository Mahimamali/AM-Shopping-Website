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
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="includes\registration.php">Registration</a></li>
        <li><a href="includes\login.php">Login</a></li>
        <li><a  class="active" href="cart.php"><i class="far fa-shopping-bag"></i></a></li>
        <a href="#" id="close"><i class="far fa-times"></i></a>
        </ul>
    </div>
    <div id="mobile">
    <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
    <i id="bar" class="fas fa-outdent"></i>
    </div>
</section>
    
            <div class = "placeOrder" id= "placeOrder">
                <div class = "grid-placeOrder">
                    <p class = "child1">COUPONS</p>
                    <p class = "child2"><b style = "color: black;">Apply Coupons</b></p>
                    <button class = "child3">APPLY</button>
                    <hr class = "child4">
                    <p class = "child5">PRICE DETAILS(1 Item)</p>
                    <p class = "child6">Total MRP</p>
                    <p class = "child7">Rs. 649</p>
                    <p class = "child8">Discount on MRP</p>
                    <p class = "child9">- Rs. 228</p>
                    <p class = "child10">Coupon Discount</p>
                    <button class = "child11">Apply Coupon</button>
                    <p class = "child12">Convenience Fee <b style = "color: #ff3f6c;;">Know More</b></p>
                    <p class = "child13"><s>Rs99</s>Free</p>
                    <hr class = "child14">
                    <p class = "child15">Total Amount</p>
                    <p class = "child16">Rs. 421</p>
                    <a href="address.php"><button class = "child17">PLACE ORDER</button></a>

                </div>
            </div>
                
                           
    </div>
        <div>   
            <div class = "center" id = "center">
                <div class = "container4">
                    <h4>Available Offer</h4>
                    <p>
                        . 10% Instant Discount on SBI Credit Cards on a minimum spend of Rs 3000. TCA<br><br>
                        <span id = "tca">...</span><span id = "more">
                        . 5% Unlimited Cashback on Flipkart Axis Bank Ctedit Card TCA<br><br>
                        . 10% Cashback upto Rs 250 on a minimum spend of Rs 1500 with PayZapp TCA<br><br>
                        . Upto Rs 500 Cashback on Mobikwik wallet transaction of min Rs 999. Use code MBK500 on mobikwik TCA<br><br>
                        . Flat Rs 200 Cashback on first Airtel Payments Bank transcation on myntra on a min spend of Rs 2000 TCA</span>
                    </p>
                    <button onclick="showMore()" id="myBtn">Show More</button>
                </div>
                
                <div class = "total">
                    <h3 style = "float: left; font-size: larger; color: black; font-weight: 700;">My Shopping Bag(1 item)</h3>
                    <h3 style = "float: right; font-size: larger; color: black; font-weight: 700;">Total: Rs. 421</h3>
                </div>
                <br><br><br>
                <div class = "par">
                    <div id = "addImages">
                        
                        <img id = "img2" src = "https://www.andindia.com/media/catalog/product/cache/8ba85772601582a264183d0a493354f1/a/n/and-white-top-ss22ag021tss1--_2_.jpg" width="100%" id="MainImg" alt="">
                        <div class = "child">
                            <p class = "p">Moda Rapido<br>
                            Women White Printed Round Neck T-shirt<h5>Sold By : Vision Star</h5></p>
                            <select name="size" id="size">
                                <option value="SIZE:L">SIZE: L</option>
                                <option value="SIZE:M">SIZE: M</option>
                                <option value="SIZE:S">SIZE: S</option>
                                <option value="SIZE:Xl">SIZE: XL</option>
                            </select>
                            <select name="quantity" id="quantity">
                                <option value="1">Qty: 1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                            <h3>Discount: 35%</h3>
                            <h6 style = "color: cornflowerblue;">Delivery By 28 JUL 2021</h6>
                            
                        </div>
                        <div>
                            <p id = "discount"><s>Rs649</s><br>Rs. 421</p>
                        </div>
                        
                    </div>
                </div>
               
        </div>             
        <hr class = "horizontal">
        <div>
            <h4 style = "margin-left: 80px;">You May Also Like:</h4>
            <button class = "myBtn2">All</button>
            <button class = "myBtn2" onselect="showSocks()" style = "margin-left: 5px;">Scocks</button>
            <button class = "myBtn2" onmouseover="showScarves()" style = "margin-left: 5px;">Scarves</button>
            <div id = "gridContainer">

            </div>
        </div>
    </div>
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
</body>
</html>

