<?php

include_once './Database/inc_configitem.php';

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$sql="select count * from user";
$result=mysqli_query($mysqli,$sql);
$row=mysqli_fetch_array($result);
echo "<h3>$row[0]</h3>";
mysqli_close($mysqli);
?>