<?php
	session_start();
	
	$firstname = "";
	$lastname = "";
	$phonenum = "";
	$initialprice = "";
	$pizza = "";
	$errors = array();
	
	$db = mysqli_connect('localhost', 'root', '', 'dbpizzaorder');
	
	if(isset($_POST['register']))
	{
		$firstname = mysqli_real_escape_string($db, $_POST['fname']);
		$lastname = mysqli_real_escape_string($db, $_POST['lname']);
		$phonenum = mysqli_real_escape_string($db, $_POST['pnumb']);
		$pass1 = mysqli_real_escape_string($db, $_POST['pass1']);
		$pass2 = mysqli_real_escape_string($db, $_POST['pass2']);
		
		if(empty($firstname))
		{
			array_push($errors, "First Name is required.");
		}
		
		if(empty($lastname))
		{
			array_push($errors, "Last Name is required.");
		}
		
		if(strlen($phonenum) <= 5)
		{
			array_push($errors, "Invalid Phone Number!");
		}
		
		if(empty($phonenum))
		{
			array_push($errors, "Phone Number is required");
		}
		
		if(empty($pass1))
		{
			array_push($errors, "Password is required.");
		}
		
		if ($pass1 !== $pass2)
		{
			array_push($errors, "The password did not match!");
		}
		
		$cust_check_query = "SELECT * FROM tblcust WHERE custFNAME = '$firstname' AND custLNAME = '$lastname' LIMIT 1";
		$result = mysqli_query($db, $cust_check_query);
		$cust = mysqli_fetch_assoc($result);
		
		if(count($errors) == 0)
		{
			$password = md5($pass1);
			$sql = "INSERT INTO tblcust (custFNAME, custLNAME, custPASS, custNUMBER) VALUES ('$firstname', '$lastname', '$pass1', '$phonenum')";
			mysqli_query($db,$sql);
			$_SESSION['fname'] = $firstname;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}
	}
	if (isset($_POST['login_user']))
	{
		$custfirstname = mysqli_real_escape_string($db, $_POST['custfname']);
		$custpassword = mysqli_real_escape_string($db, $_POST['custpass1']);
		
		if(empty($custfirstname))
		{
			array_push($errors, "First Name is required.");
		}
		
		if(empty($custpassword))
		{
			array_push($errors, "Password is required.");
		}
		
		if(count($errors) == 0)
		{
			$query = "SELECT * FROM tblcust WHERE custFNAME = '$custfirstname' AND custPASS = '$custpassword' ";
			$query2 = "SELECT * FROM tbladmin WHERE adminNAME = '$custfirstname' AND adminPASSWORD = '$custpassword' ";
			$result = mysqli_query($db, $query);
			$result2 = mysqli_query($db, $query2);
			
			if (mysqli_num_rows($result2) == 1)
			{
				$_SESSION['fname'] = $custfirstname;
				$_SESSION['admin'] = "Welcome Admin!";
				header('location: index.php');
			}
			else
			{
				array_push($errors, "The username and/or password you entered is incorrect");
			}
			
			if (mysqli_num_rows($result) == 1)
			{
				$_SESSION['fname'] = $custfirstname;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			}
			else
			{
				array_push($errors, "The username and/or password you entered is incorrect");
			}
		}
	}
	
	if (isset($_GET['logout']))
	{
		session_destroy();
		unset($_SESSION['fname']);
		header('location: login.php');
	}
	
	if (isset($_GET['order_pizza']))
	{
		header('location: cart.php');
	}
	
	if (isset($_GET['view_orders']))
	{
		header('location: view.php');
	}
	
	if (isset($_POST['checkout']))
	{
		header('location: order.php');
	}
	
	if (isset($_POST['back']))
	{
		header('location: index.php');
	}
	
?>