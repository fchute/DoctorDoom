<?php


$query = "SELECT id,username,first_name,last_name,address,state,phone,stateid FROM list";



$result = mysqli_query($connection, $query);

if (!$result) {
  # code...
die("Query FAILED collecting info" . mysqli_error()) ;
}




 ?>
