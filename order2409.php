<?php
session_start();


include 'connectApache.php';
echo "<br>starting insert<br>";

$ivanilla= $_GET['ivanilla'];
$istrawberry= $_GET['istrawberry'];
$istrawberry= $_GET['istrawberry'];
$ichocolate= $_GET['ichocolate'];
$imint= $_GET['imint'];
$custID= $_SESSION['custID'];
$datein= date("Y/m/d");

$sql= "insert into Order2409 (ivanilla,istrawberry,ichocolate,imint,custID,orderdate) 
values ('".$ivanilla."','".$istrawberry."','".$ichocolate."','".$imint."','".$custID."','".$datein."')";

echo "<br>This is actual sql:<br>".$sql;

if ( !mysqli_query($con, $sql))
{
	Die("<br>Did not insert data -".mysqli_error($con)."<br>");
}
else
{
	echo "<br>data inserted<br>";
}


$sql2 = "UPDATE inventory2409 SET ivanilla = ivanilla - $ivanilla, istrawberry = istrawberry - $istrawberry, ichocolate = ichocolate - $ichocolate, imint = imint - $imint";

if ( !mysqli_query( $con,$sql2 ) ) {
  die( "<br>Did not insert data  ".mysqli_error($con) );
} else {
    echo "<br>Inventory Updated.";
}
$sql3 = "SELECT * from customer2409 where custID = $custID";

$result = mysqli_query($con,$sql3);

if (!$result) {
  printf("Error: %s\n", mysqli_error($con));
}

$row_data = mysqli_fetch_array($result);


$to = $row_data['email'];
$subject = 'Ice Cream_Order Confirmed';
$msg = 'Hi ' . $row_data['fname'] . ' ' . $row_data['lname'] . ',' . "\r\n" . 'Your order was recieved.' . "\r\n" . 'Here is your order details:' . "\r\n" . 'Ice Cream Vanilla: ' .$ivanilla. ', Ice Cream Strawberry: ' .$istrawberry. ', Ice Cream Chocolate: ' .$ichocolate. ', Ice Cream Mint: ' .$imint;

$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: Raihan Ice Cream <info@address.com>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

if (mail($to, $subject, $msg, $headers)) {
  echo "<br>Order confirmed. Email sent.";
} else {
  echo "<br>Failed to send email";
}
echo "<a href=order.html> Go Back To Order</a><br><br>";
echo "<a href=index1.html> Press here to go to Home Page</a><br><br>";