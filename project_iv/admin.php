<?php
    include 'connect.php';
    if(isset($_POST['submit'])){
        $shoename = $_POST['shoename'];
        $brand = $_POST['brand'];
        $size= $_POST['size'];
        $color= $_POST['color'];
        $picture= $_POST['picture'];

                $sql ="INSERT INTO shoes(shoename,brand,size,color,picture)
                VALUE('$shoename', '$brand', '$size','$color','$picture')
                ";
                $result = mysqli_query($conn, $sql);
                if($result == True){
                    echo "Data Inserted Successfully";
                }else{
                    echo "Error in Inserting data";
                }
        
            }
        
            ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

</style>
<body>
    <h2>admin panal</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="div1">
        
        <label for="shoename">shoename</label><br>
        <input type="text" id="shoename" name="shoename" placeholder="enter shoename"><br>
        <label for="brand">brand</label><br>
        <input type="text" id="brand" name="brand" placeholder="enter brand"><br>
        <label for="color">color</label><br>
        <input type="text" id="color" name="color" placeholder="choose your color"><br>
        <label for="size">Choose a size:</label>
        <select name="size" id="size">
         <option value disabled required>"select size:"</option>
         <option value="31">31</option>
         <option value="32">32</option>
         <option value="33">33</option>
         </select><br>
        <label for="picture">Select a file:</label><br>
        <input type="file" id="picture" name="picture"><br>
         <input type="submit" name="submit" value="submit">
        <input type="reset" value="clear">
         
        </div>
    </form>
</body>
</html>