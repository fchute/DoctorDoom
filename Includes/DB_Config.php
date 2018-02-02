<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "scratch";



$connection = mysqli_connect($host, $user, $password, $database);

  if(!$connection){
    die("database connection failed");
  }


 ?>
