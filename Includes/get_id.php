<?php
$query = "SELECT id FROM list WHERE username = '$username'";

$id_get = mysqli_query($connection, $query);


if (!$id_get) {
  # code...
die("Query FAILED get secret question" . mysqli_error($connection)) ;
}


$id = mysqli_fetch_array($id_get);

$id=$id['id'];



 ?>
