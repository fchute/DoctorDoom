<?php

$username =$_POST['username'];
$username = mysqli_real_escape_string($connection, $username);

$password =$_POST['password'];
$password = mysqli_real_escape_string($connection,$password);

$hashFormat= "$2y$10$";

$salt = "iusesomecrazystrings22";

$hashF_and_salt = $hashFormat . $salt;

$password = crypt($password, $hashF_and_salt);


$email =$_POST['email'];
$email = mysqli_real_escape_string($connection, $email);

$schoolname =$_POST['schoolname'];
$schoolname = mysqli_real_escape_string($connection, $schoolname);



$secret_question =$_POST['secret_question'];
$secret_question = mysqli_real_escape_string($connection, $secret_question);

$secret_answer =$_POST['secret_answer'];
$secret_answer = mysqli_real_escape_string($connection, $secret_answer);


$hashFormat= "$2y$10$";

$salt = "twentytwoletterstrings";

$hashF_and_salt = $hashFormat . $salt;

$secret_answer = crypt($secret_answer, $hashF_and_salt);



$first_name =$_POST['first_name'];
$first_name = mysqli_real_escape_string($connection, $first_name);

$last_name =$_POST['last_name'];
$last_name = mysqli_real_escape_string($connection, $last_name);

$address =$_POST['address'];
$address = mysqli_real_escape_string($connection, $address);

$state =$_POST['state'];
$state = mysqli_real_escape_string($connection, $state);

$phone = $_POST['phone'];
$phone = mysqli_real_escape_string($connection, $phone);

 ?>
