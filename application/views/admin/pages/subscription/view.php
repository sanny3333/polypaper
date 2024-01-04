<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Subscription Table</h1>
        <div class="d-flex">
            <a href="<?php echo base_url();?>report/reportsubscription"
                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="margin-left: 10px;">
                <i class="fa-sm text-white-50"></i>Generate Report
            </a>
        </div>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Subscribers</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Email</th>
                            <th>Is_sibscribed</th>
                            <th>Created_at</th>
                            <th>Action</th>


                        </tr>
                    </thead>
                    <?php
                                    foreach($subscriptions as $subscription) {
                                        ?>
                    <tr>
                        <td><?php echo $subscription['id'];?></td>
                        <td><?php echo $subscription['email'];?></td>
                        <td><?php echo $subscription['is_subscribed'];?></td>
                        <td><?php echo $subscription['created_at'];?></td>


                        <td>
                            <center><a href='<?php echo base_url('admin/subscribe/delete/'.$subscription['id']);?>'><i
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