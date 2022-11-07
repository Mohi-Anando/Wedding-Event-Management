<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <?php include 'logtop.php';?>
	<?php include 'logintop.php';?>
    
	<fieldset>
		<table >
			<tr>
				
                View Account<hr><br>
						
						<span><a href="viewPr.php">View Profile | &nbsp;</a></span>
						<span><a href="editPr.php">Edit Profile | &nbsp;</a></span>
						<span><a href="ch_pic.php">Change Profile Picture | &nbsp;</a></span>
						<span><a href="ch_pass.php">Change Password | &nbsp;</a></span>
				<td ></fieldset>

					<fieldset><b>
						<lable>PROFILE</lable>
						<table ><hr>
							<tr>
								<td width="45%">Name</td>
								<td><span>:</span><?= $_SESSION['user']['name']?><hr></td>
								<td rowspan="5" width="45%" align="center"><img src="<?= $_SESSION['user']['profilePicPath'] ?>" height="150" width="200"><hr></td>
								
							</tr>

							<tr>
								<td width="45%">Email</td>
								<td><span>:</span><?= $_SESSION['user']['email']?></td>
							</tr>

							<tr>
								<td width="45%">Gender</td>
								<td><span>:</span><?= $_SESSION['user']['gender']?><hr></td>
							</tr>

							<tr>
								<td width="45%">Date of Birth</td>
								<td><span>:</span><?= $_SESSION['user']['dob']?><hr></td>
								
								<td width="45%"><a href="ch_pic.php"><br>Change<hr></a></td>
							
							</tr>
							
						</table>
						<center><a href="editPr.php">Edit Profile</a>
						</center></td>
			</tr>
		</table>
	</fieldset>

	<?php include 'footer.php';?>
</body>
</html>