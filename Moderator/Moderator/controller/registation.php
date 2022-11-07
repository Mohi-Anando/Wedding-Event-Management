<?php 
	$name = $email = $dob = $address= $gender = $userName = $pass = $con_pass = "";
	$nameErr = $emailErr = $dobErr= $addressErr= $genderErr = $con_passErr = $passErr = $userNameErr = $userExist = "" ;

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
			$userNameErr = "User Name is required";
			$errorFlag = true;
		}else{
			$userName = $_POST['user_name'];
			if (!preg_match("/^[a-zA-z_0-9]*$/", $userName)) {
				$userNameErr = "Only characters, alphabic numeric characters, dash, underscore can be used in username";
				$errorFlag = true;
			}
			else if(strlen($userName) < 2){
				$userNameErr = "Username must contain at least 2 characters";
				$errorFlag = true;
			}
		}

		if (!isset($_POST['password']) || empty($_POST['password'])) {
			$passErr = " *Password is required";
			$errorFlag = true;
		}else{
			$pass = $_POST['password'];

			if (strlen($pass) < 5) {
				$passErr = " *Password must contain at least 5 characters";
				$errorFlag = true;
			}

			$special_pass_check_1 = strpos($pass, "#");
			$special_pass_check_2 = strpos($pass, "%");
			$special_pass_check_3 = strpos($pass, "$");

			if($special_pass_check_1 === FALSE && $special_pass_check_2 === FALSE && $special_pass_check_3 ===  FALSE) {
				$passErr = "Password must contain at least one of  $, #, %";
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
		if(empty($_POST['address'])){
			$addressErr = " *Address field is required";
			$errorFlag = false;
		}else{
			$gender = $_POST['address'];
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
				'address' => $_POST['address'],
				'dob'     => $_POST["dob"]
			];

			if(!file_exists('../data/users.json')){
				@file_put_contents('../data/users.json', '');
			}

			$users = json_decode(file_get_contents('../data/users.json'), true);

			foreach ($users as $key => $value) {
				if($value['email'] == $_POST['email'] || $value['username'] == $_POST['user_name'] ){
					$userExist = "User Already Exist!";
					break;
				}
			}
			if(empty($userExist)){
				$users[] = $set;
				file_put_contents('../data/users.json', json_encode($users));
				header('Location: ../view/login.php');
			}
		}
	}
	?>