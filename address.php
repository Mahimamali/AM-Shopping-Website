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
        <li><a class="active" href="cart.php"><i class="far fa-shopping-bag"></i></a></li>
        <a href="#" id="close"><i class="far fa-times"></i></a>
        </ul>
    </div>
    <div id="mobile">
    <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
    <i id="bar" class="fas fa-outdent"></i>
    </div>
</section>

    <div class="address">
      <form id="addressForm">
        <div class="container1">
          <h3>CONTACT DETAILS</h3>

          <input
            class="name"
            id="name"
            type="text"
            placeholder="NAME*"
          /><br /><br />
          <input
            class="name"
            id="mobileNo"
            type="number"
            placeholder="Mobile No*"
          /><br /><br />
        </div>
        <div class="container1">
          <h3>ADDRESS</h3>

          <input
            class="name"
            id="pincode"
            type="number"
            placeholder="Pin Code*"
          /><br /><br />
          <input
            class="name"
            id="address"
            type="text"
            placeholder="Address(House No, Building, Street, Area)*"
          /><br /><br />
          <input
            class="name"
            id="location"
            type="text"
            placeholder="Location/Town*"
          /><br /><br />
          <input class="data" id="data2" type="text" placeholder="City*" />
          <input class="data" id="data1" type="text" placeholder="State*" />
        </div>
      </form>
      <div class="container1">
        <h3>SAVE ADDRESS AS</h3>
        <button class="button1">Home</button>
        <button class="button1">Work</button><br /><br />
        <input type="checkbox" id="checkBox" />
        <label for="checkBox" style="font-size: 14px; margin-left: 8px"
          >Make this my Default Address</label
        >
      </div>
      <div class="container2">
      <a href="payment.php"><button class="button2">ADD ADDRESS</button></a>
      </div>
    </div>

    <div class="footer">
      <div class="container3">
        <img
          class="images"
          src="https://constant.myntassets.com/checkout/assets/img/footer-bank-ssl.png"
        />
        <img
          class="images"
          src="https://constant.myntassets.com/checkout/assets/img/footer-bank-visa.png"
        />
        <img
          class="images"
          src="https://constant.myntassets.com/checkout/assets/img/footer-bank-mc.png"
        />
        <img
          class="images"
          src="https://constant.myntassets.com/checkout/assets/img/footer-bank-ae.png"
        />
        <img
          class="images"
          src="https://constant.myntassets.com/checkout/assets/img/footer-bank-dc.png"
        />
        <img
          class="images"
          src="https://constant.myntassets.com/checkout/assets/img/footer-bank-nb.png"
        />
        <img
          class="images"
          src="https://constant.myntassets.com/checkout/assets/img/footer-bank-cod.png"
        />
        <img
          class="images"
          src="https://constant.myntassets.com/checkout/assets/img/footer-bank-rupay.png"
        />
        <img
          class="images"
          src="https://constant.myntassets.com/checkout/assets/img/footer-bank-paypal.png"
        />
        <img
          class="images"
          src="https://constant.myntassets.com/checkout/assets/img/footer-bank-bhim.png"
        />
      </div>

    </div>
    <div class="newContainer"></div>
    <script src="address.js"></script>
  </body>

</html>


