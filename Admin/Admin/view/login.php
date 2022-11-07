<html>


<head>
	<title>LogIn Page</title>
	<style>
				a:hover{

				background: yellow;

				color:black;

}
.error {color: red;}
	</style>
</head>
<body>
	
<?php include 'top.php';?>

	
	<fieldset>
	<?php include '../controller/login.php';?>
		<form method="post" action="<?php echo ($_SERVER['PHP_SELF']);?>">
			<fieldset><b>
				<legend><h2>LOGIN</h2></legend>

				<?php
				if($matchError){
					?>
					<span style="color: red;"><?php echo $matchError?></span>	
					<?php
				}
				?>
				<table>
					<tr>
						<td><b><label>User Name: </label></td>
						<td><input type="text" name="user_name" value="<?php echo $userName;?>"></td>
						<td><span class="error"><?php echo $userName_Err?></span></td>
					</tr>

					<tr>
						<td><b><label>Password: </label></td>
						<td><input type="password" name="password" value="<?php echo $pass;?>"></td>
						<td><span class="error"><?php echo $pass_Err?></span></td>
					</tr>
				</table><br>
				
				<input type="checkbox" name="remember_me" value="remembered">Remember me<br><br>
				<input type="submit" name="submission" value="submit">
                <div class="forgotPass"><a href="forgot_pass.php">forgot password?</a></div>

                
			</fieldset>
		</form>
	</fieldset>

	<?php include 'footer.php';?>

</body>
</html>
 	
		