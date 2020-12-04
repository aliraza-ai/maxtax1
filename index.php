<?php
include_once "classes/session.php";
Session::init();
// echo $_SESSION['adminlogin'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="custom/style.css">
    <title>MAXTAX</title>
</head>
<body>
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
                  <a class="nav-link home" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">MAXTAX APP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CREDIT REPAIR</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">BUY TRADELINES</a>
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
                    <a class="btn btn-outline-success my-2 my-sm-0" href="#">MY ACCOUNT</a>&nbsp;&nbsp;&nbsp;
                    <a class="btn btn-outline-success my-2 my-sm-0" href="?action=logout">LOGOUT</a>

                    <?php
                            if (isset($_GET['action']) && $_GET['action']=="logout") {
                                session::destroy();
                            }
                            ?>
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

    <!-- end of Nav  -->

    <!-- Start Header Area -->
    <section class="header">
       <div class="container">
         
          <div class="content">
            <h3>
                In-person and<br>
                online tex school<br>
                classes available.
            </h3>
            <h5>Call now ​(877)-313-0900</h5>
            <button class="btn btn-lg">NEW CLIENTS START HERE</button>
          </div>
           
       </div>
    </section>
    <!-- End header Area -->

    <!-- first area -->
    <section class="first-area">
      <div class="container text-center">
        <h1>$6,250</h1>
        <p>SAME DAY TAX <b>ADVANCE</b></p>
        <br>
        <p>COLLECT UP TO:</p>
        <div class="row">
            <div class="col-md-4 col-4">
                <h1>$6,000</h1>
                <p>for 1 child</p>
            </div>
            <div class="col-md-4 col-4">
              <h1> $8,000</h1>
                <p>for 2 child</p>
            </div>
            <div class="col-md-4 col-4">
              <h1>  $12,000</h1>
                <p>for 3 child</p>
            </div>
        </div>
      </div>

    </section>
    <!-- first area end -->

    <!-- second area -->
    <section class="second">
        <div class="container">
            <div class="text-center">
                <h6>REFER 2 FRIENDS</h6>
                <h1>AND GET A FREE 4 DAY CRUISE<br>
                    & 3 DAY RESORT STAY
                    </h1>
            </div>
        </div>
    </section>
    <!-- End second area -->

    <!-- personal tax area -->
    <section class="personal">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="img/pic1.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-6">
                    <div class="content">
                        <h2>PERSONAL TAX <br>PREPARATION</h2>
                  <div class="row">
                    <p class="col-md-10">Our firm provides outstanding service to our clients because of our dedication to the three underlying principles of professionalism, responsiveness and quality.
                        <br><br>
                        ​​We make sure you get the Max Refund and not the
                        Max charge legally!
                        <br><br>
                        MaxTax will get you the most for your personal refund and the most out of your business.
                        <br><br>
                        <button class="btn btn-danger">READ MORE</button>
                    </p>
                  </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end peronal tax area -->


    <!-- cradit area -->
    <section class="credit"> 
      <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="content">
                  <h2>CREDIT REPAIR
                  </h2>
            <div class="row">
              <p class="col-md-12">
                Let us help guide the way. You don't have to live with bad credit and high interest rates. Take advantage of our knowledge, experience, and advanced technology, and we'll help you create a personal game plan to help you repair your credit.<br><br>

Take a look at what your credit impacts. These days, it seems like it's just about everything. The truth is, having less than ideal credit can cost you thousands and thousands of dollars over the course of a home or car loan. It can make even everyday needs and decisions more difficult. Fortunately, the law affords every person the opportunity to dispute their poor, inaccurate credit.
                  <br><br><br><br>
                  <button class="btn btn-danger">READ MORE</button>
              </p>
            </div>
              </div>
            </div>
            <div class="col-md-7">
              <img src="img/pic2.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
    </section>
    <!-- end cradit area -->

    <!-- no credit area -->
    <section class="no-credit">
      <div class="container">
        <p class="p1">GET A $6,250 <b>TAX ADVANCE</b> TODAY!</p>
        <h1>NO CREDIT CHECK!</h1>
        <p>CALL NOW AND SET AN APPOINTMENT NOW!</p>
        <h2> <i class="fa fa-phone" aria-hidden="true"></i> 1-800-313-0900 </h2>
      </div>


    </section>
    <!-- end no credit area -->

    <!-- green-dot -->
    <section class="green-dot">
      <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="img/pic3.png" class="img-fluid" alt="">
            </div>
            <div class="col-md-6">
                <div class="content">
                    <h2>GREEN DOT   <br> debit cards</h2>
                
              <div class="row">
                <p class="col-md-8">
                  <b style="font-size: 13px;">Convient Disbursement Options for our clients to receive their money through companies they know and trust.
                  </b>
                  <br>
                  <br>
                  As a Green Dot company, our bank offers an integrated solution with the prepaid card trusted by millions.<br>
                  <br><br>
   -  24,000 free MoneyPass ATMs *<br>
   -  Free for 30 days **<br>
   -  Daily withdrawal limit of $1,500
                </p>
              </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- end green-dot -->


    <!-- checks area -->
    <section class="checks">
      <div class="container">
        <div class="row">
            <div class="col-md-5">
              
                <div class="content">
                  <h2>Checks Cashed  for<br> $10 or less</h2>
              
            <div class="row">
              <p class="col-md-12">
                <b style="font-size: 13px;">Affordable check cashing at over 11,000 locations nationwide.
                </b>
                <br>
                <br>
                Maxtax Clients receive their refund in cash
