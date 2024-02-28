<?php
include 'conn.php';

$data = file_get_contents("php://input");
$mydata = json_decode($data, true);
$id = $mydata['sid'];

if(!empty($id)){
    $sql = "DELETE FROM `category` WHERE id = {$id}";
    if(mysqli_query($conn, $sql) == TRUE){
        echo "Language deleted sucessfully";
    }else{
        echo "Unable to delete language";
    }
}





?>