<?php


      $query = "SHOW TABLES IN ".$database." WHERE Tables_in_".$database." = 'list'";

      $result = mysqli_query($connection, $query);
      if (!$result) {
        # code...
      die("Query FAILED adding to primary show tables" . mysqli_error($connection)) ;
    }
      $rows = mysqli_num_rows($result);


      $type="admin";

                  if ($rows) {

    $query = "INSERT INTO list(username,password,email, secret_question,secret_answer,first_name,last_name,address,state,phone,type) ";
    $query .= "VALUE ('$username', '$password', '$email', '$secret_question', '$secret_answer','$first_name', '$last_name', '$address', '$state', '$phone', '$type')";


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
