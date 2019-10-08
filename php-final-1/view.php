<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body class="indexbody">
    <?php   
        require_once("constant.php");
            if(isset($_COOKIE['addtask'])){
                $edit  = $_GET['viewdelete'];
                $decode = base64_decode($_COOKIE['addtask']);
                $unserialize = unserialize($decode);
                foreach ($unserialize[$edit] as $value) {
                    ?>
                        <div class="view-task">
                            <div class="view">
                                <p><?php echo VIEW ?></p>
                            </div>    
                            <div class="task">
                                <p><?php 
                                        echo $value;
                                        break;
                                    ?></p>
                                
                            </div>
                        </div>
                    <?php
                }
            }
    ?>
</body>
</html>