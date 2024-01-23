<?php
    include 'connect.php';
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        if(!empty($email) && !empty($password) ){
            
            $sql = "SELECT * FROM users WHERE email='$email' AND password ='$password'";
            $result= mysqli_query($conn,$sql);
            
            
            if(mysqli_num_rows($result)>0){
            header('location:homee.php');
            }
           }
          }
            ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>welcome! please login</h2>
    <form <?php $_SERVER['PHP_SELF']?>method= "POST" >
        <div class="div1">
        <label for="ph">phone number or email</label><br>
        <input type="text" id="ph" name="email" placeholder="please enter your email"><br>
        <label for="password">password</label><br>
        <input type="password" id="password" name="password" placeholder="please enter your password"><br><br>
        <input style="background-color: antiquewhite;" type="submit" name="submit" value="login">
        </div>
    </form>
</body>
</html>
