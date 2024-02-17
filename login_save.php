<?php
include'connection.php';

  $fname=$_POST['fname'];
  $password=$_POST['password'];
 $sql="select fname,password from information where fname='$fname' and password='$password'";
  $exe=mysqli_query($con,$sql);
  $row=mysqli_fetch_row($exe);
  if($row>0)
{
    echo" login succesfull";
    include'header.php';
}
else{
    echo"login failed";
    include'index.html';
}

?>