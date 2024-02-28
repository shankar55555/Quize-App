<?php
include 'conn.php';


$email = $mydata['em'];
$password = $mydata['pass'];


if(!empty($email) && !empty($password)){

$sql = "SELECT * FROM users WHERE email ='$email' ";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) { 
  while($row = mysqli_fetch_assoc($result)) {
    $_SESSION['username'] = $row['name'];
    echo "Login completed sucessfully";

  }
}else{  
  echo"Invalid username or Password!";
}
}else{
  echo "Fill all field";
}
?>