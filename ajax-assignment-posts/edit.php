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
      
        <input name="edit_Post" type="text" placeholder="edit product post" >
        <input name="edit-submit" type="submit" value="Edit Post">
    </form>
    <?php
       if(isset($_REQUEST['edit-submit'])){

            $edit_post        = $_REQUEST['edit_Post'];
            
            
            $update_query = "update posts set post = '$edit_post'  where id = ".$_REQUEST['id'];
            
            $mysqli_update  =  mysqli_query($connection,$update_query);

            if(!$mysqli_update){
                echo "Error :".mysqli_error($connection);
            }else{
                header("Location: dashboard.php");
            }
       }
    ?>
    <div>
        <p>Prepared by : Rida Rajani</p>
    </div>
</body>
</html>
