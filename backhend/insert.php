<?php
include 'conn.php';

$data = file_get_contents("php://input");
$mydata = json_decode($data, true);
$id = $mydata['id'];
$language_name = $mydata['language_name'];

if(!empty($language_name)){
    $sql = "INSERT INTO `language`(`category_id`, `name`) VALUES ('$id','$language_name')";
    if(mysqli_query($conn, $sql) == TRUE){
        echo "Language added sucessfully";
    }else{
        echo "Unable to save language";
    }
}else{
        echo "Fill all field";
    }













?>