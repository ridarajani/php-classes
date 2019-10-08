<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body class="indexbody">
    <header>
    </header>
    <main>
        <?php
            session_start();
            require_once("constant.php"); 
        ?>
        <?php 
            $task = [];
            if(isset($_COOKIE['addtask'])){
                $edit  = $_GET['taskedit'];
                $decode = base64_decode($_COOKIE['addtask']);
                $unserialize = unserialize($decode);
                foreach ($unserialize[$edit] as $value) {
                   $task[] .= $value;
                }
            }
        ?> 
            <div class="edit-form-div">
                <form class="edit-form" method="post">
                    <div class="edit-div">
                        <label><?php echo EDIT ?></label>
                    </div>    
                    <div class="edit-div-field">
                        <input class="edit-field" type="text" name="todotask" value="<?php echo $task[0];?>">
                    </div>
                    <div class="button-edit-div">
                        <input class="edit-button" type="submit" name="addtask" value="Edit Task" >
                    </div>
                </form>
            </div>
        <?php
         if(isset($_POST['addtask'])){
            $decode = base64_decode($_COOKIE['addtask']);
            $unserialize = unserialize($decode);
            $task[0] = $_POST['todotask'];
            $unserialize[$edit] = $task;
            $serialize = serialize($unserialize);
            $encode = base64_encode($serialize);
            setcookie( 'addtask' , $encode , time() + 60*60*24 , "/" );
        }
        ?>    
    </main>
    <footer>
    </footer>

</body>
</html>
