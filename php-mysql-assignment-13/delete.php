<?php
    require("connection.php");
?>
<?php 

if(isset($_REQUEST['task_id'])){

    $delete_query = "delete from todo_list where id = ".$_REQUEST['task_id'];

    $mysqli_delete = mysqli_query($mysqli_connection,$delete_query);

    if(!$mysqli_delete){
        echo "Error :".mysqli_error($mysqli_connection);
    }else{
        header("Location: index.php");
    }
}
?>