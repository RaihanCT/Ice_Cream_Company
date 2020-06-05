<?php 

session_start();

include 'connectApache.php';
echo "<br>Starting Insert<br>";

$Ivanila = $_GET['ivanilla'];
$Istrawberry = $_GET['istrawberry'];
$Ichocolate = $_GET['ichocolate'];
$Imint = $_GET['imint'];

$sql = "UPDATE inventory2409 SET ivanilla = ivanilla + $Ivanila, istrawberry = istrawberry + $Istrawberry, ichocolate = ichocolate + $Ichocolate, imint = imint + $Imint";

if ( !mysqli_query( $con,$sql ) ) {
  die( "<br>Did not insert data  ".mysqli_error($con) );
} else {
    echo "<br>data inserted. <a href='showInventory.php'>Check Inventory</a>";
}