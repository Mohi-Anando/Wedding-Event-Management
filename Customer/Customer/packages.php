<!DOCTYPE html>
<html lang="en">
<head>
   
    <title></title>
  
</head>

</head>
<body>
<?php include 'logtop.php';?>
    <?php
        include 'logintop.php';
    ?>

<fieldset>
		<table border="1" width="25%">
			<tr>
				<td width="25%"><b>
				Product's Menu<hr><br>
								<li><a href="package_details.php">Details</a></li>
                                
						<form method="POST" action="logout.php">
							<li><button type="submit" name="logout_btn">Log out</button></li>
						</form>
            </tr>
				</td></fieldset></table>

<?php
        include 'footer.php'
    ?>
</body>
</html>

