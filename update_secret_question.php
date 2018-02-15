
<?php include './Includes/authenticate.php'; ?>

<?php include './Includes/DB_Config.php'; ?>

<?php
if(!isset($_SESSION["token"])){
header("Location: login.php");
exit(); }
?>

<?php include './Includes/get_question_via_username.php'; ?>

<?php

if (isset($_POST['submit']))
{

include './Includes/update_secret_question.php';

}
 ?>


 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Update Secret Question</title>
   </head>

<div class="container">
  <div class="row">
    <div class="col-sm-12">

<h2>Update Secret Question</h2>
<p>Your current secret question is <?php echo $current_question; ?></p>

<form action="" method="post">


  <label for="secret_question">New Secret Question</label>
  <div class="form-group">
    <input type="text" name="secret_question" class="form-control">
  </div>

  <label for="password">Answer</label>
  <div class="form-group">
    <input type="password" name="secret_answer" value="" class="form-control">
  </div>
<input type="submit" name="submit" value="Submit" class="btn btn-primary">

</form>

    </div>
  </div>
</div>

   <body>

   </body>
 </html>
