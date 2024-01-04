<?php
session_start();

// include('admin/pages/config.php');

// if($dbconfig)
// {

// }
// else
// {
//     header("Location:admin/pages/config.php ");
// }

if (!$_SESSION['first_name'])
{
    header("Location:admin/login.php");
}
?>