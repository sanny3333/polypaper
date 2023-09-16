<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<section class="page-header">
            <div class="page-header-bg" style="background-image: url(<?php echo base_url();?>/assets/images/backgrounds/backimage3.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Login</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="<?php echo site_url();?>/frontend/index">Home</a></li>
                        <li class="active">Login</li>
                    </ul>
                </div>
            </div>
        </section>


    
<?php 
if($this->session->userdata('UserLoginSession'))
{

    $udata = $this->session->userdata('UserLoginSession');
    echo 'Welcome'.' '.$udata['username'];

}
else
{
    redirect(base_url('index.php/frontend/login'));
}
?>

<div>
Welcome to Dashboard
 <a href="<?=base_url('index.php/Frontend/logout')?>">Logout</a>




</div>

</body>
</html>

