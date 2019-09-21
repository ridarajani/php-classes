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
     if(isset($_POST['submit'])){
       foreach($_POST as  $hhh){
            echo $hhh;   
       }
     }   
    ?> 
    <form method="post">
        <input name="firstName">
        <input name="secondName">
        <input type="radio" name="gender" value="male">male
        <input type="radio" name="gender" value="female">female
        <select name="city">
            <option value="Karachi">Karachi</option>
            <option value="Islamabad">Islamabad</option>
            <option value="Lahore">Lahore</option>
            <option value="Hyderabad">Hyderabad</option>
        </select>
        <input type="checkbox" name="skill1" value="Bike"> bike
        <input type="checkbox" name="skill2" value="Car">car
        <input type="checkbox" name="skill3" value="Boat" checked> boat
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>