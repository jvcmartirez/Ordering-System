<?php 
	include('server.php'); 
?>

<html>

<head>
	<title>Log in Page</title>
	<link rel = "stylesheet" type = "text/css" href = "style.css">
</head>

<body>
	<div class = "header">
		<h2>Log In</h2>
	</div>
	
	<form method = "post" action = "login.php">
		
		<?php include('errors.php'); ?>
		
		<div class = "input-group">
			<label>First Name</label>
			<input type = "text" name = "custfname">
		</div>

		<div class = "input-group">
			<label>Password</label>
			<input type = "password" name = "custpass1">
		</div>
	
		<div class = "input-group">
			<button type = "submit" name = "login_user" class = "btn"> Log in </button>
		</div>
		<p>
			Not yet a member? <a href = "register.php">Sign Up!</a>
		</p>
	</form>
</body>

</html>