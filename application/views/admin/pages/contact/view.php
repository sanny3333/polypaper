<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Contact Table</h1>
        <div class="d-flex">
            <a href="<?php echo base_url();?>admin/contact/add"
                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class=" fa-sm text-white-50"></i>Add Contact
            </a>
            <a href="<?php echo base_url();?>report/reportcontact"
                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="margin-left: 10px;">
                <i class="fa-sm text-white-50"></i>Generate Report
            </a>
        </div>
    </div>
    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Contacts</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone_no</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Created_at</th>
                            <th>Action</th>


                        </tr>
                    </thead>
                    <?php
                                    foreach($contacts as $contact) {
                                        ?>
                    <tr>
                        <td><?php echo $contact['id'];?></td>
                        <td><?php echo $contact['name'];?></td>
                        <td><?php echo $contact['email'];?></td>
                        <td><?php echo $contact['phone_no'];?></td>
                        <td><?php echo $contact['subject'];?></td>
                        <td><?php echo $contact['message'];?></td>
                        <td><?php echo $contact['created_at'];?></td>


                        <td>
                            <center><a href='<?php echo base_url('admin/contact/delete/'.$contact['id']);?>'><i
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