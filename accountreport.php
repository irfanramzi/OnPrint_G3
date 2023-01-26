<?php
// Connection information for the database
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
        <div class="flex-grow-1" style="padding:10px;">

            <br>

            <div>
                <h2>ACCOUNT REPORT</h2>
            </div>

            <br>

            <div class="container">
                <div class="row">
                    <div class="col order-first">
                        <div class="col-xl-10 col-md-10">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">
                                    Total User
                                    <?php
                                    include_once './Database/inc_configitem.php';

                                    $dash_user_query = "SELECT UserID FROM user WHERE UserID REGEXP '^[U].*$'";
                                    $dash_user_query_run = mysqli_query($conn, $dash_user_query);

                                    if ($user_total = (mysqli_num_rows($dash_user_query_run))) {
                                        echo '<h4 class="mb-0">' . $user_total . '</h4>';
                                    } else {
                                        echo '<h4 class="mb-0">No Data</h4>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="col order-first">
                            <div class="col-xl-10 col-md-10">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">
                                        Total Admin
                                        <?php
                                        include_once './Database/inc_configitem.php';

                                        $dash_administrator_query = "SELECT * FROM administrator";
                                        $dash_administrator_query_run = mysqli_query($conn, $dash_administrator_query);

                                        if ($administrator_total = mysqli_num_rows($dash_administrator_query_run)) {
                                            echo '<h4 class="mb-0">' . $administrator_total . '</h4>';
                                        } else {
                                            echo '<h4 class="mb-0">No Data</h4>';
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col order-last">
                        <div class="col order-last">
                            <div class="col-xl-10 col-md-10">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">
                                        Total Rider
                                        <?php
                                        include_once './Database/inc_configitem.php';

                                        $dash_rider_query = "SELECT * FROM rider";
                                        $dash_rider_query_run = mysqli_query($conn, $dash_rider_query);

                                        if ($rider_total = mysqli_num_rows($dash_rider_query_run)) {
                                            echo '<h4 class="mb-0">' . $rider_total . '</h4>';
                                        } else {
                                            echo '<h4 class="mb-0">No Data</h4>';
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col order-last">
                        <div class="col order-last">
                            <div class="col-xl-10 col-md-10">
                                <div class="card bg-info text-white mb-4">
                                    <div class="card-body">
                                        Total Non-Register
                                        <?php
                                        include_once './Database/inc_configitem.php';

                                        $dash_non_query = "SELECT * FROM nonregistered";
                                        $dash_non_query_run = mysqli_query($conn, $dash_non_query);

                                        if ($non_total = mysqli_num_rows($dash_non_query_run)) {
                                            echo '<h4 class="mb-0">' . $non_total . '</h4>';
                                        } else {
                                            echo '<h4 class="mb-0">No Data</h4>';
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br>

            <div class="container">
                <?php
                include_once './Database/inc_configitem.php';
                $sql = "SELECT * FROM user";
                $result = mysqli_query($conn, $sql);
                ?>

                <head>
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script type="text/javascript">
                        google.charts.load('current', { 'packages': ['bar'] });
                        google.charts.setOnLoadCallback(drawChart);

                        function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                                ['City', 'User'],
                                <?php
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_array($result)) {
                                        echo "['" . $row['CityID'] . "','" . $row['UserID'] . "'],";
                                    }
                                }
                                ?>
                            ]);

                            var options = {
                                chart: {
                                    title: 'Total OnPrint Users',
                                    subtitle: 'Based on City',
                                }
                            };

                            var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

                            chart.draw(data, google.charts.Bar.convertOptions(options));
                        }
                    </script>
                </head>

                <body>
                    <div id="columnchart_material" style="width: 800px; height: 500px;"></div>
                </body>
            </div>

            <br>

        </div>
    </div>

    <br><br><br>
    <!-- Logo -->
    <?php include 'footer.php'; ?>