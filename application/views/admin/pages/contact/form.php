<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"> Add Contact_Us</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                <input type='hidden' value="<?php echo $users_data[0]['id'];?>" name='id' />
                <input type='hidden' name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name='username' id="username" placeholder=" Enter Name"
                        class='form-control' />
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name='email' id="email" placeholder=" Enter Email" class='form-control' />
                </div>
                <div class="form-group">
                    <label>Phone_no</label>
                    <input type="tel" name='mobile' id="mobile" placeholder=" Enter Phone Number"
                        class='form-control' />
                </div>
                <div class="form-group">
                    <label>subject</label>
                    <input type="text" name='subject' id="subject" placeholder=" Enter Subject"
                        class='form-control' />
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <input type="message" name='message' id="message" placeholder=" Enter Message"
                        class='form-control' />
                </div>
                
                <input type="submit" name="submit" class="btn btn-primary" value="submit">
            </form>

        </div>
    </div>



</div>