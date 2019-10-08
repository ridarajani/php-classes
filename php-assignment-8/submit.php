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
require("data.php");
require("constant.php");

if (isset($_POST['Submit'])){
	$repeat = 1;

            foreach($credentials as $val){

                if($val['Email'] == $_POST['EmailAdd'] AND $val['Password'] == $_POST['Pass']){

					$repeat = 0;
					
                    foreach($information as $valTwo){

							$email		= 	$_SESSION['EmailAdd'] = $_POST['EmailAdd'];
							$password 	= 	$_SESSION['Pass'] = $_POST['Pass']; 

							$_SESSION['Name'] 			=	 	$valTwo['Name']; 
							$_SESSION['Age'] 			= 		$valTwo['Age']; 
							$_SESSION['PhoneNumber'] 	= 		$valTwo['PhoneNumber']; 


					    if($valTwo['Unique-id'] == $val['userInfo']){							
                            header("Location: profile.php");
                        }
                    }
				}
				if($repeat == 1 AND $val['Email'] !== $_POST['EmailAdd'] AND $val['Password'] !== $_POST['Pass']){
				echo INVALID;
					?>
					<a class="button-anchor" href="index.php">back to login page</a>
					<?php 

			}
			
		}
	}else{
		header("location: profile.php");
	}	

?>
</body>
</html>