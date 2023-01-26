<?php 
 // Connection information for the database
include './Database/inc_config.php';
 //header
 include 'adminmanage.php'; 
 ?>

<!-- Navbar -->
<div class="d-flex flex-column h-100">
    <div class="d-flex flex-row">
      <div class="nav navbar-nav navbar-left">
        <!-- Side navigation -->
        <ul>
            <li>
                <div class="dropdown">
                    <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Add Account
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="http://localhost/OnPrint/createuser.php">User</a></li>
                        <li><a class="dropdown-item" href="http://localhost/OnPrint/createadmin.php">Administrator</a></li>
                        <li><a class="dropdown-item" href="http://localhost/OnPrint/createrider.php">Rider</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <div class="dropdown">
                    <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        View Account
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="http://localhost/OnPrint/viewaccount_.php">View Account</a></li>
                        <li><a class="dropdown-item" href="http://localhost/OnPrint/updateuser.php">Update User</a></li>
                        <li><a class="dropdown-item" href="http://localhost/OnPrint/updateadmin.php">Update Administrator</a></li>
                        <li><a class="dropdown-item" href="http://localhost/OnPrint/updaterider.php">Update Rider</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <button><a href="http://localhost/OnPrint/accountreport.php" class="button" >Report</a></button>
            </li>
        </ul>
    </div>
    <!-- Main content -->
    <div class="flex-grow-1">
<div class="container">
    <br>

    <h1>Update User Account</h1>
    
    <br>

<form name="myForm" method="POST" action="./Database/dbupdate.php">
    <div class="row">

    <?php 
        $conn = mysqli_connect("localhost", "root", "", "onprint");
        $qml="SELECT * FROM `user` WHERE `UserID` = '$_GET[upt_comm]'";
		$rest=mysqli_query($conn, $qml); 
		$row=mysqli_fetch_array($rest);
        
	?>

    <div class="col-sm-6">
        <div class="row mb-4">
            <label for="UserID" class="col-sm-3 col-form-label">User ID</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="UserID" value="<?php echo $row['UserID'];?>" placeholder="Enter User ID">
            </div>
        </div>
        <div class="row mb-4">
            <label for="UserFirstName" class="col-sm-3 col-form-label">First Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="UserFirstName" value="<?php echo $row['UserFirstName'];?>" placeholder="Enter First Name">
            </div>
        </div>
        <div class="row mb-4">
            <label for="UserLastName" class="col-sm-3 col-form-label">Last Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="UserLastName" value="<?php echo $row['UserLastName'];?>" placeholder="Enter Last Name">
            </div>
        </div>
        <div class="row mb-4">
            <label for="UserPassword" class="col-sm-3 col-form-label">Password</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="UserPassword" value="<?php echo $row['UserPassword'];?>" placeholder="Enter Password">
            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="row mb-4">
            <label for="UserAddress" class="col-sm-3 col-form-label">Address</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="UserAddress" value="<?php echo $row['UserAddress'];?>" placeholder="Enter Address">
            </div>
        </div>
        <div class="row mb-4">
            <label for="CityID" class="col-sm-3 col-form-label">City</label>
            <div class="col-sm-6">

                <?php
                $con=mysqli_connect("localhost","root","","onprint");
                $s=mysqli_query($con,"select * from city")
                ?>

                <select class="form-select" name="CityID" value="<?php echo $row['CityID'];?>" aria-label="Default select example">
                    
                    <?php
                    while($r=mysqli_fetch_array($s))
                    {
                        ?>

                        <option><?php echo $r['CityID']; ?></option>

                    <?php
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="row mb-4">
            <label for="StateID" class="col-sm-3 col-form-label">State</label>
            <div class="col-sm-6">

                <?php
                $con=mysqli_connect("localhost","root","","onprint");
                $s=mysqli_query($con,"select * from state")
                ?>

                <select class="form-select" name="StateID" value="<?php echo $row['StateID'];?>" aria-label="Default select example">
                    
                    <?php
                    while($r=mysqli_fetch_array($s))
                    {
                        ?>

                        <option><?php echo $r['StateID']; ?></option>

                    <?php
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="row mb-4">
            <label for="UserPhone" class="col-sm-3 col-form-label">Phone Number</label>
            <div class="col-sm-6">
                <input type="int" class="form-control" name="UserPhone" value="<?php echo $row['UserPhone'];?>" placeholder="Enter Phone Number">
            </div>
        </div>
        <div class="row mb-4">
            <label for="UserEmail" class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-6">
                <input type="email" class="form-control" name="UserEmail" value="<?php echo $row['UserEmail'];?>" placeholder="Enter Email">
            </div>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-success">Update</button>
            <button type="reset" class="btn btn-success">Reset</button>
        </div>

    </div>
    </div>
</form>
</div>
    </div>
</div>


<!-- Logo -->
<?php include 'footer.php'; ?>
