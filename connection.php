<?php
$hostname="localhost";
$username="root";
$password="";
$db="shubham";
$con=mysqli_connect($hostname,$username,$password,$db);
If($con)
{
    echo"databse selected succesfully";
}
else{
    echo"connection stablished";
}
/*
$sql="create database information";
$dbc=mysqli_query($con,$sql);
if($dbc)
{
    echo"Database created successfully";
}
else{
    echo"Database creation failed";
}*/
?>