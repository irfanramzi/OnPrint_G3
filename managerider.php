<!-- Header -->
<?php include 'adminheader.php'; ?>

<form name="myForm" method="post" action="addcommission.php">
		<center>
        <div>
        
            <label>Commission ID :</label>
            <input type ="text" name="ComID" maxlength="10" class="inputbox"><br><br>
            
            <label>Commission Rate :</label>
            <input type ="float" name="ComRate" maxlength="10" class="inputbox"><br><br>
            
            <label>Commission Date :</label>
            <input type ="date" name="ComDate" class="inputbox"><br><br>
            
            <label>Delivery ID :</label>
            <input type ="text" name="DeliveryID" maxlength="10" class="inputbox"><br><br>
            
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
