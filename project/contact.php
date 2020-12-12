<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="custom/style.css">
    <link rel="stylesheet" href="custom/contact.css">
    <title>CONTACT</title>
</head>
<body>
    <!-- Here is Nav -->
    <?php include('includes/navbar.php') ?>


    <!-- end of Nav  -->

     <!-- header area for writing -->
     <section class="heading-w">
        <h1 style="font-weight: bold; font-size: 70px;">CALL NOW!</h1>
        <h3 style="font-weight: bold; ">1-877-313-0900</h3>
        
      </section>
      <!-- end header area -->
 
      <!--start content area-->

    <div class="container">
        <h1 style="text-align: center; color: black; margin-top: 30px;">INTERESTED IN STARTING YOUR OWN BUSINESS?        </h1>
        <br><center><a href="#"><img src="img/button5.png"></a></center><br>

        <div class="row">
            <div class="col-md-4">
                <h3 style="text-align: center; color: black; font-weight: bold;">CALL FOR THE MAX TODAY!</h3>
                <p style="text-align: justify;">Contact us for more information about our services. Call us at the number below or fill out this email form for a fast reply. Our experienced customer service team can help you find exactly what you need and can provide advise on our accessories and delivery options. Our customer service team is available from 10 a.m. to 7 p.m. Monday to Friday
                </p><br><hr><br>
                <h3 style="text-align: center; color: black; font-weight: bold;">OFFICE PHONE:</h3>
                <p style="color: #ff0000; font-weight: bold; text-align: center;" >(877) 313-0900</p><br>

                <h3 style="text-align: center; color: black; font-weight: bold;">HQ ADDRESS:</h3>
                <p style="color: #ff0000; font-weight: bold; text-align: center;" >750 S ORANGE BLOSSOM TRAIL, ORLANDO, FL, 32805</p><br>

                <h3 style="text-align: center; color: black; font-weight: bold;">EMAIL:</h3>
                <p style="color: #ff0000; font-weight: bold; text-align: center;" >SUPPORT@MAXTAXW2.COM</p><br><hr>
            </div>
            <div class="col-md-8">
             <form>
                <div class="form-group">
                    <label>Email Address:<b style="color: #ff0000;">*</b></label>
                    <input name="Email" type="email"  required="required" class="form-control bg-white border"><br>
                    <label>First Name:<b style="color: #ff0000;">*</b></label>
                    <input name="First Name" type="text"  required="required" class="form-control bg-white border"><br>
                    <label>Last Name:<b style="color: #ff0000;">*</b></label>
                    <input name="Last Name" type="text"  required="required" class="form-control bg-white border"><br>
                    <div class="row">
                        <div class="col-md-6"><input class="birthday required" type="text" pattern="[0-9]*" value="" placeholder="MM" size="2" maxlength="2" required="required"> &nbsp;/&nbsp;
                            <input class="birthday required" type="text" pattern="[0-9]*" value="" placeholder="DD" size="2" maxlength="2" required="required">&nbsp;(&nbsp;mm/dd&nbsp;)&nbsp;&nbsp;</div>
                        <div class="col-md-6">
                            <label>Best Contact Phone Number:<b style="color: #ff0000;">*</b></label>
                            <input name="text" type="text"  required="required"  style="width: 300px;">
                        </div>
                    </div>
                  <br><br>
                    <label>What is your financial goal this Tax Season<b style="color: #ff0000;">*</b></label>
                    <input  type="text" required="required" class="form-control bg-white border"><br>
                    <strong>Position Title</strong><b style="color: #ff0000;">*</b><br><br>
                    <input type="radio" name="tax" value="Tax Preparer">&nbsp;Tax Preparer<br>
                    <input type="radio"  name="tax" value="Manager">&nbsp;Manager<br>
                    <input type="radio"  name="tax" value="Franchise Owner">&nbsp;Franchise Owner
                    <br><br>

                    <strong>Years Experience in the Tax Industry</strong><b style="color: #ff0000;">*</b><br><br>
                    <input type="radio" name="year" value="none">&nbsp;None<br>
                    <input type="radio" name="year" value="1-2years">&nbsp;1-2 years<br>
                    <input type="radio" name="year" value="3-5 years">&nbsp;3-5 years<br>
                    <input type="radio" name="year" value="5+ years">&nbsp;5+ years
                    <br><br>
                    <label>How many potential clients do you have access to?<b style="color: #ff0000;">*</b></label>
                    <input  type="text"  required="required" class="form-control bg-white border"><br>
                    <br><br>

                    <strong>Which Certifications do you already have?</strong><b style="color: #ff0000;">*</b><br><br>
                    <input type="checkbox" value="PTIN (Preparer Tax Identification Number)">&nbsp;PTIN (Preparer Tax Identification Number)<br>
                    <input type="checkbox" value="EFIN (Electronic Filing Identification Number)">&nbsp;EFIN (Electronic Filing Identification Number             <br>
                    <input type="checkbox" value="EIN (Employer Identification Number)">&nbsp;EIN (Employer Identification Number)<br>
                    <input type="checkbox" value="None">&nbsp;None
                    <br><br>
                    <input type="submit" value="Subscribe" name="subscribe"  class="button" style="border: none; padding: 10px;">
                </div>
             </form>   
          
            </div>
        </div>
        <br>
    </div>
      <!--end content area-->
 
      <?php include('includes/footer.php') ?>
