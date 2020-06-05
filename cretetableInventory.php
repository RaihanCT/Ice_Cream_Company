<?php
include 'connectApache.php';

$sql = "CREATE TABLE inventory2409 
(
x int(1) primary key, 
ivanilla int(3),
istrawberry int(3),
ichocolate int(3),
imint int (3),
orderdate DATE
)";

//$sql = "DROP TABLE order2409";

if (!mysqli_query($con,$sql))
{
  die("<br>Could not create table order2409  ".mysqli_error($con));
}
else
{
echo "table Order created";
}

?>