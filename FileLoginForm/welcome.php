<?php  
session_start();
$name=$_SESSION['userid'];
echo "Welcome " .$name; 
?>
