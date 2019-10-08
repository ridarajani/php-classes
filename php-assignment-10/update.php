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
    $array3 = [];
    if(isset($_COOKIE['student'])){
        $std_id         =  $_GET['std'];
        $decode         = base64_decode($_COOKIE['student']);
        $unserialize    = unserialize($decode);

        foreach( $unserialize[$std_id] as $val )
        {
            $array3[] .= $val;
        } 
    }
    ?>
    <form method="POST">
        <label>Student Name:</label>
        <input name="student_name" value="<?php echo $array3[0]; ?>" > 
        <label>Student Age:</label>
        <input name="student_age" value="<?php echo $array3[1]; ?>"> 
        <label>Student Number:</label>
        <input name="student_number" value="<?php echo $array3[2]; ?>"> 
        <input name="submit" value="submit" type="submit" > 
    </form>

    <?php 
    if(isset($_POST['submit'])){
        $decode = base64_decode($_COOKIE['student']);
        $unserialize = unserialize($decode);

        $array3[0] = $_POST['student_name'];
        $array3[1] = $_POST['student_age'];
        $array3[2] = $_POST['student_number'];


        $unserialize[$std_id] = $array3;
        $serialize = serialize($unserialize);
        $encode = base64_encode($serialize);
        setcookie('student',$encode,time()+60*60*24,"/");
    }
    ?>
</body>
</html>