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

    <h1>Create Rider Account</h1>
    
    <br>

    <form>
    <div class="row">
    <div class="col-sm-6">
        <div class="row mb-4">
            <label for="userID" class="col-sm-3 col-form-label">User ID</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="userID" placeholder="Enter User ID">
            </div>
        </div>
        <div class="row mb-4">
            <label for="firstname" class="col-sm-3 col-form-label">First Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="firstname" placeholder="Enter First Name">
            </div>
        </div>
        <div class="row mb-4">
            <label for="laststname" class="col-sm-3 col-form-label">Last Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="lastname" placeholder="Enter Last Name">
            </div>
        </div>
        <div class="row mb-4">
            <label for="password" class="col-sm-3 col-form-label">Password</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="password" placeholder="Enter Password">
            </div>
        </div>
        <div class="row mb-4">
            <label for="vehicletype" class="col-sm-3 col-form-label">Vehicle Type</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="vehicletype" placeholder="Enter Vehicle Type">
            </div>
        </div>
        <div class="row mb-4">
            <label for="platelicense" class="col-sm-3 col-form-label">Plate License</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="platelicense" placeholder="Enter Plate License">
            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="row mb-4">
            <label for="address" class="col-sm-3 col-form-label">Address</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="address" placeholder="Enter Address">
            </div>
        </div>
        <div class="row mb-4">
            <label for="city" class="col-sm-3 col-form-label">City</label>
            <div class="col-sm-6">

                <?php
                $con=mysqli_connect("localhost","root","","onprint");
                $s=mysqli_query($con,"select * from city")
                ?>

                <select class="form-select" name="city" aria-label="Default select example">
                    <option selected>Choose City</option>
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
            <label for="state" class="col-sm-3 col-form-label">State</label>
            <div class="col-sm-6">

                <?php
                $con=mysqli_connect("localhost","root","","onprint");
                $s=mysqli_query($con,"select * from state")
                ?>

                <select class="form-select" name="state" aria-label="Default select example">
                    <option selected>Choose State</option>
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
            <label for="phonenumber" class="col-sm-3 col-form-label">Phone Number</label>
            <div class="col-sm-6">
                <input type="int" class="form-control" id="phonenumber" placeholder="Enter Phone Number">
            </div>
        </div>
        <div class="row mb-4">
            <label for="email" class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-6">
                <input type="email" class="form-control" id="phonenumber" placeholder="Enter Email">
            </div>
        </div>

        <br><br>
        <button type="submit" class="btn btn-success">Update</button>
        <button type="reset" class="btn btn-success">Reset</button>
    </div>
    </div>
    </form>
</div>
    </div>
</div>


<!-- Logo -->
<?php include 'footer.php'; ?>
