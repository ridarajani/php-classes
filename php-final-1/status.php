
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
    session_start();

    if(isset($_COOKIE['addtask'])){ 

            $decode = base64_decode($_COOKIE['addtask']);
            $unserialize = unserialize($decode);
            $statusChange = $_GET['taskstatus'];
            $unserialize[$statusChange]['status'] = 2;


            $serialize = serialize($unserialize);
            $encode = base64_encode($serialize);
            setcookie( 'addtask' , $encode , time() + 60*60*24 , "/" );
        
        header("location: toDOLIST.php");
    }
?>
</body>
</html>