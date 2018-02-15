<?php
$username = $_SESSION['username'];
$query = "SELECT secret_question FROM list WHERE username = '$username'";

$result = mysqli_query($connection, $query);

if (!$result) {
  # code...
die("Query FAILED question via" . mysqli_error($connection)) ;
}

$current_question= mysqli_fetch_array($result);

$current_question=$current_question['secret_question']; ?>
