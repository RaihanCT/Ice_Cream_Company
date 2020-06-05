<?php
session_start();


include 'ConnectApache.php';

$uname= $_GET['uname'];
$pw= $_GET['pw'];

$sql = "select custID from customer2409 where uname ='".$uname."'";

echo "sql =<br>".$sql."<br>";

$result=mysqli_query($con,$sql);

$thisrow=mysqli_fetch_row($result);




//to get a 1 for a valid old user else 0 for unidentified user


If ($thisrow[0] > 0)  // 2 equal signs?
{
echo "<a href=Customer.html>this  username or password already in use, go back  and use another password</a>";

} else {
		
//-------------------------

$uname= $_GET['uname'];
$fname = $_GET['fname'];
$lname = $_GET['lname'];
$pw = $_GET['pw'];
$address = $_GET['address'];
$email = $_GET['email'];

{

$sql= "insert into customer2409 (uname,fname,lname,pw, address, email) values ('".$uname."','".$fname."','".$lname."','".$pw."','".$address."','".$email."')";
	echo "<br>This is actual sql: <br>".$sql;
	
	if ( !mysqli_query($con, $sql) ) {
		Die("<br>Did not insert data -".mysqli_error($con). "<br>");
		echo "<br> Try again, the custID and pw already selected<br>";
		
	} else {
		
		$sql = "select custID from customer2409 where uname ='".$uname."' and pw ='".$pw."'";
		
		$result = mysqli_query($con, $sql);
		
		$thisrow = mysqli_fetch_row($result);
		
		$_SESSION['custID']= $thisrow[0];
		
		echo "<br><br>this row session variable =".$thisrow[0]."<br>";
		
		echo "<br>You can now place an order<br>";
		echo "<a href=Order.html> Press here to go to Order Form</a>";
	}
	
}

}
