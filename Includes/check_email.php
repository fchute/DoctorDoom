<?php

if (isset($_POST['submit']))
{


  $email =$_POST['email'];
  $email = mysqli_real_escape_string($connection, $email);




  $query = "SELECT * FROM list WHERE email = '$email'";



  $result = mysqli_query($connection, $query);
  $rows = mysqli_num_rows($result);

  if (!$result) {
    # code...
  die("Query FAILED check email" . mysqli_error()) ;
  }

  elseif ($rows==1) {
    # code...
    $_SESSION['email'] = $email;
    header("Location: reset_password.php");
  }
  else{
    echo "email not found";
  }



  }


 ?>
