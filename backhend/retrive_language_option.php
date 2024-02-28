<?php
include 'conn.php';

$sql = 'SELECT * FROM language';
$result = mysqli_query($conn, $sql);
$q_id = $_GET['language_id'] ?? '';

$cat_data = '';
$cat_data .= "<option value=''>Please Selected option</option> ";

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $selected = '';
    if(!empty($q_id) && $q_id == $row['id']){
      $selected = "selected";
    }
    $cat_data .= '
        <option '.$selected.' id="' . $row['id'] . '" value="' . $row['name'] . '">' . $row['name'] . '</option>
        ';
  }
}
echo $cat_data;





?>
