<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    require("connection.php");
?>
    <form method="post">
        <input name="edit_task_input" type="text" value="Edit your task here" >
        <input name="edit-submit" type="submit" value="Add Task">
    </form>
    <?php
       if(isset($_REQUEST['edit-submit'])){

            $input        =  $_REQUEST['edit_task_input'];
            $update_id    = $_REQUEST['task_id'];
            
            $update_query = "update todo_list set item = '$input' where id = '$update_id' ";
            
            $mysqli_update  =  mysqli_query($mysqli_connection,$update_query);

            if(!$mysqli_update){
                echo "Error :".mysqli_error($mysqli_connection);
            }else{
                header("Location: index.php");
            }
       }
    ?>
</body>
</html>
