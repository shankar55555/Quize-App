<?php
include 'conn.php';

$data = file_get_contents("php://input");
$mydata = json_decode($data, true);

$id = $mydata['selectedOptionid'];
// echo $id; 

$sql = "SELECT * FROM questions where language_id = '$id' ";
$html = '';
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { 
  $sno=0;
  while($row = mysqli_fetch_assoc($result)) {
    $sno++;
    $html .= '
    <div class="border border-dark pt-5 px-4">
    <div class="d-flex">
      <h2>'.$sno.".".'</h2>
      <h2>'.$row['questions'].'</h2>
    </div>
    <ol>
      <li>'.$row['first_option'].'</li>
      <li>'.$row['second_option'].'</li>
      <li>'.$row['third_option'].'</li>
      <li>'.$row['fourth_option'].'</li>
    </ol>
    <div class="d-flex justify-content-between">
      <div class="d-flex">
        <h2>Answer:</h2>
        <h2 class="mx-3">'.$row['answer'].'</h2>
      </div>
      <div class="">
        <button type="button" class="btn btn-outline-dark display-8 mx-2 px-3"
          id="del-btn" data-sid ="' . $row['id'] .'">Delete</button>
        <button type="button" class="btn btn-outline-dark display-8 mx-4 px-4"
          id="edi-btn" data-sid ="' . $row['id'] .'">Edit</button>
      </div>
    </div>
  </div> 
    ';

  }
}else{
  echo "<div>Sorry we will not find any questions, to get the question you to selecct the language in option bar</div>";
}
  echo $html;
  
?>