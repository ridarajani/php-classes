<?php
    require("connection.php");
?>
<?php 

$id = $_SESSION['user_id'];
$query = "delete from users where id = $id";

?>