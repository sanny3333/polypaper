<div class="container-fluid">
    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-2 text-gray-800"> Users Table</h1> -->
    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">User Table</h1>
        <div class="d-flex">
            <a href="<?php echo base_url();?>admin/users/add"
                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class=" fa-sm text-white-50"></i>Add User
            </a>
            <a href="<?php echo base_url();?>report/report"
                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="margin-left: 10px;">
                <i class="fa-sm text-white-50"></i>Generate Report
            </a>
        </div>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Users</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Username</th>
                            <th>Email</th>
                            <!-- <th>Password</th> -->
                            <th>Mobile</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <?php
                                    foreach($user as $users) {
                                        ?>
                    <tr>
                        <td><?php echo $users['id'];?></td>
                        <td><?php echo $users['username'];?></td>
                        <td><?php echo $users['email'];?></td>
                        <!-- <td><?php echo $users['password'];?></td> -->
                        <td><?php echo $users['mobile'];?></td>

                        <td>
                            <center><a href='<?php echo base_url('admin/users/delete/'.$users['id']);?>'><i
                                        class='fas fa-trash'></i></a></center>
                        </td>
                    </tr>
                    <?php
                                    }
                                    ?>
                </table>
            </div>
        </div>
    </div>



</div>