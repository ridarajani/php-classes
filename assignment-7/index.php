<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ATM</title>
</head>
<body>
    <?php
        require('constant.php');
    ?>
    <header>
        <h1>ATM</h1>
    </header>
    <main>
        <?php 

            $balance = 50000;
            function deposit($getBalance , $userInput ){
                global $balance;
                if($userInput > 0){
                    $balance = $getBalance - $userInput;
                    echo DEPOSIT.$userInput."<br/>";
                    echo BALANCE.$balance;
                }
            }
            function withdraw($getBalance , $userInput){
                global $balance;
                if($userInput > 0){

                    $fiveThousand = $oneThousand = $hundred = 0;

                    $fiveThousand = floor($userInput / 5000);
                    $userInput -= $fiveThousand*5000;

                    $oneThousand = floor($userInput / 1000);
                    $userInput -= $oneThousand*1000;

                    $hundred = floor($userInput / 500);
                    $userInput -= $hundred*500;

                    $balance = $getBalance + $userInput;
                    
                    echo WITHDRAW."5000 * ".$fiveThousand." 1000 * ".$oneThousand." 500 * ".$hundred."<br/>";
                    echo BALANCE.$balance;
                }
            }
            function balance($getBalance , $userInput){
                global $balance;
                $balance = $getBalance;
                echo BALANCE.$balance;
            }

            if(isset($_POST['submit'])){
                if($_POST['radio'] == "deposit"){
                    deposit($_POST['balance'] , $_POST['amount'] ); 
                }
                elseif($_POST['radio'] == "withdraw"){
                    withdraw($_POST['balance'] , $_POST['amount']);
                }
                elseif($_POST['radio'] == "balance"){
                    balance($_POST['balance'] , $_POST['amount']);
                }
            }
            

        ?>
        <form method="post">
            <div>
                <label>Enter Your Amount</label>
                <input name="amount" type="number" value="">
            </div>
            <div>
                <input name="radio" type="radio" value="deposit">deposit
            </div>
            <div>
                <input name="radio" type="radio" value="withdraw">withdraw
            </div>
            <div>
                <input name="radio" type="radio" value="balance">balance
            </div>
            <div>
                <input name="balance" type="hidden" value="<?php echo $balance ?>">
                <input name="submit" type="submit" value="submit">
            </div>
        </form>
    </main>
    <footer>
        <p>Prepared by : Rida Rajani.</p>
    </footer>
</body>
</html>