<?php
include'connection.php';
$fname=$_REQUEST['fname'];
$email=$_REQUEST['email'];
$mn=$_REQUEST['mn'];
$dob=$_REQUEST['dob'];
$password=$_REQUEST['password'];

$sql="insert into information values('','$fname','$email','$mn','$dob','$password','0')";
$dbc=mysqli_query($con,$sql);
if($dbc)
{
    echo"Data insert Successfully";
}
else
{
    echo"Data inserted failed";
}


?>