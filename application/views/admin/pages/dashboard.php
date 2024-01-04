<!-- Begin Page Content -->
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Total Registered Users</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?php
                            require 'dbconfig.php';

                            $query = "SELECT id FROM users ORDER BY id";
                            $query_run = mysqli_query($connection, $query);
                            $row = mysqli_num_rows($query_run);

                            echo '<h3>' .$row.'</h3>'
                            ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user-plus fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Total Enquiries </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?php
                            require 'dbconfig.php';

                            $query = "SELECT id FROM contact ORDER BY id";
                            $query_run = mysqli_query($connection, $query);
                            $row = mysqli_num_rows($query_run);

                            echo '<h3>' .$row.'</h3>'
                            ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fa fa-question-circle fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1"> Total Subscribed
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                            <?php
                            require 'dbconfig.php';

                            $query = "SELECT id FROM subscriptions ORDER BY id";
                            $query_run = mysqli_query($connection, $query);
                            $row = mysqli_num_rows($query_run);

                            echo '<h3>' .$row.'</h3>'
                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                            <i class="material-icons" style="font-size: 36px; opacity: 0.5;">subscriptions</i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>