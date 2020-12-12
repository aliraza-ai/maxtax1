<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="custom/style.css">
    <link rel="stylesheet" href="custom/credit-repair.css">
    <link href="custom/dist/css/lightgallery.css" rel="stylesheet">
    <style type="text/css">
            .demo-gallery > ul {
              margin-bottom: 0;
            }
            .demo-gallery > ul > li {
                float: left;
                margin-bottom: 15px;
                /* margin-right: 20px; */
                width: 200px;
            }
            .demo-gallery > ul > li a {
              border: 3px solid #FFF;
              border-radius: 3px;
              display: block;
              overflow: hidden;
              position: relative;
              float: left;
            }
            
            .demo-gallery > ul > li a > img {
              -webkit-transition: -webkit-transform 0.15s ease 0s;
              -moz-transition: -moz-transform 0.15s ease 0s;
              -o-transition: -o-transform 0.15s ease 0s;
              transition: transform 0.15s ease 0s;
              -webkit-transform: scale3d(1, 1, 1);
              transform: scale3d(1, 1, 1);
              height: 175px;
              width: 100%;
            }
            .demo-gallery > ul > li a:hover > img {
              -webkit-transform: scale3d(1.1, 1.1, 1.1);
              transform: scale3d(1.1, 1.1, 1.1);
            }
            .demo-gallery > ul > li a:hover .demo-gallery-poster > img {
              opacity: 1;
            }
            .demo-gallery > ul > li a .demo-gallery-poster {
              background-color: rgba(0, 0, 0, 0.1);
              bottom: 0;
              left: 0;
              position: absolute;
              right: 0;
              top: 0;
              -webkit-transition: background-color 0.15s ease 0s;
              -o-transition: background-color 0.15s ease 0s;
              transition: background-color 0.15s ease 0s;
            }
            .demo-gallery > ul > li a .demo-gallery-poster > img {
              left: 50%;
              margin-left: -10px;
              margin-top: -10px;
              opacity: 0;
              position: absolute;
              top: 50%;
              -webkit-transition: opacity 0.3s ease 0s;
              -o-transition: opacity 0.3s ease 0s;
              transition: opacity 0.3s ease 0s;
            }
            .demo-gallery > ul > li a:hover .demo-gallery-poster {
              background-color: rgba(0, 0, 0, 0.5);
            }
            .demo-gallery .justified-gallery > a > img {
              -webkit-transition: -webkit-transform 0.15s ease 0s;
              -moz-transition: -moz-transform 0.15s ease 0s;
              -o-transition: -o-transform 0.15s ease 0s;
              transition: transform 0.15s ease 0s;
              -webkit-transform: scale3d(1, 1, 1);
              transform: scale3d(1, 1, 1);
              height: 100%;
              width: 100%;
            }
            .demo-gallery .justified-gallery > a:hover > img {
              -webkit-transform: scale3d(1.1, 1.1, 1.1);
              transform: scale3d(1.1, 1.1, 1.1);
            }
            .demo-gallery .justified-gallery > a:hover .demo-gallery-poster > img {
              opacity: 1;
            }
            .demo-gallery .justified-gallery > a .demo-gallery-poster {
              background-color: rgba(0, 0, 0, 0.1);
              bottom: 0;
              left: 0;
              position: absolute;
              right: 0;
              top: 0;
              -webkit-transition: background-color 0.15s ease 0s;
              -o-transition: background-color 0.15s ease 0s;
              transition: background-color 0.15s ease 0s;
            }
            .demo-gallery .justified-gallery > a .demo-gallery-poster > img {
              left: 50%;
              margin-left: -10px;
              margin-top: -10px;
              opacity: 0;
              position: absolute;
              top: 50%;
              -webkit-transition: opacity 0.3s ease 0s;
              -o-transition: opacity 0.3s ease 0s;
              transition: opacity 0.3s ease 0s;
            }
            .demo-gallery .justified-gallery > a:hover .demo-gallery-poster {
              background-color: rgba(0, 0, 0, 0.5);
            }
            .demo-gallery .video .demo-gallery-poster img {
              height: 48px;
              margin-left: -24px;
              margin-top: -24px;
              opacity: 0.8;
              width: 48px;
            }
            .demo-gallery.dark > ul > li a {
              border: 3px solid #04070a;
            }
            .home .demo-gallery {
              padding-bottom: 80px;
            }
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <title>Maxtax</title>
</head>
<body>
    <!-- Here is Nav -->
    <?php include('includes/navbar.php') ?>

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
            <button class="btn btn-lg"><a style="text-decoration:none; color:white;" href="https://form.jotform.com/200476597644061">NEW CLIENTS START HERE</a></button>
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
                        <a href="personal-taxes.php" class="btn btn-danger">READ MORE</a>
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
                  <a href="credit-repair.php" class="btn btn-danger">READ MORE</a>
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
    <section class="slider container-fluid" id="portfolio">
      <div class="container">
        <h1>ARE YOU GETTING THE <b style="color:brown;">MAX</b> LIKE THEY DID?</h1>
        <!--<p class="offset-md-2 col-md-8">Excepteur sint occaecat cupidatat non proident sunt iculpa qui officia deserunt mollit anim est. laborum sed perspiciatis unde omnis natus error sit voluptatem accusantium dolore mque laudantium totam rem aperiam.-->

        <!--  Dicta sunt explicabo. nemo enim ipsam voluptatem quia magni voluptassit aspernatur aut odit aut fugit sed quia consequuntur magni dolores eos.</p>-->
      
      
      <!-- <div class="carosel" id="carosel2">
        <a class="carosel-control carosel-control-left glyphicon glyphicon-chevron-left" onclick="return false;" href="#"></a>
        <div class="carosel-inner">
          <img class="carosel-item" src="img/s1.jpg" />
          <img class="carosel-item" src="img/s2.jpg" />
          <img class="carosel-item" src="img/s4.jpg" />
          <img class="carosel-item" src="img/s5.jpg" />
        </div>
        <a class="carosel-control carosel-control-right glyphicon glyphicon-chevron-right" onclick="return false;" href="#"></a>
      </div> -->
      <!-- <div class="row gallary-row container pt-3 pb-3" style="border: 2px solid brown;">
        <div class="col-md-2 p-1">
        <img class="img-fluid" src="img/s1.jpg" />
        </div>
        <div class="col-md-2 p-1">
        <img class="img-fluid" src="img/s2.jpg" />
        </div>
        <div class="col-md-2 p-1">
        <img class="img-fluid" src="img/s3.jpg" />
        </div>
        <div class="col-md-2 p-1">
        <img class="img-fluid" src="img/s4.jpg" />
        </div>
        <div class="col-md-2 p-1">
        <img class="img-fluid" src="img/s5.jpg" />
        </div>
        <div class="col-md-2 p-1">
        <img class="img-fluid" src="img/s6.jpg" />
        </div>
        <div class="col-md-2 p-1">
        <img class="img-fluid" src="img/s7.jpg" />
        </div>
        <div class="col-md-2 p-1">
        <img class="img-fluid" src="img/s8.jpg" />
        </div>
        <div class="col-md-2 p-1">
        <img class="img-fluid" src="img/s9.jpg" />
        </div>
        <div class="col-md-2 p-1">
        <img class="img-fluid" src="img/s10.jpg" />
        </div>
        <div class="col-md-2 p-1">
        <img class="img-fluid" src="img/s11.jpg" />
        </div>
        <div class="col-md-2 p-1">
        <img class="img-fluid" src="img/s12.jpg" />
        </div>
      </div> -->
      </div>

      <div class="container">

        
            <div class="demo-gallery p-2" style="border: 2px solid brown;">
                <ul id="lightgallery" class="list-unstyled row">
                    <li class="col-xs-6 col-md-2" data-src="img/s1.jpg">
                        <a href="">
                            <img class="img-responsive" src="img/s1.jpg">
                        </a>
                    </li>
                    <li class="col-xs-6 col-md-2" data-src="img/s2.jpg">
                        <a href="">
                            <img class="img-responsive" src="img/s2.jpg">
                        </a>
                    </li>
                    <li class="col-xs-6 col-md-2" data-src="img/s3.jpg">
                        <a href="">
                            <img class="img-responsive" src="img/s3.jpg">
                        </a>
                    </li>
                    <li class="col-xs-6 col-md-2" data-src="img/s4.jpg">
                        <a href="">
                            <img class="img-responsive" src="img/s4.jpg">
                        </a>
                    </li>
                    <li class="col-xs-6 col-md-2" data-src="img/s5.jpg">
                        <a href="">
                            <img class="img-responsive" src="img/s5.jpg">
                        </a>
                    </li>
                    <li class="col-xs-6 col-md-2" data-src="img/s6.jpg">
                        <a href="">
                            <img class="img-responsive" src="img/s6.jpg">
                        </a>
                    </li>
                    <li class="col-xs-6 col-md-2" data-src="img/s7.jpg">
                        <a href="">
                            <img class="img-responsive" src="img/s7.jpg">
                        </a>
                    </li>
                    <li class="col-xs-6 col-md-2" data-src="img/s8.jpg">
                        <a href="">
                            <img class="img-responsive" src="img/s8.jpg">
                        </a>
                    </li>
                    <li class="col-xs-6 col-md-2" data-src="img/s9.jpg">
                        <a href="">
                            <img class="img-responsive" src="img/s9.jpg">
                        </a>
                    </li>
                    <li class="col-xs-6 col-md-2" data-src="img/s10.jpg">
                        <a href="">
                            <img class="img-responsive" src="img/s10.jpg">
                        </a>
                    </li>
                    <li class="col-xs-6 col-md-2" data-src="img/s11.jpg">
                        <a href="">
                            <img class="img-responsive" src="img/s11.jpg">
                        </a>
                    </li>
                    <li class="col-xs-6 col-md-2" data-src="img/s12.jpg">
                        <a href="">
                            <img class="img-responsive" src="img/s12.jpg">
                        </a>
                    </li>
                </ul>
            </div>
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
            <div class="col-md-12">
              
                <div class="content">
                  <h2>Frequently
                    AskED Questions</h2>
                    <div class="line"></div>
              
            <div class="row">
              <p>
               <!--<span style="color: brown;font-weight: bold;"> Vivamus lectus arcu?</span><br>-->
               
              <br>
              <div class="accordion_container" style="width:100%;">
                <div class="accordion_head" style="font-size:14px;">​HOW DO I NOTIFY THE IRS MY ADDRESS HAS CHANGED?<span class="plusminus">+</span></div>
                  <div class="accordion_body" style="display: none;">
                  <div class="accordion__content">
                <div style="padding: 10px 20px 20px;">
                    <div style="width: auto"><div></div><div class="paragraph"><b>Answer:</b>&nbsp;There are several ways to tell us your address has changed:<br /><span style="font-weight:700">Methods to Change Your Address</span><span>Method</span><span>Action</span><br />IRS formUse&nbsp;<a href="https://www.irs.gov/forms-pubs/about-form-8822">Form 8822, Change of Address</a>&nbsp;or&nbsp;<a href="https://www.irs.gov/forms-pubs/about-form-8822-b">Form 8822-B, Change of Address or Responsible Party - Business</a><br />Tax returnUse your new address when you file<br />Written statementSend us a signed written statement with your:<ul><li>full name</li><li>old address</li><li>new address</li><li>social security number, ITIN, or EIN</li></ul><br />Mail your signed statement to the&nbsp;<a href="https://www.irs.gov/filing/where-to-file-paper-tax-returns-with-or-without-a-payment">address</a>&nbsp;where you filed your last return.<br /><br />Oral notificationTell us in person or by telephone. We'll need you to verify your identity and the address we have on file for you. Please have ready:<ul><li>your full name</li><li>your address</li><li>your date of birth</li><li>your social security number, ITIN or EIN</li></ul> If you filed a joint return, and are still residing with your spouse, both you and your spouse should sign the form or statement.<br />If you filed a joint return and you now have separate addresses, each of you should notify us of your new, separate address.<br />Authorized representatives filing a form or written statement to change an address for a taxpayer must attach a copy of their power of attorney or&nbsp;<a href="https://www.irs.gov/forms-pubs/about-form-2848">Form 2848, Power of Attorney and Declaration of Representative</a>. Unauthorized third parties can't change a taxpayer's address.<br />Changes of address through the U.S. Postal Service (USPS) may update your address of record on file with us based on what they retain in their National Change of Address (NCOA) database. However, even when you notify the USPS, not all post offices forward government checks, so you should still notify us.<br />For changes of address relating to an employment tax return, we issue confirmation notices (Notices&nbsp;<a href="https://www.irs.gov/individuals/understanding-your-cp148a-notice">148A</a>&nbsp;and&nbsp;<a href="https://www.irs.gov/individuals/understanding-your-cp148b-notice">148B</a>) for the change to both the new and former address.<br />It can take four to six weeks for a change of address request to fully process.<br /><br />Additional Information:&nbsp;<ul><li><a href="https://www.irs.gov/pub/irs-utl/rp-10-16.pdf">Revenue Procedure 2010-16</a></li></ul><br />Subcategory:&nbsp;<br /><a href="https://www.irs.gov/faqs/irs-procedures/address-changes">Address Changes</a><br />Category:&nbsp;<br /><a href="https://www.irs.gov/faqs/irs-procedures">IRS Procedures</a></div></div>
                </div>
            </div>
                  </div>
                <div class="accordion_head"  style="font-size:14px;">IS THERE AN AGE LIMIT ON CLAIMING MY CHILD AS A DEPENDENT?<span class="plusminus">+</span></div>
                  <div class="accordion_body" style="display: none;">
                  <p><div class="accordion__content">
                <div style="padding: 0px 20px 20px;">
                    <div style="width: auto"><div></div><div class="paragraph"><b>Answer:</b>&nbsp;To claim your child as your dependent, your child must meet either the qualifying child test or the qualifying relative test:<br /><span></span><ul><li>To meet the&nbsp;<span style="font-weight:700">qualifying child test</span>, your child must be younger than you and either younger than 19 years old or be a "student" younger than 24 years old as of the end of the calendar year.</li><li>There's no age limit if your child is "permanently and totally disabled" or meets the&nbsp;<span style="font-weight:700">qualifying relative test</span>.</li></ul>In addition to meeting the qualifying child or qualifying relative test, your child must also meet all of the other tests&nbsp;to be your&nbsp;dependent:<br /><span></span><ol><li>Dependent taxpayer test</li><li>Citizen or resident test, and</li><li>Joint return test</li></ol><br />Additional Information:&nbsp;<ul><li><a href="https://www.irs.gov/help/ita/whom-may-i-claim-as-a-dependent">Whom May I Claim as a Dependent?</a></li><li><a href="https://www.irs.gov/publications/p501/index.html">Publication 501, Exemptions, Standard Deduction, and Filing Information</a></li></ul><br />Subcategory:&nbsp;<br /><a href="https://www.irs.gov/faqs/filing-requirements-status-dependents-exemptions/dependents-exemptions">Dependents &amp; Exemptions</a><br />Category:&nbsp;<br /><a href="https://www.irs.gov/faqs/filing-requirements-status-dependents-exemptions">Filing Requirements, Status, Dependents, Exemptions</a></div></div>
                </div>
            </div></p>
                  </div>
                <div class="accordion_head"  style="font-size:14px;">HOW MUCH INCOME CAN AN UNMARRIED DEPENDENT STUDENT MAKE BEFORE HE OR SHE MUST FILE AN INCOME TAX RETURN?<span class="plusminus">+</span></div>
                  <div class="accordion_body" style="display: none;">
                  <p>
                      <div class="accordion__content">
                <div style="padding: 0px 20px 20px;">
                    <div style="width: auto"><div></div><div class="paragraph"><b>Answer:</b>&nbsp;An unmarried dependent student must file a tax return if his or her earned or unearned income exceeds certain limits. To find these limits, refer to&nbsp;<span><em><span>Dependents</span></em>&nbsp;</span>under&nbsp;<em><span>Who Must File</span></em>, in&nbsp;<a href="https://www.irs.gov/forms-pubs/about-publication-501">Publication 501, Exemptions, Standard Deduction, and Filing Information</a>. You can also refer to&nbsp;<a href="https://www.irs.gov/help/ita/do-i-need-to-file-a-tax-return">Do I Need to File a Tax Return?</a>&nbsp;to see if your income requires you to file.<br />Even if you don't have to file a federal income tax return, you should file if you can get money back (for example, you had federal income tax withheld from your pay or you qualify for a refundable tax credit). See&nbsp;<em>Who Should File</em>&nbsp;in Publication 501, for more examples.<br /><br />Additional Information:&nbsp;<ul><li><a href="https://www.irs.gov/individuals/students">Tax Information for Students</a></li></ul><br />Subcategory:&nbsp;<br /><a href="https://www.irs.gov/faqs/filing-requirements-status-dependents-exemptions/filing-requirements">Filing Requirements</a><br />Category:&nbsp;<br /><a href="https://www.irs.gov/faqs/filing-requirements-status-dependents-exemptions">Filing Requirements, Status, Dependents, Exemptions</a></div></div>
                </div>
            </div></p>
                  </div>
                  <div class="accordion_head"  style="font-size:14px;">CAN I RECEIVE A TAX REFUND IF I AM CURRENTLY MAKING PAYMENTS UNDER AN INSTALLMENT AGREEMENT OR PAYMENT PLAN FOR ANOTHER FEDERAL TAX PERIOD?<span class="plusminus">+</span></div>
                  <div class="accordion_body" style="display: none;">
                  <p>
                      <div class="accordion__content">
                <div style="padding: 0px 20px 20px;">
                    <div style="width: auto"><div></div><div class="paragraph">
