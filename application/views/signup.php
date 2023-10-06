<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url();?>/assets/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <title>User Login & Registration</title>

    <style>
    @media only screen and (max-width: 500px) {
        .g-recaptcha {
            transform: scale(0.77);
            transform-origin: 0 0;
        }
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
                <h2>Registration</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="<?php echo site_url();?>/frontend/index">Home</a></li>
                    <li>Registration</li>
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
                        Register Now
                    </div>
                    <div class="card-body">
                        <form id="signup-form" action="<?php echo base_url();?>frontend/registernow" method="post">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Name</label>
                                <input type="text" placeholder="User Name" name="username" class="form-control"
                                    id="name" aria-describedby="name" pattern="[a-zA-Z]*" required maxlength="20" required
                                    minlength="3" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" placeholder="Email Address" name="email" class="form-control"
                                    id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputMobile" class="form-label">Mobile Number</label>
                                <input type="text" placeholder="Mobile Number" name="mobile" class="form-control"
                                    id="exampleInputMobile" pattern="[6789][0-9]{9}" required maxlength="10" required
                                    minlength="10" title="Please enter valid phone number" required>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" name="password" placeholder="User Password" class="form-control"
                                    id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required minlength="8"
                                    required>
                                <small style="font-size:15px">Please Use at least 8 characters(uppercase and lowercase)
                                    &amp; symbol</small>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputConfirmPassword" class="form-label">Confirm Password</label>
                                <input type="password" name="confirm_password" placeholder="Confirm Password"
                                    class="form-control" id="confirm_password" required minlength="8" required>
                            </div>
                            <div>
                                <div class="mb-3">
                                    <div class="g-recaptcha" data-sitekey="6LdJVnooAAAAAI2jrv3ERhFEvViMcGzBI42C96sw"
                                    ></div>
                                </div>
                                <div class="mb-3 position-relative">
                                <label class="form-check-label" for="form2Example3">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" required>
                                    I agree all statements in <a href="#!"><u>Terms of service</u></a>
                                </label>
                            </div>

                            <div class="text-center">
                                <button type="submit" value="submit" class="btn btn-primary">Register Now</button>
                            </div>
                            <div class="text-center">
                                <a href="<?php echo site_url();?>/frontend/login">login </a>
                            </div>

                        </form>
                        <script>
                        document.getElementById("signup-form").addEventListener("submit", function(evt) {

                            var response = grecaptcha.getResponse();
                            if (response.length == 0) {
                                //reCaptcha not verified
                                alert("please verify you are humann!");
                                evt.preventDefault();
                                return false;
                            }
                            //captcha verified
                            //do the rest of your validations here

                        });
                        </script>
                        <script>
                        function checkname(str) {
                            return /\d/.test(str);
                        }

                        function validateform() {
                            var name = document.forms["signup-form"]["username"].value;

                            if (name == "") {
                                displayErrorMessage("name-error", "Name is required.");
                                return false;
                            }
                            if (name == (name)) {
                                displayErrorMessage("name-error", "Only alphabets Allowed.");
                                return false;
                            }
                        }
                        var password = document.getElementById("password"),
                            confirm_password = document.getElementById("confirm_password");

                        function validatePassword() {
                            if (password.value != confirm_password.value) {
                                confirm_password.setCustomValidity("Passwords Don't Match");
                            } else {
                                confirm_password.setCustomValidity('');
                            }
                        }
                        password.onchange = validatePassword;
                        confirm_password.onkeyup = validatePassword;
                        </script>

                        <script type="text/javascript">
                        base_url = '<?php echo base_url(); ?>';
                        $(document).ready(function() {
                            $('#signup-form').submit(function(event) {
                                event.preventDefault();

                                $.ajax({
                                    url: '<?php echo base_url('storevalue'); ?>',
                                    data: $('#signup-form').serialize(),
                                    type: 'post',
                                    async: false,
                                    dataType: 'json',
                                    success: function(response) {
                                        // alert('Success');

                                    },
                                    error: function() {
                                        alert('Error');
                                    }
                                });
                            });
                        });
                        </script>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    </div>




    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>