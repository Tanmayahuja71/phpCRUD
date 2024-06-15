<?php
include("dbConn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Application CRUD</h2>
    <form action="add.php" method="post">
        <button><a href="add.php">Add User</a></button>
    </form>
    <table border="1">
        <thead>
            <th>ID</th>
            <th>First_name</th>
            <th>Last_name</th>
            <th>Age</th>
            <th colspan="2">Operations</th>
        </thead>
        <?php
            $query = "SELECT * FROM students";
            $res = mysqli_query($conn, $query);
            if (mysqli_num_rows($res) > 0) {
                while ($row = mysqli_fetch_assoc($res)) {
                    $id = $row['id'];
                    $first_name = $row['first_name'];
                    $last_name = $row['last_name'];
                    $age = $row['age'];
                    echo '<tr>
                    <td>'.$id.'</td>
                    <td>'.$first_name.'</td>
                    <td>'.$last_name.'</td>
                    <td>'.$age.'</td>
                    <td><button><a href="update.php?updateid='.$id.'">Update</a></button></td>
                    <td><button><a href="delete.php?deleteid='.$id.'">Delete</a></button></td>
                    </tr>';
                }
            }
        ?>
    </table>
</body>
