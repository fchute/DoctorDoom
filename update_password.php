
<?php

include './Includes/authenticate_secret_answer.php';

include './Includes/DB_Config.php';


$email =  $_SESSION['email'];

$secret_answer =  $_SESSION['secret_answer'];

include './Includes/updating_password.php';

 ?>





<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Reset Password</title>
  </head>
  <body>
<div class="container">

<div class="row">

<div class="col-sm-12">

  <h3>Password Update<br></h3>

  <form action="" method="post">

<label for="password">Enter your new password</label>
<div class="form-group">
  <input type="password" name="password" value="" class="form-control">
</div>
<input type="submit" name="submit" value="Submit" class="btn btn-primary">

</form>

</div>


</div>



</div>



  </body>
</html>
