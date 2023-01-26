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
	<h2>Commission List<h2>
	<br>
	<table class="table">
		<thead>
			<tr>
				<th>Commission ID</th>
				<th>Commission Rate</th>
				<th>Commission Date</th>
				<th>Delivery ID</th>
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
			
			$sql="SELECT * FROM commision";
			$result = $connection->query($sql);
			
			if (!$result){
				die("Invalid query: ". $connection->error);
			}
			
			while($row = $result->fetch_assoc()){
				echo"
				<tr>
			<td>$row[ComID]</td>
				<td>$row[ComRate]</td>
				<td>$row[ComDate]</td>
				<td>$row[DeliveryID]</td>
				<td>
					<a class='button' href='editcommission.php?editcommission=$row[ComID]'>Update</a>
					<a class='button' href='delcommission.php?deletecommission=$row[ComID]'>Delete</a>
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
