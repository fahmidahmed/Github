<?php 
	session_start();
	include 'includes/dbconnect.php';


	$username = $_POST['username'];
	$password = $_POST['pass'];

	if ($username == '' || $password == '') 
	{
		header('location: signin.php?id=void');
	}
	else
	{
		$sql = 'SELECT * FROM member_info WHERE (mi_email = "'.$_POST['username'].'" OR mi_nickname = "'.$_POST['username'].'") AND mi_password = "'.$_POST['pass'].'"';
		$result = mysql_query($sql);
		if (mysql_num_rows($result)==0) 
		{
			header('location: signin.php?id=wrong');
		}
		else
		{
			while ($row=mysql_fetch_array($result)) 
			{
				$member_id = $row['mi_id'];

				$_SESSION['member_id'] = $member_id;

			}
			header('location: index.php');
		}
	}

 ?>