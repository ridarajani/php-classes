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
        require_once("constant.php");
    ?>
    <header>
        <div>
            <h1><?php echo SIGNUP ?></h1>
        </div>
        <div class="loader">
        </div>
    </header>
    <main>
        <section>
            <div>
                <form id="signup_form" method="post">
                    <div>
                        <label><?php echo FIRST_NAME ?></label>
                        <input type="text" name="first-name" Required>
                    </div>
                    <div>
                        <label><?php echo LAST_NAME ?></label>
                        <input type="text" name="last-name" Required>
                    </div>
                    <div>
                        <label><?php echo USER_NAME ?></label>
                        <input type="text" name="name" Required>
                    </div>
                    <div>
                        <label><?php echo GENDER ?></label>
                        <input type="radio" name="gender" value="male" Required>Male
                        <input type="radio" name="gender" value="female" Required>Female
                        <input type="radio" name="gender" value="others" Required>Others
                    </div>
                    <div>
                        <label><?php echo EMAIL ?></label>
                        <input type="text" name="email" Required>    
                    </div>
                    <div>
                        <label><?php echo PASSWORD ?></label>
                        <input type="password" name="password" Required>
                    </div>
                    <div>
                        <label><?php echo CONFIRM_PASSWORD ?></label>
                        <input type="password" name="re-password" Required>
                    </div>        
                    <div>
                        <label><?php echo PHONE_NUMBER ?></label>
                        <input type="number" name="number">
                    </div>        
                    <div>
                        <input type="submit" name="submit" value="Submit">
                    </div>
                </form>
            </div>
            <div>
                <a href="index.php"><?php echo LOGIN ?></a>
            </div>
        </section>    
    </main>
    <footer>
    </footer> 

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
   
    <script>
        $("#signup_form").on("submit",function(submit){

            $(".loader").show();

                submit.preventDefault();

                    var signup_data = {};

                    $(this).find("input").each(function(){
                        signup_data[$(this).attr("name")] = $(this).val(); 
                    }) 

                    $.ajax({
                        url:"signup_php.php",
                        data:signup_data,
                        type:"POST",
                        dataType:"json",
                        success:function(response)
                        {
                            $(".loader").hide();
                            swal("", response.message, response.status)
                            .then(function(submit){
                                $("form").trigger("reset");
                            });
                        }
                    })  
        })
    </script>
</body>
</html>