<?php
    include 'connect.php';

    if(isset($_POST['submit'])){
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $dob = $_POST['dob'];
        $password = $_POST['password'];
       
        $sql = "INSERT INTO users(full_name, email, dob, password)
            VALUES('$full_name', '$email','$dob', '$password') ";
        $result = mysqli_query($conn, $sql);
        if($result == True){
          header("location:login_check.php");
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
    <title>signup page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>create your account</h2>
        <div class="div2">
          <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            <label for="FN">full name</label><br>
            <input type="text" name="full_name" id="FN"><br>
            <label for="ph">phone or email</label><br>
            <input type="text" name="email" id="ph"><br>
            <label for="Birthday">DOB</label><br>
            <input type="date" name="dob" id="Birthday"><br>
            <label for="password">password</label><br>
            <input type="password" name="password" id="password"><br><br>
            <input type="button" value="submit" name="submit">
            </form>
        </div>
   
</body>
</html>
