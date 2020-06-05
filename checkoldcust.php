<?php
session_start();


include 'connectApache.php';


$uname= $_GET['uname'];
$pw= $_GET['pw'];



$sql = "select custID from customer2409 where uname ='".$uname."'and pw ='".$pw."'";

echo "sql=".$sql."<br>";

$result = mysqli_query( $con,$sql);

$thisrow=mysqli_fetch_row($result);

echo "<br>this row=".$thisrow[0]."<br>";


// to get a 1 for a valid old user else 0 for unidentified user
//======================to get session variable of custid====

If ($thisrow[0] > 0)  // 2 equal signs?
{
$result = mysqli_query($con,"select custID from customer2409 where uname='".$uname."' and pw='".$pw."'");

$thisrow=mysqli_fetch_row($result);


echo "<br>your custID  is ".$thisrow[0]."<b>";


$_SESSION['custID']=$thisrow[0];


echo "<a href=Order.html> Press here to go to Order Form</a>";
}
else
{
echo "<br><a href=Customer.html>Wrong Username or Password,Try again</a>";
}


?>
