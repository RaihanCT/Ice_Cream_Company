<?php
include 'connectApache.php';

$sql = "CREATE TABLE order2409 
(
orderid INT primary key auto_increment, 
custID int(3) not null,
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