<?php

	$conn = mysqli_connect("localhost", "root", "", "onprint") or die(mysqli_error());
	
	$ComID  = $_POST['ComID'];
	$ComRate = $_POST['ComRate'];
	$ComDate = $_POST['ComDate'];
	$DeliveryID = $_POST['DeliveryID'];
	
	$query = "INSERT INTO commision(ComID, ComRate, ComDate, DeliveryID) values('$ComID', '$ComRate', '$ComDate', '$DeliveryID')";
	
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
<button type="button" class="button" onclick="window.location='viewcommission.php'">view</button>
</button>
<button class="button" onclick="window.location='managerider.php'">Add</button>
</button>
