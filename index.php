<?php 

?>
<html>

<head>
  <link href="images/1.jpg" rel="icon">
  <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="fa/css/font-awesome.css" rel="stylesheet">
  <link href="css/admin.css" rel="stylesheet">


</head>

<div class="container-fluid mt-3 p-5" id="content-wrapper">

  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-header text-center p-3 bg-danger">
          <span class="text-lg font-weight-bold text-white">login form</span>
        </div>
        <div class="card-body border border-secondary bg-dark">
        <?php
          if (isset($_GET['u'])) {
            if ($_GET['u'] == "0") {
              echo "<b style='color:red;'>invalid username or password!</b>";
            }
          }
          ?>
          <?php
          if (isset($_GET['u'])) {
            if ($_GET['u'] == "1") {
              echo "<div class='text-center font-weight-bold' style='color:white;'>Please Login First to add items into the cart!</div>";
            }
          }
          ?>
           <?php
          if (isset($_GET['u'])) {
            if ($_GET['u'] == "2") {
              echo "<div class='text-center font-weight-bold' style='color:white;'>Invalid Username/Password !</div>";
            }
          }
          ?>
          <div class="text-center mt-4">
            <form method="POST" action="login_class.php">
                <div class="form-group">
                    <h5 class="text-white">username</h5>
                    <input type="text" name="username" class="form-control" placeholder="Enter Username">
                </div>
                <div class="form-group">
                    <h5 class="text-white">password</h5>
                    <input type="text" class="form-control" name="password" placeholder="Enter Password">
                </div>
                <div class="form-group mt-4 mb-4">
                    <input type="submit" value="Login" name="userlogin" class="btn btn-primary w-50 font-weight-bold mt-2"></input>
                </div>
            </form>
            
        </div>
      </div>
    </div>