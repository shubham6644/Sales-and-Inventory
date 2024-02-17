<?php
ob_start();
include 'connection.php';
echo $uname=$_REQUEST['uname'];
$sql="Select * from product where pid='$uname'";
$exe=mysqli_query($con,$sql);
$fetch=mysqli_fetch_array($exe);

if(isset($_REQUEST['save']))
{
echo $pid=$_REQUEST['pid'];
$item=$_REQUEST['item'];
$unit=$_REQUEST['unit'];
$rate=$_REQUEST['rate'];
$quantity=$_REQUEST['quantity'];

$sql_u="update product set item='$item',unit='$unit',rate='$rate',quantity='$quantity' where pid='$pid'";
$exe_u=mysqli_query($con,$sql_u);
if($exe_u)
	{
		header('location:product_show.php');
	}
else{
		echo" Update Failed";
	}
	
}


?>



<html>
<head> 
      <title> Updation form</title>
	  
	 </head>
        <body style="background-image: url('dm.jpg');background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 100%;width: 100%;">
            <form name="form" method="post" action="update.php">
			<div align="center">
			<div style="margin-left:10%">
			<h1>Update Your Product Here<h1>
            <table align="center"> 
            <nav align="center">
				<table border=1 height="5%" width="100%">
					<tr>
						<th bgcolor="#66d9ff"><a href="home.php"><font color="#0066ff">HOME |</font></th></a>
						<th bgcolor="#66d9ff"><a href="product.php"><font color="#0066ff">PRODUCT |</font></a></th>
						<th bgcolor="#66d9ff"><a href="product_show.php"><font color="#0066ff">STOCK |</font></a></th>
						<th bgcolor="#66d9ff"><a href=""><font color="#0066ff">LEDGER |</font></a></th>
						<th bgcolor="#66d9ff"><a href="logout.php"><font color="#0066ff">LOGOUT |</font></a></th>
					</tr>
				</table>
			
				<table border=2 height="20%" width="10%" align="center" style="margin-top:10%">
					<tr>
						<th bgcolor="66d9ff">Item</th>
						<td bgcolor="66d9ff">
							<select name="item">
							<option value="">--select item--</option>
							<option value="cement" name="cement">Cement</option>
							<option value="sand" name="sand">Sand </option>
							<option value="gallent" name="gallent">Gallent</option>
                            <input type="hidden" name="pid" value="<?php echo  $fetch['pid'];?>">
						</td>
					</tr>
					
					<tr>	
						<th bgcolor="66d9ff">Unit</th>
						<td bgcolor="66d9ff">
							<select name="unit">
							<option value="">--select unit--</option>
							<option value="packet">Packet</option>
							<option value="troly">Troly</option>
							<option value="quantal">Quantal</option>
						</td>
					</tr>	
					
					<tr>
						<th bgcolor="66d9ff">Rate:</th>
						<td bgcolor="66d9ff"><input type="text" name="rate" value="<?php echo $fetch['rate']?>"></td>
					</tr>
					
					<tr>	
						<th bgcolor="66d9ff" >Quantity:</th>
						<td bgcolor="66d9ff"><input type="text" name="quantity" value="<?php echo $fetch['quantity']?>"></td>
					</tr>
					
					<tr>
						<th bgcolor="66d9ff"colspan="2"><input type="submit" name="save" value="Update"></th>
					</tr>
					
				</table>
				<footer">
						<table align="center" style="margin-top:22%" bgcolor="#66d9ff" height="2%" width="100%" >
							<tr bgcolor="#66d9ff" >
								<td align="center" >
									Design and developed by Shubham Yadav
								</td>
							</tr>
							</table>
						</footer>
                </form>
        </table>
 </html>
 <?php
 ob_flush();
 ?>
						
							                                  