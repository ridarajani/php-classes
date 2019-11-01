<?php 
    session_start();
?>
<?php
    require('connection.php');
    $alert = [];
    $error = false;
    if(isset($_POST['submit'])){

        $email      =   $_POST['email'];
        $password   =   md5($_POST['password']);

        if(!empty(trim($email)) && !empty(trim($password))){

            $select_query   =   "select id from users where email = '$email' and password = '$password' ";
            $result_set     =   mysqli_query($connection,$select_query);

            if(mysqli_num_rows($result_set)){

                $user_info              =   mysqli_fetch_assoc($result_set);

                $_SESSION['user_id']    =   $user_info['id'];
                $alert['status']        =   "success";
                $alert['message']       =   "Login Successfully";
                
            }
            else{
                $alert['status']    =   "error";
                $alert['message']   =   "Oops , Invalid Credentails!!";   
                $error              =   true;             
            }
        }
        echo json_encode($alert);
    }
?>
