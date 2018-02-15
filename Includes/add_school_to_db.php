<?php

  $type="school";
    $query = "INSERT INTO schools(schoolname,address,state,phone,creatorid,creatorstateid, type) ";
    $query .= "VALUE ('$schoolname', '$address', '$state', '$phone','$creatorid','$creatorstateid', '$type')";


    $result = mysqli_query($connection, $query);

    if (!$result) {
      # code...
    die("Query FAILED inserting into schools" . mysqli_error($connection)) ;
  }




 ?>
