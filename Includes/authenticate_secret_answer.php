<?php
session_start();
if(!isset($_SESSION["secret_answer"])){
header("Location: login.php");
exit(); }
?>
