<?php
include 'conn.php';

$sql = 'SELECT * FROM category';
$result = mysqli_query($conn, $sql);
// $q_id = $_GET['language_id'] ?? '';


$cat_data = '';
if (mysqli_num_rows($result) > 0) { 
  while($row = mysqli_fetch_assoc($result)) {
    $cat_name = $row['name'];
    // var_dump($cat_name);die();
// echo $cat_data;
    $cat_data .= '
    <div class="col-md-6 col-lg-4 col-xlg-3 border" style="cursor: pointer;">
    <div class="card card-hover ">
        <div class="box bg-success text-center d-flex flex-column justify-content-center align-items-center hoverclass" style="height: 200px">
            <h1 class="font-light text-white"><img src="../../images/coding.png" width="60px">
            <div class="hoverclass_2"><button type="button" class="btn btn-outline-dark mx-3 mt-2" id="view_category" data-sid ="' . $row['id'] .'">View</button>
            <button type="button" class="btn btn-outline-dark mt-2" id="delete_category" data-sid ="' . $row['id'] .'">Delete</button></h1>
            <h5 class="text-white">' . $row['name'] . '</h5>
        </div>
    </div>
    </div>  
    ';

  }
}
  echo $cat_data;





?>
