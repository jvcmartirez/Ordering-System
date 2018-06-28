<?php include('server.php')?>

<html>	
	
<head>
	<title>View All Orders</title>
	<link rel = "stylesheet" type = "text/css" href = "style.css">
</head>	

<body>
	<div class = "header">
		<h2>View Orders</h2>
	</div>
	
	<form method = "post" action = "view.php">
		<div>
			<button type = "submit" name = "back" class = "btn"> Back </button>
		</div>		
	<?php
		if(count($errors) == 0)
		{
			$view = "SELECT * FROM tblorder";
			$vres = $db -> query ($view);
			if ($vres -> num_rows > 0)
			{
				echo "<table><tr><th>Order ID</th><th>Customer ID</tr><th>Order Name</th><th>Order Quantity</tr><th>Order Price</tr></tr>";
				while($row = $vres -> fetch_assoc())
				{
					echo "<tr></td>" .$row["orderID"]. "<tr></td>" .$row["custID"]. "<tr></td>". "<tr></td>" .$row["orderNAME"]. "<tr></td>". "<tr></td>" .$row["orderQUANTITY"]. "<tr></td>". "<tr></td>" .$row["orderPRICE"]. "<tr></td>";
				}
				echo "</table>";
			}
			else
			{
				echo "0 result";
			}
		}
	?>
	</form>
</body>

</html>