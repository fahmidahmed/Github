<?php 
	
	include 'includes/dbconnect.php';
	include 'includes/header.php';

	$sql= 'SELECT * FROM member_info WHERE mi_id = "'.$_SESSION['member_id'].'"';
		$result= mysql_query($sql);
		$id = $_SESSION['member_id'];
		while ($row = mysql_fetch_array($result))
		{
			
			$first_name=$row['mi_first_name'];
			$last_name=$row['mi_last_name'];
			$email=$row['mi_email'];
			$nickname=$row['mi_nickname'];
			$city=$row['mi_city'];
			$area_road=$row['mi_area_road'];
			$house=$row['mi_house'];
		}


 ?>


			<div class="my_info">
 				My Personal Info

		 			<ul>
		 				<li>
			 				<div class="li-container">
                    			<label>First Name</label>
                    			<?php echo  $first_name.'<br><br>';?>	
                			</div> 
                			<div class="li-container">
                    			<label>Last Name</label>
                    			<?php echo $last_name.'<br><br>';?>	
                			</div> 
                			<div class="li-container">
                    			<label>Email</label>
                    			<?php  echo $email.'<br><br>';?>	
                			</div> 
                			<div class="li-container">
                    			<label>Nickname</label>
                    			<?php echo $nickname.'<br><br>';?>	
                			</div> 
			 					
		 				</li>

		 				<li>
		 						<form>
		 							<input type="submit" name="submit" value="( Edit )">
		 						</form>
		 				</li>
		 			</ul>

 			</div>

 	 		<div class="my_pass">
 	 			<h3>My password</h3>

 	 			<label>If you would want to change your password, please click <a href="">here</a></label>
 	 		</div>


 	 		<div class="my-address">
 	 			<h3>My Address</h3>

 	 			<?php
 	 				if (!isset($_POST['submit'])) 
 	 				{
 	 			?> 
 	 				<div class="my-address-edit-option">
 	 					<form action="" method="POST">
 	 						<input type="submit" name="submit" value="( Edit )">
 	 					</form>
 	 				</div>
 	 			<?php
 	 				}
 	 			 ?>


 	 				<?php 
 	 					if (isset($_POST['submit'])) 
 	 					{
 	 				?>	
 	 					<div class="my-address-edit">
 	 						<form action="member-info-update.php" method="POST">
	 	 						<div class="address-edit-container">
									<label>City :</label>
									<select name="city" required>
										<option></option>
										<option value="Sylhet">Sylhet</option>
										<option value="Dhaka">Dhaka</option>
									</select>
								</div>
								<div class="address-edit-container">
									<label>Area/Road :</label>
									<input type="text" name="area_road" value="<?php echo $area_road; ?>" placeholder="Enter Your Area & Road">
								</div>
								<div class="address-edit-container">
									<label>House :</label>
									<input type="text" name="house"  value="<?php echo $house; ?>" placeholder="Enter Your House No.">
								</div>
								<div class="address-edit-container">
									<input type="submit" name="submit" value="Save">
								</div>
							</form>
 	 					</div>
 	 				<?php 		
 	 					}
 	 				?>

 	 			
 	 		</div>


 <?php 

 	include 'includes/footer.php';

  ?>