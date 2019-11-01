<?php 
    session_start();
?>
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
        require("connection.php");
    ?>
    <?php 

        if(isset($_POST['submit']))
        {
            $email      = $_POST['email'];    
            $password   = $_POST['password']; 
            
            $select_query      = "select id from users where email = '$email' and password = '$password' "; 
            $select_result = mysqli_query($connection,$select_query);
             
            if( mysqli_num_rows($select_result) > 0  )
            {
                
              $id_user = mysqli_fetch_assoc($select_result);
            
              $_SESSION['userid'] = $id_user['id'];

            }else
            {
                echo "Credentails is wrong.";
            }


        }

    if(!isset($_SESSION['userid']) && empty($_SESSION['userid']) )
    { 
        
    ?>
    <div>
        <h1>Login form</h1>
    </div>
    <div>
        <form id="login_form" method="post">
            <div>
                <label>Email:</label>
                <input type="email" name="email" required>
            </div>
            <div>
                <label>Password:</label>
                <input type="password" name="password" required>
            </div>
            <div>
                <input type="submit" value="Submit" name="submit">
            </div>
        </form>
    </div>
    <div>
        <a href="signupform.php">Sign Up</a>
    </div>
    <?php 
    }else{
        header("Location: userprofile.php");
    } 
     ?>
    <div>
        <p>Prepared by : Rida Rajani</p>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    <script>
        // $("#login_form").on('submit',function(event){

        //     event.preventDefault();

        //     formData = {};

        //     $(this).find("input").each(function(i,v){ 
        //         formData[$(this).attr("name")] = $(this).val();
        //     }) ;  

        //     $.ajax({
        //         type: "POST",
        //         url: "index.php",
        //         data: formData,
        //         cache: false,
        //         success: function(html) {
        //             if(response=="success")
        //             {
        //                 $("#login_form").trigger("reset");
        //                 window.location.href="userprofile.php";
        //             }
        //             }
        //         });
        //     }) 
    </script>
</body>
</html>