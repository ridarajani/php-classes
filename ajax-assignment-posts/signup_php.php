<?php    
 require('connection.php');
 $error = false;
 $alert = [];

if(isset($_POST['submit']))
{
    $firstname          =           $_POST['first-name'];
    $lastname           =           $_POST['last-name'];
    $name               =           $_POST['name'];
    $gender             =           $_POST['gender'];
    $email              =           $_POST['email'];
    $password           =           md5($_POST['password']);
    $repassword         =           md5($_POST['re-password']);
    $number             =           $_POST['number'];

    if(!empty(trim($firstname)) && !empty(trim($lastname)) && !empty(trim($name))  && !empty(trim($email)) && !empty(trim($password))  )
    {
        if($password == $repassword)
        {
            
            $insert_query = "INSERT INTO users(FirstName , lastName , Name , Gender, Email, Password, Number) VALUES ('$firstname','$lastname','$name','$gender','$email','$password',$number)";
            $result_set = mysqli_query($connection,$insert_query);

                if($result_set)
                {
                    $alert["status"]  = "Success";
                    $alert["message"] = "Signup Successfully";
                }
                else
                {
                    $alert["status"]  = "Error";
                    $alert["message"] = "ERROR :".mysqli_error($connection);
                    $error = true;
                }
        }
        else
        {
            $alert["status"]  = "Error";
            $alert["message"] = "Please check your password."; 
            $error = true;
        }
    }
    else
    {
        $alert["status"]  = "Error";
        $alert["message"] = "Please submit your form";
        $error = true;
    } 
    echo json_encode($alert); 
}
?>