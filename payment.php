<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
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
        <li><a class="active" href="cart.php"><i class="far fa-shopping-bag"></i></a></li>
        <a href="#" id="close"><i class="far fa-times"></i></a>
        </ul>
    </div>
    <div id="mobile">
    <a href="cart.html"><i class="far fa-shopping-bag"></i></a>
    <i id="bar" class="fas fa-outdent"></i>
    </div>
</section>

        <div class = "container4">
            <h4>Bank Offer</h4>
            <p>
                . 10% Instant Discount on RBL Bank Credit and Debit Cards on a minimum spend of 2500. TCA<br><br>
                <span id = "tca">...</span><span id = "more">
                . 10% Instant Discount with Standard Chartered Credit and Debit Cards on a minimum spend of 2500. TCA<br><br>
                . 5% Unlimited Cashback on Flipkart Axis Bank Ctedit Card TCA<br><br>
                . 10% Cashback upto Rs 250 on a minimum spend of Rs 1000 with PayZapp TCA<br><br>
                . Upto Rs 500 Cashback on Mobikwik wallet transaction of min Rs 999. Use code MBK500 on mobikwik TCA<br><br>
                . Flat Rs 200 Cashback on first Airtel Payments Bank transcation on myntra on a min spend of Rs 2000 TCA</span>
            </p>
            <button onclick="showMore()" id="myBtn">Show More</button>
        </div>
        <div class = "grid">
            <div class = "container4">
                <h3>Choose Payment Method</h3>
                <div class = "parent">
                    <button id = "child1" class = "btn">CREDIT/DEBIT CARD</button>
                    <button id = "child2" class = "btn">NET BANKING</button>
                    <button id = "child3" class = "btn">PAYTM/PAYZAPP WALLET</button>
                    <button id = "child4" class = "btn">UPI</button>
                    <button id = "child5" class = "btn">CASH ON DELIVERY</button>
                    <div id = "child6">
                        <h4>CREDIT/DEBIT CARD</h4>
                        <form id = "myForm">
                            <input id = "formClass" type = "number" placeholder="Card Number"><br>
                            <input id = "formClass1" type="text" placeholder="Name On Card"/><br>
                            <input id = "valid" type = "number" placeholder="Valid Thru(MM/YY)"/>
                            <input id = "cvv" type="password" placeholder="CVV"/>
                        </form>
                            <input type="checkbox" id = "checkBox"/>
                            <label for="checkBox" style = "font-size: 14px; margin-left: 8px;">Save this card for faster payment</label>
                           <button id = "myBtn2" onclick="successfulPayment()">PAY NOW</button>
                    </div>
                </div>
            </div> 
        </div>       
                <div class = "footer"> 
                    <div class = "container3">
                        <img  class = "images" src = "https://constant.myntassets.com/checkout/assets/img/footer-bank-ssl.png"/>
                        <img class = "images" src = "https://constant.myntassets.com/checkout/assets/img/footer-bank-visa.png"/>
                        <img class = "images" src = "https://constant.myntassets.com/checkout/assets/img/footer-bank-mc.png"/>
                        <img class = "images" src = "https://constant.myntassets.com/checkout/assets/img/footer-bank-ae.png"/>
                        <img class = "images" src = "https://constant.myntassets.com/checkout/assets/img/footer-bank-dc.png"/>
                        <img class = "images" src = "https://constant.myntassets.com/checkout/assets/img/footer-bank-nb.png"/>
                        <img class = "images" src = "https://constant.myntassets.com/checkout/assets/img/footer-bank-cod.png"/>
                        <img class = "images" src = "https://constant.myntassets.com/checkout/assets/img/footer-bank-rupay.png"/>
                        <img class = "images" src = "https://constant.myntassets.com/checkout/assets/img/footer-bank-paypal.png"/>
                        <img class = "images" src = "https://constant.myntassets.com/checkout/assets/img/footer-bank-bhim.png"/>

                    </div>
                </div>
</body>
</html>

<script src = "payment.js"></script>