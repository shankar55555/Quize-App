<?php
include 'conn.php';

$data = file_get_contents("php://input");
$mydata = json_decode($data, true);

$id = $mydata['hid'];
$question = $mydata['quest'];
$input_a = $mydata['option_1'];
$input_b = $mydata['option_2'];
$input_c = $mydata['option_3'];
$input_d = $mydata['option_4'];
$ans = $mydata['answer'];
$catid = $mydata['catid'];

$options = ["$input_a", "$input_b", "$input_c", "$input_d"];
if (!empty($question) && !empty($input_a) && !empty($input_b) && !empty($input_c) && !empty($input_d) && !empty($ans)) {
    // if (!in_array($ans, $options)) {
    //     echo "Error: Your answer does not match any of the options.";
    // }
    if($input_a == $input_b || $input_a == $input_c || $input_a == $input_d &&
    $input_b == $input_c || $input_b == $input_d &&
    $input_c == $input_d){
        echo "Error: All the input field has to be different.";
    }
    else {
        $sql = "INSERT INTO `questions`(`id`, `language_id`, `questions`, `first_option`, `second_option`, `third_option`, `fourth_option`, `answer`) VALUES ('$id', '$catid', '$question', '$input_a','$input_b', '$input_c', '$input_d', '$ans') ON DUPLICATE KEY UPDATE questions ='$question' , first_option ='$input_a' , second_option ='$input_b', third_option ='$input_c', fourth_option ='$input_d', answer = '$ans'";
        if (mysqli_query($conn, $sql) == TRUE) {
            echo "Question added sucessfully";
        }
    }
} else {
    echo "Fill all field";
}
?>