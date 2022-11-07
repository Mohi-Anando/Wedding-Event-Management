<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <?php include 'logintop.php';?>
    <?php include 'logtop.php';?>
    
	<?php 

	$name = $email = $dob = $gender = "";
	$nameErr = $emailErr = $dobErr= $genderErr = "" ;

	if($_SERVER["REQUEST_METHOD"] == "POST"){

		$errorFlag = false;

		
		if(!isset($_POST['fname']) || empty($_POST['fname'])){
			$nameErr = "Name is required";
			$errorFlag = true;
		}else{
			$name = $_POST['fname'];
			if(!preg_match("/^[a-zA-Z-' ]*$/", $name)){
				$nameErr = "Only letters, whitespaces, - and ' are acceptable";
				$errorFlag = true;
			}
		}
	
		if(empty($_POST['email'])){
			$emailErr = "Email is required";
			$errorFlag = true;
		}else{
			$email = $_POST['email'];
			$email_pattern = "/@gmail.com/i";
			$email_matching_result = preg_match($email_pattern, $email);
			if($email_matching_result == 0){
				$emailErr = "Email format is not valid";
				$errorFlag = true;
			}
		}
		
		if(empty($_POST['dob'])){
			$dobErr = "Day field is required";
			$errorFlag = true;
		}
		
		if(!isset($_POST['gender']) || empty($_POST['gender'])){
			$genderErr = "Gender field is required";
			$errorFlag = true;
		}else{
			$gender = $_POST['gender'];
		}

		if(!$errorFlag){
			$users = json_decode(file_get_contents('users.json'), true);
			
			foreach ($users as $key => $value) {
				if ($value['username'] == $_SESSION['user']['username']) {
					$set = [
						'name' => $_POST['fname'],
						'email' => $_POST['email'],
						'username' => $_SESSION['user']['username'],
						'password' => $_SESSION['user']['password'],
						'gender' => $_POST['gender'],
						'dob'     =>     $_POST["dob"],
						'profilePicPath' => $_SESSION['user']['profilePicPath']
					];
					$_SESSION['user'] = $set;
					if(isset($_COOKIE['user'])){
						setrawcookie('user', base64_encode(json_encode($_SESSION['user'])));
					}
					$users[$key] = $_SESSION['user'];
					file_put_contents('users.json', json_encode($users));
					header('Location: viewPr.php');
				}
			}
		}
	}
	?>


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
						<legend>EDIT PROFILE</legend>
						<form method="post" action="">
								
								<label>Name</label>
								<input type="text" name="fname" value="<?= $_SESSION['user']['name']?>"><span style="color: red;"><?php echo $nameErr ?></span>
								<hr>

								<label>Email:</label>
								<input type="text" name="email" value="<?= $_SESSION['user']['email']?>"><span style="color: red;"><?php echo $emailErr ?></span>
								<hr>

								<label>Gender:</label>
								<input type="radio" name="gender" value="male" id="male" <?= ($_SESSION['user']['gender'] == 'male')? "checked":"" ?>>Male
								<input type="radio" name="gender" value="female" id="female" <?= ($_SESSION['user']['gender'] == 'female')? "checked":"" ?>>Female
								<input type="radio" name="gender" value="others" id="others" <?= ($_SESSION['user']['gender'] == 'others')? "checked":"" ?>>Others
								<br><span style="color: red;"><?php echo $genderErr ?></span>
								<hr>
							
								<label>Date of birth:</label>
								<input type="date" name="dob" value="<?= $_SESSION['user']['dob']?>">
								<br>
								<span style="color: red;"><?php echo $dobErr ?></span>
								<hr>
							<br>

								<input type="submit" name="submit" value="Submit">

						</fieldset>
					</td>
				</tr>
			</table>
		</fieldset>

		<?php include 'footer.php';?>
	</body>
	</html>