<?php
include'connection.php';
 $item=$_REQUEST['item'];
 $unit=$_REQUEST['unit'];
 $rate=$_REQUEST['rate'];
 $quantity=$_REQUEST['quantity'];
$sql="insert into product values('','$item','$unit','$rate','$quantity')";
$dbc=mysqli_query($con,$sql);
if($dbc)
{
    echo"Data inserted successfully";
}
else{
    echo"Data inserted failed";
}

?>