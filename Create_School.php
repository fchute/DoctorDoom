<?php include './Includes/authenticate.php';


$username= $_SESSION["username"];
?>

<?php



include './Includes/DB_Config.php';

 ?>

<?php

    if(isset($_POST['submit']))
    {
      include './Includes/prepare_school_fields.php';



      $query = "SELECT id FROM list WHERE username = '$username'";


                        $id_get = mysqli_query($connection, $query);


                        if (!$id_get) {
                          # code...
                        die("Query FAILED: User not found in primary directory" . mysqli_error($connection)) ;
                        }


                        $id = mysqli_fetch_array($id_get);

                        $creatorid=$id['id'];

      $query = "SELECT stateid FROM list WHERE username = '$username'";


                        $stateid_get = mysqli_query($connection, $query);


                        if (!$stateid_get) {
                          # code...
                        die("Query FAILED: User not found in primary directory" . mysqli_error($connection)) ;
                        }


                        $stateid = mysqli_fetch_array($stateid_get);

                        $creatorstateid=$stateid['stateid'];







    include './Includes/add_school_to_db.php';

}
 ?>





<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Create School</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

  </head>
  <body>
<div class="container">
  <div class="row">


  <h2>Create New School</h2>

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

    <a href="User_Page.php?id=<?php echo $_SESSION['id'] ?>" class="btn btn-primary btn-md active" role="button" style="margin:10px;"><?php echo $_SESSION['username']; ?></a>
    </div>


</div>

    <div class="container">
      <div class="col-sm-6">
          <form action="" method="post">


            <label for="username">School Name</label>
            <div class="form-group">
              <input type="text" name="schoolname" class="form-control">
            </div>

<label for="state">State</label>
<div class="form-group">
  <select type="text" name="state" value="" class="form-control">
      <option value="Alabama">Alabama</option>
    	<option value="Alaska">Alaska</option>
    	<option value="Arizona">Arizona</option>
    	<option value="Arkansas">Arkansas</option>
    	<option value="California">California</option>
    	<option value="Colorado">Colorado</option>
    	<option value="Connecticut">Connecticut</option>
    	<option value="Delaware">Delaware</option>
    	<option value="Florida">Florida</option>
    	<option value="Georgia">Georgia</option>
    	<option value="Hawaii">Hawaii</option>
    	<option value="Idaho">Idaho</option>
    	<option value="Illinois">Illinois</option>
    	<option value="Indiana">Indiana</option>
    	<option value="Iowa">Iowa</option>
    	<option value="Kansas">Kansas</option>
    	<option value="Kentucky">Kentucky</option>
    	<option value="Louisiana">Louisiana</option>
    	<option value="Maine">Maine</option>
    	<option value="Maryland">Maryland</option>
    	<option value="Massachusetts">Massachusetts</option>
    	<option value="Michigan">Michigan</option>
    	<option value="Minnesota">Minnesota</option>
    	<option value="Mississippi">Mississippi</option>
    	<option value="Missouri">Missouri</option>
    	<option value="Montana">Montana</option>
    	<option value="Nebraska">Nebraska</option>
    	<option value="Nevada">Nevada</option>
    	<option value="New_Hampshire">New Hampshire</option>
    	<option value="New_Jersey">New Jersey</option>
    	<option value="New_Mexico">New Mexico</option>
    	<option value="New_York">New York</option>
    	<option value="North_Carolina">North Carolina</option>
    	<option value="North_Dakota">North Dakota</option>
    	<option value="Ohio">Ohio</option>
    	<option value="Oklahoma">Oklahoma</option>
    	<option value="Oregon">Oregon</option>
    	<option value="Pennsylvania">Pennsylvania</option>
    	<option value="Rhode_Island">Rhode Island</option>
    	<option value="South_Carolina">South Carolina</option>
    	<option value="South_Dakota">South Dakota</option>
    	<option value="Tennessee">Tennessee</option>
    	<option value="Texas">Texas</option>
    	<option value="Utah">Utah</option>
    	<option value="Vermont">Vermont</option>
    	<option value="Virginia">Virginia</option>
    	<option value="Washington">Washington</option>
    	<option value="West_Virginia">West Virginia</option>
    	<option value="Wisconsin">Wisconsin</option>
    	<option value="Wyoming">Wyoming</option>

  </select>
</div>


<label for="address">Address</label>
<div class="form-group">
  <input type="text" name="address" value="" class="form-control">
</div>


<label for="phone">Phone</label>
<div class="form-group">
  <input type="phone" name="phone" value="" class="form-control">
</div>




      <input type="submit" name="submit" value="Submit" class="btn btn-primary">

          </form>


      </div>
    </div>

  </body>
</html>
