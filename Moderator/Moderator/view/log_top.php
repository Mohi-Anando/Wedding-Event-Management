<!DOCTYPE html>
<html lang="en">
<head>
    <style>
       .home{
        display: inline-block;
        
        font-weight: 500px;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
       }
       div{
        padding: 20px;
       }
       a{
            text-decoration: none;
       }
       div a:hover{
        background: skyblue;
        color:black;
       }

    </style>
    
    <title></title>
</head>
<body>
<?php include '../controller/log_top.php';?>



        <div style="background-color:#81ecec ;">
                <img src="../image/logo.png" alt="#" height="120px" width="200px">
                <span class="home"><a href="welcome.php">Home  &nbsp;&nbsp;</a></span>
                <span class="home"><a href="packages.php">Packages &nbsp; &nbsp;</a></span>
                <span class="home"><a href="contract.php">Contract &nbsp; &nbsp;</a></span>
                <span class="home"><a href="dashboardM.php">My Account &nbsp; &nbsp;</a></span>
                <span class="home">Moderator as a <?= $_SESSION['user']['name']?></span>
                <form method="POST" action="../controller/logout.php">
			<center><button type="submit" name="logout_btn" style="float:right;">Log out</button></center>
		</form>
        </div>
    
</body>
</html>