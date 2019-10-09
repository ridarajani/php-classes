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

    if(isset($_POST['submit'])){
        $error = false;
        $name           =   $_POST['name'];
        $email          =   $_POST['email'];
        $password       =   $_POST['password'];
        $check_password =   $_POST['check_password'];
        $phone_number   =   $_POST['phone_number'];

        if(!empty(trim($name)) && !empty(trim($email)) && !empty(trim($password))){

            if($password == $check_password){

                $insert_query = "insert into users(name,email,password,phone_number) values ('$name','$email','$password','$phone_number')";

                $insert_result = mysqli_query($connection,$insert_query);

                if( $insert_result)
                {
                    echo "Congrats!! You Signup SuccessFully";
                }else
                {
                    echo "Error :".mysqli_error($connection);
                    $error = true;
                }

            }else{
                echo "Please submit your form.";
                $error = true;
            }
        }else{
            echo "Please submit your form.";
            $error = true;
        }
    }
    ?>
    <div>
        <form method="post">
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
               <input type="submit" name="submit" value="Submit">
            </div>
        </form>
    </div>
    <div>
        <a href="index.php">Login</a>
    </div>
    <div>
        <p>Prepared by : Rida Rajani</p>
    </div>
</body>
</html>