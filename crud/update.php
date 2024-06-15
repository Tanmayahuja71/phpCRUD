<?php
include("dbConn.php");
$id=$_GET['updateid'];
$sql="SELECT * from students where id=$id";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);
$first_name=$row['first_name'];
$last_name=$row['last_name'];
$age=$row['age'];
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
        <input name=fname type="text" autocomplete="off" value=<?php echo $first_name; ?>>
        <br>
        <label>Last Name</label>
        <input name=lname type="text"autocomplete="off" value=<?php  echo $last_name;?> >

        <br>
        <label>Age</label>
        <input name=age type="number" autocomplete="off" value=<?php echo $age; ?>>
        <br>
        <button type="submit" name="submit">Update</button>
    </form>
</body>
</html>

<?php

if(isset($_POST['submit'])){
    $first_name=$_POST['fname'];
    $last_name=$_POST['lname'];
    $age=$_POST['age'];

    $sql="UPDATE students set first_name='$first_name',last_name='$last_name' ,age='$age' where id=$id";
    $res=mysqli_query($conn,$sql);
    if($res){
        header('location:index.php');
        echo "ho gya kya update?";
    }
    else{
        die(mysqli_error($conn));
    }

}

?>

