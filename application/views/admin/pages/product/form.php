<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"> Add Product</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                <input type='hidden' value="<?php echo $users_data[0]['product_id'];?>" name='product_id' />
                <input type='hidden' name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
                <div class="form-group">
                    <label>Product Image</label>
                    <input type="file" name='product image' id="product image" placeholder=" Select product image"
                        class='form-control' />
                </div>
                <div class="form-group">
                    <label>P_name</label>
                    <input type="text" name='p_name' id="p_name" value="<?php echo $users_data[0]['p_name'];?>" placeholder=" Enter product name" class='form-control' />
                </div>
                <div class="form-group">
                    <label>P_descri</label>
                    <input type="text" name='P_descri' id="P_descri" placeholder=" Enter product description"
                        class='form-control' />
                </div>
                <div class="form-group">
                    <label>Gsm</label>
                    <input type="text" name='gsm' id="gsm" placeholder=" Enter gsm"
                        class='form-control' />
                </div>
                <div class="form-group">
                    <label>Coating</label>
                    <input type="text" name='coating' id="coating" placeholder=" Enter coating type"
                        class='form-control' />
                </div>
                <div class="form-group">
                    <label>Packaging</label>
                    <input type="text" name='packaging' id="packaging" placeholder=" Enter packaging type"
                        class='form-control' />
                </div>
                <div class="form-group">
                    <label>color</label>
                    <input type="text" name='color' id="color" placeholder=" Enter color"
                        class='form-control' />
                </div>
                
                <input type="submit" name="submit" class="btn btn-primary" value="submit">
            </form>

        </div>
    </div>



</div>