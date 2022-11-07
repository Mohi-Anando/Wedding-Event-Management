<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		a:hover{

		background: yellow;

		color:black;

}

	</style>
</head>
<body>
    <?php include 'log_top.php';?>
    <?php include 'inside_header.php';?>
	<?php include '../controller/edit_profile.php';?>


	<fieldset>
		<table>
			<tr>
				<td width="25%"><b>
					Account<hr><br>
				
						<li><a href="dashboard.php">Dashboard</a></li>
						<li><a href="view_profile.php">View Profile</a></li>
						<li><a href="edit_profile.php">Edit Profile</a></li>
						<li><a href="change_pic.php">Change Profile Picture</a></li>
						<li><a href="change_pass.php">Change Password</a></li><br>

						<form method="POST" action="../controller/logout.php">
							<li><button type="submit" name="logout_btn">Log out</button></li>
						</form>
						
				</td>
				<td width="75%">
					<fieldset><b>
						<legend>EDIT PROFILE</legend>
						<form method="post" action="">
								
								<label>Name</label>
								<input type="text" name="fname" value="<?= $_SESSION['user']['name']?>"><span style="color: red;"><?php echo $nameErr ?></span>
								<hr>

								<label>Email:</label>
								<input type="text" name="email" value="<?= $_SESSION['user']['email']?>"><span style="color: red;"><?php echo $emailErr ?></span>
								<hr>

								<label>Gender:</label>
								<input type="radio" name="gender" value="male" id="male" <?= ($_SESSION['user']['gender'] == 'male')? "checked":"" ?>>Male
								<input type="radio" name="gender" value="female" id="female" <?= ($_SESSION['user']['gender'] == 'female')? "checked":"" ?>>Female
								<input type="radio" name="gender" value="others" id="others" <?= ($_SESSION['user']['gender'] == 'others')? "checked":"" ?>>Others
								<br><span style="color: red;"><?php echo $genderErr ?></span>
								<hr>
							
								<label>Date of birth:</label>
								<input type="date" name="dob" value="<?= $_SESSION['user']['dob']?>">
								<br>
								<span style="color: red;"><?php echo $dobErr ?></span>
								<hr>
							<br>

								<input type="submit" name="submit" value="Submit">

						</fieldset>
					</td>
				</tr>
			</table>
		</fieldset>

		<?php include 'footer.php';?>
	</body>
	</html>