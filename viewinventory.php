<!-- Header -->
<?php include 'adminheader.php'; ?>

                <div class="dropdown">
                    <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Rider Commission Report
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="http://localhost/OnPrint/.php">Weekly</a></li>
                        <li><a class="dropdown-item" href="http://localhost/OnPrint/.php">Monthly</a></li>
                        <li><a class="dropdown-item" href="http://localhost/OnPrint/.php">Yearly</a></li>
                    </ul>
                </div>
                <div class="container my-5">
	<h2>Inventory<h2>
	<br>
	<table class="table">
		<thead>
			<tr>
				<th>InventoryID</th>
				<th>InventoryDateIn</th>
				<th>InventoryDateOut</th>
				<th>InventoryQuantity</th>
                <th>ProductID</th>
				<th>OutletID</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$database = "Onprint";
			
			$connection = new mysqli($servername, $username, $password, $database);
			
			if ($connection->connect_error){
				die("Connection failed: ". $connection->connect_error);
            }
			
			$sql="SELECT * FROM outlet_inventory";
			$result = $connection->query($sql);
			
			if (!$result){
				die("Invalid query: ". $connection->error);
			}
			
			while($row = $result->fetch_assoc()){
				echo"
				<tr>
			<td>$row[InventoryID]</td>
				<td>$row[InventoryDateIn]</td>
				<td>$row[InventoryDateOut]</td>
				<td>$row[InventoryQuantity]</td>
                <td>$row[ProductID]</td>
				<td>$row[OutletID]</td>
				<td>
					<a class='button' href=editinventory.php?editinventory=$row[InventoryID]'>Edit</a>
					<a class='button' href='delinventory.php?deleteinventory=$row[InventoryID]'>Delete</a>
				</td>
			</tr>
				";
			}
			
			
			?>
			
		</tbody>
					
	</table>
	<center>
	<button class="button" onclick="window.location='managerider.php'">Add</button>
</button>

	</div>

<!-- Footer -->
<?php include 'footer.php'; ?>
