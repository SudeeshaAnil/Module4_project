<?php
$server="localhost";
$login="root";
$pass="";
$database="flowershop";

$con=mysqli_connect($server,$login,$pass,$database);
if(mysqli_connect_errno()){
	echo "Failed connect to MYSQL".mysqli_connect_error();
}
?>