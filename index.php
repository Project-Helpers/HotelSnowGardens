<?php
include('header.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Home</title>
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
            <!-- start slider -->
            <?php
            include('slider.php')
            ?>
            <!-- end slider -->

           

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

         
            <!-- start about section -->
            <section class="mt-5 remove-margin">
                <div class="overlay">
                    <img src="assets/img/gallery/about.jpg" class="img-fluid overlay-image" alt="">
                    <div class="row d-flex justify-content-center align-items-center about-overlay">
                        <div class="col-sm-12 col-md-10 col-lg-8">
                            <h3>A Little More About</h3>
                            <!-- <div class="bord"></div> -->
                            <h2>Hotel Snow Gardens</h2>
                            <p>Cheap | Comfort | Safety | Security</p>
                        </div>
                        <div class="col-sm-12 col-md-5 col-lg-4 text-center">
                            <p style="font-size: 20px;">Hotel Snow Gardens is one of the living standard luxury hotels in Colombo in affordable for all classes.</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end about us -->

            <!-- start places to visit -->
            <section class="container mt-3">
                <div class="row">
                    <div class="col-md-12 mt-5 text-center">
                        <h4 style="font-size: 23px; color:darkgoldenrod; font-weight:600; margin-left:50px;">Places to Visit in</h4>
                        <h3 class="borderrr master-room" style="font-size: 35px; letter-spacing: 1px; font-weight: 600;">Colombo</h3>
                    </div>
                    <div class="places">
                        <div class="row mt-4">
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <img src="assets/img/places/places1.jpeg" class="w-100 img-fluid" alt="Maligawatta">
                                <h4>Maligawatta</h4>
                                <p>Maligawatta is a suburb in Colombo, Sri Lanka. Maligawatta is located approximately 3 kilometres north-east from the centre of Colombo, Colombo Fort. The name Maligawatta is from the Sinhalese language which translates into garden of the palace.</p>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <img src="assets/img/places/places2.jpeg" alt="R. Premadasa Stadium">
                                <h4>R. Premadasa International Cricket Stadium, Colombo, Sri Lanka</h4>
                                <p>The R. Premadasa Cricket Stadium (RPS) is a cricket stadium on Khettarama Road, in the Maligawatta suburb of Colombo, Sri Lanka.The R. Premadasa Stadium is the biggest cricket stadium in Sri Lanka. It has the capacity to accommodate more than 35,000 spectators at a time. </p>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <img src="assets/img/places/places3.jpeg" alt="Viharamahadevi Park">
                                <h4>Viharamahadevi Park</h4>
                                <p>Viharamahadevi Park is a public park located in Cinnamon Gardens, in Colombo, situated in front of the colonial-era Town Hall in Sri Lanka. It was built by the British colonial administration and is the oldest and largest park of Colombo.</p>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <img src="assets/img/places/places4.jpeg" alt="Gangaramaya Temple">
                                <h4>Gangaramaya Temple</h4>
                                <p>Gangaramaya Temple is one of the most important temples in Colombo, Sri Lanka, being a mix of modern architecture and cultural essence. Located on the Beira Lake, it was completed in the late 19th century.</p>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <img src="assets/img/places/places5.jpeg" alt="Kelaniya Raja Maha Viharaya">
                                <h4>Kelaniya Raja Maha Viharaya</h4>
                                <p>The Kelaniya Raja Maha Vihara or Kelaniya Temple is a Buddhist temple in Kelaniya, Sri Lanka. It is located 11 km north-east of Colombo. The current chief incumbent is Venerable Professor Kollupitiye Mahinda Sangharakkhitha Thera.
                                </p>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <img src="assets/img/places/places6.jpeg" alt="Galle Face Green">
                                <h4>Galle Face Green</h4>
                                <p>Galle Face is a 5 ha ocean-side urban park, which stretches for 500 m along the coast, in the heart of Colombo, the financial and business capital of Sri Lanka. </p>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <img src="assets/img/places/places7.jpeg" alt="Independence Square">
                                <h4>Independence Square</h4>
                                <p>Independence Memorial Hall is a national monument in Sri Lanka built for commemoration of the independence of Sri Lanka from the British rule with the restoration of full governing responsibility to a Ceylonese-elected legislature on 4 February 1948.</p>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <img src="assets/img/places/places8.jpeg" alt="Colombo National Museum">
                                <h4>Colombo National Museum</h4>
                                <p>The National Museum of Natural History is a museum that covers the natural heritage of Sri Lanka. The museum is located closer to the National Museum of Colombo. It was established on September 23, 1986 and became only one museum in Sri Lanka that represents natural history and natural heritage.</p>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <img src="assets/img/places/places9.jpeg" alt="Diyatha Uyana">
                                <h4>Diyatha Uyana</h4>
                                <p>Diyatha Uyana is located at Polduwa junction, Battaramulla near the Waters Edge Hotel. The park has been constructed on marshy land on the banks of the Diyawanna Oya. It sits between the Parliament Complex and the Diyawanna Oya at the Polduwa junction </p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end places to visit -->
        </main>
        <!-- end #main -->

        <?php
        include('footer.php')
        ?>
    </div>
    </body>
</html>