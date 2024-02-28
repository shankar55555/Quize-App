<?php
include 'conn.php';

$data = file_get_contents("php://input");
$mydata = json_decode($data, true);

$name = $mydata['nm'];
$email = $mydata['em'];
$password = $mydata['pass'];


if (!empty($name) && !empty($email) && !empty($password)) {
    if(mysqli_num_rows($result)>0){
        $result_fetch = mysqli_fetch_assoc($result);
        if($result_fetch['username']== $name){
            echo "username already taken";
        }

        $sql = "INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";
        if (mysqli_query($conn, $sql) == TRUE) {
            echo "Thanks for login with us.";
        }
    }
    
} else {
    echo "Fill all field";
}
?>