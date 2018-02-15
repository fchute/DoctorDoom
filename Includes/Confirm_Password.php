<?php
if(isset($_POST['submit']))
  {
    $password =  $_POST['password'];
    $password = mysqli_real_escape_string($connection,$password);
    $hashFormat= "$2y$10$";
    $salt = "iusesomecrazystrings22";
    $hashF_and_salt = $hashFormat . $salt;
    $password = crypt($password, $hashF_and_salt);


    $query = "SELECT * FROM list WHERE username = '$username' AND password = '$password'";



    $result = mysqli_query($connection, $query);
    $rows = mysqli_num_rows($result);

    if (!$result) {
      # code...
    die("Query FAILED confirm password" . mysqli_error()) ;
    }

    elseif ($rows==1) {
      # code...
      $token="reset allowed";
      $_SESSION['token'] = $token;
      header("Location: update_secret_question.php");

    }
    else{
      echo "Login info is incorrect";
    }

  }
 ?>
