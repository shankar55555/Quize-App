<?php
include 'conn.php';
session_start();
$user = $_SESSION['username'];

$mydata = $_POST;
$lan_id = $mydata['lan_id'];

$correctCount = 0;
$wrongCount = 0;
$emptyCount = 0;
$result = "";
$name = "";
$attemp_data = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $userResponses = json_decode($_POST['userResponses'], true);

  foreach ($userResponses as $response) {
    $questionNumber = $response[0];
    $userAnswer = $response[1];

    //  1. Retrieve the correct answer from another table (replace 'correct_answers' with the actual table name)
    $sql_correct_answer = "SELECT `questions`, `answer` FROM `questions` WHERE id = '$questionNumber' ";

    $result_correct_answer = $conn->query($sql_correct_answer);

    if ($result_correct_answer->num_rows > 0) {
      $row_correct_answer = $result_correct_answer->fetch_assoc();
      $correctAnswer = $row_correct_answer["answer"];
      $question = $row_correct_answer["questions"];
    } else {
      $correctAnswer = "N/A";
    }

    //  2. checking that how many question are right and how many question are wrong......
    if ($userAnswer == $correctAnswer) {
      $correctCount++;
    } elseif ($userAnswer == '') {
      $emptyCount++;
    } else {
      $wrongCount++;
    }
  }
  $response['correctCount'] = $correctCount;
  $score = $correctCount.'/5';
  if ($correctCount > 3) {
    $result = "Pass";
  } else {
    $result = "Fail";
  }

  $response['wrongCount'] = $wrongCount;

  $response['emptyCount'] = $emptyCount;

}
// 3. getting user id.......
$user_id_sql = "SELECT id FROM registered_user WHERE username = '$user' ";
$result_user = mysqli_query($conn, $user_id_sql);

if ($result_user) {
  $row = mysqli_fetch_assoc($result_user);
  $user_id = $row["id"];
} else {
  echo("no data");
}
  //  4. getting quize name.......
  $get_lan_id = "SELECT `name` FROM `language` WHERE id = '$lan_id' ";
  $lan_name = mysqli_query($conn, $get_lan_id);

  if ($lan_name) {
    $row = mysqli_fetch_assoc($lan_name);
    $name = $row["name"];
  } else {
    echo("Error fetching quiz name");
  }

    //  5. getting how many attemps user give..............
    $attemp_query = "SELECT `attemp` FROM `quiz_result_data` WHERE language_id = '$lan_id' ";
    $attemp = mysqli_query($conn, $attemp_query);
  
    if ($attemp) {
      $row = mysqli_fetch_assoc($attemp);
      $attemp_data = $row["attemp"];
    } else {
      echo("Error fetching attemp");
    }

//  performing insert or update opretaion of user data.......
// $exist_query = "SELECT id FROM `user_data` WHERE id = '$user_id'";

// $result_user_data = mysqli_query($conn, $exist_query);
// if (mysqli_num_rows($result_user_data) > 0) {
// $sql = "INSERT INTO `user_data`(`user_id`, `quiz`, `attemp`, `result`, `score`) VALUES ('$user_id ','$name','$attemp_data','$result','$correctCount') ON DUPLICATE KEY UPDATE";
// }else{
  $sql = "INSERT INTO `user_data`(`user_id`, `quiz`, `attemp`, `result`, `score`) VALUES ('$user_id ','$name','$attemp_data','$result','$score')";
// }

if ($conn->query($sql) === TRUE) {
  // $response['status'] = 'insert user data sucessfully';
} else {
  // $response['status'] = 'error';
  // $response['message'] = $conn->error;
}
echo json_encode($response);































// $exist_query = "SELECT user_id FROM `quiz_result_data` WHERE user_id = '$user_id' AND question_id = 1";

// $result = mysqli_query($conn, $exist_query);

// if ($result && mysqli_num_rows($result) > 0) {
//   // User exists, perform update
//   $sql = "UPDATE `quiz_result_data` SET `user_id`='$user_id',`language_id`='$lan_id',`question_id`='$questionNumber',`question`='$question',`user_ans`='$userAnswer',`correct_ans`='$correctAnswer',`attemp` = attemp + 1,`last_attempt_time`= NOW()";
// } else {
//   // User does not exist, perform insert
//   $sql = "INSERT INTO quiz_result_data (user_id, language_id, question_id, question, user_ans, correct_ans, attemp, last_attempt_time) 
//           VALUES ('$user_id', '$lan_id', '$questionNumber', '$question', '$userAnswer', '$correctAnswer', 1, NOW())";
// }

// if ($conn->query($sql) === TRUE) {
//   $response['status'] = 'success';
// } else {
//   $response['status'] = 'error';
//   $response['message'] = $conn->error;
// }