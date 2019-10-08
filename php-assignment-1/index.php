<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>PHP Assignment 1</h1>
    <h3>Swap the values of two variables without using a temporary (third) variable.</h3>
    <?php

        //assignment 1

        $a = 15;
        $b = 27;

        $a = $a + $b;  
        $b = $a - $b;  
        $a = $a - $b;

        echo $a . ' , ' . $b;
    ?>
    <h3>Perform addition/subtraction of two string type variables.</h3>
    <?php    

        //assignment 2

        $productOne = "200productOne";
        $productTwo = "100productTwo";

        settype($productOne , "integer");
        settype($productTwo , "integer");
        
        $totalProduct = $productOne + $productTwo;
        echo $totalProduct ;
    ?>
    <p>Prepared by : Rida Rajani</p>
</body>
</html>