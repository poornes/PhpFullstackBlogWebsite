<?php 
session_start();

if(!isset($_SESSION['auth'])){
    $_SESSION['message'] = 'Login to access the dashboard!';
    header('Location: ../login.php');
    exit(0);
}else {
    if($_SESSION['auth_role'] != '1') {
        $_SESSION['message'] = 'You are not Authorised to access the admin dashboard!';
        header("Location: ../index.php");
        exit(0);
    }
}


?>