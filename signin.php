
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="header">
		<div class="header_one"><img src="images/logo.png"></div>
		<div class="header_two"><a href="signin.php">LOG IN</a> | <a href="registration.php">OR REGISTER NOW!</a></div>
		<div class="header_three"><img src="images/logo2.jpg"></div>
	</div>
	<div class="signin">
		<div class="signin-container">
			<h3>HUNGRY! WE CAN FIX THAT! JUST SIGN IT BELOW!</h3>
			<P>Sign it below to start your order!</P>
			
			<h2>Login</h2>


			<form action="signin-action.php" method="POST">
				<div class="form-container">
					<label>Username :</label>
					<input type="text" name="username" placeholder="Enter Your Nickname or Email" >
				</div>
				<div class="form-container">
					<label>Password :</label>
					<input type="password" name="pass" placeholder="Enter Your Secure Password">
				</div>
				<div class="form-container">
					<input type="submit" name="submit" value="LOGIN">
				</div>
			</form>

			<a href="registration.php">CREATE ACCOUNT</a>

		</div>
	</div>
</body>
</html>