<?php 
    session_start();
?>
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
    <?php
        require_once('constant.php');
        require_once('connection.php');
    ?>
    <header>
        <div>
            <h1><?php echo LOGIN ?></h1>
        </div>
        <div class="loader">
        </div>
    </header>
    <main>
        <section>
            <div>
                <?php
                    if(!isset($_SESSION['user_id']) && empty($_SESSION['user_id']) )
                    { 
                ?>
                        <form id="loginform" method="post">
                            <div>
                                <label><?php echo EMAIL ?></label>
                                <input type="text" name="email" Required>
                            </div>
                            <div>
                                <label><?php echo PASSWORD ?></label>
                                <input type="password" name="password" Required>
                            </div>
                            <div>
                                <input type="submit" name="submit" value="Submit">
                            </div>
                        </form>
                        <div>
                            <a href="signup.php"><?php echo SIGNUP ?></a>
                        </div>  
                <?php
                    }
                ?>        
            </div>
        </section>
    </main>
    <footer>

    </footer>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script>
        $('#loginform').on('submit',function(e){
            
            $(".loader").show();
            
            e.preventDefault();

            var signup_data = {};

            $(this).find("input").each(function(){
                signup_data[$(this).attr("name")] = $(this).val(); 
            }) 

            $.ajax({
                url:"login_php.php",
                data:signup_data,
                type:"POST",
                dataType:"json",
                success:function(response)
                {
                    $(".loader").hide();
                    swal("", response.message, response.status)
                    .then(function(submit){
                        $("#loginform").trigger("reset");
                        window.location.replace("user_profile.php");
                    });
                }
            })             
        })

    </script>
</body>
</html>