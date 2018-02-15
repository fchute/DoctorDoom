<?php


if (isset($_POST['submit'])) {


  $secret_answer =$_POST['secret_answer'];
  $secret_answer = mysqli_real_escape_string($connection, $secret_answer);

  $hashFormat= "$2y$10$";
  $salt = "twentytwoletterstrings";

  $hashF_and_salt = $hashFormat . $salt;

  $secret_answer = crypt($secret_answer, $hashF_and_salt);


  $query = "SELECT * FROM list WHERE email = '$email' AND secret_answer = '$secret_answer'";



  $result = mysqli_query($connection, $query);

    if (!$result) {
      # code...
    die("Query FAILED secret answer" . mysqli_error()) ;
    }
    else {
      $rows = mysqli_num_rows($result);

      if ($rows==1) {
        # code...
        $_SESSION['secret_answer'] = $secret_answer;
        header("Location: update_password.php");

      }
      else{
        echo "answer doesn't match";

      }


    }








}

 ?>
