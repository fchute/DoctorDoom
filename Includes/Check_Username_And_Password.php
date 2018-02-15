<?php



$query = "SELECT * FROM list WHERE username = '$username' AND password = '$password'";



$result = mysqli_query($connection, $query);
$rows = mysqli_num_rows($result);

if (!$result) {
  # code...
die("Query FAILED check username" . mysqli_error()) ;
}

elseif ($rows==1) {
  # code...
  $_SESSION['username'] = $username;

include './Includes/get_id.php';

  $_SESSION['id'] = $id;


  header("Location: User_Page.php?id=".$id);

}
else{
  echo "Login info is incorrect";
}


 ?>
