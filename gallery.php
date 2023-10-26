<?php
include('header.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Gallery</title>
</head>
<body class="bg">
    <div class="container w-100">
        <!-- start #header -->
        <header id="header">
            <!-- start #menu -->
            <?php
            include('navbar.php')
            ?>
            <!-- end #menu -->
        </header>
        <!-- end #header -->

        <!-- start #main -->
        <main>
             <!-- start banner -->
      <?php include('banner.php') ?>
      <!-- end banner -->

           
        <!-- start about section -->
        <section class="mt-5 remove-margin center">
                
            <h3 style="font-size: 20px;">Hotel Snow Gardens is one of the living standard luxury hotels in Colombo in affordable for all classes.</h3>
                       
        </section>
            <!-- end about us -->
           
                
            <!-- start gallery -->
            <section class="mt-5" id="gallery">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="master-room borderrr text-center">Gallery</h3>
                        <div id="lb-back">
                            <div id="lb-img"></div>
                        </div>
                        <div class="container gallery-img-height mt-5 zoom">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-3"><img src="./assets/img/gallery/slider.jpeg" class="d-block w-100 zoomPic" alt="Image1"></div>
                                <div class="col-sm-12 col-md-6 col-lg-3"><img src="./assets/img/gallery/gallery2.JPG" class="d-block w-100 zoomPic" alt="Image2"></div>
                                <div class="col-sm-12 col-md-6 col-lg-3"><img src="./assets/img/gallery/gallery3.JPG" class="d-block w-100 zoomPic" alt="Image3"></div>
                                <div class="col-sm-12 col-md-6 col-lg-3"><img src="./assets/img/gallery/gallery4.JPG" class="d-block w-100 zoomPic" alt="Image4"></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-12 col-md-6 col-lg-3"><img src="./assets/img/gallery/gallery5.JPG" class="d-block w-100 zoomPic" alt="Image5"></div>
                                <div class="col-sm-12 col-md-6 col-lg-3"><img src="./assets/img/gallery/gallery6.JPG" class="d-block w-100 zoomPic" alt="Image6"></div>
                                <div class="col-sm-12 col-md-6 col-lg-3"><img src="./assets/img/gallery/gallery7.JPG" class="d-block w-100 zoomPic" alt="Image7"></div>
                                <div class="col-sm-12 col-md-6 col-lg-3"><img src="./assets/img/gallery/gallery8.JPG" class="d-block w-100 zoomPic" alt="Image8"></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-12 col-md-6 col-lg-3"><img src="./assets/img/gallery/gallery9.JPG" class="d-block w-100 zoomPic" alt="Image9"></div>
                                <div class="col-sm-12 col-md-6 col-lg-3"><img src="./assets/img/gallery/gallery10.JPG" class="d-block w-100 zoomPic" alt="Image9"></div>
                                <div class="col-sm-12 col-md-6 col-lg-3"><img src="./assets/img/gallery/gallery11.JPG" class="d-block w-100 zoomPic" alt="Image9"></div>
                                <div class="col-sm-12 col-md-6 col-lg-3"><img src="./assets/img/gallery/gallery12.JPG" class="d-block w-100 zoomPic" alt="Image9"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end gallery -->

            

           

           
        </main>
        <!-- end #main -->

        <!-- start #footer -->
        <?php
        include('footer.php')
        ?>
        <!-- end #footer -->
</body>

</html>