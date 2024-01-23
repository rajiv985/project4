<?php
include "connect.php";
if(isset($_GET['id']))
{
    $delete_id=$_GET['id'];
    $sql="DELETE FROM users id='$delete_id'";
    $result= mysqli_query($conn,$sql);
    if($result){
        echo "deleted sucessfully";
    }else
    {
        echo"error in delete";
    }
    
}