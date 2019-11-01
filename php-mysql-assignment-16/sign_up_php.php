<?php 
        require("connection.php");
    ?>
    <?php
    
    $error_to_show = [];
   
    if(isset($_POST['submit'])){
        
        $firstname      =   $_POST['firstname'];
        $lastname       =   $_POST['lastname'];
        $name           =   $_POST['name'];
        $email          =   $_POST['email'];
        $password       =   $_POST['password'];
        $check_password =   $_POST['check_password'];
        $phone_number   =   $_POST['phone_number'];
        $gender         =   $_POST['gender'];

        if(!empty(trim($firstname))&& !empty(trim($lastname)) && !empty(trim($name)) && !empty(trim($email)) && !empty(trim($password)) && !empty(trim($phone_number))){

            if($password == $check_password){

                $insert_query = "insert into users(firstname,lastname,name,email,password,phone_number,gender) values ('$firstname','$lastname','$name','$email','$password','$phone_number','$gender')";

                $insert_result = mysqli_query($connection,$insert_query);

                if( $insert_result)
                {
                    $error_to_show['status']   =  0;
                    $error_to_show['pop_up']   =  "Congrats!! You Signup SuccessFully";
                    
                }else
                {
                    $error_to_show['status']   =  1;
                    $error_to_show['pop_up']   = "Error :".mysqli_error($connection);    
                    
                }

            }else{
                $error_to_show['status']   =  1;
                $error_to_show['pop_up']   =  "Please check password";
                
            }
        }else{
            $error_to_show['status']   =  1;
            $error_to_show['pop_up']   =  "Please submit your form.";
            
        }
        echo json_encode($error_to_show);
    }
    ?>