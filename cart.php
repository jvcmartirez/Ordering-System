<?php 

	include('server.php'); 
	$amount = "";
	$subtotal = "";
	$subtotal1 = "";
	$subtotal2 = "";
	$subtotal3 = "";
	$subtotal4 = "";
	$subtotal5 = "";
	$subtotal6 = "";
	$subtotal7 = "";
	$subtotal8 = "";
	$subtotal9 = "";
	$subtotal10 = "";
	$subtotal11 = "";
	$subtotal12 = "";
	$subtotal13 = "";
	$sub = "";
	$sub1 = "";
	$sub2 = "";
	$sub3 = "";
	$sub4 = "";
	$sub5 = "";
	$sub6 = "";
	$sub7 = "";
	$sub8 = "";
	$sub9 = "";
	$sub10 = "";
	$sub11 = "";
	$sub12 = "";
	$sub13 = "";
	$total = "";
	
	
?>

<html>

<head>
	<title>Order Pizza</title>
	<link rel = "stylesheet" type = "text/css" href = "style.css">
</head>

<body>
	<div class = "header">
		<h2>Order Pizza</h2>
	</div>
	
	<form method = "post" action = "cart.php">
		
		<?php include('errors.php'); ?>
		
		
		<form>
			<div>
			<h5>Classic Pizza</h5>
				<label>Cheese</label>
					<input type="radio" name="radio" value= 175.0>
					<input type="radio" name="radio" value= 285.0>
					<input type="radio" name="radio" value= 440.0>
					<input type = "number" name = "quantity" value = 0>		
					<label>Quantity</label>
					<button type = "button" name = "add_to_cart" class = "btn" onclick = "getData(); return false;"> Add to Cart </button>
					
			</div>
			<div>
				<label>NY Classic</label>
					<input type="radio" name="radio1" value= 210.0>
					<input type="radio" name="radio1" value= 340.0>
					<input type="radio" name="radio1" value= 530.0>	
					<input type = "number" name = "quantity1" value = 0>
					<label>Quantity</label>
					<button type = "submit" name = "add_to_cart1" class = "btn"> Add to Cart </button>
			</div>
			<div>
				<label>Pepperoni & Mushroom</label>
					<input type="radio" name="radio2" value= 175.0>
					<input type="radio" name="radio2" value= 285.0>
					<input type="radio" name="radio2" value= 440.0>
					<input type = "number" name = "quantity2" value = 0>
					<label>Quantity</label>
					<button type = "submit" name = "add_to_cart2" class = "btn"> Add to Cart </button>
			</div>
			<div>
				<label>Manhattan</label>
					<input type="radio" name="radio3" value= 250.0>
					<input type="radio" name="radio3" value= 295.0>
					<input type="radio" name="radio3" value= 565.0>
					<input type = "number" name = "quantity3" value = 0>
					<label>Quantity</label>
					<button type = "submit" name = "add_to_cart3" class = "btn"> Add to Cart </button>
			</div>
			<div>
				<label>Garden Special</label>
					<input type="radio" name="radio4" value= 210.0>
					<input type="radio" name="radio4" value= 340.0>
					<input type="radio" name="radio4" value= 530.0>
					<input type = "number" name = "quantity4" value = 0>
					<label>Quantity</label>
					<button type = "submit" name = "add_to_cart4" class = "btn"> Add to Cart </button>
			</div>
			<div>
					<label>Hawaiian</label>
					<input type="radio" name="radio5" value= 210.0>
					<input type="radio" name="radio5" value= 340.0>
					<input type="radio" name="radio5" value= 530.0>
					<input type = "number" name = "quantity5" value = 0>
					<label>Quantity</label>
					<button type = "submit" name = "add_to_cart5" class = "btn"> Add to Cart </button>
			</div>
			<div>
				<label>NY Finest</label>
					<input type="radio" name="radio6" value= 260.0>
					<input type="radio" name="radio6" value= 420.0>
					<input type="radio" name="radio6" value= 575.0>
					<input type = "number" name = "quantity6" value = 0>
					<label>Quantity</label>
					<button type = "submit" name = "add_to_cart6" class = "btn"> Add to Cart </button>
			</div>
		</form>
		
		<form method = "post">
			<h5>Specialty Pizza</h5>
			<div>
				<label>Tribeca Mushroom</label>
					<input type="radio" name="radio7" value= 245.0>
					<input type="radio" name="radio7" value= 390.0>
					<input type="radio" name="radio7" value= 560.0>
					<input type = "number" name = "quantity7" value = 0>
					<label>Quantity</label>
					<button type = "submit" name = "add_to_cart7" class = "btn"> Add to Cart </button>
			</div>
			<div>
				<label>Anchovy Lovers</label>
					<input type="radio" name="radio8" value= 275.0>
					<input type="radio" name="radio8" value= 450.0>
					<input type="radio" name="radio8" value= 595.0>
					<input type = "number" name = "quantity8" value = 0>
					<label>Quantity</label>
					<button type = "submit" name = "add_to_cart8" class = "btn"> Add to Cart </button>
			</div>
			<div>
				<label>#4 Cheese</label>
					<input type="radio" name="radio9" value= 250.0>
					<input type="radio" name="radio9" value= 400.0>
					<input type="radio" name="radio9" value= 560.0>
					<input type = "number" name = "quantity9" value = 0>
					<label>Quantity</label>
					<button type = "submit" name = "add_to_cart9" class = "btn"> Add to Cart </button>
			</div>
			<div>
				<label>Corona Chicken Salsa</label>
					<input type="radio" name="radio10" value= 250.0>
					<input type="radio" name="radio10" value= 420.0>
					<input type="radio" name="radio10" value= 560.0>
					<input type = "number" name = "quantity10" value = 0>
					<label>Quantity</label>
					<button type = "submit" name = "add_to_cart10" class = "btn"> Add to Cart </button>
			</div>
			<div>
				<label>Gourmet Garden</label>
					<input type="radio" name="radio11" value= 250.0>
					<input type="radio" name="radio11" value= 410.0>
					<input type="radio" name="radio11" value= 585.0>
					<input type = "number" name = "quantity11" value = 0>
					<label>Quantity</label>
					<button type = "submit" name = "add_to_cart11" class = "btn"> Add to Cart </button>
			</div>
			<div>
				<label>Roasted Garlic</label>
					<input type="radio" name="radio12" value= 240.0>
					<input type="radio" name="radio12" value= 405.0>
					<input type="radio" name="radio12" value= 505.0>
					<label>Amount</label>
					<input type = "number" name = "quantity12" value = 0>
					<button type = "submit" name = "add_to_cart12" class = "btn"> Add to Cart </button>
			</div>
			<div>
				<label>Four Seasons</label>
					<input type="radio" name="radio13" value= 275.0>
					<input type="radio" name="radio13" value= 430.0>
					<input type="radio" name="radio13" value= 590.0>
					<input type = "number" name = "quantity13" value = 0>
					<label>Amount</label>
					<button type = "submit" name = "add_to_cart13" class = "btn"> Add to Cart </button>
			</div>
		</form>
			<?php
						if (isset($_POST['add_to_cart']))
						{
							if (isset($_POST['radio']))
							{
								$num1 = doubleval($_POST['quantity']);
								$num2 = doubleval($_REQUEST['radio']);
								$subtotal = $num1 * $num2;
								echo $subtotal;
								$sub = doubleval($subtotal);
							}
						}
						if (isset($_REQUEST['add_to_cart1']))
						{
							if (isset($_POST['radio1']))
							{
								$num3 = doubleval($_POST['quantity1']);
								$num4 = doubleval($_REQUEST['radio1']);
								$subtotal1 = $num3 * $num4;
								echo $subtotal1;
								$sub1 = doubleval($subtotal1);
							}
						}
						if (isset($_REQUEST['add_to_cart2']))
						{
							if (isset($_POST['radio2']))
							{
								$num4 = doubleval($_POST['quantity2']);
								$num5 = doubleval($_REQUEST['radio2']);
								$subtotal2 = $num4 * $num5;
								echo $subtotal2;
								$sub2 = doubleval($subtotal2);
							}
						}
						if (isset($_REQUEST['add_to_cart3']))
						{
							if (isset($_POST['radio3']))
							{
								$num6 = doubleval($_POST['quantity3']);
								$num7 = doubleval($_REQUEST['radio3']);
								$subtotal3 = $num6 * $num7;
								echo $subtotal3;
								$sub3 = doubleval($subtotal3);
							}
						}
						if (isset($_REQUEST['add_to_cart4']))
						{	
							if (isset($_POST['radio4']))
							{
								$num8 = doubleval($_POST['quantity4']);
								$num9 = doubleval($_REQUEST['radio4']);
								$subtotal4 = $num8 * $num9;
								echo $subtotal4;
								$sub4 = doubleval($subtotal4);
							}
						}
						if (isset($_REQUEST['add_to_cart5']))
						{	
							if (isset($_POST['radio5']))
							{
								$num10 = doubleval($_POST['quantity5']);
								$num11 = doubleval($_REQUEST['radio5']);
								$subtotal5 = $num10 * $num11;
								echo $subtotal5;
								$sub5 = doubleval($subtotal5);
							}
						}
						if (isset($_REQUEST['add_to_cart6']))
						{	
							if (isset($_POST['radio6']))
							{
								$num12 = doubleval($_POST['quantity6']);
								$num13 = doubleval($_REQUEST['radio6']);
								$subtotal6 = $num12 * $num13;
								echo $subtotal6;
								$sub6 = doubleval($subtotal6);
							}
						}
						if (isset($_REQUEST['add_to_cart7']))
						{	
							if (isset($_POST['radio7']))
							{
								$num14 = doubleval($_POST['quantity7']);
								$num15 = doubleval($_REQUEST['radio7']);
								$subtotal7 = $num14 * $num15;
								echo $subtotal7;
								$sub7 = doubleval($subtotal7);
							}
						}
						if (isset($_REQUEST['add_to_cart8']))
						{
							if (isset($_POST['radio8']))
							{
								$num16 = doubleval($_POST['quantity8']);
								$num17 = doubleval($_REQUEST['radio8']);
								$subtotal8 = $num16 * $num17;
								echo $subtotal8;
								$sub8 = doubleval($subtotal8);
							}
						}
						if (isset($_REQUEST['add_to_cart9']))
						{	
							if (isset($_POST['radio9']))
							{
								$num18 = doubleval($_POST['quantity9']);
								$num19 = doubleval($_REQUEST['radio9']);
								$subtotal9 = $num18 * $num19;
								echo $subtotal9;
								$sub9 = doubleval($subtotal9);
							}
						}
						if (isset($_REQUEST['add_to_cart10']))
						{	
							if (isset($_POST['radio10']))
							{
								$num20 = doubleval($_POST['quantity10']);
								$num21 = doubleval($_REQUEST['radio10']);
								$subtotal10 = $num20 * $num21;
								echo $subtotal10;
								$sub10 = doubleval($subtotal10);
							}
						}
						if (isset($_REQUEST['add_to_cart11']))
						{	
							if (isset($_POST['radio11']))
							{
								$num22 = doubleval($_POST['quantity11']);
								$num23 = doubleval($_REQUEST['radio11']);
								$subtotal11 = $num22 * $num23;
								echo $subtotal11;
								$sub11 = doubleval($subtotal11);
							}
						}
						if (isset($_REQUEST['add_to_cart12']))
						{	
							if (isset($_POST['radio12']))
							{
								$num24 = doubleval($_POST['quantity12']);
								$num25 = doubleval($_REQUEST['radio12']);
								$subtotal12 = $num24 * $num25;
								echo $subtotal12;
								$sub12 = doubleval($subtotal12);
							}
						}
						if (isset($_REQUEST['add_to_cart13']))
						{	
							if (isset($_POST['radio13']))
							{
								$num26 = doubleval($_POST['quantity13']);
								$num27 = doubleval($_REQUEST['radio13']);
								$subtotal13 = $num26 * $num27;
								echo $subtotal13;
								$sub13 = doubleval($subtotal13);
							}
						}
				$total = doubleval($sub) +doubleval($sub1) + doubleval($sub2) + doubleval($sub3) + doubleval($sub4) + doubleval($sub5) + doubleval($sub6)  + doubleval($sub6) + doubleval($sub7)  + doubleval($sub8)  + doubleval($sub9)  + doubleval($sub10)  + doubleval($sub11)  + doubleval($sub12)  + doubleval($sub13);
			?>
		<form method = "post">
			<label>Total Amount</label>
				<input type = "text" name = "price" value = "<?php echo $total;?>">
				<div>
					<label>Proceed to Checkout</label>
					<button type = "submit" name = "checkout" class = "btn"> Checkout </button>
				</div>
				
				<div>
					<button type = "submit" name = "back" class = "btn"> Back </button>
				</div>
		</form>
	</form>
</body>

</html>