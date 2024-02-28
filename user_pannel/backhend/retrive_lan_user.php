<?php
include 'conn.php';

$sql = 'SELECT * FROM language WHERE category_id = 1';
$result = mysqli_query($conn, $sql);

$cat_data = '';
if (mysqli_num_rows($result) > 0) { 
  while($row = mysqli_fetch_assoc($result)) {
    $cat_data .= '
    <div class="col-md-6 col-lg-4 col-xlg-3" style="cursor: pointer;">
    <div class="card card-hover my-3" style="border: 2px solid white;">
    <div class="box bg-primary text-center d-flex flex-column justify-content-center align-items-center" style="height: 250px;">
    <h1 class="font-light text-white"><img src="../user_pannel/assets/images_for_landing/coding.png" width="60px">
            <div class="my-4"><button type="button" class="btn btn-outline-light" id="click_view" data-sid ="' . $row['id'] .'">View</button>
            </div></h1>
            <h5 class="text-white">' . $row['name'] . '</h5>
        </div>
    </div>
    </div>  
    ';

  }
}
  echo $cat_data;

