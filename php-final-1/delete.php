<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="assets/css/style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<?php
    session_start();

    if(isset($_COOKIE['addtask'])){
        $delete       = $_GET['taskdelete'];
        $decode       = base64_decode($_COOKIE['addtask']);
        $Unserialized = unserialize($decode);

        array_splice($Unserialized,$delete,1);
        // unset($Unserialized[$_GET['taskdelete']]);
        
        $serialize    = serialize($Unserialized);
        $encode       = base64_encode($serialize);
        setcookie( 'addtask' , $encode , time() + 60*60*24 , "/" );
        header("Location: toDoList.php");
    }    
?>
</body>
</html>