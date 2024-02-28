<?php
include 'conn.php';
session_start();

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

// function sendMail($email, $v_code)
// {
//   require("PHPMailer/PHPMailer.php");
//   require("PHPMailer/SMTP.php");
//   require("PHPMailer/Exception.php");

//   $mail = new PHPMailer(true);
//   try {
//     $mail->isSMTP();                                            //Send using SMTP
//     $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
//     $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
//     $mail->Username   = 'surya77verma@gmail.com';                     //SMTP username
//     $mail->Password   = '$ry@12345';                               //SMTP password
//     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
//     $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

//     //Recipients
//     $mail->setFrom('surya77verma@gmail.com', 'surya');
//     $mail->addAddress($email);     //Add a recipient
//     var_dump($email);
//     //Content
//     $mail->isHTML(true);                                  //Set email format to HTML
//     $mail->Subject = 'Here is the subject Email verification';
//     $mail->Body    = "This is the HTML message body <b>in bold!</b>
//     Here is the link <a href='http://localhost/php_projects/quize_app/user_pannel/verify.php?email=$email&v_code'verify</a>";


//     $mail->send();
//     return true;
//   } catch (Exception $e) {
//     echo "sdnsndmndmdnsmdnsmdnsmdnsmdnsmnds";
//     // return false;
//   }
// }
//  && sendMail($_POST['email'], $v_code)



// for login...............................
if (isset($_POST['login'])) {
  $query = "SELECT * FROM `registered_user` WHERE `username` = '$_POST[username]' ";
  $result = mysqli_query($conn, $query);

  if ($result) {
    if (mysqli_num_rows($result) == 1) {
      $result_fetch = mysqli_fetch_assoc($result);
      if (password_verify($_POST['password'], $result_fetch['password'])) {
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $result_fetch['username'];
        header('location:user.php');
      } else {
        echo "<script>
        alert('Incorrest password');
        window.location.href='login.php';        
        </script>";
      }
    }
  } else {
    echo "<script>
  alert('Username or password are not registred');
  window.location.href='login.php';        
  </script>";
  }
}

// for registration.......................
if (isset($_POST['submit'])) {
  $user_exist_query = "SELECT * FROM `registered_user` WHERE `username` = '$_POST[username]' OR `email` = '$_POST[email]' ";
  $result = mysqli_query($conn, $user_exist_query);

  if ($result) {
    if (mysqli_num_rows($result) > 0) {
      // to check that username and email has been already taken or not..............
      $result_fetch = mysqli_fetch_assoc($result);
      if ($result_fetch['username'] == $_POST['username']) {
        // error for username when username is exist in database.............
        echo "<script>
                alert('$result_fetch[username] - username is already taken');
                window.location.href='login.php';        
                </script>";
      } else {
        // error for e-mail when e-mail is exist in database.............
        echo "<script>
                alert('$result_fetch[email] - e-mail is already taken');
                window.location.href='login.php';        
                </script>";
      }
    } else {
      $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
      $v_code = bin2hex(random_bytes(16));
      $sql = "INSERT INTO `registered_user`(`username`, `email`, `password`, `verification_code`, `is_verified`) VALUES ('$_POST[username]','$_POST[email]','$password','$v_code', '0')";
      if (mysqli_query($conn, $sql)) {
        session_start();
        $_SESSION['username'] = $_POST['username'];

        echo "<script>
    alert('Registartion sucessfuly');
    window.location.href='user.php';              
    </script>";
      } else {
        echo "<script>
        echo 'error';
    
            </script>";
      }
    }
  } else {
    echo "<script>
      alert('Some error');
      window.location.href='login.php';        
      </script>";
  }
}
