<!DOCTYPE html>
<html lang="en">
    <style>
        .container{
            background-image: linear-gradient(to right, rgba(164, 172, 186), rgba(150, 235, 185));
            margin-left: 600px;
            margin-top: 90px;
            margin-right: 550px;
            padding: 25px;
            text-align: justify;
            font-family: Arial;
        }
        .tb2{
            text-align: left;
            
            padding: 3px 20px 50px 10px;
        }
        .red{
            color:red;
        }
        body{
            background-image: url('../Image/pp4.jpg');
            background-size: contain;
			background-repeat: no-repeat;
			height: 100vh;
        }
        
        a{
			text-decoration: none;
		}

    </style>
<head>
    
    <title></title>
</head>
<body>
<?php include '../controller/registation.php';?>



    <div class="container" >
      <h2>Moderator's Registation</h2>
      
      <form method="post" action="<?php echo ($_SERVER['PHP_SELF']);?>">
        <table class="tb2">
            <tr>
                <td>
                    <label for="fname">Name</label>
                </td>
                <td>
                    <input type="text" name="fname" value="<?php echo $name;?>"><span class="red"><?php echo $nameErr ?></span>
                </td>
            </tr>
            <tr>
                <td>
                <label for="email">Email</label>
                </td>
                <td>
                    <input type="text" name="email"value="<?php echo $email;?>"><span class="red"><?php echo $emailErr ?></span>
                </td>
            </tr>
            <tr>
                <td>
                    <labeL for="username">User Name</labeL>
                </td>
                <td>
                    <input type="text" name="user_name" value="<?php echo $userName;?>"><span class="red"><?php echo $userNameErr ?></span>
                </td>
            </tr>
           
            <tr>
                <td>
                    <label for="dob">Date of Birth</label>
                </td>
                <td>
                    <input type="date" id="dob" name="dob"/>
                    <span class="red"><?php echo $dobErr ?></span>
                </td>

            </tr>
            <tr>
                <td>
                    <label for="gender">Gender</label>
                </td>
                <td>
                <input type="radio" name="gender" value="male" id="male">Male
				<input type="radio" name="gender" value="female" id="female">Female
				<input type="radio" name="gender" value="others" id="others">Others
                <span class="red"><?php echo $genderErr ?></span>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="address">Address</label>
                </td>
                <td>
                <input type="text" name="address" value="<?php echo $address;?>"><span class="red"><?php echo $addressErr ?></span>
                </td>
            </tr>
            <tr>
                <td>
                <label for="password">Password</label>
                </td>
                <td>
                    <input type="text" name="password" value=""><span class="red"><?php echo $passErr ?></span>
                </td>
            </tr>
            <tr>
            <td>
                <label for="con_pass">Re-type Password</label>
                </td>
                <td>
                    <input type="text" name="con_pass" value=""><span class="red"><?php echo $con_passErr ?></span>
                </td> 
            </tr>
            <tr>
                <td>
                    <br>
                    <input type="submit" value="Registation" />
                </td>
                <td>
                    <br>
                    <input type="reset" value="Reset" />
                </td>
            </tr>
            
            <p>Already have a account?<a href="LogIn.php">Sign In</a> </p>
        </table>
      </form>  
    </div>
</body>
</html>