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
    <br>
	<center><b>View Account</b><br></center><br>
		<table align="center">
			<tr>
				<td>
					<a href="view_profile.php">View Profile &nbsp;</a>
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
						<table width="45%" align="center">
							<center><b>PROFILE<hr></b</center>
						
							<tr>
								<td width="100%">Name</td>
								<td><span>:</span><?= $_SESSION['user']['name']?><hr></td>
								<td rowspan="5" width="100%" align="center"><img src="<?= $_SESSION['user']['profilePicPath'] ?>" height="180" width="210"><hr></td>
								
							</tr>

							<tr>
								<td width="100%">Email</td>
								<td><span>:</span><?= $_SESSION['user']['email']?><hr></td>
							</tr>

							<tr>
								<td width="100%">Gender</td>
								<td><span>:</span><?= $_SESSION['user']['gender']?><hr></td>
							</tr>

							<tr>
								<td width="100%">Date of Birth</td>
								<td><span>:</span><?= $_SESSION['user']['dob']?><hr></td>
								
							
							</tr>
							
							<tr>
								<td>
								<a href="edit_profile.php">Edit Profile</a>
								</td>
						
								
							</tr>
							<tr>
								
							</tr>
							
						</table >

						


	<br><br>

		<?php include 'footer.php';?>
</body>
</html>