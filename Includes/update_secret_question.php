<?php   $secret_question =$_POST['secret_question'];
  $secret_question = mysqli_real_escape_string($connection, $secret_question);

  $secret_answer =$_POST['secret_answer'];
  $secret_answer = mysqli_real_escape_string($connection, $secret_answer);
  $hashFormat= "$2y$10$";
  $salt = "twentytwoletterstrings";
  $hashF_and_salt = $hashFormat . $salt;
  $secret_answer = crypt($secret_answer, $hashF_and_salt);

  $query = "UPDATE list SET secret_question = '$secret_question' , secret_answer = '$secret_answer' WHERE username = '$username'";
  $result = mysqli_query($connection, $query);

    if (!$result) {
      # code...
    die("Query FAILED update secret question" . mysqli_error()) ;
    }
    else {
        header("Location: login.php");
    } ?>
