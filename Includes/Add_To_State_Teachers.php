<?php


  $query = "SHOW TABLES IN ".$database." WHERE Tables_in_".$database." =  '$state'";

    $result = mysqli_query($connection, $query);
    if (!$result) {
      # code...
    die("Query FAILED: State table not found" . mysqli_error($connection)) ;
  }
    $rows = mysqli_num_rows($result);

                if ($rows) {
                  # Checks for user in primary directory to get info

                  $query = "SELECT id FROM teachers WHERE username = '$username'";


                                    $id_get = mysqli_query($connection, $query);


                                    if (!$id_get) {
                                      # code...
                                    die("Query FAILED: User not found in primary directory" . mysqli_error($connection)) ;
                                    }


                                    $id = mysqli_fetch_array($id_get);

                                    $id=$id['id'];



                                    $type="teacher";

                $query = "INSERT INTO ".$state." (username,first_name,last_name,address,state,phone, primaryID, type)";
                $query .= "VALUE ('$username', '$first_name', '$last_name', '$address', '$state', '$phone', '$id', '$type')";


                        $result = mysqli_query($connection, $query);

                        if (!$result) {
                          # code...
                        die("Query FAILED entering info into state" . mysqli_error($connection)) ;
                        }


                        }


                // else {
                //   $query= ( "CREATE TABLE "."`$state`"." ( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, username VARCHAR(30) UNIQUE NOT NULL, password VARCHAR(200) NOT NULL, name VARCHAR(30) NOT NULL, address VARCHAR(30) NOT NULL, state VARCHAR(30) NOT NULL, phone VARCHAR(30) NOT NULL, primaryID VARCHAR(30) )");
                //
                //   $result = mysqli_query($connection, $query);
                //
                //   if (!$result) {
                //     # code...
                //   die("Query FAILED223   here" . mysqli_error($connection)) ;
                //   }
                //   else {
                //
                //     $query = "SELECT id FROM list WHERE username = '$username'";
                //
                //
                //                       $id_get = mysqli_query($connection, $query);
                //
                //
                //                       if (!$id_get) {
                //                         # code...
                //                       die("Query ffFAILED" . mysqli_error($connection)) ;
                //                       }
                //
                //
                //                       $id = mysqli_fetch_array($id_get);
                //
                //                       $id=$id['id'];
                //
                //
                //   $query = "INSERT INTO ".$state." (username,name,address,state,phone, primaryID) ";
                //   $query .= "VALUE ('$username', '$name', '$address', '$state', '$phone', '$id')";
                //
                //
                //   $result = mysqli_query($connection, $query);
                //
                //   if (!$result) {
                //     # code...
                //   die("Query FAILED 2here" . mysqli_error($connection)) ;
                // }
                //
                //
                //
                //
                //
                // }
                // }



 ?>
