<?php
include("dbConn.php");
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
}
$sql="DELETE from students where id=$id";
$res=mysqli_query($conn,$sql);
if($res){
   header("location:index.php");
}
?>