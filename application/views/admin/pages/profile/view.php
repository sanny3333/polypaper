<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Profile</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                <input type='hidden' value="<?php echo $users_data[0]['id'];?>" name='id' />
                <input type='hidden' name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
                <div class="form-group">
                    <label><strong>First Name</strong></label>
                    <input type="text" name='first_name' value="<?php echo $users_data[0]['first_name'];?>" id="first_name" placeholder=" Enter First Name"
                        class='form-control' />
                </div>
                <div class="form-group">
                    <label><strong>Last Name</strong></label>
                    <input type="text" name='last_name' value="<?php echo $users_data[0]['last_name'];?>" id="last_name" placeholder=" Enter Last Name"
                        class='form-control' />
                </div>
                <div class="form-group">
                    <label><strong>Email</strong></label>
                    <input type="email" name='email' value="<?php echo $users_data[0]['email'];?>" id="email" placeholder=" Enter Email" class='form-control' />
                </div>
                <div class="form-group">
                    <label><strong>Password</strong></label>
                    <input type="password" name='password' value="<?php echo $users_data[0]['password'];?>" id="password" placeholder=" Enter Password"
                        class='form-control' />
                </div>
                <div class="form-group">
                    <label><strong>Role</strong></label>
                    <input type="text" name='role' value="<?php echo $users_data[0]['role'];?>" id="role" placeholder=" Enter Your Role"
                        class='form-control' />
                </div>
                <input type="submit" name="submit" class="btn btn-primary" value="Edit">
            </form>
        </div>
    </div>
</div>
