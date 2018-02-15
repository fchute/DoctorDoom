<?php include './Includes/DB_Config.php'; ?>





<?php

    if(isset($_POST['submit']))
    {


      $test =$_POST['test'];
      $test= mysqli_real_escape_string($connection, $test);




      $query = "SELECT test FROM test WHERE test='$test'";
      $test_query = mysqli_query($connection, $query);


      if (!$test_query) {
        # code...
      die("Query FAILED get test" . mysqli_error($connection)) ;
      }

      $numrows = mysqli_num_rows($test_query);

      if ($numrows!=0)
{
//while loop
  while ($row = mysqli_fetch_assoc($test_query))
  {
    $test_output = $row['test'];

    echo $test_output;

  }}

  else{


    header("Location:test.php");
    echo "test not found";
  }

}

 ?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>test</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

  </head>
  <body>
<div class="container">
  <div class="row">


  <h2>test</h2>






    </div>
</div>

    <div class="container">
      <div class="col-sm-6">
          <form action="" method="post">


            <label for="username">test</label>
            <div class="form-group">
              <input type="text" name="test" class="form-control">
            </div>


      <input type="submit" name="submit" value="Submit" class="btn btn-primary">

          </form>


      </div>
    </div>

  </body>
</html>
