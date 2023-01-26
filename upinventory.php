 <!-- Header -->
 <?php include 'headeradmin.php'; ?>

<form method="POST" action="editcomdb.php">

    <?php 
       $conn = mysqli_connect("localhost", "root", "", "Onprint");
       $query ="SELECT * FROM `Inventory` WHERE `InventoryID`='$_GET[editcommission]'";
       $result = mysqli_query($conn, $query);
       $row = mysqli_fetch_array($result);
	?>
		<center>
        <div>
        
            <label>Commission ID :</label>
            <input type ="text" name="ComID" maxlength="10" class="inputbox" value="<?php echo $row['ComID'];?>"><br><br>
            
            <label>Commission Rate :</label>
            <input type ="float" name="ComRate" maxlength="10" class="inputbox" value="<?php echo $row['ComRate'];?>"><br><br>
            
            <label>Commission Date :</label>
            <input type ="date" name="ComDate" class="inputbox" value="<?php echo $row['ComDate'];?>"><br><br>
            
            <label>Delivery ID :</label>
            <input type ="text" name="DeliveryID" maxlength="10" class="inputbox" value="<?php echo $row['DeliveryID'];?>"><br><br>
            
            <a href="editcomdb.php?ComID=<?php echo $row["ComID"] ?>"><input type="submit" value="Update"></a>

        </div>

</form>

<!-- Footer -->
<?php include 'footer.php'; ?>