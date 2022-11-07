<html>
<head>   
<style>
.error {color: red;}

		a:hover{

		background: yellow;

		color:black;

}

</style>     
</head>
<body>
    <?php include 'top.php';?>
	<?php include '../controller/registration.php';?>
	<fieldset><b>
		<legend>REGISTRATION</legend>
		<form method="post" action="<?php echo ($_SERVER['PHP_SELF']);?>">
		<fieldset>
		        <label>Name</label> 
				<input type="text" name="fname"  value="<?php echo $name;?>"><span class="error"><?php echo $nameErr ?></span><br />
                 <br>
				 <label>E-mail</label>
				<input type="text" name="email" value="<?php echo $email;?>"><span class="error"><?php echo $emailErr ?></span>
                <br><br>
				<label>User Name</label>
				<input type="text" name="user_name" value="<?php echo $userName;?>"><span class="error"><?php echo $userNameErr ?></span>
				<br><br>
				<label>Password</label>
				<input type="text" name="password" value=""><span class="error"><?php echo $passErr ?></span>
				<br><br>
				<label>Confirm Password</label>
				<input type="text" name="con_pass" value=""><span class="error"><?php echo $con_passErr ?></span>
				<br><br>
                <fieldset>
				<legend>Gender </legend>
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other 
				<span class="error"><?php echo $genderErr ?></span>
				</fieldset><fieldset>
				<legend>DATE OF BIRTH </legend>
				<input type="date" name="dob"> 
				<span class="error"><?php echo $dobErr ?></span>
				</fieldset>
				<br><input type="submit" name="submit" value="Submit"><span>   </span>
			<input type="reset" name="reset" value="Reset">


</form>
</fieldset>
<?php include 'footer.php';?>

</body>
</html>