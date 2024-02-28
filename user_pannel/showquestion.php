<?php
include 'conn.php';

session_start();
$lan = $_GET['data'] ?? '';
$sql = "SELECT * FROM language WHERE id = '$lan' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>questions</title>
    <link rel="stylesheet" type="text/css" href="../user_pannel/assets/css/bootstrap.min.css" />
    <link href="../user_pannel/assets/css/show_question.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="../user_pannel/assets/css/custom_login_css" /> -->
</head>


<body>
    <!--------------------------------- pop up for login and sign up -------------------------------------------------->
    <div class="popup-container" id="popup">
        <div class="popup">
            <div id="head_2">
                <p class="message">Message</p>
                <button id="cut">X</button>
            </div>
            <p class="text">Its seems that you are not login with us so if you want to see your quiz result then you have to login or sign up with us but if you don't want to see you result then you can close this message and start experience the quiz. </p>
            <div id="two_btn"><button class="btn" id="login_pop">Login</button><button class="btn" id="sign_pop">Sign up</button></div>
        </div>
    </div>

    <!--------------------------------- pop up for login -------------------------------------------------->
    <div class="popup-container" id="popup_login">
        <div class="popup">
            <div class="head_pop">
                <p class="message">Login</p>
            </div>
            <div">
                <form method="POST" action="login_register_data.php">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" class="form-control" id="username_for_login" placeholder="Username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button type="submit" id="sign-in" name="login" class="btn btn-primary">Submit</button>
                </form>
        </div>
    </div>
    </div>

    <!--------------------------------- pop up for signup -------------------------------------------------->
    <div class="popup-container" id="popup_signup">
        <div class="popup">
            <div id="head_pop">
                <p class="message">sign_up</p>
            </div>
            <div>
                <form method="POST" action="backhend/popup_signup.php">
                <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" class="form-control" id="username_for_signup" placeholder="Username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    <button id="sign-up_btn_poup" type="submit" name="submit" class="btn btn-primary">Sign Up</button>
                </form>
            </div>
        </div>
    </div>


    <div class="" id="container_fluid">

        <h1 id="head">
            <?php echo $row['name'] . " " . "quiz" ?>
        </h1>
        <h3 id="heading_text">
            The test contains 10 questions and has a time limit so be quick.
        </h3>
        <div id="start">
            <button type="button" class="btn btn-outline-light mb-5" id="start_btn">Start test</button>
        </div>

        <div class="" id="quiz">
            <div id="time" class="">10</div>
            <div class="d-flex">
                <div id="first_line" style="display: flex; margin-left: 30px;">
                    <h2 id="number" class="text-light"></h2>
                    <h2 id="Question" class="text-light"></h2>
                </div>

            </div>

            <div>
                <div class="input-box border border-dark bg-light mx-4 my-2">
                    <input type="radio" name="option" value="a" class="in">
                    <label id="one" for="a" class="option text-dark"></label>
                </div>

                <div class="input-box border border-dark bg-light mx-4 my-2">
                    <input type="radio" name="option" value="b" class="in">
                    <label id="two" for="b" class="option text-dark"></label>
                </div>

                <div class="input-box border border-dark bg-light mx-4 my-2">
                    <input type="radio" name="option" value="c" class="in">
                    <label id="three" for="c" class="option text-dark"></label>
                </div>

                <div class="input-box border border-dark bg-light mx-4 my-2">
                    <input type="radio" name="option" value="d" class="in">
                    <label id="four" for="d" class="option text-dark"></label>
                </div>
            </div>

            <div id="btn">
                <button type="button" class="btn btn-outline-light" id="previous_btn" style=" font-family: 'Roboto Slab', serif;">previous</button>
                <button type="button" class="btn btn-outline-light" id="next_btn">Next</button>
            </div>


            <input type="number" value="" id="input" class="d-none">

        </div>






















    </div>
    <!-- jQuery -->
    <script src="../user_pannel/assets/landing js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <!-- <script src="../user_pannel/assets/landing js/popper.js"></script> -->
    <!-- <script src="../user_pannel/assets/landing js/bootstrap.min.js"></script> -->

    <!-- Plugins -->
    <script src="../user_pannel/assets/landing js/owl-carousel.js"></script>
    <script src="../user_pannel/assets/landing js/scrollreveal.min.js"></script>

    <!-- Global Init -->
    <script src="../user_pannel/assets/landing js/custom.js"></script>
</body>

</html>



