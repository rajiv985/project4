
<?php
include "connect.php";
if(isset($_GET['sid']))
{
    $delete_id=$_GET['sid'];
    $sql="DELETE FROM shoes WHERE sid='$delete_id'";
    $result= mysqli_query($conn,$sql);
    if($result){
        echo "deleted sucessfully";
    }else
    {
        echo"error in delete";
    }
    
}



