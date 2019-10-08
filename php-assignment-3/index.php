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
        <h1>PHP Assignment 3</h1>
    </header>
    <main>
        <table>
            <?php
                $status = 1;
                $students = [
                            
                            [
                                "Name" => "Sameer",
                                "Age" => "40",
                                "DateOfBirth" => "8/dec/2019",
                                "Status" => "1",
                            ],
                            [
                                "Name" => "Amit",
                                "Age" => "20",
                                "DateOfBirth" => "5/oct/2019",
                                "Status" => "1",
                            ], 
                            [
                                "Name" => "Adnan",
                                "Age" => "27",
                                "DateOfBirth" => "20/nov/2019",
                                "Status" => "2",
                            ],
                            [
                                "Name" => "Sam",
                                "Age" => "40",
                                "DateOfBirth" => "8/dec/2019",
                                "Status" => "2",
                            ],   
                ];
            ?>
            <thead>
                <tr>
                    <?php    
                        foreach($students[0] as $key => $value){
                        ?>   
                    <th>
                            <?php 
                                print_r ($key);
                            ?>
                    </th>
                    <?php 
                        }
                    ?>
                </tr>
         </thead>
        <tbody>
            <?php
                foreach ($students as $key => $value){
                        ?>
                        <tr>
                            <?php
                                foreach ($value as $keyTwo => $valueTwo){
                                    ?>
                                        <td>
                                            <?php
                                                $ALLStudents = ($value['Status'] == $status) ? "$valueTwo" : "";
                                                echo $ALLStudents;
                                            ?>
                                        </td>
                                    <?php
                                }
                            ?>
                        </tr>
                        <?php
                        }
                    ?>
        </tbody>
    </table>
    </main>
    <footer>
        <p>Prepared by : Rida Rajani</p>
    </footer>
</body>
</html>