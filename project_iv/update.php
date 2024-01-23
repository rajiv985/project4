<?php
    include 'connect.php';

    if(isset($_POST['update'])){
        $user_id = $_POST['user_id'];
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
    }

    $sql = "
    UPDATE users SET full_name= '$full_name', email = '$email', password='$password' , gender='$gender';

    $result = mysqli_query($conn, $sql);
    if($result == True){
        echo "Records updated Successfully";
  header('location:read.php');
    }
    else{
        echo"error:"
    }
}
if (isset($_GET['id'])){
    $user_id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id="$user_id";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            while($row=mysql_fetch_assoc($result)){
                $full_name = $row['full_name'];
                $email = $row['email'];
                $password = $row['password'];
                $gender = $row['gender']; 
                $id=$row['id'];
            }
        }
    }
?>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fill Form</title>
</head>
<body>
    <h2>use update form</h2>
    <form action ="<?php echo $_SERVER[PHP_SELF];
    ?>" method="POST">
    <field set>
        <legend>personal information:</legend>
        <label>Full Name:</label>
        <input type="text" name="full_name"><br>
        <br>
        <label>Email:</label>
        <input type="text" name="email"><br>
        <br>
        <label>Password:</label>
        <input type="password" name="password"><br>
        <br>
        <label>Gender</label>
        <input type="radio" name="gender" value="Male"
        <?php if($gender=='Male'){
            echo"checked";
        }
        ?>>
        Male<br><br>
        <input type="radio" name="gender" value="Female"
        <?php if($gender=='Female'){
            echo"checked";
        }
        ?>>
        female<br><br>
        <input type="radio" name="gender" value="Others"
        <?php if($gender=='Others'){
            echo"checked";
        }
        ?>>
        Others<br><br>
        <input type="submit" name="submit" value="submit">
    </field set>
    </form>
    </div>
    </body>
    </html>


 