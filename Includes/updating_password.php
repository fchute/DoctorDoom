<?php

if (isset($_POST['submit']))
{
  $password =$_POST['password'];
  $password = mysqli_real_escape_string($connection, $password);
  $hashFormat= "$2y$10$";
  $salt = "iusesomecrazystrings22";
  $hashF_and_salt = $hashFormat . $salt;
  $password = crypt($password, $hashF_and_salt);


  $query = "UPDATE list SET password = '$password' WHERE secret_answer = '$secret_answer' AND email = '$email'";
  $result = mysqli_query($connection, $query);

    if (!$result) {
      # code...
    die("Query FAILED updating password" . mysqli_error()) ;
    }
    else {
        header("Location: login.php");
    }
}
 ?>
