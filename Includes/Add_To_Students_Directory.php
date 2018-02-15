


<?php


      $query = "SELECT id FROM schools WHERE schoolname='$schoolname'";
      $schoolid_get = mysqli_query($connection, $query);


      if (!$schoolid_get) {
        # code...
      die("Query FAILED get secret question" . mysqli_error($connection)) ;
      }


      $schoolid = mysqli_fetch_array($schoolid_get);

      $schoolid=$schoolid['id'];

      if (!$schoolid) {
die("School Not Found");
      }
 ?>


<?php

      $query = "SHOW TABLES IN ".$database." WHERE Tables_in_".$database." = 'students'";

      $result = mysqli_query($connection, $query);
      if (!$result) {
        # code...
      die("Query FAILED adding to teachers directory" . mysqli_error($connection)) ;
    }
      $rows = mysqli_num_rows($result);


      $type="student";
      $creatorid=$_SESSION['id'];


      $query = "SELECT username FROM list WHERE id='$creatorid'";
      $user_get = mysqli_query($connection, $query);


      if (!$user_get) {
        # code...
      die("Query FAILED get secret question" . mysqli_error($connection)) ;
      }


      $creatorusername = mysqli_fetch_array($user_get);

      $creatorusername=$creatorusername['username'];






                  if ($rows) {

    $query = "INSERT INTO students(username,password, email, schoolid, schoolname, secret_question,secret_answer,first_name,last_name,address,state,phone,type,creatorid,creatorusername) ";
    $query .= "VALUE ('$username', '$password', '$email','$schoolid','$schoolname', '$secret_question', '$secret_answer','$first_name', '$last_name', '$address', '$state', '$phone','$type','$creatorid', '$creatorusername')";


    $result = mysqli_query($connection, $query);

    if (!$result) {
      # code...
    die("Query FAILED" . mysqli_error($connection)) ;
  }

    }

    // to create table automatically with php

    // else {
    //   $query= ( "CREATE TABLE list ( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, username VARCHAR(30) UNIQUE NOT NULL, password VARCHAR(200) NOT NULL, name VARCHAR(30) NOT NULL, address VARCHAR(30) NOT NULL, state VARCHAR(30) NOT NULL, phone VARCHAR(30) NOT NULL, stateid VARCHAR(30) )");
    //
    //   $result = mysqli_query($connection, $query);
    //
    //   if (!$result) {
    //     # code...
    //   die("Query gFAILED   here" . mysqli_error($connection)) ;
    //   }
    //   else {
    //
    //         $query = "INSERT INTO list(username,password,name,address,state,phone) ";
    //         $query .= "VALUE ('$username', '$password', '$name', '$address', '$state', '$phone')";
    //
    //
    //         $result = mysqli_query($connection, $query);
    //
    //         if (!$result) {
    //           # code...
    //         die("Query FadAILED" . mysqli_error($connection)) ;
    //       }
    //
    //   }
    // }


 ?>
