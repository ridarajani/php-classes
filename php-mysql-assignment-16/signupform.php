<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php require("sign_up_php.php") ?>
    <div>
        <form id="submit_form" method="post">
            <div>
                <label for="name">First Name</label>
                <input type="text" name="firstname" required>
            </div>
            <div>
                <label for="name">Last Name</label>
                <input type="text" name="lastname" required>
            </div>
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" required>
            </div>
            <div>
                <label for="name">Email</label>
                <input type="email" name="email" required>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" required>
            </div>
            <div>
                <label for="check_password">Check Password</label>
                <input type="password" name="check_password" required>
            </div>
            <div>
                <label for="phone_number">Phone Number</label>
                <input type="number" name="phone_number">
            </div>
            <div>
                <label for="gender">Gender</label>
                <input type="radio" name="gender" value="female">Female
                <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="others">Others
            </div>
            <div>
               <input type="submit" name="submit" value="Submit">
            </div>
        </form>
    </div>
    <div>
        <a href="index.php">Login</a>
    </div>
    <div class="loader" style="position: fixed;left: 0px;top: 0px;width: 100%;height: 100%;z-index: 9999;text-align: center;background:         url('http://themirchievous.consulnet.net/assets/images/loader-2.gif') center no-repeat #fff; opacity:0.25;display:none;">
        
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
       
        <script>
            // $("form").on("submit",function(e){
    
            //     $(".loader").show();
     
            //         e.preventDefault();
            //         var obj = {};
            //             $(this).find("input").each(function(){
            //             obj[$(this).attr("name")] = $(this).val(); 
            //         }) 
            //         $.ajax({
            //             url:"sign_up_php.php",
            //             data:obj,
            //             type:"POST",
            //             dataType:"json",
            //             success:function(response){
            //                 $(".loader").hide();
            //                 swal("", response.pop_up, response.status)
            //                 .then(function(e){
            //                     $("form").trigger("reset");
            //                 });    
            //             }
            //         }) 
            // })
            
        </script>
    
    <div>
        <p>Prepared by : Rida Rajani</p>
    </div>
</body>
</html>