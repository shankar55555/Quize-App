<?php
session_start();
// $user = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frontend languages</title>

    <link rel="stylesheet" type="text/css" href="../user_pannel/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../user_pannel/assets/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="../user_pannel/assets/css/templatemo-art-factory.css" />
    <link rel="stylesheet" type="text/css" href="../user_pannel/assets/css/owl-carousel.css" />

</head>

<body>
    <!-- ******************************************** pre loder  ******************************************* -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ******************************************** Header activity  ******************************************* -->
    <?php include 'header.php';?>
    


    <!-- ******************************************** Welcome page  ******************************************* -->
    <div class="welcome-area" id="welcome" style="background-color: rgb(111, 196, 232); border: 2px solid black;">
        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container-fluid" id="first_page_heading">
                <div class="row" style="position: relative; top: 50px;">
                    <div class="col-6" style="padding-left: 50px;">
                        <h1 class="" style="margin-top: 70px;">Frontend languages</h1>
                        <p>Front-end web development is the development of the graphical user interface of a website,
                            through the use of HTML, CSS, and JavaScript, so that users can view and interact with that
                            website.</p>
                        <a type="button" class="btn btn-outline-light bg-danger" href="#about">Read more</a>
                    </div>

                    <div class="col-6 d-flex justify-content-center">
                        <img src="../user_pannel/assets/images_for_landing/front-removebg.png" width="80%" height="90%">
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>


    <!-- ******************************************** About page  ******************************************* -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="../user_pannel/assets/images_for_landing/left-image.png" class="rounded img-fluid d-block mx-auto" alt="App" />
                </div>
                <div class="right-text col-lg-5 col-md-12 col-sm-12 mobile-top-fix">
                    <div class="left-heading">
                        <h5>Front End Development</h5>
                    </div>
                    <div class="left-text">
                        <p>
                            It is also referred to as the <a href="https://en.wikipedia.org/wiki/Client-side">client side </a>of the application. It includes everything that users experience directly: text colors and styles, images, graphs and tables, buttons, colors, and a navigation menu. HTML, CSS, and JavaScript are the languages used for Front End development.
                            Put simply, the front end is a combination of two different elements: the graphic design (the look) and the user interface (the feel). Each of these is created independently, with most of the technical work going into the user interface using web languages like HTML, CSS, and JavaScript.
                        </p>
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


    <!-- ******************************************** frontend language  ******************************************* -->
    <div class="" id="next_page" style="background-color: rgb(111, 196, 232); border: 2px solid black; padding-bottom: 50px;">

        <div class="row d-flex justify-content-center">
            <h2 class="text-light my-5 text-center">Choose any languages that you can revised by taking our test</h2>
        </div>
        <div class="container">
            <div class="row" id="category">
                <!-- using retrive_lan_user.php -->
            </div>
        </div>

    </div>


    <!-- ******************************************** Contact us  ******************************************* -->
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


    <!-- ******************************************** footer  ******************************************* -->
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
    <!-- <script>
            $("#view_cat").click(function() {
                console.log("ASDAsdasdad");
                window.location.href = "showquestion.php";
            });
        </script> -->
</body>

</html>