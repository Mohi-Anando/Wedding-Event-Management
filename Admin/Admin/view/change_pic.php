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
						
					</ul>
				</td>
				<td width="75%"><b>
					<fieldset>
						<legend>CHANGE PROFILE PICTURE</legend>
						<form method="post" action="../controller/upload_img.php" enctype="multipart/form-data">
							<table>
								<tr><td><img src="<?= $_SESSION['user']['profilePicPath'] ?>" height="150" width="200"></td></tr>
								<tr><td><input type="file" name="file_to_upload" value="Choose a file"></td></tr>	
							</table>
							<hr><center>
							<input type="submit" name="submit" value="Submit">
                            </center>
						</form>
						
					</fieldset>
				</td>
			</tr>
		</table>
	</fieldset>

	<?php include 'footer.php';?>

</body>
</html>