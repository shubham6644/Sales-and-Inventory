<?php
include'connection.php';
$sql="select * from information";
$query=mysqli_query($con,$sql);

?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=", initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2" align='center'>
       <tr> <th colspan="8"> List Of Users</th></tr>
        <tr>
            <th>uid</th>
            <th>Full_name</th>
            <th>Email</th>
            <th>Mobile_no</th>
            <th>Dob</th>
            <th>password</th>
            <th colspan="2">Action</th>    
        </tr>
        <?php
        while($fetch=mysqli_fetch_array($query))
        {
          ?>  
        <tr>
            <td><?php echo $fetch['uid'];?>
            <td><?php echo $fetch['fname'];?></td>
            <td><?php echo $fetch['email'];?></td>
            <td><?php echo $fetch['mn'];?></td>
            <td><?php echo $fetch['dob'];?></td>
            <td><?php echo $fetch['password'];?></td>
            <td><a href="   ">Update</a></td>
              <?php
                    if($fetch['status']==0)
                    {
              ?>
            <td><a href="su.php?uid=<?php echo $fetch['uid'];?> && st=<?php echo $fetch['status'];?>">Inactive</a></td>
            <?php
                    }
                    else{
            ?>
               <td><a href="su.php?uid=<?php echo $fetch['uid'];?> && st=<?php echo $fetch['status'];?>">Active</a></td>
            <?php
                    }
            ?>
        </tr>
        <?php
        }
        ?>
    </table>  
</body>
</html>