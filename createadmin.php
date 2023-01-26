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
                        <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Add Account
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="http://localhost/OnPrint/createuser.php">User</a></li>
                            <li><a class="dropdown-item"
                                    href="http://localhost/OnPrint/createadmin.php">Administrator</a></li>
                            <li><a class="dropdown-item" href="http://localhost/OnPrint/createrider.php">Rider</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <button> <a href="http://localhost/OnPrint/viewaccount_.php" class="btn"><b>View
                                Account</b></a></button>
                </li>
            </ul>
        </div>
        <!-- Main content -->
        <div class="flex-grow-1">
            <div class="container">
                <br>

                <h1>Create Administrator Account</h1>

                <br>

                <form name="myForm" method="POST" action="dbcreateadmin.php">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="row mb-4">
                                <label for="userID" class="col-sm-3 col-form-label">User ID</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="UserID" placeholder="Enter User ID">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="UserFirstName" class="col-sm-3 col-form-label">First Name</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="UserFirstName"
                                        placeholder="Enter First Name">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="UserLastName" class="col-sm-3 col-form-label">Last Name</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="UserLastName"
                                        placeholder="Enter Last Name">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="UserPassword" class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="UserPassword"
                                        placeholder="Enter Password">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="AdminPosition" class="col-sm-3 col-form-label">Position</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="AdminPosition"
                                        placeholder="Enter Position">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="row mb-4">
                                <label for="UserAddress" class="col-sm-3 col-form-label">Address</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="UserAddress" placeholder="Enter Address">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="city" class="col-sm-3 col-form-label">City</label>
                                <div class="col-sm-6">

                                    <?php
                                    $con = mysqli_connect("localhost", "root", "", "onprint");
                                    $s = mysqli_query($con, "select * from city")
                                        ?>

                                    <select class="form-select" name="CityID" aria-label="Default select example">
                                        <option selected>Choose City</option>
                                        <?php
                                        while ($r = mysqli_fetch_array($s)) {
                                            ?>

                                            <option>
                                                <?php echo $r['CityID']; ?>
                                            </option>

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
                                    $con = mysqli_connect("localhost", "root", "", "onprint");
                                    $s = mysqli_query($con, "select * from state")
                                        ?>

                                    <select class="form-select" name="StateID" aria-label="Default select example">
                                        <option selected>Choose State</option>
                                        <?php
                                        while ($r = mysqli_fetch_array($s)) {
                                            ?>

                                            <option>
                                                <?php echo $r['StateID']; ?>
                                            </option>

                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="UserPhone" class="col-sm-3 col-form-label">Phone Number</label>
                                <div class="col-sm-6">
                                    <input type="int" class="form-control" name="UserPhone"
                                        placeholder="Enter Phone Number">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="UserEmail" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-6">
                                    <input type="email" class="form-control" name="UserEmail" placeholder="Enter Email">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success">Create</button>
                            <button type="reset" class="btn btn-success">Reset</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>


    <!-- Logo -->
    <?php include 'footer.php'; ?>