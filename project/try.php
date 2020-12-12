<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="custom/style.css">
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
              height: 100%;
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
            .demo-gallery {
              padding-bottom: 80px;
            }
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    </head>
    <body>
    <?php include('includes/navbar.php') ?>

        <div class="container">

        
            <div class="demo-gallery">
                <ul id="lightgallery" class="list-unstyled row">
                    <li class="col-xs-6 col-md-2" data-src="img/img/1-1600.jpg">
                        <a href="">
                            <img class="img-responsive" src="img/img/thumb-1.jpg">
                        </a>
                    </li>
                    <li class="col-xs-6 col-md-2" data-responsive="img/img/2-375.jpg 375, img/img/2-480.jpg 480, img/img/2.jpg 800" data-src="img/img/2-1600.jpg">
                        <a href="">
                            <img class="img-responsive" src="img/img/thumb-2.jpg">
                        </a>
                    </li>
                    <li class="col-xs-6 col-md-2" data-responsive="img/img/13-375.jpg 375, img/img/13-480.jpg 480, img/img/13.jpg 800" data-src="img/img/13-1600.jpg">
                        <a href="">
                            <img class="img-responsive" src="img/img/thumb-13.jpg">
                        </a>
                    </li>
                    <li class="col-xs-6 col-md-2" data-responsive="img/img/4-375.jpg 375, img/img/4-480.jpg 480, img/img/4.jpg 800" data-src="img/img/4-1600.jpg">
                        <a href="">
                            <img class="img-responsive" src="img/img/thumb-4.jpg">
                        </a>
                    </li>
                    <li class="col-xs-6 col-md-2" data-responsive="img/img/4-375.jpg 375, img/img/4-480.jpg 480, img/img/4.jpg 800" data-src="img/img/4-1600.jpg">
                    <a href="">
                        <img class="img-responsive" src="img/img/thumb-4.jpg">
                    </a>
                </li>
                <li class="col-xs-6 col-md-2" data-responsive="img/img/4-375.jpg 375, img/img/4-480.jpg 480, img/img/4.jpg 800" data-src="img/img/4-1600.jpg">
                    <a href="">
                        <img class="img-responsive" src="img/img/thumb-4.jpg">
                    </a>
                </li>
                </ul>
            </div>
        </div>
        
        <?php include('includes/footer.php') ?>
