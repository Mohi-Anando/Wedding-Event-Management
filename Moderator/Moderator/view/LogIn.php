<!DOCTYPE html>
<html lang="en">
	<head>
		<title></title>
    <style>
        .container{
            background-color:rgba(38, 195, 203, 0.549) ;
            margin-left: 550px;
            margin-top: 250px;
            margin-right: 550px;
            padding: 20px;
            text-align: justify;
        }
        .tb1{
            text-align: left;
        }
		*{
			margin: 0;
			padding: 0;
		}
		body{
			background-image: url('../Image/pp3.jpg');
			background-size: cover;
			background-repeat: no-repeat;
			height: 100vh;
		}
		a{
			text-decoration: none;
		}
   

		.error {color: red;}
	</style>
</head>
<body>
	
<?php include '../controller/LogIn.php';?>


 	<div class="container">
		<form method="post" action="<?php echo ($_SERVER['PHP_SELF']);?>">
			
				<h2>Moderator Log In</h2><br>
                

				<?php
				if($matchError){
					?>
					<span style="color: red;"><?php echo $matchError?></span>	
					<?php
				}
				?>
				<table>
					<tr>
						<td><label>User Name: </label></td>
						<td><input type="text" name="user_name" value="<?php echo $userName;?>"></td>
						<td><span class="error"><?php echo $userName_Err?></span> <br></td>
					</tr>

					<tr>
						<td><label>Password: </label></td>
						<td><input type="password" name="password" value="<?php echo $pass;?>"></td>
						<td><span class="error"><?php echo $pass_Err?></span><br></td>
					</tr>
                    <tr>
                        <p>Registration a acoount?<a href="registation.php">Sign Up!</a></p><br>
                    </tr>
				</table><br>
				
				<input type="checkbox" name="remember_me" value="remembered">Remember me<br><br>
				<input type="submit" name="submission" value="Log In">
               
                
			
		</form>
	
        </div>
	

</body>
</html>

		