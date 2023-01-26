<?php

$con = mysqli_connect("localhost", "root", "", "Onprint");
$db = "modul5";

session_start();

mysqli_query($con,"DELETE FROM commision WHERE ComID = '".$_GET['deletecommission']."'");

include("viewcommission.php");
?>
