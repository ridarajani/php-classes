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
        <input name="add-task-input" type="text">
        <input name="add-task-submit" type="submit" value="Add Task">
    </form>

    <?php
        if(isset($_REQUEST['add-task-submit'])){

            $input = $_POST['add-task-input'];

            $status_query = "update todo_list set item = '$input' where id = ".$_REQUEST['task_id'];
        
            $mysqli_status = mysqli_query($mysqli_connection,$status_query);
        
            if(!$mysqli_status){
                echo "Error :".mysqli_error($mysqli_connection);
            }else{
                header("Location: index.php");
            }
        }
    ?>    
</body>
</html>