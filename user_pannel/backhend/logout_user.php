<?php
include 'conn.php';
session_start();

unset($SESSION['username']);

session_destroy();
// var_dump($_SESSION);die;
// echo ($_SESSION['username'] = /"");
// header('Location: user.php'); 
return true;
?>