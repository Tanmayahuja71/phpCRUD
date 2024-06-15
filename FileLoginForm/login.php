<?php
session_start();
$userid="TanmayAhuja";
$pass="12345";
if(isset($_POST["button"])){
    if($_POST['userid']==$userid && $_POST['password']==$pass){
        $_SESSION['userid']=$userid;
        header("location:welcome.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="userid">
        <input type="password" name="password">
        <input type="submit" name="button" value="Submit">
    </form>
</body>
</html>