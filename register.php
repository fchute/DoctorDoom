<?php

session_start();

include './Includes/DB_Config.php';




    if(isset($_POST['submit']))
    {

    include './Includes/preparefields.php';

    include './Includes/Add_To_Primary_Directory.php';
    }


    if(isset($_POST['submit']))
    {

    include './Includes/preparefields.php';

    include './Includes/Add_To_State_Directory.php';

    include './Includes/Add_State_Id_To_Primary_Directory.php';

    header("Location: User_Page.php");

              }
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Doc</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

  </head>
  <body>
<div class="container">
  <div class="row">


  <h2>Register an account</h1>
    <p style="margin:10px;">or</p>
    <form method="GET" action="login.php">
        <input type="submit" value="Login" class="btn btn-primary"/>
    </form>
    </div>
</div>

    <div class="container">
      <div class="col-sm-6">
          <form action="" method="post">


            <label for="username">Username</label>
            <div class="form-group">
              <input type="text" name="username" class="form-control">
            </div>

            <label for="password">Password</label>
            <div class="form-group">
              <input type="password" name="password" value="" class="form-control">
            </div>
<label for="name">First Name</label>
<div class="form-group">
  <input type="text" name="first_name" value="" class="form-control">
</div>

<label for="name">Last Name</label>
<div class="form-group">
  <input type="text" name="last_name" value="" class="form-control">
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
