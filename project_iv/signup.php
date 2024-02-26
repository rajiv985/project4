<?php
    include 'connect.php';
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $signupsucc = false; // Sign Up Successfully

        if(!empty($email) && !empty($password) && !empty($username) ){

            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $sql = "SELECT * FROM users WHERE email='$email'";
                $result = mysqli_query($conn, $sql);
            
                if (mysqli_num_rows($result) != 0) {
                    echo "*Email already exists. Try another one.";
                }
                    else {  
                        $pattern = '/^[A-Z].*\d.*$/';

                        if (preg_match($pattern, $password)) {

                            $sql ="INSERT INTO users(username, email, password)
                            VALUE('$username', '$email', '$password')
                            ";
                             $result = mysqli_query($conn, $sql);
                             if ($result) {
                                $signupsucc = true; // Sign Up Successfully
                                header('location:login.php');
                                exit;
                            }
                        }else {
                            echo "*Password must be 6 characters with one uppercase letter and one number.";
                        }
                    } 
                    }
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
    <h2>welcome! please signup</h2>
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
