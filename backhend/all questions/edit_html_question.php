<?php
include 'conn.php';

$data = file_get_contents("php://input");
$mydata = json_decode($data, true);
$id = $mydata['question_id'];



$sql = "SELECT * FROM `questions` WHERE id = {$id}";
    $result = mysqli_query($conn, $sql);
    // if (mysqli_num_rows($result) > 0) {     
        // $data = array();
    $row = mysqli_fetch_assoc($result);
        //  $data[] = $row;
echo json_encode($row);



?>