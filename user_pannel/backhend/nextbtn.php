<?php
include 'conn.php';

$data = file_get_contents("php://input");
$mydata = json_decode($data, true);

$id = $mydata['lan_id'];
// var_dump($id);die;


// $sql = "SELECT * FROM questions FROM language_id = '$id' WHERE RAND()  LIMIT 1";
$sql = "SELECT * FROM questions WHERE language_id = '$id' ORDER BY RAND() LIMIT 1";

$html = '';
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { 
  $sno = 1;
  while($row = mysqli_fetch_assoc($result)) {
    $sno++;
    $html .= '
    <div class="mx-5">
    <div class="d-flex">
      <h2 class="text-light">'.$sno.".".'</h2>
      <h2 class="text-light">'.$row['questions'].'</h2>
    </div>
    <ol style="margin: 20px -26px;">
      <li><input type = "radio" name="option"><lable class="text-light"> '.$row['first_option'].'</lable></li>
      <li><input type = "radio" name="option"><lable class="text-light"> '.$row['second_option'].'</lable></li>
      <li><input type = "radio" name="option"><lable class="text-light"> '.$row['third_option'].'</lable></li>
      <li><input type = "radio" name="option"><lable class="text-light"> '.$row['fourth_option'].'</lable></li>
    </ol>
    <div class="d-flex justify-content-center mt-4"><button type="button" class="btn btn-outline-light" id="next">Next</button></div>
  </div> 
    ';

  }
}else{
  echo "<div>Sorry we will not find any questions, to get the question you to selecct the language in option bar</div>";
}
  echo $html;



?>
