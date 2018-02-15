<?php

$query = "SELECT secret_question FROM list WHERE email = '$email'";

$secret_question_get = mysqli_query($connection, $query);


if (!$secret_question_get) {
  # code...
die("Query FAILED get secret question" . mysqli_error($connection)) ;
}


$secret_question = mysqli_fetch_array($secret_question_get);

$secret_question=$secret_question['secret_question'];

?>
