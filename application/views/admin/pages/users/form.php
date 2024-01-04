<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"> Add User</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                <input type='hidden' value="<?php echo $users_data[0]['id'];?>" name='id' />
                <input type='hidden' name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name='username' id="username" placeholder=" Enter Username"
                        class='form-control' />
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name='email' id="email" placeholder=" Enter Email" class='form-control' />
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name='password' id="password" placeholder=" Enter Password"
                        class='form-control' />
                </div>
                <div class="form-group">
                    <label>Mobile</label>
                    <input type="tel" name='mobile' id="mobile" placeholder=" Enter Mobile Number"
                        class='form-control' />
                </div>
                <input type="submit" name="submit" class="btn btn-primary" value="submit">
            </form>

        </div>
    </div>



</div>