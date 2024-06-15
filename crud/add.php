<?php  
include("dbConn.php")
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
        <label for="fname">First Name</label>
        <input name=fname type="text" autocomplete="off">
        <br>
        <label>Last Name</label>
        <input name=lname type="text"autocomplete="off">
        <br>
        <label>Age</label>
        <input name=age type="number" autocomplete="off">
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>

<?php

if(isset($_POST['submit'])){
    $first_name=$_POST['fname'];
    $last_name=$_POST['lname'];
    $age=$_POST['age'];

    $sql="INSERT into students (first_name,last_name,age) values('$first_name','$last_name','$age')";
    $res=mysqli_query($conn,$sql);
    if($res){
        header('location:index.php');
    }
    else{
        die(mysqli_error($conn));
    }

}

?>

