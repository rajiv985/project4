<?php 
    include "connect.php";
    $sql = "SELECT * FROM shoes";
    $result = mysqli_query($conn, $sql);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>shoe details</title>
</head>
<style>
    table,tr,th,td{
        border:1px solid black ;
        border-collapse:collapse;
    }
    </style>
<body>
    <h2>shoe details</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>shoename</th>
                <th>brand</th>
                <th>size</th>
                <th>color</th>
                <th>picture</th>
                <th>date</th>
            </tr>
        </thead>
<?php 
    if(mysqli_num_rows($result)>0)
    {
        while($row = mysqli_fetch_assoc($result)){
?>
        <tbody>
            <tr>
                <td><?php echo $row['sid']; ?></td>
                <td><?php echo $row['shoename']; ?></td>
                <td><?php echo $row['brand']; ?></td>
                <td><?php echo $row['size']; ?></td>
                <td><?php echo $row['color']; ?></td>
                <td><?php echo $row['picture']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td>
                <a href="update.php?id=<?php echo $row['sid']; ?>">Edit</a>
                <a href="delete.php?id=<?php echo $row['sid']; ?>">Delete</a>
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


