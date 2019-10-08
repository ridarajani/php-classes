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
    <?php
        session_start();
        require_once("constant.php");
    ?>
    <header>
        <div class="heading">
            <h1 class="heading-login"><?php echo LOGIN ?></h1>
        </div>
    </header>
    <main>
    <?php
        if(!isset($_SESSION['user_id'])){
            ?>
            <div class="index-form">
                <form class="login-form" method="post" action="submit.php">
                    <div class="email-div">       
                        <div class="email-label-div">
                            <label><?php echo EMAIL_LABEL ?></label>  
                        </div>
                        <div class="input-email-div">
                            <input class="email" type="email" name="EmailAdd">
                        </div>                      
                    </div>
                    <div class="pass-div">
                        <div class="pass-label-div">
                            <label><?php echo PASSWORD_LABEL ?></label>
                        </div>    
                        <div class="input-pass-div">
                            <input class="pass" type="password" name="Pass">    
                        </div>    
                    </div>
                    <div>
                        <span style="color:red"><?php echo ( isset($_SESSION['error']) ? $_SESSION['error'] : '' ); ?></span>
                    </div>
                    <div class="submit-button">
                        <input class="button" type="submit" name="Submit" value="Submit">
                    </div>
                </form>
            </div>
            
            <?php    
        }elseif(isset($_SESSION['EmailAdd']) && isset($_SESSION['Pass'])){
            header("location: submit.php");
            echo ERROR;
        }
    ?>
    </main>
    <footer>
    </footer>
</body>
</html>