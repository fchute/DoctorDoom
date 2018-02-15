<?php


include './Includes/authenticate_email.php';

include './Includes/DB_Config.php';


$email= $_SESSION['email'];

include './Includes/get_secret_question.php';

include './Includes/check_secret_answer.php';


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

  <h3>To reset the password for <?php echo $_SESSION['email']; ?>'s account please answer the following question<br></h3>

<?php echo $secret_question ?>

<form action="" method="post">


<label for="secret_answer">Provide the answer to your question</label>
<div class="form-group">
  <input type="password" name="secret_answer" value="" class="form-control">
</div>

<input type="submit" name="submit" value="Submit" class="btn btn-primary">

</form>

</div>


</div>



</div>



  </body>
</html>
