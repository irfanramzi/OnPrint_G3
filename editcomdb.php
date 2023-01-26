<?php

	$conn = mysqli_connect("localhost", "root", "", "Onprint");
	
	$ComID  = $_POST['ComID'];
	$ComRate = $_POST['ComRate'];
	$ComDate = $_POST['ComDate'];
	$DeliveryID = $_POST['DeliveryID'];

	$query = "UPDATE commision SET ComRate='$_POST[ComRate]', ComDate='$_POST[ComDate]', $DeliveryID='$_POST[DeliveryID]';";
	
	$run = mysqli_query($conn, $query) or die(mysqli_error());
	
	if ($run)
	{
		
		header("location: viewcommission.php");  
		
	}
	
	else
	{
		
		echo "Failed to Updated!";
		
	}
	exit;

?>