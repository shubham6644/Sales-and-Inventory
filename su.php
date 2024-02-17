<?php
    include'connection.php';
    $uid=$_REQUEST['uid'];
    $st=$_REQUEST['st'];
    
    if($st==0)
    {
        
        $sql="update information set status=1 where uid='$uid'";
        $exe=mysqli_query($con,$sql);
        if($exe)
        {
            header('location:data_show.php');
        }
        else{
            echo"Updation Failed";
        }
    }
    else{
        $sql="update information set status=0 where uid='$uid'";
        $exe=mysqli_query($con,$sql);
        if($exe)
        {
            header('location:data_show.php');
        }
        else{
            echo"Updation Failed";
        }

    }
?>

