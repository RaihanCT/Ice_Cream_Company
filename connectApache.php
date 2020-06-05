<?php

echo "the start of connectApache today";

$con = mysqli_connect('oddb',23613538,'tester');
if (!$con)
{die("<br>could not connect ".mysqli_connect_error($con));}
else 
{echo "<br>server connected<br>";}

//db

$db = mysqli_select_db($con,23613538);

if (!$db)
{die("<br>could not connect to database".mysqli_connect_error($db)); }
else
{echo "<br>database connected!<br>";} 


?>