(up to $7,500) from participating Walmart
locations for a $7 fee.<br>
<br>
-  No check to print<br> 
-  Taxpayer is notified when cash is ready
    for pickup
              </p>
            </div>
              </div>
            </div>
            <div class="col-md-7">
              <img src="img/pic4.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
    </section>
    <!-- end checks -->

    <!-- hotline -->
    <section class="hotline">
      <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="img/pic5.png" class="img-fluid" alt="">
            </div>
            <div class="col-md-6">
                <div class="content">
                    <h2>Hotline , Email &<br> Text alerts of <br>Refund Status</h2>
                
              <div class="row">
                <p class="col-md-8">
                  <b style="font-size: 13px;">MAXTAX CLIENTS GET INSTANT AUTOMATIC UPDATES OF THEIR REFUND STATUS TO 1800-(WHERES MY REFUND) 
                  </b>
                  <br>
                  <br>
                  Want to know your refund status without having to call or wait on the phone? Now you will get automatic updates to your smartphone or email.Keeps everyone up to date and saves everyone time. 
                </p>
              </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- end hotline -->

    <!-- slider -->
    <section class="slider">
      <div class="container">
        <h1>ARE YOU GETTING THE <b style="color:brown;">MAX</b> LIKE THEY DID?</h1>
        <p class="offset-md-2 col-md-8">Excepteur sint occaecat cupidatat non proident sunt iculpa qui officia deserunt mollit anim est. laborum sed perspiciatis unde omnis natus error sit voluptatem accusantium dolore mque laudantium totam rem aperiam.

          Dicta sunt explicabo. nemo enim ipsam voluptatem quia magni voluptassit aspernatur aut odit aut fugit sed quia consequuntur magni dolores eos.</p>
      </div>
      
      <div class="carosel" id="carosel2">
        <a class="carosel-control carosel-control-left glyphicon glyphicon-chevron-left" onclick="return false;" href="#"></a>
        <div class="carosel-inner">
          <img class="carosel-item" src="img/s1.jpg" />
          <img class="carosel-item" src="img/s2.jpg" />
          <img class="carosel-item" src="img/s4.jpg" />
          <img class="carosel-item" src="img/s5.jpg" />
        </div>
        <a class="carosel-control carosel-control-right glyphicon glyphicon-chevron-right" onclick="return false;" href="#"></a>
      </div>

      

      
    </section>
    <!-- end slider -->

    <!-- mobile -->
    <section class="mobile">
      <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="img/pic6.png" class="img-fluid" alt="">
            </div>
            <div class="col-md-6">
                <div class="content">
                    <h2>Mobile Encrypted App</h2>
                  
                    <div class="data">
                      <div class="row t1">
                        <div class="col-2">
                          <img src="img/i1.png"  alt="">
                        </div>
                        <div class="col-10 col-md-6">
                          <b>FULLY RESPONSIVE</b>
                          <p>Enjoy a dashboard that works in all browsers and
                            mobile devices.</p>
                        </div>
                      </div>

                      <div class="row t1">
                        <div class="col-2">
                          <img src="img/i2.png"  alt="">
                        </div>
                        <div class="col-10 col-md-6">
                          <b>QUICK REQUEST</b>
                          <p>Send text or email requests to your clients to remind them of needed documents.</p>
                        </div>
                      </div>

                      <div class="row t1">
                        <div class="col-2">
                          <img src="img/i1.png"  alt="">
                        </div>
                        <div class="col-10 col-md-6">
                          <b>CLIENT DASHBOARD</b>
                          <p>Your clients can send documents to you from their mobile device or computer.</p>
                        </div>
                      </div>

                      <div class="row t1">
                        <div class="col-2">
                          <img src="img/i3.png"  alt="">
                        </div>
                        <div class="col-10 col-md-6">
                          <b>PEACE OF MIND</b>
                          <p>Receive and capture client information through encrypted servers.</p>
                        </div>
                      </div>
                    </div>
              
                </div>
            </div>
        </div>
    </div>

    </section>
    <!-- end mobile -->

    <!-- faq -->
    <section class="faq">
      <div class="container">
        <div class="row">
            <div class="col-md-5">
              
                <div class="content">
                  <h2>Frequently<br>
                    AskED Questions</h2>
                    <div class="line"></div>
              
            <div class="row">
              <p class="col-md-8">
               <span style="color: brown;font-weight: bold;"> Vivamus lectus arcu?</span><br>
               Excepteur sint occaecat cupidatat non proident sunt iculpa qui officia deserunt mollit anim est. laborum sed perspiciatis unde omnis natus error sit voluptatem accusantium dolore mque laudantium totam rem aperiam.
               Dicta sunt explicabo. nemo enim ipsam voluptatem quia magni voluptassit aspernatur aut odit aut fugit sed quia consequuntur magni dolores eos.
              <br>
              <div class="accordion_container">
                <div class="accordion_head">Pellentesque ut dolor sit amet?<span class="plusminus">+</span></div>
                  <div class="accordion_body" style="display: none;">
                  <p>First Accordian Body, it will have description</p>
                  </div>
                <div class="accordion_head">Vivamus lectus arcu?<span class="plusminus">+</span></div>
                  <div class="accordion_body" style="display: none;">
                  <p>Second Accordian Body, it will have description</p>
                  </div>
                <div class="accordion_head">Vivamus lectus arcu?<span class="plusminus">+</span></div>
                  <div class="accordion_body" style="display: none;">
                  <p>Third Accordian Body, it will have description</p>
                  </div>
                  <br>
                  <div class="me"> <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="VIEW MORE"></div>
              </div>
             
              

              </p>
            </div>
              </div>
            </div>
            <div class="col-md-6">
              <img src="img/pic7.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>     
    </section>
    <!-- end faq -->

    <!-- footer area -->
    <section class="footer">
            <div class="container-md">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-3" >
                               <center> <img src="img/logo.png" width="170" alt=""></center>
                                <p class="text-justify about">
                                    Suspendisse pellentesque nunc tempor consequat iaculis. Nam a libero in justo imperdiet lacinia.
                                </p>
                            </div>
                            <div class="col-md-3 g">
                                <h6>PERSONAL</h6>
                                <a href="#"></a><li>PERSONAL TAXES</li></a>
                                <a href="#"></a><li>MAXTAX CREDIT REPAIR</li></a>
                                <a href="#"></a><li>BUSINESS TAXES</li></a>
                                <a href="#"></a><li>FRANCHISING</li></a>
                                <a href="#"></a><li>CASH ADVANCE</li></a>
                                <a href="#"></a><li>BUSINESS SERVICES </li></a>
                                <a href="#"></a><li>BOOKKEEPING & PAYROLL</li></a>
                                <a href="#"></a><li>MAXTAX CREDIT REPAIR</li></a>
                            </div>
                            <div class="col-md-3">
                                <h6>FRANCHISE</h6>
                                <a href="#"></a><li>FRANCHISE</li></a>
                                <a href="#"></a><li>TAX SOFTWARE</li></a>
                                <a href="#"></a><li>TAX & TECH SUPPORT
                                    MARKETING</li></a>
                                <a href="#"></a><li>CASH ADVANCE</li></a>
                            </div>
                            <div class="col-md-3">
                                <h6></h6>
                                <a href="#"></a><li> ABOUT US</li></a>
                                <a href="#"></a><li>CONTACT</li></a>
                                <a href="#"></a><li>​EXTRA SERVICES</li></a>
                                <a href="#"></a><li>AFFILIATE LOGIN</li></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                       <div class="me"> <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="CONTACT US"></div>
                       <div class="me"> <input class="btn btn-outline-success my-2 my-sm-0" type="submit"  value="COMPLAINT FORM"></div>
                        <div class="me"> <input class="btn btn-outline-success my-2 my-sm-0" type="submit"  value="JOB APPLICATION"></div>
                        <br>
                        <div class="contact">
                            EMAIL:    support@maxtaxw2.com<br>
                            Phone:  (877) 313-0900<br>
                            FAX:         (407) 904-1169
                        </div>
                    </div>
                </div>
            </div>

    </section>
    <!-- footer end -->


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script
    src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
   <script>
      $(document).ready(function(){
	//toggle the component with class accordion_body
	$(".accordion_head").click(function(){
		if ($('.accordion_body').is(':visible')) {
			$(".accordion_body").slideUp(300);
			$(".plusminus").text('+');
		}
        if( $(this).next(".accordion_body").is(':visible')){
            $(this).next(".accordion_body").slideUp(300);
            $(this).children(".plusminus").text('+');
        }else {
            $(this).next(".accordion_body").slideDown(300); 
            $(this).children(".plusminus").text('-');
        }
	});
});
    </script>
  </body>
</html>