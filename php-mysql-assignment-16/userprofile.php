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
    <a href="dashboard.php">dashboard</a>
    <?php
        require_once('connection.php');
    ?>
    <?php    
        $id     =   $_SESSION['userid'];

        $query      = "SELECT * FROM users WHERE id = '$id'"; 

        $result_set = mysqli_query($connection,$query);
        $information = mysqli_fetch_all($result_set,MYSQLI_ASSOC);

    ?>
       <div>
        <form method="post">
        <?php 
            foreach($information as $users_information)
            {
         ?> 
            <div>
                <label for="name">First Name</label>
                <input type="text" name="firstname" readonly="readonly" value="<?php echo $users_information['firstname']?>" >
            </div>
            <div>
                <label for="name">Last Name</label>
                <input type="text" name="lastname" readonly="readonly" value="<?php echo $users_information['lastname']?>" >
            </div>
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" readonly="readonly" value="<?php echo $users_information['name']?>" >
            </div>
            <div>
                <label for="name">Email</label>
                <input type="email" name="email" readonly="readonly" value="<?php echo $users_information['email']?>" >
            </div>
            <div>
                <label for="phone_number">Phone Number</label>
                <input type="number" readonly="readonly" name="phone_number" value="<?php echo $users_information['phone_number']?>">
            </div>
            <div>
                <label for="gender">Gender</label>
                <input type="text" readonly="readonly" name="gender" value="<?php echo $users_information['gender']?>">
            </div>     
        </form>
        <?php
                   }
                ?>

   
    <a href="logout.php">logout</a>
</body>
</html>