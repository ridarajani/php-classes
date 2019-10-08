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
    session_start();
            $name       =   $_SESSION['Name']."<br>";
            $age        =   $_SESSION['Age']."<br>";
            $phonenum   =   $_SESSION['PhoneNumber']."<br>";

    ?>
   
                        <td><?php echo $name ?></td>
                        <td><?php echo $age ?></td>
                        <td><?php echo $phonenum ?></td>
        <div>
            <a class="button-anchor" href="logout.php">Logout</a>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>