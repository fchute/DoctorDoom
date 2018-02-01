<?php
$host = "localhost";
$user = "";
$password = "";
$database = "";



$connection = mysqli_connect($host, $user, $password, $database);

  if(!$connection){
    die("database connection failed");
  }


 ?>
