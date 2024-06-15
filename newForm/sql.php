<?php

$sql = "CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
)";

  $db_server="localhost";
    $db_user="root";
    $db_password="";
    $db_name="newData";
    $conn="";
    try{
        $conn=mysqli_connect( $db_server,$db_user,$db_password,$db_name);
    }
    catch(mysqli_sql_exception){
        echo "Database is not connected <br>";
    }
    if($conn){
        echo "Database is Successfully connected <br>";
        header('Location:index.php');
    }

?>

