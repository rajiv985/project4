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
    <style>
    table, tr, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    th, td {
        padding: 10px;
    }
    th {
        background-color: #f2f2f2;
    }
    .form-group {
        margin-bottom: 20px;
    }
    .form-group label {
        display: block;
        margin-bottom: 5px;
    }
    .form-group input[type="text"], .form-group input[type="file"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
        box-sizing: border-box;
    }
    .form-group input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }
    .form-group input[type="submit"]:hover {
        background-color: #45a049;
    }
    .form-group input[type="reset"] {
        background-color: #f44336;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }
    .form-group input[type="reset"]:hover {
        background-color: #f35a4b;
    }
</style>
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




