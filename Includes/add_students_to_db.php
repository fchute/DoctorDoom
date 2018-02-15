<?php


    $query = "INSERT INTO students(schoolid,schoolname,creatorusername,creatorid,first_name,last_name) ";
    $query .= "VALUE ('$schoolid','$schoolname','$username', '$creatorid','$first_name','$last_name')";


    $result = mysqli_query($connection, $query);

    if (!$result) {
      # code...
    die("Query FAILED inserting into students" . mysqli_error($connection)) ;
  }




 ?>
