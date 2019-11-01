<?php
    $hostname  =    "localhost";
    $username   =    "root";
    $password   =    "";
    $database   =    "networking_site";

    $connection =    mysqli_connect($hostname,$username,$password,$database);
    if(!$connection)
    {
        echo "ERROR DB Not Connect";die;
    }
?>