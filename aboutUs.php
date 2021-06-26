<?php
include('security.php');
?>



<!DOCTYPE html>
<html lang="en">

<head>
   <?php include("includes/head.php") ?>

</head>

<body>


    
    <div id="top-img">

        <div class="container-fluid">

            <div class="col-md-12">

            <div class="imggg">

                <img src="img/background/3.jpg" width="100%" alt="">

            </div>

        </div>

        </div>

    </div>

     <!-- Header -->

     <header>

        <nav class="navbar navbar-fixed-top">

            <div class="container-fluid">

                <div class="site-nav-wrapper">

                    <div class="navbar-header">

                        <!--logo-->

                        <a  class="navbar-brand" href="index.html#home">

                            <img src="img/logo/03.png" alt="logo">

                        </a>

                    </div>

                    <!--Navbar-->

                    <div class="collapse navbar-collapse">

                        <div style="display: flex !important; justify-content: center !important; ">

                            <ul class="nav navbar-nav pull-center">

                                <li><a href="index.php#home">Home</a></li>
                                <li><a href="scholarship.php">Scholarship</a></li>
                                <li><a href="Internship.php">Internship</a></li>
                                <li><a href="Exchange.php" >Exchange Programs</a></li>
                                <li><a href="Conference.php">Conference</a></li>
                                <li><a href="competition.php" >competitions</a></li>
                                <li><a href="aboutUs.php" >About Us</a></li>
                                <li><a href="logIn.php" >LOGIN</a></li>

                            </ul>

                        </div>

                    </div>



                </div>

            </div>

        </nav>

    </header>

    <!-- Header -->


     <!---------About US ---------->


     <section id="about">

        <div id="about-01">

            <div class="content-box-lg">

                <div class="container">

                    <div class="row">

                        <!--left content-->
                        <div class="col-md-6 col-sm-6">

                            <div id="about-left">

                                <div class="vertical-heading">

                                    <h3> Who we are ?</h3>
                                    <h2>A <strong>Story</strong> <br> About Us</h2>

                                </div>

                            </div>

                        </div>

                        <!--Right content-->
                        <div class="col-md-6 col-sm-6 ">

                            <div id="about-right">

                                <h3>
                                    <span>Opportunities Herz </span> is a broad & wide opportunities discovery platform
                                    for youth all around the world. The most effective & active platform to find the
                                    latest educational opportunities for free.
                                </h3>

                                <h3>

                                    <span>Opportunities Herz </span> Provides information about National & International
                                    opportunities consists of Student Exchange Programs, International Conferences,
                                    Undergraduate Scholarships, Masters Scholarships, Ph.D. Scholarships, Fellowships &
                                    Training workshops, as well as Cultural Exchange Programs, Internships, Summer
                                    Internships, Jobs as well as Guidelines & Expertise tips about Scholarships.

                                </h3>

                            </div>

                        </div>

                        <!--2nd row-->

                        <div class="row">

                            <div class="col-md-12">

                                <div id="about-bottom">

                                    <img src="img/About us/01.jpg" alt="About Us" class="img-responsive">

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!----end about 01----->

        <!------------About 02------------>


        <div id="about-02">

            <div class="content-box-md">

                <div class="container">

                    <div class="row">

                        <div class="col-md-4 wow slideInLeft" data-wow-duration="1s">

                            <div class="about-item text-center">

                                <i class="fa fa-rocket"></i>
                                <h3>Mission</h3>
                                <hr>
                                <h4>"Our mission is to create a diverse platform of opportunity for the youth so that
                                    they can easily access to their desirable and suitable opportunity from anywhere in
                                    the world.""</h4>
                            </div>

                        </div>
                        <div class="col-md-4">

                            <div class="about-item text-center">

                                <i class="fa fa-eye"></i>
                                <h3>Vission</h3>
                                <hr>
                                <h4>“The vision of "OH" is to transform the future and making a flow of transparent and
                                    reliable opportunity information among the largest youth group.”</h4>

                            </div>

                        </div>
                        <div class="col-md-4">

                            <div class="about-item text-center">

                                <i class="fa fa-pencil"></i>
                                <h3>Passion</h3>
                                <hr>
                                <h4>"To encourage young people to see their potential hindered by extreme poverty,
                                    discrimination and the lack of information."</h4>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!------------About 02 Ends------------>

    </section>

    <!---------About US Ends ---------->

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

        <a href="#top-img" id="back-to-top" class="btn btn-sm-yellow btn-back-to-top smooth-scroll" title="home" role="button">

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

    <!--------javascript--------->>

    <script src="js/script.js"> </script>
</body>

</html>
