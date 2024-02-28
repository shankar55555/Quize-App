
<?php
include 'conn.php';
$mydata =$_GET;
session_start();
$user = $_SESSION['username'] ?? "";
$lan_id = $mydata['lan_id'] ?? '';

$user_id_sql = "SELECT id FROM registered_user WHERE username = '$user'";
$result_user = mysqli_query($conn, $user_id_sql);

if ($result_user) {
    $row = mysqli_fetch_assoc($result_user);
    $user_id = $row["id"];
    // var_dump($user_id);
} else {
    die("Error fetching user id: " . mysqli_error($conn));
}

$query = "SELECT * FROM quiz_result_data WHERE user_id = '$user_id' AND language_id = '$lan_id' ";
$result = mysqli_query($conn, $query);
$html='';
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
    // $result_fetch = mysqli_fetch_assoc($result);
    $questions = $row['question'];
    // var_dump($questions);
    $user_ans = $row['user_ans'];
    // var_dump($user_ans);
    $correct_ans = $row['correct_ans'];
    // var_dump($correct_ans);

    $html.=' <tr>
    <th style="width: 600px;">'.$questions.'</th>
    <th style="width: 200px;">'.$user_ans.'</th>
    <th style="width: 200px;">'.$correct_ans.'</th>
</tr>';

}
echo  $html;

}



?>
