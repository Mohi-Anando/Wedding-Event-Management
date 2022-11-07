<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
    .error {color: red;}

		a:hover{

		background: yellow;

		color:black;

}

	</style>
</head>
<body>
	<?php include 'log_top.php';?>
    <?php include 'inside_header.php';?>
    <?php include '../controller/change_pass.php';?>
	

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
				<td width="75%">
					<form method="post" action="<?php echo ($_SERVER['PHP_SELF']);?>">
						<fieldset><b>
							<legend>CHANGE PASSWORD</legend>
							<table>
								<tr>
									<td>Current Password</td>
									<td>:</td>
									<td><input type="text" name="curr_pass" value="<?php echo $curr_pass; ?>"></td>
									<td><span class="error"><?php echo $curr_pass_Err; ?></span></td>
									<td></td>
								</tr>

								<tr>
									<td>New Password</td>
									<td>:</td>
									<td><input type="text" name="new_pass" value="<?php echo $new_pass; ?>"></td>
									<td><span class="error"><?php echo $new_pass_Err; ?></span></td>
									<td><?php echo $same_prev_pass_Err; ?></td>

								</tr>

								<tr>
									<td>Confirm Password</td>
									<td>:</td>
									<td><input type="text" name="re_new_pass" value="<?php echo $re_new_pass; ?>"></td>
									<td><span class="error"><?php echo $re_new_pass_Err; ?></span></td>
									<td><span class="error"><?php echo $pass_mismatch_Err; ?></span></td>
								</tr> </table>
                                <input type="submit" name="submit">
							<br>
							<hr>
                            
							
                            </form>
						
                        </fieldset>
                    </td>
                </tr>
</table>
        </fieldset>
    
					<?php include 'footer.php';?>
				</body>
				</html>