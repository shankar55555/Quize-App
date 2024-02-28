


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login & Sign up</title>
    <link href="../user_pannel/assets/css/custum_login.css" rel="stylesheet" />
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="login_register_data.php" method="POST" id="myForm">
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="https://www.facebook.com/" target="_blank" class="social"><img
                            src="../user_pannel/assets/images_for_landing/facebook.png" width="30px" alt=""></a>
                        <a href="https://www.google.co.in/" target="_blank" class="social"><img
                                src="../user_pannel/assets/images_for_landing/search.png" width="30px" alt=""></a>
                            <a href="https://www.instagram.com/" target="_blank" class="social"><img
                                    src="../user_pannel/assets/images_for_landing/instagram.png" width="30px" alt=""></a>
                </div>
                <span>or use your email for registration</span>
                <input type="text" placeholder="Username" id="sign-up-name" name="username"/>
                <input type="email" placeholder="Email" id="sign-up-email" name="email"/>
                <input type="password" placeholder="Password" id="sign-up-passward" name="password" />
                <button id="sign-up-r" type="submit" name="submit">Sign Up</button><span class="text-success display-5" id="signup-msg-done"></span><span id="erro"></span>
            </form>
        </div>

        <!------------------------ code for sign in form ------------------------------------->
        <div class="form-container sign-in-container">
            <form method = "POST" action="login_register_data.php">
                <h1>Sign in</h1>
                <div class="social-container">
                    <a href="https://www.facebook.com/" target="_blank" class="social"><img
                            src="../user_pannel/assets/images_for_landing/facebook.png" width="30px" alt=""></a>
                        <a href="https://www.google.co.in/" target="_blank" class="social"><img
                                src="../user_pannel/assets/images_for_landing/search.png" width="30px" alt=""></a>
                            <a href="https://www.instagram.com/" target="_blank" class="social"><img
                                    src="../user_pannel/assets/images_for_landing/instagram.png" width="30px" alt=""></a>
                </div>
                <span>or use your account</span>
                <input type="text" placeholder="Username" id="username" name="username" />
                <input type="password" placeholder="Password" id="sign-in-password" name="password" />
                <a href="#">Forgot your password?</a>
                <button type="submit" id="sign-in" name="login">Sign In</button><span style="color: green" id="signin-msg"></span><span id="signin-err" style="color: red;"></span>
            </form>
        </div>



        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">    
                    <h1>Welcome Back!</h1>
                    <p>
                        To keep connected with us please login with your personal info
                    </p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
<script>
  const signUpButton = document.getElementById("signUp");
  const signInButton = document.getElementById("signIn");
  const container = document.getElementById("container");
  
      signUpButton.addEventListener("click", () => {
      container.classList.add("right-panel-active");
  });
  
  signInButton.addEventListener("click", () => {
      container.classList.remove("right-panel-active");
  });
  </script>


        <!-- jQuery -->
        <script src="../user_pannel/assets/landing js/jquery-2.1.0.min.js"></script>

        <!-- Bootstrap -->
        <script src="../user_pannel/assets/landing js/popper.js"></script>
        <script src="../user_pannel/assets/landing js/bootstrap.min.js"></script>
    
        <!-- Plugins -->
        <script src="../user_pannel/assets/landing js/owl-carousel.js"></script>
        <script src="../user_pannel/assets/landing js/scrollreveal.min.js"></script>

        <!-- Global Init -->
        <script src="../user_pannel/assets/landing js/custom.js"></script>
</body>

</html>