<?php
include 'connectApache.php';

$sql = "CREATE TABLE customer2409 
(
custid INT primary key auto_increment, 
uname   char(20),
fname 	CHAR(20),
lname 	CHAR(20), 
pw      CHAR(10),
address CHAR(40),
email  	char(40)
)";



if (!mysqli_query($con,$sql))
{
  die("<br>Could not create table cust  ".mysqli_error($con));
}
else
{
echo "table customer created";
}

?>