<?php
	
	$curr_pass = $new_pass = $re_new_pass = "";
	$curr_pass_Err = $new_pass_Err = $re_new_pass_Err = $pass_mismatch_Err = $same_prev_pass_Err = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		$errorFlag = false;

		if (!isset($_POST['curr_pass']) || empty($_POST['curr_pass'])) {
			$curr_pass_Err = "Field can not be empty";
			$errorFlag = true;
		}
		else{
			$curr_pass = $_POST['curr_pass'];	
		}

		if (!isset($_POST['new_pass']) || empty($_POST['new_pass'])) {
			$new_pass_Err = "Field can not be empty";
			$errorFlag = true;
		}
		else{
			$new_pass = $_POST['new_pass'];
		}
	
		if (!isset($_POST['re_new_pass']) || empty($_POST['re_new_pass'])) {
			$re_new_pass_Err = "Field can not be empty";
			$errorFlag = true;
		}
		else{
			$re_new_pass = $_POST['re_new_pass'];
		}
		if (!$errorFlag) {
			$users = json_decode(file_get_contents('../data/users.json'),true);

			foreach ($users as $key => $value) {
				if ($value['username'] ==  $_SESSION['user']['username']){

					$set = [
						'name' => $_SESSION['user']['name'],
						'email' => $_SESSION['user']['email'],
						'username' => $_SESSION['user']['username'],
						'password' => $new_pass,
						'gender' => $_SESSION['user']['gender'],
						'dob' => $_SESSION['user']['dob'],
						'profilePicPath' => $_SESSION['user']['profilePicPath']
					];
					$_SESSION['user'] = $set;
					if(isset($_COOKIE['user'])){
						setrawcookie('user', base64_encode(json_encode($_SESSION['user'])));
					}
					$users[$key] = $_SESSION['user'];
					file_put_contents('../data/users.json', json_encode($users));

					header('Location: ../view/view_profile.php');
					break;
				}
			}
		}
	}
	?>