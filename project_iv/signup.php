<?php
    include 'connect.php';
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(!empty($email) && !empty($password) ){

            $Checksql = "SELECT * FROM users WHERE email='$email'";
            $checkResult = mysqli_query($conn, $Checksql);
            $checkNum = mysqli_num_rows($checkResult);

            if($checkNum < 1){
                $sql ="INSERT INTO users(username, email, password)
                VALUE('$username', '$email', '$password')
                ";
                $result = mysqli_query($conn, $sql);
                header('location:login.php');
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
        
        <label for="username">Username</label><br>
        <input type="text" id="username" name="username" placeholder="username"><br>
        <label for="ph">phone number or email</label><br>
        <input type="text" id="ph" name="email" placeholder="please enter your email"><br>
        <label for="password">password</label><br>
        <input type="password" id="password" name="password" placeholder="please enter your password"><br><br>
        <input style="background-color: antiquewhite;" type="submit" name="submit" value="sign up">
        </div>
    </form>
</body>
</html>
