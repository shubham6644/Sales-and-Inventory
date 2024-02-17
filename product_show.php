<?php
include'connection.php';
$sql="select * from product";
$query=mysqli_query($con,$sql);

?>
<html>
<head>
    <title>Document</title>
	
</head>
<body style="background-image: url('dm.jpg');background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 100%;width: 100%;">
        <nav align="center">
		<?php
           include "header.php"

         ?>
				
    <table border="2" align='center' bgcolor=" #99ddff" style="margin-top:5%" height="20%" width="40%">
       <tr> <th colspan="8"> List Of Products</th></tr>
        <tr>
            <th>Pid</th>
            <th>Item</th>
            <th>Unit</th>
            <th>Rate</th>
            <th>Quantity</th>
            <th colspan="2">Action</th>    
        </tr>
        <?php
        while($fetch=mysqli_fetch_array($query))
        {
          ?>  
        <tr>
            <td><?php echo $fetch['pid'];?>
            <td><?php echo $fetch['item'];?></td>
            <td><?php echo $fetch['unit'];?></td>
            <td><?php echo $fetch['rate'];?></td>
            <td><?php echo $fetch['quantity'];?></td>
            <td><a href="update.php?uname=<?php echo $fetch['pid'];?>  ">Update</a></td>
            <td><a href="delete.php?uname=<?php echo $fetch['item'];?>  ">Delete</a></td>
        </tr>
        <?php
        }
        ?>
    </table>  
</body>
</html>