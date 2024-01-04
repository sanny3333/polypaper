<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url();?>/assets/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>User Login & Registration</title>

    <style>
    span {
        position: absolute;
        right: 15px;
        transform: translate(0, -50%);
        top: 50%;
        cursor: pointer;
        margin-top: 51px;
        margin-right: 12px;
    }

    .fa {
        font-size: 20px;
        color: #7a797e;
    }
    </style>
</head>

<body>

    <section class="page-header">
        <div class="page-header-bg"
            style="background-image: url(<?php echo base_url();?>/assets/images/backgrounds/backimage3.jpg)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Login</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="<?php echo site_url();?>/frontend/index">Home</a></li>
                    <li>Login</li>
                </ul>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        Login Now
                    </div>
                    <div class="card-body">
                        <form id='login-form' action="<?php echo base_url();?>Frontend/loginnow" method="post">

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Username</label>
                                <input type="text" placeholder="Enter Email or Username" name="username"
                                    class="form-control" id="username" aria-describedby="emailHelp" required />
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword" class="form-label">Password</label>
                                <input type="password" name="password" placeholder="User Password" class="form-control"
                                    id="password" required />
                                <span>
                                    <i class="fa fa-eye" aria-hidden="true" id="eye" onclick="toggle()"></i>
                                </span>
                            </div>

                            <div class="text-center">
                                <button type="submit" id="login-btn" class="btn btn-primary">Login Now</button>
                            </div>
                            <div class="text-center">
                                <a href="<?php echo site_url();?>/frontend/registration">Sign Up</a>
                            </div>

                            <?php if (isset($error)) : ?>
                            <p id="errortext" style="text-align:center;" class="text-success"><?php echo $error; ?></p>
                            <?php endif; ?>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
var state = false;

function toggle() {
    if (state) {
        document.getElementById("password").setAttribute("type", "password");
        document.getElementById("eye").style.color = '#7a797e';
        state = false;
    } else {
        document.getElementById("password").setAttribute("type", "text");
        document.getElementById("eye").style.color = '#5887ef';
        state = true;
    }
}
</script>
<script>
    let base_url = "<?php echo base_url()?>";

    $(document).ready(function() {
        $('#login-form').submit(function(e) {
            e.preventDefault();
            var username = $('#username').val();
            var password = $('#password').val();

            $.ajax({
                type: 'POST',
                url: base_url + 'frontend/loginNow',
                data: {
                    username: username,
                    password: password
                },
                success: function(response) {
                    response = JSON.parse(response);
                    if (response.status) {
                        alert("login success");
                        window.location.href = "http://localhost/polypaper";
                    } else {
                        alert("login error");
                        console.log("error");
                    }
                },
                error: function() { // Corrected the placement of the error function
                    toastr.error('An error occurred during login', 'Error');
                }
            });
        });
    });
</script>


</html>