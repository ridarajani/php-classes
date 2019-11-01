<?php
    require("connection.php");
?>
<?php 

if(isset($_REQUEST['id'])){

    $delete_query = "delete from posts where id = ".$_REQUEST['id'];

    $mysqli_delete = mysqli_query($connection,$delete_query);

    if(!$mysqli_delete){
        echo "Error :".mysqli_error($connection);
    }else{
        header("Location: dashboard.php");
    }
}
?>