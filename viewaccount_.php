<?php
// Connection information for the database
include './Database/inc_config.php';

// header
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
                        <button class="btn btn-success dropdown-toggle" href="http://localhost/OnPrint/viewaccount_.php"
                            type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
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
        <div class="flex-grow-1" style="padding:10px;">

            <br>

            <div>
                <h2>VIEW ACCOUNT</h2>
            </div>

            <br>

            <table class="table table-success table-striped">
                <thead>
                    <tr>
                        <th scope="col">User ID</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Password</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Address</th>
                        <th scope="col">City</th>
                        <th scope="col">State</th>
                        <th colspan="2">
                            <center>Action<center>
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <?php

                    $sql = "SELECT * FROM user";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "
                           
                            <tr>
                                <td> $row[UserID] </td>
                                <td> $row[UserFirstName]  $row[UserLastName] </td>
                                <td> $row[UserPassword] </td>
                                <td> $row[UserPhone] </td>
                                <td> $row[UserAddress] </td>
                                <td> $row[CityID] </td>
                                <td> $row[StateID] </td>
                                <td><center> 
                                <a class='btn btn-primary' href='updateuser.php?upt_comm=$row[UserID]'> Update</a>
                                    <a class='btn btn-danger' href='delete.php?del_comm=$row[UserID]'> Delete</a>
                                </center></td>
                            </tr>
                        ";
                    }
                    ?>
                </tbody>
            </table>

        </div>
    </div>

    <br><br>


    <!-- Logo -->
    <?php include 'footer.php'; ?>