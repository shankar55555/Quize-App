<?php
include 'conn.php';
session_start();
$user = $_SESSION['username'] ?? "";
// var_dump($user);

$sql = "SELECT * FROM `registered_user` WHERE `username` = '$user' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      $id = $row["id"];
    }
}


$mydata = $_POST;
$option = $mydata['lable'];
var_dump($option);
$ques = $mydata['ques'];
var_dump($ques);
$corr = $mydata['correct'];
var_dump($corr);
$attemp_qize = $mydata['attemp'];
var_dump($option);

if (!empty($user)) {
        $sql = "INSERT INTO `user_data`(`user_id`, `question`, `user_ans`, `correctans`, `attemp`) VALUES ('$id','$ques','$option','$corr','$attemp_qize')";
        if (mysqli_query($conn, $sql) == TRUE) {
            echo "Saved";
        }
} else {
    echo "error";
}
?>