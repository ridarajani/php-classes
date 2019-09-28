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
$hide  = true;			
$repeat = 1;
if (isset($_POST['Submit'])){
	$hide = false;
        $information = [
                                [
                                    "Unique-id" => 001,
                                    "Name" => "Sheruj",
                                    "Age" => 5,
                                    "PhoneNumber" => "021254555454"
                                ],
                                [
                                    "Unique-id" => 002,
                                    "Name" => "Aariz",
                                    "Age" => 4,
                                    "PhoneNumber" => "033554564864"
                                ],
                            ];
        $credentials=[
                            [
                                "unique-id" => 001,
                                "Email" => "test@example.com",
                                "Password" => "000000",
                                "userInfo" => 02
                            ],
                            [
                                "unique-id" => 002,
                                "Email" => "testtwo@example.com",
                                "Password" => "111111",
                                "userInfo" => 01
                            ]
						];
			
            foreach($credentials as $val){
                if($val['Email'] == $_POST['EmailAdd'] AND $val['Password'] == $_POST['Pass']){
					$repeat = 0;
                    foreach($information as $valTwo){
					    if($valTwo['Unique-id'] == $val['userInfo']){
                            echo "Name = ".$valTwo['Name']."</br>";
                            echo "Age = ".$valTwo['Age']."</br>";
                            echo "Phone No. = ".$valTwo['PhoneNumber']."</br>";
                        }
                    }
				}	
			}
			if ($repeat == 1) {
				$hide = true;
				echo "Invalid Email or Password";
			}
		}
		if($hide){
			?>
    <form method="post">
        <div>
            <label for="UserEmail">Email Address</label>
            <input type="email" name="EmailAdd">
        </div>
        <div>
            <label for="Password">Password</label>
            <input type="password" name="Pass">
        </div>
        <div>
        <input type="submit" name="Submit" value="Submit">
        </div>
    </form>
	<?php 
	};
	?>
    <p>Prepared by : Rida Rajani</p>
</body>
</html>