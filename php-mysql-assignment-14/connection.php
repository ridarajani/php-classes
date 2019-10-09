<?php 
$localhost  =   "localhost";
$username   =   "root";
$password   =   "";
$database   =   "my_inventory";

$connection =  mysqli_connect($localhost,$username,$password,$database); 

if(!$connection)
{
    echo "ERROR DB Not Connect";die;
}
?>