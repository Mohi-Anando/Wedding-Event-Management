<!DOCTYPE html>
<html lang="en">
<head>
    
    <title></title>
    <style>
body {
  background-image:  url('bgf.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}</style>
</head>
<body>
    <style>
body {
  background-image:  url('bgf.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}</style>
<?php 
	$name = $email = $dob = $gender = $userName = $pass = $con_pass = "";
	$nameErr = $emailErr = $dobErr= $genderErr = $con_passErr = $passErr = $userNameErr = $userExist = "" ;

	if($_SERVER["REQUEST_METHOD"] == "POST"){

		$errorFlag = false;
		if(!isset($_POST['fname']) || empty($_POST['fname'])){
			$nameErr = "  *Name is required";
			$errorFlag = true;
		}else{
			$name = $_POST['fname'];
			if(!preg_match("/^[a-zA-Z-' ]*$/", $name)){
				$nameErr = "  *Only letters, whitespaces, - and ' are acceptable";
				$errorFlag = true;
			}
			
		}
		if(empty($_POST['email'])){
			$emailErr = " *Email is required";
			$errorFlag = true;
		}else{
			$email = $_POST['email'];
			$email_pattern = "/@gmail.com/i";
			$email_matching_result = preg_match($email_pattern, $email);
			if($email_matching_result == 0){
				$emailErr = " *Email format is not valid";
				$errorFlag = true;
			}
		}

		if (!isset($_POST['user_name']) || empty($_POST['user_name'])) {
			$userNameErr = " *User Name is required";
			$errorFlag = true;
		}else{
			$userName = $_POST['user_name'];
			if (!preg_match("/^[a-zA-z_0-9]*$/", $userName)) {
				$userNameErr = " *Only characters, alphabic 0-9, - , _ can be used in username";
				$errorFlag = true;
			}
			else if(strlen($userName) < 2){
				$userNameErr = " *Username must contain at least 2 characters";
				$errorFlag = true;
			}
		}

		if (!isset($_POST['password']) || empty($_POST['password'])) {
			$passErr = " *Password is required";
			$errorFlag = true;
		}else{
			$pass = $_POST['password'];

			if (strlen($pass) < 3) {
				$passErr = " *Password must contain at least 3 characters";
				$errorFlag = true;
			}
			
		}
		if (!isset($_POST['con_pass']) || empty($_POST['con_pass'])) {
			$con_passErr = " *Password is required";
			$errorFlag = true;
		}else{
			$con_pass = $_POST['con_pass'];
		if($_POST['password'] !== $_POST['con_pass']){
			$con_passErr = " *Confirm Password Doesn't Match!";
			$errorFlag = true;
		}
	}

		if(empty($_POST['dob'])){
			$dobErr = " *Day field is required";
			$errorFlag = true;
		}
		
		if(!isset($_POST['gender']) || empty($_POST['gender'])){
			$genderErr = " *Gender field is required";
			$errorFlag = true;
		}else{
			$gender = $_POST['gender'];
		}

		if(!$errorFlag){
			$set = [
				'name' => $_POST['fname'],
				'email' => $_POST['email'],
				'username' => $_POST['user_name'],
				'password' => $_POST['password'],
				'gender' => $_POST['gender'],
				'dob'     => $_POST["dob"]
			];

			if(!file_exists('users.json')){
				@file_put_contents('users.json', '');
			}

			$users = json_decode(file_get_contents('users.json'), true);

			foreach ($users as $key => $value) {
				if($value['email'] == $_POST['email'] || $value['username'] == $_POST['user_name'] ){
					$userExist = "User Already Exist!";
					break;
				}
			}
			if(empty($userExist)){
				$users[] = $set;
				file_put_contents('users.json', json_encode($users));
				header('Location: login.php');
			}
		}
	}
?>
    <fieldset>
        <form method="post" action="<?php echo ($_SERVER['PHP_SELF']);?>">
            <h2>Registation</h2>
            <label for="fname">Name</label>
            <input type="text" name="fname" value="<?php echo $name;?>"><span class="red"><?php echo $nameErr ?></span><br>
            <label for="email">Email</label>
            <input type="text" name="email"value="<?php echo $email;?>"><span class="red"><?php echo $emailErr ?></span><br>
            <labeL for="username">User Name</labeL>
            <input type="text" name="user_name" value="<?php echo $userName;?>"><span class="red"><?php echo $userNameErr ?></span><br>
            <label for="dob">Date of Birth</label>
            <input type="date" id="dob" name="dob"/>
            <span class="red"><?php echo $dobErr ?></span><br>
            <label for="gender">Gender</label>
            <input type="radio" name="gender" value="male" id="male">Male
				<input type="radio" name="gender" value="female" id="female">Female
				<input type="radio" name="gender" value="others" id="others">Others
                <span class="red"><?php echo $genderErr ?></span><br>
                <label for="password">Password</label>
                <input type="text" name="password" value=""><span class="red"><?php echo $passErr ?></span><br>
                <label for="con_pass">Re-type Password</label>
                <input type="text" name="con_pass" value=""><span class="red"><?php echo $con_passErr ?></span>
                <br><br>
                    <input type="submit" value="Registation" />
                    <p>Already have a account?<a href="LogIn.php">Sign In</a> </p>

             

        </form>
    </fieldset>
</body>
</html>