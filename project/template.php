<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="custom/style.css">
    <link rel="stylesheet" href="custom/template.css">
    <title>MAXTAX</title>
</head>
<body>
    <!-- Here is Nav -->
    <?php include('includes/navbar.php') ?>
    <!-- end of Nav  -->


    <!-- header area for writing -->
    <section class="heading-w">
      <h1>PLEASE <span style="color:#af090d;"> DOWNLOAD</span>  OUR <br> APP AND <br>
        ​SCAN THE QR CODE BELOW.</h1>
    </section>
    <!-- end header area -->

    <!-- content are -->
    <section class="content-w">

      <div class="container">
        <div class="row text-center">
          <div class="col-md-6">
           <a href="https://apps.apple.com/us/app/taxpass/id1256036789?ls=1"> <img src="/img/unknown.jpeg" alt=""></a>
           <br><br>
           <img src="img/screen-shot-2018-01-31-at-1-46-39-pm.png" alt="">
          </div>
          <div class="col-md-6">
           
            <a href="https://play.google.com/store/apps/details?id=com.crosslinktax.taxlink&hl=en">  <img src="/img/unknown-1.png" alt=""></a>
            <br><br>
            <img src="img/img-4681_orig.jpg" alt="">
          </div>
        </div>
      </div>

    </section>
    <!-- end content are -->
 
   

    


   

    
    
    <?php include('includes/footer.php') ?>
