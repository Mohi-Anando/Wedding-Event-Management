<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
    .error {color: red;}
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
   
	<?php include '../controller/change_pass.php';?>
<br>
    <b><center>View Account<br></center></b><br>
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
		<table align="center">
			<tr>
           
						
						
				<td width="75%">
					<form method="post" action="<?php echo ($_SERVER['PHP_SELF']);?>">
						
							<b>Change your password<hr></b>
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

                    </td>
                </tr>
</table>
        </fieldset>
    
					<?php include 'footer.php';?>
				</body>
				</html>