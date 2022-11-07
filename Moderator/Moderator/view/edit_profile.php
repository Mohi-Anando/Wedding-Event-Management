<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		body{
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(163,150,150,1) 0%, rgba(0,212,255,1) 100%);
        }
		a:hover{
			background-color: #b2d4bb;
			color:black;
		}
	</style>
</head>
<body>

    <?php include 'log_top.php';?>
    
	<?php include '../controller/edit_profile.php';?>
	<br>
<center><b>View Account</b><br></center><br>
		<table align="center">
			<tr>
				<td>
				
				</td>
			</tr>
			<tr>
				<td>
					<a href="view_profile.php">View Profile &nbsp; </a>
				</td>
				<td>
					<span><a href="edit_profile.php">Edit Profile  &nbsp;</a></span>
				</td>
				<td>
					<span><a href="change_pic.php">Change Profile Picture  &nbsp;</a></span>
				</td>
				<td>
					<span><a href="change_pass.php">Change Password  &nbsp;</a></span>
				</td>
			</tr>		
		</table>
<br>
	<fieldset>
		<table width="45%" align="center">
	
				<td width="45%">
					<fieldset>
						<center><b>Edit Profile</b><br></center>
						
						<form method="post" action="">
								<table>
									<tr>
										<td>
										<label>Name</label>
										</td>
										<td>
										<input type="text" name="fname" value="<?= $_SESSION['user']['name']?>"><span style="color: red;"><?php echo $nameErr ?></span>
										</td>
									</tr>
									<tr>
										<td>
										<label>Email:</label>
										</td>
										<td>
										<input type="text" name="email" value="<?= $_SESSION['user']['email']?>"><span style="color: red;"><?php echo $emailErr ?></span>
										</td>
									</tr>
									<tr>
										<td>
										<label>Gender:</label>
										</td>
										<td>
										<input type="radio" name="gender" value="male" id="male" <?= ($_SESSION['user']['gender'] == 'male')? "checked":"" ?>>Male
										<input type="radio" name="gender" value="female" id="female" <?= ($_SESSION['user']['gender'] == 'female')? "checked":"" ?>>Female
										<input type="radio" name="gender" value="others" id="others" <?= ($_SESSION['user']['gender'] == 'others')? "checked":"" ?>>Others
										<br><span style="color: red;"><?php echo $genderErr ?></span>
										</td>
									</tr>
									<tr>
										<td>
										<label>Date of birth:</label>
										</td>
										<td>
										<input type="date" name="dob" value="<?= $_SESSION['user']['dob']?>">
										<span style="color: red;"><?php echo $dobErr ?></span>
										</td>
									</tr>
									<tr>
										<td>
											<br>
										<input type="submit" name="submit" value="Submit">
										</td>
									</tr>
								</table>

						</fieldset>
					</td>
				</tr>
			</table>
		</fieldset>

		<?php include 'footer.php';?>
	</body>
	</html>