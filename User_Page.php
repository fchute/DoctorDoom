<?php
include './Includes/authenticate.php';


if ($_SESSION["id"] != $_GET["id"]) {
  header("Location: login.php");
} else{
  $get_creatorid=$_GET["id"];
  $username = $_SESSION['username'];
}
 ?>

<?php include './Includes/DB_Config.php'; ?>

<?php include './Includes/Fetch_State_Info.php';
$state_spaced= str_replace('_', ' ', $state);
//state info taken separately to replace the string, this will be optimized out
 ?>




<?php include './Includes/Profile_Info.php'; ?>





<?php

$query = "SELECT id, schoolname, address, state, phone, creatorstateid FROM schools WHERE creatorid = '$get_creatorid'";




$school_result = mysqli_query($connection, $query);

if (!$school_result) {
  # code...
die("Query FAILED getting school result" . mysqli_error($connection)) ;
}
?>




<?php
$username = $_SESSION['username'];
$query = "SELECT id, username, state, stateid, email, first_name, last_name, address,  phone FROM teachers WHERE creatorid = '$get_creatorid'";




$teacher_result = mysqli_query($connection, $query);

if (!$teacher_result) {
  # code...
die("Query FAILED profile info" . mysqli_error($connection)) ;
}
?>



<?php
$username = $_SESSION['username'];
$query = "SELECT id, username, state, stateid, email, first_name, last_name, address,  phone, schoolid, schoolname FROM students WHERE creatorid = '$get_creatorid'";




$student_result = mysqli_query($connection, $query);

if (!$student_result) {
  # code...
die("Query FAILED profile info" . mysqli_error($connection)) ;
}
?>






<?php

$query = "SELECT type FROM list WHERE id = '$get_creatorid'";

$type_get = mysqli_query($connection, $query);


if (!$type_get) {
  # code...
die("Query FAILED get secret question" . mysqli_error($connection)) ;
}


$type = mysqli_fetch_array($type_get);

$type=$type['type'];

$_SESSION['type']= $type;


if ($type="admin") {


   include './Includes/Admin_User.php';


}

elseif ($type="teacher") {

     include './Includes/Teacher_User.php';

}

elseif ($type="student") {

  include './Includes/Student_User.php';

}


?>
