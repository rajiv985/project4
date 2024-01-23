<?php
    include 'connect.php';
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(!empty($email) && !empty($password) ){

            $sql = "SELECT * FROM users WHERE email='$email' AND password ='$password'";
            $result= mysqli_query($conn,$sql);

            if(mysqli_num_rows($result)>0){
            header("location:create.php");
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
    <style>
        *{
            margin:0px;
            padding:0px;
        }
        .container {
  background-color: #fff;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
  padding: 20px;
 text-align:center;
 padding:50px;
 margin:50px;
}
.login-form {
  display: flex;
  flex-direction: column;
}

h1 {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 20px;
  text-align: center;
}

input[type="text"],
input[type="password"] {
  padding: 10px;
  margin-bottom: 10px;
  border-radius: 3px;
  border: 1px solid #141414;
}

button {
  padding: 10px;
  background-color: #000000;
  color: #fff;
  border: none;
  border-radius: 3px;
  cursor: pointer;
}

button:hover {
  background-color: #14a07f;
}
</style>
</head>
<body>
    <div class="container">
    <h1>Fill Form</h1><br>
    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
        <label>Email:</label>
        <input type="text" name="email" value=''>
        <?php
        if(isset($_COOKIE['email'])){
            echo $_COOKIE('email');
        };
        ?>
        <br>
        <label>Password:</label>
        <input type="password" name="password">
        <?php
        if(isset($_COOKIE['password'])){
            echo $_COOKIE('password');
        };
        ?>
        <br>
        <input type="submit" name="submit" value="submit">
        
    </form>
</div>
    
</body>
</html>