<?php
    require("connection.php");
?>
<?php 

if(isset($_REQUEST['task_id'])){

    $status_query = "update todo_list set status = 2 where id = ".$_REQUEST['task_id'];

    $mysqli_status = mysqli_query($mysqli_connection,$status_query);

    if(!$mysqli_status){
        echo "Error :".mysqli_error($mysqli_connection);
    }else{
        header("Location: index.php");
    }
}
?>