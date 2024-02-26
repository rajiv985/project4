
<?php
include "connect.php";

if(isset($_GET['id'])){
    $a=$_GET['id'];
    $sql="DELETE FROM shoes WHERE sid='$a'";
    $result= mysqli_query($conn, $sql);
    if($result){
        echo'succs';
    }
    else{
        echo'nooooo';
    }
    header('location:read.php');
    exit;
}
else{
    echo'yehi';
}
    ?>



