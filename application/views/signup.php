<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url();?>/assets/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>User Login & Registration</title>
  </head>
  <body>

  	
  <section class="page-header">
            <div class="page-header-bg" style="background-image: url(<?php echo base_url();?>/assets/images/backgrounds/backimage3.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Registration</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="<?php echo site_url();?>/frontend/index">Home</a></li>
                        <li class="active">Registration</li>
                    </ul>
                </div>
            </div>
        </section>

		<div class="container">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<div class="card" style="margin-top: 30px">
					  <div class="card-header text-center">
					    Register Now
					  </div>
					  <div class="card-body">
					   <form method="POST"  action="<?php echo base_url();?>frontend/registernow">
					    	
					   <div class="mb-3">
						    <label for="exampleInputEmail1" class="form-label">Name</label>
						    <input type="text" placeholder="User Name" name="username" class="form-control" id="name" aria-describedby="name" required>
						    
						  </div>
						  <div class="mb-3">
						    <label for="exampleInputEmail1" class="form-label">Email address</label>
						    <input type="email"  placeholder="Email Address" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
						 	
						  </div>
						  <div class="mb-3">
						    <label for="exampleInputEmail1" class="form-label">Phone Number</label>
						    <input type="number"  placeholder="Phone Number" name="phoneno" class="form-control" id="exampleInputPhone1" aria-describedby="emailHelp" required>
						 	
						  </div>
						  <div class="mb-3">
						    <label for="exampleInputPassword1" class="form-label">Password</label>
						    <input type="password" name="password"  placeholder="Password"  class="form-control" id="exampleInputPassword1" required>
							
						  </div>
						  <div class="mb-3">
						    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
						    <input type="password" name="confirmpassword"  placeholder="Confirm Password"  class="form-control" id="exampleInputPassword1" required>
							
						  </div>


						 <div class="text-center">
						  <button type="submit" class="btn btn-primary">Register Now</button>
						</div>
						 <div class="text-center">
						  <a href="<?php echo site_url();?>/frontend/login">login </a>
						</div>

						<?php if ($this->session->flashdata('error')) {
						 echo $this->session->flashdata('error');
						}?>
						
						</form>
					  </div>
					</div>
				</div>
				<div class="col-md-4"></div>
			</div>
		</div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
