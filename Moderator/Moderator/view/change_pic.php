<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>
	body{
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(163,150,150,1) 0%, rgba(0,212,255,1) 100%);
        }
		a:hover{
			background-color: #b2d4bb;
			color:black;
		}
</style>
<body>

    <?php include 'log_top.php';?>
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
						<b><center>Change your Profile Picture</center></b><br>
						<form method="post" action="../controller/upload_img.php" enctype="multipart/form-data">
							<table align="center">
								<tr><td><img src="<?= $_SESSION['user']['profilePicPath'] ?>" height="180" width="210"></td></tr>
								<tr><td><input type="file" name="file_to_upload" value="Choose a file"></td></tr>	
							</table>
							<hr><center>
							<input type="submit" name="submit" value="Submit">
                            </center>
						</form>
					</fieldset>
	<?php include 'footer.php';?>

</body>
</html>