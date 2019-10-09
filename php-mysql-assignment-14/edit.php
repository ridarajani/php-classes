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
        <input name="edit_name" type="text" placeholder="edit product name" >
        <input name="edit_color" type="text" placeholder="edit product color" >
        <input name="edit_price" type="text" placeholder="edit product price" >
        <input name="edit-submit" type="submit" value="Add Task">
    </form>
    <?php
       if(isset($_REQUEST['edit-submit'])){

            $edit_name        = $_REQUEST['edit_name'];
            $edit_color        = $_REQUEST['edit_color'];
            $edit_price        = $_REQUEST['edit_price'];
            
            $update_query = "update products set product_name = '$edit_name' , color = '$edit_color' , price = '$edit_price' where id = ".$_REQUEST['id'];
            
            $mysqli_update  =  mysqli_query($connection,$update_query);

            if(!$mysqli_update){
                echo "Error :".mysqli_error($connection);
            }else{
                header("Location: index.php");
            }
       }
    ?>
    <div>
        <p>Prepared by : Rida Rajani</p>
    </div>
</body>
</html>
