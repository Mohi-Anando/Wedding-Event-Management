<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
</head>
<body>
<style>
.error {color: red;}


body {
  background-image:  url('bgf.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}

	</style>
</head>
<body>
	
		<?php
		$userName = $pass = "";
		$userName_Err = $pass_Err = "";
		$matchError = false;

		$errorFlag = false;

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
				
			if (!isset($_POST['user_name']) || empty($_POST['user_name'])) {
				$userName_Err = "*User Name is required";
				$errorFlag = true; 
			}else{
				$userName = $_POST['user_name'];
			}
				
			if (!isset($_POST['password']) || empty($_POST['password'])) {
				$pass_Err = "*Password is required";
				$errorFlag = true;
			}else{
				$pass = $_POST['password'];
			}

			if(!$errorFlag){
				$users = json_decode(file_get_contents('users.json'), true);

				if(is_array($users)){
					$matchError = "User not found";
					foreach ($users as $key => $value) {
						if($value['username'] == $_POST['user_name']){
							if ($_POST['password'] == $value['password']){
								$_SESSION['user'] = $value;
								if(isset($_POST['remember_me']) && $_POST['remember_me'] == 'remembered'){
									setrawcookie('user', base64_encode(json_encode($value)));
								}
								header("Location: welcome.php");
							}else{
								$matchError = "Password does not match";
								break;
							}
						}

					}
			

				}else{
					$matchError = "No users found";

				}
			}

		}
   


		?>
    <form method="post" action="<?php echo ($_SERVER['PHP_SELF']);?>">
   <fieldset>
    <h3>log In </h3>
    
    <label>User Name: </label>
    <input type="text" name="user_name" value="<?php echo $userName;?>">
    <span class="error"><?php echo $userName_Err?></span><br>
    <label>Password: </label>
    <input type="password" name="password" value="<?php echo $pass;?>">
    <span class="error"><?php echo $pass_Err?></span><br>
    <input type="checkbox" name="remember_me" value="remembered">Remember me<br><br><br>
	<input type="submit" name="submission" value="Log In">
    <p>Registration a acoount?<a href="reg.php">Sign Up!</a></p>

    
   </fieldset> 
   </form>
</body>
</html>