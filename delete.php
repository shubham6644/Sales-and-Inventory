<?php
ob_start();
include'connection.php';
$item=$_REQUEST['uname'];
$sql="delete from product where item='$item'";
$Exe=mysqli_query($con,$sql);
if($Exe)
{   
    header('location:product_show.php');
}
else
{
    echo "Deleted failed";
}
ob_flush();

?>