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
        $status = 1;

        $students = [

                    "studentOne" => [
                        "name" => "Adnan",
                        "age" => "27",
                        "dob" => "20/nov/2019",
                        "status" => 1,
                    ],
                    "studentTwo" => [
                        "name" => "Sameer",
                        "age" => "40",
                        "dob" => "8/dec/2019",
                        "status" => 1,
                    ],
                    "studentThree" => [
                        "name" => "Amit",
                        "age" => "20",
                        "dob" => "5/oct/2019",
                        "status" => 1,
                    ], 
                    "studentFour" => [
                        "name" => "Adnan",
                        "age" => "27",
                        "dob" => "20/nov/2019",
                        "status" => 2,
                    ],
                    "studentFive" => [
                        "name" => "Sameer",
                        "age" => "40",
                        "dob" => "8/dec/2019",
                        "status" => 2,
                    ],
                    "studentSix" => [
                        "name" => "Amit",
                        "age" => "20",
                        "dob" => "5/oct/2019",
                        "status" => 2,
                    ], 
            
        ]
        foreach($students as $key => $value){
            echo "$value <br/>";
            
            if($value['status'] == $status){
               foreach ($value as $key => $valueTwo) {
                   echo "$valueTwo";
               }
            }
       }
    ?>
</body>
</html>