<?php
$cookie_name="last-visited";
if(isset($_COOKIE[$cookie_name])){
    $last_visited=$_COOKIE[$cookie_name];
}
else{
    $last_visited="This is Your First Visit";
}
echo "Last Visited on this site is ".$last_visited;
$current_time=date("Y-m-d H:i:s");
setcookie($cookie_name,$current_time,time()+(86400*30));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome Back</h1>
    <p>Your last visit was on : <?php echo $last_visited?></p>
</body>
</html>