<b>Answer:</b>&nbsp;No, one of the conditions of your installment agreement is that the IRS will automatically apply any refund due to you against taxes you owe. Because your refund isn't applied toward your regular monthly payment, continue making your installment agreement payments as scheduled.<br />
If your refund exceeds your total balance due on all outstanding liabilities including accruals, and you don't owe certain past-due amounts, such as federal tax, state tax, a student loan, or child support, you'll receive a refund of the amount over and above what you owe. For more information on these non-IRS refund offsets, you can call the&nbsp;<a href="https://www.fiscal.treasury.gov/">Bureau of the Fiscal Service</a>&nbsp;(BFS) at&nbsp;<a href="tel:800-304-3107">800-304-3107</a>&nbsp;(toll-free).<br />
<br />
Additional Information:
<ul>
	<li><a href="https://www.irs.gov/pub/irs-pdf/i9465.pdf">Instructions for Form 9465, Installment Agreement Request</a></li>
</ul>
<br />
Subcategory:<br />
<a href="https://www.irs.gov/faqs/irs-procedures/refund-inquiries">Refund Inquiries</a><br />
Category:<br />
<a href="https://www.irs.gov/faqs/irs-procedures">IRS Procedures</a></div></div>
                </div>
            </div>
                  </p>
                  </div>
                  <div class="accordion_head"  style="font-size:14px;">TO QUALIFY FOR HEAD OF HOUSEHOLD FILING STATUS, DO I HAVE TO CLAIM MY CHILD AS A DEPENDENT?<span class="plusminus">+</span></div>
                  <div class="accordion_body" style="display: none;">
                  <p><div class="accordion__content">
                <div style="padding: 0px 20px 20px;">
                    <div style="width: auto"><div></div><div class="paragraph"><b>Answer:</b>&nbsp;Generally, to qualify for head of household filing status, you must have a qualifying child or a dependent. However, a custodial parent may be eligible to claim head of household filing status based on a child even if he or she released a claim to exemption for the child. See&nbsp;<a href="https://www.irs.gov/faqs/filing-requirements-status-dependents-exemptions/filing-status/filing-status-3">Noncustodial parent is claiming an exemption for my child; do I still qualify as head of household?</a><br /><br />Additional Information:<ul><li><a href="https://www.irs.gov/help/ita/what-is-my-filing-status">What Is My Filing Status?</a></li><li><a href="https://www.irs.gov/publications/p501/ar02.html">Publication 501, Exemptions, Standard Deduction, and Filing Information</a></li></ul><br />Subcategory:<br /><a href="https://www.irs.gov/faqs/filing-requirements-status-dependents-exemptions/filing-status">Filing Status</a><br />Category:<br /><a href="https://www.irs.gov/faqs/filing-requirements-status-dependents-exemptions">Filing Requirements, Status, Dependents, Exemptions</a></div></div>
                </div>
            </div></p>
                  </div>
                  <div class="accordion_head"  style="font-size:14px;">WHAT SHOULD I DO IF I MADE A MISTAKE ON MY FEDERAL RETURN THAT I'VE ALREADY FILED?<span class="plusminus">+</span></div>
                  <div class="accordion_body" style="display: none;">
                  <p>
                      <div class="accordion__content">
                <div style="padding: 0px 20px 20px;">
                    <div style="width: auto"><div></div><div class="paragraph"><b>Answer:</b>&nbsp;It depends on the type of mistake you made:<br /><span></span><ul><li>Many mathematical errors are caught during the processing of the tax return and corrected by the IRS, so you may not need to correct these mistakes.</li><li>If you didn't claim the correct filing status or you need to change your income, deductions, or credits, you should file an amended or corrected return using&nbsp;<a href="https://www.irs.gov/forms-pubs/about-form-1040x">Form 1040X,&nbsp; Amended U.S. Individual Income Tax Return</a>.</li></ul>When filing an amended or corrected return:<br /><span></span><ul><li>Include copies of any forms and/or schedules that you're changing or didn't include with your original return.</li><li>To avoid delays, file Form 1040X only after you've filed your original return. Generally, for a credit or refund, you must file Form 1040X within 3 years after the date you timely filed your original return or within 2 years after the date you paid the tax, whichever is later.</li><li>Allow the IRS up to 16 weeks to process the amended return.</li></ul><br />Additional Information:<ul><li><a href="https://www.irs.gov/taxtopics/tc308.html">Tax Topic 308 &mdash; Amended Returns</a></li><li><a href="https://www.irs.gov/help/ita/should-i-file-an-amended-return">Should I File an Amended Return?</a></li><li><a href="https://www.irs.gov/pub/irs-pdf/i1040x.pdf">Instructions for Form 1040X, Amended U.S. Individual Income Tax Return</a></li></ul><br />Subcategory:<br /><a href="https://www.irs.gov/faqs/irs-procedures/amended-returns-form-1040x">Amended Returns &amp; Form 1040X</a><br />Category:<br /><a href="https://www.irs.gov/faqs/irs-procedures">IRS Procedures</a></div></div>
                </div>
            </div></p>
                  </div><div class="accordion_head"  style="font-size:14px;">WHAT IS A SPLIT REFUND?<span class="plusminus">+</span></div>
                  <div class="accordion_body" style="display: none;">
                  <p>
                  <div class="accordion__content">
                <div style="padding: 0px 20px 20px;">
                    <div style="width: auto"><div></div><div class="paragraph"><b>Answer:</b>&nbsp;A split refund lets you divide your refund, in any proportion you want, and direct deposit the funds into up to three different accounts with U.S. financial institutions. Use&nbsp;<a href="https://www.irs.gov/forms-pubs/about-form-8888">Form 8888, Allocation of Refund (Including Savings Bond Purchases)</a>to request to have your refund split or to use part or all of your refund to buy up to $5,000 in paper or electronic U.S. Series I Savings Bonds for yourself or someone else.<br /><br />Additional Information:<ul><li><a href="https://www.irs.gov/refunds/frequently-asked-questions-about-splitting-federal-income-tax-refunds">Frequently Asked Questions about Splitting Federal Income Tax Refunds</a></li></ul><br />Subcategory:<br /><a href="https://www.irs.gov/faqs/irs-procedures/refund-inquiries">Refund Inquiries</a><br />Category:<br /><a href="https://www.irs.gov/faqs/irs-procedures">IRS Procedures</a></div></div>
                </div>
            </div></p>
                  </div><div class="accordion_head"  style="font-size:14px;">HOW DO I KNOW IF I HAVE TO FILE QUARTERLY INDIVIDUAL ESTIMATED TAX PAYMENTS? <span class="plusminus">+</span></div>
                  <div class="accordion_body" style="display: none;">
                  <p>
                  <div class="accordion__content">
                <div style="padding: 0px 20px 20px;">
                    <div style="width: auto"><div></div><div class="paragraph"><b>Answer:</b>&nbsp;You&nbsp;<span style="font-weight:700">must make</span>&nbsp;estimated tax payments for the current tax year if both of the following apply:<ul><li>You expect to owe at least $1,000 in tax for the current tax year after subtracting your withholding and refundable credits.</li><li>You expect your withholding and refundable credits to be less than the smaller of:<ul><li>90% of the tax to be shown on your current year&rsquo;s tax return, or</li><li>100% of the tax shown on your prior year&rsquo;s tax return.&nbsp;(Your prior year tax return must cover all 12 months.)</li></ul></li></ul>There are&nbsp;<span style="font-weight:700">special rules</span>&nbsp;for:<ul><li>Farmers and fishermen</li><li>Certain household employers</li><li>Certain higher income taxpayers</li><li>Nonresident aliens</li></ul><br />Additional Information:<ul><li><a href="https://www.irs.gov/publications/p505/index.html">Publication 505, Tax Withholding and Estimated Tax</a></li><li><a href="https://www.irs.gov/pub/irs-pdf/f1040esn.pdf">Form 1040-ES (NR), U.S. Estimated Tax for Nonresident Alien Individuals</a></li><li><a href="https://www.irs.gov/pub/irs-pdf/f1040es.pdf">Form 1040-ES, Estimated Tax for Individuals</a></li></ul><br />Subcategory:<br /><a href="https://www.irs.gov/faqs/estimated-tax/individuals">Individuals</a><br />Category:<br /><a href="https://www.irs.gov/faqs/estimated-tax">Estimated Tax</a></div></div>
                </div>
            </div></p>
                  </div>
                  <div class="accordion_head"  style="font-size:14px;">I RETIRED LAST YEAR, AND STARTED RECEIVING SOCIAL SECURITY PAYMENTS. DO I HAVE TO PAY TAXES ON MY SOCIAL SECURITY BENEFITS?<span class="plusminus">+</span></div>
                  <div class="accordion_body" style="display: none;">
                  <p><div class="accordion__content">
                <div style="padding: 10px 20px 20px;">
                    <div style="width: auto"><div></div><div class="paragraph"><b>Answer:</b>&nbsp;Social security benefits include monthly retirement, survivor and disability benefits. They don't include supplemental security income (SSI) payments, which aren't taxable. The net amount of social security benefits that you receive from the Social Security Administration is reported in Box 5 of Form SSA-1099, Social Security Benefit Statement, and you report that amount on line 5a of&nbsp;<a href="https://www.irs.gov/forms-pubs/about-form-1040">Form 1040, U.S. Individual Income Tax Return</a>. The taxable portion of the benefits that's included in your income and used to calculate your income tax liability depends on the total amount of your income and benefits for the taxable year. You report the taxable portion of your social security benefits on line 5b of Form 1040.<br /><span></span>Your benefits may be taxable if the total of (1) one-half of your benefits, plus (2) all of your other income, including tax-exempt interest, is greater than the base amount for your filing status.<br /><span></span>The base amount for your filing status is:<br /><span></span><ul><li>$25,000 if you're single, head of household, or qualifying widow(er),</li><li>$25,000 if you're married filing separately and lived apart from your spouse for the entire year,</li><li>$32,000 if you're married filing jointly,</li><li>$0 if you're married filing separately and lived with your spouse at any time during the tax year.</li></ul>If you're married and file a joint return, you and your spouse must combine your incomes and social security benefits when figuring the taxable portion of your benefits. Even if your spouse didn't receive any benefits, you must add your spouse's income to yours when figuring on a joint return if any of your benefits are taxable.<br /><span></span>You can figure the taxable amount of the benefits in&nbsp;<a href="https://www.irs.gov/help/ita/are-my-social-security-or-railroad-retirement-tier-i-benefits-taxable">Are My Social Security or Railroad Retirement Tier I Benefits Taxable?</a>, on a worksheet in the&nbsp;<a href="https://www.irs.gov/forms-pubs/about-form-1040">Instructions for Form 1040</a>&nbsp;or in&nbsp;<a href="https://www.irs.gov/forms-pubs/about-publication-915">Publication 915, Social Security and Equivalent Railroad Retirement Benefits</a>.<br /><span></span><br /><br /><span></span><br />Additional Information:<ul><li><a href="https://www.irs.gov/taxtopics/tc423.html">Tax Topic 423 - Social Security and Equivalent Railroad Retirement Benefits</a></li><li><a href="https://www.irs.gov/pub/irs-pdf/p554.pdf">Publication 554, Tax Guide for Seniors</a></li></ul><br />Subcategory:<br /><a href="https://www.irs.gov/faqs/social-security-income/regular-disability-benefits">Regular &amp; Disability Benefits</a><br />Category:<br /><a href="https://www.irs.gov/faqs/social-security-income">Social Security Income</a></div></div>
                </div>
            </div></p>
                  </div>
                  <div class="accordion_head"  style="font-size:14px;">WHAT ARE THE TAX CHANGES FOR THIS YEAR?<span class="plusminus">+</span></div>
                  <div class="accordion_body" style="display: none;">
                  <p><div class="accordion__content">
                <div style="padding: 0px 20px 20px;">
                    <div style="width: auto"><div></div><div class="paragraph"><b>Answer:</b>&nbsp;For highlights of the tax changes for the current tax year, refer to the "What's New" section of the following:<br /><span></span><span style="font-weight:700">Individuals -</span>&nbsp;<a href="https://www.irs.gov/forms-pubs/about-form-1040">Instructions for Form 1040</a>.<br /><span></span><span style="font-weight:700">Businesses -&nbsp;</span><a href="https://www.irs.gov/forms-pubs/about-publication-15">Publication 15 (Circular E), Employer's Tax Guide</a>&nbsp;or the instructions of your current business tax forms.&nbsp;<br /><span></span><br />Subcategory:<br /><a href="https://www.irs.gov/faqs/irs-procedures/general-procedural-questions">General Procedural Questions</a><br />Category:<br /><a href="https://www.irs.gov/faqs/irs-procedures">IRS Procedures</a></div></div>
                </div>
            </div></p>
                  </div>
                  <!--<br>-->
                  <!--<div class="me"> <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="VIEW MORE"></div>-->
              </div>
             
              

              </p>
            </div>
              </div>
            </div>
            <!--<div class="col-md-6">-->
            <!--  <img src="img/pic7.png" class="img-fluid" alt="">-->
            <!--</div>-->
        </div>
    </div>     
    </section>
    <!-- end faq -->
<?php include('includes/footer.php') ?>
    