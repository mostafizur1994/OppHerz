<?php
include('conn.php');
if(!isset($_SESSION['admin_id']) && $_SESSION['admin_id'] == '')
{
	
	$_SESSION['msg']='<span class="alert alert-danger">you cannot able to aceess this page </span>';
	header('location:login.php');
	
	exit();
	
}

?>  



<!DOCTYPE html>
<html lang="en">

<head>
   <?php include("includes/head.php") ?>


</head>


<body>

    <!-- Preloader -->



    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>

    <!---------------------- Header ------------------------------->

    <?php include('includes/header.php') ?>

    <!-- Header -->


    <!--Home-->


    <section id="home">


        <!--Video-->


        <video id="home-bg-video" poster="video/pexels-c.png" autoplay loop muted>
            <source src="video/pexels-c.mp4" type="video/mp4">
            <source src="video/pexels-c.ogv" type="video/ogg">
            <source src="video/pexels-c.webm" type="video/webm">

        </video>

        <!--overlay-->


        <div id="home-overlay">
        </div>

        <!--Home Content-->


        <div id="home-content">

            <div id="home-content-inner" class="text-center">

                <div id="home-heading">

                    <h1 id="home-heading-1"> Opportunity <span> Herz </span> </h1>
                </div>

                <div id="home-text">

                    <p> Your Future is Our Responsbility. </p>

                </div>

                <div id="home-btn">

                    <a class="btn btn-general btn-home btn-success" href="#stats" title="What's new"
                        role="button">What's New</a>

                </div>

            </div>

        </div>

        <!--Arrow Down-->
        <a href="#slider" id="arrow-down">

            <i class="fa fa-angle-down"></i>
        </a>

    </section>

    <!--Ends here-->

    

    <!---------slider------------>

    <section id="slider">

        <div class="content-box">

            <div class="content-title wow animated fadeInDown" data-wow-duration="is" data-wow-delay=".5s">

                <h2> <strong>Featured Opportunities</strong></h2>
                <div class="content-title-underline"></div>
            </div>
        </div>

        <div class="container">

            <div class="row wow animated fadeInUp" data-wow-duration="is" data-wow-delay=".5s">

                <div class="col-md-12">

                    <div id="team-members" class="owl-carousel owl-theme">

                        <div class="team-member">

                            <img src="img/Conference/1.jpg" class="img-responsive" alt="team-member">

                            <div class="slider-info text-center">

                                <a href="landingpage.php">
                                    <h3 class="slider-name"> Global Forum 2021 <br> First Generation Activist </h3>
                                </a>

                                <h3 class="deadline"> Deadline : 7th May, 2021 </h3>

                            </div>

                        </div>

                        <div class="team-member">

                            <img src="img/Conference/2.jpg" class="img-responsive" alt="team-member">

                            <div class="slider-info text-center">

                                <a href="landingpage.php">
                                    <h3 class="slider-name"> The International Conference on DRI </h3>
                                </a>
                                <h3 class="deadline"> Deadline : 10th March, 2021</h3>

                            </div>

                        </div>

                        <div class="team-member">

                            <img src="img/Conference/3.jpg" class="img-responsive" alt="team-member">

                            <div class="slider-info text-center">

                                <a href="landingpage.php">
                                    <h3 class="slider-name"> Youth 4 Climate <br> Driving Ambition </h3>
                                </a>
                                <h3 class="deadline"> Deadline : 30th March, 2021 </h3>

                            </div>

                        </div>

                        <div class="team-member">

                            <img src="img/Conference/4.jpg" class="img-responsive" alt="team-member">

                            <div class="slider-info text-center">

                                <a href="landingpage.php">
                                    <h3 class="slider-name"> 9th PKES Online Summer School </h3>
                                </a>
                                <h3 class="deadline"> Deadline : 27th April, 20121 </h3>

                            </div>

                        </div>

                        <div class="team-member">

                            <img src="img/Conference/5.jpg" class="img-responsive" alt="team-member">

                            <div class="slider-info text-center">

                                <a href="landingpage.php">
                                    <h3 class="slider-name"> Digital Global Solutions Summit </h3>
                                </a>
                                <h3 class="deadline"> Deadline : July 2020 </h3>

                            </div>

                        </div>

                    </div>



                </div>
            </div>

        </div>

    </section>

    <!-------slider ends here----------->





    <!-------For Gaps ----------->

    <div id=gaps>

        <br><br><br><br><br>

    </div>

    <!-------gaps ends here----------->





    <!-- starts section -->

    <section id="stats">

        <div class="content-box-md">

            <div class="container">

                <div class="row">




                    <div class="col-md-12">

                        <div class="horizontal-heading text-center">

                            <h3>Deadline Approaching</h3>
                            <h1> Explore New <span> Opportunities </span> </h1>


                        </div>

                    </div>



                </div>

                <div class="row">

                    <div id="isotope-filters">


                        <div class="col-lg-2">

                            <!------------------- stats item 1 ---------------------->

                            <div class="stats-item text-center">

                                <i class="fa fa-university"></i>
                                <h3 class="counter">25</h3>



                                <button class="btn btn-success active"
                                    data-filter=".Scholarship"><span>Scholarship</span></button>



                            </div>

                        </div>



                        <div class="col-lg-2">

                            <!------------------- stats item 2 ---------------------->
                            <div class="stats-item text-center">

                                <i class="fa fa-graduation-cap"></i>
                                <h3 class="counter">35</h3>



                                <button class="btn btn-success"
                                    data-filter=".Internship"><span>Internship</span></button>


                            </div>

                        </div>



                        <div class="col-lg-2">

                            <!------------------- stats item 3 ---------------------->

                            <div class="stats-item text-center">

                                <i class="fa fa-black-tie"></i>
                                <h3 class="counter">28</h3>



                                <button class="btn btn-success .text-center"
                                    data-filter=".Exchange"><span>Ex-Programs</span></button>



                            </div>

                        </div>




                        <div class="col-lg-2">

                            <!------------------- stats item 4 ---------------------->

                            <div class="stats-item text-center">

                                <i class="fa fa-comments"></i>
                                <h3 class="counter">28</h3>



                                <button class="btn btn-success"
                                    data-filter=".Conference"><span>Conference</span></button>



                            </div>


                        </div>



                        <div class="col-12 col-sm-6 col-lg-2 py-5">

                            <!------------------- stats item 5 ---------------------->

                            <div class="stats-item text-center">

                                <i class="fa fa-trophy"></i>
                                <h3 class="counter">17</h3>



                                <button class="btn btn-success"
                                    data-filter=".competitions"><span>competitions</span></button>




                            </div>


                        </div>


                    </div>



                </div>


            </div>


        </div>

    </section>



    <!-------------------------------enddddddddddddd-------------------->



    <!-----------------gaps------------------->
    <div id="gaps">
        <br> <br> <br> <br><br>
    </div>

    <!-----------------gaps ends ------------------->




    <!--------------------Boxs items-------------------->

    <section id="portfolio-wrapper">

        <div class="container">

            <div class="row no-gutters">

                <div id="isotope-container">

                    <div class="col-12 col-md-3 col-lg-4 Scholarship Conference">

                        <!----------------portfolio items 1------------------------------>

                        <div class="portfolio-item">

                            <img src="img/scholarship/1.jpg" class="img-responsive" alt="portfolio 01">

                            <div class="portfolio-item-overlay">

                                <div class="portfolio-item-details text-center">

                                    <!--item header-->

                                    <a href="landingpage.html">
                                        <h3>Australia Awards Scholarship 2022</h3>
                                    </a>

                                    <!--item strips-->

                                    <span></span>

                                    <!--item description-->

                                    <p>Fully Funded</p>

                                </div>

                            </div>



                        </div>

                    </div>




                    <div class="col-12 col-md-3 col-lg-4 Scholarship Internship Conference">

                        <!------------------------portfolio items 2--------------------------->

                        <div class="portfolio-item">

                            <img src="img/scholarship/2.png" class="img-responsive" alt="portfolio 02">

                            <div class="portfolio-item-overlay">

                                <div class="portfolio-item-details text-center">


                                    <!--item header-->

                                    <a href="landingpage.html">
                                        <h3>Commonwealth Scholarship 2021</h3>
                                    </a>


                                    <!--item strips-->

                                    <span></span>

                                    <!--item description-->
                                    <p>Fully Funded</p>

                                </div>

                            </div>
                        </div>

                    </div>



                    <div class="col-12 col-md-3 col-lg-4 Scholarship Internship Exchange">

                        <!--portfolio items 3-->

                        <div class="portfolio-item">


                            <img src="img/scholarship/3.png" class="img-responsive" alt="portfolio 03">

                            <div class="portfolio-item-overlay">

                                <div class="portfolio-item-details text-center">

                                    <!--item header-->

                                    <a href="landingpage.html">
                                        <h3>DAAD Scholarship-Fully Funded 2021</h3>
                                    </a>

                                    <!--item strips-->

                                    <span></span>

                                    <!--item description-->

                                    <p>Fully Funded</p>

                                </div>

                            </div>

                        </div>



                    </div>



                    <div class="col-12 col-md-3 col-lg-4 Scholarship Exchange">

                        <!--portfolio items 4-->

                        <div class="portfolio-item">


                            <img src="img/scholarship/4.jpg" class="img-responsive" alt="portfolio 04">

                            <div class="portfolio-item-overlay">

                                <div class="portfolio-item-details text-center">

                                    <!--item header-->

                                    <a href="landingpage.html">
                                        <h3>Microsoft Funded Scholarship 2021</h3>
                                    </a>

                                    <!--item strips-->

                                    <span></span>

                                    <!--item description-->

                                    <p>Fully Funded</p>

                                </div>

                            </div>



                        </div>




                    </div>

                    

                    <div class="col-12 col-md-3 col-lg-4 Scholarship competitions Exchange">

                        <!--portfolio items 5-->

                        <div class="portfolio-item">


                            <img src="img/scholarship/5.jpg" class="img-responsive" alt="portfolio 05">

                            <div class="portfolio-item-overlay">

                                <div class="portfolio-item-details text-center">

                                    <!--item header-->

                                    <a href="landingpage.html">
                                        <h3>DAAD scholarship 2021-2022</h3>
                                    </a>

                                    <!--item strips-->

                                    <span></span>

                                    <!--item description-->

                                    <p>Fully Funded</p>

                                </div>

                            </div>



                        </div>

                    </div>



                    <div class="col-12 col-md-3 col-lg-4 Scholarship Conference Internship Exchange competitions">

                        <!--portfolio items 6-->

                        <div class="portfolio-item">


                            <img src="img/scholarship/6.jpg" class="img-responsive" alt="portfolio 06">

                            <div class="portfolio-item-overlay">

                                <div class="portfolio-item-details text-center">

                                    <!--item header-->

                                    <a href="landingpage.html">
                                        <h3>Fully Funded Scholarship in Canada 2021</h3>
                                    </a>

                                    <!--item strips-->

                                    <span></span>

                                    <!--item description-->

                                    <p>Partially Funded</p>

                                </div>

                            </div>



                        </div>


                    </div>


                    <div class="col-12 col-md-3 col-lg-4 Scholarship competitions Internship Exchange">

                        <!--portfolio items 7-->

                        <div class="portfolio-item">


                            <img src="img/scholarship/7.jpg" class="img-responsive" alt="portfolio 07">

                            <div class="portfolio-item-overlay">

                                <div class="portfolio-item-details text-center">

                                    <!--item header-->

                                    <a href="landingpage.html">
                                        <h3>2021 Google Scholarship-Fully Funded</h3>
                                    </a>

                                    <!--item strips-->

                                    <span></span>

                                    <!--item description-->

                                    <p>Fully Funded</p>

                                </div>

                            </div>



                        </div>


                    </div>




                    <div class="col-12 col-md-3 col-lg-4 Scholarship Conference competitions">

                        <!----------------------portfolio items 8---------------->

                        <div class="portfolio-item">


                            <img src="img/scholarship/8.jpg" class="img-responsive" alt="portfolio 08">

                            <div class="portfolio-item-overlay">

                                <div class="portfolio-item-details text-center">

                                    <!--item header-->

                                    <a href="landingpage.html">
                                        <h3>Indonesian KNB Full Scholarship 2021</h3>
                                    </a>

                                    <!--item strips-->

                                    <span></span>

                                    <!--item description-->

                                    <p>Partially Funded</p>

                                </div>

                            </div>



                        </div>

                    </div>


                    <div class="col-12 col-md-3 col-lg-4 Internship competitions Exchange Conference">

                        <!--portfolio items 9-->

                        <div class="portfolio-item">

                            <img src="img/Internship/1.jpg" class="img-responsive" alt="portfolio 09">

                            <div class="portfolio-item-overlay">

                                <div class="portfolio-item-details text-center">

                                    <!--item header-->

                                    <a href="landingpage.html">
                                        <h3>Indonesian Your Big year Internship 2021</h3>
                                    </a>

                                    <!--item strips-->

                                    <span></span>

                                    <!--item description-->

                                    <p>Partially Funded</p>

                                </div>

                            </div>

                        </div>


                    </div>


                    <div class="col-12 col-md-3 col-lg-4 Internship competitions Conference Exchange">


                        <!--portfolio items 10-->

                        <br>

                        <div class="portfolio-item">


                            <img src="img/Internship/2.jpg" class="img-responsive" alt="portfolio 10">

                            <div class="portfolio-item-overlay">

                                <div class="portfolio-item-details text-center">

                                    <!--item header-->

                                    <a href="landingpage.html">
                                        <h3>CERN Fully Funded Internship 2021</h3>
                                    </a>

                                    <!--item strips-->

                                    <span></span>

                                    <!--item description-->

                                    <p>Partially Funded</p>

                                </div>

                            </div>


                        </div>

                    </div>

                    <div class="col-12 col-md-3 col-lg-4 Internship competitions Exchange Conference"> <br>

                        <!--portfolio items 11-->

                        <div class="portfolio-item">


                            <img src="img/Internship/3.jpg" class="img-responsive" alt="portfolio 11">

                            <div class="portfolio-item-overlay">

                                <div class="portfolio-item-details text-center">

                                    <!--item header-->

                                    <a href="landingpage.html">
                                        <h3>Apply Architecture Fully Funded Internship 2021</h3>
                                    </a>

                                    <!--item strips-->

                                    <span></span>

                                    <!--item description-->

                                    <p>Fully Funded</p>

                                </div>

                            </div>



                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-4  Internship Conference competitions">

                        <!--portfolio items 12-->
                        <br>
                        <div class="portfolio-item">


                            <img src="img/Internship/4.jpg" class="img-responsive" alt="portfolio 12">

                            <div class="portfolio-item-overlay">

                                <div class="portfolio-item-details text-center">

                                    <!--item header-->

                                    <a href="landingpage.html">
                                        <h3>UN Enviromental Fully Funded Internship 2021</h3>
                                    </a>

                                    <!--item strips-->

                                    <span></span>

                                    <!--item description-->

                                    <p>Fully Funded</p>

                                </div>

                            </div>



                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!--Boxs Items Ends here-------------->


    <!---------Organizational Partners---------->

    <section id="clients">

        <div class="content-box-sm">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 text-center">

                        <div class="horizontal-heading">

                            <h2> Partner Organizations </h2>

                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-12">

                        <div id="clients-list" class="owl-carousel owl-theme">

                            <!---Client 01-->
                            <div class="client">

                                <img src="img/logos/1.png" class="img-responsive" alt="client">

                            </div>

                            <!---Client 02-->
                            <div class="client">

                                <img src="img/logos/2.png" class="img-responsive" alt="client">

                            </div>

                            <!---Client 03-->
                            <div class="client">

                                <img src="img/logos/3.png" class="img-responsive" alt="client">

                            </div>

                            <!---Client 04-->
                            <div class="client">

                                <img src="img/logos/4.gif" class="img-responsive" alt="client">

                            </div>

                            <!---Client 05-->
                            <div class="client">

                                <img src="img/logos/5.jpg" class="img-responsive" alt="client">

                            </div>

                            <!---Client 06-->
                            <div class="client">

                                <img src="img/logos/6.jpg" class="img-responsive" alt="client">

                            </div>

                            <!---Client 07-->
                            <div class="client">

                                <img src="img/logos/7.png" class="img-responsive" alt="client">

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!---------Organizational Partners Ends ---------->



    <!-------------------Footer----------->

    <footer class="text-center">

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <h3>

                        Copyright &copy;: 2021 All Rights Reserved By <span> Opportunity Herz </span>


                    </h3>

                </div>

            </div>


        </div>

        <!-------------------Back to top---------->

        <a href="#home" id="back-to-top" class="btn btn-sm-yellow btn-back-to-top smooth-scroll" title="home" role="button">

            <i class="fa fa-angle-up"></i>

        </a>

    </footer>
    <!-------------------Footer Ends ----------->


    <!-- jquery -->
    <script src="js/jquery.js"> </script>

    <!--Boostrap js-->
    <script src="js/Bootstrap/bootstrap.js.js"></script>


    <!--Isotope-->
    <script src="js/isotope/isotope.pkgd.min.js.js"></script>

    <!-- custom javascript -->

    <script src="js/isotope/4.1 isotope.pkgd.min.js.js"></script>

    <!-----------popup---------->
    <script src="js/magnific-popup/jquery.magnific-popup.min.js.js"></script>


    <!---waypoints-->

    <script src="js/waypoints/jquery.waypoints.min.js"></script>

    <!----counter plugin-->

    <script src="js/counter/jquery.counterup.min.js"></script>


    <!----owl carousel js--->
    <script src="js/owl/owl.carousel.min.js"></script>

    <!----google map API -------->

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAfErUaps4dBfaorXeA9OX7aF67_GMfplA&callback=initMap">
    </script>
    
    <!--------wow animation--------->

    <script src="js/wow/wow.min.js"></script>

    <!--------javascript--------->

    <script src="js/script.js"> </script>

</body>

</html>