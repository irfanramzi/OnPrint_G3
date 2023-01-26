<?php

$con = mysqli_connect("localhost", "root", "", "Onprint");
$db = "Onprint";

session_start();

mysqli_query($con,"DELETE FROM inventory WHERE InventoryID = '".$_GET['deleteinventory']."'");

include("viewinventory.php");
?>
