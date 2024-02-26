<?php
    include 'connect.php';

    if(isset($_POST['submit'])){
        $shoename = $_POST['shoename'];
        $brand = $_POST['brand'];
        $size = $_POST['size'];
        $color = $_POST['color'];
        $picture = $_POST['picture'];
        
    $sql = "
    UPDATE shoes SET shoename= '$shoename', brand = '$brand', size='$size' , color='$color',picture='$picture'";

    $result= mysqli_query($conn,$sql);
    if($result == True){
        echo 'updated Successfully';
  header('location:read.php');
    }
    else{
        echo"error:";
    }
}
if (isset($_GET['sid'])){
    $sid = $_GET['sid'];
    $sql = "SELECT * FROM shoes WHERE sid='$sid'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            while($row=mysql_fetch_assoc($result)){
                $shoename = $row['shoename'];
                $brand = $row['brand'];
                $size = $row['size'];
                $color = $row['color'];
                $picture = $row['picture']; 
                $sid=$row['sid'];
            }
        }
    }
?>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fill form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            box-sizing: border-box;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }
        input[type="file"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        input[type="reset"] {
            background-color: #f44336;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        input[type="reset"]:hover {
            background-color: #f35a4b;
        }
    </style>
</head>
<body>
      <form <?php $_SERVER['PHP_SELF']?>method= "POST" >
    <field set>
        <h2>shoes information:</h2>
        <label>shoe Name:</label>
        <input type="text" name="shoename"><br>
        <br>
        <label>brand:</label>
        <input type="text" name="brand"><br>
        <br>
        <select name="size" id="size">
         <option value disabled required>"select size:"</option>
         <option value="31">31</option>
         <option value="32">32</option>
         <option value="33">33</option>
         </select><br>        
         <label>color</label>
        <input type="text" name="color">
        <label>picture</label>
        <input type="file" name="picture">
        <input type="submit" name="submit" value="submit">
    </field set>
    </form>
    </div>
    </body>
    </html>


 