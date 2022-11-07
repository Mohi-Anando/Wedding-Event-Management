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
		<table >
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
				<td width="75%">
				
						<legend><b><h2>Welcome to the Dashboard of<span>:  </span><?= $_SESSION['user']['name']?></legend>
						<hr></h2>

				</td>
			</tr>
		</table>
	</fieldset>

	<?php include 'footer.php';?>
</body>
</html>