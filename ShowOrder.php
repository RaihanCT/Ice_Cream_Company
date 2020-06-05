<?php

include "connectApache.php";

$sql="select * from order2409";

$result = mysqli_query($con,$sql);

echo "<h1>List Of All Order<br /></h1>";
echo "<a href=Owner.html> Press here to go to Owner Page</a><br><br>";

echo "<table border='1'>
<tr>
<th>ORDER ID</th>
<th>CUSTID</th>
<th>Ice Cream Vanilla</th>
<th>Ice Cream Strawberry</th>
<th>Ice Cream Chocolate</th>
<th>Ice Cream Mint</th>
<th>Order Date</th>

</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
 
 echo "<td>" . $row['orderid'] . "</td>";
  echo "<td>" . $row['custID'] . "</td>";
  echo "<td>" . $row['ivanilla'] . "</td>";
  echo "<td>" . $row['istrawberry'] . "</td>";
  echo "<td>" . $row['ichocolate'] . "</td>";
  echo "<td>" . $row['imint'] . "</td>";
   echo "<td>" . $row['orderdate'] . "</td>";
  echo "</tr>";
}

echo "</table>";

?>