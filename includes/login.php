<?php 
session_start();
include('config.php');
error_reporting(0);

?>

<?php
if(isset($_POST['login']))
{
$email=$_POST['email'];
$password=md5($_POST['password']);
$sql ="SELECT EmailId,Password,FullName FROM tblusers WHERE EmailId=:email and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['login']=$_POST['email'];
$_SESSION['fname']=$results->FullName;
$px = '../index.php';
$currentpage=$_SERVER['REQUEST_URI'];
echo "<script>alert('Login Successfull');</script>";
echo "<script type='text/javascript'> document.location = '$px'; </script>";
} else{
  
  echo "<script>alert('Invalid Details');</script>";

}

}

?>

<link rel="stylesheet" href="../style.css">
<section id="header">
    <a href="../index.php"><img src="../img/logo1.png" class="logo" alt="logo" width="100px"></a>
    <div>
        <ul id="navbar">
        <li><a href="../index.php">Home</a></li>
        <li><a href="../shop.php">Shop</a></li>
        <li><a href="../blog.php">Blog</a></li>
        <li><a href="../about.php">About</a></li>
        <li><a href="../contact.php">Contact</a></li>
        <li><a href="registration.php">Registration</a></li>
        <li><a class="active" href="login.php">Login</a></li>
        <li><a href="cart.php"><i class="far fa-shopping-bag"></i></a></li>
        <a href="#" id="close"><i class="far fa-times"></i></a>
        </ul>
    </div>
    <div id="mobile">
    <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
    <i id="bar" class="fas fa-outdent"></i>
    </div>
</section>
<center>
<div class="modal fade" id="loginform">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <br><br>
        <h1 class="modal-title">Login</h1>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="login_wrap">
            <div class="col-md-12 col-sm-6">
              <form method="post">
                <div class="form-group">
                <br><br>
                  <input type="email" class="form-control" name="email" placeholder="Email address*">
                
                <br><br></div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password" placeholder="Password*">
                  <br><br></div>
                <div class="form-group">
                  <input type="submit" name="login" value="Login" class="btn btn-block">
                  <br><br></div>
              </form>
            </div>
           
          </div>
        </div>
      </div>
      <div class="modal-footer text-center">
        <p>Don't have an account? <a href="#signupform" data-toggle="modal" data-dismiss="modal">Signup Here</a></p>
        <p><a href="#forgotpassword" data-toggle="modal" data-dismiss="modal">Forgot Password ?</a></p>
      </div>
    </div>
    </center>
  </div>
</div>