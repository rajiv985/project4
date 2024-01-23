<?php 
    include "connect.php";
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>View Data</title>
</head>
<body>
    <h2>User List</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Registration Data</th>
                <th>Action</th>
            </tr>
        </thead>
<?php 
    if(mysqli_num_rows($result)>0)
    {
        while($row = mysqli_fetch_assoc($result)){
?>
        <tbody>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['full_name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['gender']; ?></td>
                <td><?php echo $row['reg_at']; ?></td>
                <td>
                    <a href="update.php?id=<?php echo $row['id'];?>">Edit</a>
                    <a href="delete.php?id=<?php echo $row['id'];?>"> Delete</a>
                </td>
            </tr>
        </tbody>

        <?php
        }
    }
    else{
        echo "No Data Present in Database";
    }

?>
    </table>
</body>
</html>


