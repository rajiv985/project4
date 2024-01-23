<?php
    include "connect.php";

    $sql = "
        CREATE TABLE users(
            id INT PRIMARY KEY AUTO_INCREMENT,
            full_name varchar(255) NOT NULL,
            email varchar(255),
            dob int,
            password varchar(255),
            reg_at DATETIME DEFAULT current_timestamp()
        )
    ";

    $result = mysqli_query($conn, $sql);
    if($result == True){
        echo "Table Created Successfully";
    }
    else{
        echo "Error in creating table";
    }
    mysqli_close($conn);
?>