<?php 

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "ajax";

    $connection = mysqli_connect($hostname,$username,$password,$database);
    if(!$connection)
    {
        echo DATABASE_ERROR;die;
    }
?>