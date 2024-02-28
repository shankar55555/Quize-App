<?php
include 'conn.php';
// pop up for registration.......................
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
                window.location.href='../frontend.php';              
                </script>";
            } else {
                echo "<script> alert('error'); </script>";
            }
        }
    } else {
        echo "<script>
      alert('Some error');
      window.location.href='login.php';        
      </script>";
    }
}
