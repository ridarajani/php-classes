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
    
    if(isset($_COOKIE['student'])){
        $std_id         = $_GET['std'];
        $decode         = base64_decode($_COOKIE['student']);
        $unserialize    = unserialize($decode);

        foreach($unserialize[$std_id] as $val )
        {
            echo $val.'<br>';
        } 
    }

    ?>
</body>
</html>