<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <div>
            <h1>Registration form</h1>
        </div>
    </header>
    <main>
        <?php 
            require("connection.php");
        ?>
        <?php 

            $error = false;

            if(isset($_POST['submit']))
            {
                $firstname             =       $_POST['firstname'];
                $lastname              =       $_POST['lastname'];
                $username              =       $_POST['username'];
                $email                 =       $_POST['email'];
                $password              =       $_POST['password'];
                $conformpassword       =       $_POST['conformpassword'];
                $number                =       $_POST['contactnumber'];
                $gender                =       $_POST['gender'];
         
                if(!empty(trim($firstname)) && !empty(trim($lastname)) && !empty(trim($username)) && !empty(trim($email)) && !empty(trim($password)) && !empty(trim($number)) &&!empty($gender) ){

                    if($password  ==  $conformpassword){

                        $query = "insert into user_registration(firstname,lastname,username,email,password,phonenumber,gender) values('$firstname','$lastname','$username','$email','$password','$conformpassword','$number','$gender')";
         
                        $result_set = mysqli_query($connection,$query);
         
                        if($result_set){
                             echo "Signup SuccessFully";
                        }else
                        {
                            echo "ERROR :".mysqli_error($connection);
                            $error = true;
                        }
                    }else{
                        echo "Check your password.";
                        $error = true;
                    }
                }else{
                    echo "Please submit your form.";
                    $error = true;
                }
            }
        ?>
        <form id="form" method="post">
            <div>
                <label for="firstName">First Name *</label>
                <input type="text" name="firstname" required>
            </div>
            <div>
                <label for="lastName">Last Name *</label>
                <input type="text" name="lastname" required>
            </div>
            <div>
                <label for="UserName">User Name *</label>
                <input type="text" name="username" required>
            </div>
            <div>
                <label for="Email">Email *</label>
                <input type="email" name="email" required>
            </div>
            <div>
                <label for="Password">Password *</label>
                <input type="password" name="password" required>
            </div>
            <div>
                <label for="ConformPassword">Conform Password *</label>
                <input type="password" name="conformpassword" required>
            </div>
            <div>
                <label for="ContactNumber">Contact Number *</label>
                <input type="number" name="contactnumber" required>
            </div>
            <div>
                <label for="Gender">Gender *</label>
                <input type="radio" name="gender" value="Female" required>Female
                <input type="radio" name="gender" value="Male" required>Male
                <input type="radio" name="gender" value="Others" required>Others
            </div>
            <div>
                <input id="submitButton" type="submit" name="submit" value="submit" required>
            </div>
        </form>
    </main>
</body>
</html>