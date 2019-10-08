<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta Name="viewport" content="width=device-width, initial-scale=1.0">
    <meta Agep-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>PHP Assignment 4</h1>       
    </header>
    <main>
        <h2>sum</h2>

        <?php 

        function addition($val_1 , $val_2){
            $sum = $val_1 + $val_2;
            return $sum;
        }

        var_dump( addition(72 , 28)); 

        ?>
        
        <h2>is_array</h2>

        <?php
        
        function checkArray($array){

            $typeOfArray = gettype($array);
            if($typeOfArray === "array"){
                var_dump("true");
            }else {
                var_dump("false");
            }

        }
        checkArray("one");
        ?>

        <h2>array_key_exists</h2>

        <?php
            function keyexists($one){
                foreach($one as  $value){
                    if($value == "one"){
                        var_dump("true") ;
                   }
                }
            }
            keyexists(["one", "two", "three"]);
        ?>

    </main>
    <footer>
        <p>Prepared by : Rida Rajani</p>
    </footer>
</body>
</html>