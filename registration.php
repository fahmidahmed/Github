<?php 

	include 'includes/dbconnect.php';

 ?>
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
	<div class="registration">
		<div class="registration-container">

			<h3>Create Account</h3>
			<h3>General Information</h3>
		<form action="" method="POST">
			<div class="form-container">
				<label>First Name :</label>
				<input type="text" name="first_name" placeholder="Enter Your First Name">
			</div>

			<div class="form-container">
				<label>Last Name :</label>
				<input type="text" name="last_name" placeholder="Enter Your Last Name">
			</div>
			<div class="form-container">
				<label>Email :</label>
				<input type="email" name="email" placeholder="Enter Your Valid Email" required>
			</div>
			<div class="form-container">
				<label>Password :</label>
				<input type="password" name="pass" placeholder="Enter Your Secure Password" required>
			</div>
			<div class="form-container">
				<label>Nickname :</label>
				<input type="text" name="nickname" placeholder="Enter Your Nickname" required>
			</div>
			<div class="form-container">
				<label>City :</label>
				<select name="city" required>
					<option></option>
					<option>Sylhet</option>
				</select>
			</div>
			<div class="form-container">
				<label>Area/Road :</label>
				<input type="text" name="area_road" placeholder="Enter Your Area & Road">
			</div>
			<div class="form-container">
				<label>House :</label>
				<input type="text" name="house" placeholder="Enter Your House No.">
			</div>
			<div class="form-container">
				<input type="submit" name="submit" value="CREATE ACCOUNT">
			</div>
		</form>

			<?php 
				if (isset($_POST['submit'])) 
				{
					if ($_POST['email'] != '' && $_POST['pass'] != '' && $_POST['nickname'] != '') 
					{
						$sql = 'INSERT into member_info VALUES(0, "'.$_POST['first_name'].'", "'.$_POST['last_name'].'", "'.$_POST['email'].'", "'.$_POST['pass'].'", "'.$_POST['nickname'].'", "'.$_POST['city'].'", "'.$_POST['area_road'].'", "'.$_POST['house'].'", "'.time().'")';
						mysql_query($sql);
						header('location: signin.php?message="'.$_GET['success'].'"');
					}
					else
					{
						echo "Please Fill up";
					}
				}
			 ?>


		</div>
	</div>
	
</body>
</html>