

<?php include './Includes/authenticate.php'; ?>

<?php include './Includes/DB_Config.php'; ?>





<?php


$username = $_SESSION['username'];

include './Includes/Confirm_Password.php';
 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <title>Profile</title>

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



 <h3> <?php echo $_SESSION['username']; ?>, Please Re Enter your password to update your secret question</h3>
<div style="width:200%;     text-align: center;">

  <div class="" style="   float:left; display:inline;">

      <a href="User_Page.php?id=<?php echo $_SESSION['id'] ?>" class="btn btn-primary btn-md active" role="button" style="margin:10px;">User Page</a>
  </div>

<div class="" style="   float:left; display:inline;">

  <a href="logout.php" class="btn btn-primary btn-md active" role="button" style="margin:10px;">Logout</a>
</div>
<div class="" style="   float:left; display:inline;">

    <a href="Complete_Directory.php" class="btn btn-primary btn-md active" role="button" style="margin:10px;">Complete User Directory</a>
  </div>

    <div class="" style="   float:left; display:inline;">

      <a href="State_Directory.php" class="btn btn-primary btn-md active" role="button" style="margin:10px;">State User Directory</a>
    </div>

    <div class="" style="   float:left; display:inline;">

      <a href="update_secret_question.php" class="btn btn-primary btn-md active" role="button" style="margin:10px;">Update Secret Question</a>
    </div>

</div>


</div>

  <div class="col-sm-12">

    <form action="" method="post">


      <label for="password">Password</label>
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
