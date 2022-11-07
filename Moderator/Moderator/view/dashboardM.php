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
	<center><b>View Account</b><br></center>
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
		<center><b><h2>Welcome to the our Moderator</h2></center>

	<?php include 'footer.php';?>
</body>
</html>