<?php

	$conn = mysqli_connect("localhost", "root", "", "Onprint");
	
	$InventoryID = $_POST['InventoryID'];
	$InventoryDateIn = $_POST['InventoryDateIn'];
	$InventoryDateOut = $_POST['InventoryDateOut'];
	$InventoryQuantity = $_POST['InventoryQuantity'];
	$ProductID = $_POST['ProductID'];
	$OutletID = $_POST['OutletID'];
	
	$query = "UPDATE Inventory SET InventoryDateIn='$_POST[InventoryDateIn]', InventoryDateOut='$_POST[InventoryDateOut]', InventoryQuantity='$_POST[InventoryQuantity]', ProductID='$_POST[ProductID]', OutletID='$_POST[OutletID]'";

	$run = mysqli_query($conn, $query) or die(mysqli_error());


	if ($run)
	{
		
		header("location: viewinventory.php");  
		
	}
	
	else
	{
		
		echo "Data Not Updated!";
		
	}
	
	exit;

?>

