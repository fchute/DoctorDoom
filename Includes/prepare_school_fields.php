<?php

$schoolname =$_POST['schoolname'];
$schoolname = mysqli_real_escape_string($connection, $schoolname);

$address =$_POST['address'];
$address = mysqli_real_escape_string($connection, $address);

$state =$_POST['state'];
$state = mysqli_real_escape_string($connection, $state);

$phone = $_POST['phone'];
$phone = mysqli_real_escape_string($connection, $phone);


 ?>
