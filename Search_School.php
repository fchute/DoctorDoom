<?php include './Includes/DB_Config.php'; ?>
<?php include './Includes/authenticate.php'; ?>




<?php

    if(isset($_POST['submit']))
    {


      $search_school =$_POST['search_school'];
      $search_school= mysqli_real_escape_string($connection, $search_school);




      $query = "SELECT schoolname FROM schools WHERE schoolname='$search_school'";
      $search_school_query = mysqli_query($connection, $query);


      if (!$search_school_query) {
        # code...
      die("Query FAILED get search_school" . mysqli_error($connection)) ;
      }

      $numrows = mysqli_num_rows($search_school_query);

      if ($numrows!=0)
{
//while loop
  while ($row = mysqli_fetch_assoc($search_school_query))
  {
    $search_school_output = $row['schoolname'];

    echo $search_school_output;
    echo " Found!";

  }}

  else{

    echo "search_school not found";
  }

}

 ?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>search_school</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

  </head>
  <body>
<div class="container">
  <div class="row">

    <div class="" style="   float:left; display:inline;">

    <a href="User_Page.php?id=<?php echo $_SESSION['id'] ?>" class="btn btn-primary btn-md active" role="button" style="margin:10px;"><?php echo $_SESSION['username']; ?></a>
    </div>

    <br>

  <h2>search_school</h2>






    </div>
</div>

    <div class="container">
      <div class="col-sm-6">
          <form action="" method="post">


            <label for="username">search_school</label>
            <div class="form-group">
              <input type="text" name="search_school" class="form-control">
            </div>


      <input type="submit" name="submit" value="Submit" class="btn btn-primary">

          </form>


      </div>
    </div>

  </body>
</html>
