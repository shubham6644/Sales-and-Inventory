<?php
$Uname=$_POST['uname'];
 $Pass=$_POST['pass'];
if($Uname=='Shubham' && $Pass=='Shubham@123')
{
    echo" login succesfull";
}
else{
    echo"login failed";
}
?>