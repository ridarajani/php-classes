<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>PHP Assignment 2</h1>
    </header>
    <main>
        <h3>IF ELSE assignment</h3> 

        <h4>Create a mark sheet which can calculate 5 subject total marks, percentage, and grade (fail is %age is less than 40).</h4>

        <?php
        //assignment if elseif else

        //subject marks

            $botanyMarks = 80.52;
            $physicsMarks = 75.55;
            $mathsMarks = 66.98;
            $chemistryMarks = 36.99;
            $zoologyMarks = 74.25;
            $totalMarks = 500;

            echo "Botany = $botanyMarks";
            echo "<br/>";
            echo "Physics = $physicsMarks";
            echo "<br/>";
            echo "Maths = $mathsMarks";
            echo "<br/>";
            echo "Chemistry = $chemistryMarks";
            echo "<br/>";
            echo "Zoology = $zoologyMarks";
            echo "<br/>";

        // total marks

            $sum = $botanyMarks + $physicsMarks + $mathsMarks + $chemistryMarks + $zoologyMarks;

            echo "Total Marks = $sum ";
            echo "<br/>";
            echo "Out of $totalMarks";
            echo "<br/>";          

        // percentage

            $percentage = $sum / $totalMarks;
            $mulPer = $percentage*100;
            echo "Percentage $mulPer %" ;
            echo "<br/>"; 
                
        // grades

            if ($sum >= 400 ){
                echo "Grade A+";
            }elseif($sum >= 350 ){
                echo "Grade A";
            }elseif($sum >= 300 ){
                echo "Grade B";
            }elseif($sum >= 250){
                echo "Grade C";
            }elseif($sum >= 200){
                echo "Grade D";
            }else{
                echo "Grade F";
            }
        ?>
        
        <h3>SWITCH-CASE assignment</h3> 

        <h4>Create a mark sheet which can calculate 5 subject total marks, percentage, and grade (fail is %age is less than 40).</h4>

        <?php

        //assignment switch case
        
        //subject marks        

            $botanyMarks = 80.52;
            $physicsMarks = 75.55;
            $mathsMarks = 66.98;
            $chemistryMarks = 36.99;
            $zoologyMarks = 74.25;
            $totalMarks = 500;

            echo "Botany = $botanyMarks";
            echo "<br/>";
            echo "Physics = $physicsMarks";
            echo "<br/>";
            echo "Maths = $mathsMarks";
            echo "<br/>";
            echo "Chemistry = $chemistryMarks";
            echo "<br/>";
            echo "Zoology = $zoologyMarks";
            echo "<br/>";

        // total marks

            $sum = $botanyMarks + $physicsMarks + $mathsMarks + $chemistryMarks + $zoologyMarks;

            echo "Total Marks = $sum ";
            echo "<br/>";
            echo "Out of $totalMarks";
            echo "<br/>";          

        // percentage

            $percentage = $sum / $totalMarks;
            $mulPer = $percentage*100;
            echo "Percentage $mulPer %" ;
            echo "<br/>"; 
                
        // grades

            switch ($sum ){
                case ($sum >= 400):
                    echo "Grade A+";
                break;
                case ($sum >= 350):
                    echo "Grade A";
                break;
                case ($sum >= 300):
                    echo "Grade B";
                break;
                case ($sum >= 250):
                    echo "Grade C";
                break;
                case ($sum >= 200):
                    echo "Grade D";
                break;
                case ($sum >= 150):
                    echo "Grade F";
                break;
                default:
                    echo "sorry , we are unable to find your result.";
                break;
            }
        ?>

        <h3>For loop assignment</h3>      
          
        <h4>Create program to calculate factorial of a number.</h4>

        <?php
            // Assignments 1 (For Loop)
                $numberFive = 5;  
                $factorialNumber = 1;  

                for ($i = $numberFive; $i > 0; $i--)   
                {  
                    $factorialNumber *= $i;  
                }  
                echo "$numberFive! = is 5 * 4 * 3 * 2 * 1 = $factorialNumber";
        ?>

        <h4>Create a program to calculate the sum of first 10 natural numbers.</h4>

        <?php
            // Assignments 2 (For Loop)

                $firstNumber = 1;
                $lastNumber = 10;
                
                $sum = 0;
                for ($i = $firstNumber; $i <= $lastNumber; $i++) {

                    $sum += $i;
                }
                
                echo "1 + 2 + 3 + 4 + 5 + 6 + 7 + 8 + 9 + 10 = $sum";
        ?>

        <h3>While loop assignment</h3>      

        <h4>Create program to calculate factorial of a number.</h4>

        <?php

            // Assignments 1 (While Loop)
            $numberFive = 5;  
            $factorialNumber = 1; 
            $i = 5;
            while ($i > 0) {
                
                $factorialNumber *= $i;  
                $i--;
                
            } 
            echo "$numberFive! = is 5 * 4 * 3 * 2 * 1 = $factorialNumber";                
                
        ?>

        <h4>Create a program to calculate the sum of first 10 natural numbers.</h4>

        <?php
            // Assignments 2 (while Loop)

                $firstNumber = 1;
                $lastNumber = 10;
                $i = $firstNumber;
                $sum = 0;
                while ( $i <= $lastNumber) {

                    $sum += $i;
                    $i++;
                }
                
                echo "1 + 2 + 3 + 4 + 5 + 6 + 7 + 8 + 9 + 10 = $sum";
        ?>

    </main>
    <footer>
        <p>Prepared by : Rida Rajani</p>
    </footer>
</body>
</html>