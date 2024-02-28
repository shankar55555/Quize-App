<?php
include 'conn.php';

$data = file_get_contents("php://input");
$mydata = json_decode($data, true);
$id = $mydata['id'];

if(!empty($id)){
    $sql = "SELECT * FROM category WHERE id = '$id' ";
    $html ="";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) { 
        while ($row = mysqli_fetch_assoc($result)) {
        $html = $row['name'];
        }
    }
}
echo $html;
