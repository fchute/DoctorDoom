
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <title>Teacher Profile</title>

    <style>
    table {
      margin: 0px auto;

    }

    th, td {
        padding: 8px;
        text-align: left;
        white-space: nowrap;

    }
    </style>

  </head>
  <body>
    <div class="container">

<div class="row">
  <div class="col-sm-12">



 <h3>Welcome, <?php echo $_SESSION['username']; ?>!</h3>
<div style="width:200%;     text-align: center;">

<div class="" style="   float:left; display:inline;">

  <a href="logout.php" class="btn btn-primary btn-md active" role="button" style="margin:10px;">Logout</a>
</div>
<!-- <div class="" style="   float:left; display:inline;">

    <a href="Complete_Directory.php" class="btn btn-primary btn-md active" role="button" style="margin:10px;">Complete User Directory</a>
  </div>

    <div class="" style="   float:left; display:inline;">

      <a href="State_Directory.php" class="btn btn-primary btn-md active" role="button" style="margin:10px;">State User Directory</a>
    </div> -->

    <div class="" style="   float:left; display:inline;">

      <a href="reenter_password.php" class="btn btn-primary btn-md active" role="button" style="margin:10px;">Update Secret Question</a>
    </div>


    <div class="" style="   float:left; display:inline;">

      <a href="Search_School.php" class="btn btn-primary btn-md active" role="button" style="margin:10px;">Search School</a>
    </div>

    <!-- <div class="" style="   float:left; display:inline;">

      <a href="School_List.php" class="btn btn-primary btn-md active" role="button" style="margin:10px;">All Schools</a>
    </div> -->

    <div class="" style="   float:left; display:inline;">

      <a href="create_student.php" class="btn btn-primary btn-md active" role="button" style="margin:10px;">Create Student</a>
    </div>

    <!-- <div class="" style="   float:left; display:inline;">

      <a href="Create_Teacher.php" class="btn btn-primary btn-md active" role="button" style="margin:10px;">Create Teacher</a>
    </div> -->

</div>


</div>

  <div class="col-sm-12">
<h3>Your Profile Information</h3>
    <table class="">
    <tr>




      <th>Teacher ID</th><th>State ID</th> <th>Username</th> <th>email</th>
      <th>First Name</th><th>Last Name</th>
      <th>Address</th><th>State</th><th>Phone</th>

    </tr>

<?php
// while ($row= mysqli_fetch_row($result)) {
//   # code...
//   print_r($row);
// }
while ($row= mysqli_fetch_assoc($result)) {
 # code...



 echo "<tr>";
 echo "<td>" . $row['id'] . "</td>";
 echo "<td>" . $row['stateid'] . "</td>";
 echo "<td>" . $username . "</td>";
 echo "<td>" . $row['email'] . "</td>";
 echo "<td>" . $row['first_name'] . "</td>";
 echo "<td>" . $row['last_name'] . "</td>";
 echo "<td>" . $row['address'] . "</td>";
 echo "<td>" . $state_spaced . "</td>";
 echo "<td>" . $row['phone'] . "</td>";
 echo "</tr>";
 // print_r($row);


}


?>
</table>



  </div>


  <div class="col-sm-12">
<h3>Your Schools</h3>
    <table class="">
    <tr>




      <th>School ID</th><th>School Name</th><th>Address</th> <th>State</th> <th>Phone</th>  <th>Creator's Unique ID</th><th>Creator's State ID</th>
    </tr>

<?php
// while ($row= mysqli_fetch_row($result)) {
//   # code...
//   print_r($row);
// }
while ($row= mysqli_fetch_assoc($school_result)) {
 # code...




 echo "<tr>";

 echo "<td>" . $row['id'] . "</td>";
 echo "<td>" . $row['schoolname'] . "</td>";
 echo "<td>" . $row['address'] . "</td>";
 echo "<td>" . $row['state'] . "</td>";
 echo "<td>" . $row['phone'] . "</td>";
 echo "<td>" . $get_creatorid . "</td>";
 echo "<td>" . $row['creatorstateid'] . "</td>";
 echo "</tr>";
 // print_r($row);


}


?>
</table>



  </div>


</div>

      </div>

  </body>
</html>
