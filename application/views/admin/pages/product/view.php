<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Product Table</h1>
        <div class="d-flex">
            <a href="<?php echo base_url();?>admin/product/add"
                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class=" fa-sm text-white-50"></i>Add Product
            </a>
            <a href="<?php echo base_url();?>report/reportproduct"
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
            <h6 class="m-0 font-weight-bold text-primary">Products</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <!-- <th>Product_id</th> -->
                            <th>Image</th>
                            <th>P_name</th>
                            <th>P_descri</th>
                            <th>Gsm</th>
                            <th>Coating</th>
                            <th>Color</th>
                            <th>Status</th>
                            <th>Action</th>


                        </tr>
                    </thead>
                    <?php
                                    foreach($products as $product) {
                                        ?>
                    <tr>
                        <!-- <td><?php echo $product['product_id'];?></td> -->
                        
                        <td><img style="max-width: 100%; max-height: 100vh; margin: auto;" class="rounded-4 fit"
                            src="<?php echo base_url('assets/images/product/'.$product['image']);?>" /></td>
                        <td><?php echo $product['p_name'];?></td>
                        <td><?php echo $product['p_descri'];?></td>
                        <td><?php echo $product['gsm'];?></td>
                        <td><?php echo $product['coating'];?></td>
                    
                        <td><?php echo $product['color'];?></td>
                        <td><?php echo $product['status'];?></td>


                        <td>
                            <center><a href='<?php echo base_url('admin/product/delete/'.$product['id']);?>'><i
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