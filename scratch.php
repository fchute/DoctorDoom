<?php
//$con=mysqli_connect("localhost","root","be892258441aa0bcb930ef3331c3ad4bb443ac7b53177502","tests");
// Check connection

include('DB_Config.php');
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform queries
$result=mysqli_query($connection,"SELECT * FROM cats");

while($row = mysqli_fetch_row($result))
{
    echo "<tr>";

    echo "<td>$row[0]</td>";
    echo "<td>$row[1]</td>";

    echo "</tr>\n";
}


mysqli_close($connection);
?>
