<div class="container-fluid">
    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-2 text-gray-800"> Users Table</h1> -->
    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Admin Table</h1>
        <div class="d-flex">
            <a href="<?php echo base_url();?>report/reportadmin"
                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="margin-left: 10px;">
                <i class="fa-sm text-white-50"></i>Generate Report
            </a>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Admin</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>First_name</th>
                            <th>Last_name</th>
                            <th>Email</th>
                            <!-- <th>password</th> -->
                            <th>Rloe</th>
                            <th>Acount_status</th>
                            <th>Action</th>


                        </tr>
                    </thead>
                    <?php
                                    foreach($admin as $admint) {
                                        ?>
                    <tr>
                        <td><?php echo $admint['id'];?></td>
                        <td><?php echo $admint['first_name'];?></td>
                        <td><?php echo $admint['last_name'];?></td>
                        <td><?php echo $admint['email'];?></td>
                        <!-- <td><?php echo $admint['password'];?></td> -->
                        <td><?php echo $admint['role'];?></td>
                        <td><?php echo $admint['account_status'];?></td>


                        <td>
                            <center><a href='<?php echo base_url('admin/admint/delete/'.$admint['id']);?>'><i
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