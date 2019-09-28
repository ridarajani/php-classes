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
                $status = "Active";
                $students = [
                            [
                                "Name" => "Adnan",
                                "Age" => "27",
                                "DateOfBirth" => "20/nov/2019",
                                "Status" => "Active",
                            ],
                            [
                                "Name" => "Sami",
                                "Age" => "15",
                                "DateOfBirth" => "9/feb/2019",
                                "Status" => "Active",
                            ],
                            [
                                "Name" => "Shahzain",
                                "Age" => "19",
                                "DateOfBirth" => "19/feb/2019",
                                "Status" => "Active",
                            ],
                            [
                                "Name" => "Sameer",
                                "Age" => "40",
                                "DateOfBirth" => "8/dec/2019",
                                "Status" => "Active",
                            ],
                            [
                                "Name" => "Amit",
                                "Age" => "20",
                                "DateOfBirth" => "5/oct/2019",
                                "Status" => "Active",
                            ], 
                            [
                                "Name" => "Adnan",
                                "Age" => "27",
                                "DateOfBirth" => "20/nov/2019",
                                "Status" => "Inactive",
                            ],
                            [
                                "Name" => "Sameer",
                                "Age" => "40",
                                "DateOfBirth" => "8/dec/2019",
                                "Status" => "Inactive",
                            ],
                            [
                                "Name" => "Amit",
                                "Age" => "20",
                                "DateOfBirth" => "5/oct/2019",
                                "Status" => "Inactive",
                            ], 
                            [
                                "Name" => "Moiz",
                                "Age" => "13",
                                "DateOfBirth" => "5/oct/2019",
                                "Status" => "Inactive",
                            ], 
                            [
                                "Name" => "Zaid",
                                "Age" => "45",
                                "DateOfBirth" => "5/oct/2019",
                                "Status" => "Inactive",
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