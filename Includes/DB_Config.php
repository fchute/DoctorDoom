<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "transfer";



$connection = mysqli_connect($host, $user, $password, $database);

  if(!$connection){
    die("database connection failed");
  }


 ?>
