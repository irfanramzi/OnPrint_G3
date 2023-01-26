<!-- Header -->
<?php include 'adminheader.php'; ?>

<form name="myForm" method="post" action="addinventory.php">
		<center>
        <div>
        
            <label>Inventory ID :</label>
            <input type ="text" name="InventoryID" maxlength="10" class="inputbox"><br><br>
            
            <label>Date In :</label>
            <input type ="date" name="InventoryDateIn" class="inputbox"><br><br>
            
            <label>Date Out :</label>
            <input type ="date" name="InventoryDateOut" class="inputbox"><br><br>

            <label>Quantity :</label>
            <input type ="int" name="InventoryQuantity" class="inputbox"><br><br>

            <label>Product ID :</label>
            <input type ="text" name="ProductID" maxlength="10" class="inputbox"><br><br>
            
            <label>Outlet ID :</label>
            <input type ="text" name="OutletID" maxlength="10" class="inputbox"><br><br>
        </div>
        
        <div>
        
            <button type="submit"  name="submit">Submit</button>
            <button type="reset" >Reset</button>
        </div>
        

    </div>
    </div>
    </form>
</div>
    </div>
</div>

<!-- Footer -->
<?php include 'footer.php'; ?>