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
	$error = true;
	if (isset($_POST['Submit'])){			
				foreach($credentials as $val){
					if($val['Email'] == $_POST['EmailAdd'] AND $val['Password'] == $_POST['Pass']){
						$_SESSION['user_id'] = $val['userInfo'];
						header("Location: toDOLIST.php");
						break;
					}elseif($error){
						$_SESSION['error'] = ERROR;
						header("Location: index.php");
					}
			}
	}

?>
</body>
</html>