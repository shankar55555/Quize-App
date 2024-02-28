<?php
require('conn.php');
session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="Template Mo" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet" />

    <title>User Pannel</title>
    <link rel="stylesheet" type="text/css" href="../user_pannel/assets/css/font-awesome.css"/>
    <link rel="stylesheet" type="text/css" href="../user_pannel/assets/css/templatemo-art-factory.css" />
    <link rel="stylesheet" type="text/css" href="../user_pannel/assets/css/owl-carousel.css" />
    <link rel="stylesheet" type="text/css" href="../user_pannel/assets/css/bootstrap.min.css"/>

</head>

<body>
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <?php include 'header.php';?>

    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome" style="background-color: rgb(111, 196, 232)">
        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container" id="first_page_heading">
                <div class="row">
                    <div class="left-text col-lg-6 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <h1 class="mt-5">Coding Knowledge place <strong>for YOU</strong></h1>
                        <p>
                            Its a place where you can increase your knowledge. And apply in
                            the real world, so you can achive anything that you want.
                        </p>
                        <a href="#about" class="main-button-slider">Find Out More</a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                        <img src="../user_pannel/assets/images_for_landing/slider-icon.png" class="rounded img-fluid d-block mx-auto" alt="First Vector Graphic" />
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>

    <!-- ***** Ist About Area Start ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="../user_pannel/assets/images_for_landing/left-image.png" class="rounded img-fluid d-block mx-auto" alt="App" />
                </div>
                <div class="right-text col-lg-5 col-md-12 col-sm-12 mobile-top-fix">
                    <div class="left-heading">
                        <h5>More than 20 plus Languages are available.</h5>
                    </div>
                    <div class="left-text">
                        <p>
                            This thing is <a href="#">last updated on 20 August 2019 </a>for
                            main menu drop-down arrow and sub menu text color. Duis auctor
                            dolor eu scelerisque vestibulum. Vestibulum lacinia, nisl sit
                            amet tristique condimentum. <br /><br />
                            Sed a consequat velit. Morbi lectus sapien, vestibulum et sapien
                            sit amet, ultrices malesuada odio. Donec non quam euismod,
                            mattis dui a, ultrices nisi.
                        </p>
                        <a href="#about2" class="main-button">Discover More</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="hr"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** 2nd About Area Start ***** -->
    <section class="section" id="about2">
        <div class="container">
            <div class="row">
                <div class="left-text col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix">
                    <div class="left-heading">
                        <h5>Curabitur aliquam eget tellus id porta</h5>
                    </div>
                    <p>
                        Proin justo sapien, posuere suscipit tortor in, fermentum mattis
                        elit. Aenean in feugiat purus.
                    </p>
                    <ul>
                        <li>
                            <img src="../user_pannel/assets/images_for_landing/about-icon-01.png" alt="" />
                            <div class="text">
                                <h6>Nulla ultricies risus quis risus</h6>
                                <p>
                                    You can use this website template for commercial or
                                    non-commercial purposes.
                                </p>
                            </div>
                        </li>
                        <li>
                            <img src="../user_pannel/assets/images_for_landing/about-icon-02.png" alt="" />
                            <div class="text">
                                <h6>Donec consequat commodo purus</h6>
                                <p>
                                    You have no right to re-distribute this template as a
                                    downloadable ZIP file on any website.
                                </p>
                            </div>
                        </li>
                        <li>
                            <img src="../user_pannel/assets/images_for_landing/about-icon-03.png" alt="" />
                            <div class="text">
                                <h6>Sed placerat sollicitudin mauris</h6>
                                <p>
                                    If you have any question or comment, please
                                    <a rel="nofollow" href="https://templatemo.com/contact">contact</a>
                                    us on TemplateMo.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="right-image col-lg-7 col-md-12 col-sm-12 mobile-bottom-fix-big" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <img src="../user_pannel/assets/images_for_landing/right-image.png" class="rounded img-fluid d-block mx-auto" alt="App" />
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Category ***** -->
    <section class="section" id="Category">
        <div class="container-fluid">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Choose any Category to learn about that.</h2>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- <div class="owl-carousel owl-theme"> -->
                <!-- <div class="d-flex"> -->
                <div class=" col-3 item cat-item mx-5">
                    <div class="icon">
                        <i><img src="../user_pannel/assets/images_for_landing/coding_2.png" alt="" width="300px"/></i>
                    </div>
                    <h5 class="cat-title" id="service-title_language-1">Frontend</h5>
                    <p class="mb-4">
                        Aenean vulputate massa sed neque consectetur, ac fringilla quam
                        aliquet. Sed a enim nec eros tempor cursus at id libero.
                    </p>
                    <a href="frontend.php" class="main-button">Read More</a>
                </div>

                <div class="col-3 item cat-item mx-5">
                    <div class="icon">
                        <i><img src="../user_pannel/assets/images_for_landing/coding_2.png" alt="" width="300px"/></i>
                    </div>
                    <h5 class="cat-title" id="service-title_language-2">Backhend</h5>
                    <p class="mb-4">
                        Pellentesque vitae urna ut nisi viverra tristique quis at dolor.
                        In non sodales dolor, id egestas quam. Aliquam erat volutpat.
                    </p>
                    <a href="#" class="main-button">Read More</a>
                </div>

                <div class="col-3 item cat-item mx-5">
                    <div class="icon">
                        <i><img src="../user_pannel/assets/images_for_landing/coding_2.png" alt="" width="300px"/></i>
                    </div>
                    <h5 class="cat-title" id="service-title_language-3">Graphic desging</h5>
                    <p class="mb-4">
                        Pellentesque vitae urna ut nisi viverra tristique quis at dolor.
                        In non sodales dolor, id egestas quam. Aliquam erat volutpat.
                    </p>
                    <a href="#" class="main-button">Read More</a>
                </div>

                <div class="col-3 item cat-item mx-5 my-4">
                    <div class="icon">
                        <i><img src="../user_pannel/assets/images_for_landing/coding_2.png" alt="" width="300px"/></i>
                    </div>
                    <h5 class="cat-title" id="service-title_language-4">Full stack development</h5>
                    <p class="mb-4">
                        Pellentesque vitae urna ut nisi viverra tristique quis at dolor.
                        In non sodales dolor, id egestas quam. Aliquam erat volutpat.
                    </p>
                    <a href="#" class="main-button">Discover More</a>
                </div>

                <!-- </div> -->
                <!-- </div> -->
            </div>
        </div>
    </section>

    <!-- ***** services ***** -->
    <section class="section" id="services">
        <div class="container">
            <div class="row">
                <div class="owl-carousel owl-theme">
                    <div class="item service-item">
                        <div class="icon">
                            <i><img src="../user_pannel/assets/images_for_landing/service-icon-01.png" alt="" /></i>
                        </div>
                        <h5 class="service-title">First Box Service</h5>
                        <p>
                            Aenean vulputate massa sed neque consectetur, ac fringilla quam
                            aliquet. Sed a enim nec eros tempor cursus at id libero.
                        </p>
                        <a href="#" class="main-button">Read More</a>
                    </div>
                    <div class="item service-item">
                        <div class="icon">
                            <i><img src="../user_pannel/assets/images_for_landing/service-icon-02.png" alt="" /></i>
                        </div>
                        <h5 class="service-title">Second Box Title</h5>
                        <p>
                            Pellentesque vitae urna ut nisi viverra tristique quis at dolor.
                            In non sodales dolor, id egestas quam. Aliquam erat volutpat.
                        </p>
                        <a href="#" class="main-button">Discover More</a>
                    </div>
                    <div class="item service-item">
                        <div class="icon">
                            <i><img src="../user_pannel/assets/images_for_landing/service-icon-03.png" alt="" /></i>
                        </div>
                        <h5 class="service-title">Third Title Box</h5>
                        <p>
                            Quisque finibus libero augue, in ultrices quam dictum id.
                            Aliquam quis tellus sit amet urna tincidunt bibendum.
                        </p>
                        <a href="#" class="main-button">More Detail</a>
                    </div>
                    <div class="item service-item">
                        <div class="icon">
                            <i><img src="../user_pannel/assets/images_for_landing/service-icon-02.png" alt="" /></i>
                        </div>
                        <h5 class="service-title">Fourth Service Box</h5>
                        <p>
                            Fusce sollicitudin feugiat risus, tempus faucibus arcu blandit
                            nec. Duis auctor dolor eu scelerisque vestibulum.
                        </p>
                        <a href="#" class="main-button">Read More</a>
                    </div>
                    <div class="item service-item">
                        <div class="icon">
                            <i><img src="../user_pannel/assets/images_for_landing/service-icon-01.png" alt="" /></i>
                        </div>
                        <h5 class="service-title">Fifth Service Title</h5>
                        <p>
                            Curabitur aliquam eget tellus id porta. Proin justo sapien,
                            posuere suscipit tortor in, fermentum mattis elit.
                        </p>
                        <a href="#" class="main-button">Discover</a>
                    </div>
                    <div class="item service-item">
                        <div class="icon">
                            <i><img src="../user_pannel/assets/images_for_landing/service-icon-03.png" alt="" /></i>
                        </div>
                        <h5 class="service-title">Sixth Box Title</h5>
                        <p>
                            Ut nibh velit, aliquam vitae pellentesque nec, convallis vitae
                            lacus. Aliquam porttitor urna ut pellentesque.
                        </p>
                        <a href="#" class="main-button">Detail</a>
                    </div>
                    <div class="item service-item">
                        <div class="icon">
                            <i><img src="../user_pannel/assets/images_for_landing/service-icon-01.png" alt="" /></i>
                        </div>
                        <h5 class="service-title">Seventh Title Box</h5>
                        <p>
                            Sed a consequat velit. Morbi lectus sapien, vestibulum et sapien
                            sit amet, ultrices malesuada odio. Donec non quam.
                        </p>
                        <a href="#" class="main-button">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Contact Us Start ***** -->
    <section class="section" id="contact-us">
        <div class="container-fluid">
            <div class="row">
                <!-- ***** Contact Map Start ***** -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div id="map">
                        <!-- How to change your own map point
                           1. Go to Google Maps
                           2. Click on your location point
                           3. Click "Share" and choose "Embed map" tab
                           4. Copy only URL and paste it within the src="" field below
                    -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1197183.8373802372!2d-1.9415093691103689!3d6.781986417238027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdb96f349e85efd%3A0xb8d1e0b88af1f0f5!2sKumasi+Central+Market!5e0!3m2!1sen!2sth!4v1532967884907" width="100%" height="500px" frameborder="0" style="border: 0" allowfullscreen></iframe>
                    </div>
                </div>
                <!-- ***** Contact Map End ***** -->

                <!-- ***** Contact Form Start ***** -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="contact-form">
                        <form id="contact" action="" method="post">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" id="name" placeholder="Full Name" required="" class="contact-field" />
                                    </fieldset>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="text" id="email" placeholder="E-mail" required="" class="contact-field" />
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" id="message" placeholder="Your Message" required="" class="contact-field"></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="main-button">
                                            Send It
                                        </button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- ***** Contact Form End ***** -->
            </div>
        </div>
    </section>

    <!-- ***** Footer Start ***** -->
    <?php include 'footer.php';?>



    <!-- jQuery -->
    <script src="../user_pannel/assets/landing js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="../user_pannel/assets/landing js/popper.js"></script>
    <script src="../user_pannel/assets/landing js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="../user_pannel/assets/landing js/owl-carousel.js"></script>
    <script src="../user_pannel/assets/landing js/scrollreveal.min.js"></script>
    <script src="../user_pannel/assets/landing js/waypoints.min.js"></script>
    <script src="../user_pannel/assets/landing js/jquery.counterup.min.js"></script>
    <script src="../user_pannel/assets/landing js/imgfix.min.js"></script>

    <!-- Global Init -->
    <script src="../user_pannel/assets/landing js/custom.js"></script>
</body>

</html>