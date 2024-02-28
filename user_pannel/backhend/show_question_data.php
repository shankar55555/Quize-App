<?php
include 'conn.php';

$mydata =$_POST;

$id = $mydata['lan_id'] ?? '';
$put = $mydata['put'] ?? ''; 
$previous = $mydata['pre'] ?? '';


if(!empty($put)){
    $sql = "SELECT * FROM questions WHERE language_id = '$id' and  id > '$put' ";

}
else if(!empty($previous)){
    $sql = "SELECT * FROM questions WHERE language_id = '$id' AND id < '$previous' ORDER BY id DESC";
}
else if(empty($put) && empty($previous)){  
    $sql = "SELECT * FROM questions WHERE language_id = '$id' ORDER BY id ASC LIMIT 1";
}
$result = $conn->query($sql);
if (!$result) {
    die("Error: " . mysqli_error($conn));
}
$row = $result->fetch_assoc();
$data = array();
// $data['data'] = $row;
// $data['put'] = $put;
// $data['previous'] = $previous;
// $data['result'] = (!empty($previous));
// $data['id'] = $mydata['lan_id'];
$data[] = $row;
// $data['id'] = $id;





echo json_encode($data);

?>
