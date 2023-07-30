<?php 
    $host = '127.0.0.1:3307';
    $username = 'root@';
    $password = '';
    $database = 'search_ai';

    $con = mysqli_connect($host,$username, $password, $database);

    if(!$con){
        header("Location: ../errors/dberror.php");
        exit(0);
    }
?>