<?php
session_start();
$user = $_SESSION['username'];

include 'conn.php';

$user_id_sql = "SELECT id FROM registered_user WHERE username = '$user' ";
$result_user = mysqli_query($conn, $user_id_sql);

if ($result_user) {
  $row = mysqli_fetch_assoc($result_user);
  $user_id = $row["id"];
} else {
  echo("no data");
}

$sql = "SELECT * FROM user_data WHERE user_id = $user_id";

$result_user = mysqli_query($conn, $sql);

$html = '';
if (mysqli_num_rows($result_user) > 0) {
    while($row = mysqli_fetch_assoc($result_user)) {
        // $result_fetch = mysqli_fetch_assoc($result);
        $quiz_name = $row['quiz'];
        $attemp = $row['attemp'];
        $result = $row['result'];
        $Score = $row['score'];

    
        $html.=' <tr>
        <td style="width:22%;">'.$quiz_name.'</td>
        <td style="width:28%;">'.$attemp.'</td>
        <td style="width:25%;">'.$result.'</td>
        <td style="width:100%;">'.$Score.'</td>
    </tr>';
    
    }
    echo  $html;
} else {
  echo("Error fetching user id: ");
}





?>