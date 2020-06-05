<?php

include "connectApache.php";

$sql="select * from customer2409";

$result = mysqli_query($con,$sql);

echo "<h1>List Of All Customers<br></h1>";
echo "<a href=Owner.html> Press here to go to Owner Page</a><br><br>";

echo "<table border='1'>
<tr>
<th>CUSTID</th>
<th>USER NAME</th>
<th>FIRST NAME</th>
<th>LAST NAME</th>
<th>PASSWORD</th>
<th>ADDRESS</th>
<th>EMAIL ADDRESS</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
 
  echo "<td>" . $row['custid'] . "</td>";
  echo "<td>" . $row['uname'] . "</td>";
  echo "<td>" . $row['fname'] . "</td>";
  echo "<td>" . $row['lname'] . "</td>";
  echo "<td>" . $row['pw'] . "</td>";
   echo "<td>" . $row['address'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "</tr>";
}

echo "</table>";

?>