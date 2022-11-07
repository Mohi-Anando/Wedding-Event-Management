<!DOCTYPE html>
<html lang="en">
<head>
   
    <title></title>
    <style>
		a:hover{

		background: yellow;

		color:black;

}

	</style>
  
</head>

</head>
<body>
<?php include 'log_top.php';?>
    <?php
        include 'inside_header.php';
    ?>

<fieldset>
		<table >
			<tr>
				<td width="25%"><b><h3>
				Product's Menu<hr><br></h3>
                <h4>
								<li><a href="addEdit.php">Add Packages</a></li>
								<li><a href="package_details.php">Details</a></li><br>
                                
						<form method="POST" action="../controller/logout.php">
							<button type="submit" name="logout_btn">Log out</button></h4>
						</form>
            </tr>
				</td></fieldset></table>

<?php
        include 'footer.php'
    ?>
</body>
</html>

