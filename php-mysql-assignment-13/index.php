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
        require("database_tables.php");
        require("delete.php");
    ?>
    <?php 
        if(isset($_REQUEST['add-task-submit'])){

            $task           =   $_REQUEST['add-task-input'];
            $insert_query   =   "INSERT INTO todo_list(item,status) VALUES ('$task',1)";

            $mysqli_insert  =   mysqli_query($mysqli_connection, $insert_query);

            if(!$mysqli_insert){
                echo "Error :".mysqli_error($mysqli_connection);
                die;
            }
        }
    ?>

    <form method="post">
        <input name="add-task-input" type="text">
        <input name="add-task-submit" type="submit" value="Add Task">
    </form>

    <?php 
        $select_query  =  "SELECT * from todo_list ";

        $list_task     = mysqli_query($mysqli_connection,$select_query);

        $task_todo     = mysqli_fetch_all($list_task,MYSQLI_ASSOC); 
        
    ?>
    <table>
        <thead>
            <tr>
                <th>Task</th>
                <th>Status</th>
            </tr>
        </thead>   
        <tbody>
                <?php
                    foreach ($task_todo as $task_added) {
                ?>
                <tr>
                    <td><?php echo $task_added['item'] ?></td>
                    <td><?php echo $task_added['status'] == 1 ? "Pending" :  "Done" ?></td>
                    <td><a href="delete.php?task_id=<?php   echo $task_added['id']; ?>">Delete</a></td>
                    <td><a href="edit.php?task_id=<?php   echo $task_added['id']; ?>">Edit</a></td>
                    <td><a href="status.php?task_id=<?php   echo $task_added['id']; ?>">Status</a></td>
                </tr>    
                <?php
                    }
                ?>    
        </tbody>     
    </table>
</body>
</html>