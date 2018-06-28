<?php
	
	include('server.php');
	
	if (!isset($_SESSION['fname']))
	{
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
	
	if (isset($_GET['logout']))
	{
		session_destroy();
		unset($_SESSION['fname']);
		unset($_SESSION['admin']);
		header("location: login.php");
	}

?>

<html>

<head>
	<title>Login Page</title>
	<link rel = "stylesheet" type = "text/css" href = "style.css">
</head>

<body>
		<div class = "header">
			<h2>Home Page</h2>
		</div>
	
		<div class = "content">
			<?php if (isset($_SESSION['success'])): ?>
				<div class = "error success">
					<h3>
						<?php
							echo $_SESSION['success'];
							unset($_SESSION['success']);
						?>
					</h3>
				</div>
			<?php endif ?>
		
			<?php if (isset($_SESSION['fname'])): ?>
				<p>
					Welcome <strong> <?php echo $_SESSION['fname']; ?> </strong>
				</p>
				<p>
					<a href = "index.php?logout='1'" style = "color: red;"> Log Out</a>
				</p>
			<?php endif ?>
			
			<?php if (isset($_SESSION['admin'])): ?>
				<div class = "error success">
					<h3>
						<?php
							echo $_SESSION['admin'];
						?>
					</h3>
				</div>
			<?php endif ?>
			
	</div>
	<form>
		
			<?php if (isset($_SESSION['admin'])): ?>
				<div class = "input-group">
					<button type = "submit" name = "view_orders" class = "btn"> View Orders </button>
				</div>
			<?php endif ?>
	
			<div class = "input-group">
				<button type = "submit" name = "order_pizza" class = "btn"> Order Now </button>
			</div>
			
			
	</form>
</body>

</html>