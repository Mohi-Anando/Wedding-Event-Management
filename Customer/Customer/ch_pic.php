<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <?php include 'logintop.php';?>
    <?php include 'logtop.php';?>
    
	<fieldset>
		<table>
			<tr>
            View Account<hr><br>
						
						<span><a href="viewPr.php">View Profile | &nbsp;</a></span>
						<span><a href="editPr.php">Edit Profile | &nbsp;</a></span>
						<span><a href="ch_pic.php">Change Profile Picture | &nbsp;</a></span>
						<span><a href="ch_pass.php">Change Password | &nbsp;</a></span>
						
						
				<td width="75%">
					<fieldset>
						<legend>CHANGE PROFILE PICTURE</legend>
						<form method="post" action="up_img.php" enctype="multipart/form-data">
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