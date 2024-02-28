<?php
include 'conn.php';

// getting user id  
$mydata = $_POST;
session_start();
$user = $_SESSION['username'];
$lan_id = $mydata['lan_id'] ?? '';

// getting user id...............
$user_id_sql = "SELECT id FROM registered_user WHERE username = '$user' ";
$result_user = mysqli_query($conn, $user_id_sql);

if ($result_user) {
  $row = mysqli_fetch_assoc($result_user);
  $user_id = $row["id"];
  var_dump($user_id);
} else {
  die("Error fetching user id: " . mysqli_error($conn));
}


// start a for each loop.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $userResponses = json_decode($_POST['userResponses'], true);

  foreach ($userResponses as $response) {
    $questionNumber = $response[0];
    $userAnswer = $response[1];

    //  1. Retrieve the correct answer and questions
    $sql_correct_answer = "SELECT `questions`, `answer` FROM `questions` WHERE id = '$questionNumber' ";

    $result_correct_answer = $conn->query($sql_correct_answer);

    if ($result_correct_answer->num_rows > 0) {
      $row_correct_answer = $result_correct_answer->fetch_assoc();
      $correctAnswer = $row_correct_answer["answer"];
      $question = $row_correct_answer["questions"];
    } else {
      $correctAnswer = "N/A";
    }

    //  2. Insert user response into database
// $exist_query = "SELECT user_id FROM `quiz_result_data` WHERE user_id = '$user_id' ";

// $result = mysqli_query($conn, $exist_query);

// if (mysqli_num_rows($result) > 0) {

  // $sql = "INSERT INTO quiz_result_data (user_id, language_id, question_id, question, user_ans, correct_ans, attempts, last_attempt_time) 
  //         VALUES ('$user_id', '$lan_id', '$questionNumber', '$question', '$userAnswer', '$correctAnswer', 1, NOW())
  //         ON DUPLICATE KEY UPDATE 
  //         attempts = attempts + 1, last_attempt_time = NOW()";
  
// } else {

  $sql = "INSERT INTO quiz_result_data (user_id, language_id, question_id, question, user_ans, correct_ans, attemp, last_attempt_time) 
          VALUES ('$user_id', '$lan_id', '$questionNumber', '$question', '$userAnswer', '$correctAnswer',1, NOW())";
          if ($conn->query($sql) === TRUE) {
            $response['status'] = 'success';
          } else {
            $response['status'] = 'error';
            $response['message'] = $conn->error;
          }
// }



  }
}

echo json_encode($response);



// $exist_query = "SELECT user_id FROM `quiz_result_data` WHERE user_id = '$user_id' AND question = '$question' ";

// $result = mysqli_query($conn, $exist_query);

// if ($result && mysqli_num_rows($result) > 0) {
//   // User exists, perform update
//   $sql = "UPDATE `quiz_result_data` SET `user_id`='$user_id',`language_id`='$lan_id',`question_id`='$questionNumber',`question`='$question',`user_ans`='$userAnswer',`correct_ans`='$correctAnswer',`attemp` = attemp + 1,`last_attempt_time`= NOW() WHERE user_id = '$user_id' AND question = '$question' " ;
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