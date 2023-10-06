<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url();?>/assets/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>User Login & Registration</title>

    <!-- Custom Styles -->
    <style type="text/css">
    body {
        font-family: 'Varela Round', sans-serif;
    }

    .custom-modal {
        color: #636363;
    }

    .custom-modal .modal-content {
        padding: 20px;
        border-radius: 5px;
        border: none;
    }

    .custom-modal .modal-header {
        border-bottom: none;
        position: relative;
    }

    .custom-modal h4 {
        text-align: center;
        font-size: 26px;
        /* margin: 30px 0 -15px;  */
        margin-top: 80px;
        margin-left: 155px
    }


    .custom-modal .form-control,
    .custom-modal .btn {
        min-height: 40px;
        border-radius: 3px;
    }


    .custom-modal .modal-footer {
        border: none;
        text-align: center;
        border-radius: 5px;
        font-size: 13px;
    }

    .custom-modal .icon-box {
        color: #fff;
        position: absolute;
        margin: 0 auto;
        left: 0;
        right: 0;
        top: -30px;
        width: 95px;
        height: 95px;
        border-radius: 50%;
        z-index: 9;
        background: #82ce34;
        padding: 15px;
        text-align: center;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
    }

    .custom-modal .icon-box i {
        font-size: 48px;
        position: relative;
        top: 9px;
    }

    .custom-modal .modal-dialog {
        margin-top: 80px;
    }

    .custom-modal .btn {
        color: #fff;
        border-radius: 4px;
        background: #82ce34;
        text-decoration: none;
        transition: all 0.4s;
        line-height: normal;
        border: none;
    }

    .custom-modal .btn:hover,
    .custom-modal .btn:focus {
        background: #6fb32b;
        outline: none;
    }

    .trigger-btn {
        display: inline-block;
        margin: 100px auto;
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
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">
                        Register Now
                    </div>
                    <div class="card-body">
                        <form method="POST" action="<?php echo base_url();?>frontend/registernow" >
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Name</label>
                                <input type="text" placeholder="User Name" name="username" class="form-control"
                                    id="name" aria-describedby="name">
                                <small><?php echo form_error('username'); ?></small>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" placeholder="Email Address" name="email" class="form-control"
                                    id="exampleInputEmail1" aria-describedby="emailHelp">
                                <small><?php echo form_error('email'); ?></small>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" name="password" placeholder="User Password" class="form-control"
                                    id="exampleInputPassword1">
                                <small><?php echo form_error('password'); ?></small>
                            </div>

                            <div class="text-center">
                                <button type="button" id="registerButton" class="btn btn-primary">Register Now</button>
                            </div>
                            <div class="text-center">
                                <a href="<?php echo site_url();?>/frontend/login">login </a>
                            </div>

                            <?php
                            if($this->session->flashdata('success')) {    ?>
                            <p class="text-success text-center" style="margin-top: 10px;">
                                <?=$this->session->flashdata('success')?></p>
                            <?php } ?>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    </body>
    </html>
    

   