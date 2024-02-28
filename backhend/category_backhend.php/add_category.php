<?php
include 'conn.php';

$data = file_get_contents("php://input");
$technology = json_decode($data, true);
$category = $technology['category'];

if(!empty($category)){
    $sql = "INSERT INTO `category`(`name`) VALUES ('$category') ";
    if(mysqli_query($conn, $sql) == TRUE){
        echo "Language added sucessfully";
    }else{
        echo "Unable to save language";
    }
}else{
        echo "Fill all field";
    }













?>