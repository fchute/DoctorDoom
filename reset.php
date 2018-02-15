<?php

session_start();

include './Includes/DB_Config.php';


include './Includes/check_email.php';





 ?>


 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Reset Password</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

   </head>
   <body>
     <div class="container">
       <div class="row">
         <div class="col-sm-12">
           <h2>Reset Password</h2>


         </div>

         <div class="col-sm-12">
           <form class="" action="" method="post">

             <label for="email">E-Mail</label>
             <div class="form-group">
               <input type="text" name="email" value="" class="form-control">
             </div>

             <input type="submit" name="submit" value="Submit" class="btn btn-primary">


           </form>
         </div>
       </div>
     </div>
   </body>
 </html>
