<?php

	$conn = mysqli_connect("localhost", "root", "", "onprint") or die(mysqli_error());
	
	$InventoryID  = $_POST['InventoryID'];
	$InventoryDateIn = $_POST['InventoryDateIn'];
	$InventoryDateOut = $_POST['InventoryDateOut'];
	$InventoryQuantity = $_POST['InventoryQuantity'];
    $ProductID = $_POST['ProductID'];
	$OutletID = $_POST['OutletID'];
	
	$query = "INSERT INTO inventory(InventoryID, InventoryDateIn, InventoryDateOut, InventoryQuantity, ProductID, OutletID) values('$InventoryID', '$InventoryDateIn', '$InventoryDateOut', '$InventoryQuantity', '$ProductID', '$OutletID')";
	
	$run = mysqli_query($conn, $query) or die(mysqli_error());
	
	if ($run)
	{
		
		echo "Data Inserted Successfully!";
		
	}
	
	else
	{
		
		echo "Data Not Inserted!";
		
	}

?>

<br>
<button type="button" class="button" onclick="window.location='viewinventory.php'">view</button>
</button>
<button class="button" onclick="window.location='manageinventory.php'">Add</button>
</button>
