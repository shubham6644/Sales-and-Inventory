<html>
	<head>
	
	</head>
		<body style="background-image: url('dm.jpg');background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 100%;width: 100%;">
		<form name="form" action="product_save.php">
		<?php
           include "header.php"

         ?>
			
				<table border=2 height="20%" width="10%" align="center" style="margin-top:5%">
					<tr bgcolor=" #99ddff">
						<th><font color="#0066ff">Item</font></th>
						<td>
							<select name="item">
							<option value="">--select item--</option>
							<option value="cement" name="cement">Cement</option>
							<option value="sand" name="sand">Sand </option>
							<option value="gallent" name="gallent">Gallent</option>
						</td>
					</tr>
					
					<tr bgcolor="#99ddff">	
						<th><font color="#0066ff">Unit</font></th>
						<td>
							<select name="unit">
							<option value="">--select unit--</option>
							<option value="packet">Packet</option>
							<option value="troly">Troly</option>
							<option value="quantal">Quantal</option>
						</td>
					</tr>	
					
					<tr bgcolor="#99ddff">
						<th><font color="#0066ff">Rate:</font></th>
						<td><input type="text" name="rate" value=""></td>
					</tr>
					
					<tr bgcolor=" #99ddff">	
						<th><font color="#0066ff">Quantity:</font></th>
						<td><input type="text" name="quantity" value=""></td>
					</tr>
					
					<tr bgcolor="#99ddff">
						<th colspan="2"><input type="submit" name="save" value="save"></th>
					</tr>
					
				</table>
						<footer">
						<table align="center" style="margin-top:25%" bgcolor="#66d9ff" height="2%" width="100%" >
							<tr bgcolor="#66d9ff" >
								<td align="center" >
									Design and developed by Shubham Yadav
								</td>
							</tr>
							</table>
						</footer>
						
    					</table>  
				
	
			</form>
			
		</body>
	</html>
	