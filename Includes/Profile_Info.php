<?php $username = $_SESSION['username'];
$query = "SELECT id, stateid, email, secret_question, first_name, last_name, address,  phone FROM list WHERE username = '$username'";




$result = mysqli_query($connection, $query);

if (!$result) {
  # code...
die("Query FAILED profile info" . mysqli_error($connection)) ;
}
?>
