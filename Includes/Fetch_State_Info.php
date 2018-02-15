<?php

// Getting state from list table
$username =  $_SESSION['username'];


$query = "SELECT state FROM list WHERE username = '$username'";


$state_get = mysqli_query($connection, $query);


if (!$state_get) {
  # code...
die("Query FAILED fetch state" . mysqli_error($connection)) ;
}


$state = mysqli_fetch_array($state_get);

$state=$state['state'];
// Getting state from list table



$query = "SELECT id, username, first_name, last_name, address, state, phone, type FROM $state";




$result = mysqli_query($connection, $query);

// if ($state = "New_Hampshire"){
//   $state = "New Hampshire";
// }
// elseif ($state = "New_York") {
//     $state = "New York";
// }
// elseif ($state = "New_Mexico") {
//     $state = "New Mexico";
// }
// elseif ($state = "West_Virginia") {
//     $state = "West Virginia";
// }
// elseif ($state = "South_Dakota") {
//     $state = "South Dakota";
// }
// elseif ($state = "North_Dakota") {
//   $state = "North Dakota";
// }
// elseif ($state = "North_Carolina") {
//   $state = "North Carolina";
// }
// elseif ($state = "South_Carolina") {
//   $state = "South Carolina";
// }
// elseif ($state= "New_Jersey") {
//   $state = "New Jersey";
// }
// elseif ($state= "Rhode_Island") {
//   $state = "Rhode Island";
// };


if (!$result) {
  # code...
die("Query FAILED fetch state" . mysqli_error($connection)) ;
}


 ?>
