<?php
session_start();
$user = $_SESSION['username'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="../user_pannel/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../user_pannel/assets/css/profile.css">
</head>

<body>
    <div id="container-fluid">
        <div id="imgdiv">
            <img src="../user_pannel/assets/images_for_landing/background_2.jpg" width="100%">
        </div>
        <div id="buttons">
            <button class="btn" id="accomplishment">Accomplishment</button>
            <button class="btn" id="">Notification</button>
            <button class="btn" id="">About</button>
        </div>
        <div class="row">
            <div id="user_profile" class="col-3">
                <div id="profile_image">
                    <img src="../user_pannel/assets/images_for_landing/profile.png" width="50%">
                </div>
                <h2 id="user_name">Hy
                    <?php
                    echo $user
                    ?></h2>
                <p class="details">
                    dlkjlsdkjlskjdlks Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, et officiis voluptatibus sequi reiciendis commodi nisi non assumenda unde veniam nihil cupiditate deleniti eos! Placeat odit nulla vitae laudantium a.
                    Voluptatem debitis veniam quia beatae molestiae? Ad eveniet praesentium porro dolorum nesciunt facere reprehenderit inventore deleniti ratione nihil voluptatem, consectetur eligendi quo quia, similique aspernatur magnam! Consequatur autem ducimus explicabo?</p>
            </div>
            <div class="col" id="an_div">
                <table class="table">
                    <tr>
                        <th>Quiz</th>
                        <th>Attemp</th>
                        <th>result</th>
                        <th>Score</th>
                    </tr>
                </table>
                <table id = "table_2">



                </table>
            </div>
        </div>
    </div>







    <!-- jQuery -->
    <script src="../user_pannel/assets/landing js/jquery-2.1.0.min.js"></script>
    <!-- Global Init -->
    <script src="../user_pannel/assets/landing js/profile.js"></script>
</body>

</html>