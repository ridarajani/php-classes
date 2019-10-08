<?php
    require("connection.php");
?>
<?php 

    $create_query   =  "CREATE TABLE IF NOT EXISTS todo_list (
                            id INT PRIMARY KEY AUTO_INCREMENT , 
                            item TEXT NOT NULL,
                            status TEXT NOT NULL 
                        )";

    $mysqli_create  = mysqli_query($mysqli_connection , $create_query);
    
    if(!$mysqli_create){
        echo "Error :".mysqli_error($mysqli_connection);
        die;
    }
?>