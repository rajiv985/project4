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
</head>
<body>
    <h2>use update form</h2>
      <form <?php $_SERVER['PHP_SELF']?>method= "POST" >
    <field set>
        <legend>shoes information:</legend>
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


 