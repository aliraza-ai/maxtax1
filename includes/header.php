<?php
// include_once 'classes/adminLogin.php';
include_once 'classes/session.php';
Session::init();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="custom/style.css">
    <title>Managers Back Office</title>
</head>
<body>
    <!-- Here is Nav -->
    <!-- Here is Nav -->
    <section class="nav">
        <nav class="navbar navbar-expand-lg navbar-light container">
            <a class="navbar-brand" href="index.html"><img width="79" src="img/logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link home" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">MAXTAX APP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="credit-repair.php">CREDIT REPAIR</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="buy-tradelines.php">BUY TRADELINES</a>
                  </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    MORE
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                  </div>
                </li>
              
              </ul>
              <!-- <form class="form-inline my-2 my-lg-0"> -->
                  <?php
                  if(isset($_SESSION['adminlogin'])){ ?>
                    <a class="btn btn-outline-success my-2 my-sm-0" data-toggle="modal" data-target="#exampleModal" href="#">MY ACCOUNT</a>&nbsp;&nbsp;&nbsp;
                    <a class="btn btn-outline-success my-2 my-sm-0" href="#">CART (0)</a>

                    
                  <?php }else{ ?>

                    <!-- <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="LOGIN">&nbsp;&nbsp;&nbsp;
                    <input class="btn btn-outline-success my-2 my-sm-0" type="submit"  value="REGISTER"> -->
                    <a class="btn btn-outline-success my-2 my-sm-0" href="login.php">LOGIN</a>&nbsp;&nbsp;&nbsp;
                    <a class="btn btn-outline-success my-2 my-sm-0" href="register.php">REGISTER</a>
                    <?php } ?>
                <!-- </form> -->
            </div>
          </nav>
    </section>

    <!-- Modal -->
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">My Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <p class="text-left">Choose a Page to Access</p>
        <a class="btn btn-outline-success d-block my-sm-1" href="affiliate-login.php">AFFILIATE LOGIN</a>
        <a class="btn btn-outline-success d-block my-sm-1" href="managers-backoffice.php">MANAGERS BACKOFFICE</a>
        <a class="btn btn-outline-success d-block my-sm-1" href="owners-quick-start-here.php">OWNERS QUICK START HERE</a>
        <a class="btn btn-outline-success d-block my-sm-1" href="tax-preparer-backoffice.php">TAX PREPARER BACKOFFICE</a>
        <a href="?action=logout"><b>Logout</b></a>
        <?php
                            if (isset($_GET['action']) && $_GET['action']=="logout") {
                                session::destroy();
                            }
                            ?>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>
    <!-- end of Nav  -->