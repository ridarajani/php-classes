<?php

    $localhost   =   "localhost";
    $username    =   "root";
    $password    =   "";
    $database    =   "todo_list";

    $mysqli_connection   =   mysqli_connect($localhost,$username,$password,$database);

    if(!$mysqli_connection){
        echo "Error Code:".mysqli_connect_errno();
        echo "Error :".mysqli_connect_error();
        die;
    }
?>