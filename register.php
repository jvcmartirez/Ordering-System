<?php include('server.php'); ?>

<html>

<head>
	<title>Registration Page</title>
	<link rel = "stylesheet" type = "text/css" href = "style.css">
</head>

<body>
	<div class = "header">
		<h2>Register</h2>
	</div>
	
	<form method = "post" action = "register.php">
		
		<?php include('errors.php'); ?>
		
		<div class = "input-group">
			<label>First Name</label>
			<input type = "text" name = "fname" value = "<?php echo $firstname; ?>">
		</div>

		<div class = "input-group">
			<label>Last Name</label>
			<input type = "text" name = "lname" value = "<?php echo $lastname; ?>">
		</div>
		
		<div class = "input-group">
			<label>Contact Number</label>
			<input type = "text" name = "pnumb" value = "<?php echo $phonenum; ?>">
		</div>

		<div class = "input-group">
			<label>Password</label>
			<input type = "password" name = "pass1">
		</div>

		<div class = "input-group">
			<label>Confrim Password</label>
			<input type = "password" name = "pass2">
		</div>
	
		<div class = "input-group">
			<button type = "submit" name = "register" class = "btn"> Register </button>
		</div>
		
		<p>
			Already a member? <a href = "login.php">Sign in</a>
		</p>
		
	</form>
	
</body>

</html>