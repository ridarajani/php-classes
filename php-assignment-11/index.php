<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="assets/css/style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <header>
        <h1 class="heading-login">Login Form</h1>
    </header>
    <main>
    <?php

    session_start();
    if(!isset($email) && !isset($password)){
        ?>
          <form class="login-form" method="post" action="submit.php">
                <div>                       
                    <input value="Email" class="email" type="email" name="EmailAdd">
                </div>
                <div>
                    <input value="Password" class="pass" type="password" name="Pass">
                </div>
                <div>
                    <input class="button" type="submit" name="Submit" value="Submit">
                </div>
            </form>
        <?php    
    }else{
        header("location: submit.php");
    }
?>
          
    </main>
    <footer>
    </footer>
</body>
</html>