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
        require('constant.php');
        function depositamount($useramount ,$balanceamount){
            $deposit = $useramount + $balanceamount;
            $current = $deposit + $balanceamount;
            echo BALANCE.$current."<br>";
            echo DEPOSIT.$deposit;   
        }
        function withdrawamount($useramount ,$balanceamount){
            $five = floor($useramount / 5000);
            $thousand = floor(($useramount - ($five*5000)) / 1000);
            $hundred = floor(($useramount - ($five*5000)) / 500);
            $withdarw = WITHDRAW." 5000 * ".$five." 1000 * ".$thousand ."500 * " .$hundred;
             $withbalance = $withdarw - $balanceamount;
            echo BALANCE.$withbalance."<br>";
            echo  $withdarw;

        
        }
        function balanceamount($useramount ,$balanceamount){
            echo BALANCE.$balanceamount;
        }
        if(isset($_POST['submit'])){ 
            if($_POST['select'] == "deposit") {
                depositamount($_POST['amount'] , 5000 );
            } 
            elseif($_POST['select'] == "Withdraw"){
                withdrawamount($_POST['amount'] , 5000 );
            }
            elseif($_POST['select'] == "balance"){
                balanceamount($_POST['amount'] , 5000 );
            }
            
        }
    ?>
    <form method="post">
        <div>
            <label>enter your amount</label>
            <input value="" type="number" name="amount">
        <div>
        <div>
            <input type="radio" name="select" value="Withdraw">Withdraw
            <input type="radio" name="select" value="deposit">deposit
            <input type="radio" name="select" value="balance">balance
        </div>
        <input value="submit" type="submit" name="submit">
        </div>
    </form>
</body>
</html>